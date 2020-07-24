@extends('layouts.app')
@section('title', 'Turismo de bienestar')

@section('idmain', 'que-hacer')
@section('content')


<hr class="separator">
<h1>{{ $secciones[0]->titulo }}</h1>

<div class="text-justify">
  @markdown($secciones[0]->texto)
</div>
<div id="carouselExampleFade" class="carousel slide" data-ride="carousel" data-interval="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/fotos/bahias/panoramica/Panorámica Bahía Cacaluta.jpeg" class="d-block w-100 " alt="">
    </div>
    <div class="carousel-item">
      <img src="/fotos/bahias/panoramica/Panorámica Bahía Chahué.jpeg" class="d-block w-100 " alt="">
    </div>
    <div class="carousel-item">
      <img src="/fotos/bahias/panoramica/Panorámica Bahía Conejos.jpeg" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="/fotos/bahias/panoramica/Panorámica Bahía Sta. Cruz.jpeg" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="/fotos/bahias/panoramica/Panorámica Bahía Tangolunda.jpeg" class="d-block w-100" alt="">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<br>
<div class=".w-100">
  <img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRrzZLN1gefbhJ49OIGkVe3Y75N5M2OGS9eem4GRYfKUzIhyz5O">
</div>
<br>

<h2 id="seccion1">{{ $secciones[1]->titulo }}</h2>

<div class="text-justify">
  @markdown($secciones[1]->texto)
</div>


<ul class="nav nav-pills d-none d-lg-flex" id="bahia-{{ $secciones[1]->id }}-tablist" role="tablist">
  <li class="nav-item">
    <a class="nav-link" id="bahia-{{ $secciones[1]->id }}-tab-1" data-toggle="pill" href="#bahia-{{ $secciones[1]->id }}-detalle-1" role="tab" aria-controls="bahia-{{ $secciones[1]->id }}-detalle-1" aria-selected="false">
      <img src="/iconos/CLLEGA.svg" class="icono">
      @lang('¿Qué voy a hacer?')
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="bahia-{{ $secciones[1]->id }}-tab-2" data-toggle="pill" href="#bahia-{{ $secciones[1]->id }}-detalle-2" role="tab" aria-controls="bahia-{{ $secciones[1]->id }}-detalle-2" aria-selected="false">
      <img src="/iconos/HACER.svg" class="icono">
      @lang('¿Qué empresas dan el servicio?')
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="bahia-{{ $secciones[1]->id }}-tab-3" data-toggle="pill" href="#bahia-{{ $secciones[1]->id }}-detalle-3" role="tab" aria-controls="bahia-{{ $secciones[1]->id }}-detalle-3" aria-selected="false">
      <img src="/iconos/EVENTOS.svg" class="icono">
      @lang('¿Cómo llegar?')
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="bahia-{{ $secciones[1]->id }}-tab-4" data-toggle="pill" href="#bahia-{{ $secciones[1]->id }}-detalle-4" role="tab" aria-controls="bahia-{{ $secciones[1]->id }}-detalle-4" aria-selected="false">
      <img src="/iconos/RECOMENDACIONES.svg" class="icono">
      @lang('Horarios')
    </a>
  </li>

</ul>

<div class="accordion d-lg-none" id="bahia-{{ $secciones[1]->id }}-acordion">
  <div class="card">
    <div class="card-header" id="bahia-{{ $secciones[1]->id }}-acc-h1">
      <h2>
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#bahia-{{ $secciones[1]->id }}-acc-c1" aria-expanded="false" aria-controls="bahia-{{ $secciones[1]->id }}-acc-c1">
          <img src="/iconos/CLLEGA.svg" class="icono">
          @lang('¿Qué empresas dan el servicio?')
        </button>
      </h2>
    </div>

    <div id="bahia-{{ $secciones[1]->id }}-acc-c1" class="collapse" aria-labelledby="bahia-{{ $secciones[1]->id }}-acc-h1" data-parent="#bahia-{{ $secciones[1]->id }}-acordion">
      <div class="card-body">
        @markdown($secciones[3]->texto)
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="bahia-{{ $secciones[1]->id }}-acc-h2">
      <h2>
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#bahia-{{ $secciones[1]->id }}-acc-c2" aria-expanded="false" aria-controls="bahia-{{ $secciones[1]->id }}-acc-c2">
          <img src="/iconos/HACER.svg" class="icono">
          @lang('¿Qué hacer?')
        </button>
      </h2>
    </div>

    <div id="bahia-{{ $secciones[1]->id }}-acc-c2" class="collapse" aria-labelledby="bahia-{{ $secciones[1]->id }}-acc-h2" data-parent="#bahia-{{ $secciones[1]->id }}-acordion">
      <div class="card-body">
        @markdown($secciones[4]->texto)
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="bahia-{{ $secciones[1]->id }}-acc-h3">
      <h2>
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#bahia-{{ $secciones[1]->id }}-acc-c3" aria-expanded="false" aria-controls="bahia-{{ $secciones[1]->id }}-acc-c2">
          <img src="/iconos/HACER.svg" class="icono">
          @lang('¿Cómo llegar?')
        </button>
      </h2>
    </div>

    <div id="bahia-{{ $secciones[1]->id }}-acc-c3" class="collapse" aria-labelledby="bahia-{{ $secciones[1]->id }}-acc-h3" data-parent="#bahia-{{ $secciones[1]->id }}-acordion">
      <div class="card-body">
        @markdown($secciones[5]->texto)
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="bahia-{{ $secciones[1]->id }}-acc-h4">
      <h2>
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#bahia-{{ $secciones[1]->id }}-acc-c4" aria-expanded="false" aria-controls="bahia-{{ $secciones[1]->id }}-acc-c2">
          <img src="/iconos/HACER.svg" class="icono">
          @lang('Horarios')
        </button>
      </h2>
    </div>

    <div id="bahia-{{ $secciones[1]->id }}-acc-c4" class="collapse" aria-labelledby="bahia-{{ $secciones[1]->id }}-acc-h4" data-parent="#bahia-{{ $secciones[1]->id }}-acordion">
      <div class="card-body">
        @markdown($secciones[6]->texto)
      </div>
    </div>
  </div>
</div>

<div class="tab-content" id="bahia-{{ $secciones[1]->id }}-tabcontent">
  <div class="tab-pane fade" id="bahia-{{ $secciones[1]->id }}-detalle-1">
    @markdown($secciones[3]->texto)
  </div>
  <div class="tab-pane fade" id="bahia-{{ $secciones[1]->id }}-detalle-2">
    @markdown($secciones[4]->texto)
  </div>
  <div class="tab-pane fade" id="bahia-{{ $secciones[1]->id }}-detalle-3">
    @markdown($secciones[5]->texto)
  </div>
  <div class="tab-pane fade" id="bahia-{{ $secciones[1]->id }}-detalle-4">
    @markdown($secciones[6]->texto)
  </div>
</div>



@endsection