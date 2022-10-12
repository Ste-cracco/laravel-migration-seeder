<?php

use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $trains [
            [
                'azienda' => 'Pinco',
                'stazione_partenza' => 'Milano',
                'stazione_arrivo' => 'Bologna',
                'orario_partenza' => '09:00',
                'orario_arrivo' => '11:30',
                'numero_carrozze' => 2,
                'in_orario' => rand(0,1),
                'cancellato' => rand(0,1)
            ]
        ];

        foreach($trains as $train) {
            $newTrain = new Train();
            $newTrain->azienda = $train['azienda'];
            $newTrain->stazione_partenza = $train['stazione_partenza'];
            $newTrain->stazione_arrivo = $train['stazione_arrivo'];
            $newTrain->orario_partenza = $train['orario_partenza'];
            $newTrain->orario_arrivo = $train['orario_arrivo'];
            $newTrain->numero_carrozze = $train['numero_carrozze'];
            $newTrain->in_orario = $train['in_orario'];
            $newTrain->cancellato = $train['cancellato'];

            $newTrain -> save();
        }

    }
}
