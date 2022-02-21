<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Federacion tenis</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/root.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>body {font-family: 'Poppins';font-size: 1rem;}
    </style>
    <link rel="icon" href="{{ asset('res/miicon2.png') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light mynav">
        <div class="container-fluid">

            <!-- <a class="navbar-brand" href="#">Logo</a> -->
            <img src="{{ asset('res/landing_LOGO-FBT-Htrans.png') }}" width="300px" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    @if (Auth::check())
                    {{-- drop menu PERFIL --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">

                            <svg  style="fill:var(--color-theme);height: 30px;" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                              </svg>
                              {{Auth::user()->nombres}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Ver mis asociaciones</a></li>
                            <li><a class="dropdown-item" href="#">Administrar torneos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{Route('logout')}}">Cerrar sesion</a></li>
                        </ul>
                    </li>

                    {{-- drop menu PERFIL --}}

                    @endif

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">JUGADORES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ARBITROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ASOCIACIONES</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            ULTIMOS TORNEOS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Torneo 1</a></li>
                            <li><a class="dropdown-item" href="#">Torneo 2</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Torneo 3</a></li>
                        </ul>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled">Ingresar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Registrarse</a>
                    </li> -->
                </ul>
                <i class="bi bi-search"></i>
                <form class="d-flex gx-5">
                    <input class="form-control me-2" type="search" placeholder="Jose Carlos" aria-label="Search">
                    <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                    <svg class="lupas" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path class="lupa"
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>

                    @if (!Auth::check())
                    <a href="{{Route('login')}}" style="display: flex; justify-content: center; text-decoration:none;">
                    <button type="button" class="btn btn-success">IDENTIFICARME</button>
                    </a>
                    @endif
                      {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <svg  xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                              </svg>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Torneo 1</a></li>
                            <li><a class="dropdown-item" href="#">Torneo 2</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Torneo 3</a></li>
                        </ul>
                    </li> --}}

                </form>

            </div>
        </div>
    </nav>


    @yield('contenido')

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/root.js') }}"></script>
    <script src="{{ asset('js/landing.js') }}"></script>
</body>

</html>
