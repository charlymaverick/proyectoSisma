@extends('layouts.admin')
@section('titulo')
    Creación de Noticias
@endsection
@section('noticias')
menu-item-active

@endsection
@section('contenidos')

<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title">Agregar Noticia</h3>
        <div class="card-toolbar">
            e Controls

    Crud
    Forms & Controls
    Form Controls
    Base Inputs

Base Controls
The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
Email address * We'll never share your email with anyone else.
Password *
Static:

email@example.com
Example select *
Example multiple select *
Example textarea *

<div class="card card-custom">
 <div class="card-header">
  <h3 class="card-title">
   Base Controls
  </h3>
  <div class="card-toolbar">
   <div class="example-tools justify-content-center">
    <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
   </div>
  </div>
 </div>
 <!--begin::Form-->
 <form>
  <div class="card-body">
   <div class="form-group mb-8">
    <div class="alert alert-custom alert-default" role="alert">
     <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
     <div class="alert-text">
      The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
     </div>
    </div>
   </div>
   <div class="form-group">
    <label>Email address <span class="text-danger">*</span></label>
    <input type="email" class="form-control"  placeholder="Enter email"/>
    <span class="form-text text-muted">We'll never share your email with anyone else.</span>
   </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Password <span class="text-danger">*</span></label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"/>
   </div>
   <div class="form-group">
    <label>Static:</label>
    <p class="form-control-plaintext text-muted">email@example.com</p>
   </div>
   <div class="form-group">
    <label for="exampleSelect1">Example select <span class="text-danger">*</span></label>
    <select class="form-control" id="exampleSelect1">
     <option>1</option>
     <option>2</option>
     <option>3</option>
     <option>4</option>
     <option>5</option>
    </select>
   </div>
   <div class="form-group">
    <label for="exampleSelect2">Example multiple select <span class="text-danger">*</span></label>
    <select multiple="" class="form-control" id="exampleSelect2">
     <option>1</option>
     <option>2</option>
     <option>3</option>
     <option>4</option>
     <option>5</option>
    </select>
   </div>
   <div class="form-group mb-1">
    <label for="exampleTextarea">Example textarea <span class="text-danger">*</span></label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
   </div>
  </div>
  <div class="card-footer">
   <button type="reset" class="btn btn-primary mr-2">Submit</button>
   <button type="reset" class="btn btn-secondary">Cancel</button>
  </div>
 </form>
 <!--end::Form-->
</div>


        </div>
    </div>
   
</div>

@endsection