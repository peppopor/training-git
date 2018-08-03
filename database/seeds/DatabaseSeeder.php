<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
          $cities = array("bangkok", "nakornpathom");

          for($i=1; $i<=100; $i++) {
          DB::table('shops')->insert([
                'user_id'   => $i,
                'name'      => 'ShopID:'.$i.'-UserID:'.$i,
                'desc'      => 'desc',
           ]);
          }

    }

}
