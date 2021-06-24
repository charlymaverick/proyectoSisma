<?php

namespace App\Http\Controllers;

use App\Models\Cuestionarios;
use App\Http\Controllers\Controller;
use App\Models\Preguntas;
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
<<<<<<< HEAD
  
     return view('admin.cuestinarios.create'); 
=======
     return view('admin.cuestionarios.create'); 
>>>>>>> 0e960930190be2951993cce58f27b3e18778ecaa
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cuestionario = 0;
        $tipo_usuario = $request->tipo_usuario;
        $fecha_inicio = $request->fecha_inicio;
        $fecha_fin = $request->fecha_fin;
        $tipo_cuestionario = $request->tipo_cuestionario;
        //$active = $request->active;
        $color = $request->color;
        $titulo = $request->titulo;

        $respuesta_correcta = $request->correcta;
        $respuesta_incorrecta1 = $request->incorrecta1;
        $respuesta_incorrecta2 = $request->incorrecta2;
        $respuesta_incorrecta3 = $request->incorrecta3;
        $video = $request->video;
        $imagen = $request->imagen;
        $archivo = $request->archivo;
        $enunciado = $request->enunciado;
        
        

        $cuestionario = Cuestionarios::create([
            'titulo'=>$titulo,
            'Tipo_usuario'=>$tipo_usuario,
            'Fecha_inicio'=>$fecha_inicio,
            'Fecha_final'=>$fecha_fin,
            'Tipo_Cuestionario'=>$tipo_cuestionario,
            'color'=>$color,
            'Activo'=>1
        ])->id;

        if($cuestionario>0){

            foreach($respuesta_correcta as $key => $r){

                $preguntas = Preguntas::create([
                    'Respuesta_correcta'=>$respuesta_correcta[$key],
                    'Respuesta_2'=>$respuesta_incorrecta1[$key],
                    'Respuesta_3'=>$respuesta_incorrecta2[$key],
                    'Respuesta_4'=>$respuesta_incorrecta3[$key],
                    'Enunciado_video'=>$video[$key],
                    'Enunciado'=>$enunciado[$key],
                    'Imagen'=>$imagen[$key],
                    'Archivo'=>$archivo[$key],
                    'Activo'=>1,
                    'cuestionario_id'=>$cuestionario
                ]);
            }

            if($preguntas){

                session()->flash('error', 'success');
                return redirect()->route('cuestionarios');
            }else{
                session()->flash('error', 'error');
                return redirect()->route('cuestionarios');
            }

        }else{
            session()->flash('error', 'error');
                return redirect()->route('cuestionarios');
        }


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
        return view('admin.cuestionarios.edit'); 
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
