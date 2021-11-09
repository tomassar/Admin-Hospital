
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
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
                <div align='center' style='padding:70px;'>
                    <table>
                        <tr style='background-color:#5691838F ;'>
                            <th style='padding:10px;font-size:20px;color:white;'>Nombre</th>
                            <th style='padding:10px;font-size:20px;color:white;'>Teléfono</th>
                            <th style='padding:10px;font-size:20px;color:white;'>Especialidad</th>
                            <th style='padding:10px;font-size:20px;color:white;'>Habitación</th>
                            <th style='padding:10px;font-size:20px;color:white;'>Acciones</th>
                        </tr>
                        @foreach($doctors as $doctor)
                        <tr style='background-color:rgba(191, 191, 191, 0.6) ;' align='center'>
                            <td style='padding:10px;font-size:15px;color:white;'>{{$doctor->name}}</td>
                            <td style='padding:10px;font-size:15px;color:white;'>{{$doctor->phone}}</td>
                            <td style='padding:10px;font-size:15px;color:white;'>{{$doctor->speciality}}</td>
                            <td style='padding:10px;font-size:15px;color:white;'>{{$doctor->room}}</td>
                            <td style='padding:10px;font-size:15px;color:white;'><a class="btn btn-sm btn-danger" href="{{url('delete_doctor',$doctor->id)}}">Eliminar</a><a class="btn btn-sm btn-primary" href="{{url('update_doctor',$doctor->id)}}">Actualizar</a></td>
                        </tr>

                        @endforeach
                    </table>
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