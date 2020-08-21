<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/users.fields.name').':') !!}
    <p>{{ $users->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', __('models/users.fields.email').':') !!}
    <p>{{ $users->email }}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', __('models/users.fields.password').':') !!}
    <p>{{ $users->password }}</p>
</div>

<!-- Phonenumber Field -->
<div class="form-group">
    {!! Form::label('phoneNumber', __('models/users.fields.phoneNumber').':') !!}
    <p>{{ $users->phoneNumber }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', __('models/users.fields.address').':') !!}
    <p>{{ $users->address }}</p>
</div>

<!-- Sex Field -->
<div class="form-group">
    {!! Form::label('sex', __('models/users.fields.sex').':') !!}
    <p>{{ $users->sex }}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', __('models/users.fields.remember_token').':') !!}
    <p>{{ $users->remember_token }}</p>
</div>

