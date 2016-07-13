@extends ('layouts.admin')
@section('titulo', 'MKOnline: Admin')

@section('content')
<div id="page-wrapper">
<div class="table-responsive">
         <table class="table table-hover">
                                    <thead>
                                       <tr>
                                           <th>Nombre</th>
                                           <th>Descripcion</th>
                                           <th style="text-align: center;"></th>
                                      </tr>
                                   </thead>
                                   <tbody>
                                        @foreach($categories as $category)
                                       <tr>
                                           <td>{{$category->nombre}}</td>
                                           <td>{{$category->descripcion}}</td>
                                           <td style="text-align: center;">{!!link_to_route('categorias.edit', $title = 'Editar', $parameters = $category->id, $attributes = ['class'=>'btn btn-primary btn-edicion'])!!}</td>
                                       </tr>
                                   @endforeach
                                   </tbody>
                               </table>
                               {!!Form::open(['route'=>'categorias.create', 'method'=>'GET'])!!}
                                   {!!Form::submit('Crear Categoria', ['class'=> 'btn btn-primary'])!!}
                              {!!Form::close()!!}
</div>
</div>
@endsection