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

<form action="{{route('storeItemCategory')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="card card-warning">
<div class="card-header">
<h3 class="card-title">Create Item Category</h3>
</div>

<div class="card-body">
<form>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Category code*</label>
<input required name="categoryCode" type="text" class="form-control" placeholder="Item Code">
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
<label for="exampleInputEmail1" class="form-label">Category name*</label>
    <select class="form-control" name="categoryName">
            <option value="">select</option>
            <option value=" Fruits "> Fruits </option>
            <option value=" Meat"> Meat</option>          
            <option value=" Frozen Foods"> Frozen Foods</option>            
            <option value=" Health Care"> Health Care</option>   
            <option value=" Baby Items"> Baby Items</option>   
            <option value=" Pet Care"> Pet Care</option>   
        </select>
</div>
</div>
</div>
<button  type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

@endsection