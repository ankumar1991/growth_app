<?php
/**
 * Created by PhpStorm.
 * User: anuj
 * Date: 1/25/14
 * Time: 5:49 PM
 */

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $data = array(
            'name' => 'test',
            'email' => 'test@test.com',
            'phone' => '1234567802',
            'story' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id rhoncus lorem, sed congue libero. Nulla feugiat luctus ullamcorper. Aliquam erat volutpat. Sed bibendum bibendum purus, eu rhoncus nibh lacinia nec. Etiam pellentesque elit id cursus ultricies. Suspendisse potenti. Quisque ultricies sit amet tortor ut euismod. In faucibus ullamcorper scelerisque. Proin tempus a massa rutrum porttitor. Nullam ac faucibus enim. Nam faucibus suscipit ultrices. Proin venenatis sit amet felis et sagittis',
        );
        DB::table('users')->insert($data);
    }

} 