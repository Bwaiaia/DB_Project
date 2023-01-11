<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Village;

class VillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

			
			
			['island_id'=>1,'village_name'=>'Kabangaki'],
			['island_id'=>1,'village_name'=>'Kariatebike'],
			['island_id'=>1,'village_name'=>'Baretoa'],
			['island_id'=>2,'village_name'=>'Ukiangang'],
			['island_id'=>2,'village_name'=>'Kuma'],
			['island_id'=>2,'village_name'=>'Bikaati'],
            ['island_id'=>3,'village_name'=>'Tamaroa'],
			['island_id'=>3,'village_name'=>'Roreti'],
			['island_id'=>4,'village_name'=>'Bubutei'],
			['island_id'=>4,'village_name'=>'Tekaranga'],
			['island_id'=>4,'village_name'=>'Tebangitua'],
			['island_id'=>4,'village_name'=>'Aoniman'],
            ['island_id'=>5,'village_name'=>'Taburao'],
			['island_id'=>5,'village_name'=>'Ewena'],
			['island_id'=>5,'village_name'=>'Turabu'],
			['island_id'=>6,'village_name'=>'Tewai'],
			['island_id'=>6,'village_name'=>'Taku'],
			['island_id'=>6,'village_name'=>'Taungaeaka'],
           
		

			
			

        ] ;
        foreach ($data as $obj)
        {
            Village::create($obj);
        }
    }
}
