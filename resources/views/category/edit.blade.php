@extends ('layouts.admin')
@section('titulo', 'MKOnline: Editar')

@section('content')
<div id="page-wrapper">
<div class="row">
    <div class="col-lg-12">
       <h1 class="page-header">
              Editar Categoria
        </h1>
       <ol class="breadcrumb">
           <li>
              <i class="fa fa-dashboard"></i>  <a href="/categorias">Categorias</a>
            </li>
           <li class="active">
              <i class="fa fa-edit"></i> Editar Categoria
            </li>
        </ol>
     </div>
</div>
<div class="container-fluid">
<div class="col-lg-6">
{!!Form::model($categoria, ['route'=>['categorias.update', $categoria->id], 'method'=>'PUT'])!!}
  @include('category.forms.cat')
    {!!Form::submit('Editar', ['class'=> 'btn btn-primary'])!!}
{!!Form::close()!!}   

{!!Form::open(['route'=>['categorias.destroy', $categoria->id], 'method'=>'DELETE'])!!}
  {!!Form::submit('Eliminar', ['class' => 'btn btn-danger'])!!}
{!!Form::close()!!}  
</div>
</div>

</div>
@endsection