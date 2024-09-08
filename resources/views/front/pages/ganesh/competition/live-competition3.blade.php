@extends('front.layout.ganesh-festival-layout')

    @section('custom-head')

    <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="data-user-id" content="{{ Auth::id() }}">
        <meta name="data-category-id" content="3">

        @endsection


    @section('custom-script')   
    <script>
                    $('.best-home-idol').addClass('active-link');
    </script>   

@endsection

@section('content')
<main id="site__main"
    class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] 2xl:ml-[--w-side]  xl:ml-[--w-side-sm] h-[calc(100vh-var(--m-top))] mt-[--m-top] p-6">

    <div class="2xl:max-w-[1220px] max-w-[1065px] mx-auto lg:mt-2 mt-6">
        
@if(!Auth::id())
    <h1>ગણેશ સ્પર્ધામાં ભાગ લેવા, યુસર એકાઉન્ટ બનાવવું ફરજિયાત છે.</h1>
@endif

@include('front.ext.nav-mobile-menu')

    @include('front.pages.ganesh.competition.tab-live-competition')
   
    
            <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 p-1 gap-4">

                @foreach($GaneshCompetitions as $GaneshCompetition)

                <div class="card mb-2"> 
                    
                    <a href="{{route('showHome', $GaneshCompetition->id)}}">
                        <div class="card-media h-40">
                            
                @if($GaneshCompetition->image)
                
                    <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$GaneshCompetition->image}}/sm" alt="">       
                @else
                                
                <img src="{{asset('front/images/product/product-1.jpg') }}" alt="">
                @endif

                            <div class="card-overly"></div>
                        </div>
                    </a>


                    <div class="card-body">
                        <a href="{{route('showHome', $GaneshCompetition->id)}}">
                            <h4 class="card-title"> {{$GaneshCompetition->name}} </h4>
                        </a>

                    @if(getHomeGaneshUser($GaneshCompetition->participant_id))
                        <div class='flex'>
                            <ion-icon name="person"></ion-icon>
                            <p class="text-sm ml-2 mb-2"> {{getHomeGaneshUser($GaneshCompetition->participant_id)->first_name}} {{getHomeGaneshUser($GaneshCompetition->participant_id)->last_name}} </p>
                        </div>
                        @endif

                        <div class="card-text">
                            <div class="card-list-info font-normal mt-1 bg-voting">
                                <div class='font-bold text-danger text-xl'> Total Votes: {{totalVotes($GaneshCompetition->participant_id, 3)}}</div>
                            </div>
                        </div>

                        <form method="post" action="{{route('FestivalCompetitionVoting.store')}}">
                            @csrf
                            <input type="hidden" name="participant_id" value="{{$GaneshCompetition->id}}" />
                            <input type="hidden" name="category_id" value="3" />
                            <input type="hidden" name="votable_id" value="{{$GaneshCompetition->participant->id}}" />

                            <div class="flex gap-2">

                            @if(Auth::check() && $user->status == 'active')
                                @if(isVoted($GaneshCompetition->id, 3))
                                <p class="button text-lg bg-success text-white flex-1 btn-not-allowed">
                                    <ion-icon name="thumbs-up-outline"></ion-icon> Voted
                                </p>
                                
                                @elseif(!isVotedCategory(3) && $user->status == 'active')
                                <button
                                    class="button text-lg bg-primary text-white flex-1">
                                    <ion-icon name="thumbs-up-outline"></ion-icon> Vote Now
                                </button>

                                @else
                                <p class="button text-lg bg-secondary text-white flex-1 btn-voting-disable btn-not-allowed">
                                    <ion-icon name="thumbs-up-outline"></ion-icon> Vote Now
                                </p>
                                @endif
                               

                            @endif

                                <a href="{{route('showHome', $GaneshCompetition->id)}}"
                                    class="button text-lg bg-secondery !w-auto">
                                    <ion-icon name="eye-outline"></ion-icon> View
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                @endforeach

            </div>
    
    </div>


</main>

</div>

@endsection