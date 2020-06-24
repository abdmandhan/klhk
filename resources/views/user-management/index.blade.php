@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>User Management</h1>
@stop

@section('content')
<div class="container-fluid">
    @include('layouts.message')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User List</h3>
                    <div class="card-tools">
                        <a href="{{ route('user_management.create') }}" class="btn btn-primary">Add New User</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered table-hover table-light"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    @foreach ($item->roles as $i)
                                    {{ $i->name }},
                                    @endforeach
                                </td>
                                <td>
                                    <form action="{{ route('user_management.destroy',$item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link" title="Delete"
                                            onsubmit="confirm('Delete web {{ $item->name }} ?')"><i
                                                class="fa fa-trash text-danger"></i></button>
                                    </form>
                                    &nbsp;
                                    <a href="{{ route('user_management.edit',$item->id) }}"><i
                                            class="fa fa-edit text-primary"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        {{-- {{ $data->links() }} --}}
    </div>
</div>
@stop

@section('js')
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });

    document.onsubmit = function () {
        return confirm('Sure?');
    }

</script>
@stop
