@extends('layout/layoutNegocios')
@section('contenido')
    <section class="ftco-fixed clearfix">
        <!-- =============================================================================================================== -->
        <!-- ============================================= LADO IZQUIERDO ================================================== -->
        <!-- =============================================================================================================== -->
        <!-- Cada uno de los slider son las imagenes que van en la galeria -->
        <div class="image js-fullheight float-left">
            <div class="home-slider owl-carousel js-fullheight">
                @if(!empty($aguacate))
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($aguacate->imagen3)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>

                @elseif(!empty($ropa))
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($ropa->imagen2)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($ropa->imagen3)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($ropa->imagen4)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($ropa->imagen5)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($ropa->imagen6)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($ropa->imagen7)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($ropa->imagen8)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($ropa->imagen9)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($ropa->imagen10)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($ropa->imagen11)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($ropa->imagen12)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($ropa->imagen13)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($ropa->imagen14)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($ropa->imagen15)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($ropa->imagen16)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($ropa->imagen17)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($ropa->imagen18)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($ropa->imagen19)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($ropa->imagen20)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($ropa->imagen21)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($ropa->imagen22)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($ropa->imagen23)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($ropa->imagen24)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item js-fullheight" style="background-size: 100%; background-image: url({{asset($ropa->imagen25)}});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate"
                                     data-scrollax=" properties: { translateY: '70%' }">
                                    <!--<p class="breadcrumbs"><span><a href="index.blade.php">Home</a></span> <span>Contact</span></p>-->
                                    <!--<h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ficha de Detalle</h1>-->
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <!-- =============================================================================================================== -->
        <!-- ============================================= LADO DERECHO ==================================================== -->
        <!-- =============================================================================================================== -->
        <!-- Lo que va en la columna 8 es lo que contiene la informacion y que esta con el wallpaper -->
        <!-- Lo que va en la columna 4 es lo que contiene la las imagenes -->
        <div class="page-container float-right">
            <div class="row">
                @if(!empty($aguacate) and $etiqueta == 1)
                    <div class="col-md-8" style="background-image: url({{asset($aguacate->imagen5)}}); background-repeat:no-repeat">
                        <div class="blog-entry ftco-animate">
                            <div class="text py-4">
                                <div class="meta">
                                    <div><a href="#">20 Abril, 2019</a></div>
                                    <div><a href="#">Fecha de Vencimiento</a></div>
                                </div>
                                <h3 class="heading"><a href="#">{{$aguacate->nombre}}</a></h3>
                                <p><span><i class="fas fa-utensils"></i> </span> {{$aguacate->nombre}} <i class="fas fa-utensils"></i></p>
                                <p><span><i class="fas fa-map-marked-alt"></i></span> {{$aguacate->direccion}}</p>
                                <p><span><i class="fab fa-whatsapp"></i></span> {{$aguacate->telefono}}</p>
                                <p><span><i class="fas fa-clock"></i> </span> 10:00 am - 7:00 pm</p>

                                <p><span><b>PLatillos con aguacate:</b> </span></p>
                                <ul>
                                    <li><i class="far fa-check-circle"></i> {{$aguacate->dato2}}</li>
                                    <li><i class="far fa-check-circle"></i> {{$aguacate->dato3}}</li>
                                    <li><i class="far fa-check-circle"></i> {{$aguacate->dato4}}</li>
                                    <li><i class="far fa-check-circle"></i> {{$aguacate->dato5}}</li>
                                    <li><i class="far fa-check-circle"></i> {{$aguacate->dato6}}</li>
                                    <li><i class="far fa-check-circle"></i> {{$aguacate->dato7}}</li>
                                    <li><i class="far fa-check-circle"></i> {{$aguacate->dato8}}</li>
                                </ul>

