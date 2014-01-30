<?php

class ContestController extends BaseController
{

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */


    function __construct()
    {
        $this->user = new User();
        $this->image = new Image();
    }

    public function getIndex()
    {
        try {

            $users = $this->user->getUsers(1, null,3);
            $data['users'] = $users->count() != 0 ? $users : null;

            return View::make("home", $data);


        } catch (Exception $ex) {
            Log::error($ex);
            throw $ex;
        }

    }

    public function getUserDetail($user_id)
    {
        try {

            $data['user'] = $this->user->getUser($user_id, null, null);
            $data['current_image']=$this->image->getCurrentImage($user_id);
            $data['old_image']=$this->image->getOldImage($user_id);
            return View::make('user_detail', $data);

        } catch (Exception $ex) {
            Log::error($ex);
            throw $ex;
        }

    }

    public function getUsersList()
    {
        try {

            $users = $this->user->getUsers(1, null, null);
            $data['users'] = $users->count() != 0 ? $users : null;
            return View::make('users_list', $data);

        } catch (Exception $ex) {
            Log::error($ex);
            throw $ex;
        }

    }

    public function getUserInfo()
    {
        return View::make("user_info");
    }

    public function postUserInfo()
    {

        try {

            $data = Input::all();
            $rules = array(
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'numeric',
                'story' => 'required',
                'current_image' => 'required|mimes:jpeg,jpg,png',
                'old_image' => 'required|mimes:jpeg,jpg,png'
            );

            $validation = Validator::make($data, $rules);
            if ($validation->passes()) {

                $name = Input::get('name');
                $email = Input::get('email');
                $phone = Input::get('phone');
                $story = Input::get('story');
                $current_image = Input::file('current_image');
                $old_image = Input::file('old_image');

                $user_phone = $this->user->getUser(null, $phone, null);
                $user_email = $this->user->getUser(null, null, $email);

                //if user exist redirect
                if (!is_null($user_phone) || !is_null($user_email)) {
                    return Redirect::to('home/fail');
                }

                $user = $this->user->createUser($name, $email, $phone, $story);
                $user_id = $user->id;

                if (Input::hasFile('current_image')) {

                    $file_name = AppUtil::moveImage($current_image, "current");
                    $current_image_path = 'uploads/current/' . $file_name;
                    $this->image->createImage($user_id, $current_image_path, "current");
                }

                if (Input::hasFile('old_image')) {

                    $file_name = AppUtil::moveImage($old_image, "old");
                    $old_image_path = 'uploads/old/' . $file_name;
                    $this->image->createImage($user_id, $old_image_path, "old");
                }


                $data = array(
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'story' => $story
                );
                AppUtil::sendNotificationEmail($data);
                return Redirect::to('home/thank-you');

            } else {

                return Redirect::to('home/user-info')->withErrors($validation)->withInput();
            }

        } catch (Exception $ex) {
            Log::error($ex);
            throw $ex;
        }


    }

    public function getThankYou()
    {
        return View::make('thank_you');
    }

    public function getFail()
    {
        return View::make('fail');
    }
}