<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="{{asset('front')}}/images/favicon.png" rel="icon" type="image/png">

   
    <!-- css files -->
    <link rel="stylesheet" href="{{asset('front')}}/css/tailwind.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/style.css">  
    
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
 
    <!-- custom style -->
    <style> 
        #header-nav nav a.uk-active         { color:rgb(59, 130, 246)}
        .dark #header-nav nav a.uk-active   { color:#fff !important}
    </style>
 
</head>
<body class="bg-white dark:bg-slate-950 overflow-x-hidden">
 
    <!-- header -->
    <header class="lg:py-4 lg:px-6 py-3 px-4 border-b border-slate-200/60 dark:border-slate-600/40 bg-white/95 backdrop-blur-xl z-40 dark:bg-slate-900/80 uk-animation-slide-top-small" uk-sticky>
        <div class="max-w-5xl mx-auto">
            <div class="flex justify-between items-center">
              
                <div class="flex gap-2 items-center z-20 relative">
                    <button type="button" class="p-2.5 text-lg max-md:flex hidden group z" uk-toggle="target: #header-nav ; cls:max-md:hidden">
                        <ion-icon name="menu" class="group-aria-expanded:inline hidden"></ion-icon>
                        <ion-icon name="close" class="group-aria-expanded:hidden"></ion-icon>
                    </button>
                    <a href="index.html"><img src="{{asset('front')}}/images/logo.png" alt="" class="h-7"></a>
                </div>
 
                <div id="header-nav" class="max-md:hidden max-md:bg-white max-md:p-5 max-md:fixed max-md:top-0 max-md:shadow-md max-md:left-0 max-md:pt-14 max-md:w-full max-md:z-10">
                    <nav class="flex lg:items-center font-medium text-slate-500 dark:text-white/70 lg:gap-1 max-md:border-t max-md:pt-2 max-md:flex max-md:flex-col" uk-scrollspy-nav="closest: a ; scroll: true">
           
                        <a class="lg:py-1.5 py-2.5 px-3 duration-500 hover:text-black" href="#home">Home</a> 
                        <a class="lg:py-1.5 py-2.5 px-3 duration-500 hover:text-black" href="#features">Features</a> 
                        <a class="lg:py-1.5 py-2.5 px-3 duration-500 hover:text-black" href="#demos"> Demos</a> 
                        <a class="lg:py-1.5 py-2.5 px-3 duration-500 hover:text-black" href="#faq">Faq</a>
                        
                    </nav>
                </div>

                <div class="flex items-center z-20 relative">

                    <div class="flex items-center gap-4 relative pl-6 text-slate-600">
                         
                        <a class="bg-blue-500 dark:bg-pink-700/30 text-white shadow px-4 h-9 text-sm rounded-md flex items-center gap-2 font-semibold" target="_blank" href="https://themeforest.net/item/socialite-online-community-html-template/26345647">
                            <ion-icon name="cart-outline" class="text-xl"></ion-icon> Buy now 
                        </a>
                         
                        <div class="w-[1px] bg-slate-200 h-6 absolute left-0 hidden"></div>
                    </div>

                </div>

            </div>
        </div>
    </header>


    <main class="md:mt-10 -mt-8 pt-8">

        <div class="relative md:mb-44">
            <div class="max-w-5xl mx-auto space-y-32 max-md:p-8">
          
                <!-- hero -->
                <section id="home">
                    
                    <div class="flex flex-col justify-center mt-6 text-center gap-6">
                        <div>
                            <img src="{{asset('front')}}/images/logo-icon-2.png" alt="" class="max-md:w-24  mx-auto">
                        </div>
                        <p class="max-w-2xl mx-auto text-gray-500 sm:text-lg text-sm leading-relaxed dark:text-white"> Professional and elegant template for creating a social network , designed with a clean, customizable and modern</p>
                    </div>
           
                    <div class="md:flex justify-center items-center gap-4 mt-8 font-semibold text-sm hidden">
                        <a href="#demos" uk-scroll class="flex items-center gap-2 bg-slate-100 rounded-lg px-5 py-3 text-black dark:bg-slate-900 dark:text-white"> 
                            <ion-icon name="eye-outline" class="hidden"></ion-icon>
                            Check Demo 
                        </a>
                        <a class="flex items-center gap-3 rounded-lg px-5 py-2.5 bg-black text-white shadow dark:bg-white/90 dark:text-black" target="_blank" href="">  
                            Buy now  
                        </a>
                    </div>
    
                    <!-- hero -->
                    <div class="flex items-center justify-center relative md:mt-32 mt-20" >
        
                        <div class="lg:rounded-xl rounded-md shadow-xl z-10 scale-125 overflow-hidden relative w-1/2">
                            <img src="{{asset('front')}}/images/demos/home.png" alt="" class="">
                        </div>
        
                        <div class="w-1/2 absolute left-0 delay-500 uk-animation-slide-right-medium">
                            <div class="lg:rounded-xl rounded-md shadow-md overflow-hidden -skew-x-6">
                                <img src="{{asset('front')}}/images/demos/messages.png" alt="">
                            </div>
                        </div>
                        <div class="w-1/2 absolute right-0 duration-50 uk-animation-slide-left-medium">
                            <div class="lg:rounded-xl rounded-md shadow-md overflow-hidden skew-x-6">
                                <img src="{{asset('front')}}/images/demos/timeline.png" alt="">
                            </div>
                        </div>
     
                    </div>
                    
                   
                </section>
                
                <!-- features -->
                <section>
                    
                    <div class="grid md:grid-cols-3 grid-cols-2 gap-5 md:gap-y-10 md:mt-8 -mt-6 md:text-xl text-sm font-medium" id="features" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 100">
    
                        <div class="space-x-4 flex items-center">
                            <div class="rounded-full  bg-pink-200 md:p-1.5 p-1 inline-flex ring right-2 ring-pink-50 ring-offset-1 dark:ring-slate-600">
                                <ion-icon name="reader" class="md:text-4xl text-2xl text-white drop-shadow-md"></ion-icon>
                            </div>
                            <div>  User Friendly  <br> Design  </div>
                        </div>
                        <div class="space-x-4 flex items-center">
                            <div class="rounded-full  bg-yellow-200 md:p-1.5 p-1 inline-flex ring right-2 ring-yellow-50 ring-offset-1 dark:ring-slate-600">
                                <ion-icon name="cog" class="md:text-4xl text-2xl text-white drop-shadow-md"></ion-icon>
                            </div>
                            <div> Modern Features   </div>
                        </div>
                        <div class="space-x-4 flex items-center">
                            <div class="rounded-full  bg-emerald-200 md:p-1.5 p-1 inline-flex ring right-2 ring-emerald-50 ring-offset-1 dark:ring-slate-600">
                                <ion-icon name="leaf" class="md:text-4xl text-2xl text-white drop-shadow-md"></ion-icon>
                            </div>
                            <div>  Clean Markup </div>
                        </div>
                        <div class="space-x-4 flex items-center">
                            <div class="rounded-full  bg-sky-200 md:p-1.5 p-1 inline-flex ring ring-sky-50 ring-offset-1 dark:ring-slate-600">
                                <ion-icon name="albums" class="md:text-4xl text-2xl text-white drop-shadow-md"></ion-icon>
                            </div>
                            <div> Pixel Perfect </div>
                        </div>
                        <div class="space-x-4 flex items-center">
                            <div class="rounded-full  bg-purple-200 md:p-1.5 p-1 inline-flex ring right-2 ring-purple-50 ring-offset-1 dark:ring-slate-600">
                                <ion-icon name="moon" class="md:text-4xl text-2xl text-white drop-shadow-md"></ion-icon>
                            </div>
                            <div> Dark and Light  <br> Schemes  </div>
                        </div>
                        <div class="space-x-4 flex items-center">
                            <div class="rounded-full  bg-pink-200 md:p-1.5 p-1 inline-flex ring right-2 ring-pink-50 ring-offset-1 dark:ring-slate-600">
                                <ion-icon name="layers" class="md:text-4xl text-2xl text-white drop-shadow-md"></ion-icon>
                            </div>
                            <div> Customizable   <br> Components  </div>
                        </div>
    
                    </div>
    
                </section>
    
            </div>
            
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" class="absolute -bottom-44 w-full max-lg:hidden rotate-3">
                <path fill="#f1f5f9" d="M 0 0 c 0 0 200 50 500 50 s 500 -50 500 -50 v 101 h -1000 v -100 z" class="fill-current text-slate-50 dark:text-slate-800/60"></path>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" class="absolute -bottom-40 w-full max-lg:hidden -rotate-6">
                <path fill="#f1f5f9" d="M 0 0 c 0 0 200 50 500 50 s 500 -50 500 -50 v 101 h -1000 v -100 z" class="fill-current text-slate-50/80 dark:text-slate-800/40"></path>
            </svg>
            
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" class="absolute -bottom-44 w-full max-lg:hidden">
                <path fill="#f1f5f9" d="M 0 0 c 0 0 200 50 500 50 s 500 -50 500 -50 v 101 h -1000 v -100 z" class="fill-current text-slate-100 dark:text-slate-800"></path>
            </svg>

        </div>

            
        <!-- demos -->
        <section class="bg-slate-100 md:py-20 py-8 md:my-20 my-8 relative dark:bg-dark2"> 
            
            <div class="max-w-5xl mx-auto max-lg:p-8">

                <div class="text-center md:space-y-3" id="demos"> 
                    <div class="lg:text-3xl text-lg md:font-bold font-semibold text-black dark:text-white"> Check the Demos </div>
                    <p class="max-w-3xl mx-auto text-gray-500 md:text-base text-sm leading-relaxed dark:text-white/80">  Explore our demo pages and different layout of designs </p>
                </div>
                
                <div class="grid sm:grid-cols-3 gap-6 lg:mt-20 mt-10 text-center font-normal capitalize"   uk-scrollspy="target: > a ; cls: uk-animation-slide-bottom-small ; delay: 160">
                    
                   
                    <a href="{{route('index')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/home.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> Home </p> 
                        </div>
                    </a>
                    <a href="{{route('messages')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/messages.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> messages </p> 
                        </div>
                    </a>
                    <a href="{{route('video')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/videos.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> Videos </p> 
                        </div>
                    </a>
                    <a href="{{route('video-watch')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/videos-watch.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> Video watch</p> 
                        </div>
                    </a>
                    <a href="{{route('event')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/events.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> event </p> 
                        </div>
                    </a>
                    <a href="{{route('event-2')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/event-2.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> event 2 </p> 
                        </div>
                    </a>
                    <a href="{{route('pages')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/pages.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> pages </p> 
                        </div>
                    </a>
                    <a href="{{route('groups')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/groups.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> groups </p> 
                        </div>
                    </a>
                    <a href="{{route('groups-2')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/groups-2.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> groups 2 </p> 
                        </div>
                    </a>
                    <a href="{{route('products')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/products.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> Marketplace </p> 
                        </div>
                    </a> 
                    <a href="{{route('product-view-1')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/products.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> product-view 1 </p> 
                        </div>
                    </a>
                    <a href="{{route('product-view-2')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/product-view-2.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> product-view 2 </p> 
                        </div>
                    </a>
                    <a href="{{route('blog')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/blogs.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> blog </p> 
                        </div>
                    </a>
                  
                     <a href="{{route('blog-2')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/blogs-2.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> blog 2 </p> 
                        </div>
                    </a>
                    <a href="{{route('blog-read')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/blog-read.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> blog read </p> 
                        </div>
                    </a>
                    <a href="{{route('games')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/games.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> games </p> 
                        </div>
                    </a>
                    <a href="{{route('funding')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/funding.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> funding </p> 
                        </div>
                    </a>

                    <a href="{{route('timeline')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/timeline.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> timeline </p> 
                        </div>
                    </a>
                    <a href="{{route('timeline-page')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/timeline-page.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> timeline page</p> 
                        </div>
                    </a>
                    <a href="{{route('groupDetail')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/groupDetail.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> timeline group </p> 
                        </div>
                    </a>
                    <a href="{{route('timeline-event')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/timeline-event.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> timeline event </p> 
                        </div>
                    </a>
                    <a href="{{route('timeline-funding')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/timeline-funds.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> timeline funding </p> 
                        </div>
                    </a>

                    <a href="{{route('setting')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/settings.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> setting </p> 
                        </div>
                    </a>
                    <a href="{{route('upgrade')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/upgrade.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> upgrade </p> 
                        </div>
                    </a>
                    <a href="{{route('components')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/components.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> components </p> 
                        </div>
                    </a>

                    <a href="{{route('login')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/form-login.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> login </p> 
                        </div>
                    </a>
                    <a href="{{route('registration')}}" target="_blank">
                        <div class="group"> 
                            <div class="md:rounded-lg rounded-md shadow-md overflow-hidden duration-300 group-hover:-translate-y-1 group-hover:scale-[1.01] group-hover:shadow-lg">
                                <img src="{{asset('front')}}/images/demos/form-register.png" alt="" class="w-full h-full object-cover inset-0">
                            </div>
                            <p class="py-4 group-hover:text-black"> register </p> 
                        </div>
                    </a>
                  
                </div>
 
            </div>

        </section>
 
        
        <div class="relative max-lg:hidden">
            <svg class="absolute -mt-20 fill-current text-slate-100 dark:text-slate-800/40 invisible lg:visible rotate-180 scale-x-[-1]" width="100%" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100" xml:space="preserve">
                <polygon points="2560 0 2560 100 0 100"></polygon>
            </svg> 
        </div>

        <div class="max-w-5xl mx-auto md:space-y-32 max-md:p-8 relative lg:mt-36">
          
            <!-- code preview -->
            <section>

                <div class="flex max-md:flex-col items-center md:gap-20 gap-10">

                    <div class="flex-1 md:space-y-8 space-y-3">
         
                        <div class="rounded-full  bg-slate-200 dark:bg-slate-700 md:p-1.5 p-2 inline-flex ring right-2 ring-slate-100 ring-offset-1 dark:ring-slate-800 dark:ring-offset-slate-500">
                            <ion-icon name="reader" class="md:text-4xl text-2xl text-white drop-shadow-md slate-800"></ion-icon>
                        </div>

                        <div class="md:text-3xl text-lg md:font-bold font-semibold text-black dark:text-white"> What is inside </div>
                        <p class="max-w-3xl mx-auto text-gray-500  md:text-lg leading-loose  dark:text-white/80"> 
                            high-quality code that’s been thoroughly tested and optimized for performance, 
                            <br class="max-md:hidden"> <br class="max-md:hidden"> 
                            you’ll receive access to clean and well-documented code that’s easy to customize </p>

                    </div>
                    <div class="md:w-3/5 w-full">

                        <a href="#">
                            <div class=" relative">
                                <div class="bg-gray-950 w-full py-1.5 px-3 md:rounded-t-xl rounded-t-md"> <svg class="w-6" viewBox="0 0 420 100" focusable="false"><circle fill="#ff5f57" cx="50" cy="50" r="50"></circle><circle fill="#febc2e" cx="210" cy="50" r="50"></circle><circle fill="#28c840" cx="370" cy="50" r="50"></circle></svg> </div>
                                <img src="{{asset('front')}}/images/demos/code-prev.jpg" alt="" class="w-full h-full object-cover inset-0 md:rounded-b-xl rounded-b-md shadow-lg">
    
                                <img src="{{asset('front')}}/images/brand-uikit.svg" alt="" class="w-12 h-12 rounded-full absolute  top-8 -right-6 bg-white shadow-md p-1.5">
                                <img src="{{asset('front')}}/images/brand-tailwind.svg" alt="" class="w-12 h-12 rounded-full absolute  -bottom-5 right-6 bg-white shadow-md p-1.5">
    
                            </div>
                        </a>
 
                    </div>
      

                </div>

            </section>
 
            <!-- Faq -->
            <section class="max-md:my-20">

                <div class="text- center space-y-3" id="faq">
                    <div class="p-1 text-sm text-yellow-500 bg-yellow-100 px-2 inline-block rounded-md -rotate-3 dark:bg-yellow-400/20"> Support</div>
                    <div class="lg:text-3xl text-lg md:font-bold font-semibold text-black dark:text-white"> Any Question?</div>
                </div>

                <ul class="relative space-y-3 mt-10 max-w-3xl mx-auto hidden" uk-accordion="active: 0">
                    <li class="uk-open">
                        <a class="flex items-center justify-between py-4 px-5 text-lg bg-slate-100 rounded-md font-semibold group dark:text-white dark:bg-gray-800 uk-accordion-title" href="#">
                            Can i use this for WordPress
                            <svg class="w-6 h-6 duration-200 group-aria-expanded:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" style="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=""><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <div class="p-2 dark:text-white/80 uk-accordion-content text-base">
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                        </div>
                    </li>
                    <li>
                        <a class="flex items-center justify-between py-4 px-5 text-lg bg-slate-100 rounded-md font-semibold group dark:text-white dark:bg-gray-800 uk-accordion-title" href="#">
                            Can i use this for WordPress
                            <svg class="w-6 h-6 duration-200 group-aria-expanded:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" style="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=""><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <div class="p-2 dark:text-white/80 uk-accordion-content text-base">
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                        </div>
                    </li>
                    <li>
                        <a class="flex items-center justify-between py-4 px-5 text-lg bg-slate-100 rounded-md font-semibold group dark:text-white dark:bg-gray-800 uk-accordion-title" href="#">
                            Can i use this for WordPress
                            <svg class="w-6 h-6 duration-200 group-aria-expanded:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" style="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=""><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <div class="p-2 dark:text-white/80 uk-accordion-content text-base">
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                        </div>
                    </li>
                </ul>  
                
                <div class="grid lg:grid-cols-2 lg:gap-10 mt-16 gap-4 text-sm">
                    <div>
                    <p class="lg:text-lg"> absolutely yes. Socialite Built <a href="https://tailwindcss.com/" class="underline">tailwindcss</a> Rapidly build modern websites without ever leaving your HTML</p>
                    </div>
                    <div>
                    <h1 class="md:text-xl text-base font-semibold mb-2 text-black dark:text-white"> Is this Wordpress theme ? </h1>
                    <p class="lg:text-lg"> No. This is n't Wordpress theme is just HTML template. You can integrate any platform you want</p>
                    </div>
                    <div>
                    <h1 class="md:text-xl text-base font-semibold mb-2 text-black dark:text-white"> Is Socialite working fully ? </h1>
                    <p class="lg:text-lg">  No. is just HTML template . hire backend developer on <a href="https://www.freelancer.com/" class="underline">Freelancer</a> or <a href="https://www.upwork.com/" class="underline">Upwork</a></p>
                    </div>
                </div>
              
            </section>
  
            <!-- other templates -->
            <section>

                <div class="text- center space-y-3">
                    <div class="p-1 text-sm text-green-500 bg-green-100 px-2 inline-block rounded-md max-md:hidden -rotate-3 dark:bg-green-400/20"> Awesome</div>
                    <div class="lg:text-3xl text-lg md:font-bold font-semibold text-black dark:text-white"> Other Products </div>
                    <p class="max-w-3xl text-gray-500 text-sm sm:text-lg leading-relaxed dark:text-white/80 max-md:hidden"> a great solution ready for you to start building your apps? Use our templates and design system as the rock-solid foundation for your internal UI component library </p>
                </div>

                <div class="relative mt-8" tabindex="-1" uk-slider="finite: true">

                    <div class="overflow-hidden uk-slider-container">
                       
                      <ul class="-ml-2 uk-slider-items w-[calc(100%+0.875rem)]"> 
                       
                    
                        <!-- single template -->
                        <li class="md:w-1/2 w-full pr-3.5">
                            <a href="https://themeforest.net/item/instello-ultimate-photo-sharing-html-template/29882650" target="_blank">
                                <div class="flex flex-col">
                                    <div class="relative w-full h-full">
                                        <img src="{{asset('front')}}/images/demos/prev-installo.png" alt="" class="w-full h-full object-cover inset-0 md:rounded-lg rounded-md shadow">
                                    </div> 
                                    <div class="relative mt-4"> 
                                        <div class="md:font-semibold font-medium lg:text-xl text-lg text-black dark:text-white">Instello</div>
                                        <div class="font-medium text-gray-400 mt-0.5 dark:text-white">Instello network</div>
                                        <span class="absolute bg-gray-100 font-medium md:px-3.5 px-3 py-1 right-0 top-3 rounded-full text-black dark:bg-slate-700 dark:text-white">$19 </span>
                                    </div>
                                </div>
                            </a> 
                        </li>

                        <!-- single template -->
                        <li class="md:w-1/2 w-full pr-3.5">
                            <a href="https://themeforest.net/item/flex-modern-multipurpose-tailwind-template/34769270" target="_blank">
                                <div class="flex flex-col">
                                    <div class="relative w-full h-full">
                                        <img src="{{asset('front')}}/images/demos/prev-flex.png" alt="" class="w-full h-full object-cover inset-0 md:rounded-lg rounded-md shadow">
                                    </div> 
                                    <div class="relative mt-4"> 
                                        <div class="md:font-semibold font-medium lg:text-xl text-lg text-black dark:text-white">Flex</div>
                                        <div class="font-medium text-gray-400 mt-0.5 dark:text-white">Landing</div>
                                        <span class="absolute bg-gray-100 font-medium md:px-3.5 px-3 py-1 right-0 top-3 rounded-full text-black dark:bg-slate-700 dark:text-white">$19</span>
                                    </div>
                                </div>
                            </a> 
                        </li>
                         
                        <!-- single template -->
                        <li class="md:w-1/2 w-full pr-3.5">
                            <a href="https://themeforest.net/item/courseplus-modern-learning-management-application/23651460" target="_blank">
                                <div class="flex flex-col">
                                    <div class="relative w-full h-full">
                                        <img src="{{asset('front')}}/images/demos/prev-courseplus.png" alt="" class="w-full h-full object-cover inset-0 md:rounded-lg rounded-md shadow">
                                    </div> 
                                    <div class="relative mt-4"> 
                                        <div class="md:font-semibold font-medium lg:text-xl text-lg text-black dark:text-white"> CoursePlus </div>
                                        <div class="font-medium text-gray-400 mt-0.5 dark:text-white">Educational</div>
                                        <span class="absolute bg-gray-100 font-medium md:px-3.5 px-3 py-1 right-0 top-3 rounded-full text-black dark:bg-slate-700 dark:text-white">$24 </span>
                                    </div>
                                </div>
                            </a> 
                        </li>

                      </ul>
                
                    </div>
                   
                    <button type="button" class="absolute -translate-y-1/2 bg-white rounded-full bottom-1/2 -left-5 grid w-10 h-10 place-items-center shadow-md dark:bg-dark3" uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon></button>
                    <button type="button" class="absolute -right-5 -translate-y-1/2 bg-white rounded-full bottom-1/2 grid w-10 h-10 place-items-center shadow-md dark:bg-dark3" uk-slider-item="next"> <ion-icon name="chevron-forward" class="text-2xl"></ion-icon></button>
                    
                </div>
       
            </section>

        </div> 
   

    </main>
  
    <footer>
        <div class="max-w-5xl mx-auto mb-6 mt-32 pt-6 border-t dark:border-slate-800">

            <div class="flex justify-center text-sm dark:to-white">

                Made with ❤️ by <a class="ml-2 hover:underline hover:text-blue-500" href="https://foxthemes.net/">Foxthemes</a>

            </div>

        </div>
    </footer>

    
    <!-- Uikit js you can use cdn  https://getuikit.com/docs/installation  or fine the latest  https://getuikit.com/docs/installation -->
    <script src="{{asset('front')}}/js/uikit.min.js"></script>
    <script src="{{asset('front')}}/js/script.js"></script>

    <!-- Ion icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
 

    <!-- Dark mode -->
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')
        } else {
        document.documentElement.classList.remove('dark')
        }

        // Whenever the user explicitly chooses light mode
        localStorage.theme = 'light'

        // Whenever the user explicitly chooses dark mode
        localStorage.theme = 'dark'

        // Whenever the user explicitly chooses to respect the OS preference
        localStorage.removeItem('theme')
    </script>

</body>
</html>
