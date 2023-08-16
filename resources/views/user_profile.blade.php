@extends('index1')
@section('content')

welcome
<div class="container">
    <div class="row">
        <div class="card" style="width:50%; background-color:pink;">
            <h3>Name: {{ $view->name }}</h3>
            <p>Email: {{ $view->email }}</p>
            <p>Place: {{ $view->place }}</p>
            <p>mobile: {{ $view->mobile }}</p>
            <a class="btn btn-primary  display: inline-block; " href="{{ route('edit',$view->id) }}"> Edit</a>&nbsp;
            <a class="btn btn-danger  display: inline-block; " href="{{ route('delete',$view->id) }}">Delete</a>
            <!-- Display more user details here -->
        </div>
    </div>
</div>
@endsection


