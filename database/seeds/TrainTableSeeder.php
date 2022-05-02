<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) {

            $train = new Train();

            $departure = $faker->dateTimeBetween('-1 week', '+1 week');

            $train->company = $faker->company();
            $train->start_place = $faker->city();
            $train->stop_place = $faker->city();
            $train->start_time = $departure;
            $train->stop_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->identification_number = $faker->bothify('REG-#####');
            $train->length = $faker->numberBetween(5, 15);
            $train->delay = $faker->boolean();

            $train->save();
        }
    }
}
