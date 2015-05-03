<?php

use Illuminate\Database\Seeder;
use App\ec\entities\Person;
use App\ec\entities\Language;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class LanguagesTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        Language::create([
        	
        	//"id" => "1",
        	"name" => "Español",
        ]);
        Language::create([
        	
        	//"id" => "1",
        	"name" => "English",
        ]);

		$persons = Person::all();
		foreach( $persons as $person ) {
		
			$person->languages()->attach(2, ['level' => 10]);
		}
    }

}