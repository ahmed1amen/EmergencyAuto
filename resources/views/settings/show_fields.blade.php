<!-- Sms Username Field -->
<div class="form-group">
    {!! Form::label('sms_username', 'Sms Username:') !!}
    <p>{{ $setting->sms_username }}</p>
</div>

<!-- Sms Password Field -->
<div class="form-group">
    {!! Form::label('sms_password', 'Sms Password:') !!}
    <p>{{ $setting->sms_password }}</p>
</div>

<!-- Sms Template Field -->
<div class="form-group">
    {!! Form::label('sms_template', 'Sms Template:') !!}
    <p>{{ $setting->sms_template }}</p>
</div>

<!-- Twilio Account Sid Field -->
<div class="form-group">
    {!! Form::label('twilio_account_sid', 'Twilio Account Sid:') !!}
    <p>{{ $setting->twilio_account_sid }}</p>
</div>

<!-- Twilio Auth Token Field -->
<div class="form-group">
    {!! Form::label('twilio_auth_token', 'Twilio Auth Token:') !!}
    <p>{{ $setting->twilio_auth_token }}</p>
</div>

<!-- Twilio Twilio Phone Number Field -->
<div class="form-group">
    {!! Form::label('twilio_twilio_phone_number', 'Twilio Twilio Phone Number:') !!}
    <p>{{ $setting->twilio_twilio_phone_number }}</p>
</div>

