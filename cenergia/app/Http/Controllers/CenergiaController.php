<?php


namespace App\Http\Controllers;


use App\Models\CenergiaModel;


class CenergiaController extends Controller
{
    public function index(){
        return response()->json([]);
        CenergiaModel::all();
    }
    public function store(Request $request){
        $pessoa = CenergiaModel::create($request->all());
        return response()->json($pessoa);
    }
}