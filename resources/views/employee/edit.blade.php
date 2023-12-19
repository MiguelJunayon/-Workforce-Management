@extends('pages.base')

@section('content')

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="deleteEmployeeModal" tabindex="-1" aria-labelledby="deleteEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteEmployeeModalLabel">Delete Employee</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('employees/delete/' . $employee->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Are you sure you want to delete this employee?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Delete Employee</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #353635;
    }

    h1 {
        font-size: 2.5em;
        color: #bdde68;
        font-family: Monospace;
    }

    .form-label {
        font-weight: bold;
    }

    label {
        color: #bdde68;
    }

    .form-control {
        width: 27vw;
        padding: 0.375rem 0.75rem;
        margin-bottom: 1rem;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
    }

    .btn-primary {
        color: #bdde68;
        border-color: #007bff;
        border-radius: 10px;
        background-color: #5c5c5c;
        border: none;
    }
    button{
      width: 25vw;
    }

    button:hover {
        border-color: #0056b3;
    }

    .text-danger {
        color: #dc3545;
    }
</style>

<h1>Edit Employee</h1>
<div class="row">
    <div class="col-md-5 offset-md-1">
        <form action="{{url('employees/' .$employee->id)}}" method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="name">Name: </label>
                <input type="text" name="name" class="form-control" value="{{$employee->name}}">
                @error('name')
                <p class="text-danger"> {{$message}} </p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="email">Email: </label>
                <input type="text" name="email" class="form-control" value="{{$employee->email}}">
                @error('email')
                <p class="text-danger"> {{$message}} </p>
                @enderror
            </div>

            <div class="form-group my-3 d-flex justify-content-between">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger me-md-2 mt-2" data-bs-toggle="modal" data-bs-target="#deleteEmployeeModal">
                    Delete Employee
                </button>
                <button class="btn btn-primary mt-2" type="submit">Edit Employee</button>
            </div>

        </form>
    </div>
</div>

@endsection
