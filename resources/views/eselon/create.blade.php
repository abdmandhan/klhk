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
                        <h4>Create Eselon</h4>
                    </div>
                    <div class="card-tools">
                        <a href="{{ route('eselon.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
                <form action="{{ route('eselon.store') }}" method="POST">
                    <div class="card-body">
                        @csrf
                        <x-input type="text" name="name" label="Eselon Name" />
                        <x-input type="number" name="level" label="Level" />
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
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
