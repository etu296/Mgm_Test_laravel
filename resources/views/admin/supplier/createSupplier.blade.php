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

<form action="{{route('storeSupplier')}}" method="POST" enctype="multipart/form-data">
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
<label>Supplier Name*</label>
<input required name="supplierName" type="text" class="form-control" placeholder="Supplier Name">
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
<label> Supplier Mobile*</label>
<input required name="supplierPhn" type="number" class="form-control" placeholder="Supplier Mobile" >
</div>


</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label> Supplier Shipping Address</label>
<input  name="supplierAddress" type="text" class="form-control" placeholder="Shipping Address" >
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

@endsection