    <!-- main contents -->
    <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] 2xl:ml-[--w-side]  xl:ml-[--w-side-sm] h-[calc(100vh-var(--m-top))] mt-[--m-top] p-6">

            
<div class="2xl:max-w-[1220px] max-w-[1065px] mx-auto lg:mt-2 mt-6">


    <div class="page-heading">
        
        <h1 class="page-title"> Groups </h1>

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
                <a href="{{route('group.show', 1)}}">
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
                       <a href="{{ route('group.edit', $group->group_code) }}"> <button type="submit" class="button bg-secondery flex-1">Edit</button> </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    
    <!-- category title -->
    <div class="sm:my-6 my-3 flex items-center justify-between">
        <div>
            <h2 class="md:text-lg text-base font-semibold text-black"> Categories </h2>
            <p class="font-normal text-sm text-gray-500 leading-6"> Find a group by browsing top categories. </p>
        </div>
        <a href="#" class="text-blue-500 sm:block hidden text-sm"> See all </a>
    </div>
       
    <!-- group  slider -->
    <div tabindex="-1" uk-slider="finite:true">

        <div class="uk-slider-container pb-1">
           
            <ul class="uk-slider-items grid-small">
                
                <li class="md:w-1/5 sm:w-1/3 w-1/2">
                    <a href="#"> 
                        <div class="relative rounded-lg overflow-hidden">
                            <img src="{{asset('front')}}/images/category/Buy-and-sell.jpg" alt="" class="h-36 w-full object-cover">
                            <div class="w-full bottom-0 absolute left-0 bg-gradient-to-t from-black/60 pt-10">
                                <div class="text-white p-5 text-lg leading-3"> Shopping </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="md:w-1/5 sm:w-1/3 w-1/2">
                    <a href="#">  
                        <div class="relative rounded-lg overflow-hidden">
                            <img src="{{asset('front')}}/images/category/health.jpg" alt="" class="h-36 w-full object-cover">
                            <div class="w-full bottom-0 absolute left-0 bg-gradient-to-t from-black/60 pt-10">
                                <div class="text-white p-5 text-lg leading-3"> health </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="md:w-1/5 sm:w-1/3 w-1/2">
                    <a href="#"> 
                        <div class="relative rounded-lg overflow-hidden">
                            <img src="{{asset('front')}}/images/category/science-and-tech.jpg" alt="" class="h-36 w-full object-cover">
                            <div class="w-full bottom-0 absolute left-0 bg-gradient-to-t from-black/60 pt-10">
                                <div class="text-white p-5 text-lg leading-3"> science </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="md:w-1/5 sm:w-1/3 w-1/2">
                    <a href="#"> 
                        <div class="relative rounded-lg overflow-hidden">
                            <img src="{{asset('front')}}/images/category/travel.jpg" alt="" class="h-36 w-full object-cover">
                            <div class="w-full bottom-0 absolute left-0 bg-gradient-to-t from-black/60 pt-10">
                                <div class="text-white p-5 text-lg leading-3"> Travel </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="md:w-1/5 sm:w-1/3 w-1/2">
                    <a href="#">  
                        <div class="relative rounded-lg overflow-hidden">
                            <img src="{{asset('front')}}/images/category/business.jpg" alt="" class="h-36 w-full object-cover">
                            <div class="w-full bottom-0 absolute left-0 bg-gradient-to-t from-black/60 pt-10">
                                <div class="text-white p-5 text-lg leading-3"> business </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="md:w-1/5 sm:w-1/3 w-1/2">
                    <a href="#"> 
                        <div class="relative rounded-lg overflow-hidden">
                            <img src="{{asset('front')}}/images/category/Buy-and-sell.jpg" alt="" class="h-36 w-full object-cover">
                            <div class="w-full bottom-0 absolute left-0 bg-gradient-to-t from-black/60 pt-10">
                                <div class="text-white p-5 text-lg leading-3"> Shopping </div>
                            </div>
                        </div>
                    </a>
                </li> 
                
            </ul>
    
        </div>
       
        <!-- slide nav icons -->
        <a class="nav-prev" href="#" uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon> </a>
        <a class="nav-next" href="#" uk-slider-item="next"> <ion-icon name="chevron-forward" class="text-2xl"></ion-icon></a>
        
    </div>
    
    <!-- suggest title -->
    <div class="sm:my-6 my-3 flex items-center justify-between lg:mt-10">
        <div>
            <h2 class="md:text-lg text-base font-semibold text-black"> Suggestions </h2>
            <p class="font-normal text-sm text-gray-500 leading-6"> Find a groups You Might Be Interested In. </p>
        </div>
        <a href="#" class="text-blue-500 sm:block hidden text-sm"> See all </a>
    </div>

    <div class="grid md:grid-cols-2 md:gap-2 gap-3">

        <div class="flex md:items-center space-x-4 p-4 rounded-md box">
            <div class="sm:w-20 w-14 sm:h-20 h-14 flex-shrink-0 rounded-lg relative"> 
                <img src="{{asset('front')}}/images/group/group-4.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm" alt="">
            </div> 
            <div class="flex-1">
                <a href="{{route('group.show', 1)}}" class="md:text-lg text-base font-semibold capitalize text-black dark:text-white"> Delicious Foods   </a>
                <div class="flex space-x-2 items-center text-sm font-normal">
                    <div> 16K Members</div>
                    <div>·</div>
                    <div> 12 posts a week</div>
                </div>
                <div class="flex items-center mt-2">
                    <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" class="w-6 rounded-full border-2 border-gray-200 -mr-2" alt="">
                    <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" class="w-6 rounded-full border-2 border-gray-200" alt="">
                    <div class="text-sm text-gray-500 ml-2"> 14 friends are members</div>
                </div>

            </div>
            <button type="button" class="button bg-primary-soft text-primary dark:text-white gap-1 max-md:hidden"> <ion-icon name="add-circle" class="text-xl -ml-1"></ion-icon> Join</button>

        </div>
        <div class="flex md:items-center space-x-4 p-4 rounded-md box">
            <div class="sm:w-20 w-14 sm:h-20 h-14 flex-shrink-0 rounded-lg relative"> 
                <img src="{{asset('front')}}/images/group/group-3.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm" alt="">
            </div> 
            <div class="flex-1">
                <a href="{{route('group.show', 1)}}" class="md:text-lg text-base font-semibold capitalize text-black dark:text-white"> Abstract minimal  </a>
                <div class="flex space-x-2 items-center text-sm font-normal">
                    <div> 18K Members</div>
                    <div>·</div>
                    <div> 16 posts a week</div>
                </div>
                <div class="flex items-center mt-2">
                    <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" class="w-6 rounded-full border-2 border-gray-200 -mr-2" alt="">
                    <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" class="w-6 rounded-full border-2 border-gray-200" alt="">
                    <div class="text-sm text-gray-500 ml-2"> 24 friends are members</div>
                </div>

            </div>
            <button type="button" class="button bg-primary-soft text-primary dark:text-white gap-1 max-md:hidden"> <ion-icon name="add-circle" class="text-xl -ml-1"></ion-icon> Join</button>

        </div>
        <div class="flex md:items-center space-x-4 p-4 rounded-md box">
            <div class="sm:w-20 w-14 sm:h-20 h-14 flex-shrink-0 rounded-lg relative"> 
                <img src="{{asset('front')}}/images/group/group-2.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm" alt="">
            </div> 
            <div class="flex-1">
                <a href="{{route('group.show', 1)}}" class="md:text-lg text-base font-semibold capitalize text-black dark:text-white"> Delicious Foods   </a>
                <div class="flex space-x-2 items-center text-sm font-normal">
                    <div> 19K Members</div>
                    <div>·</div>
                    <div> 21 posts a week</div>
                </div>
                <div class="flex items-center mt-2">
                    <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" class="w-6 rounded-full border-2 border-gray-200 -mr-2" alt="">
                    <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" class="w-6 rounded-full border-2 border-gray-200" alt="">
                    <div class="text-sm text-gray-500 ml-2"> 16 friends are members</div>
                </div>

            </div>
            <button type="button" class="button bg-primary-soft text-primary dark:text-white gap-1 max-md:hidden"> <ion-icon name="add-circle" class="text-xl -ml-1"></ion-icon> Join</button>

        </div>
        <div class="flex md:items-center space-x-4 p-4 rounded-md box">
            <div class="sm:w-20 w-14 sm:h-20 h-14 flex-shrink-0 rounded-lg relative"> 
                <img src="{{asset('front')}}/images/group/group-1.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm" alt="">
            </div> 
            <div class="flex-1">
                <a href="{{route('group.show', 1)}}" class="md:text-lg text-base font-semibold capitalize text-black dark:text-white">  Graphic Design  </a>
                <div class="flex space-x-2 items-center text-sm font-normal">
                    <div> 24K Members</div>
                    <div>·</div>
                    <div> 12 posts a week</div>
                </div>
                <div class="flex items-center mt-2">
                    <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" class="w-6 rounded-full border-2 border-gray-200 -mr-2" alt="">
                    <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" class="w-6 rounded-full border-2 border-gray-200" alt="">
                    <div class="text-sm text-gray-500 ml-2"> 14 friends are members</div>
                </div>

            </div>
            <button type="button" class="button bg-primary-soft text-primary dark:text-white gap-1 max-md:hidden"> <ion-icon name="add-circle" class="text-xl -ml-1"></ion-icon> Join</button>

        </div>
        <div class="flex md:items-center space-x-4 p-4 rounded-md box">
            <div class="sm:w-20 w-14 sm:h-20 h-14 flex-shrink-0 rounded-lg relative"> 
                <img src="{{asset('front')}}/images/group/group-3.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm" alt="">
            </div> 
            <div class="flex-1">
                <a href="{{route('group.show', 1)}}" class="md:text-lg text-base font-semibold capitalize text-black dark:text-white"> Abstract minimal  </a>
                <div class="flex space-x-2 items-center text-sm font-normal">
                    <div> 18K Members</div>
                    <div>·</div>
                    <div> 16 posts a week</div>
                </div>
                <div class="flex items-center mt-2">
                    <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" class="w-6 rounded-full border-2 border-gray-200 -mr-2" alt="">
                    <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" class="w-6 rounded-full border-2 border-gray-200" alt="">
                    <div class="text-sm text-gray-500 ml-2"> 24 friends are members</div>
                </div>

            </div>
            <button type="button" class="button bg-primary-soft text-primary dark:text-white gap-1 max-md:hidden"> <ion-icon name="add-circle" class="text-xl -ml-1"></ion-icon> Join</button>

        </div>
        <div class="flex md:items-center space-x-4 p-4 rounded-md box">
            <div class="sm:w-20 w-14 sm:h-20 h-14 flex-shrink-0 rounded-lg relative"> 
                <img src="{{asset('front')}}/images/group/group-4.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm" alt="">
            </div> 
            <div class="flex-1">
                <a href="{{route('group.show', 1)}}" class="md:text-lg text-base font-semibold capitalize text-black dark:text-white"> Delicious Foods   </a>
                <div class="flex space-x-2 items-center text-sm font-normal">
                    <div> 16K Members</div>
                    <div>·</div>
                    <div> 12 posts a week</div>
                </div>
                <div class="flex items-center mt-2">
                    <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" class="w-6 rounded-full border-2 border-gray-200 -mr-2" alt="">
                    <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" class="w-6 rounded-full border-2 border-gray-200" alt="">
                    <div class="text-sm text-gray-500 ml-2"> 14 friends are members</div>
                </div>

            </div>
            <button type="button" class="button bg-primary-soft text-primary dark:text-white gap-1 max-md:hidden"> <ion-icon name="add-circle" class="text-xl -ml-1"></ion-icon> Join</button>

        </div>
        
    </div>

    <div class="flex justify-center my-6">
        <button type="button" class="bg-white py-2 px-5 rounded-full shadow-md font-semibold text-sm dark:bg-dark2">Load more...</button>
    </div>

    
</div>


</main>

</div>