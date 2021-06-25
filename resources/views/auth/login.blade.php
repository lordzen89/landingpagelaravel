<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Digitalizador de documentos</title>
    <style>
        body {
            background-color: #25274D;
        }
    </style>
</head>

<body>
    <div class="container" style="max-width: 540px; margin-top:10px">
    <form action="{{ route('auth.check') }}" method="post">
    @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
        @endif
        @csrf
    <div class="container px-4">
        <div class="h2 text-center my-4">Digitalizador de documentos</div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <span class="text-danger">@error('email'){{ $message }}<br> @enderror </span>
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>
            <div class="mb-3 form-check">

            </div class=''>
            <button type="submit" class="btn btn-primary mx-3 float-end">Ingresar</button>
        </form>
        <div class="imgLogo mt-4 d-flex justify-content-center">
            <img class="img-fluid" src="/images/logo.png" alt="">
        </div>
    </div>
</form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
        crossorigin="anonymous"></script>
</body>

</html>
