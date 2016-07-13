@extends ('layouts.admin')
@section('titulo', 'MKOnline: Admin')

@section('content')
<div id="page-wrapper">
<div class="row">
    <div class="col-lg-12">
       <h1 class="page-header">
              Crear Nueva Categoria
        </h1>
       <ol class="breadcrumb">
           <li>
              <i class="fa fa-dashboard"></i>  <a href="/categorias">Categorias</a>
            </li>
           <li class="active">
              <i class="fa fa-edit"></i> Crear Categoria
            </li>
        </ol>
     </div>
</div>
<div class="container-fluid">
<div class="col-lg-6">
{!!Form::open(['route'=>'categorias.store', 'method'=>'POST'])!!}
    <div class="form-group">
        {!!Form::label('Nombre')!!}
        {!!Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Introduzca el nombre'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('Descripcion')!!}
        {!!Form::textarea('descripcion', null, ['class' => 'form-control', 'rows'=>'3', 'placeholder'=>'Introduzca la descripcion de la categoria'])!!}
    </div>
    {!!Form::submit('Crear', ['class'=> 'btn btn-primary'])!!}
{!!Form::close()!!}    
</div>
</div>

</div>
@endsection