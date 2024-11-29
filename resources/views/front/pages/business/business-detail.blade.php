@extends('front.layout.landing-layout')
@section('custom-script')
    
<script>
    $(document).ready(function() {
        $('.mybusiness').addClass('active');
        $('.uk-parent').addClass('uk-open');
        $('.uk-parent ul').removeAttr('hidden');

        $('.home').addClass('uk-active');

        
    });
</script>
@endsection


@section('content')

<!-- main contents -->
<main id="site__main" class="mt-0 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

    
    @include('front.pages.business.contents.business-detail-header')


    <div class="lg:flex 2xl:gap-12 gap-10 w-full md:w-auto md:px-20 mx-auto" id="js-oversized">


    <div class="lg:w-3/4">

        <div class="lg:max-w-full w-full">


            @include('front.pages.business.contents.business-detail-tab')
            

            <div>
                <div class="card p-4 mb-6">
                    @if(count($businessDetail->gallery)>0)
                    <div class="relative capitalize font-medium text-sm text-center mt-4 mb-2" tabindex="-1"
                        uk-slider="autoplay: true;finite: true">

                        <div class="overflow-hidden uk-slider-container">
                                
                            <ul class="-ml-2 uk-slider-items w-[calc(100%+0.5rem)]">

                                @foreach($businessDetail->gallery(8)->get() as $gallery)
                                <li class="col-3 pr-2">
                                    <a href="#">
                                        <div class="relative overflow-hidden rounded-lg">
                                            <div class="relative w-full h-40">

                                                <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$gallery->image}}/md"
                                                    alt="" class="object-cover w-full h-full inset-0">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>


                            <button type="button"
                                class="absolute bg-white rounded-full top-16 -left-4 grid w-9 h-9 place-items-center shadow dark:bg-dark3"
                                uk-slider-item="previous">
                                <ion-icon name="chevron-back" class="text-2xl"></ion-icon>
                            </button>
                            <button type="button"
                                class="absolute -right-4 bg-white rounded-full top-16 grid w-9 h-9 place-items-center shadow dark:bg-dark3"
                                uk-slider-item="next">
                                <ion-icon name="chevron-forward" class="text-2xl"></ion-icon>
                            </button>

                        </div>
                    </div>
                    @endif


                    @if($businessDetail->description)<p class="pt-2 pb-6">{{$businessDetail->description}}</p>@endif


                    <hr class="my-5">
                    <h2 class="text-lg font-semibold mb-4">Business Detail:</h2>

                    <div class="grid md:grid-cols-3 sm:grid-cols-3 grid-cols-2 gap-2.5">
                        <div class="">
                            <p>Name:</p>
                            <strong>{{$businessDetail->name}}</strong>
                        </div>

                        @if($businessDetail->establishment_year)
                        <div class="">
                            <p class="text-lg">Establishment Year:</p>
                            <strong>{{$businessDetail->establishment_year}}</strong>
                        </div>
                        @endif

                        @if($businessDetail->establishment_year)
                        <div class="">
                            <p class="text-lg">Experience:</p>
                            <strong>@if($businessExperience == 0) Started in {{$businessDetail->establishment_year}}
                                @elseif($businessExperience == 1) {{$businessExperience}} Year @else
                                {{$businessExperience}} Years @endif</strong>
                        </div>
                        @endif

                        @if($businessDetail->gst)
                        <div class="">
                            <p class="text-lg">GST No:</p>
                            <strong>{{$businessDetail->gst}}</strong>
                        </div>
                        @endif

                    </div>

                    

                    <hr class="my-5">
                    <h2 class="text-lg font-semibold mb-4">Contact Detail:</h2>

                    <div class="grid md:grid-cols-3 sm:grid-cols-3 grid-cols-2 gap-2.5">
                        
                        @if($businessDetail->phone1)
                            <div class="">
                                <p>Phone:</p>
                                <strong>{{$businessDetail->phone1}}</strong><br>
                                <strong>{{$businessDetail->phone2}}</strong>
                            </div>
                        @endif

                        @if($businessDetail->whatsapp1)
                        <div class="">
                            <p class="text-lg">Whatsapp:</p>
                            <strong>{{$businessDetail->whatsapp1}}</strong>
                        </div>
                        @endif

                        @if($businessDetail->email1)
                        <div class="">
                            <p class="text-lg">Email:</p>
                            <strong>{{$businessDetail->email1}}</strong>
                        </div>
                        @endif

                        @if($businessDetail->website)
                        <div class="">
                            <p class="text-lg">Website:</p>
                            <strong><a target="_blank" href="{{$businessDetail->website}}">{{$businessDetail->website}}</a></strong>
                        </div>
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- sidebar -->
    @include('front.pages.business.contents.business-detail-sidebar')


</div>
    
    @include('front.widget.popup.share-popup')

    @include('front.ext.footer')

</main>




@endsection