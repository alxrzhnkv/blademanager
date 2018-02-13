<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    @include('blade_manager::helpers.label')

    <textarea name="{{ $name }}"
              id="{{ $name }}"
              class="form-control {{ $class or '' }}"
              placeholder="{{ $placeholder or '' }}"
              rows="{{ $rows ?? 3 }}"
              style="{{ ($resizable ?? true) ? '' : 'resize: none' }}"
        {{ ($disabled ?? false) ? 'disabled="disabled"' :  '' }}
        {{ ($required ?? false) ? 'required="true"' :  '' }}
    >{!! old($name, $value ?? null) !!}</textarea>

    @include('blade_manager::helpers.error')
</div>