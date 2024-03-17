<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i=0; $i< 20; $i++){
            $newTrain = new Train();
            $newTrain->azienda = $faker->randomElement(['Trenitalia', 'Italo']);
            $newTrain->stazione_partenza = $faker->city;
            $newTrain->stazione_arrivo = $faker->city;
            $newTrain->orario_partenza = $faker->time('H:i:s');
            $newTrain->orario_arrivo = $faker->time('H:i:s');
            $newTrain->codice_treno = $faker->unique()->ean13;
            $newTrain->numero_carrozze = $faker->numberBetween(1, 12);
            $newTrain->in_orario = $faker->boolean;
            $newTrain->cancellato = $faker->boolean;
            $newTrain->save();
        }
    }
}
