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
  @foreach($itemTypes as $key=>$itemType)
<tr >
      <th >{{$key+1}}</th>
      <th>{{$itemType->itemTypeCode}}</th>
      <th>{{$itemType->itemTypeName}}</th>
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