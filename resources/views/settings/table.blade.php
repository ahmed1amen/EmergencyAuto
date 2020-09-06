<table class="table table-hover table-bordered" id="marketplaces-table">
    <thead>
        <tr>
            <th class="text-center">Sms Username</th>

        <th class="text-center">Sms Password</th>

        <th class="text-center">Sms Template</th>

        <th class="text-center">Twilio Account Sid</th>

        <th class="text-center">Twilio Auth Token</th>

        <th class="text-center">Twilio Twilio Phone Number</th>


        <th tabindex="0" rowspan="1" class="text-center" style="min-width: 180px;">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($settings as $setting)
        <tr>
            <td class="text-center">{{ $setting->sms_username }}</td>

            <td class="text-center">{{ $setting->sms_password }}</td>

            <td class="text-center">{{ $setting->sms_template }}</td>

            <td class="text-center">{{ $setting->twilio_account_sid }}</td>

            <td class="text-center">{{ $setting->twilio_auth_token }}</td>

            <td class="text-center">{{ $setting->twilio_twilio_phone_number }}</td>

            <td>
                {!! Form::open(['route' => ['settings.destroy', $setting->id], 'method' => 'delete']) !!}
                <div class='form-group'>
                    <a href="{{ route('settings.show', [$setting->id]) }}" class='btn btn-warning btn-sm p-1'><i class="fas fa-2x fa-eye"></i></a>
                    <a href="{{ route('settings.edit', [$setting->id]) }}" class='btn btn-primary btn-sm p-1'><i class="fas fa-2x fa-edit"></i></a>
                    {!! Form::button('<i class="fas fa-2x fa-trash text-white"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
