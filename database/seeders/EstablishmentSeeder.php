<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Model\Establishments;

class EstablishmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $json = File::get('database/data/establishmentData.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            Store::create(array(
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
