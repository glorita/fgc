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
                    <a href="#">Alumnos</a>
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
                        <h1>Bienvenidos Instructores Freedive Gravedad Cero</h1>
                        <p>Mediante el presente módulo, los instructores certificados de la Escuela Freedive Gravedad Cero, podrán pagar y emitir certificados avalados para sus alumnos.</p>
                        <p><img src="{{URL::asset('/image/logoFGC.jpg')}}" alt="profile Pic" height="200" width="200"></p>
                        
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menú de Instructores</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


@endsection
