@extends('front.layout.my-business-layout')

@section('meta')
<meta name="business-id" content="{{$myBusiness->id}}">
<meta name="user-id" content="{{Auth::id()}}">
@endsection


@section('custom-script')

<script>
$(document).ready(function() {
    $('.product').addClass('active');

    $('.my-b-product a').addClass('uk-active-tab');


});
</script>
@endsection



@section('content')


<main id="site__main" class="p-2.5 h-[calc(100vh-var(--m-top))] mt-20">
    <div class="2xl:gap-12 gap-10 w-full mx-auto mt-10 container-w" id="js-oversized">

    @include('front.pages.my-business.breadcrumb', ['breadcrumbType' => 'product'])

        <div class="2xl:gap-12 gap-10 2xl:max-w-[1220px] mx-auto bg-white">

        @include('front.pages.my-business.page-tab')

        <div id="setting_tab" class="uk-switcher md:py-6 p-6 overflow-hidden text-black text-sm">
            <div class='uk-active' id="logo">
                <div>

                    @if($products->count() > 0)
                    <div class="grid sm:grid-cols-3  lg:grid-cols-4 grid-cols-2 gap-3"
                        uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
                        @foreach($products as $product)
                        <div class="card">
                            <a href="{{route('timeline-page')}}">
                                <div class="card-media sm:aspect-[2/1.7] h-40">

                                    
                                    @if(isset($product->image) && strlen($product->image) < 400)
                                        @if(strpos($product->image, ',') == false)
                                            <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$product->image}}/xs" alt="{{$product->name}}">
                                        @else
                                        
                                        <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{getArrayImage($product->image)[0]}}/xs" alt="{{$product->name}}">
                                        

                                        @endif
                                    @else
                                        <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="">
                                    @endif

                                    <div class="card-overly"></div>
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="{{route('timeline-page')}}">
                                    <h4 class="card-title"> {{$product->name}} </h4>
                                </a>
                                <p class="card-text">{{$product->category ? $product->category->name : 'No Category'}}
                                </p>

                                <h3>₹. {{$product->price}}</h3>
                                <div class="flex gap-3">

                                    <a class="button p-2 bg-primary text-white"
                                        href="{{route('businessDetail', ['city' => $myBusiness->city, 'slug' => $myBusiness->slug])}}?p={{$product->slug}}">

                                        <ion-icon class="text-xl" name="eye-outline"></ion-icon>
                                    </a>

                                    <button type="button" class="button p-2 bg-danger text-white btn-delete"
                                        data-name="{{$product->name}}" data-type="Product"
                                        data-action="{{route('myBusiness.productDelete', $product->id)}}"
                                        data-id="{{$product->id}}" uk-toggle="target: #confirm-delete-popup">
                                        <ion-icon class="text-xl" name="trash-outline"></ion-icon>
                                    </button>

                                    <button type="button" class="button p-2 btn-sm bg-success text-white btn-edit"
                                        data-product-category="{{$product->category->name}}"
                                        data-name="{{$product->name}}" data-price="{{$product->price}}"
                                        data-type="Product" data-items="{{$product->items}}"
                                        data-unit="{{$product->unit}}" data-description="{!! $product->description !!}"
                                        data-action="{{route('myBusiness.productUpdate', $product->id)}}"
                                        data-id="{{$product->id}}" 
                                        data-images="{{$product->image}}"

                                        uk-toggle="target: #edit-product-popup">
                                        <ion-icon class="text-xl" name="create-outline"></ion-icon>
                                    </button>

                                    <a href="#" id="shareBtn" class="shareBtn button p-2 bg-slate-200/60">
                                        <ion-icon class="text-xl" name="arrow-redo"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    @else
                    <h1 class="text-danger">There are no products.</h1>
                    @endif
                </div>
            </div>
        </div>
        </div>

    </div>
    </div>
    </div>
</main>
</div>



@include('front.widget.popup.delete-confirm-popup')
@include('front.widget.popup.share-popup')

@include('front.widget.popup.add-product-popup')
@include('front.widget.popup.edit-product-popup')


@endsection