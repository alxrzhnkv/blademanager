<label for="{{ $name }}" class="{{ $label_class or '' }}">
    {{ $label or ucwords(str_replace(']', '', str_replace('[', '', str_replace('_', ' ', $name)))) }}
    @if ($required ?? false)
        <span class="text-danger">&ast;</span>
    @endif
</label>