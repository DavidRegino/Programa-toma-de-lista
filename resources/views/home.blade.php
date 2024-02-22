@extends('app')

@section('home')
    <h5 class="mb-2">Grupos Cetis 107</h5>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
          <a href="{{asset('/alumno/asistencia')}}">
            <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">6AVP</span>
            </div>
            <!-- /.info-box-content -->
            </div>
          </a>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
          <a href="{{asset('/alumno/asistencia')}}">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="fa fa-users"></i></span>
          
              <div class="info-box-content">
                  <span class="info-box-text">6AVO</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>
        </div>
        
        
            <!-- /.info-box -->
        
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
          <a href="{{asset('/alumno/asistencia')}}">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="fa fa-users text-light"></i></span>
          
              <div class="info-box-content">
                  <span class="info-box-text">6AVE</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
          <a href="{{asset('/alumno/asistencia')}}">
            <div class="info-box">
              <span class="info-box-icon bg-secondary"><i class="fa fa-users"></i></span>
          
              <div class="info-box-content">
                  <span class="info-box-text">6AVC</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>
        </div>

        <div class="col-md-3 col-sm-6 col-12">
          <a href="{{asset('/alumno/asistencia')}}">
            <div class="info-box">
              <span class="info-box-icon bg-danger"><i class="fa fa-users"></i></span>
          
              <div class="info-box-content">
                  <span class="info-box-text">6AVCO</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>
        </div>
        <!-- /.col -->
    </div>
  </div>
    <!--
    <br>
    <h5 class="mb-2">Registros</h5>
    <div class="row">
        <div class="col-sm-6">
            <div class="card card-outline card-warning">
                <div class="card-header">
                  <h3 class="card-title">Otra información</h3>
                </div>
                <div class="card-body">
                  Contenido
                </div>
                <div class="card-footer">
                  Footer
                </div>
              </div>
        </div>
        <div class="col-sm-6">
            <div class="card card-outline card-danger">
                <div class="card-header">
                  <h3 class="card-title">Más información</h3>
                </div>
                <div class="card-body">
                  contenido puede ser una tabla
                </div>
                <div class="card-footer">
                  footer
                </div>
              </div>
        </div>
    </div> -->
@endsection
