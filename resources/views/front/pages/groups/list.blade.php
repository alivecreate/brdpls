
@extends('front.layout.ganesh-festival-layout')


@section('content')
<!-- main contents -->
    <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] 2xl:ml-[--w-side]  xl:ml-[--w-side-sm] h-[calc(100vh-var(--m-top))] mt-[--m-top] p-6">

            
<div class="2xl:max-w-[1220px] max-w-[1065px] mx-auto lg:mt-2 mt-6 mt-2">

@include('front.ext.nav-mobile-menu')
<p class='subheading-h3 font-semibold font-semibold mb-0 alert-danger2 text-left'>દરેક મંડળ બરોડા પ્લ્સ પર પોતાના જુના ફોટો અને વિડિયો ફ્રી અપલોડ કરી શકશે.</p>
<p class='subheading-h3 font-semibold font-semibold mb-0 text-left'>ગણેશ સ્પર્ધાના ઈનામ વિતરણની તારીખ ટૂક સમયમાં જાહેર થશે.</p>


    <div class="page-heading">
        <h1 class="page-title"> ગણેશ મંડળો (Ganesh Festival) </h1>
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
        @foreach($groups as $group)
            <div class="card mb-2 group-card">
                <a href="{{ route('ganeshFestivalGroup.show', $group->slug) }}">
                    <div class="card-media h-40">
                        <img 
                        @if(optional($group)->cover)
                            src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$group->cover}}/sm"
                        @else
                            src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/59e4502a-977e-45f7-c153-522a80d42300/lg"
                        @endif
                        alt="{{$group->name}}" class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm">
                        
                        <div class="card-overly"></div>
                    </div>
                </a>
                <div class="card-body">
                    <a href="{{ route('ganeshFestivalGroup.show', $group->slug) }}">
                        <h4 class="card-title group-name">{{ $group->name }}</h4>
                    </a>
                    <div class="card-text">
                        <div class="card-list-info font-normal mt-1">
                            <p>{{ $group->address }}</p>
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