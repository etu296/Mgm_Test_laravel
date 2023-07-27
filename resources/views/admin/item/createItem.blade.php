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
<h3 class="card-title">Create Item</h3>
</div>

<div class="card-body">
<form>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Master Item code*</label>
<input type="text" class="form-control" placeholder="Item Code">
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
<label>Master Item name*</label>
<input type="text" class="form-control" placeholder="Item Name" >
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">

<div class="form-group">
<label>Item Type*</label>
<select class="form-control">
<option>option 1</option>
<option>option 2</option>
<option>option 3</option>
<option>option 4</option>
<option>option 5</option>
</select>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>UOM*</label>
<input type="text" class="form-control" placeholder="UOM" >
</div>
</div>


</div>


<div class="row">
<div class="col-sm-6">

<div class="form-group">
<label>Category</label>
<select class="form-control">
<option>option 1</option>
<option>option 2</option>
<option>option 3</option>
<option>option 4</option>
<option>option 5</option>
</select>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Select supplier</label>
<select class="form-control" >
<option>option 1</option>
<option>option 2</option>
<option>option 3</option>
<option>option 4</option>
<option>option 5</option>
</select>
</div>
</div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

@endsection