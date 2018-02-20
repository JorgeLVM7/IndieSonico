<div class="form-group">
    {!! Form::label('head','Encabezado del artículo') !!}
    {!! Form::text('head', null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('image','Foto') !!}
    {!! Form::file('path') !!}
</div>


<div class="form-group">
    {!! Form::submit('Guardar',['class'=>'btn btn-primary', 'style'=>"cursor: pointer"]) !!}

</div>

