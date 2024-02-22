@extends('app')

@section('home')
    <h5 class="mb-2">Grupos Cetis 107</h5>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">2AVP</span>
            </div>
            <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-success"><i class="fa fa-users"></i></span>
        
            <div class="info-box-content">
                <span class="info-box-text">2AVO</span>
                
            </div>
            <!-- /.info-box-content -->
        
            <div class="info-box-buttons">
                <button type="button" class="btn btn-primary btn-sm"><a href="{{asset('/alumno/asistencia')}}" class="text-light" value="1">Pase De Lista</a></button>
            </div>
        </div>
        
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="fas fa-cogs"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Mantenimientos</span>
                <span class="info-box-number">5</span>
            </div>
            <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
            <span class="info-box-icon bg-danger"><i class="fas fa-dollar-sign"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Pagos</span>
                <span class="info-box-number">2</span>
            </div>
            <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
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
    </div>
@endsection
