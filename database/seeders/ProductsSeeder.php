<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $json = file_get_contents('database/data/productsData.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            Products::create(array(
                'name' => $obj->name,
                'description' => $obj->description,
                'stock' => $obj->stock,
                'price' => $obj->price,
                'photo' => $obj->photo,
                'link' => $obj->link,
                'establishment_id' => $obj->establishment_id
            ));
        }
    }
}
