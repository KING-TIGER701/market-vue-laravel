@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Reportes PDF</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Reportes PDF</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
        <div class="card card-outline card-primary">
            <div class="card-header">
                  <h3 class="card-title">Reporte PDF</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-report1-tab" data-toggle="pill" href="#v-pills-report1" role="tab" aria-controls="v-pills-report1" aria-selected="true">Reporte ganancias diarias</a>
                        <a class="nav-link" id="v-pills-report2-tab" data-toggle="pill" href="#v-pills-report2" role="tab" aria-controls="v-pills-report2" aria-selected="false">Reporte ganancias mensuales</a>
                        <a class="nav-link" id="v-pills-report3-tab" data-toggle="pill" href="#v-pills-report3" role="tab" aria-controls="v-pills-report3" aria-selected="false">Reporte de ventas generales</a>
                        <a class="nav-link" id="v-pills-report4-tab" data-toggle="pill" href="#v-pills-report4" role="tab" aria-controls="v-pills-report4" aria-selected="false">Reporte de productos más vendidos</a>
                        <a class="nav-link" id="v-pills-report5-tab" data-toggle="pill" href="#v-pills-report5" role="tab" aria-controls="v-pills-report5" aria-selected="false">Reporte de stock por categoría</a>
                        <a class="nav-link" id="v-pills-report6-tab" data-toggle="pill" href="#v-pills-report6" role="tab" aria-controls="v-pills-report6" aria-selected="false">Reporte de stock por producto</a>
                        <a class="nav-link" id="v-pills-report7-tab" data-toggle="pill" href="#v-pills-report7" role="tab" aria-controls="v-pills-report7" aria-selected="false">Reporte de transferencia de stock</a>
                      </div>
                    </div>
                    <div class="col-9">
                      <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-report1" role="tabpanel" aria-labelledby="v-pills-report1-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Reporte ganancias diarias</h3>
                                </div>
                                <div class="card-body">
                                    <ganancia-diaria-component></ganancia-diaria-component>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-report2" role="tabpanel" aria-labelledby="v-pills-report2-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Reporte ganancias mensuales</h3>
                                </div>
                                <div class="card-body">
                                    <ganancia-mensual-component></ganancia-mensual-component>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-report3" role="tabpanel" aria-labelledby="v-pills-report3-tab">
                            {{--  --}}
                                <span>Ventas generales</span>
                            {{--  --}}
                        </div>
                        <div class="tab-pane fade" id="v-pills-report4" role="tabpanel" aria-labelledby="v-pills-report4-tab">
                            {{--  --}}
                                <span>Productos más vendidos</span>
                            {{--  --}}
                        </div>
                        <div class="tab-pane fade" id="v-pills-report5" role="tabpanel" aria-labelledby="v-pills-report5-tab">
                            {{--  --}}
                                <span>Stock por categoría</span>
                            {{--  --}}
                        </div>
                        <div class="tab-pane fade" id="v-pills-report6" role="tabpanel" aria-labelledby="v-pills-report6-tab">
                            {{--  --}}
                                <span>Stock por producto</span>
                            {{--  --}}
                        </div>
                        <div class="tab-pane fade" id="v-pills-report7" role="tabpanel" aria-labelledby="v-pills-report7-tab">
                            {{--  --}}
                                <span>Transferencia de producto</span>
                            {{--  --}}
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
  </section>
  <!-- /.content -->
@endsection
