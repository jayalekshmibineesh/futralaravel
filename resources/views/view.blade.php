
@extends('index1')
@section('content')
<center>
   <table class="table table-bordered table striped table-danger mt-5" style="width:50%;">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Place</th>
        <th>Mobile</th>
        <th colspan='2'>Action</th>
      </tr>
          @foreach($view as $views)
           <tr>
            <td>{{$views->name}}</td>
            <td>{{$views->email}}</td>
            <td>{{$views->place}}</td>
            <td>{{$views->mobile}}</td>
            <td><a class="btn btn-primary" href="{{ route('edit',$views->id) }}"> Edit</a></td>
            <td><a class="btn btn-danger" href="{{ route('delete',$views->id) }}">Delete</a></td>
          </tr>   
          @endforeach
   </table>
</center>
@endsection