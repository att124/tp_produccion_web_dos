<?php

namespace App\Http\Controllers;

use App\Models\Datousuario;
use Illuminate\Http\Request;

class DatousuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datousuarios = Datousuario::all();
        return view('datousuarios.index', compact('datousuarios'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Datousuario $datousuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Datousuario $datousuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Datousuario $datousuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Datousuario $datousuario)
    {
        //
    }
}
