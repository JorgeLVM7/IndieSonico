<div class="form-group">
    {!! Form::label('name_complete','Nombre') !!}
    {!! Form::text('name_complete', null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('email','Correo Electrónico') !!}
    {!! Form::email('email', null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Suscribirse!',['class'=>'btn btn-primary', 'style'=>"cursor: pointer"]) !!}

</div>