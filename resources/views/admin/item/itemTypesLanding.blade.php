@extends('welcome')
@section('content')
<h2>Item</h2>
<p style="text-align:right;">
<a href="{{route('admin.item.createItemTypes')}}" class="btn btn-success"><i class="fas fa-plus"></i> Add Item Types</a>
</p>
<table class="table table-success table-striped ">
  <thead>
    <tr>
     <th scope="col">SL</th>
      <th scope="col">Item Type Code</th>
      <th scope="col">Item Type Name</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>

@endsection