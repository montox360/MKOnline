<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>@yield('titulo')</title>

    <!-- Bootstrap -->
    {!!Html::style('css/bootstrap.css')!!}

    <!-- Links -->
    {!!Html::style('css/camera.css')!!}
    {!!Html::style('css/search.css')!!}
    {!!Html::style('css/google-map.css')!!}

    <!--JS-->
    {!!Html::script('js/jquery.js')!!}
    {!!Html::script('js/jquery-migrate-1.2.1.min.js')!!}
    {!!Html::script('js/rd-smoothscroll.min.js')!!}
    

    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    {!!Html::script('js/device.min.js')!!}
  </head>
  <body>
  <div class="page">
  <!--========================================================
                            HEADER
  =========================================================-->
    <header>  
      <div class="container top-sect">
        <div class="navbar-header">
          <h1 class="navbar-brand">
            <a data-type='rd-navbar-brand'  href="./">MK<small>Online</small></a>
          </h1>
          <a class="search-form_toggle" href="#"></a>
        </div>

        <div class="help-box text-right">
          <p>Necesitas Ayuda?</p>
          <a href="callto:#">424-274-2287</a>
          <small><span>Horas:</span>  7am-6pm PST M-Th; &nbsp;7am-6pm PST Fri</small>
        </div>
      </div>


      <div id="stuck_container" class="stuck_container">
        <div class="container">   
        <nav class="navbar navbar-default navbar-static-top pull-left">            

            <div class="">  
              <ul class="nav navbar-nav sf-menu" data-type="navbar">
                <li>
                  <a href="./">INICIO</a>
                </li>
                <li>
                  <a href="nosotros">NOSOTROS</a>
                </li>
                <li class="dropdown">
                  <a href="index-2.html">SERVICIOS<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                  <ul class="dropdown-menu">
                  @foreach($categories as $category)
                    <li>
                      <a href="registro-marca">{{$category->nombre}}</a>
                    </li>
                  @endforeach
                  </ul>
                </li>                
                <li>
                  <a href="index-3.html">PROYECTOS</a>
                </li>
                
                <li>
                  <a href="index-4.html">CONTACTOS</a>
                </li>
              </ul>                           
            </div>
        </nav>   
        </div>

      </div>  
    </header>
    @yield('content')
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->      
    {!!Html::script('js/bootstrap.min.js')!!}   
    {!!Html::script('js/tm-scripts.js')!!}   
  <!-- </script> -->


  </body>
</html>