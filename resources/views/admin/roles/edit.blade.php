@extends('layouts.admin')
@section('titulo')
    Creación de Roles
@endsection
@section('roles')
menu-item-active

@endsection
@section('contenidos')

<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title">Editar Rol</h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
             
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('roles.update')}}" method="post">
            @csrf
            <input name="id" value="{{$role->id}}" hidden>
            <div class="form-group">
                <label>Rol: </label>
                <input type="text" class="form-control form-control-solid" placeholder="Nombre Rol" name="name" value="{{$role->name}}"/>
            </div>
            <div class="form-group row">
                <label class="col-3 col-form-label">Permisos: </label>
                
                 <div class="col-9 col-form-label">
                    <div class="checkbox-list">
                        @foreach($permission as $value)

                        <label class="checkbox">
                            <input type="checkbox" name="permission[]" value="{{$value->id}}" @if (in_array($value->id, $rolePermission))
                                checked="checked"
                            @endif/>
                            <span></span>{{ $value->name }}</label>
                    @endforeach
                      <!--  <label class="checkbox">
                        <input type="checkbox" name="Checkboxes4" />
                        <span></span>Default</label>-->
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2">Crear</button>
                <a href="{{route('roles')}}" class="btn btn-secondary">Volver</a>
               </div>
        </form>
    </div>
</div>

@endsection