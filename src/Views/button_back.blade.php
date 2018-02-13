<a class="btn btn-back {{ $class or 'btn-secondary' }}"
   href="{{ $url or url()->to('/') }}"
   data-toggle="tooltip"
   title="Return to {{ $name or 'Dashboard' }}"
>
    <i class="fal fa-arrow-left"></i>
</a>