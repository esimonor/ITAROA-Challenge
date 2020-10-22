<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Model\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $json = File::get('database/data/productsData.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            Product::create(array(
                'name' => $obj->name,
                'description' => $obj->description,
                'stock' => $obj->stock,
                'price' => $obj->price,
                'photo' => $obj->photo,
                'link' => $obj->link,
                'store_id' => $obj->store_id
            ));
        }
    }
}
