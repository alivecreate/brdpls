@extends('front.layout.landing-layout')


@section('title'){{ $productDetail->name }} in {{$businessDetail->city}} {{ $productDetail->price }} by {{$businessDetail->name}}@endsection

@section('image') https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$businessDetail->city}}/lg @endsection

@section('description') Click on this Link for More Detail About {{ $productDetail->name }}, Follow Barodaplus for Best Offer @endsection

@section('keywords') {{ $productDetail->name }} price, {{ $productDetail->name }} in {{$businessDetail->city}}, {{ $productDetail->name }} near me, {{ $productDetail->name }} - {{$businessDetail->name}} @endsection


<?php


$url = url()->full();
$productUrl = "https://www.barodaplus.com/product/{$productDetail->name}";



$message = "*{$productDetail->name}*" . 
           (isset($productDetail->price) ? " *(Price: ₹. {$productDetail->price})*" : "") . ' - ' . $businessDetail->name. 
           "\nCheck out this product on Barodaplus! Discover more details and shop now:\n{$url}";

$whatsappLink = 'https://wa.me/?phone=91'.$businessDetail->whatsapp1.'&text=' . urlencode($message);

?>

@section('custom-script')

@section('layout-type', 'head-business')
<script>
$(document).ready(function() {
    $('.mybusiness').addClass('active');
    $('.uk-parent').addClass('uk-open');
    $('.uk-parent ul').removeAttr('hidden');

    $('.product').addClass('uk-active');

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
                    <div class="flex max-lg:flex-col 2xl:gap-6 gap-6 md:p-4 rounded-lg box">
                        <!-- product image preview-->
                        <div class="lg:max-w-[520px] w-full">

                            <div class="relative" uk-slideshow="animation: push; ratio: 7:5">

                                <ul class="uk-slideshow-items overflow-hidden rounded-xl" uk-lightbox="animation: fade">
                                    <li class="w-full">
                                        <a class="inline"
                                            href="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/ab5546e6-2956-4d79-ca51-fb473028ab00/lg"
                                            data-caption="Caption 1">
                                            <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/ab5546e6-2956-4d79-ca51-fb473028ab00/lg"
                                                alt="" class="w-full h-full absolute object-cover insta-0">
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="inline"
                                            href="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/54093373-5cb2-42f8-ad30-73ee505a3b00/lg"
                                            data-caption="Caption 2">
                                            <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/54093373-5cb2-42f8-ad30-73ee505a3b00/lg"
                                                alt="" class="w-full h-full absolute object-cover insta-0">
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="inline"
                                            href="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/48ac0748-efdd-49db-3ccd-ed9dcd9c9100/lg"
                                            data-caption="Caption 3">
                                            <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/48ac0748-efdd-49db-3ccd-ed9dcd9c9100/lg"
                                                alt="" class="w-full h-full absolute object-cover insta-0">
                                        </a>
                                    </li>
                                </ul>

                                <!-- slide nav icons -->
                                <div class="max-md:hidden">

                                    <a class="nav-prev m-6" href="#" uk-slideshow-item="previous">
                                        <ion-icon name="chevron-back" class="text-2xl"></ion-icon>
                                    </a>
                                    <a class="nav-next m-6" href="#" uk-slideshow-item="next">
                                        <ion-icon name="chevron-forward" class="text-2xl"></ion-icon>
                                    </a>

                                </div>

                                <ul class="flex justify-center gap-4 py-4 absolute w-full bottom-0">
                                    <li uk-slideshow-item="0"><a href="#"> <img
                                                src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/ab5546e6-2956-4d79-ca51-fb473028ab00/lg"
                                                alt="" class="w-16 h-12 rounded"> </a></li>
                                    <li uk-slideshow-item="1"><a href="#"> <img
                                                src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/54093373-5cb2-42f8-ad30-73ee505a3b00/lg"
                                                alt="" class="w-16 h-12 rounded"></a></li>
                                    <li uk-slideshow-item="2"><a href="#"> <img
                                                src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/48ac0748-efdd-49db-3ccd-ed9dcd9c9100/lg"
                                                alt="" class="w-16 h-12 rounded"></a></li>
                                </ul>

                            </div>

                        </div>

                        <!-- product details -->
                        <div class="flex-2 space-y-8">

                            <div class="md:space-y-5 space-y-3 p-5 max-md:pt-0 md:pr-2">
                                <div>
                                    <h1 class="text-lg font-semibold  text-capitalize"> {{$productDetail->name}} </h1>
                                    <h2 class="text-md text-gray-900 dark:text-white mt-0">
                                        {{$productDetail->category->name}}</h2>
                                </div>

                                <h3 class="text-2xl font-semibold"> ₹. {{$productDetail->price}} </h3>

                                <div>
                                    <p>{!! $productDetail->description !!}</p>
                                </div>

                                <div class="flex gap-2 py-2">
                                    <a href="{{$whatsappLink}}" target="_blank"
                                        class=" button p-2 bg-green text-white text-lg"
                                        uk-tooltip="title: Whatsapp Us">
                                        <ion-icon class="text-xl text-white md hydrated" name="logo-whatsapp">
                                        </ion-icon> Whatsapp
                                    </a>


                                    <button class="button bg-secondery px-3  text-lg" uk-tooltip="title: Chat With Us">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                        </svg> Chat
                                    </button>

                                    <button id="shareBtn" class="shareBtn button bg-secondery px-3"
                                        uk-tooltip="title: Share Product">
                                        <ion-icon class="text-xl md hydrated" name="arrow-redo">
                                        </ion-icon>
                                    </button>

                                </div>

                            </div>


                        </div>

                    </div>

                    @if($businessDetail->products(2)->get()->count() > 0)
                    <div class="sm:my-6 my-3 flex items-center justify-between">
                        <div>
                            <h2 class="text-xl font-semibold text-black text-underline"> Related items </h2>
                            <p class="font-normal text-sm text-gray-500 leading-6 hidden"> Find a group by browsing top
                                categories. </p>
                        </div>
                        <a href="#" class="text-blue-500 sm:block hidden text-sm"> See all </a>
                    </div>


                    <div class="relative" tabindex="-1" uk-slider="auto play: true;finite: true">

                        <div class="uk-slider-container pb-1">

                            <ul class="uk-slider-items w-[calc(100%+10px)]"
                                uk-scrollspy="target: > li; cls: uk-animation-scale-up; delay: 20;repeat:true">


                                @foreach($businessDetail->products(8)->get() as $product)
                                    @if($product->id != $productDetail->id)
                                        <li class="lg:w-1/4 md:w-1/3 sm:w-1/3 w-1/2 pr-3">
                                            <div class="card uk-transition-toggle">

                                                <a
                                                    href="{{route('businessDetail', ['city' => $businessDetail->city, 'slug' => $businessDetail->slug])}}?p={{$product->slug}}">
                                                    <div class="card-media sm:aspect-[2/1.7] h-36">
                                                        <img src="{{asset('front')}}/images/group/group-cover-2.jpg" alt="">
                                                        <div class="card-overly">{{$businessDetail->slug}}</div>
                                                    </div>
                                                </a>


                                                <div class="card-body">
                                                    <a href="{{route('businessDetail', ['city' => $businessDetail->city, 'slug' => $businessDetail->slug])}}?p={{$product->slug}}">
                                                    
                                                        <h4 class="card-title"> {{$product->name}} </h4>
                                                    </a>
                                                    <p class="card-text">
                                                        {{$product->category ? $product->category->name : 'No Category'}}
                                                    </p>

                                                    <h3>₹. {{$product->price}}</h3>
                                                    <div class="flex gap-3">
                                                        <a href="#" class="button p-2 bg-primary text-white">
                                                            Inquire Now
                                                        </a>

                                                        <a href="#" id="shareBtn" class="shareBtn button p-2 bg-green"
                                                            title="Whatsapp Us">
                                                            <ion-icon class="text-xl text-white md hydrated"
                                                                name="logo-whatsapp">
                                                            </ion-icon>
                                                        </a>


                                                        <a href="#" id="shareBtn" class="shareBtn button p-2 bg-slate-200/60"
                                                            title="Share This Product">
                                                            <ion-icon class="text-xl" name="arrow-redo"></ion-icon>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                    @endif
                                @endforeach


                            </ul>
                        </div>


                        <a class="nav-prev !bottom-1/2 !top-auto" href="#" uk-slider-item="previous">
                            <ion-icon name="chevron-back" class="text-2xl"></ion-icon>
                        </a>
                        <a class="nav-next !bottom-1/2 !top-auto" href="#" uk-slider-item="next">
                            <ion-icon name="chevron-forward" class="text-2xl"></ion-icon>
                        </a>


                    </div>
                    @endif

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