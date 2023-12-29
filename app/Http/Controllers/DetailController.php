<?php

namespace App\Http\Controllers;

use Exception;
use PDOException;
use App\Models\Detail;
use App\Http\Requests\DetailRequest;
use App\Http\Requests\UpdateDetailRequest;

class DetailController extends Controller
{
    public function index()
    {
        try{
            $data = Detail::get();
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
    public function create()
    {
       //
    }
    public function store(DetailRequest $request)
    {
        try{
            $data = Detail::create($request->all());
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
    public function show(Detail $detail)
    {
        //
    }
    public function edit(Detail $detail)
    {
        //
    }
    public function update(DetailRequest $request, detail $detail)
    {
        try{
            $data = $detail->update($request->all());
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
    public function destroy(Detail $detail)
    {
        try{
            $data = $detail->delete();
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
}
