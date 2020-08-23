<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $departments->name }}</p>
</div>

<!-- Numberofbeds Field -->
<div class="form-group">
    {!! Form::label('numberOfBeds', 'Numberofbeds:') !!}
    <p>{{ $departments->numberOfBeds }}</p>
</div>

<!-- Alarmsound Field -->
<div class="form-group">
    {!! Form::label('alarmSound', 'Alarmsound:') !!}
    <p>{{ $departments->alarmSound }}</p>
</div>

<!-- Hospital Id Field -->
<div class="form-group">
    {!! Form::label('hospital_id', 'Hospital Id:') !!}
    <p>{{ $departments->hospital_id }}</p>
</div>

