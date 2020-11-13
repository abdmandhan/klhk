<div class="form-group row">
    <label class="col-sm-2 col-form-label">{{ $label }}</label>
    <div class="col-sm-10">
        <select class="custom-select" name="{{ $name }}" id="{{ $name }}">
            @foreach ($selectData as $key => $item)
            <option value="{{ $item->id }}" {{ $isSelected($item->id) ? 'selected="selected"' : '' }}>
                {{ $item->name }}
            </option>
            @endforeach
        </select>
    </div>
</div>
