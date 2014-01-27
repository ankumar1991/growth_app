<?php
/**
 * Created by PhpStorm.
 * User: anuj
 * Date: 1/25/14
 * Time: 4:52 PM
 */

class AdminController extends BaseController
{

    public function getLogin()
    {
        return View::make('admin.login');
    }

    public function postLogin()
    {
        $email = Input::get('username');
        $password = Input::get('password');
        $credentials = array('username' => $email, 'password' => $password);

        if (Auth::attempt($credentials)) {
            return Redirect::to('dashboard');
        } else {
            return Redirect::to('admin/login')->with('login_errors', 'The Email or Password you have entered is invalid.');
        }
    }

    public function getLogOut()
    {
        Auth::logout();
        return Redirect::to('admin/login');
    }

} 