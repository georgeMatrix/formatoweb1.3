@extends('layout/layoutNegocios')
@section('contenido')

    <section class="ftco-fixed clearfix">
        <!-- =============================================================================================================== -->
        <!-- ============================================= SECCION DE PROMOCION ============================================ -->
        <!-- =============================================================================================================== -->
        <div class="image js-fullheight float-left">
            <div class="home-slider owl-carousel js-fullheight">
                @foreach($inicios as $inicio)
                    @if($inicio->id == 1)
                        <div class="slider-item js-fullheight" style="background-image: url({{$inicio->imagen}});">
                            <div class="overlay"></div>
                            <div class="container">
                                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                                    <div class="col-md-10 col-sm-12 ftco-animate"
                                         data-scrollax=" properties: { translateY: '70%' }">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item js-fullheight" style="background-image: url({{$inicio->imagen2}});">
                            <div class="overlay"></div>
                            <div class="container">
                                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                                    <div class="col-md-10 col-sm-12 ftco-animate"
                                         data-scrollax=" properties: { translateY: '50%' }">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item js-fullheight" style="background-image: url({{$inicio->imagen3}});">
                            <div class="overlay"></div>
                            <div class="container">
                                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                                    <div class="col-md-10 col-sm-12 ftco-animate"
                                         data-scrollax=" properties: { translateY: '50%' }">
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endif
                @endforeach
            </div>
        </div>

        <!-- =============================================================================================================== -->
        <!-- ============================================= SECCION DE PROMOCION ============================================ -->
        <!-- =============================================================================================================== -->
        <div class="page-container float-right">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    @if(!empty($aguacates))
                        @foreach($aguacates as $aguacate)
                            <div class="blog-entry-4 d-flex ftco-animate">
                                <a href="{{route('aguacate.show', $aguacate->id)}}" class="blog-img"
                                   style="background-image: url({{$aguacate->imagen}});">
                                </a>
                                <div class="text">
                                    <h3 class="mb-4">{{$aguacate->nombre}}</h3>
                                    <p>Direccion: {{$aguacate->direccion}}</p>
                                    <p>Cel:{{$aguacate->telefono}}</p>
                                    <a href="{{route('aguacate.show', $aguacate->id)}}"><p>Mas Información</p></a>
                                </div>
                            </div>
                        @endforeach
                        @elseif(!empty($ropas))
                        @foreach($ropas as $ropa)
                            <div class="blog-entry-4 d-flex ftco-animate">
                                <a href="{{route('ropa.show', $ropa->id)}}" class="blog-img"
                                   style="background-image: url({{$ropa->imagen}});">
                                </a>
                                <div class="text">
                                    <h3 class="mb-4">{{$ropa->nombre}}</h3>
                                    <p>Direccion: {{$ropa->direccion}}</p>
                                    <p>Cel: {{$ropa->celular}}</p>
                                    <a href="{{route('ropa.show', $ropa->id)}}"><p>Mas Información</p></a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div><!-- end: page-container-->
    </section>
@endsection
