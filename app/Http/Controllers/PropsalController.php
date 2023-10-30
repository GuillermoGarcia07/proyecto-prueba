<?php

namespace App\Http\Controllers;

use App\Models\PropsalModel;
use Illuminate\Http\Request;

class PropsalController extends Controller
{
    /**
     * endPoint que trae todo los registros.
     */
    public function index()
    {
        $data = PropsalModel::all();

        return response([
            "data" => $data
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->except("_token");

        PropsalModel::insert($datos);

        return response([
            "message" => "Propuesta enviada",
            "status" => 1
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
