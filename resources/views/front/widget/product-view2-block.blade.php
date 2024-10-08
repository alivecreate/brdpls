        <!-- main contents -->
        <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

            <div class="lg:flex 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto lg:mt-2 mt-6" id="js-oversized">

                <div class="flex-1">
                    
                    <!-- product preview -->
                    <div class="rounded-lg box">
                        
                        <div class="relative" uk-slideshow="animation: push; ratio: 7:5">
    
                            <ul class="uk-slideshow-items overflow-hidden rounded-t-xl" uk-lightbox="animation: fade"> 
                                <li class="w-full">
                                    <a class="inline" href="{{asset('front')}}/images/product/product-1.jpg" data-caption="Caption 1"> 
                                        <img src="{{asset('front')}}/images/product/product-1.jpg" alt="" class="w-full h-full absolute object-cover insta-0">
                                    </a>
                                </li>
                                <li class="w-full">
                                    <a class="inline" href="{{asset('front')}}/images/product/product-5.jpg" data-caption="Caption 2"> 
                                        <img src="{{asset('front')}}/images/product/product-5.jpg" alt="" class="w-full h-full absolute object-cover insta-0">
                                    </a>
                                </li>
                                <li class="w-full">
                                    <a class="inline" href="{{asset('front')}}/images/product/product-10.jpg" data-caption="Caption 3"> 
                                        <img src="{{asset('front')}}/images/product/product-10.jpg" alt="" class="w-full h-full absolute object-cover insta-0">
                                    </a>
                                </li> 
                            </ul>
                        
                            <!-- slide nav icons -->
                            <div class="max-md:hidden">
    
                                <a class="nav-prev" href="#" uk-slideshow-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon> </a>
                                <a class="nav-next" href="#" uk-slideshow-item="next"> <ion-icon name="chevron-forward" class="text-2xl"></ion-icon></a>
                            
                            </div>
    
                            <ul class="flex justify-center gap-4 py-4 absolute w-full bottom-0">
                                <li uk-slideshow-item="0"><a href="#"> <img src="{{asset('front')}}/images/product/product-1.jpg" alt="" class="w-16 h-12 rounded"> </a></li>
                                <li uk-slideshow-item="1"><a href="#"> <img src="{{asset('front')}}/images/product/product-5.jpg" alt="" class="w-16 h-12 rounded"></a></li>
                                <li uk-slideshow-item="2"><a href="#"> <img src="{{asset('front')}}/images/product/product-10.jpg" alt="" class="w-16 h-12 rounded"></a></li>
                            </ul>
                             
                        </div>
    
                        <div class="md:space-y-5 space-y-3 p-5">
                         
                            <div class="flex justify-between md:pr-4">
                                <div>
                                    <h3 class="text-lg font-semibold"> Long evening dress with beatuful neckline </h3>
                                    <p class="text-xs mt-2 font-light text-gray-900 dark:text-white"> Listed on 2 weeeks ago in Hargiesa</p>
                                </div>
                                <h1 class="text-xl font-semibold"> $12.99 </h1>
                            </div>
                            
        
                          
                            <div>
                                <h4 class="text-sm font-medium"> Details </h4>
                                <div class="grid grid-cols-2 gap-2 mt-2 text-sm">
                                    <div>  Status </div>
                                    <div class="text-teal-600">  Instock </div> 
                                </div>
                            </div>
        
                            <div class="flex gap-2 py-2">
                                <button class="button bg-primary text-white flex-1 py-1">Add to cart </button>
                                <button class="button bg-secondery px-3" uk-tooltip="title: Hello World; offset: 8"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                    </svg>
                                </button>
                                <button class="button bg-secondery px-3" uk-tooltip="title: Hello World; offset: 8"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                    </svg>
                                </button>
                            </div>
        
                            <p class="text-sm text-black font-light dark:text-white"> sed diam nonummy nibh tincidunt volutpat laoreet dolore  tincidunt volutpat laoreet dolore  euismod tincidunt volutpat laoreet dolore magna aliquam erat volutpat  </p>
         
                            <div>
                                <h4 class="text-sm font-medium"> Seller </h4>
                                <div class="flex gap-3 py-2 text-sm font-medium mt-2">
                                    <a href="{{route('timeline')}}"> <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="w-9 h-9 rounded-full"> </a>  
                                    <div class="flex-1">
                                        <a href="{{route('timeline')}}"> <h4 class="text-black dark:text-white"> Monroe Parker </h4> </a>  
                                        <div class="text-xs text-gray-500 dark:text-white/80"> 2 hours ago </div>
                                    </div>
        
                                    <button type="button" class="button border2 px-3"> Follow </button>
                                  
                                </div>
                            </div>
        
                        </div>
    
                    </div> 
    
                
                    <!-- related items title-->
                    <div class="sm:my-6 my-3 flex items-center justify-between">
                        <div>
                            <h2 class="text-xl font-semibold text-black"> Related items </h2>
                            <p class="font-normal text-sm text-gray-500 leading-6 hidden"> Find a group by browsing top categories. </p>
                        </div>
                        <a href="#" class="text-blue-500 sm:block hidden text-sm"> See all </a>
                    </div>
        
                    <!-- related items slider -->
                    <div class="relative" tabindex="-1" uk-slider="auto play: true;finite: true">
        
                        <div class="uk-slider-container pb-1">
                           
                            <ul class="uk-slider-items w-[calc(100%+10px)]" uk-scrollspy="target: > li; cls: uk-animation-scale-up; delay: 20;repeat:true">
          
                                <li class="sm:w-1/3 w-1/2 pr-3">
                                    <div class="card uk-transition-toggle">
                                        <a href="{{route('product-view-1')}}">
                                            <div class="card-media sm:aspect-[2/1.7] h-36">
                                                <img src="{{asset('front')}}/images/product/product-10.jpg" alt="">
                                                <div class="card-overly"></div> 
                                            </div> 
                                        </a>
                                        <div class="card-body flex justify-between">
                                            <div class="flex-1">
                                                <a href="{{route('product-view-1')}}"><p class="card-text text-black font-medium line-clamp-1"> Herbal </p> </a>
                                                <div class="text-xs line-clamp-1 mt-1">  Herbal Shampoo   </div>
                                            </div>
                                            <h4 class="card-title"> 19$ </h4>
                                        </div> 
                                    </div>
                                </li>  
                                <li class="sm:w-1/3 w-1/2 pr-3">
                                    <div class="card uk-transition-toggle">
                                        <a href="{{route('product-view-1')}}">
                                            <div class="card-media sm:aspect-[2/1.7] h-36">
                                                <img src="{{asset('front')}}/images/product/product-9.jpg" alt="">
                                                <div class="card-overly"></div> 
                                            </div> 
                                        </a>
                                        <div class="card-body flex justify-between">
                                            <div class="flex-1">
                                                <a href="{{route('product-view-1')}}"><p class="card-text text-black font-medium line-clamp-1"> Furniture </p> </a>
                                                <div class="text-xs line-clamp-1 mt-1">  Wood Chair  </div>
                                            </div>
                                            <h4 class="card-title"> 19$ </h4>
                                        </div> 
                                    </div>
                                </li> 
                                <li class="sm:w-1/3 w-1/2 pr-3">
                                    <div class="card uk-transition-toggle">
                                        <a href="{{route('product-view-1')}}">
                                            <div class="card-media sm:aspect-[2/1.7] h-36">
                                                <img src="{{asset('front')}}/images/product/product-3.jpg" alt="">
                                                <div class="card-overly"></div> 
                                            </div> 
                                        </a>
                                        <div class="card-body flex justify-between">
                                            <div class="flex-1">
                                                <a href="{{route('product-view-1')}}"><p class="card-text text-black font-medium line-clamp-1"> Electronic </p> </a>
                                                <div class="text-xs line-clamp-1 mt-1"> Gaming Mouse  </div>
                                            </div>
                                            <h4 class="card-title"> 19$ </h4>
                                        </div> 
                                    </div>
                                </li> 
                                <li class="sm:w-1/3 w-1/2 pr-3">
                                    <div class="card uk-transition-toggle">
                                        <a href="{{route('product-view-1')}}">
                                            <div class="card-media sm:aspect-[2/1.7] h-36">
                                                <img src="{{asset('front')}}/images/product/product-1.jpg" alt="">
                                                <div class="card-overly"></div> 
                                            </div> 
                                        </a>
                                        <div class="card-body flex justify-between">
                                            <div class="flex-1">
                                                <a href="{{route('product-view-1')}}"><p class="card-text text-black font-medium line-clamp-1"> Shampo </p> </a>
                                                <div class="text-xs line-clamp-1 mt-1"> Deep Cleanse  </div>
                                            </div>
                                            <h4 class="card-title"> 19$ </h4>
                                        </div> 
                                    </div>
                                </li> 
        
                            </ul>
                    
                        </div>
                       
                             
                        <!-- slide nav icons -->
                        <a class="nav-prev !bottom-1/2 !top-auto" href="#" uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon> </a>
                        <a class="nav-next !bottom-1/2 !top-auto" href="#" uk-slider-item="next"> <ion-icon name="chevron-forward" class="text-2xl"></ion-icon></a>
                        
                        
                    </div>
    
     
                </div>
     
                <!-- sidebar -->
                <div class="2xl:w-[380px] lg:w-[330px] w-full">
    
                    <div  class="lg:space-y-6 space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6" 
                          uk-sticky="media: 1024; end: #js-oversized; offset: 80">

                    <div class="box p-5 px-6">
        
                        <div class="flex items-baseline justify-between text-black dark:text-white">
                            <h3 class="font-bold text-base"> People you may know </h3>
                            <a href="#" class="text-sm text-blue-500">See all</a>
                        </div>

                        <div class="side-list">

                            <div class="side-list-item">
                                <a href="{{route('timeline')}}">
                                    <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="side-list-image rounded-full">
                                </a>
                                <div class="flex-1">
                                    <a href="{{route('timeline')}}"><h4 class="side-list-title">  John Michael </h4></a>
                                    <div class="side-list-info"> 125k Following </div>
                                </div>
                                <button class="button bg-primary-soft text-primary dark:text-white">follow</button>
                            </div>

                            <div class="side-list-item">
                                <a href="{{route('timeline')}}">
                                    <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="side-list-image rounded-full">
                                </a>
                                <div class="flex-1">
                                    <a href="{{route('timeline')}}"><h4 class="side-list-title"> Monroe Parker </h4></a>
                                    <div class="side-list-info"> 320k Following </div>
                                </div>
                                <button class="button bg-primary-soft text-primary dark:text-white">follow</button>
                            </div>  
                            
                            <div class="side-list-item">
                                <a href="{{route('timeline')}}">
                                    <img src="{{asset('front')}}/images/avatars/avatar-5.jpg" alt="" class="side-list-image rounded-full">
                                </a>
                                <div class="flex-1">
                                    <a href="{{route('timeline')}}"><h4 class="side-list-title"> James Lewis</h4></a>
                                    <div class="side-list-info"> 125k Following </div>
                                </div>
                                <button class="button bg-primary-soft text-primary dark:text-white">follow</button>
                            </div>
                            
                            <div class="side-list-item">
                                <a href="{{route('timeline')}}">
                                    <img src="{{asset('front')}}/images/avatars/avatar-6.jpg" alt="" class="side-list-image rounded-full">
                                </a>
                                <div class="flex-1">
                                    <a href="{{route('timeline')}}"><h4 class="side-list-title">  Alexa stella </h4></a>
                                    <div class="side-list-info"> 192k Following </div>
                                </div>
                                <button class="button bg-primary-soft text-primary dark:text-white">follow</button>
                            </div>

                            <div class="side-list-item">
                                <a href="{{route('timeline')}}">
                                    <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="side-list-image rounded-full">
                                </a>
                                <div class="flex-1">
                                    <a href="{{route('timeline')}}"><h4 class="side-list-title"> John Michael </h4></a>
                                    <div class="side-list-info"> 320k Following </div>
                                </div>
                                <button class="button bg-primary-soft text-primary dark:text-white">follow</button>
                            </div>  
                            
                            <button class="bg-secondery button w-full mt-2 hidden">See all</button>

                        </div>

                    </div>

                    <!-- peaple you might know -->
                    <div class="box p-5 px-6 border1 dark:bg-dark2 hidden">
                                    
                        <div class="flex justify-between text-black dark:text-white">
                            <h3 class="font-bold text-base"> Peaple You might know </h3>
                            <button type="button"> <ion-icon name="sync-outline" class="text-xl"></ion-icon> </button>
                        </div>

                        <div class="space-y-4 capitalize text-xs font-normal mt-5 mb-2 text-gray-500 dark:text-white/80">

                            <div class="flex items-center gap-3">
                                <a href="{{route('timeline')}}">
                                    <img src="{{asset('front')}}/images/avatars/avatar-7.jpg" alt="" class="bg-gray-200 rounded-full w-10 h-10">
                                </a>
                                <div class="flex-1">
                                    <a href="{{route('timeline')}}"><h4 class="font-semibold text-sm text-black dark:text-white">  Johnson smith</h4></a>
                                    <div class="mt-0.5"> Suggested For You </div>
                                </div>
                                <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow </button>
                            </div>
                            <div class="flex items-center gap-3">
                                <a href="{{route('timeline')}}">
                                    <img src="{{asset('front')}}/images/avatars/avatar-5.jpg" alt="" class="bg-gray-200 rounded-full w-10 h-10">
                                </a>
                                <div class="flex-1">
                                    <a href="{{route('timeline')}}"><h4 class="font-semibold text-sm text-black dark:text-white"> James Lewis</h4></a>
                                    <div class="mt-0.5"> Followed by Johnson </div>
                                </div>
                                <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow </button>
                            </div>
                            <div class="flex items-center gap-3">
                                <a href="{{route('timeline')}}">
                                    <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="bg-gray-200 rounded-full w-10 h-10">
                                </a>
                                <div class="flex-1">
                                    <a href="{{route('timeline')}}"><h4 class="font-semibold text-sm text-black dark:text-white"> John Michael</h4></a>
                                    <div class="mt-0.5"> Followed by Monroe  </div>
                                </div>
                                <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow </button>
                            </div>
                            <div class="flex items-center gap-3">
                                <a href="{{route('timeline')}}">
                                    <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="bg-gray-200 rounded-full w-10 h-10">
                                </a>
                                <div class="flex-1">
                                    <a href="{{route('timeline')}}"><h4 class="font-semibold text-sm text-black dark:text-white">  Monroe Parker</h4></a>
                                    <div class="mt-0.5"> Suggested For You </div>
                                </div>
                                <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow </button>
                            </div> 
                            <div class="flex items-center gap-3">
                                <a href="{{route('timeline')}}">
                                    <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="" class="bg-gray-200 rounded-full w-10 h-10">
                                </a>
                                <div class="flex-1">
                                    <a href="{{route('timeline')}}"><h4 class="font-semibold text-sm text-black dark:text-white">  Martin Gray</h4></a>
                                    <div class="mt-0.5"> Suggested For You </div>
                                </div>
                                <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow </button>
                            </div>
                        </div>

                    </div>


                    <!-- latest marketplace items -->
                    <div class="box p-5 px-6 border1 dark:bg-dark2">
                        
                        <div class="flex justify-between text-black dark:text-white">
                            <h3 class="font-bold text-base"> Premium Photos </h3>
                            <button type="button"> <ion-icon name="sync-outline" class="text-xl"></ion-icon> </button>
                        </div>

                        <div class="relative capitalize font-medium text-sm text-center mt-4 mb-2" tabindex="-1" uk-slider="autoplay: true;finite: true">

                            <div class="overflow-hidden uk-slider-container">
                            
                                <ul class="-ml-2 uk-slider-items w-[calc(100%+0.5rem)]">
                                    
                                    <li class="w-1/2 pr-2">

                                         <a href="#">
                                            <div class="relative overflow-hidden rounded-lg">
                                                <div class="relative w-full h-40">
                                                    <img src="{{asset('front')}}/images/product/product-1.jpg" alt="" class="object-cover w-full h-full inset-0">
                                                </div> 
                                                <div class="absolute right-0 top-0 m-2 bg-white/60 rounded-full py-0.5 px-2 text-sm font-semibold dark:bg-slate-800/60"> $12 </div>
                                            </div>
                                            <div class="mt-3 w-full"> Chill Lotion </div>
                                        </a>
                                    </li>
                                    <li class="w-1/2 pr-2">

                                         <a href="#">
                                            <div class="relative overflow-hidden rounded-lg">
                                                <div class="relative w-full h-40">
                                                    <img src="{{asset('front')}}/images/product/product-3.jpg" alt="" class="object-cover w-full h-full inset-0">
                                                </div> 
                                                <div class="absolute right-0 top-0 m-2 bg-white/60 rounded-full py-0.5 px-2 text-sm font-semibold dark:bg-slate-800/60"> $18 </div>
                                            </div>
                                            <div class="mt-3 w-full">  Gaming mouse </div>
                                        </a>

                                    </li>
                                    <li class="w-1/2 pr-2">

                                        <a href="#">
                                            <div class="relative overflow-hidden rounded-lg">
                                                <div class="relative w-full h-40">
                                                    <img src="{{asset('front')}}/images/product/product-5.jpg" alt="" class="object-cover w-full h-full inset-0">
                                                </div> 
                                                <div class="absolute right-0 top-0 m-2 bg-white/60 rounded-full py-0.5 px-2 text-sm font-semibold dark:bg-slate-800/60"> $12 </div>
                                            </div>
                                            <div class="mt-3 w-full">  Herbal Shampoo </div>
                                        </a>

                                    </li>

                                </ul>

                                <button type="button" class="absolute bg-white rounded-full top-16 -left-4 grid w-9 h-9 place-items-center shadow dark:bg-dark3"  uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon></button>
                                <button type="button" class="absolute -right-4 bg-white rounded-full top-16 grid w-9 h-9 place-items-center shadow dark:bg-dark3" uk-slider-item="next"> <ion-icon name="chevron-forward" class="text-2xl"></ion-icon></button>

                            </div>
                        
                        </div>


                    </div>
                    
                    <!-- online friends -->
                    <div class="box p-5 px-6 border1 dark:bg-dark2">
                        
                        <div class="flex justify-between text-black dark:text-white">
                            <h3 class="font-bold text-base"> Online Friends </h3>
                            <button type="button"> <ion-icon name="sync-outline" class="text-xl"></ion-icon> </button>
                        </div>

                        <div class="grid grid-cols-6 gap-3 mt-4">

                            <a href="{{route('timeline')}}"> 
                                <div class="w-10 h-10 relative">
                                    <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="w-full h-full absolute inset-0 rounded-full">
                                    <div class="absolute bottom-0 right-0 m-0.5 bg-green-500 rounded-full w-2 h-2"></div>
                                </div> 
                            </a>
                            <a href="{{route('timeline')}}"> 
                                <div class="w-10 h-10 relative">
                                    <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="w-full h-full absolute inset-0 rounded-full">
                                    <div class="absolute bottom-0 right-0 m-0.5 bg-green-500 rounded-full w-2 h-2"></div>
                                </div>
                            </a>
                            <a href="{{route('timeline')}}">  
                                <div class="w-10 h-10 relative">
                                    <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="" class="w-full h-full absolute inset-0 rounded-full">
                                    <div class="absolute bottom-0 right-0 m-0.5 bg-green-500 rounded-full w-2 h-2"></div>
                                </div> 
                            </a>
                            <a href="{{route('timeline')}}"> 
                                <div class="w-10 h-10 relative">
                                    <img src="{{asset('front')}}/images/avatars/avatar-5.jpg" alt="" class="w-full h-full absolute inset-0 rounded-full">
                                    <div class="absolute bottom-0 right-0 m-0.5 bg-green-500 rounded-full w-2 h-2"></div>
                                </div> 
                            </a>
                            <a href="{{route('timeline')}}"> 
                                <div class="w-10 h-10 relative">
                                    <img src="{{asset('front')}}/images/avatars/avatar-6.jpg" alt="" class="w-full h-full absolute inset-0 rounded-full">
                                    <div class="absolute bottom-0 right-0 m-0.5 bg-green-500 rounded-full w-2 h-2"></div>
                                </div> 
                            </a>
                            <a href="{{route('timeline')}}"> 
                                <div class="w-10 h-10 relative">
                                    <img src="{{asset('front')}}/images/avatars/avatar-7.jpg" alt="" class="w-full h-full absolute inset-0 rounded-full">
                                    <div class="absolute bottom-0 right-0 m-0.5 bg-green-500 rounded-full w-2 h-2"></div>
                                </div> 
                            </a>

                        </div>

                        
                    </div>

                    <!-- Pro Members -->
                    <div class="box p-5 px-6 border1 dark:bg-dark2">
                        
                        <div class="flex justify-between text-black dark:text-white">
                            <h3 class="font-bold text-base"> Pro Members </h3>
                        </div>

                        <div class="relative capitalize font-normal text-sm mt-4 mb-2" tabindex="-1" uk-slider="autoplay: true;finite: true">

                            <div class="overflow-hidden uk-slider-container">
                            
                                <ul class="-ml-2 uk-slider-items w-[calc(100%+0.5rem)]">
                                    
                                    <li class="w-1/2 pr-2">
                                    <a href="{{route('timeline')}}"> 
                                        <div class="flex flex-col items-center shadow-sm p-2 rounded-xl border1">
                                            <a href="{{route('timeline')}}"> 
                                                <div class="relative w-16 h-16 mx-auto mt-2">
                                                    <img src="{{asset('front')}}/images/avatars/avatar-5.jpg" alt="" class="h-full object-cover rounded-full shadow w-full">
                                                </div>
                                            </a>
                                            <div class="mt-5 text-center w-full">
                                                <a href="{{route('timeline')}}"> <h5 class="font-semibold"> Martin Gray</h5> </a>
                                                <div class="text-xs text-gray-400 mt-0.5 font-medium"> 12K Followers</div>
                                                <button type="button" class="bg-secondery block font-semibold mt-4 py-1.5 rounded-lg text-sm w-full border1"> Follow </button>
                                            </div>
                                        </div>
                                    
                                    </li>
                                    <li class="w-1/2 pr-2">
                                        <div class="flex flex-col items-center shadow-sm p-2 rounded-xl border1">
                                            <a href="{{route('timeline')}}"> 
                                                <div class="relative w-16 h-16 mx-auto mt-2">
                                                    <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="" class="h-full object-cover rounded-full shadow w-full">
                                                </div>
                                            </a> 
                                            <div class="mt-5 text-center w-full">
                                                <a href="{{route('timeline')}}"> <h5 class="font-semibold"> Alexa Park</h5> </a>
                                                <div class="text-xs text-gray-400 mt-0.5 font-medium"> 12K Followers</div>
                                                <button type="button" class="bg-secondery block font-semibold mt-4 py-1.5 rounded-lg text-sm w-full border1"> Follow </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="w-1/2 pr-2">
                                        <div class="flex flex-col items-center shadow-sm p-2 rounded-xl border1">
                                            <a href="{{route('timeline')}}"> 
                                                <div class="relative w-16 h-16 mx-auto mt-2">
                                                    <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="" class="h-full object-cover rounded-full shadow w-full">
                                                </div>
                                            </a> 
                                            <div class="mt-5 text-center w-full">
                                                <a href="{{route('timeline')}}"> <h5 class="font-semibold"> James Lewis</h5> </a>
                                                <div class="text-xs text-gray-400 mt-0.5 font-medium"> 15K Followers</div>
                                                <button type="button" class="bg-secondery block font-semibold mt-4 py-1.5 rounded-lg text-sm w-full border1"> Follow </button>
                                            </div>
                                        </div>
                                    </li>
                                

                                </ul>

                                <button type="button" class="absolute -translate-y-1/2 bg-slate-100 rounded-full top-1/2 -left-4 grid w-9 h-9 place-items-center dark:bg-dark3"  uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon></button>
                                <button type="button" class="absolute -right-4 -translate-y-1/2 bg-slate-100 rounded-full top-1/2 grid w-9 h-9 place-items-center dark:bg-dark3" uk-slider-item="next"> <ion-icon name="chevron-forward" class="text-2xl"></ion-icon></button>

                            </div>
                        
                        </div>


                    </div>

                    <!-- Trends -->
                    <div class="box p-5 px-6 border1 dark:bg-dark2">
                        
                        <div class="flex justify-between text-black dark:text-white">
                            <h3 class="font-bold text-base"> Trends for you </h3>
                            <button type="button"> <ion-icon name="sync-outline" class="text-xl"></ion-icon> </button>
                        </div>

                        <div class="space-y-3.5 capitalize text-xs font-normal mt-5 mb-2 text-gray-600 dark:text-white/80">
                            <a href="#">
                                <div class="flex items-center gap-3 p"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 -mt-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                                    </svg>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-black dark:text-white text-sm">  artificial intelligence </h4>
                                        <div class="mt-0.5"> 1,245,62 post </div>
                                    </div> 
                                </div>
                            </a>
                            <a href="#" class="block">
                                <div class="flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 -mt-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                                    </svg>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-black dark:text-white text-sm">  Web developers</h4>
                                        <div class="mt-0.5"> 1,624 post </div>
                                    </div> 
                                </div>
                            </a>
                            <a href="#" class="block">
                                <div class="flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 -mt-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                                    </svg>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-black dark:text-white text-sm">  Ui Designers</h4>
                                        <div class="mt-0.5"> 820 post </div>
                                    </div> 
                                </div>
                            </a>
                            <a href="#" class="block">
                                <div class="flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 -mt-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                                    </svg>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-black dark:text-white text-sm"> affiliate marketing </h4>
                                        <div class="mt-0.5"> 480 post </div>
                                    </div> 
                                </div>
                            </a>
                        </div>

                        
                    </div>

                </div>
                </div>
                
            </div>
            
        </main>

    </div>