<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use BlueFeathers\Models\Trainer;

class trainer_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainer')->insert([
            'name' =>'First Trainer',
            'description' => 'Description on first Trainer',
            'qualifications' => 'Qulaifications of first Trainer',
            'status' => true
        ]);
    }
}
