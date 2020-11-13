@extends('adminlte::page')

@section('title', 'Daftar Admin')

@section('content_header')
<h1>User Management</h1>
@stop
{{-- @push('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endpush --}}
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit User</h3>
                    <div class="card-tools">

                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('user-management.update',$data->id) }}" method="post">
                        @method('put')
                        @csrf
                        <div class="form-group row">
                            <label for="" class="col-md-3">Nama</label>
                            <input type="text" class="col-md-9 form-control" placeholder="Nama" name="name"
                                value="{{ $data->name }}">
                            @if ($errors->has('name'))
                            <div class=" col-md-3"></div>
                            <div class="col-md-9">
                                <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                </span>
                            </div>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-3">Email</label>
                            <input type="email" class="col-md-9 form-control" placeholder="Email" name="email"
                                value="{{ $data->email }}">
                            @if ($errors->has('email'))
                            <div class=" col-md-3"></div>
                            <div class="col-md-9">
                                <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                </span>
                            </div>
                            @endif
                        </div>
                        <x-select2 label="Roles" name="roles[]" :value="$data->roles" />
                        <div class="form-group row">
                            <label for="" class="col-md-3">Password</label>
                            <input type="password" class="col-md-9 form-control" placeholder="Password" name="password">
                            @if ($errors->has('password'))
                            <div class=" col-md-3"></div>
                            <div class="col-md-9">
                                <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                </span>
                            </div>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-3">Confirm Password</label>
                            <input type="password" class="col-md-9 form-control" placeholder="Confirm Password"
                                name="password_confirmation">
                            @if ($errors->has('password_confirmation'))
                            <div class=" col-md-3"></div>
                            <div class="col-md-9">
                                <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            </div>
                            @endif
                        </div>
                        <br>
                        <a href="{{ route('user-management.index') }}" class="btn btn-primary">Kembali</a>
                        <button type="submit" class="btn btn-success">Simpan</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop


@section('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $("#js-role").select2({
        tags: true,
        tokenSeparators: [',', ' ']
    })

</script>
@stop
