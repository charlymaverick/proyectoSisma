<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Eventos::all();

        return view('admin.eventos.index')->with(['datos'=>$datos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.eventos.create'); 
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
     * @param  \App\Models\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function show(Eventos $eventos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function edit(Eventos $eventos)
    {
        return view('admin.eventos.edit'); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eventos $eventos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("eventos")->where('id',$id)->delete();

        session()->flash('error', 'delete');
        return redirect()->route('eventos');
    }
    }

