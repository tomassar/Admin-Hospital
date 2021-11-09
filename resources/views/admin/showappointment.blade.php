
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    @include('admin.css');
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      
      @include('admin.sidebar');
      <!-- partial -->
      @include('admin.navbar');
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            
            <div class="container" style="padding-top:50px;display:flex;flex-direction: column;align-items:center;">
                <div align='center' style='padding:70px;'>
                    <table>
                        <tr style='background-color:#5691838F ;'>
                            <th style='padding:10px;font-size:20px;color:white;'>Nombre Cliente</th>
                            <th style='padding:10px;font-size:20px;color:white;'>Email</th>
                            <th style='padding:10px;font-size:20px;color:white;'>Teléfono</th>
                            <th style='padding:10px;font-size:20px;color:white;'>Nombre Doctor</th>
                            <th style='padding:10px;font-size:20px;color:white;'>Fecha</th>
                            <th style='padding:10px;font-size:20px;color:white;'>Mensaje</th>
                            <th style='padding:10px;font-size:20px;color:white;'>Estado</th>
                            <th style='padding:10px;font-size:20px;color:white;'>Acciones</th>
                        </tr>
                        @foreach($appoint as $appoints)
                        <tr style='background-color:rgba(191, 191, 191, 0.6) ;' align='center'>
                            <td style='padding:10px;font-size:15px;color:white;'>{{$appoints->name}}</td>
                            <td style='padding:10px;font-size:15px;color:white;'>{{$appoints->email}}</td>
                            <td style='padding:10px;font-size:15px;color:white;'>{{$appoints->phone}}</td>
                            <td style='padding:10px;font-size:15px;color:white;'>{{$appoints->doctor}}</td>
                            <td style='padding:10px;font-size:15px;color:white;'>{{$appoints->date}}</td>
                            <td style='padding:10px;font-size:15px;color:white;'>{{$appoints->message}}</td>
                            <td style='padding:10px;font-size:15px;color:white;'>{{$appoints->status}}</td>
                            <td style='padding:10px;font-size:15px;color:white;'><a class="btn btn-sm btn-success" href="{{url('approve',$appoints->id)}}">Aprobar</a><a class="btn btn-sm btn-danger" href="{{url('cancel_appointment',$appoints->id)}}">Cancelar</a></td>
                        </tr>

                        @endforeach
                    </table>
                </div>
                
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