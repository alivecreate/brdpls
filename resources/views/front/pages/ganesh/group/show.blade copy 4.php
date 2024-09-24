@extends('front.layout.ganesh-festival-layout')


@section('title')
{{ $group->name }}, {{ $group->city }}, Ganesh Festival - Barodaplus.com
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
                title: '{{optional($group)->name}}',
                text: '*🚩 બરોડા પ્લસ ગણેશ સ્પર્ધા - 2024 🚩 - {{optional($group)->name}}* - મંડળને વોટ કરવા અને ફોટો તેમજ વિડિયો જોવા નીચે આપેલી લિન્ક પર ક્લિક કરો.',
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

$(document).ready(function() {
    $('.tab-home').addClass('border-blue-600 text-blue-600');
});
</script>




@endsection



@section('content')

<main id="site__main"
    class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

    <div class="max-w-[1065px] mx-auto">

        @include('front.pages.ganesh.group.navbar-group')



        <div class="flex 2xl:gap-12 gap-10 mt-8 max-lg:flex-col" id="js-oversized">

            <div class="lg:w-[400px] lg:hidden w-full">

                <div class="lg:space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6"
                    uk-sticky="media: 1024; end: #js-oversized; offset: 80">

                    <div class="box p-5 px-6">

                        @if(checkCompetitionSchedule()->status == 'live')

                        @if($group->competition($group->id))
                        <div class="flex-center mb-4">
                            <h2 class="heading-h2 text-danger text-underline">ગણેશ સ્પર્ધા (Live)</h2>
                            <img class="live-icon" src="{{asset('front/images/web')}}/live-icon.gif"
                                alt="Barodaplus live voting">
                        </div>
                        @endif

                        <div class="text-black dark:text-white">
                            @if($group->competition($group->id))

                            @php
                            $GaneshCompetition = $group->competition($group->id);
                            @endphp

                            <div class="flex items-center justify-between mb-4">
                                <div class="flex-column">
                                    <h3 class="font-bold text-lg mb-1"> શ્રેષ્ઠ મૂર્તિ</h3>

                                    <h2 class='live-voting-counter font-semibold'>Total Votes:
                                        <span>{{number_with_commas($GaneshCompetition->countVote($GaneshCompetition->id, 1))}}</span>
                                    </h2>
                                </div>
                                <form method="post" action="{{route('FestivalCompetitionVoting.store')}}">
                                    @csrf


                                    @if(Auth::check() && $user->status == 'active')
                                    @if(isVoted($GaneshCompetition->id, 1))
                                    <p class="button text-lg bg-success text-white flex-1 btn-not-allowed">
                                        <ion-icon name="thumbs-up-outline"></ion-icon> Voted
                                    </p>

                                    @elseif(!isVotedCategory(1))
                                    <input type="hidden" name="participant_id"
                                        value="{{$group->competition($group->id)->id}}" />
                                    <input type="hidden" name="category_id" value="1" />
                                    <input type="hidden" name="votable_id"
                                        value="{{$group->competition($group->id)->participant->id}}" />

                                    <button class="button text-lg bg-primary text-white flex-1">
                                        <ion-icon name="thumbs-up-outline"></ion-icon> Vote Now
                                    </button>

                                    @else
                                    <p
                                        class="button text-lg bg-secondary text-white flex-1 btn-voting-disable btn-not-allowed">
                                        <ion-icon name="thumbs-up-outline"></ion-icon> Vote Now
                                    </p>
                                    @endif
                                    @else

                                    <p
                                        class="button text-lg bg-secondary text-white flex-1 btn-voting-disable btn-not-allowed">
                                        <ion-icon name="thumbs-up-outline"></ion-icon> Vote Now
                                    </p>
                                    @endif


                                </form>
                            </div>

                            <div class="flex items-center justify-between mb-4">

                                <div class="flex-column">
                                    <h3 class="font-bold text-lg mb-1"> શ્રેષ્ઠ ડેકોરેશન </h3>
                                    <h2 class='live-voting-counter font-semibold'>Total Votes:
                                        {{totalVotes($GaneshCompetition->participant_id, 2)}}
                                    </h2>
                                </div>

                                <form method="post" action="{{route('FestivalCompetitionVoting.store')}}">
                                    @csrf
                                    <input type="hidden" name="participant_id"
                                        value="{{$group->competition($group->id)->id}}" />
                                    <input type="hidden" name="category_id" value="2" />
                                    <input type="hidden" name="votable_id"
                                        value="{{$group->competition($group->id)->participant->id}}" />


                                    @if(Auth::check() && $user->status == 'active')
                                    @if(isVoted($GaneshCompetition->id, 2))
                                    <p class="button text-lg bg-success text-white flex-1 btn-not-allowed">
                                        <ion-icon name="thumbs-up-outline"></ion-icon> Voted
                                    </p>

                                    @elseif(!isVotedCategory(2))
                                    <button class="button text-lg bg-primary text-white flex-1">
                                        <ion-icon name="thumbs-up-outline"></ion-icon> Vote Now
                                    </button>

                                    @else
                                    <p
                                        class="button text-lg bg-secondary text-white flex-1 btn-voting-disable btn-not-allowed">
                                        <ion-icon name="thumbs-up-outline"></ion-icon> Vote Now
                                    </p>
                                    @endif
                                    @else

                                    <p
                                        class="button text-lg bg-secondary text-white flex-1 btn-voting-disable btn-not-allowed">
                                        <ion-icon name="thumbs-up-outline"></ion-icon> Vote Now
                                    </p>
                                    @endif
                                </form>
                            </div>
                            @endif
                        </div>

                        @else


                        @endif



                        <div class="flex items-center justify-between mb-4">
                            <div class="w-full qr-wrapper text-center">
                                {!! DNS2D::getBarcodeSVG(route('ganeshFestivalGroup.show', $group->slug), 'QRCODE', 3,
                                3) !!}
                            </div>
                            @php
                            $printqr = false;
                            @endphp

                            @if(Auth::id() == $group->user_id && $printqr == true)
                            <button
                                class="bg-marron button text-lg bg-primary text-white flex-1 mt-4 button text-lg bg-secondary text-white flex-1  btn-print-qr"
                                data-image="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$group->cover}}/lg"
                                data-name="{{$group->name}}" data-address="{{$group->address}}"
                                data-logo="{{asset('front/images/web')}}/barodaplus-logo.png"
                                data-qr="{{ DNS2D::getBarcodeSVG(route('ganeshFestivalGroup.show', $group->slug), 'QRCODE', 8, 8) }}">
                                <ion-icon name="download-outline" class="text-lg"></ion-icon> Print QR
                            </button>
                            @endif

                        </div>



                        <div class="flex text-black dark:text-white">
                            <h3 class="font-bold text-lg mb-1 text-left"> About </h3>
                            <!-- <a href="#" class="text-sm text-blue-500">Edit</a> -->
                        </div>

                        <ul class="text-gray-700 space-y-4 mt-2 mb-1 text-sm dark:text-white">
                            <li>{{$group->description}}</li>

                            @if($group->decoration)
                            <li class="flex items-start gap-3">
                                <ion-icon name="newspaper-outline" class="text-2xl drop-shadow-md md hydrated mr-2"
                                    role="img" aria-label="videocam"></ion-icon>
                                <div>
                                    <span class="font-semibold text-black dark:text-white">Decoration / Theme </span>
                                    <p>{{$group->decoration}}</p>
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
                                        {{countGroupMembers($group->id)}} People </span> </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="lg:space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6 mb-10 mt-4"
                    uk-sticky="media: 1024; end: #js-oversized; offset: 80">
                    <div class="box p-5 px-6">
                        <a target="_blank"
                            href="https://api.whatsapp.com/send?phone=918401194152&text=*Hello%20Mehulbhai,%20loan,%20insurance,%20jamin-makan%20Inquiry%20from%20Barodaplus*">
                            <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/fa365b8e-eacd-4063-a145-a1a909220f00/md"
                                style="width:100%;" />
                        </a>
                    </div>

                    <div class="box p-5 px-6 mb-6">
                        <a target="_blank"
                            href="https://api.whatsapp.com/send?phone=919137634193&text=*Hello%20Alivecreate%20Web%20Solutions%20-%20Inquiry%20from%20Barodaplus*">
                            <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/3316dc6e-4992-4be7-63f6-41b0dcbbaf00/md"
                                style="width:100%;" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex-1 xl:space-y-6 space-y-3">

                @php
                $visible = false;
                @endphp
                @if(checkIsGroupOwner($group->id) && $visible == true)
                <!-- <div class="bg-white rounded-xl shadow-sm p-4 space-y-4 text-sm font-medium border1 dark:bg-dark2">
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
                        <div class="cursor-pointer hover:bg-opacity-80 p-1 px-1.5 rounded-lg transition-all bg-sky-100/60 hover:bg-sky-100"
                            uk-toggle="target: #create-status">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 stroke-sky-600 fill-sky-200/70 "
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4z" />
                                <path
                                    d="M3 6m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" />
                            </svg>
                        </div>
                    </div>
                </div> -->
                @endif


                @if(Auth::check() && Auth::id() && Auth::id() == $group->participant_id)
                <button uk-toggle="target: #home-upload-cover-popup"
                    class="button bg-black/10 text-white flex items-center gap-2 backdrop-blur-small">
                    <ion-icon name="camera-outline" class="text-lg"></ion-icon> Change Photo
                </button>
                @endif



                @if(Auth::check() && Auth::id() && Auth::id() == $group->user_id)

                <div class="bg-white rounded-xl shadow-sm p-4 space-y-4 text-sm font-medium border1 dark:bg-dark2">
                    <div class="flex items-center gap-3">
                        <div class="flex-1 bg-slate-100 hover:bg-opacity-80 transition-all rounded-lg cursor-pointer dark:bg-dark3"
                            uk-toggle="target: #create-photo-group">
                            <div class="py-2.5 text-center dark:text-white"> What do you have in mind? </div>
                        </div>
                        <div class="cursor-pointer hover:bg-opacity-80 p-1 px-1.5 rounded-lg transition-all bg-pink-100/60 hover:bg-pink-100"
                            uk-toggle="target: #create-photo-group">
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


                        <div class="cursor-pointer hover:bg-opacity-80 p-1 px-1.5 rounded-xl transition-all bg-sky-100/60 hover:bg-sky-100 dark:bg-white/10 dark:hover:bg-white/20"
                            uk-toggle="target: #create-video-group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 stroke-sky-600 fill-sky-200/70 "
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4z" />
                                <path
                                    d="M3 6m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" />
                            </svg>
                        </div>


                    </div>
                </div>
                @endif


                @if($groupPosts)
                @foreach($groupPosts as $groupPost)

                <div class="bg-white rounded-xl shadow-sm text-sm font-medium border1 dark:bg-dark2">

                    <div class="flex gap-3 sm:p-4 p-2.5 text-sm font-medium">


                        <a href="">


                            @if(getUserData($groupPost->user_id)->image)
                            <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{getUserData($groupPost->user_id)->image}}/xs"
                                alt="" class="w-9 h-9 rounded-full cover">
                            @else
                            <img src="{{asset('front/images/avatars')}}/avatar-3.jpg" alt=""
                                class="w-9 h-9 rounded-full cover">
                            @endif

                        </a>

                        <div class="flex-1">
                            <a href="">{{getUserData($groupPost->user_id)->first_name}}
                                {{getUserData($groupPost->user_id)->last_name}}</a>
                            <div class="text-xs text-gray-500 dark:text-white/80">
                                <p>{{ $groupPost->created_at->diffForHumans() }} ({{$groupPost->year}})</p>
                            </div>
                        </div>

                        @if(Auth::id() == getUserData($groupPost->user_id)->id)
                        <div class="-mr-1">
                            <button type="button" class="button-icon w-8 h-8">
                                <ion-icon class="text-xl" name="ellipsis-horizontal"></ion-icon>
                            </button>
                            <div class="w-[245px]"
                                uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click">
                                <nav>
                                    <form action="{{ route('group-posts.destroy', $groupPost->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this post?');">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="d-flex flex-center">
                                            <ion-icon class="text-xl shrink-0 mr-2" name="trash-outline"></ion-icon>
                                            Delete Post
                                        </button>
                                    </form>



                                </nav>
                            </div>
                        </div>
                        @endif
                    </div>

                    <div class="sm:px-4 p-2.5 pt-0">
                        <p class="font-md">{{$groupPost->description}}</p>
                    </div>


                    @if(isset($groupPost->image))

                    @if(count(getPostImages($groupPost->image)) == 1)

                    <div class="relative w-full lg:h-96 h-full sm:px-4 mb-4 blur-background image-container">
                        <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{getPostImages($groupPost->image)[0]}}/lg"
                            alt="" class="sm:rounded-lg w-full h-full object-cover">
                    </div>

                    @elseif(count(getPostImages($groupPost->image)) > 1)

                    @php
                    // Call the function once and store the result in a variable
                    $postImages = getPostImages($groupPost->image);
                    @endphp


                    <div class="relative uk-visible-toggle sm:px-4 mb-4" tabindex="-1"
                        uk-slideshow="animation: push;ratio: 4:3">

                        <ul class="uk-slideshow-items overflow-hidden rounded-xl">

                            @if(is_array($postImages) && count($postImages) > 0)
                            @foreach($postImages as $index => $image)
                            <li class="w-full">
                                <a class="inline">
                                    <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$image}}/lg"
                                        alt="{{ $image }}" class="w-full h-full absolute insta-0 contain">
                                </a>
                            </li>

                            @endforeach
                            @endif

                        </ul>

                        <a class="nav-prev left-6" href="#" uk-slideshow-item="previous">
                            <ion-icon name="chevron-back" class="text-2xl"></ion-icon>
                        </a>
                        <a class="nav-next right-6" href="#" uk-slideshow-item="next">
                            <ion-icon name="chevron-forward" class="text-2xl"></ion-icon>
                        </a>
                    </div>


                    @endif

                    @endif


                    @if($groupPost->video)

                    @if(getVideoStatus($groupPost->video)['status'] == 'ready')
                    <div class="relative w-full h-full blur-background video-container">
                        <div style="padding-top: 56.25%;height: inherit;">
                            <iframe
                                src="https://customer-awdbchbk0llt915y.cloudflarestream.com/{{$groupPost->video}}/watch"
                                style="border: none; position: absolute; top: 0; height: 100%; width: 100%"
                                allow="accelerometer; gyroscope; autoplay; encrypted-media; picture-in-picture;"
                                allowfullscreen="true"></iframe>
                        </div>
                    </div>
                    @elseif(getVideoStatus($groupPost->video)['status'] == 'processing')
                    <div class="relative w-full h-full sm:px-4 mb-4 blur-background"
                        style="text-align: center;background: black;">
                        <img src="{{getVideoStatus($groupPost->video)['thumbnail']}}" style="margin: 0 auto;" />
                        <p class="bg-alert-processing">Your video is under processing please wait.</p>
                    </div>
                    @endif
                    @endif



                </div>
                @endforeach
                @endif
                
                @if(count($groupPosts) == 0)
                    <p class="alert-danger2">No Post Available</p>
                @endif


            </div>

            <div class="lg:w-[400px] hidden lg:block">
                <div class="lg:space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6"
                    uk-sticky="media: 1024; end: #js-oversized; offset: 80">
                    <div class="box p-5 px-6">


                        @if(checkCompetitionSchedule()->status == 'live')

                        @if(!Auth::id() || (getUserData() && getUserData()->status != 'active'))

                        @endif


                        @if($group->competition($group->id) && $group->competition($group->id)->status == 'active')

                        <div class="flex-center mb-4">
                            <h2 class="heading-h2 text-danger text-underline">ગણેશ સ્પર્ધા (Live)</h2>
                            <img class="live-icon" src="{{asset('front/images/web')}}/live-icon.gif"
                                alt="Barodaplus live voting">
                        </div>

                        <div class="text-black dark:text-white">


                            @if($group->competition($group->id))
                            @php
                            $GaneshCompetition = $group->competition($group->id);
                            @endphp

                            <div class="flex items-center justify-between mb-4">
                                <div class="flex-column">
                                    <h3 class="font-bold text-lg mb-1"> શ્રેષ્ઠ મૂર્તિ</h3>

                                    <h2 class='live-voting-counter font-semibold'>Total Votes:
                                        <span>{{number_with_commas($GaneshCompetition->countVote($GaneshCompetition->id, 1))}}</span>
                                    </h2>
                                </div>
                                <form method="post" action="{{route('FestivalCompetitionVoting.store')}}">
                                    @csrf


                                    @if(Auth::check() && $user->status == 'active')
                                    @if(isVoted($GaneshCompetition->id, 1))
                                    <p class="button text-lg bg-success text-white flex-1 btn-not-allowed">
                                        <ion-icon name="thumbs-up-outline"></ion-icon> Voted
                                    </p>

                                    @elseif(!isVotedCategory(1))

                                    <input type="hidden" name="participant_id"
                                        value="{{$group->competition($group->id)->id}}" />
                                    <input type="hidden" name="category_id" value="1" />
                                    <input type="hidden" name="votable_id"
                                        value="{{$group->competition($group->id)->participant->id}}" />
                                    <button class="button text-lg bg-primary text-white flex-1">
                                        <ion-icon name="thumbs-up-outline"></ion-icon> Vote Now
                                    </button>

                                    @else
                                    <p
                                        class="button text-lg bg-secondary text-white flex-1 btn-voting-disable btn-not-allowed">
                                        <ion-icon name="thumbs-up-outline"></ion-icon> Vote Now
                                    </p>
                                    @endif
                                    @else

                                    <p
                                        class="button text-lg bg-secondary text-white flex-1 btn-voting-disable btn-not-allowed">
                                        <ion-icon name="thumbs-up-outline"></ion-icon> Vote Now
                                    </p>
                                    @endif


                                </form>
                            </div>

                            <div class="flex items-center justify-between mb-4">

                                <div class="flex-column">
                                    <h3 class="font-bold text-lg mb-1"> શ્રેષ્ઠ ડેકોરેશન </h3>
                                    <h2 class='live-voting-counter font-semibold'>Total Votes:
                                        {{totalVotes($GaneshCompetition->participant_id, 2)}}
                                    </h2>
                                </div>

                                <form method="post" action="{{route('FestivalCompetitionVoting.store')}}">
                                    @csrf
                                    <input type="hidden" name="participant_id"
                                        value="{{$group->competition($group->id)->id}}" />
                                    <input type="hidden" name="category_id" value="2" />
                                    <input type="hidden" name="votable_id"
                                        value="{{$group->competition($group->id)->participant->id}}" />


                                    @if(Auth::check() && $user->status == 'active')
                                    @if(isVoted($GaneshCompetition->id, 2))
                                    <p class="button text-lg bg-success text-white flex-1 btn-not-allowed">
                                        <ion-icon name="thumbs-up-outline"></ion-icon> Voted
                                    </p>

                                    @elseif(!isVotedCategory(2))
                                    <button class="button text-lg bg-primary text-white flex-1">
                                        <ion-icon name="thumbs-up-outline"></ion-icon> Vote Now
                                    </button>

                                    @else
                                    <p
                                        class="button text-lg bg-secondary text-white flex-1 btn-voting-disable btn-not-allowed">
                                        <ion-icon name="thumbs-up-outline"></ion-icon> Vote Now
                                    </p>
                                    @endif
                                    @else

                                    <p
                                        class="button text-lg bg-secondary text-white flex-1 btn-voting-disable btn-not-allowed">
                                        <ion-icon name="thumbs-up-outline"></ion-icon> Vote Now
                                    </p>
                                    @endif
                                </form>
                            </div>
                            @endif
                        </div>
                        @endif



                        <div class="flex items-center justify-between mb-4">
                            <div class="w-full qr-wrapper text-center">
                                {!! DNS2D::getBarcodeSVG(route('ganeshFestivalGroup.show', $group->slug), 'QRCODE', 3,
                                3) !!}
                            </div>
                            @if(Auth::id() == $group->user_id && $printqr == true)
                            <button
                                class="bg-marron button text-lg bg-primary text-white flex-1 mt-4 button text-lg bg-secondary text-white flex-1  btn-print-qr"
                                data-image="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$group->cover}}/lg"
                                data-name="{{$group->name}}" data-address="{{$group->address}}"
                                data-logo="{{asset('front/images/web')}}/barodaplus-logo.png"
                                data-qr="{{ DNS2D::getBarcodeSVG(route('ganeshFestivalGroup.show', $group->slug), 'QRCODE', 8, 8) }}">
                                <ion-icon name="download-outline" class="text-lg"></ion-icon> Print QR
                            </button>
                            @endif

                        </div>

                        @endif
                        <div class="text-left flex text-black dark:text-white">
                            <h3 class="font-bold text-lg mb-1 text-ubderline"> About </h3>
                            <!-- <a href="#" class="text-sm text-blue-500">Edit</a> -->
                        </div>

                        <ul class="text-gray-700 space-y-4 mt-2 mb-1 text-sm dark:text-white">
                            <li>{{$group->description}}</li>

                            @if($group->decoration)
                            <li class="flex items-start gap-3">
                                <ion-icon name="newspaper-outline" class="text-2xl drop-shadow-md md hydrated mr-2"
                                    role="img" aria-label="videocam"></ion-icon>
                                <div>
                                    <span class="font-semibold text-black dark:text-white">Decoration / Theme </span>
                                    <p>{{$group->decoration}}</p>
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
                                        {{countGroupMembers($group->id)}} People </span> </div>
                            </li>
                        </ul>
                    </div>



                    <div class="lg:space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6 mb-10 mt-4"
                        uk-sticky="media: 1024; end: #js-oversized; offset: 80">
                        <div class="box p-5 px-6">
                            <a target="_blank"
                                href="https://api.whatsapp.com/send?phone=918401194152&text=*Hello%20Mehulbhai,%20loan,%20insurance,%20jamin-makan%20Inquiry%20from%20Barodaplus*">

                                <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/fa365b8e-eacd-4063-a145-a1a909220f00/md"
                                    style="width:100%;" />
                            </a>
                        </div>

                        <div class="box p-5 px-6 mb-6">
                            <a target="_blank"
                                href="https://api.whatsapp.com/send?phone=919137634193&text=*Hello%20Alivecreate%20Web%20Solutions%20-%20Inquiry%20from%20Barodaplus*">

                                <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/3316dc6e-4992-4be7-63f6-41b0dcbbaf00/md"
                                    style="width:100%;" />
                            </a>
                        </div>
                    </div>



                </div>
            </div>

        </div>

    </div>



    @include('front.widget.confirm-popup')

    @include('front.widget.popup.upload-cover-popup')
    @include('front.widget.popup.upload-photos-group-popup')
    @include('front.widget.popup.upload-video-group-popup')



</main>


@endsection