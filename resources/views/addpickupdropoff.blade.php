@extends('layouts.dashboard')
@section('content')
<div class="col-md-7 col-lg-8">
        <h4 class="mb-3">ADD PICKUP DROPOFF</h4>
        <form class="needs-validation" novalidate="">
          <div class="row g-3">

          <div class="col-12">
              <label for="pickup_location" class="form-label">Pickup Location></label>
              <input type="text" class="form-control" id="pickup_location" name="pickup_location">
          </div>
          <div class="col-12">
              <label for="dropoff_location" class="form-label">Dropoff Location</label>
              <input type="text" class="form-control" id="dropoff_location" name="dropoff_location">
          </div>
          <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </form>
</div>
@endsection