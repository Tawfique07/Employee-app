@extends('layout')


@section('page-content')


<table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Job Title</th>
        <th scope="col">Salary</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
        <tr>
          <th scope="row">{{$employee->id}}</th>
          <td>{{$employee->name}}</td>
          <td>{{$employee->job_title}}</td>
          <td>{{$employee->salary}}</td>
        </tr>

        @endforeach

    </tbody>
</table>
{{$employees->links()}}

@endsection
