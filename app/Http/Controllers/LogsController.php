<?php

namespace App\Http\Controllers;

use App\Models\Logs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
     * @param  \App\Models\Logs  $logs
     * @return \Illuminate\Http\Response
     */
    public function show(Logs $logs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logs  $logs
     * @return \Illuminate\Http\Response
     */
    public function edit(Logs $logs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logs  $logs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logs $logs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logs  $logs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("logs")->where('id',$id)->delete();

        session()->flash('error', 'delete');
        return redirect()->route('logs');
    }
}
