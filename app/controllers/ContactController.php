<?php
/**
 * Created by PhpStorm.
 * User: anuj
 * Date: 1/30/14
 * Time: 11:35 PM
 */

class ContactController extends BaseController
{

    public function postIndex()
    {
        $enquiry_type = Input::get('enquiry_type');
        $name = Input::get("name");
        $company = Input::get("company");
        $email = Input::get("email");
        $phone = Input::get("phone");
        $city = Input::get("city");
        $state = Input::get("state");
        $pin_code = Input::get("pin_code");

        $data = array(
            'enquiry_type' => $enquiry_type,
            'name' => $name,
            'company' => $company,
            'email' => $email,
            'phone' => $phone,
            'city' => $city,
            'state' => $state,
            'pin_code' => $pin_code
        );


        AppUtil::sendContactNotificationEmail($data);

        return Redirect::to("");

    }

} 