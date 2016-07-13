 <div class="form-group">
    {!!Form::label('Nombre')!!}
    {!!Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Introduzca el nombre'])!!}
</div>
<div class="form-group">
    {!!Form::label('Descripcion')!!}
    {!!Form::textarea('descripcion', null, ['class' => 'form-control', 'rows'=>'3', 'placeholder'=>'Introduzca la descripcion de la categoria'])!!}
</div>