
@extends('front.layout.ganesh-festival-layout')


@section('content')
<!-- main contents -->
    <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

            
<div class="2xl:max-w-[1220px] max-w-[1065px] mx-auto mt-10">


    <div class="page-heading">
        
        <h1 class="page-title"> ગણેશ મંડળો (Ganesh Festival Pages) </h1>

        <nav class="nav__underline">
            <ul class="group" uk-switcher="connect: #group-tabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium"> 
                <li> <a href="#" >Recent</a> </li>
            </ul> 
        </nav>
    </div>

    <div class="uk-switcher" id="group-tabs">

        <!-- card layout 2 -->
        <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 p-1 gap-4">

            @foreach($groups as $group)
                <div class="card mb-2">
                    <a href="{{route('ganeshFestivalGroup.show', $group->slug)}}">
                        <div class="card-media h-40">
                            <img 
                            @if(optional($group)->cover)
                                <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$group->cover}}/sm" alt="{{$group->name}}"
                                class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm"
                                >
                            @else 
                                <img src="{{asset('front/images/product/product-1.jpg')}}" alt="{{$group->name}}"
                                class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm">
                            @endif

                            <div class="card-overly"></div>
                        </div>
                    </a> 
                    <div class="card-body">
                        <a href="{{route('ganeshFestivalGroup.show', $group->slug)}}"> <h4 class="card-title"> {{$group->name}} </h4></a> 
                        <div class="card-text"> 
                            <div class="card-list-info font-normal mt-1">
                           
                                <p>{{$group->address}}</p>
                            </div> 
                            <!-- <div class="flex items-center gap-3 mt-3">
                                <div class="flex -space-x-2">
                                    <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                                    <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                                    <img src="{{asset('front')}}/images/avatars/avatar-7.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                                </div>
                                <p class="card-text"> 6 friend are members </p>
                            </div> -->
                        </div>
                        
                        <!-- <div class="flex gap-2">
                            <button type="button" class="button bg-primary text-white flex-1">Follow</button>
                            <a href="{{route('ganeshFestivalGroup.show', 1)}}" class="button bg-secondery !w-auto"> View</a> 
                        </div> -->

                    </div>
                </div>
            @endforeach
            

        </div>


    </div>

    
</div>


</main>

</div>

@endsection