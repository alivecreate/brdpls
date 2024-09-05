@extends('front.layout.ganesh-festival-layout')


@section('custom-head')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
@endsection

@section('content')


    @section('custom-script')
    <script>
            document.getElementById('share-button').addEventListener('click', async () => {
                // Check if the Web Share API is supported
                if (navigator.share) {
                    try {
                        if (window.location.href.indexOf('?') > -1) {
                                // If there are existing parameters, append '&ref=share'
                                var link = window.location.href += '&ref=share';
                            } else {
                                // If there are no parameters, add '?ref=share'
                                var link =  window.location.href += '?ref=share';
                            }
                        await navigator.share({
                            title: '{{optional($group)->name}}',
                            text: '*🚩 બરોડા પ્લસ ગણેશ સ્પર્ધા - 2024 🚩 - {{optional($group)->name}}* - મંડળને વોટ કરવા અને ફોટો તેમજ વિડિયો જોવા નીચે આપેલી લિન્ક પર ક્લિક કરો.',
                            url: link
                        });
                        console.log('Content shared successfully!');
                    } catch (error) {
                        console.error('Error sharing:', error);
                    }
                } else {
                    alert('Your browser does not support the Web Share API.');
                }
            });
        </script>

@endsection


<main id="site__main"
    class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">
    <div class="lg:flex 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto mt-10" id="js-oversized">

        @include('front.ext.nav-mobile-menu')

        <div class="flex-1 px-6">

            <div class="w-full">
                <p class='heading-h1 font-semibold page-title text-underline'>ગણેશ સ્પર્ધા ફી </p>

                <p class='subheading-h3 font-semibold font-semibold mb-0'>Note: ગણેશ સ્પર્ધા તા. 07-09-2024 સવારે 10 વાગ્યેથી શરુ થશે.</p>

                <div id="type1-2Form" class="competition-form">
                    
                    @if($group)
                    <div class="flex md:items-center space-x-4 p-4 rounded-md box">
                        <div class="sm:w-20 w-14 sm:h-20 h-14 flex-shrink-0 rounded-lg relative">
                            @if(optional($group)->cover)
                            <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$group->cover}}/sm"
                                alt="{{$group->name}}"
                                class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm">
                            @else
                            <img src="{{asset('front/images/product/product-1.jpg')}}" alt="{{$group->name}}"
                                class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm">
                            @endif

                        </div>
                        <div class="flex-1">
                            <a
                                class="md:text-lg text-base font-semibold capitalize text-black dark:text-white">{{$group->name}}</a>

                            <div class="flex space-x-2 items-center text-sm font-normal flex-icon">
                                <div>
                                    <ion-icon class='text-xl' name="location-outline"></ion-icon>
                                    {{$group->address}}
                                </div>
                            </div>
                            <div class="flex space-x-2 items-center text-sm font-normal flex-icon mt-2">

                                <div>
                                    <ion-icon class='text-xl' name="time-outline"></ion-icon>
                                    {{$group->created_at}}
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex gap-2">
                            <a href="{{route('ganeshFestivalGroup.show', $group->slug)}}" class="button bg-primary text-white flex-1"> View</a> 
                        </div>
                    </div>

                    @if (session('error'))
                    <p class="text-danger">{{session('error')}}</p>
                    @endif

                     @if (count($group->competitions) == 1 && ($group->myCompetition[0]->status == 'pending' || $group->myCompetition[0]->status == null))


                     <img src="{{asset('front/images/web')}}/alivecreate-payment-501.jpg"  width="300"
                        style="text-align: center;margin: 0 auto;margin-top:30px"
                    />
                     

                    @elseif(count($group->competitions) == 1 && $group->myCompetition[0]->status == 'active')
                    <div class="flex w-full items-center gap-4 mt-6">
                        <p class="font-semibold btn-md lg:px-10 text-success text-md w-full">ગણેશ સ્પર્ધાનું પેમેન્ટ મળી
                            ગયેલ છે.<span class="ripple-overlay"></span></p>
                    </div>

                    <p class="font-semibold btn-md button lg:px-10 bg-success text-white text-24 w-full text-wrap">ગણેશ સ્પર્ધાની
                        વોટિંગ તા. 07-09-2024 એ શરૂ થશે.<span class="ripple-overlay"></span></p>

                    @endif

                    @endif

                </div>

            </div>
        </div>


        <div class="2xl:w-[380px] lg:w-[330px] w-full">

            <div class="lg:space-y-6 space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6"
                uk-sticky="media: 1024; end: #js-oversized; offset: 80">



                <div class="box p-5 px-6">

                    <div class="flex items-baseline justify-between text-black dark:text-white">
                        <h3 class="font-bold text-base"> Recent Ganesh Mandal </h3>
                        <a href="" class="text-sm text-blue-500">See all</a>
                    </div>

                    <div class="side-list">

                        @foreach($groups as $group)
                        <div class="side-list-item">
                            <a href="{{ route('ganeshFestivalGroup.show', $group->slug) }}">

                                @if(optional($group)->cover)
                                <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$group->cover}}/icon"
                                    alt="{{$group->name}}" class="side-list-image rounded-full cover">
                                @else
                                <img src="{{asset('front/images/product/product-1.jpg')}}" alt="{{$group->name}}"
                                    class="side-list-image rounded-full">
                                @endif
                            </a>
                            <div class="flex-1">
                                <a href="{{ route('ganeshFestivalGroup.show', $group->slug) }}">
                                    <h4 class="side-list-title">{{$group->name}}</h4>
                                </a>
                                <div class="side-list-info"> {{$group->address}} </div>
                            </div>
                            <a href="{{ route('ganeshFestivalGroup.show', $group->slug) }}"
                                class="button bg-secondery">View</a>
                        </div>
                        @endforeach

                    </div>

                </div>

                
                <div class="bg-white rounded-xl shadow p-5 px-6 border1 dark:bg-dark2">
                    <img src="{{asset('front/images/web')}}/advertise-and-sponsorship-barodaplus.webp"/>
                </div>

            </div>

        </div>

    </div>

</main>



</div>
</div>
</div>



@include('front.widget.product-modal-block')


@endsection