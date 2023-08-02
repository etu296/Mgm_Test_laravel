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
      <th scope="col">Supplier Name</th>
      <th scope="col">Supplier Mobile </th>
      <th scope="col">Shipping Address </th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($suppliers as $key=>$supplier)
<tr >
      <th >{{$key+1}}</th>
      <th>{{$supplier->supplierName}}</th>
      <th>{{$supplier->supplierPhn}}</th>
      <th>{{$supplier->supplierAddress}}</th>
      <th>
        <a href="" class="btn btn-primary"><i class="fas fa-eye"></i></a>
        <a href="" class="btn btn-warning" ><i class="fas fa-edit"></i></a>
        <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
      </th>
      <th>
      </th>
</tr>
@endforeach
  </tbody>
</table>

@endsection