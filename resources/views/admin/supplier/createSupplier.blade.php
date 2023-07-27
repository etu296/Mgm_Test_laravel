@extends('welcome')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="card card-warning">
<div class="card-header">
<h3 class="card-title">Create Supplier</h3>
</div>

<div class="card-body">
<form>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Supplier code*</label>
<input type="text" class="form-control" placeholder="Item Code">
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
<label> Supplier name*</label>
<input type="text" class="form-control" placeholder="Item Name" >
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">


<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

@endsection