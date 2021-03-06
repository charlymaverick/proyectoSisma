<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Noticias::all();

        return view('admin.noticias.index')->with(['datos'=>$datos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.noticias.create'); 
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
     * @param  \App\Models\Noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function show(Noticias $noticias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticias $noticias)
    {
        return view('admin.noticias.edit'); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noticias $noticias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("noticias")->where('id',$id)->delete();

        session()->flash('error', 'delete');
        return redirect()->route('noticias');
    }
}
