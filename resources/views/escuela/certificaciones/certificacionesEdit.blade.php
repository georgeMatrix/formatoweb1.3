@extends('layout.layoutEscuela')
@section('content')
    @include('escuela.include.menu')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center title">NUEVO</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xl-12 mb-4">
                <form action="{{url('certificaciones/'.$certificacion->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('PATCH')}}
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required value="{{$certificacion->nombre}}" type="text" class="form-control form-control-user" id="nombre" name="nombre" placeholder="Nombre">
                        </div>
                        <div class="col-sm-6">
                            <input required value="{{$certificacion->fechaCertificacion}}" type="text" class="form-control form-control-user" id="fechaCertificacion" name="fechaCertificacion" placeholder="Fecha de certificación">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required value="{{$certificacion->entidad}}" type="text" class="form-control form-control-user" id="entidad" name="entidad" placeholder="Entidad">
                        </div>
                        <div class="col-sm-6">
                            <input required value="{{$certificacion->resultado}}" type="text" class="form-control form-control-user" id="resultado" name="resultado" placeholder="Resultado">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required value="{{$certificacion->resultadoGeneral}}" type="text" class="form-control form-control-user" id="resultadoGeneral" name="resultadoGeneral" placeholder="Resultado General">
                        </div>
                        <div class="col-sm-6">
                            <input required value="{{$certificacion->cefrLevel}}" type="text" class="form-control form-control-user" id="cefrLevel" name="cefrLevel" placeholder="CEFR Level">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required value="{{$certificacion->readingScore}}" type="text" class="form-control form-control-user" id="readingScore" name="readingScore" placeholder="Reading Score">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required value="{{$certificacion->writingScore}}" type="text" class="form-control form-control-user" id="writingScore" name="writingScore" placeholder="Writing Score">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input required value="{{$certificacion->listeningScore}}" type="text" class="form-control form-control-user" id="listeningScore" name="listeningScore" placeholder="Listening Score">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required value="{{$certificacion->speakingScore}}" type="text" class="form-control form-control-user" id="speakingScore" name="speakingScore" placeholder="Speaking Score">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input required value="{{$certificacion->cambridgeEnglishScale}}" type="text" class="form-control form-control-user" id="cambridgeEnglishScale" name="cambridgeEnglishScale" placeholder="Cambridge English Scale">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required value="{{$certificacion->cambridgeEnglishScale}}" type="text" class="form-control form-control-user" id="certificateResult" name="certificateResult" placeholder="Certificate Result">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2 mb-3 mb-sm-0">
                            <button class="btn btn-primary" type="submit">Guardar Datos</button>
                        </div>
                        <div class="col-lg-2 col-md-2 col-md-2 col-xs-2">
                            <a class="btn btn-danger btn-block" href="{{route('certificaciones.index')}}" >Regresar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection

