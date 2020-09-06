@extends('adminlte::page')
@section('title', 'Settings')

@section('content_header')
        <h1>Settings</h1>
@stop

@section('content')

        {{-- Cards --}}
        <div class="card col-11">
            <div class="card-header">
                <h3 class="card-title">Settings</h3>
            </div>
            <div class="card-body card-body table-responsive p-0">
                @include('flash::message')
               @include('settings.table')

                <div class="text-center">
                    @include('adminlte-templates::common.paginate', ['records' => $settings])

                </div>
            </div>
        </div>
    </div>


@endsection

