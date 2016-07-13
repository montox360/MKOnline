@extends ('layouts.admin')
@section('titulo', 'MKOnline: Admin')

@section('content')
<div id="page-wrapper">
<div class="table-responsive">
         <table class="table table-hover">
                                    <thead>
                                       <tr>
                                           <th>Nombre</th>
                                           <th>Email</th>
                                           <th style="text-align: center;"></th>
                                      </tr>
                                   </thead>
                                   <tbody>
                                        @foreach($users as $user)
                                       <tr>
                                           <td>{{$user->name}}</td>
                                           <td>{{$user->email}}</td>
                                           <td style="text-align: center;">{!!link_to_route('usuarios.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary btn-edicion'])!!}</td>
                                       </tr>
                                   @endforeach
                                   </tbody>
                               </table>
                               {!!Form::open(['route'=>'usuarios.create', 'method'=>'GET'])!!}
                                  {!!Form::submit('Crear Usuario', ['class'=> 'btn btn-primary'])!!}
                              {!!Form::close()!!}
                              
</div>
</div>
@endsection