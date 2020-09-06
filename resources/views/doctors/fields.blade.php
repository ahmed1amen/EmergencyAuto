    <!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/users.fields.name').':') !!}
    {!! Form::text('user[name]', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('models/users.fields.email').':') !!}
    {!! Form::email('user[email]', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', __('models/users.fields.password').':') !!}
    {!! Form::password('user[password]', ['class' => 'form-control']) !!}
</div>

<!-- Phonenumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phoneNumber', __('models/users.fields.phoneNumber').':') !!}
    {!! Form::text('user[phoneNumber]', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', __('models/users.fields.address').':') !!}
    {!! Form::text('user[address]', null, ['class' => 'form-control']) !!}
</div>

<!-- Sex Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sex', __('models/users.fields.sex').':') !!}
    {!! Form::select('user[sex]' , ['male'=>'Male','female'=>'Female'],null , ['class' => 'form-control']) !!}
</div>
<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department Id:') !!}
    {!! Form::select('department_id',$departments, null,['class' => 'form-control']) !!}
</div>

<!-- Special Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('special_id', 'Special Id:') !!}
    {!! Form::select('special_id',$specialties, null,['class' => 'form-control']) !!}

</div>

    <!-- Alarm Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('photo', 'photo:') !!}
        {!! Form::file('photo', ['class' => 'form-control']) !!}
    </div>
    <!-- Special Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codes', 'codes') !!}
    <select id="emergencycodes" class="js-example-basic-multiple col-sm-6" name="codes[]" multiple="multiple">
        @foreach($codes as $id=>$key)
            <option value="{{$id}}">{{$key}}</option>
        @endforeach
    </select>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('Buttons.Save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('doctors.index') }}" class="btn btn-default">{{ __('Buttons.Cancel') }}</a>
</div>

    @section('js')
        <script >

            var selected =@json(  $doctor->codes->pluck('emergencycode_id'))+'';

            $.each(selected.split(","), function(i,e){
                $("#emergencycodes option[value='" + e + "']").prop("selected", true);
            });

            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
            });
        </script>
        @endsection
