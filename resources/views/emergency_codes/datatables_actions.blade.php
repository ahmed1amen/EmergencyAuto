{!! Form::open(['route' => ['emergencyCodes.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('emergencyCodes.show', $id) }}" class='btn btn-warning btn-sm p-1'>
        <i class="fas fa-2x fa-eye"></i>
    </a>
    <a href="{{ route('emergencyCodes.edit', $id) }}" class='btn btn-primary btn-sm p-1'>
        <i class="fas fa-2x fa-edit"></i>
    </a>
    {!! Form::button('<i class="fas fa-2x fa-trash text-white"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-sm',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
