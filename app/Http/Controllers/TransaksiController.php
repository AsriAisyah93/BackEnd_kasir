<?php

namespace App\Http\Controllers;

use Exception;
use PDOException;
use App\Models\Transaksi;
use App\Http\Requests\TransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;

class TransaksiController extends Controller
{
    public function index()
    {
        try{
            $data = Transaksi::get();
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
    public function create()
    {
       //
    }
    public function store(TransaksiRequest $request)
    {
        try{
            $data = Transaksi::create($request->all());
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
    public function show(Transaksi $transaksi)
    {
        //
    }
    public function edit(Transaksi $transaksi)
    {
        //
    }
    public function update(TransaksiRequest $request, Transaksi $transaksi)
    {
        try{
            $data = $transaksi->update($request->all());
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
    public function destroy(Transaksi $transaksi)
    {
        try{
            $data = $transaksi->delete();
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
}
