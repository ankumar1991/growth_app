<?php
/**
 * Created by PhpStorm.
 * User: anuj
 * Date: 1/25/14
 * Time: 5:04 PM
 */

class AuthTableSeeder extends Seeder
{

    public function run()
    {
        $data = array(
            'username' => 'admin@admin.com',
            'password' => Hash::make("password")
        );

        DB::table('auth')->insert($data);
    }

} 