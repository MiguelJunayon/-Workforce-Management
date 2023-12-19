<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index() {
        $department = Department::orderBy('id')->get();

        return view('department.index', ['departments' => $department]);
    }
    

    public function create() {
        return view('department.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            
        ]);
      
        Department::create([
            'name'  => $request->name,
           
          ]);
      
        return redirect('/departments')->with('message', 'A new department has been added');
      }
 
      public function edit(Department $department)
      {
          return view('department.edit', compact('department'));
      }
  
      public function update(department $department, Request $request) 
      {
          $request->validate([
              'name' => 'required',
          ]);
  
          $department->update($request->all());
          return redirect('/departments')->with('message', "$department->name has been updated.");
      }
    
        public function delete(department $department)
        {
            $department->delete();
            
            return redirect('/departments')->with('message', "$department->name has been deleted successfully");
        }
    }
    

  
   