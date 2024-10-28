<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('bootstrap.bootstrap-css')
    <title>تسجيل حساب جديد</title>
</head>

<body class="d-flex align-items-center justify-content-center">

    <div class="mt-5 container mt-75">
        <form method="post" action="{{ route('register-form') }}" class="bg-light p-2 rounded">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('login') }}" class="btn btn-primary">Back to login</a>
        </form>
    </div>

    @include('bootstrap.bootstrap-js')
</body>

</html>
