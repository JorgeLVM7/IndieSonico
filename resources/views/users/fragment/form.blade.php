<div class="row">
    <div class="col-6">
        <div class="form-group">
            {!! Form::label('user','Usuario') !!}
            {!! Form::text('user', null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name', null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {!! Form::label('last_name','Apellido') !!}
            {!! Form::text('last_name', null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {!! Form::label('level','Nivel ') !!}
            {!! Form::select('level',['Administrador'=>'Administrador',
                                        'Editor'=>'Editor']
                                        , null,['class'=>'form-control']
        ) !!}

        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {!! Form::label('email','Correo') !!}
            {!! Form::email('email', null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {!! Form::label('password','Contraseña') !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {!! Form::label('password','Confirmar Contraseña') !!}
            {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            {!! Form::submit('Guardar',['class'=>'btn btn-primary', 'style'=>"cursor: pointer"]) !!}

        </div>
    </div>
</div>
