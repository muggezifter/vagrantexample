<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'name' => 'muggezifter',
            'firstname' => 'Gert',
            'lastname' => 'Rietveld',
            'email' => 'muggezifter@gmal.com'
        ));
    }

}