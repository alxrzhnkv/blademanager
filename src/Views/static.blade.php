<div class="form-group">
    @include('blade_manager::helpers.label')
    <div class="form-control-static">
        {{ !empty($value) ? $value : '-- --' }}
    </div>
</div>
