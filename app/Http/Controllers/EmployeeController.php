<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::paginate(5);
        return view('employee.index')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employee = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:employees,email',
            'joining_date' => 'required|date',
            'mobile_no' => 'required|string|unique:employees,mobile_no',
            'salary' => 'required|numeric|min:0',
            'address' => 'required|string',
            'job_title' => 'required|string|max:255'
        ]);

        Employee::create($employee);

        return redirect()->route('employee.index')->with('message', 'employee created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $employee = Employee::find($id);

        return view('employee.show')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employee = Employee::find($id);

        return view('employee.edit')->with('employee', $employee);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:employees,email,'.$id,
            'joining_date' => 'required|date',
            'mobile_no' => 'required|string|unique:employees,mobile_no,'.$id,
            'salary' => 'required|numeric|min:0',
            'address' => 'required|string',
            'job_title' => 'required|string|max:255'
        ];

        $request->validate($rules);

        $employee->update($request->all());
        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $employees = Employee::where('name', 'like', '%'.$search.'%')->orWhere('job_title', 'like' , '%'.$search.'%')->paginate(5);

        return view('employee.index')->with('employees', $employees);
    }
}
