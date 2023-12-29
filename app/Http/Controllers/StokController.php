<?php

namespace App\Http\Controllers;

use Exception;
use PDOException;
use App\Models\stok;
use App\Http\Requests\StokRequest;
use App\Http\Requests\UpdateStokRequest;

class StokController extends Controller
{
    public function index()
    {
        try{
            $data = Stok::get();
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
    public function create()
    {
       //
    }
    public function store(StokRequest $request)
    {
        try{
            $data = Stok::create($request->all());
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
    public function show(Stok $stok)
    {
        //
    }
    public function edit(Stok $stok)
    {
        //
    }
    public function update(UpdateStokRequest $request, stok $stok)
    {
        try{
            $data = $stok->update($request->all());
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
    public function destroy(Stok $stok)
    {
        try{
            $data = $stok->delete();
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
}
