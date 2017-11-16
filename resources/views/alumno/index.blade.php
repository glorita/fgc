
@extends('layouts.app')

@section('content')
<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Instructores FGO
                    </a>
                </li>
                <li>
                    <a href="curso">Registro de curso</a>
                </li>
                <li>
                    <a href="alumno">Alumnos</a>
                </li>
                <li>
                    <a href="#">Pagos Pendientes</a>
                </li>
              
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Módulo de Alumnos Freedive Gravedad Cero</h1>
                        <p>Mediante el presente módulo, los instructores certificados de la Escuela Freedive Gravedad Cero, podrán registrar y actualizar alumnos.
                            </p>
      
                    
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
        <th>Ciudad</th>
        <th>País</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>

      @foreach($alumnos as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['nombre']}}</td>
        <td>{{$post['apellido']}}</td>
        <td><a href="{{action('AlumnoController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
        <td><form action="{{action('AlumnoController@destroy', $post['id'])}}" method="post" >
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-default" type="submit">Eliminar</button>
            </form><td/>
        <td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
    
        
      </tr>
      @endforeach

  </table>
                            
     </div>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menú de Instructores</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection


 