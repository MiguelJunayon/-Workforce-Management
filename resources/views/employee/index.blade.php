@extends('pages.base')

@section('content')
    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <style>
    .table-custom {
        width: 80vw;
        border-collapse: collapse;
        background-color: #5c5c5c; /* Background color for the table */
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        
    }

    .table-custom th,
    .table-custom td {
        padding: 12px;
        text-align: left;
        border: 2px solid black;
        color: #bdde68; /* Text color for th and td */
        background-color: #5c5c5c;
        
    }

    .table-custom th {
        background-color: #5c5c5c;
        font-weight: bold;
    }

    .table-custom tr:hover {
        background-color:#5c5c5c;
    }

   
   
    
</style>


<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
    <a href="{{ url('/employees/create') }}" class="btn btn-primary me-md-2" type="button" style="color:#bdde68; background-color: #5c5c5c; border: none;">
        Add New Employee
    </a>
</div>



    <div class="table-container">
        <table class="table table-bordered table-striped table-sn table-custom" >
            <thead>
                <th >ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Update</th>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td class="text-center">
                            <a href="{{url('/employees/' .$employee->id)}}" class="btn btn-primary" style="color:#bdde68; background-color: #353635; border: none;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                  </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
