<?php
/**
 * Created by PhpStorm.
 * User: anuj
 * Date: 1/29/14
 * Time: 5:24 PM
 */

class TestController extends BaseController
{

    function getSend()
    {
        $data = array(
            'name' => "anuj",
            'phone' => "1234656",
            'email' => "anuj@gas.com",
            'story' => "My story"
        );

        AppUtil::sendNotificationEmail($data);
    }

} 