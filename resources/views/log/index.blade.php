@extends ('layouts.admin')
@section('titulo', 'MKOnline: Login')

@section('content')
<div id="page-wrapper">
<div class="row">
    <div class="col-lg-12">
       <h1 class="page-header">
              Login
        </h1>
     </div>
</div>
<div class="container-fluid">
<div class="col-lg-3">
{!!Form::open(['route'=>['log.store', 'method'=>'POST']])!!}
  <div class="form-group">
    {!!Form::label('Email:')!!}
    {!!Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Introduzca su correo'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('Password:')!!}
    {!!Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingresa la Contrasena'])!!}
  </div>
    {!!Form::submit('Ingresar', ['class'=> 'btn btn-primary'])!!}
{!!Form::close()!!} 
</div>
</div>

</div>
@endsection