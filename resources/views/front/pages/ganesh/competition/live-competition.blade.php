@extends('front.layout.ganesh-festival-layout')

    @section('custom-head')

    <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="data-user-id" content="{{ Auth::id() }}">
        <meta name="data-category-id" content="1">

        @endsection


    @section('custom-script')   
    <script>
                    $('.best-idol').addClass('active-link');
    </script>   

@endsection

@section('content')
<main id="site__main"
    class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] 2xl:ml-[--w-side]  xl:ml-[--w-side-sm] h-[calc(100vh-var(--m-top))] mt-[--m-top] p-6">

    <div class="2xl:max-w-[1220px] max-w-[1065px] mx-auto lg:mt-2 mt-6">
        
@if(Auth::id())
    <h1>ગણેશ સ્પર્ધામાં ભાગ લેવા, યુસર એકાઉન્ટ બનાવવું ફરજિયાત છે.</h1>
@endif

@if($user->status == 'pending')
    <h1>Hello {{$user->status}}, તમારું યુસર એકાઉન્ટ વેરિફાઈડ નથી, વોટિંગ માટે અકાઉંટ વેરિફિકેસન ફરજિયાત છે. {{$user->status}}</h1>
@endif

@include('front.ext.nav-mobile-menu')

    @include('front.pages.ganesh.competition.tab-live-competition')
   
        <div class="" id='voting-list'
            data-user-id="{{Auth::id() ? Auth::id() : 0}}"
            data-category-id="1"
            ></div>
        </div>
    </div>


</main>

</div>

@endsection