@extends('adminlte::page')
@section('title', 'Employees')

@section('content_header')
     <h1>
            Employees
        </h1>
@stop

@section('content')

    <div class="row justify-content-center">
       @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">Employees</h3>

               </div>
           <div class="card-body">

                   {!! Form::model($employees, ['route' => ['employees.update', $employees->id], 'method' => 'patch']) !!}

                        @include('employees.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection
