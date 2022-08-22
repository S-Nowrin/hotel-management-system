@extends('layouts.dashboard')
@section('content')
<div class="col-md-7 col-lg-8">
        <h4 class="mb-3">ADD CAR</h4>
        <form class="needs-validation" method="POST" action="{{ route('car.store') }}">
            @csrf
          <div class="row g-3">

          <div class="col-12">
              <label for="car_brand" class="form-label">Car Brand</label>
              <input type="text" class="form-control" id="car_brand" name="brand">
          </div>
          <div class="col-12">
              <label for="car_nameplate" class="form-label">Car Nameplate</label>
              <input type="text" class="form-control" id="car_nameplate" name="no_plate">
          </div>
          <div class="col-12">
              <label for="car_nameplate" class="form-label">Driver</label>
              <select name="driver_id" class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @foreach($drivers as $driver)
                <option value="{{$driver->id}}">{{$driver->name}}</option>
          @endforeach
             </select>

          </div>
          <button class="w-100 btn btn-primary btn-lg" type="submit">ADD Car</button>
        </form>
</div>
@endsection