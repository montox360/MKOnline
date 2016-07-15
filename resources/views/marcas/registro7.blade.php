@extends('layouts.master_registro')
@section('titulo', 'MKOnline: Registre su marca')

@section('content')
	<div class="container center991 marcas">
		<div class="page-wraper">	
		</div>
			<div class="col-lg-6 col-sm-12" style="padding: 3px;  ">
				<h3>¿Qu&eacute; tipo de entidad ser&aacute; el due&ntilde;o de la marca?</h3>
			</div>
			<div style="width:100%; float:left;">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 marcas" style="padding-left: 0; border-top: 0px">
					<div class="form-group" style="margin-top:20px">
						{!!Form::open(['Route' => 'marcas.index'])!!}
							{!!Form::label('owner', 'D&iacute;ganos acerca del propietario de la marca:')!!}
							<br>
							<br>
							{!!Form::checkbox('owner')!!}
							{!!Form::label('owner', 'Una sola persona', array('style' => 'font-weight: normal'))!!}
							<br>
							<br>
							{!!Form::checkbox('owner')!!}
							{!!Form::label('owner', 'M&uacute;ltiples personas', array('style' => 'font-weight: normal'))!!}
							<br>
							<br>
							{!!Form::checkbox('owner')!!}
							{!!Form::label('owner', 'Una corporaci&oacute;n', array('style' => 'font-weight: normal'))!!}
							<br>
							<br>
							{!!Form::checkbox('owner')!!}
							{!!Form::label('owner', 'Una Sociedad', array('style' => 'font-weight: normal'))!!}
							<br>
							<div class="form-div" style="margin-top: 20px">
								{!!Form::submit('Siguiente', ['class'=> 'btn btn-primary form-btn'])!!}
								{!!Form::hidden('step', '6')!!}
								{!!Form::close()!!}
							</div>
					</div>
				</div>
			</div>
	</div>
@endsection