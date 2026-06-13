<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Student Management System</title>
</head>
<body class="bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center ">
                <h1>Student Management System</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <h1>@yield('title')</h1>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-8">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-8">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>