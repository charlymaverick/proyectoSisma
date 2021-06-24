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
        <form action="{{route('roles.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label>Rol: </label>
                <input type="text" class="form-control form-control-solid" placeholder="Nombre Rol" name="name"/>
            </div>
           
            <textarea name="kt-ckeditor-5" id="kt-ckeditor-5">
                
            </textarea>



            <div class="card-footer">
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
@endsection
