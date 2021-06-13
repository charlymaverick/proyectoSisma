<?php

namespace App\Http\Controllers;

use App\Models\Cuestionarios;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CuestionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Cuestionarios::all();

        return view('admin.cuestionarios.index')->with(['datos'=>$datos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cuestionarios  $cuestionarios
     * @return \Illuminate\Http\Response
     */
    public function show(Cuestionarios $cuestionarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cuestionarios  $cuestionarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuestionarios $cuestionarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cuestionarios  $cuestionarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cuestionarios $cuestionarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuestionarios  $cuestionarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("cuestionarios")->where('id',$id)->delete();

        session()->flash('error', 'delete');
        return redirect()->route('cuestionarios');
    }
}
