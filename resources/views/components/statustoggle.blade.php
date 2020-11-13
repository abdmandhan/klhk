<div class="form-group row custom-switch ">
    <label class="col-sm-2 col-2-form-label">{{ $label }}</label>
    <input type="checkbox" class="custom-control-input col-sm-10" id="customSwitch1" name="{{ $name }}"
        value="{{ $value }}" {{ $isChecked($value) ? 'checked':''}}>
    <label class="custom-control-label" for="customSwitch1"></label>

    @if ($errors->has($name))
    <div class="col-2"></div>
    <div class="col-8">
        <span class="help-block">
            <strong class="text-danger">{{ $errors->first($name) }}</strong>
        </span>
    </div>
    @endif
</div>
