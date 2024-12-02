@extends('front.layout.dashboard-layout')
@section('custom-script')

<script>
$(document).ready(function() {
    $('.home').addClass('active');
    $('.uk-parent').addClass('uk-open');
    $('.uk-parent ul').removeAttr('hidden');
});
</script>
@endsection

@section('content')

<main id="site__main"
    class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

    <div>
        <h2 class="text-xl font-semibold"> Welcome to Barodaplus, </h2>
        <p class="font-normal text-sm text-gray-500 leading-6"> Create Your Business and Promote it in Just 4 Simple Steps. </p>
    </div>

    <div class="flex 2xl:gap-12 max-lg:flex-col gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto lg:mt-2 mt-6"
        id="js-oversized">
        <div class="flex-1">


            <!-- groups -->

            <div class="relative" tabindex="-1">
                <ul class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 gap-5 mt-4">

                    <li class="w-auto" uk-scrollspy-class="uk-animation-fade">
                        <a href="{{route('myBusiness')}}"
                            class="p-4 flex gap-3 justify-between bg-sky-gradiant rounded-md">
                            <div>
                                <h4 class="font-medium !text-white whitespace-nowrap"> My Business </h4>
                                <p class="font-medium !text-white/80 text-sm mt-1 whitespace-nowrap">
                                    {{getTotalMyBusiness(getUserData()['id'])}} Business </p>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-8 h-8 text-white shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                            </svg>
                        </a>
                    </li>


                    <li class="w-auto" uk-scrollspy-class="uk-animation-fade">
                        <a href="{{route('myBusiness')}}"
                            class="p-4 flex gap-3 justify-between bg-green-gradiant rounded-md">
                            <div>
                                <h4 class="font-medium !text-white whitespace-nowrap"> Inquiries </h4>
                                <p class="font-medium !text-white/80 text-sm mt-1 whitespace-nowrap">
                                    {{getTotalMyInquiry()}} Inquiries </p>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-8 h-8 text-white shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                            </svg>

                        </a>
                    </li>


                    <li class="w-auto" uk-scrollspy-class="uk-animation-fade">
                        <a href="{{route('myBusiness')}}"
                            class="p-4 flex gap-3 justify-between bg-purple-gradiant rounded-md">
                            <div>
                                <h4 class="font-medium !text-white whitespace-nowrap"> Message </h4>
                                <p class="font-medium !text-white/80 text-sm mt-1 whitespace-nowrap"> 0 Message </p>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-8 h-8 text-white shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                            </svg>

                        </a>
                    </li>

                </ul>

            </div>

            <br>

            <!-- comments -->
            <div class="box p-5 px-6 relative">
                <h3 class="font-semibold text-base text-black dark:text-white"> Comments </h3>

                <div class=" text-sm font-normal space-y-4 relative mt-4">

                    <div class="flex items-start gap-3 relative">
                        <a href="{{route('timeline')}}"> <img src="{{asset('front')}}/images/avatars/avatar-3.jpg"
                                alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                        <div class="flex-1">
                            <a href="{{route('timeline')}}" class="text-black font-medium inline-block dark:text-white">
                                Monroe Parker </a>
                            <p class="mt-0.5">What a beautiful photo! I love it. 😍 </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 relative">
                        <a href="{{route('timeline')}}"> <img src="{{asset('front')}}/images/avatars/avatar-2.jpg"
                                alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                        <div class="flex-1">
                            <a href="{{route('timeline')}}" class="text-black font-medium inline-block dark:text-white">
                                John Michael </a>
                            <p class="mt-0.5"> You captured the moment.😎 </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 relative">
                        <a href="{{route('timeline')}}"> <img src="{{asset('front')}}/images/avatars/avatar-5.jpg"
                                alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                        <div class="flex-1">
                            <a href="{{route('timeline')}}" class="text-black font-medium inline-block dark:text-white">
                                James Lewis </a>
                            <p class="mt-0.5">What a beautiful photo! I love it. 😍 </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 relative">
                        <a href="{{route('timeline')}}"> <img src="{{asset('front')}}/images/avatars/avatar-4.jpg"
                                alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                        <div class="flex-1">
                            <a href="{{route('timeline')}}" class="text-black font-medium inline-block dark:text-white">
                                Martin Gray </a>
                            <p class="mt-0.5"> You captured the moment.😎 </p>
                        </div>
                    </div>
                    <div>
                        <button type="button" class="flex items-center gap-1.5 text-blue-500 hover:text-blue-500 my-5">
                            <ion-icon name="chevron-down-outline"
                                class="ml-auto duration-200 group-aria-expanded:rotate-180 md hydrated" role="img"
                                aria-label="chevron down outline"></ion-icon>
                            More Comment
                        </button>
                    </div>

                </div>

                <!-- add comment -->
                <div
                    class="sm:px-4 sm:py-3 p-2.5 border-t border-gray-100 flex items-center gap-1 -m-6 mt-0 bg-secondery/60 dark:border-slate-700/40">

                    <img src="{{asset('front')}}/images/avatars/avatar-7.jpg" alt="" class="w-6 h-6 rounded-full">

                    <div class="flex-1 relative overflow-hidden h-10">
                        <textarea placeholder="Add Comment...." rows="1"
                            class="w-full resize-none !bg-transparent px-4 py-2 focus:!border-transparent focus:!ring-transparent"
                            aria-haspopup="true" aria-expanded="false"></textarea>

                        <div class="!top-2 pr-2 uk-drop" uk-drop="pos: bottom-right; mode: click">
                            <div class="flex items-center gap-2"
                                uk-scrollspy="target: > svg; cls: uk-animation-slide-right-small; delay: 100 ;repeat: true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6 fill-sky-600" style="opacity: 0;">
                                    <path fill-rule="evenodd"
                                        d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5 fill-pink-600" style="opacity: 0;">
                                    <path
                                        d="M3.25 4A2.25 2.25 0 001 6.25v7.5A2.25 2.25 0 003.25 16h7.5A2.25 2.25 0 0013 13.75v-7.5A2.25 2.25 0 0010.75 4h-7.5zM19 4.75a.75.75 0 00-1.28-.53l-3 3a.75.75 0 00-.22.53v4.5c0 .199.079.39.22.53l3 3a.75.75 0 001.28-.53V4.75z">
                                    </path>
                                </svg>
                            </div>
                        </div>


                    </div>

                    <button type="submit" class="text-sm rounded-full py-1.5 px-3.5 bg-secondery"> Replay</button>
                </div>


            </div>


        </div>

        <!-- sidebar -->
        <div class="2xl:w-[380px] lg:w-[330px] w-full">

            <div class="lg:space-y-6 space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6"
                uk-sticky="media: 1024; end: #js-oversized; offset: 80">

                
                <!-- peaple you might know -->
                <div class="box p-5 px-6 border1 dark:bg-dark2">

                    <div class="flex justify-between text-black dark:text-white">
                        <h3 class="font-bold text-base"> Recent Inquiries </h3>
                        <a href="#" class="text-sm text-blue-500">See all</a>
                    
                    </div>

                    <div class="space-y-4 capitalize text-xs font-normal mt-5 mb-2 text-gray-500 dark:text-white/80">

                        @foreach(getTopInquiries(2) as $topInquiry)
                        <div class="flex items-center gap-3">
                            <a href="{{route('timeline')}}">
                                @if(getUserPic($topInquiry->user_id)->image)
                                <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{getUserPic($topInquiry->user_id)->image}}/xs"
                                    alt="" class="bg-gray-200 rounded-full w-10 h-10" alt="{{$topInquiry->name}}">


                                @else
                                <img src="{{asset('front')}}/images/avatars/avatar-7.jpg" alt=""
                                    class="bg-gray-200 rounded-full w-10 h-10">
                                @endif

                            </a>
                            <div class="flex-1">
                                <a href="{{route('timeline')}}">
                                    <h4 class="text-sm text-black dark:text-white">
                                        {{$topInquiry->title}} </h4>
                                </a>
                                <div class="mt-0.5"> {{$topInquiry->name}} </div>

                                <div class="text-xs text-gray-400 mt-2 flex items-center gap-2">
                                    <div>{{formatDate($topInquiry->created_at)}} </div>
                                </div>
                            </div>

                            <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery">
                                View </button>
                        </div>
                        @endforeach



                    </div>

                </div>


                <div class="box p-5 px-6">

                    <div class="flex items-baseline justify-between text-black dark:text-white">
                        <h3 class="font-bold text-base"> Recent Inquiries</h3>
                        <a href="#" class="text-sm text-blue-500">See all</a>
                    </div>

                    <div class="mt-4 space-y-4">

                        <div>
                            <a href="{{route('blog-read')}}">
                                <h4
                                    class="text-sm font-normal text-black dark:text-white duration-200 hover:opacity-80">
                                    Interesting javaScript and CSS libraries you should be learn</h4>
                            </a>
                            <div class="text-xs text-gray-400 mt-2 flex items-center gap-2">
                                <div> 10 Jun 2022 </div>
                                <div class="md:block hidden">·</div>
                                <div> 156.9K views</div>
                            </div>
                        </div>
                        <div>
                            <a href="{{route('blog-read')}}">
                                <h4
                                    class="text-sm font-normal text-black dark:text-white duration-200 hover:opacity-80">
                                    Interesting javaScript and CSS libraries you should be learn</h4>
                            </a>
                            <div class="text-xs text-gray-400 mt-2 flex items-center gap-2">
                                <div> 10 Jun 2022 </div>
                                <div class="md:block hidden">·</div>
                                <div> 156.9K views</div>
                            </div>
                        </div>
                        <div>
                            <a href="{{route('blog-read')}}">
                                <h4
                                    class="text-sm font-normal text-black dark:text-white duration-200 hover:opacity-80">
                                    Interesting JavaScript and CSS libraries should Know About</h4>
                            </a>
                            <div class="text-xs text-gray-400 mt-2 flex items-center gap-2">
                                <div> 10 Jun 2022 </div>
                                <div class="md:block hidden">·</div>
                                <div> 156.9K views</div>
                            </div>
                        </div>
                        <div>
                            <a href="{{route('blog-read')}}">
                                <h4
                                    class="text-sm font-normal text-black dark:text-white duration-200 hover:opacity-80">
                                    Top amazing web demos and experiments should know about</h4>
                            </a>
                            <div class="text-xs text-gray-400 mt-2 flex items-center gap-2">
                                <div> 10 Jun 2022 </div>
                                <div class="md:block hidden">·</div>
                                <div> 156.9K views</div>
                            </div>
                        </div>
                    </div>


                </div>


                <!-- peaple you might know -->
                <div class="box p-5 px-6 border1 dark:bg-dark2">

                    <div class="flex justify-between text-black dark:text-white">
                        <h3 class="font-bold text-base"> Peaple You might know </h3>
                        <button type="button">
                            <ion-icon name="sync-outline" class="text-xl"></ion-icon>
                        </button>
                    </div>

                    <div class="space-y-4 capitalize text-xs font-normal mt-5 mb-2 text-gray-500 dark:text-white/80">

                        <div class="flex items-center gap-3">
                            <a href="{{route('timeline')}}">
                                <img src="{{asset('front')}}/images/avatars/avatar-7.jpg" alt=""
                                    class="bg-gray-200 rounded-full w-10 h-10">
                            </a>
                            <div class="flex-1">
                                <a href="{{route('timeline')}}">
                                    <h4 class="font-semibold text-sm text-black dark:text-white"> Johnson smith</h4>
                                </a>
                                <div class="mt-0.5"> Suggested For You </div>
                            </div>
                            <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery">
                                Follow </button>
                        </div>
                        <div class="flex items-center gap-3">
                            <a href="{{route('timeline')}}">
                                <img src="{{asset('front')}}/images/avatars/avatar-5.jpg" alt=""
                                    class="bg-gray-200 rounded-full w-10 h-10">
                            </a>
                            <div class="flex-1">
                                <a href="{{route('timeline')}}">
                                    <h4 class="font-semibold text-sm text-black dark:text-white"> James Lewis</h4>
                                </a>
                                <div class="mt-0.5"> Followed by Johnson </div>
                            </div>
                            <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery">
                                Follow </button>
                        </div>
                        <div class="flex items-center gap-3">
                            <a href="{{route('timeline')}}">
                                <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt=""
                                    class="bg-gray-200 rounded-full w-10 h-10">
                            </a>
                            <div class="flex-1">
                                <a href="{{route('timeline')}}">
                                    <h4 class="font-semibold text-sm text-black dark:text-white"> John Michael</h4>
                                </a>
                                <div class="mt-0.5"> Followed by Monroe </div>
                            </div>
                            <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery">
                                Follow </button>
                        </div>
                        <div class="flex items-center gap-3">
                            <a href="{{route('timeline')}}">
                                <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt=""
                                    class="bg-gray-200 rounded-full w-10 h-10">
                            </a>
                            <div class="flex-1">
                                <a href="{{route('timeline')}}">
                                    <h4 class="font-semibold text-sm text-black dark:text-white"> Monroe Parker</h4>
                                </a>
                                <div class="mt-0.5"> Suggested For You </div>
                            </div>
                            <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery">
                                Follow </button>
                        </div>
                        <div class="flex items-center gap-3">
                            <a href="{{route('timeline')}}">
                                <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt=""
                                    class="bg-gray-200 rounded-full w-10 h-10">
                            </a>
                            <div class="flex-1">
                                <a href="{{route('timeline')}}">
                                    <h4 class="font-semibold text-sm text-black dark:text-white"> Martin Gray</h4>
                                </a>
                                <div class="mt-0.5"> Suggested For You </div>
                            </div>
                            <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery">
                                Follow </button>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</main>


@include('front.widget.product-modal-block')


@endsection