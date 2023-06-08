@extends('layout/body')

@section('content')
   <section class="faq-section">
        <h2 class="faq-title">FAQs</h2>
        @if($faqs->total() == 0)
            @include('layout/error', ['tipoErrore' => 9])
        @else
            @foreach($faqs as $faq)
            <div class="faq-div">
                <span class="borderLine"></span>
                <div class="question">
                    <h3>{{$faq->domanda}}</h3>

                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/> 
                    </svg>

                </div>
                <div class="answer">
                    <p>{{$faq->risposta}}</p>
                </div>
            </div>
            @endforeach
        @endif
    </section>
    @include('pagination.paginator', ['paginator' => $faqs])
@endsection