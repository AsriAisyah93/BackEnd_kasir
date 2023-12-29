<?php

namespace App\Http\Controllers;

use Exception;
use PDOException;
use App\Models\Pemesanan;
use App\Http\Requests\PemesananRequest;
use App\Http\Requests\UpdatePemesananRequest;

class PemesananController extends Controller
{
    public function index()
    {
        try{
            $data = Pemesanan::get();
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
    public function create()
    {
       //
    }
    public function store(PemesananRequest $request)
    {
        try{
            $data = Pemesanan::create($request->all());
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
    public function show(Pemesanan $pemesanan)
    {
        //
    }
    public function edit(Pemesanan $pemesanan)
    {
        //
    }
    public function update(PemesananRequest $request, Pemesanan $pemesanan)
    {
        try{
            $data = $pemesanan->update($request->all());
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
    public function destroy(Pemesanan $pemesanan)
    {
        try{
            $data = $pemesanan->delete();
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
}
