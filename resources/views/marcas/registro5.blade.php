@extends('layouts.master_registro')
@section('titulo', 'MKOnline: Registre su marca')

@section('content')
	<div class="container center991 marcas">
		<div class="page-wraper">	
		</div>
			<div class="col-lg-6 col-sm-12" style="padding: 3px;  ">
				<h3>¿Que productos y/o servicios estar&iacute;a ofreciendo tu marca?</h3>
				<br>
				<p>Cuando este describiendo los productos y/o servicios, trate de ser especifico, no use terminos como: "incluyendo pero no limitado a", "como", "tales como" y "etc". El uso de estos t&eacute;rminos podr&iacute;a retrazar su solicitud.</p>
				<br>
			</div>
			<div style="width:100%; float:left;">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 marcas" style="padding-left: 0; border-top: 0px">
					<div class="form-group" style="margin-top: 20px;">
						{!!Form::open(['Route' => 'marcas.index'])!!}
							<label>
							{{ Form::textarea('distingue', null, ['size' => '75x5']) }}
							</label>
							<br>
							<br>
							<div class="form-div">
								{!!Form::submit('Siguiente', ['class'=> 'btn btn-primary form-btn'])!!}
								{!!Form::hidden('step', '5')!!}
								{!!Form::close()!!}
							</div>
					</div>
				</div>
			</div>
	</div>
@endsection
