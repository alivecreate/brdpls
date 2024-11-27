@extends('front.layout.landing-layout')
@section('custom-script')

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
                    <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-2.5">

                        @foreach($products as $product)

                        <div class="card mb-2">
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
                                <p class="card-text">{{$product->category ? $product->category->name : 'No Category'}}
                                </p>

                                <h3>₹. {{$product->price}}</h3>
                                <div class="flex gap-3">
                                    <a href="#" class="button p-2 bg-primary text-white">
                                        Inquire Now
                                    </a>

                                    <a href="#" id="shareBtn" class="shareBtn button p-2 bg-green" title="Whatsapp Us">
                                        <ion-icon class="text-xl text-white md hydrated" name="logo-whatsapp">
                                        </ion-icon>
                                    </a>

                                    
                                    <a href="#" id="shareBtn" class="shareBtn button p-2 bg-slate-200/60"
                                        title="Share This Product">
                                        <ion-icon class="text-xl" name="arrow-redo"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>

                    {{ $products->links() }}
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