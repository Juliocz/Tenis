
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


    {{-- INFORMACION 1 REGISTRARSE --}}
    <div class="info1">
        <div class="d-flex justify-content-center">
            <div class="row">


                <div class="col-12">
                    <div class="row">
                        <div class="col-sm justify-content-center align-self-center">
                            <h2>Registrate</h2>
                            <div class="row">
                                <div class="col-3"></div>
                                <div class="col-9">
                                    <div class="row">
                                        <div class="col-3">
                                            <svg style="fill:var(--color-theme);" xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor" class="bi bi-check"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg>
                                        </div>
                                        <div class="col-9">
                                            <h4>BUSCA TU NOMBRE</h4>
                                            <p>Averigua si eres el jugador mas buscado</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <svg style="fill:var(--color-theme);" xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor" class="bi bi-check"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg>
                                        </div>
                                        <div class="col-9">
                                            <h4>COMPLETA TU PERFIL</h4>
                                            <p>Averigua si eres el jugador mas buscado </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <svg style="fill:var(--color-theme);" xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor" class="bi bi-check"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg>
                                        </div>
                                        <div class="col-9">
                                            <h4>ENCUENTRA TORNEOS</h4>
                                            <p>asdasdasdasdas asdasdas das das dasdasda</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <a href="{{Route('register')}}" style="display: flex; justify-content: center; text-decoration:none;">
                                        <button type="button" class="btn btn-success" style="max-width: 95%">REGISTRARME
                                            COMO ARBITRO O JUGADOR</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <img src="{{ asset('res/jugador2.png') }}" style="object-fit: contain; margin:auto;"
                            class="col-5">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- INFORMACION 1 REGISTRARSE FIN --}}

    {{-- TORNEO TABLA CARGADO POR JAVASCRIPT --}}
    {{-- <div class="container tablecontent">

        <h3>TORNEOS CONCLUIDOS</h3>
        <table class="table table-striped table-dark" id="table_concluido">
            <thead>
                <tr>
                    <th scope="col" id="index">#</th>
                    <th scope="col" id="nombre_torneo">NOMBRE</th>
                    <th scope="col" id="estado">ESTADO</th>
                    <th scope="col" id="fecha_inicio">FECHA INICIO</th>
                    <th scope="col" id="fecha_fin">FECHA FIN</th>
                    <th scope="col" id="nombre_director">DIRECTOR</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" id="index" name="index">1</th>
                    <td id="nombre_torneo" name="nombre_torneo">Mark</td>
                    <td id="estado" name="estado">Otto</td>
                    <td id="fecha_inicio" name="fecha_inicio">@mdo</td>
                    <td id="fecha_fin" name="fecha_fin">@mdo</td>
                    <td id="director" name="director">@mdo</td>
                </tr>
            </tbody>
        </table>

        <h3>TORNEOS EN EDICION</h3>
        <table class="table table-striped table-dark" id="table_edicion">
            <thead>
                <tr>
                    <th scope="col" id="index">#</th>
                    <th scope="col" id="nombre_torneo">NOMBRE</th>
                    <th scope="col" id="estado">ESTADO</th>
                    <th scope="col" id="fecha_inicio">FECHA INICIO</th>
                    <th scope="col" id="fecha_fin">FECHA FIN</th>
                    <th scope="col" id="nombre_director">DIRECTOR</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" id="index" name="index">1</th>
                    <td id="nombre_torneo" name="nombre_torneo">Mark</td>
                    <td id="estado" name="estado">Otto</td>
                    <td id="fecha_inicio" name="fecha_inicio">@mdo</td>
                    <td id="fecha_fin" name="fecha_fin">@mdo</td>
                    <td id="director" name="director">@mdo</td>
                </tr>

            </tbody>
        </table>
    </div> --}}
    {{-- TORNEO TABLA CARGADO POR JAVASCRIPT FIN --}}

    {{-- TORNEO NAV CONTENEDOR --}}
    <div class="torneonavcontenedor">
        <h1 style="padding-left: 10%;">Torneos</h1>
        <ul class="nav nav-pills mb-3" id="navtabTorneos" role="tablist" style="padding-left: 10%;">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">PROXIMOS TORNEOS</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                    aria-selected="false">TORNEOS PASADOS</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                {{-- CONTENIDO PROXIMOS TORNEOS --}}
                <div class="container">
                    @foreach ($torneos_futuros as $torneo)
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
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                {{-- CONTENIDO PASADO TORNEOS --}}
                <div class="container">
                    @foreach ($torneos_pasados as $torneo)
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
