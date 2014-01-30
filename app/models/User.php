<?php


class User extends Eloquent
{

    protected $softDelete = true;

    public function images()
    {
        return $this->hasMany('image');
    }

    public function createUser($name, $email, $phone, $story)
    {
        try {

            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->phone = $phone;
            $user->story = $story;
            $user->save();

            return $user;

        } catch (Exception $ex) {
            Log::error($ex);
            throw $ex;
        }
    }

    public function getUsers($active, $paginate, $limit)
    {
        try {

            $query = User::with('images');

            if (AppUtil::checkDbNotNullValue($active)) {
                $query->where("is_active", '=', $active);

            } elseif (AppUtil::checkDbNullValue($active)) {
                $query->whereNull("is_active", '=', $active);
            }

            if (!is_null($paginate)) {
                return $query->orderBy('created_at', 'desc')->paginate($paginate);
            }

            if (!is_null($limit)) {
                return $query->orderBy('created_at', 'desc')->limit($limit)->get();
            }

            return $query->orderBy('created_at', 'desc')->get();

        } catch (Exception $ex) {
            Log::error($ex);
            throw $ex;
        }
    }

    public function getUser($id, $phone, $email)
    {
        try {

            $query = User::with('images');
            if (AppUtil::checkDbNotNullValue($id)) {
                $query->where('id', '=', $id);

            } elseif (AppUtil::checkDbNullValue($id)) {
                $query->whereNull('id', '=', $id);
            }

            if (AppUtil::checkDbNotNullValue($phone)) {
                $query->where('phone', '=', $phone);

            } elseif (AppUtil::checkDbNullValue($phone)) {
                $query->whereNull('phone', '=', $phone);
            }

            if (AppUtil::checkDbNotNullValue($email)) {
                $query->where('email', '=', $email);

            } elseif (AppUtil::checkDbNullValue($email)) {
                $query->whereNull('email', '=', $email);
            }

            $user = $query->first();
            return isset($user) ? $user : null;

        } catch (Exception $ex) {
            Log::error($ex);
            throw $ex;
        }
    }

    public function updateUser($id, $name, $email, $phone, $story)
    {
        try {

            $user = User::find($id);
            $user->name = $name;
            $user->email = $email;
            $user->phone = $phone;
            $user->story = $story;
            $user->save();

        } catch (Exception $ex) {
            Log::error($ex);
            throw $ex;
        }
    }

    public function deleteUser($id)
    {
        try {

            User::find($id)->delete();

        } catch (Exception $ex) {
            Log::error($ex);
            throw $ex;
        }
    }

    public function enableUser($user_id)
    {
        $user = User::find($user_id);
        $user->is_active = true;
        $user->save();

    }

    public function disableUser($user_id)
    {
        $user = User::find($user_id);
        $user->is_active = false;
        $user->save();
    }
}