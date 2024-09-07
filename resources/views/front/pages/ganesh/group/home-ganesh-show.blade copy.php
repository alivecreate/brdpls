@extends('front.layout.ganesh-festival-layout')


@section('title')
{{ $homeGanesh->name }}, {{ $homeGanesh->city }}, Ganesh Festival - Barodaplus.com
@endsection

@section('custom-head')
<style>
/* Inline print styles */
@media print {
    @page {
        size: A4;
        margin: 1cm;
    }
}
</style>
@endsection

@section('custom-script')

<script>
document.getElementById('share-button').addEventListener('click', async () => {
    // Check if the Web Share API is supported
    if (navigator.share) {
        try {


            await navigator.share({
                title: '{{optional($homeGanesh)->name}}',
                text: '*🚩 બરોડા પ્લસ ગણેશ સ્પર્ધા - 2024 🚩 - {{optional($homeGanesh)->name}}* - મંડળને વોટ કરવા અને ફોટો તેમજ વિડિયો જોવા નીચે આપેલી લિન્ક પર ક્લિક કરો.',
                url: window.location.href
            });
            console.log('Content shared successfully!');
        } catch (error) {
            console.error('Error sharing:', error);
        }
    } else {
        alert('Your browser does not support the Web Share API.');
    }
});




$(document).ready(function() {
    $('.btn-print-qr').click(function() {
        var qrName = $(this).data('name');
        var qrAddress = $(this).data('address');
        var qrCode = $(this).data('qr');
        var QrImage = $(this).data('image');
        var logo = $(this).data('logo');

        // alert(logo); // Output the product name

        var printWindow = window.open('', '', 'width=600,height=600');
        printWindow.document.write(
            `<html style="border:1px;width=200,height=200"><head><title>${qrName} - QR</title></head><body style="text-align:center;background-color: #fff4ed;">`
            );

        printWindow.document.write(
            `<h4 style="textext-align:center;font-size: 31px;margin:10px 0px;color: #150497;background-color: #fff2b4;border: 1px solid #a0a0a0;border-radius: 2px;padding: 4px;margin-top: 32px;font-family: sans-serif;font-weight: bold;">${qrName}</h4>`
            );
        printWindow.document.write(
            `<h3 style="text-align:center;font-size: 21px;margin-top: 14px;margin-bottom: 25px;">(${qrAddress})</h3>`
            );

        printWindow.document.write(
            `<div style="width:100%;margin-bottom: 20px;"> <div style="background-color: #ffffff;padding: 13px;display: inline-block;border: 1px solid;border-radius: 11px;">${qrCode}</div></div>`
            );

        // printWindow.document.write(qrCode);
        printWindow.document.write(
            `<img src="${QrImage}"  style="width:80%;margin;max-height: 400px;border: 2px solid #ffb39b;padding: 6px;background-color: #ffffff;object-fit: cover;" >`
            );
        printWindow.document.write(
            `<div style="margin-bottom: 20px;"> <img src="${logo}"  style="width:100px;margin;max-height: 400px;border: 1px solid #ccc2bf;padding: 6px;background-color: #ffffff;object-fit: cover;position: relative;bottom: 0px;margin-top: 30px;border-radius: 14px;" ></div>`
            );

        printWindow.document.write(
            `<h3 style="text-align:center;font-size: 23px;margin-top: 2px;margin-bottom: 3px;color: #df6435;font-family: math;">IG: Barodaplus</h3>`
            );
        printWindow.document.write(
            `<h3 style="text-align:center;font-size: 26px;margin-top: 0px;margin-bottom: 27px;color: #303030;font-family: math;">www.Barodaplus.com</h3>`
            );


        printWindow.document.write('</body></html>');

        printWindow.document.close();
        printWindow.print();

    });
});
</script>




@endsection



@section('content')

