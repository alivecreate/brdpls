
@extends('front.layout.ganesh-festival-layout')


@section('content')
<!-- main contents -->
    <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] 2xl:ml-[--w-side]  xl:ml-[--w-side-sm] h-[calc(100vh-var(--m-top))] mt-[--m-top] p-6">

            
<div class="2xl:max-w-[1220px] max-w-[1065px] mx-auto lg:mt-2 mt-6 mt-2">

@include('front.ext.nav-mobile-menu')
<!-- <p class='subheading-h3 font-semibold font-semibold mb-0'>Note: ગણેશ સ્પર્ધા તા. 07-09-2024 બપોરે 2 વાગ્યેથી શરુ થશે.</p> -->
               
<img class="mb-4 ganesh-registration-banner-responsive lg:hidden" src="{{asset('front/images/web')}}/ganesh-competition-banner1.webp"
 alt="Baroda plus ganesh competition - Vadodara">

<img class="mb-4 ganesh-registration-banner-responsive hidden lg:block" src="{{asset('front/images/web')}}/ganpati-banner-website-lg.webp"
 alt="Baroda plus ganesh competition - Vadodara">

@if(!isGroupExists() && !isHomeCompetitionExists())
                            <a href="{{route('ganeshFestivalCompetition.create')}}"
                                class="custom-nav-menu p-3 px-4 rounded-lg bg-sky-100/60 text-sky-600 dark:text-white dark:bg-dark4 mb-4">
                                <ion-icon name="trophy" class="text-2xl drop-shadow-md md hydrated mr-2" role="img"
                                    aria-label="trophy"></ion-icon>
                                <div class="text-sm font-medium text-capitalize font-semibold"> ગણેશ સ્પર્ધા રજિસ્ટ્રેશન
                                </div>
                            </a>
    @endif
    <div class="page-heading">
        <h1 class="page-title"> ગણેશ મંડળો (Ganesh Festival Pages) </h1>
        <nav class="nav__underline">
            <ul class="group" uk-switcher="connect: #group-tabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium"> 
                <li> <a href="#" >Recent</a> </li>
            </ul> 
        </nav>
    </div>

    <div class='flex'>
        <label for="" class='font-semibold mr-2'>Search: </label>
        <input type="text" id="searchGroup" class="mb-4 w-full lg:w-1/2" style='align-items: baseline;' placeholder="મંડળને સર્ચ કરો."
        onkeyup="filterGroups()">
        </div>      

    
    <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 p-1 gap-4" id="groupContainer">
        @foreach($homeGaneshList as $homeGanesh)
            <div class="card mb-2 group-card">
                <a href="{{ route('showHome', $homeGanesh->id) }}">
                    <div class="card-media h-40">
                        <img 
                            
                        @if($homeGanesh->image)
                            <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$homeGanesh->image}}/md" alt="">       
                        @else
                            <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/59e4502a-977e-45f7-c153-522a80d42300/md" alt="">       
                        @endif


                        <div class="card-overly"></div>
                    </div>
                </a>
                <div class="card-body">
                    <a href="{{ route('showHome', $homeGanesh->id) }}">
                        <h4 class="card-title group-name">{{ $homeGanesh->name }}</h4>
                    </a>
                    <div class="card-text">
                        <div class="card-list-info font-normal mt-1">
                            <p>{{ $homeGanesh->address }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>  
</div>


</main>

</div>

@endsection