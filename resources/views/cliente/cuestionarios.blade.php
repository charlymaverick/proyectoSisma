@extends('layouts.app')
@section('home')
menu-item-open menu-item-here
@endsection
@section('titulo')
    Cuestionarios
@endsection
@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <!--begin::List Widget 11-->
            <div class="card card-custom card-stretch gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0">
                    <h3 class="card-title font-weight-bolder text-dark">Cuestionarios</h3>
                    
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-0">
                    <!--begin::Item-->

                    @foreach ($datos as $dato)
                    <div class="d-flex align-items-center mb-9 bg-light rounded p-5" style="background-color: {{$dato->color}};">
                        <!--begin::Icon-->
                        <span class="svg-icon svg-icon mr-5" style="color: {{$dato->color}};">
                            <span class="svg-icon svg-icon-lg">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                                        <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </span>
                        <!--end::Icon-->
                        <!--begin::Title-->
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">{{$dato->titulo}}</a>
                            <span class="text-muted font-weight-bold">{{$dato->Tipo_usuario}}</span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Lable-->
                        <span class="font-weight-bolder py-1 font-size-lg" style="color: {{$dato->color}};"></span>
                        <!--end::Lable-->
                    </div>
                    @endforeach
                    
                </div>
                <!--end::Body-->
            </div>
            <!--end::List Widget 11-->
        </div>
    </div>
</div>
@endsection
