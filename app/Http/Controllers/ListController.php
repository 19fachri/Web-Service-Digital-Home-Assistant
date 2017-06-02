<?php

namespace App\Http\Controllers;

use App\ListModel;
use App\Status;
use App\Aktivitas;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "hahah";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	$cek = Aktivitas::where("perintah", "=", $request->kata)->first();
	if($cek){
		$dt = new ListModel;
		$dt->id_alat = $cek->id_alat;
		$dt->kata = $cek->sinyal;
		$dt->save();
		$data = "perintah $request->kata sedang diproses";
	}else{
		$data = "perintah $request->kata belum terdaftar";
	}
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ListModel::where('id_alat','=',$id)->first();
        if($data){
			$perintah = $data->kata;
			$q = 'DELETE FROM List where id_alat = ? LIMIT 1';
			DB::delete($q, [$id]);
		}else{
			$perintah = '';
		}
        return $perintah;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
