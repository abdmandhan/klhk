<div class="form-group row">
    <label class="col-sm-2 col-form-label">{{ $label }}</label>
    <div class="{{ $type=='checkbox' ? 'col-sm-1':'col-sm-10' }}">
        <input type="{{ $type }}" class="form-control" id="{{ $name }}" placeholder="{{ $label }}" name="{{ $name }}"
            value={{ $value }} {{ $value ? 'checked':''}}>
    </div>

    @if ($type=='checkbox')
    <div class="col-sm-9"></div>
    @endif

    @if ($errors->has($name))
    <div class="col-2"></div>
    <div class="col-8">
        <span class="help-block">
            <strong class="text-danger">{{ $errors->first($name) }}</strong>
        </span>
    </div>
    @endif
</div>