<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body class="gray-bg">
    <div class="container-sm mt-5" align="center">
        <div>
            <div>
                <h2>SELAMAT DATANG</h2>
            </div>
            @if(session('succses'))
                <div class="alert alert-success">
                    {{ session('succses') }}
                </div>
            @endif
            @if(session()->has('message'))
            <div class="alert alert-danger" role="alert">
                {{session('message')}}
            </div>
            @endif
            <div class="row">
                <form class="m-t" action="{{url('/auth/login')}}" method="post">
                        @csrf
                    <div class="form-group col-lg-3 mt-2">
                        <input type="text" id="text" name ="name" class="form-control" placeholder="Username" required="" autofocus>
                    </div>
                    <div class="form-group col-lg-3">
                        <input type="password" id="password" name="password" class="form-control password-field" placeholder="Password" required="">
                    </div>
                    <button type="submit" class="btn btn-primary block full-width m-b mt-3">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
