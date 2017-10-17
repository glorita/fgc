
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
                        <p>Mediante el presente módulo, los instructores certificados de la Escuela Freedive Gravedad Cero, podrán pagar y emitir certificados avalados para sus alumnos.</p>
      
                            
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>--</th>
        <th>--</th>
      </tr>
    </thead>

      @foreach($alumnos as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['nombre']}}</td>
        <td>{{$post['apellido']}}</td>
        <td><a href="{{action('AlumnoController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
        <td><form action="{{action('AlumnoController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
            </form><td/>
      </tr>
      @endforeach

  </table>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menú de Instructores</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


@endsection


 