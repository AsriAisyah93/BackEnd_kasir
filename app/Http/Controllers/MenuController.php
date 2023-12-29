<?php

namespace App\Http\Controllers;

use Exception;
use PDOException;
use App\Models\Menu;
use App\Http\Requests\MenuRequest;
use App\Http\Requests\UpdateMenuRequest;

class MenuController extends Controller
{
    public function index()
    {
        try{
            $data = Menu::get();
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
    public function create()
    {
       //
    }
    public function store(MenuRequest $request)
    {
        //try{
            $data = Menu::create($request->all());
        //     return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
        //  }catch (Exception | PDOException $e) {
        //     return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
        //  }
    }
    public function show(Menu $menu)
    {
        //
    }
    public function edit(Menu $menu)
    {
        //
    }
    public function update(MenuRequest $request, Menu $menu)
    {
        try{
            $data = $menu->update($request->all());
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
    public function destroy(Menu $menu)
    {
        try{
            $data = $menu->delete();
            return response()->json(['status'=>true, 'message'=>'success', 'data'=>$data]);
         }catch (Exception | PDOException $e) {
            return response()->json(['status'=>false, 'message'=>'gagal menampilkan data']);
         }
    }
}