<main id="site__main"
    class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

    <div class="max-w-[1065px] mx-auto">


        <div class="bg-white shadow lg:rounded-b-2xl lg:-mt-10 dark:bg-dark2">

            <div class="relative overflow-hidden w-full timeline-cover">

                @if(optional($homeGanesh)->image)
                <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$homeGanesh->image}}/lg" alt="{{$homeGanesh->name}}"
                    class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm">
                @else
                <img src="{{asset('front/images/product/product-1.jpg')}}" alt="{{$homeGanesh->name}}"
                    class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm">
                @endif


                <div class="w-full bottom-0 absolute left-0 bg-gradient-to-t from -black/60 pt-10 z-10"></div>

                <div class="absolute bottom-0 right-0 m-4 z-20">
                    <div class="flex items-center gap-3">
                        
                        @if(Auth::check() && Auth::id() == $user->id)
                            <button uk-toggle="target: #home-upload-cover-popup"
                                class="button bg-black/10 text-white flex items-center gap-2 backdrop-blur-small">
                                <ion-icon name="camera-outline" class="text-lg"></ion-icon> Change Photo
                            </button>
                        @endif

                    </div>
                </div>
            </div>

            <div class="lg:px-10 md:p-5 p-3">
                <div class="flex flex-col justify-center">
                    <div class="flex lg:items-center justify-between max-md:flex-col">
                        <div class="flex-1">
                            <h3 class="md:text-2xl text-base font-bold text-black dark:text-white text-capitalize">
                                {{$homeGanesh->name}} </h3>
                            <p class=" font-normal text-gray-500 mt-2 flex gap-2 flex-wrap dark:text-white/80">
                                <span class="text-capitalize"> {{$homeGanesh->address}} </span>
                            </p>
                        </div>

                        <div>
                            <div class="flex items-center gap-2 mt-1">

                            @if(!$homeGanesh->status == 'active')
                                    <button
                                        class="button bg-danger flex items-center gap-1 text-white py-2 px-3.5 shadow ml-auto bg-danger font-semibold">
                                        <!-- <ion-icon name="add-outline" class="text-xl"></ion-icon>  -->
                                        <a href="@if($homeGanesh->user_id == Auth::id()){{route('ganeshFestivalCompetition.create', ['type'=>'group'])}}@else # @endif"> <span
                                                class="text-sm">
                                                <ion-icon name="trophy"
                                                    class="text-lg drop-shadow-md md hydrated live-d-icon" role="img"
                                                    aria-label="trophy"></ion-icon>
                                                    સ્પર્ધામાં ભાગ લીધેલ નથી
                                            </span> </a>
                                    </button>

                                @endif


                                <div>

                                    <a href="#" id="share-button"
                                        class="rounded-lg bg-secondery flex px-2.5 py-2 dark:bg-dark2  font-semibold">
                                        <ion-icon class="text-xl font-semibold mr-2" name="share-outline"></ion-icon>
                                        Share
                                    </a>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="flex items-center justify-between  border-t border-gray-100 px-2 dark:border-slate-700">

                
                <nav
                    class="flex gap-0.5 rounded-xl overflow-hidden -mb-px text-gray-500 font-medium text-sm overflow-x-auto dark:text-white">
                    <a href="{{route('group.show', 1)}}"
                        class="inline-block py-3 leading-8 px-3.5 border-b-2 border-blue-600 text-blue-600">Discussion</a>
                    
                </nav>
                
                <div
                    class="flex items-center gap-1 text-sm p-3 bg-secondery py-2 mr-2 rounded-xl max-md:hidden dark:bg-white/5">
                    <ion-icon name="search" class="text-lg"></ion-icon>
                    <input placeholder="Search .." class="!bg-transparent">
                </div>

            </div>

        </div>



        <div class="flex 2xl:gap-12 gap-10 mt-8 max-lg:flex-col" id="js-oversized">

        <div class="flex-1 xl:space-y-6 space-y-3">

@php
$visible = false;
@endphp

@if(checkIsHomeOwner($homeGanesh->id))

