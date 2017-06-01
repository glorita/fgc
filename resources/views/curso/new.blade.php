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
                    <a href="curso">Course Registry</a>
                </li>
                <li>
                    <a href="#">Courses</a>
                </li>
                <li>
                    <a href="#">Certificates Payments</a>
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
                        
 <div class="panel panel-default">
  <div class="panel-heading">Course Information</div>
  <div class="panel-body">
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
      </div>
  <div class="panel-heading">Participants List </div>
  <div class="panel-body">
  
    <table>
    	<thead>
            <tr>
		<th><label>Identification ID</label></th>
                <th><label>Complete Name</label></th>
                <th><label>Date of Birthday</label></th>
		<th><label>Blood Type</label></th>
                <th><label>City Address</label></th>
                <th><label>Nationality</label></th>
		<th></th>
            </tr>
	</thead>
	
	
        <tbody>
            <tr>
		<td><input class="form-control" name="identification[]" type="text" placeholder="ID" /></td>
                <td><input class="form-control" name="name[]" type="text" placeholder="Name" /></td>
                <td>
               
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
       
                </td>
                <td><select class="form-control" id="blood" name="blood[]">
      
                                                    <option value="">Blood Type</option>
                                                    <option value="A+">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="AB-">AB-</option>
                                                  </select></td>
                <td><input class="form-control" name="city[]" type="text" placeholder="City Address" /></td>
		<td><input class="form-control" name="nationality[]" type="text" placeholder="Nationality" /></td>
                <td><button class="btn btn-success btn-add" type="button">
			<i class="glyphicon glyphicon-plus gs"></i>
                    </button>
		</td>
            </tr>
	</tbody>
	</table>
<div class="clear"></div>
  
  </div>
  <div class="panel-footer"><small>Haga clic <span class="glyphicon glyphicon-plus gs"></span> para agregar otro alumno al curso</small>, <small>Haga clic <span class="glyphicon glyphicon-minus gs"></span> para eliminar un alumno</small></div>

</div>
	
	
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menú de Instructores</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


@endsection
