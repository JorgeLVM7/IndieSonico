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
    {!! Form::label('body','Cuerpo ') !!}
    {!! Form::textarea('body', null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('video','Link de Video') !!}
    {!! Form::text('video', null,['class'=>'form-control']) !!}
</div>



<div class="form-group">
    {!! Form::label('head_2','Encabezado 2') !!}
    {!! Form::text('head_2', null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('image_2','Foto 2') !!}
    {!! Form::file('path_2') !!}
</div>

<div class="form-group">
    {!! Form::label('description_2','Descripción 2') !!}
    {!! Form::text('description_2', null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('body_2','Cuerpo 2 ') !!}
    {!! Form::textarea('body_2', null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('video_2','Link de Video 2') !!}
    {!! Form::text('video_2', null,['class'=>'form-control']) !!}
</div>




<div class="form-group">
    <label for="">Autor</label>
    <h5>{{ Auth::user()->name}} {{ Auth::user()->last_name}} </h5>
</div>

<div class="form-group">
    {!! Form::label('category','Categoría ') !!}
    {!! Form::select('category',['Música'=>'Música',
                                'Moviendo el Indie'=>'Moviendo el Indie',
                                'Sesiones IS' => 'Sesiones IS',
                                'Entretenimiento'=>'Entretenimiento']
                                , null,['class'=>'form-control']
) !!}

</div>

{{ Form::hidden('user_id',auth()->user()->id ) }}


<div class="form-group">
    {!! Form::label('approve','Estado... ') !!}
    {!! Form::select('approve',['Aprobado'=>'Aprobado',
                                'Rechazado'=>'Rechazado',
                                'No Aprobado'=>'No Aprobado']
                                , null,['class'=>'form-control']
) !!}

</div>
<div class="form-group">
    {!! Form::submit('Guardar',['class'=>'btn btn-primary', 'style'=>"cursor: pointer"]) !!}

</div>

