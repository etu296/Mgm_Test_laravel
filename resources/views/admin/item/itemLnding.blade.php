@extends('welcome')
@section('content')
<h2>Item</h2>
<p style="text-align:right;">
<a href="{{route('admin.item.createItem')}}" class="btn btn-success"><i class="fas fa-plus"></i> Add Item</a>
</p>
<table class="table table-success table-striped ">
  <thead>
    <tr>
     <th scope="col">SL</th>
      <th scope="col">Code</th>
      <th scope="col">Item Name </th>
      <th scope="col">Item Type</th>
      <th scope="col">Category</th>
      <th scope="col">Sub Category</th>
      <th scope="col">UoM</th>
      <th scope="col">Selling Price	</th>
      <th scope="col">Purchase Price</th>
      <th scope="col">Last Cost</th>
      <th scope="col">Avg Cost</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>

@endsection