{{--                                <div class="col-md-12">--}}
{{--                                    <p><span><i class="far fa-address-book"></i> {{$aguacate->dato9}} </span></p>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <p><span><i class="fas fa-book"></i> {{$aguacate->dato10}}</span></p>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <p><span><i class="fas fa-book"></i> {{$aguacate->dato11}}</span></p>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-entry ftco-animate">
                            <a href="#" class="blog-image">
                                <img style="width: 100%; transform: rotate(-90deg);" src="{{asset($aguacate->imagen2)}}" class="img-fluid" alt="" width="50%" height="150%">
                            </a>
                        </div>
                        <div class="blog-entry ftco-animate">
                            <a href="#" class="blog-image">
                                <img style="width: 100%; transform: rotate(-90deg);" src="{{asset($aguacate->imagen6)}}" class="img-fluid" alt="" width="50%" height="150%">
                            </a>
                        </div>
                    </div>
                @elseif(!empty($ropa) and $etiqueta == 1)
                    <div class="col-md-8" style="background-image: url({{asset($ropa->imagen26)}}); background-repeat:no-repeat">
                        <div class="blog-entry ftco-animate">
                            <div class="text py-4">
                                <div class="meta">
                                    <div><a href="#">15 Abril, 2020</a></div>
                                    <div><a href="#">Fecha de Vencimiento</a></div>
                                </div>
                                <h3 class="heading"><a href="#">{{$ropa->nombre}}</a></h3>
                                <p><span><i class="fas fa-tshirt"></i> </span> {{$ropa->nombre}} <i class="fas fa-tshirt"></i></p>
                                <p><span><i class="fas fa-map-marked-alt"></i></span> {{$ropa->direccion}}</p>
                                <p><span><i class="fab fa-whatsapp"></i></span> {{$ropa->celular}}</p>
                                <p><span><i class="fas fa-clock"></i> </span> {{$ropa->horarios}}</p>
                                <p><span><i class="fab fa-facebook"></i> </span> {{$ropa->dato1}}</p>

                                <p><span><b>Ropa Artesanal</b> </span></p>
                                <p>Estamos dedicadas a vender ropa artesanal hecha a mano con modelos diferentes y hermosos, para todos los gustos y tallas, apoyando lo hecho en México, cada modelo es único</p>

                                {{--                                <div class="col-md-12">--}}
                                {{--                                    <p><span><i class="far fa-address-book"></i> {{$aguacate->dato9}} </span></p>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="col-md-12">--}}
                                {{--                                    <p><span><i class="fas fa-book"></i> {{$aguacate->dato10}}</span></p>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="col-md-12">--}}
                                {{--                                    <p><span><i class="fas fa-book"></i> {{$aguacate->dato11}}</span></p>--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-entry ftco-animate">
                            <a href="#" class="blog-image">
                                <img style="width: 100%;" src="{{asset($ropa->imagen2)}}" class="img-fluid" alt="" width="50%" height="150%">
                            </a>
                        </div>
                        <div class="blog-entry ftco-animate">
                            <a href="#" class="blog-image">
                                <img style="width: 100%;" src="{{asset($ropa->imagen25)}}" class="img-fluid" alt="" width="50%" height="150%">
                            </a>
                        </div>
                    </div>
                @else
                    <div class="col-md-8" >
                        <div class="blog-entry ftco-animate">
                            <div class="text py-4">
                                <div class="blog-entry ftco-animate">
                                    <div class="text py-4">
                                        <div class="meta">
                                            <div><a href="#">Lugares disponibles</a></div>
                                            <div><a href="http://formatoweb.net/">Contactanos</a></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Este div si tiene que ir, pero no encontre el problema y asi funciona bien, pero hay que ver cual es el problema -->
                        <!-- </div> -->
                        @endif
                    </div>
                    <!-- =============================================================================================================== -->
                    <!-- ============================================= MAPAS =========================================================== -->
                    <!-- =============================================================================================================== -->
                    <h1 class="text-center text-info"><i class="fas fa-arrow-down"></i> Donde nos puede encontrar <i class="fas fa-arrow-down"></i></h1>
                    <div class="row">
                        <div class="embed-responsive embed-responsive-16by9">
                            <!-- <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d332.0261252927713!2d-99.1473481823613!3d19.69359322171353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f5203f5a2773%3A0xc0e204c3459a6955!2sTienda+La+VENTANITA!5e0!3m2!1ses!2smx!4v1545610342609" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                            @if(!empty($aguacate))

                                <iframe class="embed-responsive-item" src="{{$aguacate->maps}}" width="600" height="450"
                                        frameborder="0" style="border:0" allowfullscreen></iframe>
                                @elseif(!empty($ropa))

                                <iframe class="embed-responsive-item" src="{{$ropa->maps}}" width="600" height="450"
                                        frameborder="0" style="border:0" allowfullscreen></iframe>
                            @else
                                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.4211797671783!2d-99.14964038515345!3d19.69468478673597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f5205a2b2e5d%3A0x88689a5284b69534!2sFORMATOWEBGX!5e0!3m2!1ses!2smx!4v1552967393251" width="100%"
                                        frameborder="0" style="border:0" allowfullscreen></iframe>
                            @endif
                        </div>
                    </div>
            </div><!-- end: page-container-->
    </section>
@endsection
