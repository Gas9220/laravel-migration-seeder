<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i <= 50; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->randomElement(['Trenitalia', 'Trenord', 'Italcertifer', 'Italferr', 'Grandi Stazioni Rail']);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeInInterval('-5 years', '+5 years');
            $newTrain->arrival_time = $faker->dateTimeInInterval('-5 years', '+5 years');
            $newTrain->train_code = $faker->lexify('??????????');
            $newTrain->wagons = $faker->numberBetween(2, 50);
            $newTrain->in_time = $faker->numberBetween(0, 1);
            $newTrain->cancelled = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
