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
        
    @if(!Auth::id())
        <div class="text-center" style="color: #d70000 !important;
    background: #e0e0e0;font-size: 30px; ">
        <h2><ion-icon name="alert-circle-outline" style="font-size: 60px;color: #b40000;"></ion-icon></h2>
        <h1 class="text-center"   style="font-weight: bold;padding: 10px;color: black !important;">ગણેશ સ્પર્ધામાં ભાગ લેવા અને વોટ કરવા, યુસર એકાઉન્ટ બનાવવું ફરજિયાત છે.</h1>
    <h3 style="color: #d70000 !important;
    background: #e0e0e0;font-size: 30px;">Unverified યુસરના વોટ કાઉન્ટ કરવામાં આવશે નહીં, OTP સાથે વેરિફાઈડ યુસરના વોટજ કાઉન્ટ કરવામાં આવશે.</h3>
    
</div>

@elseif(Auth::check() && getUserData()->status != 'active')

<div class="text-center" style="color: #d70000 !important;
    background: #e0e0e0;font-size: 30px; ">
        <h2><ion-icon name="alert-circle-outline" style="font-size: 60px;color: #b40000;"></ion-icon></h2>
        <h1 class="text-center"   style="font-weight: bold;padding: 10px;color: black !important;">ગણેશ સ્પર્ધામાં ભાગ લેવા અને વોટ કરવા, યુસર એકાઉન્ટ બનાવવું ફરજિયાત છે.</h1>
    <h3 style="color: #d70000 !important;
    background: #e0e0e0;font-size: 30px;">Unverified યુસરના વોટ કાઉન્ટ કરવામાં આવશે નહીં, OTP સાથે વેરિફાઈડ યુસરના વોટજ કાઉન્ટ કરવામાં આવશે.</h3>
    
    @if(!Auth::id() || (getUserData() && getUserData()->status != 'active'))
        <a href="{{route('userVerification',['cid' => getUserData()['cid']])}}">
            <div
                class="button bg-primary text-white flex-1 mb-6">
                <ion-icon name="checkmark" style="font-size: 23px;"></ion-icon>
                Verify User Account
            </div>
        </a>
    @endif
</div>


        @else

            @include('front.ext.nav-mobile-menu')

            @include('front.pages.ganesh.competition.tab-live-competition')

            

    <div class='flex'>
        <label for="" class='font-semibold mr-2'>Search: </label>
        <input type="text" id="searchGroup" class="mb-4 w-full lg:w-1/2" style='align-items: baseline;' placeholder="મંડળને સર્ચ કરો."
        onkeyup="filterGroups()">
        </div>      


<div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 p-1 gap-4" id="groupContainer">

                @foreach($GaneshCompetitions as $GaneshCompetition)

                <div class="card mb-2 group-card">

                    @if(getCompetitionGroup($GaneshCompetition->participant_id))
                    <a
                        href="{{route('ganeshFestivalGroup.show', getCompetitionGroup($GaneshCompetition->participant_id)->slug)}}">
                        <div class="card-media h-40">

                            <img src="{{ optional(getCompetitionGroup($GaneshCompetition->participant_id)->cover)
                                    ? 'https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/' . $GaneshCompetition->participant->cover . '/sm' 
                                    : asset('front/images/product/product-1.jpg') }}" alt="">
                            <h1>No user</h1>
                            <div class="card-overly"></div>
                        </div>
                    </a>
                    @endif


                    @if(getCompetitionGroup($GaneshCompetition->participant_id))
                    <div class="card-body">
                        <a
                            href="{{ route('ganeshFestivalGroup.show', optional(getCompetitionGroup($GaneshCompetition->participant_id))->slug) }}">
                            <h4 class="card-title group-name"> {{$GaneshCompetition->participant->name}} </h4>
                        </a>
                        <div class='flex'>
                            <ion-icon class='text-md live-d-icon' name="location-outline"></ion-icon>
                            <p class="text-sm"> {{$GaneshCompetition->participant->address}}</p>
                        </div>
                        <div class="card-text">
                            <div class="card-list-info font-normal mt-1 bg-voting">

                                <div class='font-bold text-danger text-xl'>Total Votes:
                                    {{totalVotes($GaneshCompetition->participant_id, 1)}}</div>
                            </div>
                        </div>

                        <form method="post" action="{{route('FestivalCompetitionVoting.store')}}">
                            @csrf
                           
                            <div class="flex gap-2">
                                
                            @if(Auth::check() && $user->status == 'active')
                                @if(isVoted($GaneshCompetition->id, 1))
                                <p class="button text-lg bg-success text-white flex-1 btn-not-allowed">
                                    <ion-icon name="thumbs-up-outline"></ion-icon> Voted
                                </p>

                                @elseif(!isVotedCategory(1))
                                <input type="hidden" name="participant_id" value="{{$GaneshCompetition->id}}" />
                            <input type="hidden" name="category_id" value="1" />
                            <input type="hidden" name="votable_id" value="{{$GaneshCompetition->participant->id}}" />


                                <button class="button text-lg bg-primary text-white flex-1">
                                    <ion-icon name="thumbs-up-outline"></ion-icon> Vote Now
                                </button>

                                @else
                                <p class="button text-lg bg-secondary text-white flex-1 btn-voting-disable btn-not-allowed">
                                    <ion-icon name="thumbs-up-outline"></ion-icon> Vote Now
                                </p>
                                @endif
                            @else
                            
                                <p class="button text-lg bg-secondary text-white flex-1 btn-voting-disable btn-not-allowed">
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
                    @endif
                </div>
                @endforeach
            </div>

        @endif

    </div>


</main>

</div>

@endsection