@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Enviar mensaje</h1></div>
                <br>
                <form method="POST" action="{{ route('subscribers.store')}}">
                    {{ csrf_field() }}
                    <div class="panel-body">
                        <div class="form-group {{ $errors->has('recipient_id') ? 'has-error' : ''}}">
<<<<<<< HEAD



                            {{--<select name="recipient_id" id="example-onSelectAll" multiple="multiple">--}}
                                {{--@foreach ($subscribers as $subscriber)--}}
                                    {{--<option value="{{ $subscriber->id }}">{{ $subscriber->name_complete }}</option>--}}
                                {{--@endforeach--}}
                            {{--</select>--}}


                                <label for="horario">Correos</label>
                                <select class="form-control select2" name="recipient_id[]" id="" multiple="multiple" style="width: 100%">
                                    @foreach ($subscribers as $subscriber)
                                        <option value="{{ $subscriber->id }}">{{ $subscriber->name_complete }}</option>
                                    @endforeach
                                </select>



=======
                            <select name="recipient_id[]" id="example-onSelectAll" multiple="multiple"  <select class="form-control select2" name="horario[]" id="horario" multiple="multiple" style="width: 100%>
                                @foreach ($subscribers as $subscriber)
                                    <option value="{{ $subscriber->id }}">{{ $subscriber->name_complete }}</option>
                                @endforeach
                            </select>
>>>>>>> a1bb9fe7b80622031cd0c2849605f45adbc9fe68
                            {!! $errors->first('recipient_id', "<span class=help-block>:message</span>") !!}  
                        </div>
                        <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
                            <input name="body" class="form-control" placeholder="Escriba aquí la url" >
                            {!! $errors->first('body', "<span class=help-block>:message</span>") !!}  
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>   

@endsection