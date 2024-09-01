@extends('front.layout.main-layout')

@section('content')

<main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] 2xl:ml-[--w-side]  xl:ml-[--w-side-sm] h-[calc(100vh-var(--m-top))] mt-[--m-top] p-6">

            
<div class="2xl:max-w-[1220px] max-w-[1065px] mx-auto lg:mt-2 mt-6">

<div class="p-4 mb-4 text-lg text-blue-800 rounded-lg {{$errorCode}} dark:bg-gray-800 dark:text-blue-400" role="alert">
  <strong class="font-bold">Error!</strong>
  <span class="block sm:inline">{{$error}}</span>
</div>



    <div class="page-heading">
        <nav class="nav__underline">

            <ul class="group" uk-switcher="connect: #group-tabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium"> 
                <li> <a href="#" > Suggestions  </a> </li>
                <li> <a href="#"> Popular </a> </li>
                <li> <a href="#"> My groups </a> </li>
            </ul> 
        </nav>
    </div>

    <!-- group list tabs -->
    <div class="uk-switcher" id="group-tabs">
        
        <!-- card layout 1 -->
        <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-2.5">

            <div class="card">
                <a href="{{route('group.show', 1)}}">
                    <div class="card-media h-24">
                        <img src="{{asset('front')}}/images/group/group-cover-4.jpg" alt="">
                        <div class="card-overly"></div>
                    </div>
                </a>
                <div class="card-body relative z-10">
                    <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="" class="w-10 rounded-full mb-2 shadow -mt-8 relative border-2 border-white dark:border-slate-800">
                    <a href="{{route('group.show', 1)}}"><h4 class="card-title"> Delicious Foods  </h4></a>
                    <div class="card-list-info font-normal mt-1">
                        <a href="#">  Travel  </a> 
                        <div class="md:block hidden">·</div>
                        <div> 232k members </div>
                    </div>
                    <div class="flex gap-2">
                        <button type="button" class="button bg-primary text-white flex-1">Join</button>
                        <a href="{{route('group.show', 1)}}" class="button bg-secondery !w-auto"> View</a> 
                    </div>
                    
                </div>
            </div> 
            <div class="card">
                <a href="{{route('group.show', 1)}}">
                    <div class="card-media h-24">
                        <img src="{{asset('front')}}/images/group/group-cover-3.jpg" alt="">
                        <div class="card-overly"></div>
                    </div>
                </a>
                <div class="card-body relative z-10">
                    <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="w-10 rounded-full mb-2 shadow -mt-8 relative border-2 border-white dark:border-slate-800">
                    <a href="{{route('group.show', 1)}}"><h4 class="card-title"> Abstract minimal </h4></a>
                    <div class="card-list-info font-normal mt-1">
                        <a href="#">  Technology </a> 
                        <div class="md:block hidden">·</div>
                        <div> 328k members </div>
                    </div>
                    <div class="flex gap-2">
                        <button type="button" class="button bg-primary text-white flex-1">Join</button>
                        <a href="{{route('group.show', 1)}}" class="button bg-secondery !w-auto"> View</a> 
                    </div>
                    
                </div>
            </div>
            <div class="card">
                <a href="{{route('group.show', 1)}}">
                    <div class="card-media h-24">
                        <img src="{{asset('front')}}/images/group/group-cover-2.jpg" alt="">
                        <div class="card-overly"></div>
                    </div>
                </a>
                <div class="card-body relative z-10">
                    <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="w-10 rounded-full mb-2 shadow -mt-8 relative border-2 border-white dark:border-slate-800">
                    <a href="{{route('group.show', 1)}}"><h4 class="card-title"> Delicious Foods  </h4></a>
                    <div class="card-list-info font-normal mt-1">
                        <a href="#">  Bussiness  </a> 
                        <div class="md:block hidden">·</div>
                        <div> 436k members </div>
                    </div>
                    <div class="flex gap-2">
                        <button type="button" class="button bg-primary text-white flex-1">Join</button>
                        <a href="{{route('group.show', 1)}}" class="button bg-secondery !w-auto"> View</a> 
                    </div>
                    
                </div>
            </div> 
            <div class="card">
                <a href="{{route('group.show', 1)}}">
                    <div class="card-media h-24">
                        <img src="{{asset('front')}}/images/group/group-cover-1.jpg" alt="">
                        <div class="card-overly"></div>
                    </div>
                </a>
                <div class="card-body relative z-10">
                    <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="w-10 rounded-full mb-2 shadow -mt-8 relative border-2 border-white dark:border-slate-800">
                    <a href="{{route('group.show', 1)}}"><h4 class="card-title">  Graphic Design </h4></a>
                    <div class="card-list-info font-normal mt-1">
                        <a href="#">   Design </a> 
                        <div class="md:block hidden">·</div>
                        <div> 420k members </div>
                    </div>
                    <div class="flex gap-2">
                        <button type="button" class="button bg-primary text-white flex-1">Join</button>
                        <a href="{{route('group.show', 1)}}" class="button bg-secondery !w-auto"> View</a> 
                    </div>
                    
                </div>
            </div>
        
        </div>

        <!-- card layout 2 -->
        <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-2.5">

            <div class="card">
                <a href="{{route('group.show', 1)}}">
                    <div class="card-media h-24">
                        <img src="{{asset('front')}}/images/product/product-1.jpg" alt="">
                        <div class="card-overly"></div>
                    </div>
                </a> 
                <div class="card-body">
                    <a href="{{route('group.show', 1)}}"> <h4 class="card-title">  Graphic Design </h4></a> 
                    <div class="card-text"> 
                        <div class="card-list-info font-normal mt-1">
                           <div>232k members </div>
                            <div class="md:block hidden">·</div>
                            <a href="#">  Education </a> 
                        </div> 
                        <div class="flex items-center gap-3 mt-3">
                            <div class="flex -space-x-2">
                                <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                                <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                                <img src="{{asset('front')}}/images/avatars/avatar-7.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                            </div>
                            <p class="card-text"> 6 friend are members </p>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <button type="button" class="button bg-primary text-white flex-1">Join</button>
                        <a href="{{route('group.show', 1)}}" class="button bg-secondery !w-auto"> View</a> 
                    </div>
                </div>
            </div>
            <div class="card">
                <a href="{{route('group.show', 1)}}">
                    <div class="card-media h-24">
                        <img src="{{asset('front')}}/images/product/product-2.jpg" alt="">
                        <div class="card-overly"></div>
                    </div>
                </a> 
                <div class="card-body">
                    <a href="{{route('group.show', 1)}}"> <h4 class="card-title"> Delicious Foods  </h4></a> 
                    <div class="card-text"> 
                        <div class="card-list-info font-normal mt-1">
                           <div>232k members </div>
                            <div class="md:block hidden">·</div>
                            <a href="#">  Education </a> 
                        </div> 
                        <div class="flex items-center gap-3 mt-3">
                            <div class="flex -space-x-2">
                                <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                                <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                                <img src="{{asset('front')}}/images/avatars/avatar-7.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                            </div>
                            <p class="card-text"> 8 friend are members </p>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <button type="button" class="button bg-primary text-white flex-1">Join</button>
                        <a href="{{route('group.show', 1)}}" class="button bg-secondery !w-auto"> View</a> 
                    </div>
                </div>
            </div>
            <div class="card">
                <a href="{{route('group.show', 1)}}">
                    <div class="card-media h-24">
                        <img src="{{asset('front')}}/images/product/product-4.jpg" alt="">
                        <div class="card-overly"></div>
                    </div>
                </a> 
                <div class="card-body">
                    <a href="{{route('group.show', 1)}}"> <h4 class="card-title"> Delicious Foods  </h4></a> 
                    <div class="card-text"> 
                        <div class="card-list-info font-normal mt-1">
                           <div>232k members </div>
                            <div class="md:block hidden">·</div>
                            <a href="#">  Education </a> 
                        </div> 
                        <div class="flex items-center gap-3 mt-3">
                            <div class="flex -space-x-2">
                                <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                                <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                                <img src="{{asset('front')}}/images/avatars/avatar-7.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                            </div>
                            <p class="card-text"> 12 friend are members </p>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <button type="button" class="button bg-primary text-white flex-1">Join</button>
                        <a href="{{route('group.show', 1)}}" class="button bg-secondery !w-auto"> View</a> 
                    </div>
                </div>
            </div>
            <div class="card">
                <a href="{{route('group.show', 1)}}">
                    <div class="card-media h-24">
                        <img src="{{asset('front')}}/images/product/product-3.jpg" alt="">
                        <div class="card-overly"></div>
                    </div>
                </a> 
                <div class="card-body">
                    <a href="{{route('group.show', 1)}}"> <h4 class="card-title"> Abstract minimal </h4></a> 
                    <div class="card-text"> 
                        <div class="card-list-info font-normal mt-1">
                           <div>360k members </div>
                            <div class="md:block hidden">·</div>
                            <a href="#">  Education </a> 
                        </div> 
                        <div class="flex items-center gap-3 mt-3">
                            <div class="flex -space-x-2">
                                <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                                <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                                <img src="{{asset('front')}}/images/avatars/avatar-7.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                            </div>
                            <p class="card-text"> 3 friend are members </p>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <button type="button" class="button bg-primary text-white flex-1">Join</button>
                        <a href="{{route('group.show', 1)}}" class="button bg-secondery !w-auto"> View</a> 
                    </div>
                </div>
            </div>

        </div>

        <!-- card layout 3 -->
        <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-2.5">
             @foreach($groups as $group)
            <div class="card">
                <a href="{{route('group.show', $group->id)}}"> 
                    <div class="card-media h-24">
                        <img src="{{asset('front')}}/images/group/group-cover-2.jpg" alt="">
                        <div class="card-overly"></div>
                    </div>
                </a>
                <div class="card-body">
                @if($group->group_name)
                    <a href="{{route('group.show', $group->id )}}"> <h4 class="card-title"> {{$group->group_name}}  </h4> </a>
                @endif
                    <div class="card-list-info font-normal mt-1"> 
                        <a href="#"> {{$group->category}} </a> 
                        <div class="md:block hidden">·</div>
                        <div>42k members </div>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{route('group.show', $group->id )}}">  <button type="submit" class="button bg-primary-soft text-primary dark:text-white flex-1">Join</button> </a>
                       <a href="{{ route('group.edit', $group->id) }}"> <button type="submit" class="button bg-secondery flex-1">Edit</button> </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    
    



    
</div>


</main>

@endsection