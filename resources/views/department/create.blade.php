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
</style>

    <h1> Create New Department </h1>
    <div class="row">
    <div class="col-md-5 offset-md-1">
             <form action="{{url('departments/create')}}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="name">Name: </label>
                    <input type="text" name="name" class="form-control">
                    @error('name')
                        <p class="text-danger"> {{$message}} </p>
                        
                    @enderror
               
                    <div class="form-group my-3">
                <button class="btn btn-primary" style="color:#bdde68; background-color:#5c5c5c; border: none;">
                        Add Department
                    </button>
                </div>
             </form>
        </div>
    </div>


@endsection