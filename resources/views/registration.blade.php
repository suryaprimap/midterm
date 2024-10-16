<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>

    <div class="text-center mt-5">
    <h2>Registration</h2>
    <p>Fill the form below to regist!</p>
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-start">
                    <form action="{{ route('registration.submit') }}" method="POST" class="post">
                        @csrf
                        <label>Full Name</label>
                        <input type="text" name="name" class="form-control mb-2">
                        <label>Email Address</label>
                        <input type="text" name="email" class="form-control mb-2">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control mb-2">

                        <button class="btn btn-primary">Submit Registration</button>
                    </form>

                    <p class="mt-3 text-center">Already have an account? <br> <a href="/login">Login here</a></p>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
</html>
