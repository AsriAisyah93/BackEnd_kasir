<?php

namespace App\Http\Controllers;

use Exception;
use PDOException;
use App\Models\Pelanggan;
use App\Http\Requests\PelangganRequest;
use App\Http\Requests\UpdatePelangganRequest;

class PelangganController extends Controller
{
    public function index()
    {
        try{
            $data = Pelanggan::get();
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
    public function create()
    {
       //
    }
    public function store(PelangganRequest $request)
    {
        try{
            $data = Pelanggan::create($request->all());
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
    public function show(Pelanggan $pelanggan)
    {
        //
    }
    public function edit(Pelanggan $pelanggan)
    {
        //
    }
    public function update(PelangganRequest $request, Pelanggan $pelanggan)
    {
        try{
            $data = $pelanggan->update($request->all());
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
    public function destroy(Pelanggan $pelanggan)
    {
        try{
            $data = $pelanggan->delete();
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
}
