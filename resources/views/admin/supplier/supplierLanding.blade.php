@extends('welcome')
@section('content')
<h2>Item</h2>
<p style="text-align:right;">
<a href="{{route('admin.supplier.createSupplier')}}" class="btn btn-success"><i class="fas fa-plus"></i> Add Supplier</a>
</p>
<table class="table table-success table-striped ">
  <thead>
    <tr>
     <th scope="col">SL</th>
      <th scope="col">Supplier Code</th>
      <th scope="col">Supplier Name </th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>

@endsection