@extends('layout')

@section('page-content')

    <div class="container d-flex">
        <a href={{route('employee.index')}} class="btn btn-primary"> Back </a>
    </div>

    <table class="table table-bordered my-2">
        <tr>
            <th>Name</th>
            <td>{{$employee->name}}</td>
        </tr>
        <tr>
            <th>Job Title</th>
            <td>{{$employee->job_title}}</td>
        </tr>
        <tr>
            <th>Salary</th>
            <td>{{$employee->salary}}</td>
        </tr>
    </table>

    <div class="container d-flex">
        <a href={{route('employee.edit', $employee->id)}} class="btn btn-primary"> Edit </a>
    </div>

@endsection
