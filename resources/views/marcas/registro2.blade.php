@extends('layouts.master_registro')
@section('titulo', 'MKOnline: Registre su marca')

@section('content')
	<div class="container center991 marcas">
		<div class="page-wraper">	
		</div>
			<div class="col-lg-6 col-sm-12" style="padding: 3px; margin-bottom: 20px; ">
				<h3>Cual es tu marca ?</h3>
				
				<br>
				<div class="form-group" style="margin-top: 20px;">
						{!!Form::open(['Route' => 'marcas.index'])!!}
							<label>
							{!!Form::label('Cual es el negocio o el nombre del producto?')!!}
							<br>
							<br>
							{!!Form::text('marca', null, ['style' => 'width: 380px'])!!}
							</label>
							<br>
							<br>
							<div class="form-div">
							{!!Form::hidden('step', '2')!!}
								{!!Form::submit('Siguiente', ['class'=> 'btn btn-primary form-btn'])!!}
								{!!Form::close()!!}
							</div>
					</div>
				</div>
			</div>
	</div>
@endsection