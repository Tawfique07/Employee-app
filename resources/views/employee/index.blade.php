@extends('layout')


@section('page-content')


<table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Job Title</th>
        <th scope="col">Salary</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
        <tr>
          <th scope="row">{{$employee->id}}</th>
          <td>{{$employee->name}}</td>
          <td>{{$employee->job_title}}</td>
          <td>{{$employee->salary}}</td>
          <td><a href={{route('employee.show', $employee->id)}} class="btn btn-primary">Details</a></td>
        </tr>

        @endforeach

    </tbody>
</table>
{{$employees->links()}}


<a href={{route('employee.create')}} class="btn btn-success">Add New Employee</a>
@endsection
