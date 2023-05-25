<?php

namespace Database\Seeders;

use App\Models\Trains;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $train = new Trains();
            $train->Azienda = $faker->word();
            $train->Stazione_di_partenza = $faker->city();
            $train->Stazione_di_arrivo = $faker->city();
            $train->Data_del_viaggio = $faker->date();
            $train->Orario_di_partenza = $faker->time();
            $train->Orario_di_arrivo = $faker->time();
            $train->Codice_treno = $faker->randomNumber(6, true);
            $train->Numero_carrozze = $faker->numberBetween(30, 70);
            $train->In_orario = $faker->boolean();
            $train->Cancellato = $faker->boolean();
            $train->save();
        }
    }
}
