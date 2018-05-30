<div class="form-group">
    {!! Form::label('name','Nombre del video') !!}
    {!! Form::text('name', null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('video','Video') !!}
    {!! Form::file('path') !!}
</div>
<div class="form-group">
    {!! Form::label('category','Categoría ') !!}
    {!! Form::select('category',['Música'=>'Música',
                                'Moviendo el Indie'=>'Moviendo el Indie',
                                'Sesiones IS' => 'Sesiones IS',
                                'Entretenimiento'=>'Entretenimiento',
                                'Inicio'=>'Inicio']
                                , null,['class'=>'form-control']
) !!}

</div>


{{--<div class="form-group">--}}
    {{--{!! Form::label('image_2','Foto 2') !!}--}}
    {{--{!! Form::file('path_2') !!}--}}
{{--</div>--}}


<div class="form-group">
    {!! Form::submit('Guardar',['class'=>'btn btn-primary', 'style'=>"cursor: pointer"]) !!}

</div>

