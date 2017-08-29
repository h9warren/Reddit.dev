<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $users = array(
            array(
                "name"=>"Charley",
                "email"=>"charley@charles.com",
                "password"=>"charles"
                ),
            array(
                "name"=>"Johnny",
                "email"=>"johnny@johnny.com",
                "password"=>"johnny"
                ),
            array(
                "name"=>"Billy",
                "email"=>"billy@billy.com",
                "password"=>"billy"
                ),
            array(
                "name"=>"Rudolph",
                "email"=>"rudolph@rudolph.com",
                "password"=>"rudolph"
                ),
            array(
                "name"=>"Tomassi",
                "email"=>"tomassi@tomassi.com",
                "password"=>"tomassi"
                ),
            array(
                "name"=>"Deirdre",
                "email"=>"deirdre@deirdre.com",
                "password"=>"deirdre"
                ),
            array(
                "name"=>"Snowman",
                "email"=>"snowman@snowman.com",
                "password"=>"snowman"
                ),
            array(
                "name"=>"Warhammer",
                "email"=>"warhammer@warmy.com",
                "password"=>"warhammer"
                ),
            array(
                "name"=>"Cody Codeup",
                "email"=>"coding@cody.com",
                "password"=>"code"
                ),
            array(
                "name"=>"Montana",
                "email"=>"monte@montana.com",
                "password"=>"montana"
                )
       );

       foreach($users as $user=>$info) {
            
            $name = $info['name'];
            $name = new App\User();
            $name->name = $info['name'];
            $name->email = $info['email'];
            $name->password = password_hash(($info['password']), PASSWORD_DEFAULT);
            
       }

    }
}
