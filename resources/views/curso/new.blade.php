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
                        <h3 align="center">PLANILLA SOLICITUD DE CARNETS Y CERTIFICACIONES INTERNACIONALES 
ESCUELA AMERICANA “FREEDIVE GRAVEDAD CERO”.
</h3>
                        <form class="form-inline">
                            <div class="form-group"> <!-- Start Date -->
                            <input class="form-control" id="sdate" name="sdate" type="date" placeholder="Start Date"/>
                            </div>
                            <div class="form-group"> <!-- End Date -->
                            <input class="form-control" id="edate" name="edate" type="date" placeholder="End Date"/>
                            </div>
                            <div class="form-group"> <!-- Curso -->
                            <input class="form-control" id="level" name="level" type="text" placeholder="Course Level"/>
                            </div>
                            <div class="form-group"> <!-- Curso -->
                            <input class="form-control" id="country" name="country" type="text" placeholder="Country"/>
                            </div>
                            
                        </form>
                        <h4>Registro de Alumnos</h4>
                       <form class="form-inline">
	
                        <div class="form-group"> <!-- Username field -->
                            <input class="form-inline" id="first_name" name="first_name" type="text" placeholder="First Name"/>
                        </div>
	
                        <div class="form-group"> <!-- Password field -->
                        <input class="form-inline" class="col-xs-3" id="last_name" name="last_name" type="text" placeholder="Last Name"/>
                        </div>
                        <div class="form-group"> <!-- Password field -->
                            <input class="form-inline" id="id" name="id" type="text" placeholder="Identification ID"/>
                        </div>
                        <div class="form-group"> <!-- Password field -->
                            <input class="form-inline" id="nationality" name="nationality" type="text" placeholder="Nationality"/>
                        </div>
                        <div class="form-group"> <!-- Date of Birthday -->
                            <input class="form-inline" id="birthday" name="birthday" type="date" placeholder="Date of Birthday"/>
                        </div>
                        <div class="form-group"> <!-- Blood Type -->
                            <input class="form-control" id="blood" name="blood" type="text" placeholder="Blood Type"/>
                        </div>
                         <div class="form-group"> <!-- City -->
                            <input class="form-control" id="city" name="city" type="text" placeholder="City Adress"/>
                        </div>
	
	
	
	
	
	
</form>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menú de Instructores</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


@endsection
