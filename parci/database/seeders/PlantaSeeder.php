<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class PlantaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=array('nombre'=>"marvena",'altura'=>"3",'tipo'=> "rositar",'riego'=> "alto");
       DB::table('plantas')->insert($data);
    }
}
