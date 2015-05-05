<?php

use Illuminate\Database\Seeder;
use App\ec\entities\Person;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class PersonsTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        Person::create([
        	
        	//"id" => "1",
        	"name" => "Juan",
        	"identi" => "12345",
        	"age" => 40,
        	"photourl" => "",
        	"email" => "barcodepandora@gmail.com",
        ]);
        Person::create([
        	
        	//"id" => "1",
        	"name" => "Paula",
        	"identi" => "12347",
        	"age" => 20,
        	"photourl" => "",
        	"email" => "paula.alvarez@icdl.com"
        ]);

    }

}