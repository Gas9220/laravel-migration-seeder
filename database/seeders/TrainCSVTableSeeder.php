<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class TrainCSVTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file_stream = __DIR__ . '/csv/trains.csv';

        $labels = [];

        $row = 1;
        if (($handle = fopen($file_stream, "r")) !== FALSE) {

            while (($data = fgetcsv($handle)) !== FALSE) {

                if ($row === 1) {
                    foreach ($data as $label) {
                        $labels[] = $label;
                    }
                } else {
                    $newTrain = new Train();

                    foreach ($data as $key => $value) {
                        $newTrain[$labels[$key]] = $value;
                    }

                    $newTrain->save();
                }
                print("Cambio treno\n");
                $row++;
            }

            fclose($handle);
        }
    }
}
