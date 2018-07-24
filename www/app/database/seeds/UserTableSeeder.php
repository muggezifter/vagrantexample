<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory;

class UserTableSeeder extends Seeder {

    public function run()
    {
        User::truncate();

        $faker = Factory::create();

        User::create(array(
            'name' => 'muggezifter',
            'firstname' => 'Gert',
            'lastname' => 'Rietveld',
            'email' => 'muggezifter@gmal.com'
        ));

        for($i=0; $i < 99; $i++) {
		    User::create(array(
                'name' => $faker->username(),
                'firstname' => $faker->firstName(),
                'lastname' => $faker->lastName(),
                'email' => $faker->email()
            ));
		}
    }

}