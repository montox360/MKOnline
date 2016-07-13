@extends('layouts.master')
@section('titulo', 'MKOnline: Principal')

  <!--========================================================
                            CONTENT
  =========================================================-->
@section('content')
  @include('alerts.login-error')
    <main>        
      <section class="well well1 well1_ins1">
        <div class="camera_container">
          <div id="camera" class="camera_wrap">
            <div data-src="images/page-1_slide1.jpg">
              <div class="camera_caption fadeIn">
                <div class="jumbotron jumbotron1">
                  <em>
                    BIENVENIDO
                  </em>
                  <div class="wrap">
                    <p>
                      En que te podemos ayudar hoy?
                    </p>
                    <a href="#" class="btn-link fa-angle-right"></a>
                  </div>  
                </div>
              </div>
            </div>
            <div data-src="images/page-1_slide2.jpg">
              <div class="camera_caption fadeIn">
                <div class="jumbotron jumbotron2">
                  <em>
                    quality
                  </em>
                  <div class="wrap">
                    <p>
                      Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do<span> eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</span>.
                    </p>
                    <a href="#" class="btn-link hov_prime fa-angle-right"></a>
                  </div>  
                </div>
              </div>
            </div>
            <div data-src="images/page-1_slide3.jpg">
              <div class="camera_caption fadeIn">
                <div class="jumbotron">
                  <em>
                    SOLUTIONS
                  </em>
                  <div class="wrap">
                    <p>
                      Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do<span> eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</span>.
                    </p>
                    <a href="#" class="btn-link fa-angle-right"></a>
                  </div>  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container center991">
          <div class="row">
          <div class="row wow fadeIn" data-wow-duration='2s'>
          @foreach($categories as $index=>$category)
            
            @if($index==0)
              <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="thumbnail thumb-shadow">
                  <img src="images/page-1_img1.jpg" alt="">
                  <div class="caption bg2">
                    <h3>
                      {{$category->nombre}}
                    </h3>
                    <div class="wrap">
                      <p>
                        {{$category->descripcion}}
                      </p>
                      <a href="#" class="btn-link fa-angle-right"></a>
                    </div>  
                  </div>
                </div>  
              </div>            
            @endif

            @if($index==1)
              <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="thumbnail thumb-shadow">
                  <img src="images/page-1_img2.jpg" alt="">
                  <div class="caption bg3">
                    <h3>
                      {{$category->nombre}}
                    </h3>
                    <div class="wrap">
                      <p class="thumb_ins1">
                        {{$category->descripcion}}
                      </p>
                      <a href="#" class="btn-link fa-angle-right"></a>
                    </div>  
                  </div>
                </div> 
              </div>
               </div> 
            @endif

           

            @if($index==2)
             <div class="row wow fadeIn" data-wow-duration='2s'>
              <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="thumbnail thumb-shadow">
                  <img src="images/page-1_img3.jpg" alt="">
                  <div class="caption bg3">
                    <h3>
                      {{$category->nombre}}
                    </h3>
                    <div class="wrap">
                      <p>
                        {{$category->descripcion}}
                      </p>
                      <a href="#" class="btn-link fa-angle-right"></a>
                    </div>  
                  </div>
                </div>              
              </div>
                 
              @endif

            
              @if($index==3)
              <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="thumbnail thumb-shadow">
                  <img src="images/page-1_img4.jpg" alt="">
                  <div class="caption bg-primary">
                    <h3>
                      {{$category->nombre}}
                    </h3>
                    <div class="wrap">
                      <p>
                        {{$category->descripcion}}
                      </p>
                      <a href="#" class="btn-link fa-angle-right"></a>
                    </div>  
                  </div>
                </div>              
              </div>
              @endif

              @if($index==4)
              <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="thumbnail thumb-shadow">
                  <img src="images/page-1_img5.jpg" alt="">
                  <div class="caption bg2">
                    <h3>
                      {{$category->nombre}}
                    </h3>
                    <div class="wrap">
                      <p>
                       {{$category->descripcion}}
                      </p>
                      <a href="#" class="btn-link fa-angle-right"></a>
                    </div>  
                  </div>
                </div>              
              </div>
              </div>
              @endif
          
      @endforeach
      </div>
        </div>  
        </section>
      <section class="well well2 wow fadeIn  bg1" data-wow-duration='3s'>
        <div class="container">
        <h2 class="txt-pr">
        BIENVENIDO
          <small>
            A MK ONLINE
          </small>
        </h2>
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <p style="text-align: justify;">MONTOYA KOCIECKI & ASOCIADOS fue fundada en 1983 por iniciativa de José Dagoberto Montoya y Slawomir Kociecki, con el objetivo de brindar un servicio especializado en el área de Propiedad Intelectual a nivel nacional e internacional. Desde entonces hemos estado en constante crecimiento, en lo que se refiere a conocimiento, experiencia, desarrollo de equipo, y tecnología, a fin de ser hoy en día una empresa capaz de proporcionar a nuestros clientes soluciones y asesoría especializada. Con una experiencia de más de 30 años, hemos constituido un diverso y experimentado equipo formado por  Ingenieros, Abogados, Traductores,  Administradores y expertos en Comunicación que siempre tendrán la mejor disposicion para bindar a los clientes el mejor servicio en el area.</p>
             
            </div>
            <div class="col-md-6 col-sm-12">
               <p style="text-align: justify;">Para destacarnos en el area hemos dedicado todo el esfuerzo y  nuestro recurso humano especializado para desarrollar un sistema eficiente y automatizado que facilite y  optimice los procesos de vigilancia de casos en el área de la Propiedad Intelectual, tales como: búsquedas, solicitudes, informaciones de estatus, entre otros. Nuestro interes primordial es proveer la mejor y más completa solución para las necesidades de nuestros clientes en nuestras diferentes áreas de prácticas. Marcas, Patentes, Derechos de Autor, Nombres de Dominio, y Asuntos Legales.
                <a href="#" class="btn-link l-h1 fa-angle-right"></a>
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="well well2">
        <div class="container">
        <h2>
          Nuestros
          <small>
            SERVICIOS
          </small>
        </h2>
          <div class="row offs1">
            <div class="col-md-6 col-sm-12">
              <ul class="link-list wow fadeInLeft" data-wow-duration='3s'>
                <li>

                  <a href="#">Excepteur sint occaecat cupidatat non</a>

                  <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                </li>
                <li>

                  <a href="#">Lorem ipsum dolor sit amet</a>

                  <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                </li>
                <li>

                  <a href="#">Conse ctetur adipisicing elit sed do</a>

                  <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                </li>
                <li>

                  <a href="#">Eiusmod tempor incididunt</a>

                  <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                </li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-12">
              <img class="width_img" src="images/page-1_img6.jpg" alt="">
            </div>
          </div>
        </div>
      </section>

      <section class="well well3 parallax" data-url="images/parallax1.jpg" data-mobile="
      true" data-speed="0.9">
        <div class="container">
          <div class="wrap text-center">
            <strong>
              APOYO LEGAL EMPRESARIAL
              <small>
                desde cualquier parte
              </small>
            </strong>
            <p>
              Nuestros abogados pueden asesorarlo con cualquier problema que se le presente a su compa&ntilde;ia.
            </p>
            <a href="#" class="btn btn-primary"> Mas informaci&oacute;n <span class="fa-angle-right"></span></a>
          </div>  
        </div>        
      </section>

      <section class="well well2">
        <div class="container">
          <h2>
            our 
            <small>
              clients
            </small>
          </h2>

          <div class="row offs1">
            <ul class="flex-list">
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="images/page-1_img7.jpg" alt="">
                </a>  
              </li>
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="images/page-1_img8.jpg" alt="">
                </a>  
              </li>
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="images/page-1_img9.jpg" alt="">
                </a>  
              </li>
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="images/page-1_img10.jpg" alt="">
                </a>  
              </li>
            </ul>

            <ul class="flex-list">
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="images/page-1_img11.jpg" alt="">
                </a>  
              </li>
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="images/page-1_img12.jpg" alt="">
                </a>  
              </li>
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="images/page-1_img13.jpg" alt="">
                </a>  
              </li>
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="images/page-1_img14.jpg" alt="">
                </a>  
              </li>
            </ul>
          </div>  
          
        </div>
      </section>

    </main>

    <!--========================================================
                            FOOTER
  =========================================================-->
  <footer class="top-border">

    <div class="map">
      <div id="google-map" class="map_model" data-zoom="11"></div>
      <ul class="map_locations">
        <li data-x="-73.9874068" data-y="40.643180" data-basic="images/gmap_marker.png" data-active="images/gmap_marker_active.png">
          <div class="location">
            <h3 class="txt-clr1">
              BUSINESS
              <small>
                COMPANY
              </small>
            </h3>  
              <address>
                <dl>
                  <dt>Free phone: </dt>
                  <dd class="phone"><a href="callto:#"> 800-2345-6789</a></dd>
                </dl>
                <dl>
                  <dt>Address: </dt>
                  <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                </dl>
                <dl>
                  <dt>Hours: </dt>
                  <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                </dl>
                <dl>
                  <dt> E-mail: </dt>
                  <dd><a href="mailto:#">info@demolink.org</a></dd>
                </dl>
              </address>
            
          </div>
        </li>
        <li data-x="-74.100000" data-y="40.643180" data-basic="images/gmap_marker2.png" data-active="images/gmap_marker2_active.png">
          <div class="location">
            <h3 class="txt-clr1">
              flooring
              <small>
                RETAILER
              </small>
            </h3>
              <address>
                <dl>
                  <dt>Free phone: </dt>
                  <dd class="phone"><a href="callto:#"> 800-2345-6789</a></dd>
                </dl>
                <dl>
                  <dt>Address: </dt>
                  <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                </dl>
                <dl>
                  <dt>Hours: </dt>
                  <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                </dl>
                <dl>
                  <dt> E-mail: </dt>
                  <dd><a href="mailto:#">info@demolink.org</a></dd>
                </dl>
              </address>
            
          </div>
        </li>
        <li data-x="-73.8854068" data-y="40.693180" data-basic="images/gmap_marker3.png" data-active="images/gmap_marker3_active.png">
          <div class="location">
            <h3 class="txt-clr1">
              flooring
              <small>
                RETAILER
              </small>
            </h3>
              <address>
                <dl>
                  <dt>Free phone: </dt>
                  <dd class="phone"><a href="callto:#"> 800-2345-6789</a></dd>
                </dl>
                <dl>
                  <dt>Address: </dt>
                  <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                </dl>
                <dl>
                  <dt>Hours: </dt>
                  <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                </dl>
                <dl>
                  <dt> E-mail: </dt>
                  <dd><a href="mailto:#">info@demolink.org</a></dd>
                </dl>
              </address>
            
          </div>
        </li>
        <li data-x="-73.7874068" data-y="40.613180" data-basic="images/gmap_marker4.png" data-active="images/gmap_marker4_active.png">
          <div class="location">
            <h3 class="txt-clr1">
              flooring
              <small>
                RETAILER
              </small>
            </h3>
              <address>
                <dl>
                  <dt>Free phone: </dt>
                  <dd class="phone"><a href="callto:#"> 800-2345-6789</a></dd>
                </dl>
                <dl>
                  <dt>Address: </dt>
                  <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                </dl>
                <dl>
                  <dt>Hours: </dt>
                  <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                </dl>
                <dl>
                  <dt> E-mail: </dt>
                  <dd><a href="mailto:#">info@demolink.org</a></dd>
                </dl>
              </address>
            
          </div>
        </li>
        <li data-x="-74.200000" data-y="40.683180" data-basic="images/gmap_marker5.png" data-active="images/gmap_marker5_active.png">
          <div class="location">
            <h3 class="txt-clr1">
              flooring
              <small>
                RETAILER
              </small>
            </h3>
              <address>
                <dl>
                  <dt>Free phone: </dt>
                  <dd class="phone"><a href="callto:#"> 800-2345-6789</a></dd>
                </dl>
                <dl>
                  <dt>Address: </dt>
                  <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                </dl>
                <dl>
                  <dt>Hours: </dt>
                  <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                </dl>
                <dl>
                  <dt> E-mail: </dt>
                  <dd><a href="mailto:#">info@demolink.org</a></dd>
                </dl>
              </address>
            
          </div>
        </li>
      </ul>
    </div>

    <section class="well1">
      <div class="container"> 
            <p class="rights">
              Business Company  &#169; <span id="copyright-year"></span>
              <a href="index-5.html">Privacy Policy</a>
              More <a rel="nofollow" href="http://www.templatemonster.com/category/business-web-templates/" target="_blank">Business Website Templates at TemplateMonster.com</a>
            </p>          
      </div> 
    </section>    
  </footer>
  </div>
@endsection
   