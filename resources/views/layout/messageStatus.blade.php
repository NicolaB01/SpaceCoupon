@if(session()->has('status'))
    <div class="message-status">
        <!--esito positivo-->
        <div class="message-positive" id="flash-message">
            <p>{{session()->get('status')}}</p>
            <i class="fa-regular fa-square-check"></i>
        </div>
    </div>
@endif