@extends('layouts.dashboard')
@section('content')
<div class="col-md-7 col-lg-8">
        <h4 class="mb-3">ADD PICKUP DROPOFF</h4>
        <form class="needs-validation" method="POST" action="{{ route('facility.store') }}">
          @csrf
          <div class="row g-3">

          <div class="col-12">
              <label for="pickup_location" class="form-label">Pickup Location></label>
              <input type="text" class="form-control" id="pickup_location" name="pick_location">
          </div>
          <div class="col-12">
              <label for="dropoff_location" class="form-label">Dropoff Location</label>
              <input type="text" class="form-control" id="dropoff_location" name="drop_location">
          </div>
          <div class="col-12">
            <div class="col-12">
              <label for="car_nameplate" class="form-label">Car</label>
              <select name="car_id" class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @foreach($cars as $car)
                <option value="{{$car->id}}">{{$car->no_plate}}</option>
          @endforeach
             </select>
        </div>
        <div class="col-12">
          <label for="dropoff_location" class="form-label">Cost</label>
          <input type="text" class="form-control" id="dropoff_location" name="cost">
      </div>
          <button class="w-100 btn btn-primary btn-lg" type="submit">ADD</button>
        </form>
</div>
@endsection