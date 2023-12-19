<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #353635;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1500px;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .sidebar {
            width: 250px;
            background-color: #353635;
            color: #bdde68;
            padding: 20px 10px;
            position: fixed;
            height: 100%;
            overflow: auto;
            box-shadow:0 0 5px black;
            
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .sidebar h2 {
            color: #bdde68;
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar nav ul {
            list-style: none;
            padding: 0;
        }

        .sidebar nav ul li {
            margin-bottom: 10px;
        }

        .sidebar nav ul li a {
            text-decoration: none;
            color: #bdde68;
            padding: 15px 20px;
            border-radius: 25px;
            transition: 0.2s ease-in-out;
            display: block;
        }

        .sidebar nav ul li a:hover {
            background-color: #bdde68;
            color: #fff;
            border-color: #fff;
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Workforce Management System</h2>
            <nav>
                <ul>
                    <li>
                        <a class="{{Route::is('home') ? 'active' : ''}}" href="{{url('/')}}">Home</a>
                    </li>
                    <li>
                        <a class="{{Route::is('employees') ? 'active' : ''}}" href="{{url('/employees')}}">Employee</a>
                    </li>
                    <li>
                        <a class="{{Route::is('departments') ? 'active' : ''}}" href="{{url('/departments')}}">Department</a>
                    </li>
                    <li>
                        <a class="{{Route::is('tasks') ? 'active' : ''}}" href="{{url('/tasks')}}">Task</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>
