<?php
/**
 * Created by PhpStorm.
 * User: anuj
 * Date: 1/25/14
 * Time: 1:33 PM
 */

class Image extends Eloquent
{

    public function User()
    {
        return $this->belongsTo('user');
    }

    public function createImage($user_id, $path, $status)
    {
        try {

            $image = new Image();
            $image->path = $path;
            $image->user_id = $user_id;
            $image->status = $status;
            $image->save();

            return $image;

        } catch (Exception $ex) {
            Log::error($ex);
            throw $ex;
        }
    }

    public function deleteImage($id)
    {
        try {

            Image::find($id)->delete();

        } catch (Exception $ex) {
            Log::error($ex);
            throw $ex;
        }
    }

    public function getCurrentImage($user_id)
    {
        try {

            $image = Image::where('user_id', '=', $user_id)->where('status', '=', 'current')->first();
            return isset($image) ? $image : null;

        } catch (Exception $ex) {
            Log::error($ex);
            throw $ex;
        }
    }

    public function getOldImage($user_id)
    {
        try {
            $image = Image::where('user_id', '=', $user_id)->where('status', '=', 'old')->first();
            return isset($image) ? $image : null;

        } catch (Exception $ex) {
            Log::error($ex);
            throw $ex;
        }
    }


}