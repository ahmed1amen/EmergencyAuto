@extends('adminlte::page')
@section('title', 'Setting')

@section('content_header')
     <h1>
            Setting
        </h1>
@stop

@section('content')

    <div class="row justify-content-center">
       @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">Setting</h3>

               </div>
           <div class="card-body">

                   {!! Form::model($setting, ['route' => ['settings.update', $setting->id], 'method' => 'patch']) !!}

                        @include('settings.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection
