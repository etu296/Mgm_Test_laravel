@extends('welcome')
@section('content')
<h2>Item Category</h2>
<p style="text-align:right;">
<a href="{{route('admin.item.createItemCategory')}}" class="btn btn-success"><i class="fas fa-plus"></i> Add Item Category</a>
</p>
<table class="table table-success table-striped ">
  <thead>
    <tr>
     <th scope="col">SL</th>
      <th scope="col">Category Code</th>
      <th scope="col">Category Name </th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
@foreach($itemCetagories as $key=>$itemCetagory)
<tr >
      <th >{{$key+1}}</th>
      <th>{{$itemCetagory->categoryCode}}</th>
      <th>{{$itemCetagory->categoryName}}</th>
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