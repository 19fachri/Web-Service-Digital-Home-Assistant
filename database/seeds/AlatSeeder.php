<?php

use Illuminate\Database\Seeder;

class AlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Alat')->insert([
			'barang' => 'lampu',
		]);
		DB::table('Alat')->insert([
			'barang' => 'tv',
		]);
		DB::table('Alat')->insert([
			'barang' => 'ac',
		]);
    }
}
