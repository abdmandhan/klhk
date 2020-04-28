@extends('adminlte::page')

@section('title', 'Create Category')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Edit Category</h4>
                    </div>
                    <div class="card-tools">
                        <a href="{{ route('web_category.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
                <form action="{{ route('web_category.update',$data->id) }}" method="POST">
                    <div class="card-body">
                        @csrf
                        @method('PUT')
                        <x-input type="text" name="name" label="Web Name" :value="$data->name" />
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