<div class="bg-white rounded-xl shadow-sm p-4 space-y-4 text-sm font-medium border1 dark:bg-dark2">
    
<form>
    <div class="flex items-center gap-3">
        <div class="flex-1 bg-slate-100 hover:bg-opacity-80 transition-all rounded-lg cursor-pointer dark:bg-dark3"
            uk-toggle="target: #create-status">
            <div class="py-2.5 text-center dark:text-white"> What do you have in mind? </div>
        </div>
        <div class="cursor-pointer hover:bg-opacity-80 p-1 px-1.5 rounded-lg transition-all bg-pink-100/60 hover:bg-pink-100"
            uk-toggle="target: #create-status">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 stroke-pink-600 fill-pink-200/70"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M15 8h.01" />
                <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
                <path d="M3.5 15.5l4.5 -4.5c.928 -.893 2.072 -.893 3 0l5 5" />
                <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l2.5 2.5" />
            </svg>
        </div>

    </div>
    </form>
</div> 
@endif

<div class="bg-white rounded-xl shadow-sm text-sm font-medium border1 dark:bg-dark2">

    <div class="flex gap-3 sm:p-4 p-2.5 text-sm font-medium">
        <!-- <p class="alert alert-warning" style="color: #ff6c6c;font-size: 17px;word-spacing: 3px;">ફોટો,
            વિડિયો અને સ્ટેટસ ટુક્જ સમયમાં શરૂ કરવામાં આવશે.</p> -->
    </div>
</div>


<div class="bg-white rounded-xl shadow-sm text-sm font-medium border1 dark:bg-dark2">


@foreach($posts as $post)
    <div class="flex gap-3 sm:p-4 p-2.5 text-sm font-medium">
        <a href="{{route('timeline')}}"> <img src="{{asset('front')}}/images/avatars/avatar-3.jpg"
                alt="" class="w-9 h-9 rounded-full"> </a>
        <div class="flex-1">
            <a href="{{route('timeline')}}">
                <h4 class="text-black dark:text-white"> {{$post->user->first_name}} {{$post->user->last_name}} </h4>
            </a>
            <div class="text-xs text-gray-500 dark:text-white/80"> 2 hours ago</div>
        </div>

        <div class="-mr-1">
            <button type="button" class="button-icon w-8 h-8">
                <ion-icon class="text-xl" name="ellipsis-horizontal"></ion-icon>
            </button>
            <div class="w-[245px]"
                uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click">
                <nav>
                    <a href="#">
                        <ion-icon class="text-xl shrink-0" name="bookmark-outline"></ion-icon> Add to
                        favorites
                    </a>
                    <a href="#">
                        <ion-icon class="text-xl shrink-0" name="notifications-off-outline"></ion-icon>
                        Mute Notification
                    </a>
                    <a href="#" uk-toggle="target: #group-report-popup">
                        <ion-icon class="text-xl shrink-0" name="flag-outline"></ion-icon> Report this
                        post
                    </a>
                    <a href="#">
                        <ion-icon class="text-xl shrink-0" name="share-outline"></ion-icon> Share your
                        profile
                    </a>
                    <hr>
                    <a href="#" class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50">
                        <ion-icon class="text-xl shrink-0" name="stop-circle-outline"></ion-icon>
                        Unfollow
                    </a>
                </nav>
            </div>
        </div>
    </div>

    
    <div class="relative w-full lg:h-96 h-full sm:px-4">
    
        <div class="sm:px-4 p-2.5 pt-0">
            <p class="font-normal">{{$post->description}}</p>
        </div>
            <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$post->gallery}}/lg" alt=""
            class="sm:rounded-lg w-full h-full object-cover">
    </div>

    <!-- <div class="sm:p-4 p-2.5 flex items-center gap-4 text-xs font-semibold">
        <div>
            <div class="flex items-center gap-2.5">
                <button type="button" class="button-icon text-red-500 bg-red-100 dark:bg-slate-700">
                    <ion-icon class="text-lg" name="heart"></ion-icon>
                </button>
                <a href="#">1,300</a>
            </div>
            <div class="p-1 px-2 bg-white rounded-full drop-shadow-md w-[212px] dark:bg-slate-700 text-2xl"
                uk-drop="offset:10;pos: top-left; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-bottom-left">


                <div class="w-2.5 h-2.5 absolute -bottom-1 left-3 bg-white rotate-45 hidden"></div>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <button type="button" class="button-icon bg-slate-200/70 dark:bg-slate-700">
                <ion-icon class="text-lg" name="chatbubble-ellipses"></ion-icon>
            </button>
            <span>260</span>
        </div>

        <button type="button" class="button-icon ml-auto">
            <ion-icon class="text-xl" name="paper-plane-outline"></ion-icon>
        </button>
        <button type="button" class="button-icon">
            <ion-icon class="text-xl" name="share-outline"></ion-icon>
        </button>

    </div> -->

    <!-- <div
        class="sm:p-4 p-2.5 border-t border-gray-100 font-normal space-y-3 relative dark:border-slate-700/40">

        <div class="flex items-start gap-3 relative">
            <a href="{{route('timeline')}}"> <img src="{{asset('front')}}/images/avatars/avatar-3.jpg"
                    alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
            <div class="flex-1">
                <a href="{{route('timeline')}}"
                    class="text-black font-medium inline-block dark:text-white"> Monroe </a>
                <p class="mt-0.5"> .. </p>
            </div>
        </div>


    </div> -->

  

