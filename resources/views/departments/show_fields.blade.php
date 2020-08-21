<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $department->name }}</p>
</div>

<!-- Numberofbeds Field -->
<div class="form-group">
    {!! Form::label('numberOfBeds', 'Numberofbeds:') !!}
    <p>{{ $department->numberOfBeds }}</p>
</div>

<!-- Alarmsound Field -->
<div class="form-group">
    {!! Form::label('alarmSound', 'Alarmsound:') !!}
    <p>{{ $department->alarmSound }}</p>
</div>

<!-- Hospital Id Field -->
<div class="form-group">
    {!! Form::label('hospital_id', 'Hospital Id:') !!}
    <p>{{ $department->hospital_id }}</p>
</div>

