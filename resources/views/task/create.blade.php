@extends('pages.base')

@section('content')
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
        width:20vw;
    }

    .form-control {
        width: 27vw;
        padding: 0.375rem 0.75rem;
        margin-bottom: 1rem;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
    }

    .btn-primary {
        color: #fff;
        border-color: #007bff;
        border-radius: 10px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .text-danger {
        color: #dc3545;
    }
    select{
        width: 30vw;
    }
</style>

<h1>Create New Task</h1>

<div class="row">
<div class="col-md-5 offset-md-1">
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="employee_id">Select Employee:</label>
                <select name="employee_id" id="employee_id" class="form-select">
                    @foreach ($employees as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
                @error('employee_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="title">Title: </label>
                <input type="text" name="title" class="form-control">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="description">Description: </label>
                <input type="text" name="description" class="form-control">
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary" style="color:#bdde68; background-color:#5c5c5c; border: none;">Add Task</button>
            </div>
        </form>
    </div>
</div>

@endsection
