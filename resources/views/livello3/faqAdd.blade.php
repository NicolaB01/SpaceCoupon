@extends('layout/bodyAdmin')

@section('scripts')
<script src="{{ asset('js/functions.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(function () {
    var actionUrl = "{{ route('admin.store.faq') }}";
    var formId = 'addFaq';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#addFaq").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>

@endsection
@section('content')     
    <div class="admin-section">
    <div class="admin-add-container">
        <div class="header">
            <a href="{{route('admin.faq')}}" class="">
                <i class="fa fa-arrow-left"></i>
                Torna indietro</a>
            <h2>Aggiungi una faq</h2>
        </div>
        {{Form::open(array('route'=>'admin.store.faq', 'id'=>'addFaq', 'class'=>'admin-faq-form'))}}
        {{Form::token()}}

            <div class= "input-div">
                {{ Form::label('domanda','Domanda:')}}
                {{ Form::textArea('domanda', '', [ 'id' => 'domanda']) }}
                    @if ($errors->first('domanda'))
                        <ul class="error-domanda">
                            @foreach($errors->get('domanda') as $message)
                            <li>
                                    {{$message}}
                            </li>   
                                @endforeach
                        </ul>
                            @endif
            </div>
            <div class= "input-div">
                {{ Form::label('risposta','Risposta:')}}
                {{ Form::textArea('risposta', '', [ 'id' => 'risposta']) }}
                    @if ($errors->first('risposta'))
                    <ul>
                        @foreach($errors->get('risposta') as $message)
                        <li>
                                {{$message}}
                        </li>   
                            @endforeach
                    </ul>
                    @endif
            </div>
            <div class="input-container-btn-div">
                {{ Form::submit('Aggiungi',['class'=>'input-container-btn'])}} 
            </div>
        {{Form::close()}}
    </div>
    </div>
@endsection