<?php

class HomeController extends BaseController
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

    }

    public function getUserDetail()
    {
        return View::make('user_details');
    }

    public function getUsersList()
    {
        return View::make('users_list');
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

}