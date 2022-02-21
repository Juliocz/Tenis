@extends('layouts/infolayout')
@section('contenido')
        <img src="{{ asset('res/landing_LOGO-FBT-Htrans.png') }}" alt="">
        <h1 class="text-center">INGRESAR</h1>
        <form method="POST">
        @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Usuario</label>
              <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Usuario">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Contraseña</label>
                <input name="password" type="password" class="form-control" id="exampleFormControlInput1" placeholder="Clave">
              </div>
              {{-- <div class="form-row">
                <div class="col-md-6">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>
              </div> --}}
            <button type="submit" value="Submit" class="btn btn-success">IDENTIFICARME</button>

        </form>
@endsection
