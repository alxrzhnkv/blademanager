<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    @include('blade_manager::helpers.label')

    <input id="{{ $id ?? $name }}"
           type="{{ $type or 'text' }}"
           class="form-control {{ $class or '' }}"
           placeholder="{{ $placeholder or '' }}"
           name="{{ $name }}"
           value="{{ old($name, $value ?? null) }}"
            {{ isset($step) ? "step=$step" : '' }}
            {{ isset($min) ? "min=$min" : '' }}
            {{ isset($required) ? 'required' :  '' }}
            {{ isset($disabled) ? 'disabled' :  '' }}
            {!! isset($custom) ? implode($custom, ' ') : '' !!}
    />

    @include('blade_manager::helpers.error')
</div>