@extends('index1')
@section('content')
@if(session('success'))
<div class="alert alert-success">
  {!!session('success')!!}
</div>
@endif
<section class="">  
  <!-- <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6"> -->
          <div class="card" style="background-color:#fae6c4; with:500border-radius: 15px; margin-top:20%;">
            <div class="card-body p-5">
              <h3 class="text-uppercase text-center mb-5">Edit user Details</h3>
              <form action="{{route('update',$data->id)}}" method="POST">
                @csrf
                <div class="form-outline mb-4 mt-2">
                  <input type="text" name="name" value="{{$data->name}}" class="form-control form-control-lg" />
                  <input type="email" name="email" value="{{$data->email}}"  class="form-control form-control-lg mt-2" />
                  <input type="password" name="password" value="{{$data->password}}" class="form-control form-control-lg mt-2" />
                  <input type="number" name="mobile" value="{{$data->mobile}}" class="form-control form-control-lg mt-2 mb-2" />
                 <input type="text" name="place" value="{{$data->place}}" class="form-control form-control-lg mt-2 mb-2">
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary"name="submit" value="register">Update</button>
                 </div>
              </form>
            </div>
          </div>
        <!-- </div>
      </div>
    </div>
  </div> -->
</section>


@endsection