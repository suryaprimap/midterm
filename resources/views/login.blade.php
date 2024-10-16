<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>

    <div class="text-center mt-5">
    <h2>Login</h2>
    <p>Fill the form below to login!</p>
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-start">
                    <form action="{{ route('login.submit') }}" method="POST" class="post">
                        @csrf
                        <label>Email Address</label>
                        <input type="text" name="email" class="form-control mb-2">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control mb-2">

                        <button class="btn btn-primary">Submit Login</button>
                    </form>

                    @if(session('Failed'))
                    <p class="text-danger">{{ session('Failed') }}</p>
                    @endif

                    <p class="mt-3 text-center">Don't have an account? <br> <a href="/registration">Register here</a></p>

                </div>
            </div>
        </div>
    </div>
    </div>

</body>
</html>
