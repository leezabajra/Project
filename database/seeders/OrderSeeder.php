<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'medicine_id'=>'anti1',
                'medicine_name'=>'amoxcillion',
                'medicine_price'=>'350',
                'medicine_qty'=>'3',
                
            ],
            [
                'medicine_id'=>'anti1',
                'medicine_name'=>'amoxicillion',
                'medicine_price'=>'10',
                'medicine_qty'=>'0',
                
            ],
            [
                'medicine_id'=>'anti1',
                'medicine_name'=>'amoxcillin',
                'medicine_price'=>'10',
                'medicine_qty'=>'0',
                
            ],
            [
                'medicine_id'=>'anti1',
                'medicine_name'=>'amoxcilin',
                'medicine_price'=>'10',
                'medicine_qty'=>'0',
                
            ],
            [
                'medicine_id'=>'anti1',
                'medicine_name'=>'amoxcilin',
                'medicine_price'=>'10',
                'medicine_qty'=>'0',
                
            ],
            [
                'medicine_id'=>'anti1',
                'medicine_name'=>'amoxcillin',
                'medicine_price'=>'10',
                'medicine_qty'=>'0',
                
            ]   
        ]);
    
    }
}
