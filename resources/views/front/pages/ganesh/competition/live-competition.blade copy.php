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
    <h1>ગણેશ સ્પર્ધામાં ભાગ લેવા અને વોટ કરવા, યુસર એકાઉન્ટ બનાવવું ફરજિયાત છે.</h1>
@endif

@if($user->status == 'pending')
    <h1>Hello {{$user->status}}, તમારું યુસર એકાઉન્ટ વેરિફાઈડ નથી, વોટિંગ માટે અકાઉંટ વેરિફિકેસન ફરજિયાત છે. {{$user->status}}</h1>
@endif

@include('front.ext.nav-mobile-menu')

    @include('front.pages.ganesh.competition.tab-live-competition')
   
    
            <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 p-1 gap-4">

                @foreach($GaneshCompetitions as $GaneshCompetition)

                <div class="card mb-2"> 
                    <a href="{{route('ganeshFestivalGroup.show', $GaneshCompetition->participant->slug)}}">
                        <div class="card-media h-40">

                            <img src="{{ optional($GaneshCompetition->participant)->cover 
                                ? 'https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/' . $GaneshCompetition->participant->cover . '/sm' 
                                : asset('front/images/product/product-1.jpg') }}" alt="">

                            <div class="card-overly"></div>
                        </div>
                    </a>


                    <div class="card-body">
                        <a href="{{route('ganeshFestivalGroup.show', $GaneshCompetition->participant->slug)}}">
                            <h4 class="card-title"> {{$GaneshCompetition->participant->name}} </h4>
                        </a>
                        <div class='flex'>
                            <ion-icon class='text-md live-d-icon' name="location-outline"></ion-icon>
                            <p class="text-sm"> {{$GaneshCompetition->participant->address}}</p>
                        </div>
                        <div class="card-text">
                            <div class="card-list-info font-normal mt-1 bg-voting">

                                <div class='font-bold text-danger text-xl'>Total Votes: </div>
                                <a class='font-bold text-danger text-xl'
                                    href="#">{{$GaneshCompetition->countVote($GaneshCompetition->id, 2)}} </a>
                            </div>

                        </div>

                        <form method="post" action="{{route('FestivalCompetitionVoting.store')}}">
                            @csrf
                            <input type="hidden" name="participant_id" value="{{$GaneshCompetition->id}}" />
                            <input type="hidden" name="category_id" value="1" />
                            <input type="hidden" name="votable_id" value="{{$GaneshCompetition->participant->id}}" />


                            <div class="flex gap-2">

                                @if(isVoted($GaneshCompetition->id, 2) && isVoted($GaneshCompetition->id, 2)->votable_id
                                == $GaneshCompetition->participant->id)
                                <p class="button text-lg bg-success text-white flex-1 btn-not-allowed">
                                    <ion-icon name="thumbs-up-outline"></ion-icon> Voted
                                </p>
                                @elseif(isVoted($GaneshCompetition->id, 1))
                                <button
                                    class="button text-lg bg-primary text-white flex-1 btn-voting-disable btn-not-allowed">
                                    <ion-icon name="thumbs-up-outline"></ion-icon> Vote Now
                                </button>
                                @else
                                <p class="button text-lg bg-primary text-white flex-1 btn-voting-disable" disabled>
                                    <ion-icon name="thumbs-up-outline"></ion-icon> Vote Now
                                </p>
                                @endif

                                <a href="{{route('ganeshFestivalGroup.show', $GaneshCompetition->participant->slug)}}"
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