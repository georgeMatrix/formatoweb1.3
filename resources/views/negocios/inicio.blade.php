@extends('layout/layoutNegocios')
@section('contenido')

    <section class="ftco-fixed clearfix">
        <div class="image js-fullheight float-left">
            <div class="home-slider owl-carousel js-fullheight">

                @foreach($inicios as $inicio)
                    @if($inicio->id == 1)
                        <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{$inicio->imagen}});">
                            <div class="overlay"></div>
                            <div class="container">
                                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                                    <div class="col-md-10 col-xs-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                                        <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"></h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{$inicio->imagen2}});">
                            <div class="overlay"></div>
                            <div class="container">
                                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                                    <div class="col-md-10 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                                        <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{$inicio->imagen3}});">
                            <div class="overlay"></div>
                            <div class="container">
                                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                                    <div class="col-md-10 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                                        <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

        <div class="page-container float-right">
            <div class="row">
                <div class="col-md-6">
                    <div class="blog-entry ftco-animate">
                        <a href="{{route('aguacate.index')}}" class="blog-image">
                            <img src="negocio/images/recauderia.jpg" class="img-fluid" alt="">
                        </a>
                        <div class="text py-4">
                            <div class="meta">
                                <div><a href="#">Abril 10, 2020</a></div>
                            </div>
                            <h3 class="heading"><a href="{{route('aguacate.index')}}">Recauderias</a></h3>
                            <p>Fruta y verdura economica</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-entry ftco-animate">
                        <a href="{{route('ropa.index')}}" class="blog-image">
                            <img src="negocio/images/ropa.jpg" class="img-fluid" alt="">
                        </a>
                        <div class="text py-4">
                            <div class="meta">
                                <div><a href="#">Abril 15, 2020</a></div>
                            </div>
                            <h3 class="heading"><a href="{{route('ropa.index')}}">Ropa</a></h3>
                            <p>Es momento de cambiar de guardarropa</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- end: page-container-->
    </section>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg>
    </div>

@endsection
