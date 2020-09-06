@extends('adminlte::page')
@section('title', 'Test Call')

@section('content_header')
    <h1>Test Call</h1>
@stop

@section('content')

    {{-- Cards --}}
    <div class="card col-11">
        <div class="card-header">
            <h3 class="card-title">اختبار الاتصال</h3>
        </div>
        <div class="card-body card-body table-responsive p-0">
            @include('flash::message')


            <form method="post" action="{{ route('initiate_call') }}">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group row col-8">
                    <div class="form-group col-12">
                        <label for="phoneNumber">رفم الجوال</label>
                        <input type="text" class="form-control" name="phone_number" id="phoneNumber"
                               aria-describedby="phoneHelp" placeholder="Example, +18005551212" required>
                        <small id="phoneHelp" class="form-text text-muted">ادخل الرقم بكود الدوله </small>
                    </div>
                    <button type="submit" class="btn btn-lg btn-danger">اتصال</button>
                </div>
            </form>

            <div class="text-center">

            </div>
        </div>
    </div>


@endsection
