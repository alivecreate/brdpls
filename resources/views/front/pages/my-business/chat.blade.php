@extends('front.layout.my-business-layout')
@section('custom-script')

<script>
$(document).ready(function() {
    $('.mybusiness').addClass('active');
    $('.uk-parent').addClass('uk-open');
    $('.uk-parent ul').removeAttr('hidden');
});
</script>
@endsection

@section('content')

<!-- main contents -->

<main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))]">

    <div class="relative overflow-hidden border -m-2.5 dark:border-slate-700">

        <div class="flex bg-white dark:bg-dark2">

            <!-- sidebar -->
            <div class="md:w-[360px] relative border-r dark:border-slate-700">

                <div id="side-chat" class="top-0 left-0 max-md:fixed max-md:w-5/6 max-md:h-screen bg-white z-50 max-md:shadow max-md:-translate-x-full dark:bg-dark2">

                    <!-- heading title -->
                    <div class="p-4 border-b dark:border-slate-700">
                        
                        <div class="flex mt-2 items-center justify-between">
                            
                            <h2 class="text-2xl font-bold text-black ml-1 dark:text-white"> inquiries </h1>
                                
                            <!-- right action buttons -->
                            <div class="flex items-center gap-2.5">

                                
                                <button class="group">
                                    <ion-icon name="settings-outline" class="text-2xl flex group-aria-expanded:rotate-180"></ion-icon>
                                </button>
                                <div  class="md:w-[270px] w-full" uk-dropdown="pos: bottom-left; offset:10; animation: uk-animation-slide-bottom-small"> 
                                    <nav>
                                        <a href="#"> <ion-icon class="text-2xl shrink-0 -ml-1" name="checkmark-outline"></ion-icon> Mark all as read </a>  
                                        <a href="#"> <ion-icon class="text-2xl shrink-0 -ml-1" name="notifications-outline"></ion-icon> notifications setting </a>  
                                        <a href="#"> <ion-icon class="text-xl shrink-0 -ml-1" name="volume-mute-outline"></ion-icon> Mute notifications </a>     
                                    </nav>
                                </div>
                                
                                <button class="">
                                    <ion-icon name="checkmark-circle-outline" class="text-2xl flex"></ion-icon>
                                </button>

                                <!-- mobile toggle menu -->
                                <button type="button" class="md:hidden" uk-toggle="target: #side-chat ; cls: max-md:-translate-x-full">
                                    <ion-icon name="chevron-down-outline"></ion-icon>
                                </button>

                            </div>

                        </div>

                        <!-- search -->
                        <div class="relative mt-4">
                            <div class="absolute left-3 bottom-1/2 translate-y-1/2 flex"><ion-icon name="search" class="text-xl"></ion-icon></div>
                            <input type="text" placeholder="Search" class="w-full !pl-10 !py-2 !rounded-lg">
                        </div> 

                    </div> 


                    <!-- users list -->
                    <div class="space-y-2 p-2 overflow-y-auto md:h-[calc(100vh-204px)] h-[calc(100vh-130px)]">

                        <a href="#" class="relative flex items-center gap-4 p-2 duration-200 rounded-xl hover:bg-secondery">
                            <div class="relative w-14 h-14 shrink-0"> 
                                <img src="{{asset('front')}}/images/avatars/avatar-5.jpg" alt="" class="object-cover w-full h-full rounded-full">
                                <div class="w-4 h-4 absolute bottom-0 right-0  bg-green-500 rounded-full border border-white dark:border-slate-800"></div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-2 mb-1.5">
                                    <div class="mr-auto text-sm text-black dark:text-white font-medium">Jesse Steeve</div>
                                    <div class="text-xs font-light text-gray-500 dark:text-white/70">09:40AM</div> 
                                </div>
                                <div class="font-medium overflow-hidden text-ellipsis text-sm whitespace-nowrap">Love your photos 😍</div>
                            </div>
                        </a>
                        <a href="{{route('messages')}}" class="relative flex items-center gap-4 p-2 duration-200 rounded-xl hover:bg-secondery">
                            <div class="relative w-14 h-14 shrink-0"> 
                                <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="object-cover w-full h-full rounded-full">
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-2 mb-1.5">
                                    <div class="mr-auto text-sm text-black dark:text-white font-medium">Martin Gray</div>
                                    <div class="text-xs font-light text-gray-500 dark:text-white/70">09:40AM</div>
                                    <div class="w-2.5 h-2.5 bg-blue-600 rounded-full dark:bg-slate-700"></div>
                                </div>
                                <div class="font-medium overflow-hidden text-ellipsis text-sm whitespace-nowrap">Photo editor needed. Fix photos? 🛠️</div>
                            </div>
                        </a>
                        <a href="#" class="relative flex items-center gap-4 p-2 duration-200 rounded-xl hover:bg-secondery">
                            <div class="relative w-14 h-14 shrink-0"> 
                                <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="object-cover w-full h-full rounded-full">
                                <div class="w-4 h-4 absolute bottom-0 right-0  bg-green-500 rounded-full border border-white dark:border-slate-800"></div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-2 mb-1.5">
                                    <div class="mr-auto text-sm text-black dark:text-white font-medium">Monroe Parker</div>
                                    <div class="text-xs font-light text-gray-500 dark:text-white/70">09:40AM</div> 
                                </div>
                                <div class="font-medium overflow-hidden text-ellipsis text-sm whitespace-nowrap">Can i call you to day?</div>
                            </div>
                        </a>
                        <a href="#" class="relative flex items-center gap-4 p-2 duration-200 rounded-xl hover:bg-secondery">
                            <div class="relative w-14 h-14 shrink-0"> 
                                <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="" class="object-cover w-full h-full rounded-full">
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-2 mb-1.5">
                                    <div class="mr-auto text-sm text-black dark:text-white font-medium">James Lewis</div>
                                    <div class="text-xs font-light text-gray-500 dark:text-white/70">09:40AM</div> 
                                </div>
                                <div class="font-medium overflow-hidden text-ellipsis text-sm whitespace-nowrap"> Want to buy landscape photo? 🌄 </div>
                            </div>
                        </a>

                        <a href="#" class="relative flex items-center gap-4 p-2 duration-200 rounded-xl hover:bg-secondery">
                            <div class="relative w-14 h-14 shrink-0"> 
                                <img src="{{asset('front')}}/images/avatars/avatar-5.jpg" alt="" class="object-cover w-full h-full rounded-full">
                                <div class="w-4 h-4 absolute bottom-0 right-0  bg-green-500 rounded-full border border-white dark:border-slate-800"></div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-2 mb-1.5">
                                    <div class="mr-auto text-sm text-black dark:text-white font-medium">Jesse Steeve</div>
                                    <div class="text-xs font-light text-gray-500 dark:text-white/70">09:40AM</div> 
                                </div>
                                <div class="font-medium overflow-hidden text-ellipsis text-sm whitespace-nowrap">Headshot needed. Resume. Do it? 👩‍💼</div>
                            </div>
                        </a>
                        <a href="#" class="relative flex items-center gap-4 p-2 duration-200 rounded-xl hover:bg-secondery">
                            <div class="relative w-14 h-14 shrink-0"> 
                                <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="object-cover w-full h-full rounded-full">
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-2 mb-1.5">
                                    <div class="mr-auto text-sm text-black dark:text-white font-medium">Martin Gray</div>
                                    <div class="text-xs font-light text-gray-500 dark:text-white/70">04:20PM</div>
                                    <div class="w-2.5 h-2.5 bg-blue-600 rounded-full dark:bg-slate-700"></div>
                                </div>
                                <div class="font-medium overflow-hidden text-ellipsis text-sm whitespace-nowrap">Online course interesting? 🎓</div>
                            </div>
                        </a>
                        <a href="#" class="relative flex items-center gap-4 p-2 duration-200 rounded-xl hover:bg-secondery">
                            <div class="relative w-14 h-14 shrink-0"> 
                                <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="object-cover w-full h-full rounded-full">
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-2 mb-1.5">
                                    <div class="mr-auto text-sm text-black dark:text-white font-medium">Monroe Parker</div>
                                    <div class="text-xs font-light text-gray-500 dark:text-white/70">09:40AM</div> 
                                </div>
                                <div class="font-medium overflow-hidden text-ellipsis text-sm whitespace-nowrap">I’m glad you like it.😊</div>
                            </div>
                        </a>
                        <a href="#" class="relative flex items-center gap-4 p-2 duration-200 rounded-xl hover:bg-secondery">
                            <div class="relative w-14 h-14 shrink-0"> 
                                <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="" class="object-cover w-full h-full rounded-full">
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-2 mb-1.5">
                                    <div class="mr-auto text-sm text-black dark:text-white font-medium">James Lewis</div>
                                    <div class="text-xs font-light text-gray-500 dark:text-white/70">01:10PM</div> 
                                </div>
                                <div class="font-medium overflow-hidden text-ellipsis text-sm whitespace-nowrap"> Product photographer wanted? 📷 </div>
                            </div>
                        </a> 
                        <a href="#" class="relative flex items-center gap-4 p-2 duration-200 rounded-xl hover:bg-secondery">
                            <div class="relative w-14 h-14 shrink-0"> 
                                <img src="{{asset('front')}}/images/avatars/avatar-5.jpg" alt="" class="object-cover w-full h-full rounded-full">
                                <div class="w-4 h-4 absolute bottom-0 right-0  bg-green-500 rounded-full border border-white dark:border-slate-800"></div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-2 mb-1.5">
                                    <div class="mr-auto text-sm text-black dark:text-white font-medium">Jesse Steeve</div>
                                    <div class="text-xs font-light text-gray-500 dark:text-white/70">09:40AM</div> 
                                </div>
                                <div class="font-medium overflow-hidden text-ellipsis text-sm whitespace-nowrap">Love your photos 😍</div>
                            </div>
                        </a>
                        <a href="#" class="relative flex items-center gap-4 p-2 duration-200 rounded-xl hover:bg-secondery">
                            <div class="relative w-14 h-14 shrink-0"> 
                                <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="object-cover w-full h-full rounded-full">
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-2 mb-1.5">
                                    <div class="mr-auto text-sm text-black dark:text-white font-medium">Martin Gray</div>
                                    <div class="text-xs font-light text-gray-500 dark:text-white/70">02:52PM</div> 
                                </div>
                                <div class="font-medium overflow-hidden text-ellipsis text-sm whitespace-nowrap">Photo editor needed. Fix photos? 🛠️</div>
                            </div>
                        </a>

                    </div>

                </div>
                
                <!-- overly -->
                <div id="side-chat" class="bg-slate-100/40 backdrop-blur w-full h-full dark:bg-slate-800/40 z-40 fixed inset-0 max-md:-translate-x-full md:hidden" uk-toggle="target: #side-chat ; cls: max-md:-translate-x-full"></div>
                
            </div> 

            <!-- message center -->
            <div class="flex-1">

                <!-- chat heading -->
                <div class="flex items-center justify-between gap-2 w- px-6 py-3.5 z-10 border-b dark:border-slate-700 uk-animation-slide-top-medium">
                
                    <div class="flex items-center sm:gap-4 gap-2">

                        <!-- toggle for mobile -->
                        <button type="button" class="md:hidden" uk-toggle="target: #side-chat ; cls: max-md:-translate-x-full">
                            <ion-icon name="chevron-back-outline" class="text-2xl -ml-4"></ion-icon>
                        </button>
                        
                        <div class="relative cursor-pointer max-md:hidden"  uk-toggle="target: .rightt ; cls: hidden">
                            <img src="{{asset('front')}}/images/avatars/avatar-6.jpg" alt="" class="w-8 h-8 rounded-full shadow">
                            <div class="w-2 h-2 bg-teal-500 rounded-full absolute right-0 bottom-0 m-px"></div>
                        </div>
                        <div class="cursor-pointer" uk-toggle="target: .rightt ; cls: hidden">
                            <div class="text-base font-bold"> Monroe Parker</div>
                            <div class="text-xs text-green-500 font-semibold"> Online</div>
                        </div>

                    </div>  

                    <div class="flex items-center gap-2">
                        <button type="button" class="button__ico">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <button type="button" class="hover:bg-slate-100 p-1.5 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </button> 
                        <button type="button" class="hover:bg-slate-100 p-1.5 rounded-full" uk-toggle="target: .rightt ; cls: hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                            </svg> 
                        </button> 
                    </div>
                
                </div>
                    
                <!-- chats bubble -->
                <div class="w-full p-5 overflow-y-auto md:h-[calc(100vh-204px)] h-[calc(100vh-195px)]">

                    <div class="py-10 text-center text-sm lg:pt-8">
                        <img src="{{asset('front')}}/images/avatars/avatar-6.jpg" class="w-24 h-24 rounded-full mx-auto mb-3" alt="">
                        <div class="mt-8">
                            <div class="md:text-xl text-base font-medium text-black dark:text-white"> Monroe Parker </div>
                            <div class="text-gray-500 text-sm   dark:text-white/80"> @Monroepark </div>
                        </div>
                        <div class="mt-3.5">
                            <a href="{{route('timeline')}}" class="inline-block rounded-lg px-4 py-1.5 text-sm font-semibold bg-secondery">View profile</a>
                        </div>
                    </div>

                    <div class="text-sm font-medium space-y-6">

                        <!-- received -->
                        <div class="flex gap-3">
                            <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="w-9 h-9 rounded-full shadow">
                            <div class="px-4 py-2 rounded-[20px] max-w-sm bg-secondery"> Hi, I’m John </div>
                        </div> 

                        <!-- sent -->
                        <div class="flex gap-2 flex-row-reverse items-end">
                            <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="w-5 h-5 rounded-full shadow">
                            <div class="px-4 py-2 rounded-[20px] max-w-sm bg-gradient-to-tr from-sky-500 to-blue-500 text-white shadow">  I’m Lisa. welcome John</div>
                        </div> 

                        <!-- time -->
                        <div class="flex justify-center "> 
                            <div class="font-medium text-gray-500 text-sm dark:text-white/70">
                                April 8,2023,6:30 AM  
                            </div> 
                        </div>

                        <!-- received -->
                        <div class="flex gap-3">
                            <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="w-9 h-9 rounded-full shadow">
                            <div class="px-4 py-2 rounded-[20px] max-w-sm bg-secondery">  I’m selling a photo of a sunset. It’s a print on canvas, signed by the photographer. Do you like it? 😊 </div>
                        </div> 

                        <!-- sent -->
                        <div class="flex gap-2 flex-row-reverse items-end">
                            <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="w-4 h-4 rounded-full shadow">
                            <div class="px-4 py-2 rounded-[20px] max-w-sm bg-gradient-to-tr from-sky-500 to-blue-500 text-white shadow">  Wow, it’s beautiful. How much ? 😍 </div>
                        </div> 

                        <!-- sent media-->
                        <div class="flex gap-2 flex-row-reverse items-end">
                            <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="w-4 h-4 rounded-full shadow">
                    
                            <a class="block rounded-[18px] border overflow-hidden" href="#">
                                <div class="max-w-md">
                                    <div class="max-w-full relative w-72">
                                        <div class="relative" style="padding-bottom: 57.4286%">
                                            <div class="w-full h-full absolute inset-0">
                                                <img src="{{asset('front')}}/images/product/product-2.jpg" alt="" class="block max-w-full max-h-52 w-full h-full object-cover">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div> 

                        <!-- time -->
                        <div class="flex justify-center "> 
                            <div class="font-medium text-gray-500 text-sm dark:text-white/70">
                                April 8,2023,6:30 AM  
                            </div> 
                        </div>


                        <!-- received -->
                        <div class="flex gap-3">
                            <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="w-9 h-9 rounded-full shadow">
                            <div class="px-4 py-2 rounded-[20px] max-w-sm bg-secondery"> I’m glad you like it. I’m asking for $200 🤑</div>
                        </div> 

                        <!-- sent -->
                        <div class="flex gap-2 flex-row-reverse items-end">
                            <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="w-5 h-5 rounded-full shadow">
                            <div class="px-4 py-2 rounded-[20px] max-w-sm bg-gradient-to-tr from-sky-500 to-blue-500 text-white shadow"> $200? Too steep. Can you lower the price a bit? 😕</div>
                        </div> 

                        <!-- received -->
                        <div class="flex gap-3">
                            <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="w-9 h-9 rounded-full shadow">
                            <div class="px-4 py-2 rounded-[20px] max-w-sm bg-secondery"> Well, I can’t go too low because I paid a lot. But I’m willing to negotiate. What’s your offer? 🤔 </div>

                        </div> 

                        <!-- sent --> 
                        <div class="flex gap-2 flex-row-reverse items-end">
                            <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="w-5 h-5 rounded-full shadow">
                            <div class="px-4 py-2 rounded-[20px] max-w-sm bg-gradient-to-tr from-sky-500 to-blue-500 text-white shadow"> Sorry, can’t pay more than $150. 😅</div>
                        </div> 

                        <!-- time -->
                        <div class="flex justify-center "> 
                            <div class="font-medium text-gray-500 text-sm dark:text-white/70">
                                April 8,2023,6:30 AM  
                            </div> 
                        </div>

                        <!-- received -->
                        <div class="flex gap-3">
                            <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="w-9 h-9 rounded-full shadow">
                            <div class="px-4 py-2 rounded-[20px] max-w-sm bg-secondery"> $150? Too low. Photo worth more.  😬</div>
                        </div> 

                        <!-- sent -->
                        <div class="flex gap-2 flex-row-reverse items-end">
                            <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="w-5 h-5 rounded-full shadow">
                            <div class="px-4 py-2 rounded-[20px] max-w-sm bg-gradient-to-tr from-sky-500 to-blue-500 text-white shadow"> Too high. I Can’t . How about $160? Final offer. 😬 </div>
                        </div> 

                        <!-- received -->
                        <div class="flex gap-3">
                            <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="w-9 h-9 rounded-full shadow">
                            <div class="px-4 py-2 rounded-[20px] max-w-sm bg-secondery"> Fine, fine. You’re hard to please. I’ll take $160, but only because I like you. 😍</div>
                        </div> 

                        <!-- sent -->
                        <div class="flex gap-2 flex-row-reverse items-end">
                            <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="w-5 h-5 rounded-full shadow">
                            <div class="px-4 py-2 rounded-[20px] max-w-sm bg-gradient-to-tr from-sky-500 to-blue-500 text-white shadow"> Great, thank you. I appreciate it. I love this photo and can’t wait to hang it. 😩 </div>
                        </div> 

                    </div>

                </div> 

                <!-- sending message area -->
                <div class="flex items-center md:gap-4 gap-2 md:p-3 p-2 overflow-hidden">

                    <div id="message__wrap" class="flex items-center gap-2 h-full dark:text-white -mt-1.5">
                        
                        <button type="button"  class="shrink-0">
                            <ion-icon class="text-3xl flex" name="add-circle-outline"></ion-icon>
                        </button>
                        <div class="dropbar pt-36 h-60 bg-gradient-to-t via-white from-white via-30% from-30% dark:from-slate-900 dark:via-900" uk-drop="stretch: x; target: #message__wrap ;animation:  slide-bottom ;animate-out: true; pos: top-left; offset:10 ; mode: click ; duration: 200">

                            <div class="sm:w-full p-3 flex justify-center gap-5" uk-scrollspy="target: > button; cls: uk-animation-slide-bottom-small; delay: 100;repeat:true">
                            
                                <button type="button" class="bg-sky-50 text-sky-600 border border-sky-100 shadow-sm p-2.5 rounded-full shrink-0 duration-100 hover:scale-[1.15] dark:bg-dark3 dark:border-0">
                                    <ion-icon class="text-3xl flex" name="image"></ion-icon>
                                </button>
                                <button type="button" class="bg-green-50 text-green-600 border border-green-100 shadow-sm p-2.5 rounded-full shrink-0 duration-100 hover:scale-[1.15] dark:bg-dark3 dark:border-0">
                                    <ion-icon class="text-3xl flex" name="images"></ion-icon>
                                </button>
                                <button type="button" class="bg-pink-50 text-pink-600 border border-pink-100 shadow-sm p-2.5 rounded-full shrink-0 duration-100 hover:scale-[1.15] dark:bg-dark3 dark:border-0">
                                    <ion-icon class="text-3xl flex" name="document-text"></ion-icon>
                                </button>
                                <button type="button" class="bg-orange-50 text-orange-600 border border-orange-100 shadow-sm p-2.5 rounded-full shrink-0 duration-100 hover:scale-[1.15] dark:bg-dark3 dark:border-0">
                                    <ion-icon class="text-3xl flex" name="gift"></ion-icon>
                                </button>


                            </div>
                            
                        </div>

                        <button type="button"  class="shrink-0">
                            <ion-icon class="text-3xl flex" name="happy-outline"></ion-icon>
                        </button>
                        <div class="dropbar p-2" uk-drop="stretch: x; target: #message__wrap ;animation: uk-animation-scale-up uk-transform-origin-bottom-left ;animate-out: true; pos: top-left ; offset:2; mode: click ; duration: 200 ">

                            <div class="sm:w-60 bg-white shadow-lg border rounded-xl  pr-0 dark:border-slate-700 dark:bg-dark3">

                                <h4 class="text-sm font-semibold p-3 pb-0">Send Imogi</h4>

                                <div class="grid grid-cols-5 overflow-y-auto max-h-44 p-3 text-center text-xl">

                                    <div class="hover:bg-secondery p-1.5 rounded-md hover:scale-125 cursor-pointer duration-200"> 😊 </div>
                                    <div class="hover:bg-secondery p-1.5 rounded-md hover:scale-125 cursor-pointer duration-200"> 🤩 </div>
                                    <div class="hover:bg-secondery p-1.5 rounded-md hover:scale-125 cursor-pointer duration-200"> 😎</div>
                                    <div class="hover:bg-secondery p-1.5 rounded-md hover:scale-125 cursor-pointer duration-200"> 🥳 </div>
                                    <div class="hover:bg-secondery p-1.5 rounded-md hover:scale-125 cursor-pointer duration-200"> 😂 </div>
                                    <div class="hover:bg-secondery p-1.5 rounded-md hover:scale-125 cursor-pointer duration-200"> 🥰 </div>
                                    <div class="hover:bg-secondery p-1.5 rounded-md hover:scale-125 cursor-pointer duration-200"> 😡 </div> 
                                    <div class="hover:bg-secondery p-1.5 rounded-md hover:scale-125 cursor-pointer duration-200"> 😊 </div>
                                    <div class="hover:bg-secondery p-1.5 rounded-md hover:scale-125 cursor-pointer duration-200"> 🤩 </div>
                                    <div class="hover:bg-secondery p-1.5 rounded-md hover:scale-125 cursor-pointer duration-200"> 😎</div>
                                    <div class="hover:bg-secondery p-1.5 rounded-md hover:scale-125 cursor-pointer duration-200"> 🥳 </div>
                                    <div class="hover:bg-secondery p-1.5 rounded-md hover:scale-125 cursor-pointer duration-200"> 😂 </div>
                                    <div class="hover:bg-secondery p-1.5 rounded-md hover:scale-125 cursor-pointer duration-200"> 🥰 </div>
                                    <div class="hover:bg-secondery p-1.5 rounded-md hover:scale-125 cursor-pointer duration-200"> 😡 </div>
                                    <div class="hover:bg-secondery p-1.5 rounded-md hover:scale-125 cursor-pointer duration-200"> 🤔 </div>
                                    <div class="hover:bg-secondery p-1.5 rounded-md hover:scale-125 cursor-pointer duration-200"> 😊 </div>
                                    <div class="hover:bg-secondery p-1.5 rounded-md hover:scale-125 cursor-pointer duration-200"> 🤩 </div>
                                    <div class="hover:bg-secondery p-1.5 rounded-md hover:scale-125 cursor-pointer duration-200"> 😎</div>
                                    <div class="hover:bg-secondery p-1.5 rounded-md hover:scale-125 cursor-pointer duration-200"> 🥳 </div>
                                    <div class="hover:bg-secondery p-1.5 rounded-md hover:scale-125 cursor-pointer duration-200"> 😂 </div>
                                
                                </div>
                                

                            </div>
                            
                        </div>

                    </div>
                    
                    <div class="relative flex-1">
                        <textarea placeholder="Write your message" rows="1" class="w-full resize-none bg-secondery rounded-full px-4 p-2"></textarea>
                    
                        <button type="button" class="text-white shrink-0 p-2 absolute right-0.5 top-0">
                            <ion-icon class="text-xl flex" name="send-outline"></ion-icon> 
                        </button>

                    </div>

                    <button type="button" class="flex h-full dark:text-white">
                        <ion-icon class="text-3xl flex -mt-3" name="heart-outline"></ion-icon> 
                    </button>

                </div>

            </div>

            <!-- user profile right info -->
            <div class="rightt w-full h-full absolute top-0 right-0 z-10 hidden transition-transform">
                <div class="w-[360px] border-l shadow-lg h-screen bg-white absolute right-0 top-0 uk-animation-slide-right-medium delay-200 z-50 dark:bg-dark2 dark:border-slate-700">

                    <div class="w-full h-1.5 bg-gradient-to-r to-purple-500 via-red-500 from-pink-500 -mt-px"></div>
                    
                    <div class="py-10 text-center text-sm pt-20">
                        <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" class="w-24 h-24 rounded-full mx-auto mb-3" alt="">
                        <div class="mt-8">
                            <div class="md:text-xl text-base font-medium text-black dark:text-white"> Monroe Parker  </div>
                            <div class="text-gray-500 text-sm mt-1 dark:text-white/80">@Monroepark</div>
                        </div>
                        <div class="mt-5">
                            <a href="{{route('timeline')}}" class="inline-block rounded-full px-4 py-1.5 text-sm font-semibold bg-secondery">View profile</a>
                        </div>
                    </div>

                    <hr class="opacity-80 dark:border-slate-700">

                    <ul class="text-base font-medium p-3">
                        <li> 
                            <div class="flex items-center gap-5 rounded-md p-3 w-full hover:bg-secondery"> 
                                <ion-icon name="notifications-off-outline" class="text-2xl"></ion-icon> Mute Notification     
                                <label class="switch cursor-pointer ml-auto"> <input type="checkbox" checked><span class="switch-button !relative"></span></label>
                            </div>
                        </li>
                        <li> <button type="button" class="flex items-center gap-5 rounded-md p-3 w-full hover:bg-secondery"> <ion-icon name="flag-outline" class="text-2xl"></ion-icon> Report     </button></li>
                        <li> <button type="button" class="flex items-center gap-5 rounded-md p-3 w-full hover:bg-secondery"> <ion-icon name="settings-outline" class="text-2xl"></ion-icon> Ignore messages   </button> </li>
                        <li> <button type="button" class="flex items-center gap-5 rounded-md p-3 w-full hover:bg-secondery"> <ion-icon name="stop-circle-outline" class="text-2xl"></ion-icon> Block    </button> </li>
                        <li> <button type="button" class="flex items-center gap-5 rounded-md p-3 w-full hover:bg-red-50 text-red-500"> <ion-icon name="trash-outline" class="text-2xl"></ion-icon> Delete Chat   </button> </li>
                    </ul> 
                    
                    <!-- close button -->
                    <button type="button" class="absolute top-0 right-0 m-4 p-2 bg-secondery rounded-full" uk-toggle="target: .rightt ; cls: hidden">
                        <ion-icon name="close" class="text-2xl flex"></ion-icon>
                    </button>

                </div>

                <!-- overly -->
                <div class="bg-slate-100/40 backdrop-blur absolute w-full h-full dark:bg-slate-800/40" uk-toggle="target: .rightt ; cls: hidden"></div>

            </div>
            
        </div>

    </div> 

</main>




@include('front.widget.product-modal-block')


@endsection