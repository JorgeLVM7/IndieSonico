<div class="form-group">
    {!! Form::label('head','Encabezado del artículo') !!}
    {!! Form::text('head', null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('image','Foto') !!}
    {!! Form::file('path') !!}
</div>

<div class="form-group">
    {!! Form::label('description','Descripción ') !!}
    {!! Form::text('description', null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('video','Link de Video') !!}
    {!! Form::text('video', null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body','Cuerpo ') !!}
    {!! Form::textarea('body', null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    <label for="">Autor</label>
    <h5>{{ Auth::user()->name}} {{ Auth::user()->last_name}} </h5>
</div>

<div class="form-group">
    {!! Form::label('category','Categoría ') !!}
    {!! Form::select('category',['Música'=>'Música',
                                'Cine'=>'Cine',
                                'Arte'=>'Arte',
                                'Deportes'=>'Deportes',
                                'Reseñas'=>'Reseñas']
                                , null,['class'=>'form-control']
) !!}

</div>

<div class="form-group">
    {!! Form::submit('Guardar',['class'=>'btn btn-primary', 'style'=>"cursor: pointer"]) !!}

</div>