</div>

</div>

@endforeach

            <div class="lg:w-[400px]">
                <div class="lg:space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6"
                    uk-sticky="media: 1024; end: #js-oversized; offset: 80">

                    <div class="box p-5 px-6">

                        <div class="flex items-center justify-between mb-4">
                            <div class="w-full qr-wrapper text-center">
                                {!! DNS2D::getBarcodeSVG(route('showHome', $homeGanesh->id), 'QRCODE', 3, 3) !!}
                            </div><button
                                class="bg-marron button text-lg bg-primary text-white flex-1 mt-4 button text-lg bg-secondary text-white flex-1  btn-print-qr"
                                data-image="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$homeGanesh->image}}/lg"
                                data-name="{{$homeGanesh->name}}" data-address="{{$homeGanesh->address}}"
                                data-logo="{{asset('front/images/web')}}/barodaplus-logo.png"
                                data-qr="{{ DNS2D::getBarcodeSVG(route('showHome', $homeGanesh->id), 'QRCODE', 8, 8) }}">
                                <ion-icon name="download-outline" class="text-lg"></ion-icon> Print QR
                            </button>
                        </div>



                        <div class="flex items-ce justify-between text-black dark:text-white">
                            <h3 class="font-bold text-lg mb-1"> About </h3>
                            <a href="#" class="text-sm text-blue-500">Edit</a> 
                        </div>

                        <ul class="text-gray-700 space-y-4 mt-2 mb-1 text-sm dark:text-white">
                            <li>{{$homeGanesh->description}}</li>

                            @if($homeGanesh->decoration)
                            <li class="flex items-start gap-3">
                                <ion-icon name="newspaper-outline" class="text-2xl drop-shadow-md md hydrated mr-2"
                                    role="img" aria-label="videocam"></ion-icon>
                                <div>
                                    <span class="font-semibold text-black dark:text-white">Decoration / Theme </span>
                                    <p>{{$homeGanesh->decoration}}</p>
                                </div>
                            </li>
                            @endif

                            <li class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                </svg>
                                <div> Followers <span class="font-semibold text-black dark:text-white">
                                        {{countGroupMembers($homeGanesh->id)}} People </span> </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </div>
    



    @include('front.widget.popup.home-upload-cover-popup')
    @include('front.widget.popup.upload-photos-popup')
    

</main>

</div>

@endsection