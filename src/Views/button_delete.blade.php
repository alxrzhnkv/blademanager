{!! Form::open(['class' => 'btn-group', 'url' => $url, 'method' => 'DELETE']) !!}
    <button class="btn btn-delete {{ $class or 'btn-danger' }}"
            data-toggle="tooltip"
            title="{{ $name or 'Delete' }}"
    >
        <i class="fal fa-trash-alt"></i>
    </button>
{!! Form::close() !!}