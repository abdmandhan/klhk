@extends('adminlte::page')

@section('title', 'Data Kategori')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Kategori : {{ $data->name }}</h4>
                    </div>
                    <div class="card-tools">
                        <a href="{{ route('web_category.index') }}" class="btn btn-primary">kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <x-input type="text" name="name" label="Category" :value="$data->name" disabled />
                </div>
                <div class="card-footer">
                    <a href="{{ route('web_category.edit',$data->id) }}" class="btn btn-success">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@stop
