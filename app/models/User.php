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

    public function getUsers($active, $paginate)
    {
        try {

            $query = User::query();

            if (AppUtil::checkDbNotNullValue($active)) {
                $query->where("is_active", '=', $active);

            } elseif (AppUtil::checkDbNullValue($active)) {
                $query->whereNull("is_active", '=', $active);
            }

            if (!is_null($paginate)) {
                return $query->paginate($paginate);
            }

            return $query->get();

        } catch (Exception $ex) {
            Log::error($ex);
            throw $ex;
        }
    }

    public function getUser($id)
    {
        try {

            return User::with('images')->where('id', '=', $id)->first();

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