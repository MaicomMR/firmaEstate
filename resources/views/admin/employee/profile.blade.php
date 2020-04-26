@extends('adminlte::page')

@section('title', 'Perfil do colaborador')

@section('content_header')

    <link rel="stylesheet" type="text/css" href="css/adminStyle.css">
@stop

@if(session()->has('message'))

    <div class="alert alert-success" role="alert">
        {{ session()->get('message') }}
    </div>
@endif

@section('content')
    @if(count($errors)>0)
        <div class="card">
            <div class="card-header h5">
                Opss... houve algum erro no preenchimento
            </div>
            <div class="card-body alert-danger">
                @foreach($errors->all() as $error)
                    <li style="color: white">{{$error}}</li>
                @endforeach
            </div>
        </div>
    @endif
    

    <div class="container btn-success" style="padding: 10px">
        <h4 class="text-center"><i class="fa fa-plus-circle" style="padding: 10px"></i>Adicionar patrimônio ao colaborador</h4>
    </div>

    <div class="container card text-center" style="padding: 20px">
        <h2>{{$employee->name}}</h2>

        <div class="row align-content-center" style="display: flex; align-items: center; justify-content: center;">


            <div class="employeeData">
                <i class="fa fa-id-card" style=""></i>CPF: {{$employee->cpf}} <br>
            </div>
            @if($employee->phone)
            <div class="employeeData">
                <i class="fa fa-phone-square"></i>{{$employee->phone}} <br>
            </div>
            @endif

            @if($employee->email)
            <div class="employeeData">
                <i class="fa fa-envelope"></i>{{$employee->email}} <br>
            </div>
            @endif

        </div>

        @if($employee->adress)
        <div class="row">
            <div class="col-sm">
                <i class="fa fa-map-signs"></i>{{$employee->adress}}, nº {{$employee->adressNumber}}@if($employee->adressNumberInfo), {{$employee->adressNumberInfo}}@endif <br>
            </div>
        </div>
        @endif
    </div>


    @foreach($EmployeeAssignedEstates as $EmployeeEstate)
    <div class="card-estate col-sm">
        <div class="estate-icon flex col-sm-2 text-center btn-secondary">

        {{-- icon switch blade--}}
        @include('admin.employee.estate-switch-icon')

        </div>
        <div class="estate-info flex col-sm-5">
            <div class="row">
            <div class="col-sm-12 text-center">
            <h2>{{$EmployeeEstate->name}}</h2>
            <i class="fa fa-tag" style="font-size: 1.2em"></i> <span style="font-size: 1.5em; padding-left: 0.2em;">Etiqueta: {{$EmployeeEstate->label_id}}</span><br>
            <i class="fa fa-calendar" style="font-size: 1.2em"></i> <span style="font-size: 1.5em; padding-left: 0.2em;">Concessão: 12/04/2020</span><br>
            </div>
            <div class="col-sm-6">
                <span>Categoria: {{$EmployeeEstate->category->name}}</span><br>
                <span>Sub-categoria: {{$EmployeeEstate->subcategory->name}}</span><br>
            </div>
            <div class="col-sm-6">

                <span>Valor estimado: {{number_format($EmployeeEstate->value, 2, ',', ' ')}}R$</span><br>


                @isset($EmployeeEstate->seller->name)
                <span>Fornecedor: {{$EmployeeEstate->seller->name}}</span><br>
                @endisset
            </div>
            </div>
        </div>

        <div class="estate-options flex col-sm-5 row text-center">
            <div class="col-sm-4 btn-dark  estate-button-body">
                <i class="fa fa-eye estate-options-buttons" aria-hidden="true"></i>
                <p class="estate-button-text">Visualizar patrimônio</p><br>
            </div>
            <div class="col-sm-4 btn-warning  estate-button-body">
                <i class="fa fa-chevron-circle-down estate-options-buttons" aria-hidden="true"></i>
                <p class="estate-button-text">Desatribuir do colaborador</p><br>
            </div>
            <div class="col-sm-4 btn-danger estate-button-body" style="border-radius: 0px 10px 10px 0px;">
                <i class="fa fa-minus-circle estate-options-buttons" aria-hidden="true"></i>
                <p class="estate-button-text">Dar baixa do patrimônio</p><br>
            </div>
        </div>
    </div>
    @endforeach


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/estate/estate-card.css">
@stop

@section('js')
@stop