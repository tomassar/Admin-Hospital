
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <base href='/public'/>
    @include('admin.css');
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            
            <div class="container" style="padding-top:50px;display:flex;flex-direction: column;align-items:center;">
                @if(session()->has('message'))
                    <div class="alert alert-success" style="width:60vw;min-width:300px;">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{session()->get('message')}}
                    </div>
                @endif
                <form action="{{url('sendemail', $data->id)}}" method="POST">
                    @csrf
                    <div style="padding:15px;">
                        <label style='width:140px;' for="">Saludo: </label>
                        <input type="text" name="saludo" style="color:black" required>
                    </div>
                    
                    <div style="padding:15px;">
                        <label style='width:140px;' for="">Cuerpo:</label>
                        <input type="text" name="Cuerpo" style="color:black" required>
                    </div>

                    <div style="padding:15px;">
                        <label style='width:140px;' for="">Texto de Acción:</label>
                        <input type="text" name="textodeaccion" style="color:black" required>
                    </div>

                    <div style="padding:15px;">
                        <label style='width:140px;' for="">Url de Acción:</label>
                        <input type="text" name="urldeaccion" style="color:black" required>
                    </div>

                    <div style="padding:15px;">
                        <label style='width:140px;' for="">Pie de correo:</label>
                        <input type="text" name="pie" style="color:black" required>
                    </div>

                    <div style="padding:15px;">
                        <input type="submit" class="btn btn-success" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>