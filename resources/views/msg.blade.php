@extends('layouts/infolayout')
@section('contenido')
        <img src="{{ asset('res/landing_LOGO-FBT-Htrans.png') }}" alt="">
        <h1 class="text-center">
            {{ $title??'Titulo'}}
        </h1>
        <h2 >{{ $msg??'Mensaje'}}</h2>
        <p>{{ $text??''}}</p>
@endsection
