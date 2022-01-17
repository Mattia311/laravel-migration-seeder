<?php
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Models\Travel;
class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for ($i = 0; $i < 20; $i++) {
            $_travel = new Travel();
            $_travel->destinazione = $faker->destinazione();
            $_travel->descrizione = $faker->descrizione();
            $_travel->passeggeri = $faker->numberBetween(3, 5);
            $_travel->partenza = $faker->partenza("2021/07/03");
            $_travel->ritorno = $faker->partenza("2021/07/17");
            $_travel->prezzo = $faker->numberBetween(100, 370);
            $_travel->save();
      
        

        /*$travels = [
            [
                'destinazione' => 'parigi',
                'descrizione' => 'brutto',
                'passeggeri' => 5,
                'partenza' => "2021/07/03",
                'ritorno' => "2021/07/17",
                'prezzo' => 200,
                
            ],
            [
                'destinazione' => 'ny',
                'descrizione' => 'pessimo',
                'passeggeri' => 6,
                'partenza' => "2021/07/03",
                'ritorno' => "2021/07/17",
                'prezzo' => 200,
                
            ],
            [
                'destinazione' => 'mi',
                'descrizione' => 'carino',
                'passeggeri' => 7,
                'partenza' => "2021/07/03",
                'ritorno' => "2021/07/17",
                'prezzo' => 200,
                
            ],
            [
                'destinazione' => 'lv',
                'descrizione' => 'perfetto',
                'passeggeri' => 8,
                'partenza' => "2021/07/03",
                'ritorno' => "2021/07/17",
                'prezzo' => 200,
                
            ],

            ];

        foreach ($travels as $travel) {
            $_travel = new Travel();
            $_travel->destinazione = $travel['destinazione'];
            $_travel->descrizione = $travel['descrizione'];
            $_travel->passeggeri = $travel['passeggeri'];
            $_travel->partenza = $travel['partenza'];
            $_travel->ritorno = $travel['ritorno'];
            $_travel->prezzo = $travel['prezzo'];
            $_travel->save();
        }*/




        /*$newPacchetto_viaggio = new Travel();
        $newPacchetto_viaggio->destinazione = "Ibiza";
        $newPacchetto_viaggio->descrizione = "viaggio della speranza";
        $newPacchetto_viaggio->passeggeri = 5 ;
        $newPacchetto_viaggio->partenza = "2021/07/03";
        $newPacchetto_viaggio->ritorno = "2021/07/17";
        $newPacchetto_viaggio->prezzo = 2526.3;
        $newPacchetto_viaggio -> save();*/
    }
}
