@extends ('layouts.admin')
@section('titulo', 'MKOnline: Editar Usuarios')

@section('content')
<div id="page-wrapper">
<div class="row">
    <div class="col-lg-12">
       <h1 class="page-header">
              Editar usuario
        </h1>
       <ol class="breadcrumb">
           <li>
              <i class="fa fa-user"></i>  <a href="usuarios">Usuarios</a>
            </li>
           <li class="active">
              <i class="fa fa-edit"></i> Editar Usuario
            </li>
        </ol>
     </div>
</div>
<div class="container-fluid">
<div class="col-lg-6">
{!!Form::model($user, ['route'=>['usuarios.update', $user->id], 'method'=>'PUT'])!!}
  @include('usuario.forms.usr')
    {!!Form::submit('Editar', ['class'=> 'btn btn-primary'])!!}
{!!Form::close()!!} 

{!!Form::open(['route'=>['usuarios.destroy', $user->id], 'method'=>'DELETE'])!!}
  {!!Form::submit('Eliminar', ['class' => 'btn btn-danger'])!!}
{!!Form::close()!!} 
</div>
</div>

</div>
@endsection