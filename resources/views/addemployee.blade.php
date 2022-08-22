@extends('layouts.dashboard')
@section('content')
<div class="col-md-7 col-lg-8">
        <h4 class="mb-3">ADD Employee</h4>
        <form class="needs-validation" method="POST" action="{{ route('employee.store') }}">
            @csrf
          <div class="row g-3">
          <div class="col-12">
              <label for="employee_name" class="form-label">Employee Name</label>
              <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="col-12">
              <label for="designation" class="form-label">Designation</label>
              <input type="text" class="form-control" id="designation" name="designation">
          </div>
          <div class="col-12">
              <label for="salary" class="form-label">Salary</label>
              <input type="text" class="form-control" id="salary" name="salary">
          </div>

          <button class="w-100 btn btn-primary btn-lg" type="submit">Add</button>
        </form>
</div>
@endsection