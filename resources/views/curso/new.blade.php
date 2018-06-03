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
                            <div class="col-md-8 col-md-offset-2">
                        <h1>Registrar Curso</h1>
                        <p>Mediante el presente módulo, los instructores certificados de la Escuela Freedive Gravedad Cero, podrán registrar los cursos que serán  o han sido dictados.</p>
                        <div class="panel-body">
                    
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('store') }}">
                     
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('pais') ? ' has-error' : '' }}">
                            <label for="pais" class="col-md-4 control-label">Pais:</label>

                            <div class="col-md-6">
                           
                                    <select class="form-control" id="pais">
                                      <option>Colombia</option>
                                      <option>Ecuador</option>
                                      <option>Estados Unidos</option>
                                      <option>Panama</option>
                                      <option>Venezuela</option>
                                    </select>

                                @if ($errors->has('pais'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pais') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fechai') ? ' has-error' : '' }}">
                            <label for="fechai" class="col-md-4 control-label">Fecha de Inicio:</label>

                            <div class="col-md-6">
                                <input id="fechai" type="date" class="form-control" name="fechai" value="{{ old('fechai') }}" required>

                                @if ($errors->has('fechai'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fechai') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fechaf') ? ' has-error' : '' }}">
                            <label for="fechaf" class="col-md-4 control-label">Fecha Fin:</label>

                            <div class="col-md-6">
                                <input id="fechaf" type="date" class="form-control" name="fechaf" required>

                                @if ($errors->has('fechaf'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fechaf') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Tipo de Curso:</label>

                            <div class="col-md-6">
                                 <select class="form-control" id="tcurso">
                                      <option>Curso Básico - Nivel 1</option>
                                      <option>Curso Básico - Nivel 1 - Enfocado a la Pesca Submarina</option>
                                      <option>Curso Avanzado - Nivel 2 </option>
                                      <option>Curso Avanzado - Nivel 2- Enfocado a la Pesca Submarina</option>
                                      <option>Curso de Rescate y Salvamento - Nivel 3</option>
                                      <option>Curso de Instructor</option>
                                      <option>Curso de Instructor Master</option>
                                      <option>Curso Avanzado: Apnea Competitiva en Piscina</option>
                                      <option>Curso Avanzado: Apnea Competitiva en Profundidad</option>
                                    </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nparticipantes') ? ' has-error' : '' }}">
                            <label for="nparticipantes" class="col-md-4 control-label">Nro. Participantes:</label>

                            <div class="col-md-6">
                                <input id="nparticipantes" type="number" class="form-control" name="nparticipantes" required>

                                @if ($errors->has('nparticipantes'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nparticipantes') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar Curso
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                            
                        </p>
                        
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menú de Instructores</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


@endsection
