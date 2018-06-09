<div class="form-group">
    {!! Form::label('title','Encabezado del Popup') !!}
    {!! Form::text('title', null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('description','Descripción ') !!}
    {!! Form::text('description', null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('image','Foto') !!}
    {!! Form::file('path') !!}
</div>
{{--<div class="form-group">--}}
    {{--{!! Form::label('video','Video') !!}--}}
    {{--{!! Form::text('video', null,['class'=>'form-control']) !!}--}}
{{--</div>--}}

<div class="form-group">
    {!! Form::label('comment','Comentario') !!}
    {!! Form::textarea('comment', null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('category','Categoría ') !!}
    {!! Form::select('category',['Home'=>'Home',
                                'Música'=>'Música',
                                'Moviendo el Indie'=>'Moviendo el Indie',
                                'Sesiones IS' => 'Sesiones IS',
                                'Entretenimiento'=>'Entretenimiento']
                                , null,['class'=>'form-control']
) !!}

</div>

<div class="form-group">
    {!! Form::label('bonus','Bonus') !!}
    {!! Form::textarea('bonus', null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::submit('Guardar',['class'=>'btn btn-primary', 'style'=>"cursor: pointer"]) !!}

</div>

