@if (@$success)
<div class="alert alert-success">{{ $success }}</div>
@endif
@if (@$error)
<div class="alert alert-danger">{{ $error }}</div>
@endif

@if (\Session::has('success'))
<div class="alert alert-success">
    {!! \Session::get('success') !!}
</div>
@endif

@if (\Session::has('error'))
<div class="alert alert-danger">
    {!! \Session::get('error') !!}
</div>
@endif