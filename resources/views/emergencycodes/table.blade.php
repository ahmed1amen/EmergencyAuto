<table class="table table-hover table-bordered" id="marketplaces-table">
    <thead>
        <tr>
            <th class="text-center">Name</th>

        <th class="text-center">Icon</th>

        <th class="text-center">Title</th>

        <th class="text-center">Description</th>

        <th class="text-center">Color</th>

        <th class="text-center">Alarm</th>


        <th tabindex="0" rowspan="1" class="text-center" style="min-width: 180px;">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($emergencycodes as $emergencycode)
        <tr>
            <td class="text-center">{{ $emergencycode->name }}</td>

            <td class="text-center">{{ $emergencycode->icon }}</td>

            <td class="text-center">{{ $emergencycode->title }}</td>

            <td class="text-center">{{ $emergencycode->description }}</td>

            <td class="text-center">{{ $emergencycode->color }}</td>

            <td class="text-center">{{ $emergencycode->alarm }}</td>

            <td>
                {!! Form::open(['route' => ['emergencycodes.destroy', $emergencycode->id], 'method' => 'delete']) !!}
                <div class='form-group'>
                    <a href="{{ route('emergencycodes.show', [$emergencycode->id]) }}" class='btn btn-warning btn-sm p-1'><i class="fas fa-2x fa-eye"></i></a>
                    <a href="{{ route('emergencycodes.edit', [$emergencycode->id]) }}" class='btn btn-primary btn-sm p-1'><i class="fas fa-2x fa-edit"></i></a>
                    {!! Form::button('<i class="fas fa-2x fa-trash text-white"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
