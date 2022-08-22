@extends('layouts.dashboard')
@section('content')
<div class="col-md-7 col-lg-8">
        <h4 class="mb-3">ADD Menu</h4>
        <form class="needs-validation" novalidate="">
          <div class="row g-3">

          <div class="col-12">
              <label for="add_menu" class="form-label">Add Menu></label>
              <input type="text" class="form-control" id="add_menu" name="add_menu">
          </div>
          <div class="col-12">
              <label for="menu_type" class="form-label">Menu Type</label>
              <input type="text" class="form-control" id="menu_type" name="menu_type">
          </div>
          <div class="col-12">
              <label for="price" class="form-label">Price</label>
              <input type="text" class="form-control" id="price" name="price">
          

          <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </form>
</div>
@endsection