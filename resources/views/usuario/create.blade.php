@extends ('layouts.admin')
@section('titulo', 'MKOnline: Admin')

@section('content')
<div id="page-wrapper">
<div class="row">
    <div class="col-lg-12">
       <h1 class="page-header">
              Crear Nuevo Usuario
        </h1>
       <ol class="breadcrumb">
           <li>
              <i class="glyphicon glyphicon-user"></i>  <a href="/usuarios">Usuarios</a>
            </li>
           <li class="active">
              <i class="fa fa-edit"></i> Crear Usuario
            </li>
        </ol>
     </div>
</div>
<div class="container-fluid">
<div class="col-lg-6">
{!!Form::open(['route'=>'usuarios.store', 'method'=>'POST'])!!}
    <div class="form-group">
        {!!Form::label('name')!!}
        {!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Introduzca el nombre del usuario'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('email')!!}
        {!!Form::text('email', null, ['class' => 'form-control', 'placeholder'=>'Introduzca su direccion de email'])!!}
    </div>
      <div class="form-group">
        {!!Form::label('password')!!}
        {!!Form::password('password', ['class' => 'form-control', 'placeholder'=>'Introduzca su Password'])!!}
    </div>
    {!!Form::submit('Crear', ['class'=> 'btn btn-primary'])!!}
{!!Form::close()!!}    
</div>
</div>

</div>
@endsection