@extends('layouts.admin')
@section('titulo')
    Creación de Cuestionarios
@endsection
@section('cuestionarios')
menu-item-active

@endsection
@section('css')
    
@endsection
@section('contenidos')

<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title">Cuestionarios</h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
             
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('cuestionarios.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label>Titulo de Cuestionario: </label>
                <input type="text" class="form-control form-control-solid" placeholder="Nombre Cuestionario" name="name"/>
            </div>
            <div class="form-group">
                <label for="exampleSelect1">Tipo Usuario <span class="text-danger">*</span></label>
                <select class="form-control" id="exampleSelect1" name="tipo_usuario">
                 <option value="Adulto">Adulto</option>
                 <option value="Joven">Joven</option>
                </select>
               </div>
               <div class="form-group">
               <label for="exampleSelect1">Tipo Cuestionario <span class="text-danger">*</span></label>
               <select class="form-control" id="exampleSelect1" name="tipo_cuestionario">
                <option value="Test">Test</option>
                <option value="Pretest">Pre-test</option>
                <option value="Postest">Post-test</option>
               </select>
              </div>
              <div class="form-group row">
                <label for="example-date-input" class="col-2 col-form-label">Fecha Inicio</label>
                <div class="col-10">
                 <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="fecha_inicio"/>
                </div>
               </div>
               <div class="form-group row">
                <label for="example-date-input" class="col-2 col-form-label">Fecha Fin</label>
                <div class="col-10">
                 <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="fecha_fin"/>
                </div>
               </div>
               <div class="form-group row">
                <label for="example-color-input" class="col-2 col-form-label">Color</label>
                <div class="col-10">
                 <input class="form-control" type="color" value="#563d7c" id="example-color-input" name="color"/>
                </div>
               </div>
            
            <div class="form">
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-title">
                                Pregunta
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-1">
                            <label for="exampleTextarea">Enunciado:  <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="exampleTextarea" rows="3" name="enunciado[]"></textarea>
                           </div>
                           <div class="form-group">
                            <label>Imagen: </label>
                            <input type="text" class="form-control form-control-solid" placeholder="Link Imagen" name="imagen[]"/>
                        </div>
                        <div class="form-group">
                            <label>Video: </label>
                            <input type="text" class="form-control form-control-solid" placeholder="Link Video" name="video[]"/>
                        </div>
                        <div class="form-group">
                            <label>Archivo: </label>
                            <input type="text" class="form-control form-control-solid" placeholder="Link Archivo" name="archivo[]"/>
                        </div>
                        <div class="form-group">
                            <label>Respuesta Correcta: </label>
                            <input type="text" class="form-control form-control-solid" placeholder="Respuesta" name="correcta[]"/>
                        </div>
                        <div class="form-group">
                            <label>Respuesta incorrecta 1: </label>
                            <input type="text" class="form-control form-control-solid" placeholder="Respuesta" name="incorrecta1[]"/>
                        </div>
                        <div class="form-group">
                            <label>Respuesta incorrecta 2: </label>
                            <input type="text" class="form-control form-control-solid" placeholder="Respuesta" name="incorrecta2[]"/>
                        </div>
                        <div class="form-group">
                            <label>Respuesta incorrecta 3: </label>
                            <input type="text" class="form-control form-control-solid" placeholder="Respuesta" name="incorrecta3[]"/>
                        </div>
    
                        
                    </div>
                </div>
            </div>
            
            



            <div class="card-footer">
                <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <a href="javascript:void(0);" class="btn btn-info add_button form-control">Nueva Pregunta</a>
                    </div>
                </div>
                <br>

                <button type="submit" class="btn btn-primary mr-2">Crear</button>
                <a href="{{route('roles')}}" class="btn btn-secondary">Volver</a>
               </div>
        </form>
    </div>
</div>

@endsection

@section('js')
<!--begin::Page Vendors(used by this page)-->
<script src="{{ asset('assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('assets/js/pages/crud/forms/editors/ckeditor-classic.js') }}"></script>
<!--end::Page Scripts-->

<script type="text/javascript">

    $(document).ready(function () {
   var maxField = 10; //Input fields increment limitation
   var addButton = $('.add_button'); //Add button selector
   var wrapper = $('.form'); //Input field wrapper
   var fieldHTML = '<br>'
   +'<div class="card card-custom">'
                   + '<div class="card-header">'
                        +'<div class="card-title">'
                           + '<h3 class="card-title">'
                                +'Pregunta'
                            +'</h3>'
                        +'</div>'
                   + '</div>'
                   + '<div class="card-body">'
                       + '<div class="form-group mb-1">'
                           + '<label for="exampleTextarea">Enunciado:  <span class="text-danger">*</span></label>'
                           + '<textarea class="form-control" id="exampleTextarea" rows="3" name="enunciado[]"></textarea>'
                           +'</div>'
                           +'<div class="form-group">'
                          +  '<label>Imagen: </label>'
                           + '<input type="text" class="form-control form-control-solid" placeholder="Link Imagen" name="imagen[]"/>'
                       + '</div>'
                       + '<div class="form-group">'
                        +    '<label>Video: </label>'
                           + '<input type="text" class="form-control form-control-solid" placeholder="Link Video" name="video[]"/>'
                       + '</div>'
                        +'<div class="form-group">'
                           + '<label>Archivo: </label>'
                           + '<input type="text" class="form-control form-control-solid" placeholder="Link Archivo" name="archivo[]"/>'
                       + '</div>'
                       + '<div class="form-group">'
                           + '<label>Respuesta Correcta: </label>'
                          +  '<input type="text" class="form-control form-control-solid" placeholder="Respuesta" name="correcta[]"/>'
                       + '</div>'
                       + '<div class="form-group">'
                          +  '<label>Respuesta incorrecta 1: </label>'
                          +  '<input type="text" class="form-control form-control-solid" placeholder="Respuesta" name="incorrecta1[]"/>'
                       + '</div>'
                       + '<div class="form-group">'
                           + '<label>Respuesta incorrecta 2: </label>'
                           + '<input type="text" class="form-control form-control-solid" placeholder="Respuesta" name="incorrecta2[]"/>'
                        +'</div>'
                       + '<div class="form-group">'
                           + '<label>Respuesta incorrecta 3: </label>'
                           + '<input type="text" class="form-control form-control-solid" placeholder="Respuesta" name="incorrecta3[]"/>'
                        +'</div>'
                       
                    +'</div>'
                    +'&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" class="btn  btn-danger remove_button" title="Remove field">Remover Pregunta</a>' 
                +'</div>';

   var x = 1; //Initial field counter is 1
   $(addButton).click(function () { //Once add button is clicked
       if (x < maxField) { //Check maximum number of input fields
           x++; //Increment field counter
           $(wrapper).append(fieldHTML); // Add field html
       }
   });

   $(wrapper).on('click', '.remove_button', function (e) { //Once remove button is clicked
       e.preventDefault();
       $(this).parent('div').remove(); //Remove field html
       x--; //Decrement field counter
   });

  
});

       </script>
@endsection
