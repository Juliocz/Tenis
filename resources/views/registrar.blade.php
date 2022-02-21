@extends('layouts/infolayout')
@section('contenido')
    <img src="{{ asset('res/landing_LOGO-FBT-Htrans.png') }}" alt="">
    <h1 class="text-center">Registrar</h1>




    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="bpin-solicitud-create">
                    <div class="box box-primary">
                        {{-- <h3 class="box-title">Solicitar Bpin</h3> --}}
                        <div class="bpin-solicitud-form">
                            <div class="box-body">
                                <form id="form-bpin-solicitud" method="post">
                                    @csrf
                                    {{-- select asociacion --}}
                                    <div class="form-group field-bpinsolicitudtemp-id_asociacion required has-success">
                                        <label class="control-label"
                                            for="bpinsolicitudtemp-id_asociacion">Asociación</label>
                                        <select id="bpinsolicitudtemp-id_asociacion" class="form-control"
                                            name="BpinSolicitudTeasdasdamp[id_asociacion]" onchange="setClubs(this.value)">
                                            <option value="">Selecione una asociación</option>
                                        </select>
                                        <div class="help-block"></div>
                                    </div>
                                    {{-- select club --}}
                                    <div class="form-group field-bpinsolicitudtemp-id_club required has-error">
                                        <label class="control-label" for="bpinsolicitudtemp-id_club">Club</label>
                                        <select id="bpinsolicitudtemp-id_club" class="form-control"
                                            name="BpinSolicitudTemp[id_club]">
                                            <option>Selecione un club</option>
                                        </select>
                                        <div class="help-block">Club debe ser un número entero.</div>
                                    </div>
                                    {{-- Apellido paterno --}}
                                    <div class="form-group field-bpinsolicitudtemp-paterno required has-error">
                                        <label class="control-label" for="bpinsolicitudtemp-paterno">1er. Apellido</label>
                                        <input type="text" id="bpinsolicitudtemp-paterno" class="form-control"
                                            name="BpinSolicitudTemp[paterno]" maxlength="250" required>
                                        <div class="help-block"></div>
                                    </div>
                                    {{-- apellido materno --}}
                                    <div class="form-group field-bpinsolicitudtemp-materno has-success">
                                        <label class="control-label" for="bpinsolicitudtemp-materno">2do. Apellido</label>
                                        <input type="text" id="bpinsolicitudtemp-materno" class="form-control"
                                            name="BpinSolicitudTemp[materno]" maxlength="250" required>
                                        <div class="help-block"></div>
                                    </div>
                                    {{-- nombres --}}
                                    <div class="form-group field-bpinsolicitudtemp-nombres required">
                                        <label class="control-label" for="bpinsolicitudtemp-nombres">Nombres</label>
                                        <input type="text" id="bpinsolicitudtemp-nombres" class="form-control"
                                            name="BpinSolicitudTemp[nombres]" maxlength="250" required>
                                        <div class="help-block"></div>
                                    </div>
                                    <div class="callout callout-warning">
                                        <div class="alert alert-danger alert-dismissible" id="mensaje_advertencia">
                                            <h4>Si el documento de identidad es único en la base de datos, será su número de
                                                BPIN</h4>
                                        </div>




                                        <div class="mytabradio" style=" color:var(--color-themeText);   background-color: var(--color-theme);
                                        border-radius: 10px; padding: 10px;">
                                        <div class="form-group field-bpinsolicitudtemp-tipo_documento has-success">
                                            <div class="form-check">
                                                <input tab="mytabradio" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="ci" container_id="solo_ci" onchange="cambiarDoc(this);" checked>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                  Carnet de identidad
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input tab="mytabradio" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="otrodoc" container_id="otro_doc" onchange="cambiarDoc(this);">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                  Otro documento
                                                </label>
                                              </div>
                                        </div>


                                        {{-- solo carnet de identidad --}}
                                        <div id="solo_ci" class="tab_hidden" style="display: block;     background-color: var(--color-theme); border-radius: 10px;">
                                            <div class="form-group field-bpinsolicitudtemp-soloci has-error">
                                                <label class="control-label" for="bpinsolicitudtemp-soloci">Cedula de
                                                    identidad</label>
                                                <input type="text" id="bpinsolicitudtemp-soloci" class="form-control"
                                                    name="BpinSolicitudTemp[soloci]">

                                                <div class="help-block">Debe ingresar el número de cédula de identidad y
                                                    expedido en</div>
                                            </div>
                                            <div class="form-group field-bpinsolicitudtemp-dpto has-error">
                                                <label class="control-label" for="bpinsolicitudtemp-dpto">Expedido
                                                    en</label>
                                                <select id="bpinsolicitudtemp-dpto" class="form-control"
                                                    name="BpinSolicitudTemp[dpto]">
                                                    <option value="">---Seleccione---</option>
                                                    <option value="LP">La Paz</option>
                                                    <option value="CB">Cochabamba</option>
                                                    <option value="SC">Santa Cruz</option>
                                                    <option value="BN">Beni</option>
                                                    <option value="PT">Potosi</option>
                                                    <option value="OR">Oruro</option>
                                                    <option value="PA">Pando</option>
                                                    <option value="TJ">Tarija</option>
                                                    <option value="CH">Chuquisaca</option>
                                                </select>
{{--
                                                <div class="help-block">Debe ingresar el número de cédula de identidad y
                                                    expedido en</div>
                                            </div> --}}
                                        </div>
                                        </div>

                                        {{-- otro documento --}}
                                        <div id="otro_doc" class="tab_hidden" style="display: none; ">
                                            <div class="form-group field-bpinsolicitudtemp-documento_identidad">
                                                <label class="control-label"
                                                    for="bpinsolicitudtemp-documento_identidad">Documento de
                                                    identidad</label>
                                                <input type="text" id="bpinsolicitudtemp-documento_identidad"
                                                    class="form-control" name="BpinSolicitudTemp[documento_identidad]">
                                                <div class="help-block"></div>
                                            </div>
                                        </div>

                                        </div>

                                    </div>
                                    <div class="form-group field-bpinsolicitudtemp-fecha_nacimiento required">
                                        <label class="control-label" for="bpinsolicitudtemp-fecha_nacimiento">Fecha
                                            Nacimiento (dd-mm-yyyy)</label>
                                        <input type="text" id="bpinsolicitudtemp-fecha_nacimiento"
                                            class="form-control hasDatepicker" name="BpinSolicitudTemp[fecha_nacimiento]">

                                        <div class="help-block"></div>
                                    </div>
                                    <div class="form-group field-bpinsolicitudtemp-sexo required has-error">
                                        <label class="control-label" for="bpinsolicitudtemp-sexo">Sexo</label>
                                        <select id="bpinsolicitudtemp-sexo" class="form-control"
                                            name="BpinSolicitudTemp[sexo]">
                                            <option value="">---Seleccione---</option>
                                            <option value="F">Femenino</option>
                                            <option value="M">Masculino</option>
                                        </select>
                                    </div>
                                    <div class="form-group field-bpinsolicitudtemp-celular">
                                        <label class="control-label" for="bpinsolicitudtemp-celular">Celular</label>
                                        <input type="text" id="bpinsolicitudtemp-celular" class="form-control"
                                            name="BpinSolicitudTemp[celular]" maxlength="50">

                                        <div class="help-block"></div>
                                    </div>
                                    <div class="form-group field-bpinsolicitudtemp-correo_electronico required">
                                        <label class="control-label" for="bpinsolicitudtemp-correo_electronico">Correo
                                            Electrónico</label>
                                        <input type="text" id="bpinsolicitudtemp-correo_electronico" class="form-control"
                                            name="BpinSolicitudTemp[correo_electronico]" maxlength="250">

                                        <div class="help-block"></div>
                                    </div>



                                    <p>La aprobación de su BPIN será enviada a este correo electrónico. Verificar en la
                                        bandeja de correos no deseados (spam)</p>

                                    <div class="form-group">

                                            <button type="submit" value="Submit" class="btn btn-success" style="width: 100%;">REGISTRARME</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

<script src="{{ asset('js/registrar.js') }}"></script>
@endsection
