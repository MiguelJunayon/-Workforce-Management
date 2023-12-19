<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
        $employee = Employee::orderBy('id')->get();

        return view('employee.index', ['employees' => $employee]);
    }
    
    public function create() {
        return view('employee.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees',
            
        ]);
      
        Employee::create([
            'name'  => $request->name,
           'email'     => $request->email ,
           
           
          ]);
      
        return redirect('/employees')->with('message', 'A new employee has been added');
      }
 
      public function edit(Employee $employee)
      {
          return view('employee.edit', compact('employee'));
      }
  
      public function update(Employee $employee, Request $request) 
      {
          $request->validate([
              'name' => 'required',
              'email' => 'required|email|unique:employees,email,'.$employee->id,
          ]);
  
          $employee->update($request->all());
          return redirect('/employees')->with('message', "$employee->name has been updated.");
      }
    
        public function delete(Employee $employee)
        {
            $employee->delete();
            
            return redirect('/employees')->with('message', "$employee->name has been deleted successfully");
        }
    }
    

  
   