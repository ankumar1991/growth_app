<?php
/**
 * Created by PhpStorm.
 * User: anuj
 * Date: 1/25/14
 * Time: 1:31 PM
 */

class DashboardController extends BaseController
{


    function __construct()
    {
        $this->user = new User();
        $this->image = new Image();
        $this->beforeFilter('auth');
    }

    public function getIndex()
    {
        $users = $this->user->getUsers(null, 10);
        $data['users'] = AppUtil::returnResults($users);

        return View::make('admin.dashboard', $data);
    }

    public function getDownloadCsv()
    {

        $users = $this->user->getUsers(null, null);

        $header = "Name,Email,Mobile,Story,Created At\r\n";
        $string = "";
        $string = $string . $header;
        if (!empty($users)) {
            foreach ($users as $row) {
                if (isset($row->name)) {
                    $string = $string . "\"$row->name\"" . ",";
                }
                if (isset($row->email)) {
                    $string = $string . "\"$row->email\"" . ",";
                }
                if (isset($row->phone)) {
                    $string = $string . "\"$row->phone\"" . ",";
                }
                if (isset($row->story)) {
                    $string = $string . "\"$row->story\"" . ",";
                }

                if (isset($row->created_at)) {
                    $created_at = date("Y-m-d", strtotime($row->created_at));
                    $string = $string . "\"$created_at\"" . "\r\n";
                }
            }

        }
        $filename = "Records.csv";

        //header for creation of csv
        header("Content-type: application/octet-stream");
        header("Content-Disposition: attachment; filename=$filename");
        header("Pragma: no-cache");
        header("Expires: 0");
        print $string;
    }

    public function getEdit($user_id)
    {
        $data['user'] = $this->user->getUser($user_id);
        $data['current_image'] = $this->image->getCurrentImage($user_id);
        $data['old_image'] = $this->image->getOldImage($user_id);
        return View::make('admin.edit', $data);
    }

    public function postEdit($user_id)
    {
        $name = Input::get('name');
        $email = Input::get('email');
        $phone = Input::get('phone');
        $story = Input::get('story');
        $current_image = Input::file('current_image');
        $old_image = Input::file('old_image');

        $this->user->updateUser($user_id, $name, $email, $phone, $story);

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

        return Redirect::to('dashboard/edit/' . $user_id);
    }

    public function getDeleteImage($user_id, $image_id)
    {
        $image = Image::find($image_id);
        $path = $image->path;
        unlink(public_path() . '/' . $path);
        $this->image->deleteImage($image_id);
        return Redirect::to("dashboard/edit/$user_id");
    }

    public function getDeleteUser($user_id)
    {
        $this->user->deleteUser($user_id);
        return Redirect::to('dashboard');
    }

    public function getState($state, $user_id)
    {
        if ($state == "enable") {
            $this->user->enableUser($user_id);
        } else if ($state == "disable") {
            $this->user->disableUser($user_id);
        }

        return Redirect::to('dashboard');
    }
}
