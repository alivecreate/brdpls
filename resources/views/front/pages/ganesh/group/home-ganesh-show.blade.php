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
                <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$homeGanesh->image}}/lg"
                    alt="{{$homeGanesh->name}}"
                    class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm">
                @else
                <img src="{{asset('front/images/product/product-1.jpg')}}" alt="{{$homeGanesh->name}}"
                    class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm">
                @endif


                <div class="w-full bottom-0 absolute left-0 bg-gradient-to-t from -black/60 pt-10 z-10"></div>

                <div class="absolute bottom-0 right-0 m-4 z-20">
                    <div class="flex items-center gap-3">

                        @if(Auth::check() && Auth::id() && Auth::id() == $homeGanesh->participant_id)
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
                                    <a
                                        href="@if($homeGanesh->user_id == Auth::id()){{route('ganeshFestivalCompetition.create', ['type'=>'group'])}}@else # @endif">
                                        <span class="text-sm">
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
                    <a href="#"
                        class="inline-block py-3 leading-8 px-3.5 border-b-2 border-blue-600 text-blue-600">Discussion</a>
                </nav>

            </div>

        </div>


        <div class="flex 2xl:gap-12 gap-10 mt-8 max-lg:flex-col" id="js-oversized">

            <div class="lg:w-[400px]  lg:hidden w-full">
                <div class="lg:space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6"
                    uk-sticky="media: 1024; end: #js-oversized; offset: 80">

                    <div class="box p-5 px-6">
                        @if($homeGanesh->competition($homeGanesh->participant_id))
                        <div class="flex-center mb-4">
                            <h2 class="heading-h2 text-danger text-underline">ગણેશ સ્પર્ધા (Live)</h2>
                            <img class="live-icon" src="{{asset('front/images/web')}}/live-icon.gif"
                                alt="Barodaplus live voting">
                        </div>
                        @endif

                        <div class="text-black dark:text-white">
                            @if($homeGanesh->competition($homeGanesh->participant_id))
                            @php
                            $GaneshCompetition = $homeGanesh->competition($homeGanesh->participant_id);
                            @endphp

                            <div class="flex items-center justify-between mb-4">
                                <div class="flex-column">
                                    <h3 class="font-bold text-lg mb-1"> શ્રેષ્ઠ મૂર્તિ</h3>

                                    <h2 class='live-voting-counter font-semibold'>Total Votes:
                                        <span> {{number_with_commas(totalVotes($homeGanesh->participant_id, 3))}}
                                        </span>
                                    </h2>
                                </div>
                                <form method="post" action="{{route('FestivalCompetitionVoting.store')}}">
                                    @csrf
                                    <input type="hidden" name="participant_id"
                                        value="{{$homeGanesh->competition($homeGanesh->participant_id)->id}}" />
                                    <input type="hidden" name="category_id" value="1" />
                                    <input type="hidden" name="votable_id"
                                        value="{{$homeGanesh->competition($homeGanesh->participant_id)->participant->id}}" />


                                    @if(Auth::check() && $user->status == 'active')
                                    @if(isVoted($GaneshCompetition->id, 3))
                                    <p class="button text-lg bg-success text-white flex-1 btn-not-allowed">
                                        <ion-icon name="thumbs-up-outline"></ion-icon> Voted
                                    </p>

                                    @elseif(!isVotedCategory(3) && $user->status == 'active')
                                    <button class="button text-lg bg-primary text-white flex-1">
                                        <ion-icon name="thumbs-up-outline"></ion-icon> Vote Now
                                    </button>

                                    @else
                                    <p
                                        class="button text-lg bg-secondary text-white flex-1 btn-voting-disable btn-not-allowed">
                                        <ion-icon name="thumbs-up-outline"></ion-icon> Vote Now
                                    </p>
                                    @endif

                                    @endif
                                </form>
                            </div>

                            @endif
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-full qr-wrapper text-center">
                                {!! DNS2D::getBarcodeSVG(route('showHome', $homeGanesh->id), 'QRCODE', 3, 3)
                                !!}
                            </div>
                            
                            <button
                                class="bg-marron button text-lg bg-primary text-white flex-1 mt-4 button text-lg bg-secondary text-white flex-1  btn-print-qr"
                                data-image="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$homeGanesh->image}}/lg"
                                data-name="{{$homeGanesh->name}}"
                                data-logo="{{asset('front/images/web')}}/barodaplus-logo.png"
                                data-qr="{{ DNS2D::getBarcodeSVG(route('showHome', $homeGanesh->id), 'QRCODE', 8, 8) }}">
                                <ion-icon name="download-outline" class="text-lg"></ion-icon> Print QR
                            </button>
                        </div>

                        <div class="flex text-black dark:text-white">
                            <h3 class="font-bold text-lg mb-1"> About </h3>
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

                                <div> Totals Posts <span class="font-semibold text-black dark:text-white">
                                        : {{count($posts)}} </span> </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            
            <div class="flex-1 xl:space-y-6 space-y-3">

                @php
                $visible = false;
                @endphp


                @if(checkIsHomeOwner($homeGanesh->participant_id))

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



                @foreach($posts as $post)
                <div class="bg-white rounded-xl shadow-sm text-sm font-medium border1 dark:bg-dark2">

                    <div class="flex gap-3 sm:p-4 p-2.5 text-sm font-medium">
                        <a href="">
                            @if($post->user->image)
                            <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$post->user->image}}/xs" alt=""
                                class="w-9 h-9 rounded-full cover">
                            @else

                            <img src="{{asset('front/images/avatars')}}/avatar-3.jpg" alt=""
                                class="w-9 h-9 rounded-full cover">
                            @endif

                        </a>
                        <div class="flex-1">
                            <a href="">{{$post->user->first_name}} {{$post->user->last_name}}</a>
                            <div class="text-xs text-gray-500 dark:text-white/80">
                                <p>{{ $post->created_at->diffForHumans() }}</p>
                            </div>
                        </div>

                        @if(Auth::id() == $post->user->id)
                        <div class="-mr-1">
                            <button type="button" class="button-icon w-8 h-8">
                                <ion-icon class="text-xl" name="ellipsis-horizontal"></ion-icon>
                            </button>
                            <div class="w-[245px]"
                                uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click">
                                <nav>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this post?');">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="text-red-400 hover:!bg-red-50 dark:text-light">
                                            <ion-icon class="text-xl shrink-0" name="stop-circle-outline"></ion-icon>
                                            Delete Post
                                        </button>
                                    </form>



                                </nav>
                            </div>
                        </div>
                        @endif
                    </div>


                    <div class="sm:px-4 p-2.5 pt-0">
                        <p class="font-normal">{{$post->description}}</p>
                    </div>
                    <div class="relative w-full lg:h-96 h-full sm:px-4">

                        <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$post->gallery}}/lg" alt=""
                            class="sm:rounded-lg w-full h-full object-cover">
                    </div>

                </div>
                @endforeach

            </div>

            <div class="lg:w-[400px]  hidden lg:block">
                <div class="lg:space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6"
                    uk-sticky="media: 1024; end: #js-oversized; offset: 80">

                    <div class="box p-5 px-6">
                        @if($homeGanesh->competition($homeGanesh->participant_id))
                        <div class="flex-center mb-4">
                            <h2 class="heading-h2 text-danger text-underline">ગણેશ સ્પર્ધા (Live)</h2>
                            <img class="live-icon" src="{{asset('front/images/web')}}/live-icon.gif"
                                alt="Barodaplus live voting">
                        </div>
                        @endif

                        <div class="text-black dark:text-white">
                            @if($homeGanesh->competition($homeGanesh->participant_id))
                            @php
                            $GaneshCompetition = $homeGanesh->competition($homeGanesh->participant_id);
                            @endphp

                            <div class="flex items-center justify-between mb-4">
                                <div class="flex-column">
                                    <h3 class="font-bold text-lg mb-1"> શ્રેષ્ઠ મૂર્તિ</h3>

                                    <h2 class='live-voting-counter font-semibold'>Total Votes:
                                        <span> {{number_with_commas(totalVotes($homeGanesh->participant_id, 3))}}
                                        </span>
                                    </h2>
                                </div>
                                <form method="post" action="{{route('FestivalCompetitionVoting.store')}}">
                                    @csrf
                                    <input type="hidden" name="participant_id"
                                        value="{{$homeGanesh->competition($homeGanesh->participant_id)->id}}" />
                                    <input type="hidden" name="category_id" value="1" />
                                    <input type="hidden" name="votable_id"
                                        value="{{$homeGanesh->competition($homeGanesh->participant_id)->participant->id}}" />


                                    @if(Auth::check() && $user->status == 'active')
                                    @if(isVoted($GaneshCompetition->id, 3))
                                    <p class="button text-lg bg-success text-white flex-1 btn-not-allowed">
                                        <ion-icon name="thumbs-up-outline"></ion-icon> Voted
                                    </p>

                                    @elseif(!isVotedCategory(3) && $user->status == 'active')
                                    <button class="button text-lg bg-primary text-white flex-1">
                                        <ion-icon name="thumbs-up-outline"></ion-icon> Vote Now
                                    </button>

                                    @else
                                    <p
                                        class="button text-lg bg-secondary text-white flex-1 btn-voting-disable btn-not-allowed">
                                        <ion-icon name="thumbs-up-outline"></ion-icon> Vote Now
                                    </p>
                                    @endif

                                    @endif
                                </form>
                            </div>

                            @endif
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-full qr-wrapper text-center">
                                {!! DNS2D::getBarcodeSVG(route('showHome', $homeGanesh->id), 'QRCODE', 3, 3)
                                !!}
                            </div>
                            
                            <button
                                class="bg-marron button text-lg bg-primary text-white flex-1 mt-4 button text-lg bg-secondary text-white flex-1  btn-print-qr"
                                data-image="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$homeGanesh->image}}/lg"
                                data-name="{{$homeGanesh->name}}"
                                data-logo="{{asset('front/images/web')}}/barodaplus-logo.png"
                                data-qr="{{ DNS2D::getBarcodeSVG(route('showHome', $homeGanesh->id), 'QRCODE', 8, 8) }}">
                                <ion-icon name="download-outline" class="text-lg"></ion-icon> Print QR
                            </button>
                        </div>

                        <div class="flex text-black dark:text-white">
                            <h3 class="font-bold text-lg mb-1"> About </h3>
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

                                <div> Totals Posts <span class="font-semibold text-black dark:text-white">
                                        : {{count($posts)}} </span> </div>
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