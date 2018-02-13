@php($multiple = isset($multiple) && $multiple == true)

<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    @include('blade_manager::helpers.label')

    <select id="{{ $id or $name }}"
            name="{{ $name }}"
            class="form-control {{ $class or '' }}"
            data-placeholder="{{ $data_placeholder ?? '' }}"
            {{ $multiple ? 'multiple' : '' }}
            {!! $attributes ?? '' !!}
            {{ isset($required) ? 'required' :  '' }}
    >

        @if (isset($placeholder))
            <option selected value="">{{ $placeholder }}</option>
        @endif

        @if (!empty($default) && is_array($default))
            <option value="{{ key($default) }}">
                {{ reset($default) }}
            </option>
        @endif

        @if (count($options))
            @foreach($options as $key => $text)
                <option value="{{ $key }}"

                @if ($multiple)
                    {{ in_array($key, $value) ? 'selected' : '' }}
                        @else
                    {{ isset($value) && $value == $key ? 'selected' : '' }}
                        @endif
                >
                    {{ $text }}
                </option>
            @endforeach
        @endif
    </select>

    @php($name = str_replace(['[', ']'], '', $name))
    @include('blade_manager::helpers.error')
</div>
