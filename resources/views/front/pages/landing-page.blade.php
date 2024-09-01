@extends('front.layout.landing-layout')

@section('content')

        <!-- main contents -->
    <main id="site__main" class="py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

                
    <div class="w-full md:w-auto md:px-20">

    
    
    <div class="sm:mt-6 mt-3 flex items-center justify-between border-t pt-3 dark:border-slate-800">
                                <div>
                                    <h2 class="heading-h2">Barodaplus ગણેશ સ્પર્ધા આપનું હાર્દિક સ્વાગત કરે છે. </h2>
                                    <p class="font-normal text-sm text-gray-500 leading-6"> Find a group by browsing top categories. </p>
                                </div>
                                <a href="#" class="text-blue-500 sm:block hidden text-sm"> See all </a>
                            </div>

<div class="relative" tabindex="-1" uk-slider="auto play: true;finite: true">

<div class="uk-slider-container pb-1">

    <ul class="flex w-[calc(100%+10px)]" uk-scrollspy="target: > li; cls: uk-animation-scale-up; delay: 20;repeat:true">

    <li class="lg:w-1/3 md:w-1/3 sm:w-1/3 w-1/1 pr-3">
            <div class="card uk-transition-toggle">
                <a href="{{route('ganeshFestivalGroup.create')}}">
                    <div class="px-6">
                        <img class='w-full' src="{{asset('front/images')}}/web/group-registration.png" alt="">
                        <div class="card-overly"></div> 
                    </div> 
                </a>
                <div class="card-body flex justify-between">
                    <div class="flex-1">
                        <a href="{{route('product-view-1')}}"><p class="card-text text-black font-medium line-clamp-1"> Group Registration </p> </a>
                    </div>
                </div> 
            </div>
        </li> 
   
        <li class="lg:w-1/3 md:w-1/3 sm:w-1/3 w-1/1 pr-3">
            <div class="card uk-transition-toggle">
                <a href="{{route('ganeshFestivalGroup.create')}}">
                    <div class="px-6">
                        <img class='w-full' src="{{asset('front/images')}}/web/ganesh-competition.png" alt="">
                        <div class="card-overly"></div> 
                    </div> 
                </a>
                <div class="card-body flex justify-between">
                    <div class="flex-1">
                        <a href="{{route('ganeshFestivalCompetition.create')}}"><p class="card-text text-black font-medium line-clamp-1"> Ganesh Competition </p> </a>
                    </div>
                </div> 
            </div>
        </li> 
   
        <li class="lg:w-1/3 md:w-1/3 sm:w-1/3 w-1/1 pr-3">
            <div class="card uk-transition-toggle">
                <a href="{{route('ganeshFestivalGroup.create')}}">
                    <div class="px-6">
                        <img class='w-full' src="{{asset('front/images')}}/web/group-registration.png" alt="">
                        <div class="card-overly"></div> 
                    </div> 
                </a>
                <div class="card-body flex justify-between">
                    <div class="flex-1">
                        <a href="{{route('ganeshFestivalGroup.create')}}"><p class="card-text text-black font-medium line-clamp-1"> Group Registration </p> </a>
                    </div>
                </div> 
            </div>
        </li> 
   
    </ul>

</div>

</div>
</div>

</main>



    @include('front.widget.status-block')
   
    @include('front.widget.story-block')

 



@endsection

