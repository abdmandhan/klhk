@extends('adminlte::page')

@section('title', 'Create Web')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Edit Web</h4>
                    </div>
                    <div class="card-tools">
                        <a href="{{ route('web.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
                <form action="{{ route('web.update',$data->id) }}" method="POST">
                    <div class="card-body">
                        @csrf
                        @method('PUT')
                        <x-input type="text" name="name" label="Web Name" :value="$data->name" />
                        <x-select label="Eselon" name="id_eselon" selectData="Eselon" :value="$data->id_eselon" />
                        <x-select label="Web Category" name="id_web_category" selectData="WebCategory"
                            :value="$data->id_web_category" />
                        <x-input type="text" name="url_name" label="Url" :value="$data->url_name" />
                        <x-input type="text" name="ip_address" label="IP Address" :value="$data->ip_address" />
                        <x-input type="text" name="description" label="Description" :value="$data->description" />
                        <x-input type="checkbox" name="status" label="Status" value=1 :value="$data->status" />
                        <x-input type="text" name="image" label="Image Url" :value="$data->image" />
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

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@stop