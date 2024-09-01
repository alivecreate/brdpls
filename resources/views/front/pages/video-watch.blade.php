@extends('front.layout.main-layout')

@section('content')




   <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

      <div class="lg:flex 2xl:gap-8 gap-6 2xl:max-w-[1220px] max-w-[1065px] mx-auto lg:mt-2 mt-6" id="js-oversized">

         <div class="flex-1">
               
            <!--  post image-->
            <div class="bg-white rounded-xl shadow-sm text-sm font-medium border1 dark:bg-dark2">
                  
               <!-- video player -->
                  <div class="videoFrame" uk-sticky="cls-active: sticked uk-animation-scale-up; media: 992; top:600">
                     <iframe src="https://www.youtube.com/embed/0fYi8SGA20k" class="w-full rounded-t-md aspect-video" uk-video="autoplay: inview"></iframe>

                     <!-- close button after stiky -->
                     <button type="button" id="closebtn" class="hidden" uk-toggle="target:.videoFrame ; cls: hide"> <ion-icon name="close"></ion-icon> </button>
                  </div>
                  
                  <!-- post heading -->
                  <div class="flex gap-3 sm:p-4 p-2.5 text-sm font-medium">
                     <a href="{{route('timeline')}}"> <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="w-9 h-9 rounded-full"> </a>  
                     <div class="flex-1">
                        <a href="{{route('timeline')}}"> <h4 class="text-black dark:text-white"> Monroe Parker </h4> </a>  
                        <div class="text-xs text-gray-500 dark:text-white/80"> 2 hours ago</div>
                     </div>
                     <div class="-mr-1">
                        <button type="button" class="button-icon w-8 h-8"> <ion-icon class="text-xl" name="ellipsis-horizontal"></ion-icon> </button>
                        <div  class="w-[245px]" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click"> 
                              <nav> 
                                 <a href="#"> <ion-icon class="text-xl shrink-0" name="bookmark-outline"></ion-icon>  Add to favorites </a>  
                                 <a href="#"> <ion-icon class="text-xl shrink-0" name="notifications-off-outline"></ion-icon> Mute Notification </a>  
                                 <a href="#"> <ion-icon class="text-xl shrink-0" name="flag-outline"></ion-icon>  Report this post </a>  
                                 <a href="#"> <ion-icon class="text-xl shrink-0" name="share-outline"></ion-icon>  Share your profile </a>  
                                 <hr>
                                 <a href="#" class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50"> <ion-icon class="text-xl shrink-0" name="stop-circle-outline"></ion-icon>  Unfollow </a>  
                              </nav>
                        </div>
                     </div>
                  </div>

                  <p class="font-normal text-sm leading-6 px-6"> Photography is the art of capturing light with a camera. It can be used to create images that tell stories, express emotions, or document reality. it can be fun, challenging, or rewarding. It can also be a hobby, a profession, or a passion. 📷 </p>
                  
                  <!-- post icons -->
                  <div class="sm:p-4 p-2.5 flex items-center gap-4 text-xs font-semibold">
                     <div>
                        <div class="flex items-center gap-2.5">
                              <button type="button" class="button-icon text-red-500 bg-red-100 dark:bg-slate-700"> <ion-icon class="text-lg" name="heart"></ion-icon> </button>
                              <a href="#">1,300</a>
                        </div>
                        <div    class="p-1 px-2 bg-white rounded-full drop-shadow-md w-[212px] dark:bg-slate-700 text-2xl"
                                 uk-drop="offset:10;pos: top-left; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-bottom-left"> 
                              
                              <div class="flex gap-2"  uk-scrollspy="target: > button; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
                                 <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> 👍 </span></button>
                                 <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> ❤️ </span></button>
                                 <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> 😂 </span></button>
                                 <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> 😯 </span></button>
                                 <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> 😢 </span></button>
                              </div>
                              
                              <div class="w-2.5 h-2.5 absolute -bottom-1 left-3 bg-white rotate-45 hidden"></div>
                        </div>
                     </div>
                     <div class="flex items-center gap-3">
                        <button type="button" class="button-icon bg-slate-200/70 dark:bg-slate-700"> <ion-icon class="text-lg" name="chatbubble-ellipses"></ion-icon> </button>
                        <span>260</span>
                     </div>
                     <button type="button" class="button-icon ml-auto"> <ion-icon class="text-xl" name="paper-plane-outline"></ion-icon> </button>
                     <button type="button" class="button-icon"> <ion-icon class="text-xl" name="share-outline"></ion-icon> </button>
                  </div>

                  <!-- comments -->
                  <div class="sm:p-6 p-2.5 border-t border-gray-100 font-normal space-y-3 relative dark:border-slate-700/40"> 
            
                     <div class="flex items-start gap-3 relative">
                        <a href="{{route('timeline')}}"> <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                        <div class="flex-1">
                              <a href="{{route('timeline')}}" class="text-black font-medium inline-block dark:text-white"> Monroe Parker </a>
                              <p class="mt-0.5">What a beautiful photo! I love it. 😍 </p>
                        </div>
                     </div>
                     <div class="flex items-start gap-3 relative">
                        <a href="{{route('timeline')}}"> <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                        <div class="flex-1">
                              <a href="{{route('timeline')}}" class="text-black font-medium inline-block dark:text-white"> John Michael </a>
                              <p class="mt-0.5">   You captured the moment.😎 </p>
                        </div>
                     </div>
                     <div class="flex items-start gap-3 relative">
                        <a href="{{route('timeline')}}"> <img src="{{asset('front')}}/images/avatars/avatar-5.jpg" alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                        <div class="flex-1">
                              <a href="{{route('timeline')}}" class="text-black font-medium inline-block dark:text-white"> James Lewis </a>
                              <p class="mt-0.5">What a beautiful photo! I love it. 😍 </p>
                        </div>
                     </div>
                     <div class="flex items-start gap-3 relative">
                        <a href="{{route('timeline')}}"> <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                        <div class="flex-1">
                              <a href="{{route('timeline')}}" class="text-black font-medium inline-block dark:text-white"> Martin Gray </a>
                              <p class="mt-0.5">   You captured the moment.😎 </p>
                        </div>
                     </div>

                     <button type="button" class="flex items-center gap-1.5   text-blue-500 mt-2">
                        <ion-icon name="chevron-down-outline" class="ml-auto duration-200 group-aria-expanded:rotate-180"></ion-icon>
                        More Comment
                     </button>

                  </div>

                  <!-- add comment -->
                  <div class="sm:px-4 sm:py-3 p-2.5 border-t border-gray-100 flex items-center gap-1 dark:border-slate-700/40">
                     
                     <img src="{{asset('front')}}/images/avatars/avatar-7.jpg" alt="" class="w-6 h-6 rounded-full">
                     
                     <div class="flex-1 relative overflow-hidden h-10">
                        <textarea placeholder="Add Comment...." rows="1" class="w-full resize-none !bg-transparent px-4 py-2 focus:!border-transparent focus:!ring-transparent"></textarea>

                        <div class="!top-2 pr-2" uk-drop="pos: bottom-right; mode: click">
                              <div class="flex items-center gap-2" uk-scrollspy="target: > svg; cls: uk-animation-slide-right-small; delay: 100 ;repeat: true">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 fill-sky-600">
                                    <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                 </svg>
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-pink-600">
                                    <path d="M3.25 4A2.25 2.25 0 001 6.25v7.5A2.25 2.25 0 003.25 16h7.5A2.25 2.25 0 0013 13.75v-7.5A2.25 2.25 0 0010.75 4h-7.5zM19 4.75a.75.75 0 00-1.28-.53l-3 3a.75.75 0 00-.22.53v4.5c0 .199.079.39.22.53l3 3a.75.75 0 001.28-.53V4.75z" />
                                 </svg>
                              </div>
                        </div>
                        

                     </div>
                     

                     <button type="submit" class="text-sm rounded-full py-1.5 px-3.5 bg-secondery"> Replay</button>
                  </div> 

            </div>

            <br><br>

         </div>

         <!-- sidebar -->
         <div class="2xl:w-[400px] lg:w-[350px] w-full">

            <div  class="lg:space-y-6 space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6" 
                  uk-sticky="media: 1024; end: #js-oversized; offset: 80">

                  <!-- peaple you might know -->
                  <div class="box p-5 pr-2">

                     <div class="flex items-baseline justify-between text-black dark:text-white">
                        <h3 class="font-bold text-base"> Related Videos </h3>
                     </div>

                     <!-- Video list -->
                     <div class="mt-3 space-y-4">

                        <!-- single video -->
                        <div class="relative flex lg:flex-row flex-col gap-2.5">

                              <!-- video thumbal -->
                              <div class="relative lg:w-[130px] lg:h-[80px] aspect-[3/1.5] overflow-hidden rounded-lg shrink-0">
                                 <img class="object-cover w-full h-full" src="{{asset('front')}}/images/video/img-2.png" alt="">
                                 <!-- iconplay -->
                                 <img src="{{asset('front')}}/images/icon-play.svg" class="w-6 h-6 absolute !top-1/2 !left-1/2 -translate-x-1/2 -translate-y-1/2" alt="">
                                 <!-- timer -->
                                 <div class="absolute bottom-1 right-1 bg-black/70 font-normal rounded px-0.5 py-0.5 text-xs text-white"> 10:32</div>
                              </div>

                              <!-- video contents -->
                              <div class="flex-1">
                                 <a href="#"> <h3 class="text-sm font-semibold line-clamp-2 mb-1.5"> Great drone jet testing range flat model show with advance </h3></a>
                                 <div class="text-xs">
                                    <a href="#" class="flex items-center gap-1 mb-0.5"> John Michael  <ion-icon name="checkmark-circle" class="dark:text-white md hydrated" role="img" aria-label="checkmark circle"></ion-icon></a>
                                    <div class="flex items-center gap-2"> <div>  260K views </div> <div> 1 days ago</div> </div>
                                 </div>
                              </div> 

                        </div>

                        <!-- single video -->
                        <div class="relative flex lg:flex-row flex-col gap-2.5">

                              <!-- video thumbal -->
                              <div class="relative lg:w-[130px] lg:h-[80px] aspect-[3/1.5] overflow-hidden rounded-lg shrink-0">
                                 <img class="object-cover w-full h-full" src="{{asset('front')}}/images/video/img-3.png" alt="">
                                 <!-- iconplay -->
                                 <img src="{{asset('front')}}/images/icon-play.svg" class="w-6 h-6 absolute !top-1/2 !left-1/2 -translate-x-1/2 -translate-y-1/2" alt="">
                                 <!-- timer -->
                                 <div class="absolute bottom-1 right-1 bg-black/70 font-normal rounded px-0.5 py-0.5 text-xs text-white"> 10:32</div>
                              </div>

                              <!-- video contents -->
                              <div class="flex-1">
                                 <a href="#"> <h3 class="text-sm font-semibold line-clamp-2 mb-1.5"> Exploring latest an abandoned water park in china city </h3></a>
                                 <div class="text-xs">
                                    <a href="#" class="flex items-center gap-1 mb-0.5"> John Michael  <ion-icon name="checkmark-circle" class="dark:text-white md hydrated" role="img" aria-label="checkmark circle"></ion-icon></a>
                                    <div class="flex items-center gap-2"> <div>  260K views </div> <div> 1 days ago</div> </div>
                                 </div>
                              </div> 

                        </div>

                        <!-- single video -->
                        <div class="relative flex lg:flex-row flex-col gap-2.5">

                              <!-- video thumbal -->
                              <div class="relative lg:w-[130px] lg:h-[80px] aspect-[3/1.5] overflow-hidden rounded-lg shrink-0">
                                 <img class="object-cover w-full h-full" src="{{asset('front')}}/images/video/img-4.png" alt="">
                                 <!-- iconplay -->
                                 <img src="{{asset('front')}}/images/icon-play.svg" class="w-6 h-6 absolute !top-1/2 !left-1/2 -translate-x-1/2 -translate-y-1/2" alt="">
                                 <!-- timer -->
                                 <div class="absolute bottom-1 right-1 bg-black/70 font-normal rounded px-0.5 py-0.5 text-xs text-white"> 10:32</div>
                              </div>

                              <!-- video contents -->
                              <div class="flex-1">
                                 <a href="#"> <h3 class="text-sm font-semibold line-clamp-2 mb-1.5">  cheese cake eggless without oven hida mari cooking </h3></a>
                                 <div class="text-xs">
                                    <a href="#" class="flex items-center gap-1 mb-0.5"> John Michael  <ion-icon name="checkmark-circle" class="dark:text-white md hydrated" role="img" aria-label="checkmark circle"></ion-icon></a>
                                    <div class="flex items-center gap-2"> <div>  260K views </div> <div> 1 days ago</div> </div>
                                 </div>
                              </div> 

                        </div>

                        <!-- single video -->
                        <div class="relative flex lg:flex-row flex-col gap-2.5">

                              <!-- video thumbal -->
                              <div class="relative lg:w-[130px] lg:h-[80px] aspect-[3/1.5] overflow-hidden rounded-lg shrink-0">
                                 <img class="object-cover w-full h-full" src="{{asset('front')}}/images/video/img-5.png" alt="">
                                 <!-- iconplay -->
                                 <img src="{{asset('front')}}/images/icon-play.svg" class="w-6 h-6 absolute !top-1/2 !left-1/2 -translate-x-1/2 -translate-y-1/2" alt="">
                                 <!-- timer -->
                                 <div class="absolute bottom-1 right-1 bg-black/70 font-normal rounded px-0.5 py-0.5 text-xs text-white"> 10:32</div>
                              </div>

                              <!-- video contents -->
                              <div class="flex-1">
                                 <a href="#"> <h3 class="text-sm font-semibold line-clamp-2 mb-1.5">  Amazing little girl has very talent voice vocal coach </h3></a>
                                 <div class="text-xs">
                                    <a href="#" class="flex items-center gap-1 mb-0.5"> John Michael  <ion-icon name="checkmark-circle" class="dark:text-white md hydrated" role="img" aria-label="checkmark circle"></ion-icon></a>
                                    <div class="flex items-center gap-2"> <div>  260K views </div> <div> 1 days ago</div> </div>
                                 </div>
                              </div> 

                        </div>

                        <!-- single video -->
                        <div class="relative flex lg:flex-row flex-col gap-2.5">

                              <!-- video thumbal -->
                              <div class="relative lg:w-[130px] lg:h-[80px] aspect-[3/1.5] overflow-hidden rounded-lg shrink-0">
                                 <img class="object-cover w-full h-full" src="{{asset('front')}}/images/video/img-1.png" alt="">
                                 <!-- iconplay -->
                                 <img src="{{asset('front')}}/images/icon-play.svg" class="w-6 h-6 absolute !top-1/2 !left-1/2 -translate-x-1/2 -translate-y-1/2" alt="">
                                 <!-- timer -->
                                 <div class="absolute bottom-1 right-1 bg-black/70 font-normal rounded px-0.5 py-0.5 text-xs text-white"> 10:32</div>
                              </div>

                              <!-- video contents -->
                              <div class="flex-1">
                                 <a href="#"> <h3 class="text-sm font-semibold line-clamp-2 mb-1.5">  Amazing house construction from foundation to last detail </h3></a>
                                 <div class="text-xs">
                                    <a href="#" class="flex items-center gap-1 mb-0.5"> John Michael  <ion-icon name="checkmark-circle" class="dark:text-white md hydrated" role="img" aria-label="checkmark circle"></ion-icon></a>
                                    <div class="flex items-center gap-2"> <div>  260K views </div> <div> 1 days ago</div> </div>
                                 </div>
                              </div> 

                        </div>

                        <!-- single video -->
                        <div class="relative flex lg:flex-row flex-col gap-2.5">

                              <!-- video thumbal -->
                              <div class="relative lg:w-[130px] lg:h-[80px] aspect-[3/1.5] overflow-hidden rounded-lg shrink-0">
                                 <img class="object-cover w-full h-full" src="{{asset('front')}}/images/video/img-2.png" alt="">
                                 <!-- iconplay -->
                                 <img src="{{asset('front')}}/images/icon-play.svg" class="w-6 h-6 absolute !top-1/2 !left-1/2 -translate-x-1/2 -translate-y-1/2" alt="">
                                 <!-- timer -->
                                 <div class="absolute bottom-1 right-1 bg-black/70 font-normal rounded px-0.5 py-0.5 text-xs text-white"> 10:32</div>
                              </div>

                              <!-- video contents -->
                              <div class="flex-1">
                                 <a href="#"> <h3 class="text-sm font-semibold line-clamp-2 mb-1.5"> Great drone jet testing range flat model show with advance </h3></a>
                                 <div class="text-xs">
                                    <a href="#" class="flex items-center gap-1 mb-0.5"> John Michael  <ion-icon name="checkmark-circle" class="dark:text-white md hydrated" role="img" aria-label="checkmark circle"></ion-icon></a>
                                    <div class="flex items-center gap-2"> <div>  260K views </div> <div> 1 days ago</div> </div>
                                 </div>
                              </div> 

                        </div>

                        <!-- single video -->
                        <div class="relative flex lg:flex-row flex-col gap-2.5">

                              <!-- video thumbal -->
                              <div class="relative lg:w-[130px] lg:h-[80px] aspect-[3/1.5] overflow-hidden rounded-lg shrink-0">
                                 <img class="object-cover w-full h-full" src="{{asset('front')}}/images/video/img-3.png" alt="">
                                 <!-- iconplay -->
                                 <img src="{{asset('front')}}/images/icon-play.svg" class="w-6 h-6 absolute !top-1/2 !left-1/2 -translate-x-1/2 -translate-y-1/2" alt="">
                                 <!-- timer -->
                                 <div class="absolute bottom-1 right-1 bg-black/70 font-normal rounded px-0.5 py-0.5 text-xs text-white"> 10:32</div>
                              </div>

                              <!-- video contents -->
                              <div class="flex-1">
                                 <a href="#"> <h3 class="text-sm font-semibold line-clamp-2 mb-1.5"> Exploring latest an abandoned water park in china city </h3></a>
                                 <div class="text-xs">
                                    <a href="#" class="flex items-center gap-1 mb-0.5"> John Michael  <ion-icon name="checkmark-circle" class="dark:text-white md hydrated" role="img" aria-label="checkmark circle"></ion-icon></a>
                                    <div class="flex items-center gap-2"> <div>  260K views </div> <div> 1 days ago</div> </div>
                                 </div>
                              </div> 

                        </div>
                        

                     </div>

                  </div>


            </div>

         </div>
         
      </div>

   </main>




@endsection

@include('front.widget.chat-box')


   @include('front.widget.video-watch-block')
