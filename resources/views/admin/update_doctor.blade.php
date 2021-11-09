
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <base href="/public";
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

                <form action="{{url('edit_doctor',$doctor->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding:15px;">
                        <label style='width:140px;' for="">Nombre: </label>
                        <input type="text" name="name" style="color:black" value="{{$doctor->name}}" required>
                    </div>
                    
                    <div style="padding:15px;">
                        <label style='width:140px;' for="">Teléfono:</label>
                        <input type="number" name="number" style="color:black" value="{{$doctor->phone}}" required>
                    </div>

                    <div style="padding:15px;">
                        <label style='width:140px;' for="">Especialidad:</label>
                        <select name="speciality" style="color:black">
                            <option value="">Seleccionar</option>
                            <option value="dermatologo">Dermatólogo</option>
                            <option value="cardiologo">Cardiólogo</option>
                            <option value="oftalmologo">Oftalmólogo</option>
                            <option value="dentista">Dentista</option>
                        </select>
                    </div>

                    <div style="padding:15px;">
                        <label style='width:140px;' for="">Nro. Habitación:</label>
                        <input type="number" name="room" style="color:black" value="{{$doctor->room}}" required>
                    </div>

                    <div style="padding:15px;">
                        <label style='width:140px;' for="">Imágen: </label>
                        <input type="file" name="file">
                    </div>

                    <div style="padding:15px;">
                        <input type="submit" class="btn btn-success" value="Enviar">
                    </div>
                </form>
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