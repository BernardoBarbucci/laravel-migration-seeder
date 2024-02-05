<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    public function run(Faker $faker): void
    {


        for ($i = 0; $i < 100; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code =  $faker->regexify('[A-Z]{10}[0-9]{8}');
            $newTrain->carriages_number = $faker->numberBetween(5, 15);
            $newTrain->on_time = $faker->boolean(30);
            $newTrain->canceled = $faker->boolean(15);
            $newTrain->save();
        }
    }
}
