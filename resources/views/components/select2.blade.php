<div class="form-group row">
    <label class="col-sm-3 col-form-label">{{ $label }}</label>
    <div class="col-sm-9">
        <select class="col-md-9 form-control custom-select" name="{{ $name }}" id="js-role" multiple="multiple">
            @foreach ($selectData as $key => $item)
            <option value="{{ $item->name }}" @foreach ($value as $i) @if ($i->id==$item->id) selected @endif
                @endforeach>
                {{ $item->name }}
            </option>
            @endforeach
        </select>
    </div>
    @if ($errors->has($name))
    <div class=" col-md-3"></div>
    <div class="col-md-9">
        <span class="help-block">
            <strong class="text-danger">{{ $errors->first($name) }}</strong>
        </span>
    </div>
    @endif
</div>
