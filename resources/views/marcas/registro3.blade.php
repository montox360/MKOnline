@extends('layouts.master_registro')
@section('titulo', 'MKOnline: Registre su marca')

@section('content')
	<div class="container center991 marcas">
		<div class="page-wraper">	
		</div>
			<div class="col-lg-6 col-sm-12" style="padding: 3px; margin-bottom: 20px;">
				<h3>Qu&eacute; busca el SIC en una marca?</h3>
				<br>
				<p>El SIC examina y aprueba las solicitudes de marcas para registros nacioanles. Sin embargo, no todas las solicitudes de marcas son aceptadas y aprobadas. A continuaci&oacute;n encontrar&aacute; los motivos mas comunes por los que el SIC niega algunas solicitudes.</p>
				<br>
				<ul class="marked-list">
					<li><a href="#">La marca es muy similar a otra marca que ya se encuentra registrada ante el SIC. Ej: xxx</a></li>
					<br>
					<li><a href="#">La marca es gen&eacute;rica o solo describe el producto o servicio. Ej: "Entregamos su comida." Para servicios de entrega de comida.</a></li>
					<br>
					<li><a href="#">La marca describe falsamente el producto o servicio. Ej: "Oro de verdad" para joyeria de fantas&iacute;a</a></li>
					<br>
					<li><a href="#">La marca solo describe una locaci&oacute;n geogr&aacute;fica como fuente del producto o servicio. Ej: "Pizzas de Bogot&aacute;" para venta de pizzas en Bogot&aacute;.</a></li>
				</ul>
				<br>
				<p>
					Despu&eacute;s de leer lo que busca el SIC en una marca, incluyendo los motivos b&aacute;sicos por los que rechazan solicitudes, haga click en el bot&oacute;n <strong>SIGUIENTE</strong>
				</p>
			</div>
			<br>
			<br>
			<div style="width:100%; float:left;">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 marcas">
					<div class="form-group" style="margin-top: 20px;">
						{!!Form::open(['Route' => 'marcas.index'])!!}
							<div class="">
								{!!Form::submit('Siguiente', ['class'=> 'btn btn-primary form-btn'])!!}
								{!!Form::hidden('step', '3')!!}
								{!!Form::close()!!}
							</div>
					</div>
				</div>
			</div>
	</div>
@endsection