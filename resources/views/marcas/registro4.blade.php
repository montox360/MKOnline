@extends('layouts.master_registro')
@section('titulo', 'MKOnline: Registre su marca')

@section('content')
	<div class="container center991 marcas">
		<div class="page-wraper">	
		</div>
			<div class="col-lg-6 col-sm-12" style="padding: 3px; margin-bottom: 20px; ">
				<h3>¿Est&aacute;s usando tu marca actualmente?</h3>
				<br>
				<p>Usted puede solicitar el registro de su marca incluso aunque no haya empezado a usarla para vender productos o servicios. Sin embargo, si transcurren 3 a&ntilde;os ininterrumpidos, desde el momento del registo, en los cuales la marca no ha sido utilizada, una acci&oacute;n de terceros podr&iacute;a provocar la cancelaci&oacute;n de la marca.</p>
				<br>
			</div>
			<div style="width:100%; float:left;">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 marcas">
					<div class="form-group" style="margin-top: 20px;">
						{!!Form::open(['Route' => 'marcas.index'])!!}
							<label>
							{!!Form::checkbox('uso', '1')!!}
							{!!Form::label('Si, estoy usando mi marca actualmente para vender productos o servicios')!!}
							</label>
							<br>
							<label>
							{!!Form::checkbox('uso', '2')!!}
							{!!Form::label('No, pero tengo intenciones de usarla para vender productos o servicios en el futuro')!!}
							</label>
							<br>
							<br>
							<div class="form-div">
								{!!Form::submit('Siguiente', ['class'=> 'btn btn-primary form-btn'])!!}
								{!!Form::hidden('step', '4')!!}
								{!!Form::close()!!}
							</div>
					</div>
				</div>
			</div>
	</div>
@endsection