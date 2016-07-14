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
    {!!Html::style('css/nav-wizard.css')!!}

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
          <p>Registrando tu marca</p>
        </div>
      </div>  
    </header>
    <div class="container">
      <ul class='nav nav-wizard'>
        <li class="active"><a href='#step1'>1 - Detalles</a></li>
        <li><a href='#step2'>2 - Uso</a></li>
        <li><a href="#step3">3 - Propietario</a></li>
      </ul>
    </div>  
    @yield('content')
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->      
    
  <!-- </script> -->
    {!!Html::script('js/bootstrap.min.js')!!}   
    {!!Html::script('js/tm-scripts.js')!!}   
  </body>
</html>