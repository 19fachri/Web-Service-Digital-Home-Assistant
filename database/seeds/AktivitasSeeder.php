<?php

use Illuminate\Database\Seeder;

class AktivitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Aktivitas')->insert([
			'perintah' => 'lampu hidup',
			'id_alat' => '1',
			'sinyal' => 'lampu hidup',
		]);
		DB::table('Aktivitas')->insert([
			'perintah' => 'lampu mati',
			'id_alat' => '1',
			'sinyal' => 'lampu mati',
		]);
		DB::table('Aktivitas')->insert([
			'perintah' => 'tv hidup',
			'id_alat' => '2',
			'sinyal' => 'tv hidup',
		]);
		DB::table('Aktivitas')->insert([
			'perintah' => 'tv mati',
			'id_alat' => '2',
			'sinyal' => 'tv mati',
		]);
		DB::table('Aktivitas')->insert([
			'perintah' => 'tv volume naik',
			'id_alat' => '2',
			'sinyal' => 'tv volume naik',
		]);
		DB::table('Aktivitas')->insert([
			'perintah' => 'tv volume turun',
			'id_alat' => '2',
			'sinyal' => 'tv volume turun',
		]);
		DB::table('Aktivitas')->insert([
			'perintah' => 'tv channel naik',
			'id_alat' => '2',
			'sinyal' => 'tv channel naik',
		]);
		DB::table('Aktivitas')->insert([
			'perintah' => 'tv channel turun',
			'id_alat' => '2',
			'sinyal' => 'tv channel turun',
		]);
		DB::table('Aktivitas')->insert([
			'perintah' => 'ac hidup',
			'id_alat' => '3',
			'sinyal' => 'ac hidup',
		]);
		DB::table('Aktivitas')->insert([
			'perintah' => 'ac mati',
			'id_alat' => '3',
			'sinyal' => 'ac mati',
		]);
		DB::table('Aktivitas')->insert([
			'perintah' => 'ac naik',
			'id_alat' => '3',
			'sinyal' => 'ac naik',
		]);
		DB::table('Aktivitas')->insert([
			'perintah' => 'ac turun',
			'id_alat' => '3',
			'sinyal' => 'ac turun',
		]);
    }
}
