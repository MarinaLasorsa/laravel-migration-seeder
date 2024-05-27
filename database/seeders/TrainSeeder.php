<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        $train_companies = ['trenitalia', 'trenord', 'italo'];

        for ($i = 0; $i < 100; $i++) {
            $new_train = new Train();
            $new_train->company = $faker->randomElement($train_companies);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $new_train->arrival_time = $faker->dateTimeInInterval($new_train->departure_time, '+1 day');
            $new_train->code = $faker->unique()->randomNumber(4, true);
            $new_train->number_of_carriages = $faker->randomDigitNotNull();
            $new_train->on_time = $faker->boolean();
            if ($new_train->on_time) {
                $new_train->cancelled = false;
            } else {
                $new_train->cancelled = $faker->boolean();
            }
            $new_train->save();
            //dump($new_train);
        };
    }
}
