<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name', null,['class'=>'form-control']) !!}
        </div>

    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('email','Correo') !!}
            {!! Form::text('email', null,['class'=>'form-control']) !!}
        </div>

    </div>
    <div class="col-12">
        <div class="form-group">
            {!! Form::label('mensaje','Mensaje') !!}
            {!! Form::textarea('mensaje', null,['class'=>'form-control', 'rows'=>'10']) !!}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {!! Form::submit('Enviar',['class'=>'btn btn-primary', 'style'=>"cursor: pointer"]) !!}

        </div>
    </div>
</div>
