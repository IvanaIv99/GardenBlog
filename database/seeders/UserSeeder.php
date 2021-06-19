<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;

class UserSeeder extends Seeder
{

    public function run()
    {


        $faker = Faker::create();

        for($i = 1; $i <= 10; $i++) {

            $gender=$faker->randomElement(['male', 'female']);

            User::create([
                'first_name'=>$faker->firstName($gender),
                'last_name'=>$faker->lastName,
                'email' => $faker->email,
                'password' => md5('sifra123'),
                'gender'=>$gender,
                'photo' => $gender=='female' ? 'female_thumbnail.png' : 'male_thumbnail.png',
                'bio' => 'Hello my name is' . $faker->firstName . '.Nice to meed you.',
                'role_id'=>1

            ]);


        }
    }
}
