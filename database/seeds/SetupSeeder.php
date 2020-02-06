<?php

use App\User;
use App\Session;
use App\Evenement;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        if (!User::where('email', 'email@test.net')->first()) {

            $u = new User;
            $u->name = $faker->name;
            $u->email = 'email@email.net';
            $u->password = Hash::make('123456789');
            $u->save();
        }

        for ($i = 0; $i < 14; $i++) {
            $e = new Evenement;
            $e->user_id = 1;
            $e->name = $faker->sentences($nbWords = 1, $variableNbWords = true);
            $e->description = $faker->paragraph($nbSentences = 7, $variableNbSentences = true);
            $e->location = $faker->address;
            $e->save();

            for ($j = 0; $j < 4; $j++) {
                $s = new Session;
                $s->evenement_id = $e->id;
                $s->name = $faker->sentences($nbWords = 4, $variableNbWords = true);
                $s->start_at = $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 month', $timezone = null);
                $s->end_at = $faker->dateTimeBetween($startDate = '+1 month', $endDate = '+2 month', $timezone = null);
                $s->save();
            }
        }
    }
}
