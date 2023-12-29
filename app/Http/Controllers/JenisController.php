<?php

namespace App\Http\Controllers;

use Exception;
use PDOException;
use App\Models\Jenis;
use App\Http\Requests\JenisRequest;
use App\Http\Requests\UpdateJenisRequest;

class JenisController extends Controller
{
    public function index()
    {
        try{
            $data = Jenis::get();
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
    public function create()
    {
       //
    }
    public function store(JenisRequest $request)
    {
        try{
            $data = Jenis::create($request->all());
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
    public function show(Jenis $jenis)
    {
        //
    }
    public function edit(Jenis $jenis)
    {
        //
    }
    public function update(JenisRequest $request, jenis $jeni)
    {
        try{
            $data = $jeni->update($request->all());
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
    public function destroy(Jenis $jeni)
    {
        try{
            $data = $jeni->delete();
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
}
