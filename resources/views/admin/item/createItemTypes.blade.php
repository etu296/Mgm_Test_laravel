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

<form action="{{route('storeItemTypes')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="card card-warning">
<div class="card-header">
<h3 class="card-title">Create Item Types</h3>
</div>

<div class="card-body">
<form>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Item type code*</label>
<input required name="itemTypeCode" type="text" class="form-control" placeholder="Item Code">
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
<label for="exampleInputEmail1" class="form-label"> Item type name*</label>
    <select class="form-control" name="itemTypeName" required>
            <option value="">select</option>
            <option value=" Finished/Trading Goods "> Finished/Trading Goods </option>
            <option value="  Raw Material"> Raw Material</option>          
            <option value=" Asset"> Asset</option>            
            <option value=" Service"> Service</option>   
            <option value=" Packging Material"> Packging Material</option>   
            <option value=" Production tools"> Production tools</option>   
        </select></div>
</div>
</div>
<div class="row">
<div class="col-sm-6">


<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

@endsection