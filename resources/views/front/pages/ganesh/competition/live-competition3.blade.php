@extends('front.layout.ganesh-festival-layout')

    @section('custom-head')

    <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="data-user-id" content="{{ Auth::id() }}">
        <meta name="data-category-id" content="2">

        @endsection


    @section('custom-script')   
    <script>
                    $('.best-decoration').addClass('active-link');
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
                    
                    <a href="{{route('ganeshFestivalGroup.show', $GaneshCompetition->id)}}">
                        <div class="card-media h-40">

                 
                @if($GaneshCompetition->image)
                
                    <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$GaneshCompetition->image}}/md" alt="">       
                @else
                    <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/59e4502a-977e-45f7-c153-522a80d42300/md" alt="">       
                @endif



                            <div class="card-overly"></div>
                        </div>
                    </a>

                    
                    <div class="card-body">
                            <a
                                href="{{ route('ganeshFestivalGroup.show', $GaneshCompetition->id) }}">
                                <h4 class="card-title group-name"> {{$GaneshCompetition->id}} {{$GaneshCompetition->name}} </h4>
                            </a>
                            <div class='flex'>
                                <ion-icon class='text-md live-d-icon' name="location-outline"></ion-icon>
                                <p class="text-sm"> {{$GaneshCompetition->participant_first_name}}</p>
                                <p class="text-sm"> {{$GaneshCompetition->participant_last_name}}</p>
                            </div>
                        
                            @if(getUserData()->phone=='9137634193')
                            <div class="card-text">
                                <div class="card-list-info font-normal mt-1 bg-voting">
                                    <div class='font-bold text-danger text-xl'>Total Votes:
                                        {{$GaneshCompetition->votes_count}}</div>
                                </div>
                            </div>
                            @endif
                            <form method="post" action="{{route('FestivalCompetitionVoting.store')}}">
                                @csrf
                            
                                <div class="flex gap-2">
                                    
                            @if(checkCompetitionSchedule()->status == 'live')
                                @if(Auth::check() && $user->status == 'active')
                                    @if(isVoted($GaneshCompetition->id, 2))
                                    <p class="button text-lg bg-success text-white flex-1 btn-not-allowed">
                                        <ion-icon name="thumbs-up-outline"></ion-icon> Voted
                                    </p>

                                    @elseif(!isVotedCategory(2))
                                    <input type="hidden" name="participant_id" value="{{$GaneshCompetition->id}}" />
                                    <input type="hidden" name="category_id" value="2" />
                                    <input type="hidden" name="votable_id" value="{{$GaneshCompetition->id}}" />

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
                                @endif

                                    <a href="{{route('ganeshFestivalGroup.show', $GaneshCompetition->id)}}"
                                    class="button text-lg  @if(checkCompetitionSchedule()->status == 'live')bg-secondery !w-auto @else text-white bg-primary w-full @endif">
                                    <ion-icon name="eye-outline"></ion-icon> View
                                    </a>
                                </div>
                            </form>
                        </div>

                </div>
                @endforeach

            </div>
            
@endif
    
    </div>


</main>

</div>

@endsection