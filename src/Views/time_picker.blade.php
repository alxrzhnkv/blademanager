<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    @include('blade_manager::label')

    <input type="text"
           class="form-control timepicker {{ $class or '' }}"
           name="{{ $name }}"
           value="{{ old($name, $value ?? null) }}"
            {{ isset($required) ? 'required' :  '' }}
            {{ isset($disabled) ? 'disabled' :  '' }}
    />

    @include('blade_manager::error')
</div>