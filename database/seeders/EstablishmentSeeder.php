<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Establishments;

class EstablishmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $json = file_get_contents("database/data/establishmentData.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Establishments::create(array(
                'name' => $obj->name,
                'type' => $obj->type,
                'phone' => $obj->phone,
                'photo' => $obj->photo,
                'openAt' => $obj->openAt,
                'closeAt' => $obj->closeAt
            ));
        }

    }
}
