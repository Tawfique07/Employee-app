@extends('layout')


@section('page-content')

<form class="row g-5" method="POST" action="{{route('employee.store')}}">
    @csrf
    <div class="col-md-6">
      <label for="name" class="form-label">Name</label>
      <input
      type="name"
      class="form-control"
      id="name"
      name="name"
      value={{old("name")}}
      >
      @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-6">
      <label for="email" class="form-label">Email</label>
      <input
        type="email"
        class="form-control"
        id="email"
        name="email"
        value={{old("email")}}
        >
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="job_title" class="form-label">Job Title</label>
        <input
          type="text"
          class="form-control"
          id="job_title"
          name="job_title"
          value={{old("job_title")}}
          >
        @error('job_title')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>


    <div class="col-md-6">
        <label for="salary" class="form-label">Salary</label>
        <input
          type="number"
          class="form-control"
          id="salary"
          name="salary"
          value={{old("salary")}}
          >

        @error('salary')
          <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="address" class="form-label">Address</label>
        <input
          type="text"
          class="form-control"
          id="address"
          name="address"
          value={{old("address")}}
          >

        @error('address')
          <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="mobile_no" class="form-label">Mobile No</label>
        <input
          type="text"
          class="form-control"
          id="mobile_no"
          name="mobile_no"
          value={{old("mobile_no")}}
          >
        @error('mobile_no')
          <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="joining_date" class="form-label">Joining Date</label>
        <input
          type="date"
          class="form-control"
          id="joining_date"
          name="joining_date"
          value={{old("joining_date")}}
          >
        @error('joining_date')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-12 mt-2">
      <button type="submit" class="btn btn-primary">Create</button>
      <a href={{route('employee.index')}} class='btn btn-danger'>Cancel</a>
    </div>
</form>

@endsection
