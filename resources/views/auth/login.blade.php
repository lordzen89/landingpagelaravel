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
            background-color: #a4d0fb;
        }
    </style>
    <script>
        //chequeo de correo bien formateado
        (function() {
              'use strict';
              window.addEventListener('load', function() {
                  var forms = document.getElementsByClassName('needs-validation');
                  var validation = Array.prototype.filter.call(forms, function(form) {
                  form.addEventListener('submit', function(event) {
                      if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                      }
                      form.classList.add('was-validated');
                  }, false);
                  });
              }, false);
              })();
    </script>
    
</head>

<body>
    @if (\Session::has('bloqueado'))
     
      <!-- Modal -->
      <div class="modal fade" id="cuentaBloqueadaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Cuenta Bloqueada</h5>
          
            </div>
            <div class="modal-body">
              Lo sentimos, su cuenta ha sido bloqueada por demasiados intentos de logueo fallidos.
			  Contacte al administrador para desbloquearla.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" onclick="cerrarModal()">Cerrar</button>
             
            </div>
          </div>
        </div>
      </div>

      
      
    @endif
    @if (\Session::has('passwordinvalida'))
     
    <!-- Modal -->
    <div class="modal fade" id="passwordInvalida" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Contraseña incorrecta</h5>
        
          </div>
          <div class="modal-body">
            No se reconoce su contraseña. Intente nuevamente.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" onclick="cerrarModal1()">Cerrar</button>
           
          </div>
        </div>
      </div>
    </div>

    
    
  @endif
  
  @if (\Session::has('correoinvalido'))
     
  <!-- Modal -->
  <div class="modal fade" id="correoInvalido" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Correo desconocido</h5>
      
        </div>
        <div class="modal-body">
          No se reconoce su correo electrónico. Intente nuevamente.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" onclick="cerrarModal1()">Cerrar</button>
         
        </div>
      </div>
    </div>
  </div>

  
  
@endif  
    <div class="container" style="max-width: 540px; margin-top:10px">
    <form action="{{ route('auth.check') }}"  class="row position-relative flex-column needs-validation" method="post" novalidate>
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
                <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                <span class="text-danger">@error('email'){{ $message }}<br> @enderror </span>
                <div class="valid-feedback feedback-pos">
                    
                  </div>
                  <div class="invalid-feedback feedback-pos">
                    Por favor ingrese email válido
                  </div>
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
                {{-- <span class=" text-danger">@error('password'){{ $message }} @enderror</span> --}}
                
                

                <div class="valid-feedback feedback-pos">
                    
                  </div>
                  <div class="invalid-feedback feedback-pos">
                    Por favor ingrese la contraseña
                  </div>
            </div>
            <div class="mb-3 form-check">

            </div class=''>
            <button value="validate" type="submit" class="btn btn-primary mx-3 float-end">Ingresar</button>
        </form>

{{-- comment --}}

    
    

{{-- comment --}}

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
       
        @if (\Session::has('bloqueado'))
            <script>
                var myModal = new bootstrap.Modal(document.getElementById('cuentaBloqueadaModal'))
                myModal.show()
                
                function cerrarModal(){
                myModal.hide()
                }
            </script>
        @endif  

        @if (\Session::has('passwordinvalida'))
            <script>
                var myModal1 = new bootstrap.Modal(document.getElementById('passwordInvalida'))
                myModal1.show()
                
                function cerrarModal1(){
                myModal1.hide()
                }
            </script>
        @endif
        
        @if (\Session::has('correoinvalido'))
            <script>
                var myModal1 = new bootstrap.Modal(document.getElementById('correoInvalido'))
                myModal1.show()
                
                function cerrarModal1(){
                myModal1.hide()
                }
            </script>
        @endif  
        
       
          
</body>

</html>