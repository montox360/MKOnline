@extends('layouts.master_registro')
@section('titulo', 'MKOnline: Registre su marca')

@section('content')
	<div class="container center991 marcas">
		<div class="page-wraper">	
		</div>
			<div class="col-lg-6 col-sm-12" style="padding: 3px; margin-bottom: 20px; ">
				<h3>Inicia el registro de tu marca</h3>
				<p>MKOnline presenta miles de marcas anualmente. Las preguntas mas frecuentes de nuestros clientes antes de empezar el proceso son las siguientes:</p>
				<br>
				
				<strong>¿Cuanto dura llenar esta solicitud?</strong>
				<br>
				<p>
					Estas son preguntas simples que nos ayudar&aacute;n a realizar el tr&aacute;mite mucho mas r&aacute;pido. La mayor&iacute;a de las personas terminan este cuestionario en menos de 15 minutos.
				</p>
				<br>
				<strong>¿Qu&eacute; sucede al terminar esta solicitud?</strong>
				<br>
				<p>
					Una vez finalizado el cuestionario, procederemos inmediatamente a hacer una b&uacute;squeda de disponibilidad de su marca y consignaremos su solicitud ante la Superintendencia de Industria y Comercio (SIC). 
				</p>
			</div>
			<br>
			<br>
			<div style="width:100%; float:left;">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 marcas">
					<h3 class="txt-pr">¿Qu&eacute; tipo de marca desea registrar?</h3>
					<div class="form-group" style="margin-top: 20px;">
						{!!Form::open(['Route' => 'marcas.index'])!!}
							<label>
							{!!Form::checkbox('tipo', '1')!!}
							{!!Form::label('Negocio o nombre de producto -- Combinacion de palabras letras o numeros')!!}
							</label>
							<br>
							<label>
							{!!Form::checkbox('tipo', '2')!!}
							{!!Form::label('Logo -- un dise&ntilde;o o gr&aacute;fico que tambien puede contener palabras')!!}
							</label>
							<br>
							<label>
							{!!Form::checkbox('tipo', '3')!!}
							{!!Form::label('Slogan -- una frase corta o descripci&oacute;n')!!}
							{!!Form::hidden('step', '1')!!}
							</label>
							<br>
							<br>
							<div class="form-div">
								{!!Form::submit('Siguiente', ['class'=> 'btn btn-primary form-btn'])!!}
								{!!Form::close()!!}
							</div>
					</div>
				</div>
			</div>
	</div>
@endsection