<?php
/**
 * Created by PhpStorm.
 * User: anuj
 * Date: 1/25/14
 * Time: 3:11 PM
 */

class AppUtil
{

    public static function checkDbNotNullValue($var)
    {
        return !is_null($var) && $var != Constants::NULL_VALUE;
    }

    public static function checkDbNullValue($var)
    {
        return !is_null($var) && $var == Constants::NULL_VALUE;
    }

    public static function returnResults($data)
    {
        if ($data->count() != 0) {
            return $data;
        } else {
            return null;
        }
    }

    public static function moveImage($image, $status)
    {
        $extension = $image->getClientOriginalExtension();
        $filename = $image->getClientOriginalName();

        $random_string = str_random(10);
        $filename = str_replace("." . $extension, $random_string, $filename) . "." . $extension;

        if ($status == 'current') {
            $path = public_path() . '/uploads/current';
            $image->move($path, $filename);
            return $filename;
        }

        if ($status = "old") {
            $path = public_path() . '/uploads/old';
            $image->move($path, $filename);
            return $filename;
        }
    }

    public function sendNotificationEmail($data)
    {
        Mail::send('emails.welcome', $data, function ($message) {

            $message->from('test@test.com');
            $message->to('ankumar@greenapplesolutions.com')->subject("A new user has registered in Bilt Contest.");

        });
    }

} 