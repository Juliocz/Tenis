
@extends('layouts/landinglayout')
@section('contenido')

    <!-- CARRUSEL INICIO -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
                <img class="d-block w-100" src="https://campestrecali.com/wp-content/uploads/2020/07/Banner-tenis.jpg"
                    alt="First slide">


                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Example headline.</h1>
                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-dark" href="#">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
                <img class="d-block w-100" src="https://campestrecali.com/wp-content/uploads/2020/07/Banner-tenis.jpg"
                    alt="First slide">

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-dark" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
                <img class="d-block w-100" src="https://campestrecali.com/wp-content/uploads/2020/07/Banner-tenis.jpg"
                    alt="First slide">

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class="btn btn-lg btn-dark" href="#">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- CARRUSEL FIN -->


    <!-- asociacion -->
    {{-- <div class="asociacionheader"> --}}
        {{-- <div class="d1" style="background-color: red;"></div> --}}
        {{-- <div class="d2" style="background-color: blue;">ASOCIACION</div>
    </div> --}}

    <div class="container">

        <div class="row gx-5" style="padding: var(--padding-grap);">
            {{-- perfilasoc --}}
    <div class="col-sm" style="max-width:300px; min-width:300px;">

            <img src="{{ asset('res/landing_LOGO-FBT-Htrans.png') }}" style="width: 100%;" alt="">
        <div class="row">
            <div class="col-6" style="padding: var(--padding-grap);">
                <h3 style="text-align:center;">{{$asociacion->miembros_number}}</h2>
                <h4 style="text-align:center;">MIEMBROS</h3>
            </div>
            <div class="col-6" style="padding: var(--padding-grap);">
              <h3 style="text-align:center;">{{$asociacion->torneos_number}}</h2>
              <h4 style="text-align:center;">TORNEOS</h3>
            </div>
          </div>
      </div>
      <div class="col-8">
          <div style="width: 100%; height: 100%;display: flex;gap: var(--padding-grap);
          flex-wrap: wrap;
          align-items: center;">
          <h3 style="width: 100%;">{{$asociacion->nombre_asociacion}}</h3>
          <button type="button" class="btn btn-success">Crear Torneo</button>
          <button type="button" class="btn btn-success">:</button>
        </div>
      </div>
        {{-- perfilasocfin --}}

    </div>

    </div>

    {{-- TORNEO NAV CONTENEDOR --}}
    <div class="torneonavcontenedor">
        <h1 style="padding-left: 10%;">Torneos</h1>
        <ul class="nav nav-pills mb-3" id="navtabTorneos" role="tablist" style="padding-left: 10%;">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#DESCRIPCION"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">DESCRIPCION</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#TORNEOS"
                type="button" role="tab" aria-controls="pills-profile" aria-selected="false">TORNEOS</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#MIEMBROS"
                type="button" role="tab" aria-controls="pills-profile" aria-selected="false">MIEMBROS</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#RESULTADOS"
                type="button" role="tab" aria-controls="pills-profile" aria-selected="false">RESULTADOS</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">

            {{-- DESCRIPCION --}}
            <div class="tab-pane fade show active" id="DESCRIPCION" role="tabpanel" aria-labelledby="pills-home-tab">

                <div class="container">
                      <h4>Esta asociacion nos comprometemos a cumplir siempre con lo que interesa al equipo
                          Pronto llevaremos estos torneos con la mejor manera y seguir adelante.
                      </h4>
                </div>
            </div>
            {{-- CONTENIDO TORNEOS --}}
            <div class="tab-pane fade" id="TORNEOS" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="container">
                    @foreach ($asociacion->torneos as $torneo)
                    {{-- ITEM TORNEO --}}
                    <div class="row itemtorneo">
                        <div style="text-decoration: underline blue">{{ $torneo->fecha_inicio }}</div>
                        <h4>{{ $torneo->nombre_torneo }}</h4>
                        <p>{{ $torneo->nombre_asociacion }}</p>
                        <h6>Tarifa evento gratis</h6>
                        <h5>155 Jugando * UTR 1.0 - 16.0 * Mixto * Individual</h5>
                    </div>
                    {{-- ITEM TORNEO FIN --}}
                     @endforeach
                </div>

            </div>
            {{-- MIEMBROS --}}
            <div class="tab-pane fade" id="MIEMBROS" role="tabpanel" aria-labelledby="pills-home-tab">

                <div class="container">
                    @foreach ($asociacion->miembros as $miembro)
                    {{-- ITEM TORNEO --}}
                    <div class="row itemtorneo">
                        <div style="text-decoration: underline blue">Nombre: {{ $miembro->nombres }}</div>
                        <h4>Apellido paterno: {{ $miembro->paterno  }}</h4>
                        <p>Apellido materno: {{ $miembro->materno  }}</p>
                        <h6>Correo: {{$miembro->correo }}</h6>
                        <h5>Estado : {{$miembro->activo}} </h5>
                    </div>
                    {{-- ITEM TORNEO FIN --}}
                    @endforeach
                </div>
            </div>
            {{-- RESULTADOS --}}
            <div class="tab-pane fade" id="RESULTADOS" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="container">
                      <h4>RESULTADOS DE TORNEOS
                      </h4>
                </div>
            </div>

        </div>
    </div>
    {{-- TORNEO NAV CONTENEDOR FIN --}}







    <div class="carusel2contenedor">
    <h1 class="text-center">NUESTRAS ASOCIACIONES</h1>
<!-- CARRUSEL INICIO -->
<div id="carusel2" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carusel2" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carusel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carusel2" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" >
            <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
            <img class="d-block w-100" src="{{ asset('res/landing_LOGO-FBT-Htrans.png') }}"
                alt="First slide">
        </div>
        <div class="carousel-item"  >
            <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
            <img class="d-block w-100" src="{{ asset('res/landing_LOGO-FBT-Htrans.png') }}"
                alt="First slide">
        </div>
        <div class="carousel-item">
            <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
            <img class="d-block w-100" src="{{ asset('res/landing_LOGO-FBT-Htrans.png') }}"
                alt="First slide">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carusel2" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carusel2" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>
<!-- CARRUSEL FIN -->
@endsection
