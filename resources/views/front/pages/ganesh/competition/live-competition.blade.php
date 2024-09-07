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
        <h1>ગણેશ સ્પર્ધામાં ભાગ લેવા, યુસર એકાઉન્ટ બનાવવું ફરજિયાત છે.</h1>
        @endif

        @include('front.ext.nav-mobile-menu')

        @include('front.pages.ganesh.competition.tab-live-competition')


        <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 p-1 gap-4">

            @foreach($GaneshCompetitions as $GaneshCompetition)

            <div class="card mb-2">

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
                        <h4 class="card-title"> {{$GaneshCompetition->participant->name}} </h4>
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
                        <input type="hidden" name="participant_id" value="{{$GaneshCompetition->id}}" />
                        <input type="hidden" name="category_id" value="1" />
                        <input type="hidden" name="votable_id" value="{{$GaneshCompetition->participant->id}}" />

                        <div class="flex gap-2">

                            @if(Auth::check())
                            @if(isVoted($GaneshCompetition->id, 1))
                            <p class="button text-lg bg-success text-white flex-1 btn-not-allowed">
                                <ion-icon name="thumbs-up-outline"></ion-icon> Voted
                            </p>

                            @elseif(!isVotedCategory(1))
                            <button class="button text-lg bg-primary text-white flex-1">
                                <ion-icon name="thumbs-up-outline"></ion-icon> Vote Now
                            </button>

                            @else
                            <p class="button text-lg bg-secondary text-white flex-1 btn-voting-disable btn-not-allowed">
                                <ion-icon name="thumbs-up-outline"></ion-icon> Vote Now
                            </p>

                            @endif


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

    </div>


</main>

</div>

@endsection