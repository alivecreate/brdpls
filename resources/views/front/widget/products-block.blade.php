
        <!-- main contents -->
        <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

            <div class="lg:flex 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto" id="js-oversized">

                <div class="flex-1">
                    
                    <div class="lg:max-w-[680px] w-full">

                        <div class="page-heading">
                            
                            <h1 class="page-title test"> Products </h1>
            
                            <nav class="nav__underline">
            
                                <ul class="group" uk-switcher="connect: #group-tabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium"> 
                               
                                    <li> <a href="#"> Suggestions  </a> </li>
                                    <li> <a href="#"> Newest </a> </li>
                                    <li> <a href="#"> My products </a> </li>
        
                                </ul> 
            
                            </nav>
            
                            <button type="button" class="absolute right-3 bottom-5"> <div class="w-7 h-7 bg-blue-600 rounded-full shadow grid place-items-center">  <ion-icon name="add" class="text-xl text-white"></ion-icon> </div> </button>
                            
                        </div>
        
                        <!-- feature one slider -->
                        <div class="relative" tabindex="-1" uk-slider="auto play: true;finite: true">
        
                            <div class="uk-slider-container pb-1">
                               
                                <ul class="uk-slider-items w-[calc(100%+14px)]" uk-scrollspy="target: > li; cls: uk-animation-scale-up; delay: 20;repeat:true">
        
                                    <li class="pr-3 md:w-1/3 w-1/2" uk-scrollspy-class="uk-animation-fade">
                                        <div class="card">
                                            <a href="{{route('product-view-1')}}">
                                                <div class="card-media sm:aspect-[2/1.7] h-36">
                                                    <img src="{{asset('front')}}/images/product/product-1.jpg" alt="">
                                                    <div class="card-overly"></div>
                                                </div>
                                            </a>
                                            <div class="card-body relative">
                                                <a href="#"><span class="text-teal-600 font-semibold text-xs"> Herbel</span></a>
                                                <a href="{{route('product-view-1')}}"><p class="card-text block text-black mt-0.5"> Chill Lotion </p></a>
                                                <div class="-top-3 absolute bg-blue-100 font-medium px-2  py-0.5 right-2 rounded-full text text-blue-500 text-sm z-20">
                                                    $19
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pr-3 md:w-1/3 w-1/2">
                                        <div class="card">
                                            <a href="{{route('product-view-1')}}">
                                                <div class="card-media sm:aspect-[2/1.7] h-36">
                                                    <img src="{{asset('front')}}/images/product/product-3.jpg" alt="">
                                                    <div class="card-overly"></div>
                                                </div>
                                            </a>
                                            <div class="card-body relative">
                                                <a href="#"><span class="text-teal-600 font-semibold text-xs"> Electronic </span></a>
                                                <a href="{{route('product-view-1')}}"><p class="card-text block text-black mt-0.5"> Gaming Mouse </p></a>
                                                <div class="-top-3 absolute bg-blue-100 font-medium px-2  py-0.5 right-2 rounded-full text text-blue-500 text-sm z-20">
                                                    $19
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pr-3 md:w-1/3 w-1/2">
                                        <div class="card">
                                            <a href="{{route('product-view-1')}}">
                                                <div class="card-media sm:aspect-[2/1.7] h-36">
                                                    <img src="{{asset('front')}}/images/product/product-6.jpg" alt="">
                                                    <div class="card-overly"></div>
                                                </div>
                                            </a>
                                            <div class="card-body relative">
                                                <a href="#"><span class="text-teal-600 font-semibold text-xs"> Fruit </span></a>
                                                <a href="{{route('product-view-1')}}"><p class="card-text block text-black mt-0.5">  Strawbery Fresh   </p></a>
                                                <div class="-top-3 absolute bg-blue-100 font-medium px-2  py-0.5 right-2 rounded-full text text-blue-500 text-sm z-20">
                                                    $19
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pr-3 md:w-1/3 w-1/2">
                                        <div class="card">
                                            <a href="{{route('product-view-1')}}">
                                                <div class="card-media sm:aspect-[2/1.7] h-36">
                                                    <img src="{{asset('front')}}/images/product/product-5.jpg" alt="">
                                                    <div class="card-overly"></div>
                                                </div>
                                            </a>
                                            <div class="card-body relative">
                                                <a href="#"><span class="text-teal-600 font-semibold text-xs"> Herbel </span></a>
                                                <a href="{{route('product-view-1')}}"><p class="card-text block text-black mt-0.5"> Chill Lotion </p></a>
                                                <div class="-top-3 absolute bg-blue-100 font-medium px-2  py-0.5 right-2 rounded-full text text-blue-500 text-sm z-20">
                                                    $19
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                     
        
                                </ul>
                        
                            </div>
                           
                                 
                            <!-- slide nav icons -->
                            <div class="max-md:hidden">
        
                                <a class="nav-prev !bottom-1/2 !top-auto" href="#" uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon> </a>
                                <a class="nav-next !bottom-1/2 !top-auto" href="#" uk-slider-item="next"> <ion-icon name="chevron-forward" class="text-2xl"></ion-icon></a>
                            
                            </div>

                             
                            <!-- slide nav dots-->
                            <div class="flex justify-center">
                                <ul class="inline-flex flex-wrap justify-center my-5 gap-2 uk-dotnav uk-slider-nav"> </ul>
                            </div>
        
        
                        </div>
         
                        <!-- feature two slider -->
                        <div class="relative" tabindex="-1" uk-slider="auto play: true;finite: true">
        
                            <div class="sm:my-6 my-3 flex items-center justify-between border-t pt-3 dark:border-slate-800">
                                <div>
                                    <h2 class="text-xl font-semibold text-black"> Featured </h2>
                                    <p class="font-normal text-sm text-gray-500 leading-6 hidden"> Find a group by browsing top categories. </p>
                                </div>
                                <div class="flex items-center gap-2 [&:has(a.uk-invisible)][&*>a]:bg-red-600">
                                    <a href="#" class="!block [&:has(.uk-invisible)]:opacity-20" uk-slider-item="previous"><ion-icon name="chevron-back-outline"></ion-icon> </a> 
                                    <a href="#" class="!block" uk-slider-item="next"><ion-icon name="chevron-forward-outline"></ion-icon> </a> 
                                    <a href="#" class="text-blue-500 sm:block hidden text-sm"> See all </a>
                                </div>
                            </div>
        
                            <div class="uk-slider-container pb-1">
                               
                                <ul class="uk-slider-items w-[calc(100%+14px)]" uk-scrollspy="target: > li; cls: uk-animation-scale-up; delay: 20;repeat:true">
                                    <li class="pr-4 sm:w-1/2 w-full" uk-scrollspy-class="uk-animation-fade">
                                        <div class="card flex gap-1">
                                            <a href="{{route('product-view-2')}}">
                                               <div class="card-media w-32 max-h-full h-full shrink-0">
                                                    <img src="{{asset('front')}}/images/product/product-9.jpg" alt="">
                                                    <div class="card-overly"></div>
                                                </div> 
                                            </a> 
                                            <div class="card-body flex-1 py-4">
                                                <a href="{{route('product-view-2')}}"> <h4 class="card-title">  Wood Chair </h4> </a>
                                                <a href="#"> <p class="card-text">  Furniture </p></a>
                                                <div class="text-xl flex items-center justify-between mt-2"> 
                                                    <h4 class="card-title"> 26$ </h4>
                                                    <button type="button" class="button bg-secondery !w-auto rounded-fulld hidden">View</button>
                                                </div>
                                                <div class="flex gap-2">
                                                    <button type="button" class="button bg-primary-soft text-primary dark:text-white flex-1">Chat</button>
                                                    <button type="button" class="button bg-secondery !w-auto"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                                      </svg>
                                                       </button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pr-4 sm:w-1/2 w-full">
                                        <div class="card flex gap-1">
                                            <a href="{{route('product-view-2')}}">
                                               <div class="card-media w-32 max-h-full h-full shrink-0">
                                                    <img src="{{asset('front')}}/images/product/product-1.jpg" alt="">
                                                    <div class="card-overly"></div>
                                                </div> 
                                            </a> 
                                            <div class="card-body flex-1 py-4">
                                                <a href="{{route('product-view-2')}}"> <h4 class="card-title"> Chill Lotion</h4> </a>
                                                <a href="#"> <p class="card-text"> Herbel </p></a>
                                                <div class="text-xl flex items-center justify-between mt-2"> 
                                                    <h4 class="card-title"> 39$ </h4>
                                                    <button type="button" class="button bg-secondery !w-auto rounded-fulld hidden">View</button>
                                                </div>
                                                <div class="flex gap-2">
                                                    <button type="button" class="button bg-primary-soft text-primary dark:text-white flex-1">Chat</button>
                                                    <button type="button" class="button bg-secondery !w-auto"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                                      </svg>
                                                       </button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pr-4 sm:w-1/2 w-full">
                                        <div class="card flex gap-1">
                                            <a href="{{route('product-view-2')}}">
                                               <div class="card-media w-32 max-h-full h-full shrink-0">
                                                    <img src="{{asset('front')}}/images/product/product-3.jpg" alt="">
                                                    <div class="card-overly"></div>
                                                </div> 
                                            </a> 
                                            <div class="card-body flex-1 py-4">
                                                <a href="{{route('product-view-2')}}"> <h4 class="card-title"> Gaming Mouse </h4> </a>
                                                <a href="#"> <p class="card-text">  Electronic </p></a>
                                                <div class="text-xl flex items-center justify-between mt-2"> 
                                                    <h4 class="card-title"> 14$ </h4>
                                                    <button type="button" class="button bg-secondery !w-auto rounded-fulld hidden">View</button>
                                                </div>
                                                <div class="flex gap-2">
                                                    <button type="button" class="button bg-primary-soft text-primary dark:text-white flex-1">Chat</button>
                                                    <button type="button" class="button bg-secondery !w-auto"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                                      </svg>
                                                       </button>
                                                </div>
                                            </div>
                                        </div>
                                    </li> 
                                </ul>
                        
                            </div>
                            
                        </div>
        
                        <!-- categories -->
                        <div class="sm:mt-6 mt-3 flex items-center justify-between border-t pt-3 dark:border-slate-800">
                            <div>
                                <h2 class="text-xl font-semibold text-black"> Categories
                                <p class="font-normal text-sm text-gray-500 leading-6"> Find a group by browsing top categories. </p>
                            </div> 
                        </div>
                        
                        <!-- categories slider-->
                        <div class="relative" tabindex="-1" uk-slider="auto play: true;finite: true">
        
                            <div class="py-5 uk-slider-container">
                               
                                <ul class="uk-slider-items w-[calc(100%+12px)]" uk-scrollspy="target: > li; cls: uk-animation-scale-up; delay: 20;repeat:true">
        
                                    <li class="pr-3 md:w-1/3 w-auto" uk-scrollspy-class="uk-animation-fade">
                                        <div class="p-4 flex gap-3 justify-between bg-sky-600 rounded-md">
                                            <div>
                                                <h4 class="font-medium !text-white whitespace-nowrap"> All Categories </h4>
                                                <p  class="font-medium !text-white/80 text-sm mt-1 whitespace-nowrap"> 14 product </p>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white shrink-0">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                                              </svg>
                                              
                                        </div>
                                    </li>
                                    <li class="pr-3 md:w-1/3 w-auto" uk-scrollspy-class="uk-animation-fade">
                                        <div class="p-4 flex gap-3 item-center justify-between bg-rose-500 rounded-md">
                                            <div>
                                                <h4 class="font-medium !text-white">  Building  </h4>
                                                <p  class="font-medium !text-white/80 text-sm mt-1"> 23 product </p>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white shrink-0">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                                              </svg>
                                              
                                        </div>
                                    </li>
                                    <li class="pr-3 md:w-1/3 w-auto" uk-scrollspy-class="uk-animation-fade">
                                        <div class="p-4 flex gap-3 item-center justify-between bg-teal-600 rounded-md">
                                            <div>
                                                <h4 class="font-medium !text-white">  Life style </h4>
                                                <p  class="font-medium !text-white/80 text-sm mt-1"> 32 product </p>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.712 4.33a9.027 9.027 0 011.652 1.306c.51.51.944 1.064 1.306 1.652M16.712 4.33l-3.448 4.138m3.448-4.138a9.014 9.014 0 00-9.424 0M19.67 7.288l-4.138 3.448m4.138-3.448a9.014 9.014 0 010 9.424m-4.138-5.976a3.736 3.736 0 00-.88-1.388 3.737 3.737 0 00-1.388-.88m2.268 2.268a3.765 3.765 0 010 2.528m-2.268-4.796a3.765 3.765 0 00-2.528 0m4.796 4.796c-.181.506-.475.982-.88 1.388a3.736 3.736 0 01-1.388.88m2.268-2.268l4.138 3.448m0 0a9.027 9.027 0 01-1.306 1.652c-.51.51-1.064.944-1.652 1.306m0 0l-3.448-4.138m3.448 4.138a9.014 9.014 0 01-9.424 0m5.976-4.138a3.765 3.765 0 01-2.528 0m0 0a3.736 3.736 0 01-1.388-.88 3.737 3.737 0 01-.88-1.388m2.268 2.268L7.288 19.67m0 0a9.024 9.024 0 01-1.652-1.306 9.027 9.027 0 01-1.306-1.652m0 0l4.138-3.448M4.33 16.712a9.014 9.014 0 010-9.424m4.138 5.976a3.765 3.765 0 010-2.528m0 0c.181-.506.475-.982.88-1.388a3.736 3.736 0 011.388-.88m-2.268 2.268L4.33 7.288m6.406 1.18L7.288 4.33m0 0a9.024 9.024 0 00-1.652 1.306A9.025 9.025 0 004.33 7.288" />
                                            </svg>
                                        </div>
                                    </li>
                                    <li class="pr-3 md:w-1/3 w-auto" uk-scrollspy-class="uk-animation-fade">
                                        <div class="p-4 flex gap-3 item-center justify-between bg-sky-600 rounded-md">
                                            <div>
                                                <h4 class="font-medium !text-white">  Electronic </h4>
                                                <p  class="font-medium !text-white/80 text-sm mt-1"> 14 product </p>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white shrink-0">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.098 19.902a3.75 3.75 0 005.304 0l6.401-6.402M6.75 21A3.75 3.75 0 013 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 003.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008z" />
                                            </svg>
                                        </div>
                                    </li>
                                    <li class="pr-3 md:w-1/3 w-auto" uk-scrollspy-class="uk-animation-fade">
                                        <div class="p-4 flex gap-3 item-center justify-between bg-pink-600 rounded-md">
                                            <div>
                                                <h4 class="font-medium !text-white"> Building </h4>
                                                <p  class="font-medium !text-white/80 text-sm mt-1"> 16 product </p>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white shrink-0">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                                              </svg>
                                              
                                        </div>
                                    </li>
                                </ul>
         
                                <!-- slide nav -->
                                <div class="max-md:hidden">
        
                                    <button type="button" class="absolute -translate-y-1/2 bg-white shadow rounded-full top-1/2 -left-3.5 grid w-8 h-8 place-items-center dark:bg-dark3" uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon></button>
                                    <button type="button" class="absolute -right-2 -translate-y-1/2 bg-white shadow rounded-full top-1/2 grid w-8 h-8 place-items-center dark:bg-dark3" uk-slider-item="next"> <ion-icon name="chevron-forward" class="text-2xl"></ion-icon> </button>
        
                                </div>
                                
                                <!-- slide nav dots-->
                                <div class="flex justify-center">
                                    <ul class="inline-flex flex-wrap justify-center my-5 gap-2 uk-dotnav uk-slider-nav"> </ul>
                                </div>
        
                            </div>
                            
                        </div>
        
                        <!-- Products title -->
                        <div class="sm:my-6 my-3 flex items-center justify-between border-t pt-3 dark:border-slate-800">
                            <div>
                                <h2 class="text-xl font-semibold text-black"> Products </h2>
                                <p class="font-normal text-sm text-gray-500 leading-6 hidden"> Find a group by browsing top categories. </p>
                            </div>
                            <a href="#" class="text-blue-500 sm:block hidden text-sm"> See all </a>
                        </div>
        
                        <!-- list products -->
                        <div class="grid sm:grid-cols-3 grid-cols-2 gap-3" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
                            
                            <div class="card uk-transition-toggle">
                                <a href="{{route('product-view-1')}}">
                                    <div class="card-media sm:aspect-[2/1.7] h-36">
                                        <img src="{{asset('front')}}/images/product/product-10.jpg" alt="">
                                        <div class="card-overly"></div> 
                                    </div> 
                                </a>
                                <div class="card-body flex justify-between">
                                    <div class="flex-1">
                                        <p class="card-text text-black font-medium line-clamp-1"> Herbel </p>
                                        <div class="text-xs line-clamp-1 mt-1"> Herbal Shampoo </div>
                                    </div>
                                    <h4 class="card-title"> 19$ </h4>
                                </div>  
                                <div class="absolute w-full bottom-0 bg-white/20 backdrop-blur-sm uk-transition-slide-bottom-small max-xl:h-full z-[2] flex flex-col justify-center">
                                    <div class="flex gap-3 py-4 px-3">
                                        <button type="button" class="button bg-primary text-white flex-1">Chat</button>
                                        <button type="button" class="button border bg-white !w-auto">Veiw</button>
                                    </div>
                                </div> 
                            </div>
                            <div class="card uk-transition-toggle">
                                <a href="{{route('product-view-1')}}">
                                    <div class="card-media sm:aspect-[2/1.7] h-36">
                                        <img src="{{asset('front')}}/images/product/product-8.jpg" alt="">
                                        <div class="card-overly"></div> 
                                    </div> 
                                </a>
                                <div class="card-body flex justify-between">
                                    <div class="flex-1">
                                        <p class="card-text text-black font-medium line-clamp-1">   Parfum  </p>
                                        <div class="text-xs line-clamp-1 mt-1">  Parfum Spray </div>
                                    </div>
                                    <h4 class="card-title"> 20$ </h4>
                                </div> 
                                <div class="absolute w-full bottom-0 bg-white/20 backdrop-blur-sm uk-transition-slide-bottom-small max-xl:h-full z-[2] flex flex-col justify-center">
                                    <div class="flex gap-3 py-4 px-3">
                                        <button type="button" class="button bg-primary text-white flex-1">Chat</button>
                                        <button type="button" class="button border bg-white !w-auto">Veiw</button>
                                    </div>
                                </div> 
                            </div>
                            <div class="card uk-transition-toggle">
                                <a href="{{route('product-view-1')}}">
                                    <div class="card-media sm:aspect-[2/1.7] h-36">
                                        <img src="{{asset('front')}}/images/product/product-9.jpg" alt="">
                                        <div class="card-overly"></div> 
                                    </div> 
                                </a>
                                <div class="card-body flex justify-between">
                                    <div class="flex-1">
                                        <p class="card-text text-black font-medium line-clamp-1">  Furniture</p>
                                        <div class="text-xs line-clamp-1 mt-1">   Wood Chair  </div>
                                    </div>
                                    <h4 class="card-title"> 34$ </h4>
                                </div> 
                                <div class="absolute w-full bottom-0 bg-white/20 backdrop-blur-sm uk-transition-slide-bottom-small max-xl:h-full z-[2] flex flex-col justify-center">
                                    <div class="flex gap-3 py-4 px-3">
                                        <button type="button" class="button bg-primary text-white flex-1">Chat</button>
                                        <button type="button" class="button border bg-white !w-auto">Veiw</button>
                                    </div>
                                </div> 
                            </div>
                            <div class="card uk-transition-toggle">
                                <a href="{{route('product-view-1')}}">
                                    <div class="card-media sm:aspect-[2/1.7] h-36">
                                        <img src="{{asset('front')}}/images/product/product-3.jpg" alt="">
                                        <div class="card-overly"></div> 
                                    </div> 
                                </a>
                                <div class="card-body flex justify-between">
                                    <div class="flex-1">
                                        <p class="card-text text-black font-medium line-clamp-1">  Electronic </p>
                                        <div class="text-xs line-clamp-1 mt-1">  Gaming Mouse </div>
                                    </div>
                                    <h4 class="card-title"> 26$ </h4>
                                </div> 
                                <div class="absolute w-full bottom-0 bg-white/20 backdrop-blur-sm uk-transition-slide-bottom-small max-xl:h-full z-[2] flex flex-col justify-center">
                                    <div class="flex gap-3 py-4 px-3">
                                        <button type="button" class="button bg-primary text-white flex-1">Chat</button>
                                        <button type="button" class="button border bg-white !w-auto">Veiw</button>
                                    </div>
                                </div> 
                            </div>
                            <div class="card uk-transition-toggle">
                                <a href="{{route('product-view-1')}}">
                                    <div class="card-media sm:aspect-[2/1.7] h-36">
                                        <img src="{{asset('front')}}/images/product/product-1.jpg" alt="">
                                        <div class="card-overly"></div> 
                                    </div> 
                                </a>
                                <div class="card-body flex justify-between">
                                    <div class="flex-1">
                                        <p class="card-text text-black font-medium line-clamp-1">  Shampo </p>
                                        <div class="text-xs line-clamp-1 mt-1">  Deep Cleanse </div>
                                    </div>
                                    <h4 class="card-title"> 12$ </h4>
                                </div> 
                                <div class="absolute w-full bottom-0 bg-white/20 backdrop-blur-sm uk-transition-slide-bottom-small max-xl:h-full z-[2] flex flex-col justify-center">
                                    <div class="flex gap-3 py-4 px-3">
                                        <button type="button" class="button bg-primary text-white flex-1">Chat</button>
                                        <button type="button" class="button border bg-white !w-auto">Veiw</button>
                                    </div>
                                </div> 
                            </div>
                            <div class="card uk-transition-toggle">
                                <a href="{{route('product-view-1')}}">
                                    <div class="card-media sm:aspect-[2/1.7] h-36">
                                        <img src="{{asset('front')}}/images/product/product-10.jpg" alt="">
                                        <div class="card-overly"></div> 
                                    </div> 
                                </a>
                                <div class="card-body flex justify-between">
                                    <div class="flex-1">
                                        <p class="card-text text-black font-medium line-clamp-1"> Herbel </p>
                                        <div class="text-xs line-clamp-1 mt-1"> Herbal Shampoo </div>
                                    </div>
                                    <h4 class="card-title"> 19$ </h4>
                                </div> 
                                <div class="absolute w-full bottom-0 bg-white/20 backdrop-blur-sm uk-transition-slide-bottom-small max-xl:h-full z-[2] flex flex-col justify-center">
                                    <div class="flex gap-3 py-4 px-3">
                                        <button type="button" class="button bg-primary text-white flex-1">Chat</button>
                                        <button type="button" class="button border bg-white !w-auto">Veiw</button>
                                    </div>
                                </div> 
                            </div>
        
                        </div>
    
                        <div class="flex justify-center my-6">
                            <button type="button" class="bg-white py-2 px-5 rounded-full shadow-md font-semibold text-sm dark:bg-dark2">Load more...</button>
                        </div>

                    </div>

     
                </div>
    
                <!-- sidebar -->
                <div class="2xl:w-[380px] lg:w-[330px] w-full">
    
                    <div  class="lg:space-y-6 space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6" 
                          uk-sticky="media: 1024; end: #js-oversized; offset: 80">

                    <!-- peaple you might know -->
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


    

    <!-- create new product button -->
    <button type="button" class="fixed bottom-0 right-0 m-10" uk-toggle="target: #create_product" uk-tooltip="title:Add Product ; offset:10">
        <div class="flex items-center justify-center w-12 h-12 bg-gradient-to-br from-sky-400 to-sky-600 rounded-full">
            <ion-icon name="add-outline" class="text-white text-3xl"></ion-icon>
        </div>
    </button>
