<div class="form-group">
    @include('blade_manager::label')
    <div class="form-control-static">
        {{ !empty($value) ? $value : '-- --' }}
    </div>
</div>
