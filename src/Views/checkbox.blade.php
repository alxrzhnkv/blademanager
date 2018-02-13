<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    <label class="checkbox-inline i-checks required-checkbox">
        <input type="checkbox"
               name="{{ $name }}"
                {{ isset($required) && $required ? 'required' : '' }}
                {{ isset($disabled) && $disabled ? 'disabled' : '' }}
                {{ isset($custom) ? implode($custom, ' ') : '' }}

                @if (isset($value))
                    {{ $value == 1 ? 'checked' : '' }}
                @else
                    {{ $name == 1 ? 'checked' : '' }}
                @endif
        />
        <i></i>
        <span class="name">{{ $label ?? '' }}</span>
    </label>
    @include('blade_manager::helpers.error')
</div>