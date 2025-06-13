@extends('colaborador.reportes.layout')

@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="bi bi-speedometer"></i> Reportes </h1>
          <p> Modulo Colaborador</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <!--<li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li> -->
        </ul>
      </div>
     <!-- <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon bi bi-people fs-1"></i>
            <div class="info">
              <h4>Users</h4>
              <p><b>5</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon bi bi-heart fs-1"></i>
            <div class="info">
              <h4>Likes</h4>
              <p><b>25</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon bi bi-folder2 fs-1"></i>
            <div class="info">
              <h4>Uploades</h4>
              <p><b>10</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon bi bi-star fs-1"></i>
            <div class="info">
              <h4>Stars</h4>
              <p><b>500</b></p> 
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title"> CALENDARIO</h3>
            <div class="ratio ratio-16x9">
              <div id="salesChart"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title"> ASISTENCIA</h3>
            <div class="ratio ratio-16x9">
              <div id="supportRequestChart"></div>
            </div>
          </div>
        </div>
      </div>-->

        <!-- Main content -->
        <main class="col-md-10 main-content p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h1 class="titulo">Calendario</h1>
          <div>
            <!--<i class="bi bi-bell mx-2"></i>
            <i class="bi bi-box-arrow-right mx-2"></i>
            <i class="bi bi-person-circle"></i> -->
          </div>
        </div>

        <div class="row">
          <!-- Calendario -->
          <div class="col-md-6 mb-4">
            <label for="calendar" class="form-label">Selecciona una fecha:</label>
            <input type="date" class="form-control" id="calendar">
          </div>

          <!-- Asistencia semanal -->
          <!--<div class="col-md-6">
            <div class="card">
              <div class="card-header asistencia-header">
                Asistencia Semanal
              </div>
              <div class="card-body" id="asistencia">
                <p>Sin datos por ahora.</p>
              </div> -->
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="app.js"></script>
    </main>
    @endsection