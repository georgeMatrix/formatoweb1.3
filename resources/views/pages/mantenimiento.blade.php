@extends('layout/layout')
@section('contenido')

    <?php $pagina = 2; ?>
    <div>
        <div class="toppanel-left">

            <!--Home Slider Start-->
            <div id="layerslider" style="width: 714px; height: 400px;">

                <!--Slider 1-->
                <div class="ls-slide" data-ls="transition2d: 8,49,111,105; slidedelay: 8000;">

                    <!--Slider Background-->
                    <img class="ls-bg" src="formatoWeb/images/laptopfw.png" alt="layer1-background" />
                    <a href="#" class="ls-link"></a>

                    <!--Slider Layers-->
                    <img class="ls-l" src="formatoWeb/images/mousefw.png" alt="layer image" style="top: 20px; left: 80px;" data-ls="offsetxin: 700; offsetxout: -450; fadein: false; fadeout: false; durationin: 2500; durationout: 1000; easingout : easeInOutBack;" />

                    <h1 class="ls-l" style="top: 83px; left: 410px; text-shadow: 0px 0px 10px rgba(255, 255, 255, 0.5); font-weight: 400; font-size: 24px; color: white;" data-ls="offsetxin: -50; offsetxout: -50; durationin: 1500; durationout: 1000; delayin: 1300; easingin: easeInOutQuart; rotateyin: -180; rotateyout: -180;">Bienvenido</h1>

                    <h1 class="ls-l" style="top: 100px; left: 350px; font-weight: 700; font-size: 40px; color: white; text-shadow: 0px 0px 10px rgba(255, 255, 255, 0.5); text-transform: uppercase;" data-ls="offsetxin: 0; offsetxout: 0; durationin: 5000; delayin: 1300; easingin: easeOutElastic; rotatexin: 90; transformoriginin: 50% bottom 0; rotatexout: 90; transformoriginout: 50% bottom 0;">FormatoWebGx</h1>

                    <h1 class="ls-l" style="top: 155px; left: 350px; text-shadow: 0px 0px 10px rgba(255, 255, 255, 0.5); font-weight: 400; font-size: 27px; color: white;" data-ls="offsetxin: -50; offsetxout: -50; durationin: 1800; durationout: 1000; delayin: 1500; easingin: easeInOutQuart; rotateyin: -180; rotateyout: -180;">Mantenimiento Informatico</h1>

                    <div class="ls-l" style="top: 245px; left: 430px; font-size: 65px; color: white;" data-ls="offsetxin: 0; offsetxout: 0; durationin: 1500; durationout: 1000; delayin: 2000; easingin: easeInOutQuart; rotateyin: -180; rotateyout: -180;"><i class="fa fa-cogs"></i></div>

                    <div class="ls-l" style="top: 245px; left: 525px; font-size: 65px; color: white;" data-ls="offsetxin: 0; offsetxout: 0; durationin: 1500; durationout: 1000; delayin: 2000; easingin: easeInOutQuart; rotateyin: -180; rotateyout: -180;"><i class="fa fa-wrench"></i></div>

                </div>
                <!--End-->

                <!--Slider 2-->
                <div class="ls-slide" data-ls="transition2d: 8,49,111,105; slidedelay: 8000;">

                    <!--Slider Background-->
                    <img class="ls-bg" src="formatoWeb/images/extremefw.png" alt="layer2-background" />
                    <a href="#" class="ls-link"></a>

                    <!--Slider Layers-->
                    <img class="ls-l" src="formatoWeb/images/hddfw.png" alt="layer image" style="top: 80px; left: 355px;" data-ls="offsetxin: 500; offsetxout: 500; fadein: false; fadeout: false; durationin: 2000; durationout: 1000; easingin: easeInOutBack; easingout : easeInOutBack;" />

                    <img class="ls-l" src="formatoWeb/images/memoria.png" alt="layer image" style="top: 155px; left: 335px;" data-ls="offsetxin: 580; offsetxout: 580; fadein: false; fadeout: false; durationin: 2500; durationout: 1000; easingin: easeInOutBack; easingout : easeInOutBack;" />

                    <h1 class="ls-l" style="top: 123px; left: 55px; font-weight: 400; font-size: 22px; color: white; background-color: #4a4a4a; padding: 5px 15px;" data-ls="offsetxin: -400; offsetxout: -400; durationin: 1500; durationout: 1000; delayin: 1000; easingin: easeInOutBack; easingout : easeInOutBack;">Diagnostico y Reparacion</h1>

                    <h1 class="ls-l" style="top: 180px; left: 55px; font-weight: 400; font-size: 22px; color: white; background-color: #4a4a4a; padding: 5px 15px;" data-ls="offsetxin: -400; offsetxout: -400; durationin: 1800; durationout: 1000; delayin: 1000; easingin: easeInOutBack; easingout : easeInOutBack;">Recuperación de documentación</h1>

                    <h1 class="ls-l" style="top: 236px; left: 55px; font-weight: 400; font-size: 22px; color: white; background-color: #4a4a4a; padding: 5px 15px;" data-ls="offsetxin: -400; offsetxout: -400; durationin: 2000; durationout: 1000; delayin: 1000; easingin: easeInOutBack; easingout : easeInOutBack;">Actualizacion de Equipos</h1>

                </div>
                <!--End-->

                <!--Slider 3-->
                <!--<div class="ls-slide" data-ls="transition2d: 8,49,111,105; slidedelay: 8000;">-->

                <!--Slider Background-->
                <!--<img class="ls-bg" src="formatoWeb/images/motherfw.png" alt="layer3-background" />
                <a href="#" class="ls-link"></a>-->

                <!--Slider Layers-->
                <!--<h1 class="ls-l" style="top: 85px; left: 70px; font-weight: 700; font-size: 44px; color: white; text-transform: uppercase; background-color: #f68a5e; padding: 5px 15px;" data-ls="offsetxin: -400; offsetxout: -400; durationin: 1500; durationout: 1000; easingin: easeInOutBack; easingout : easeInOutBack;">Comprometidos</h1>

                <h1 class="ls-l" style="top: 168px; left: 70px; font-weight: 400; font-size: 22px; color: white; background-color: #4a4a4a; padding: 5px 15px;" data-ls="offsetxin: -400; offsetxout: -400; durationin: 2000; durationout: 1000; easingin: easeInOutBack; easingout : easeInOutBack;">Con nuestro trabajo</h1>

            </div>-->
                <!--End-->

            </div>
            <!--Home Slider End-->

            <!--Site Slogan Start-->
            <div class="site-slogan-wrapper">
                <div class="site-slogan">
                    <p>Diagnostico Mantenimiento <span>Reparacion.</span></p>
                </div>
            </div>
            <!--Site Slogan End-->

        </div>

        <!--Who We Are Start-->

        <div class="visible-lg visible-md">
            <div class="toppanel-right">
                <div class="home-aboutus">
                    <figure>
                        <img src="formatoWeb/images/lap2fw.jpg" alt="Who we are" />
                    </figure>
                </div>
                <div class="home-aboutus-content">
                    <div class="home-aboutus-title">
                        Soporte para tu negocio
                    </div>
                    <div class="home-aboutus-details">
                        <figure>
                            <img src="formatoWeb/images/upload/califica.png" alt="like" />
                        </figure>
                        <p>Contactanos y conoce las principales ventajas que obtienes al tener equipos en óptimas condiciones.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Who We Are End-->

    </div>

    <div class="clearfix"></div>

    <!--Portfolio Start-->

    <section class="stripe portfolio-panel">

        <!--/*****************************************************************************************/
        /*********************************Dispositivos Moviles************************************/
        /*****************************************************************************************/-->
        <div class="visible-xs">
            <section class="stripe service-page-icon">
                <h1 class="text-center">Servicios</h1>

                <ul class="service-icon">
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="#">
                            <div class="service-box">
                                <h2>Carga de Sistemas Operativos</h2>
                                <div class="icon-wrapper">
                                    <i class="fa fa-server fa-4x"></i>
                                </div>
                                <p>Visita esta página desde un equipo de Escritorio o Laptop.</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="#">
                            <div class="service-box">
                                <h2>Limpieza de CPU y Laptop</h2>
                                <div class="icon-wrapper">
                                    <i class="fa fa fa-wrench fa-4x"></i>
                                </div>
                                <p>Limpieza total del gabinete y todas sus piezas.</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="#">
                            <div class="service-box">
                                <h2>Rescate de documentos</h2>
                                <div class="icon-wrapper">
                                    <i class="fa fa-database fa-4x"></i>
                                </div>
                                <p>extracción de documentos de discos, en formato RAW o cualquier otro tipo de formato.</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="#">
                            <div class="service-box">
                                <h2>Actualizacion</h2>
                                <div class="icon-wrapper">
                                    <i class="fa fa-ambulance fa-4x"></i>
                                </div>
                                <p>Diagnóstico y actualización</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="#">
                            <div class="service-box">
                                <h2>Accesorios y Refacciones</h2>
                                <div class="icon-wrapper">
                                    <i class="fa fa-gear fa-4x"></i>
                                </div>
                                <p>Todo tipo de equipo.</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="#">
                            <div class="service-box">
                                <h2>Mantenimiento</h2>
                                <div class="icon-wrapper">
                                    <i class="fa fa-medkit fa-4x"></i>
                                </div>
                                <p>Predictivo, Preventivo, Correctivo<p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="#">
                            <div class="service-box">
                                <h2>Compra y venta de accesorios</h2>
                                <div class="icon-wrapper">
                                    <i class="fa fa-dollar fa-4x"></i>
                                </div>
                                <p>Compramos artículos de computación en buen estado.</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="#">
                            <div class="service-box">
                                <h2>Venta de cables</h2>
                                <div class="icon-wrapper">
                                    <i class="fa fa-code-fork fa-4x"></i>
                                </div>
                                <p>Vendemos cualquier tipo de cable por metro, conexiones y convertidores.</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="#">
                            <div class="service-box">
                                <h2>Tablet Venta y Refacciones</h2>
                                <div class="icon-wrapper">
                                    <i class="fa fa-tablet fa-4x"></i>
                                </div>
                                <p>Diagnosticamos, reparamos y actualizamos tu Tablet.</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="#">
                            <div class="service-box">
                                <h2>Tienda</h2>
                                <div class="icon-wrapper">
                                    <i class="fa fa-cart-arrow-down fa-4x"></i>
                                </div>
                                <p>Aquí podrás encontrar un catálogo de nuestros artículos a la venta.</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </section>
        </div>

        <!--/*****************************************************************************************/
        /*********************************Dispositivos Moviles************************************/
        /*****************************************************************************************/-->

        <div class="visible-lg visible-md visible-sm">
            <div class="homepanel-title-area">
                <h1><span class="homepanel-title">Servicios</span></h1>
            </div>

            <!--Category Filter-->
            <div class="category-filter">
                <ul>
                    <li class="filter selected" data-category="cat-all">Todo</li>
                    <li class="filter" data-category="cat-one">Diagnostico y Reparacion</li>
                    <li class="filter" data-category="cat-two">Actualizacion y Accesorios</li>
                    <li class="filter" data-category="cat-three">Mantenimiento</li>
                    <li class="filter" data-category="cat-four">Segunda Mano</li>
                    <li class="filter" data-category="cat-five">Tienda</li>
                </ul>
            </div>
            <!--End-->

            <!--Portfolio Thumbnails-->
            <div class="portfolio-thumbnail">
                <div class="megafolio-container noborder">

                    <!--Thumbnail 1 Start-->
                    <div class="mega-entry cat-all cat-one" id="entry-1" data-src="formatoWeb/images/sofw.png" data-width="800" data-height="605">

                        <!--Hover Effect Start-->
                        <a class="portfolio-popup" href=".popup1">
                            <div class="mega-hover alone notitle">

                                <!-- Link Button -->
                                <div class="mega-hoverview"></div>

                            </div>
                        </a>
                        <!--Hover Effect End-->

                    </div>

                    <!--Hidden content for Pop-up-->
                    <div class="popup-wrapper">
                        <div class="content-popup popup1">
                            <img src="formatoWeb/images/sofw2.png" alt="portfolio" />
                            <div class="popup-text">
                                <h2>Carga de Sistemas Operativos aplicaciones, Suites</h2>
                                <p style="text-align:justify;">Contamos con cualquier distribución de Linux, Windows XP, Windows 7, Windows 8, Windows 8.1 todos con licenciamiento y sin ningún problema para las actualizaciones. Nero, Office, Adobe, Autocad, Reproductores de música, Códecs y aplicaciones para edición de video y audio. Todo tipo de controlador. Carga de librerías, Frameworks. mucho mas...</p>
                            </div>
                        </div>
                    </div>
                    <!--Thumbnail End-->

                    <!--Thumbnail 2 Start-->
                    <div class="mega-entry cat-all cat-one" id="entry-2" data-src="formatoWeb/images/limpieza2fw.png" data-width="600" data-height="655">

                        <!--Hover Effect Start-->
                        <a class="portfolio-popup" href=".popup2">
                            <div class="mega-hover alone notitle">

                                <!-- Link Button -->
                                <div class="mega-hoverview"></div>

                            </div>
                        </a>
                        <!--Hover Effect End-->

                    </div>

                    <!--Hidden content for Pop-up-->
                    <div class="popup-wrapper">
                        <div class="content-popup popup2">
                            <img src="formatoWeb/images/limpiezafw.png" alt="portfolio" />
                            <div class="popup-text">
                                <h2>Limpieza de CPU y Laptop</h2>
                                <p style="text-align:justify;">Para que un equipo entregue siempre el mejor rendimiento, es necesario mantenerlo siempre limpio. Nuestro trabajo consiste en limpieza de todas las piezas de su gabinete con aire comprimido, poner nueva pasta térmica al procesador, aceitar ventiladores, limpieza de memorias RAM. En caso de gabinetes, también se le da el mismo tratamiento a las fuentes de poder.</p>
                            </div>
                        </div>
                    </div>
                    <!--Thumbnail End-->

                    <!--Thumbnail 3 Start-->
                    <div class="mega-entry cat-all cat-one" id="entry-3" data-src="formatoWeb/images/recuperacionfw.png" data-width="800" data-height="536">

                        <!--Hover Effect Start-->
                        <a class="portfolio-popup" href=".popup3">
                            <div class="mega-hover alone notitle">

                                <!-- Link Button -->
                                <div class="mega-hoverview"></div>

                            </div>
                        </a>
                        <!--Hover Effect End-->

                    </div>

                    <!--Hidden content for Pop-up-->
                    <div class="popup-wrapper">
                        <div class="content-popup popup3">
                            <img src="formatoWeb/images/recuperacion2.jpg" alt="portfolio" />
                            <div class="popup-text">
                                <h2>Rescate de documentos</h2>
                                <p style="text-align:justify;">Contamos con las herramientas necesarias para realizar una extracción de documentos de discos, en formato RAW o cualquier otro tipo de formato. Discos dañados, o con un borrado permanente.</p>
                            </div>
                        </div>
                    </div>
                    <!--Thumbnail End-->

                    <!--Thumbnail 4 Start-->
                    <div class="mega-entry cat-all cat-two" id="entry-4" data-src="formatoWeb/images/actualizacion2fw.png" data-width="600" data-height="600">

                        <!--Hover Effect Start-->
                        <a class="portfolio-popup" href=".popup4">
                            <div class="mega-hover alone notitle">

                                <!-- Link Button -->
                                <div class="mega-hoverview"></div>

                            </div>
                        </a>
                        <!--Hover Effect End-->

                    </div>

                    <!--Hidden content for Pop-up-->
                    <div class="popup-wrapper">
                        <div class="content-popup popup4">
                            <img src="formatoWeb/images/actualizacion1fw.png" alt="portfolio" />
                            <div class="popup-text">
                                <h2>Actualizacion de Equipos</h2>
                                <p style="text-align:justify;">Al realizar la actualización de un equipo primero hacemos una evaluación de las requisiciones del usuario, esto nos da una perspectiva más amplia de lo que se va actualizar. Todo esto con el propósito de encontrar la mejor opción precio calidad.</p>
                            </div>
                        </div>
                    </div>
                    <!--Thumbnail End-->

                    <!--Thumbnail 5 Start-->
                    <div class="mega-entry cat-all cat-two" id="entry-5" data-src="formatoWeb/images/accesoriosfw22.png" data-width="590" data-height="400">

                        <!--Hover Effect Start-->
                        <a class="portfolio-popup" href=".popup5">
                            <div class="mega-hover alone notitle">

                                <!-- Link Button -->
                                <div class="mega-hoverview"></div>

                            </div>
                        </a>
                        <!--Hover Effect End-->

                    </div>

                    <!--Hidden content for Pop-up-->
                    <div class="popup-wrapper">
                        <div class="content-popup popup5">
                            <img src="formatoWeb/images/accesoriosfw.png" alt="portfolio" />
                            <div class="popup-text">
                                <h2>Accesorios y Refacciones</h2>
                                <p style="text-align:justify;">Con nosotros encontraras todo lo que se refiere a accesorios y refacciones para laptop y equipo de escritorio, Discos duros, Unidades de estado sólido, memoria RAM, gabinetes, Fuentes de Poder, Procesadores, MotherBoard, Tarjetas Aceleradoras Graficas, mouse, teclados, Monitores, redes inalámbricas y mucho más…</p>
                            </div>
                        </div>
                    </div>
                    <!--Thumbnail End-->

                    <!--Thumbnail 6 Start-->
                    <div class="mega-entry cat-all cat-three" id="entry-6" data-src="formatoWeb/images/mantenimiento2fw.png" data-width="700" data-height="766">

                        <!--Hover Effect Start-->
                        <a class="portfolio-popup" href=".popup6">
                            <div class="mega-hover alone notitle">

                                <!-- Link Button -->
                                <div class="mega-hoverview"></div>

                            </div>
                        </a>
                        <!--Hover Effect End-->

                    </div>

                    <!--Hidden content for Pop-up-->
                    <div class="popup-wrapper">
                        <div class="content-popup popup6">
                            <img src="formatoWeb/images/mantenimientofw1.png" alt="portfolio" />
                            <div class="popup-text">
                                <h2>Mantenimiento</h2>
                                <ul>
                                    <li>Predictivo<br>
                                        <p style="text-align:justify;">El mantenimiento predictivo que está basado en la determinación del estado de la máquina en operación. El concepto se basa en que las máquinas darán un tipo de aviso antes de que fallen y este mantenimiento trata de percibir los síntomas para después tomar acciones.</p></li>
                                    <li>Preventivo<br>
                                        <p style="text-align:justify;">El mantenimiento preventivo es una actividad programada de inspecciones, tanto de funcionamiento como de seguridad, ajustes, reparaciones, análisis, limpieza, lubricación, calibración, que deben llevarse a cabo en forma periódica en base a un plan establecido.</p></li>
                                    <li>Correctivo<br>
                                        <p style="text-align:justify;">Se denomina mantenimiento correctivo, aquel que corrige los defectos observados en los equipamientos o instalaciones, es la forma más básica de mantenimiento y consiste en localizar averías o defectos y corregirlos o repararlos.</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Thumbnail End-->

                    <!--Thumbnail 7 Start-->
                    <div class="mega-entry cat-all cat-four" id="entry-7" data-src="formatoWeb/images/usadofw.png" data-width="700" data-height="766">

                        <!--Hover Effect Start-->
                        <a class="portfolio-popup" href=".popup7">
                            <div class="mega-hover alone notitle">

                                <!-- Link Button -->
                                <div class="mega-hoverview"></div>

                            </div>
                        </a>
                        <!--Hover Effect End-->

                    </div>

                    <!--Hidden content for Pop-up-->
                    <div class="popup-wrapper">
                        <div class="content-popup popup7">
                            <img src="formatoWeb/images/usado2.png" alt="portfolio" />
                            <div class="popup-text">
                                <h2>Compra y venta de accesorios</h2>
                                <p style="text-align:justify;">Compramos artículos de computación en buen estado, tráenos tus artículos para valorarlos y cambiarlos por algo más.</p>
                            </div>
                        </div>
                    </div>
                    <!--Thumbnail End-->

                    <!--Thumbnail 9 Start-->
                    <div class="mega-entry cat-all cat-two" id="entry-9" data-src="formatoWeb/images/cablesfw.png" data-width="700" data-height="766">

                        <!--Hover Effect Start-->
                        <a class="portfolio-popup" href=".popup9">
                            <div class="mega-hover alone notitle">

                                <!-- Link Button -->
                                <div class="mega-hoverview"></div>

                            </div>
                        </a>
                        <!--Hover Effect End-->

                    </div>

                    <!--Hidden content for Pop-up-->
                    <div class="popup-wrapper">
                        <div class="content-popup popup9">
                            <img src="formatoWeb/images/cables2fw.jpg" alt="portfolio" />
                            <div class="popup-text">
                                <h2>Venta de cables conexiones y convertidores</h2>
                                <p style="text-align:justify;">Vendemos cualquier tipo de cable por metro, conexiones y convertidores.</p>
                            </div>
                        </div>
                    </div>
                    <!--Thumbnail End-->

                    <!--Thumbnail 9 Start-->
                    <div class="mega-entry cat-all cat-one" id="entry-10" data-src="formatoWeb/images/tabletfw.png" data-width="700" data-height="766">

                        <!--Hover Effect Start-->
                        <a class="portfolio-popup" href=".popup10">
                            <div class="mega-hover alone notitle">

                                <!-- Link Button -->
                                <div class="mega-hoverview"></div>

                            </div>
                        </a>
                        <!--Hover Effect End-->

                    </div>

                    <!--Hidden content for Pop-up-->
                    <div class="popup-wrapper">
                        <div class="content-popup popup10">
                            <img src="formatoWeb/images/touchfw.jpg" alt="portfolio" />
                            <div class="popup-text">
                                <h2>Tablet</h2>
                                <p style="text-align:justify;">Diagnosticamos, reparamos y actualizamos tu Tablet además contamos con refacciones para las mismas.</p>
                            </div>
                        </div>
                    </div>
                    <!--Thumbnail End-->

                    <!--Thumbnail 10 Start-->
                    <div class="mega-entry cat-all cat-five" id="entry-11" data-src="formatoWeb/images/tiendafw.png" data-width="700" data-height="766">

                        <!--Hover Effect Start-->
                        <a class="portfolio-popup" href=".popup11">
                            <div class="mega-hover alone notitle">

                                <!-- Link Button -->
                                <div class="mega-hoverview"></div>

                            </div>
                        </a>
                        <!--Hover Effect End-->

                    </div>

                    <!--Hidden content for Pop-up-->
                    <div class="popup-wrapper">
                        <div class="content-popup popup11">
                            <img src="formatoWeb/images/tienda2_fw.jpg" alt="portfolio" />
                            <div class="popup-text">
                                <h2>Tienda</h2>
                                <p style="text-align:justify;">Aquí podrás encontrar un catálogo de nuestros artículos a la venta</p>
                                <!--<button onClick="location.href='portfolio-single.html'">Mas Detalles</button>-->
                                <!--<button onClick="">Mas Detalles</button>-->
                                <button class="btn btn-primary marginBoton">Proximamente</button>
                            </div>
                        </div>
                    </div>
                    <!--Thumbnail End-->



                </div>
            </div>
            <!--Portfolio Thumbnails End-->
        </div>
    </section>
    <!--Portfolio End-->
@stop
