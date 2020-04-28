@extends('adminlte::page')

@section('title', 'Create Eselon')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Web : {{ $data->name }}</h4>
                    </div>
                    <div class="card-tools">
                        <a href="{{ route('eselon.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <x-input type="text" name="name" label="Eselon Name" :value="$data->name" disabled />
                    <x-input type="number" name="level" label="Level" :value="$data->level" disabled />
                </div>
                <div class="card-footer">
                    <a href="{{ route('eselon.edit',$data->id) }}" class="btn btn-success">Edit</a>
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
