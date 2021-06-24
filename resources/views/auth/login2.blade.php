<html>
<head>
    <title>Digitalizador de documentos</title>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <link rel="stylesheet" href="{{ asset('boostrap/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}">
    <style>
      body {
        background-color: #a4d0fb;
      }

      .site-container{
    position: absolute;
    width: 100%;
    min-height: 100vh;
    height: 100vh;
    top: 0;
}
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4>Digitalizador de Documentos</h4><br>
            <h4>Login</h4>
                <form action="{{ route('auth.check') }}" method="post">

                    @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif
                    @csrf
                    <div class="form-group">
                    <label for="">Nombre de usuario</label>
                    <input type="text" class="form-control" name="email" placeholder="Ingrese usuario">
                    <span class="text-danger">@error('email'){{ $message }}<br> @enderror </span>
                    <span class="">Nunca compartas tus contraseñas </span>
                    </div>
                    <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="text" class="form-control" name="password" placeholder="Ingrese password">
                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                    </div>

                <button type="submit" class="btn btn-block btn-primary col-3">Acceder</button>
                    <br>
                
                {{-- <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
             --}}
                </form>


            </div>
        <div class="container logo m-auto w-50 ">
          <img src="/images/logo.png" alt="" class="img-fluid">
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    

</body>

</html>