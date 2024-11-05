@extends('front.layout.my-business-layout')

@section('meta')
<meta name="business-id" content="{{$myBusiness->id}}">
<meta name="user-id" content="{{Auth::id()}}">
@endsection


@section('custom-script')

<script>
$(document).ready(function() {
    $('.product').addClass('active');

});
</script>
@endsection



@section('content')


<main id="site__main" class="p-2.5 h-[calc(100vh-var(--m-top))] mt-20">
    <div class="2xl:gap-12 gap-10 w-full mx-auto mt-10 container-w" id="js-oversized">
        <div class="flex justify-between mb-5">
            <nav class="flex mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Home
                        </a>
                    </li>

                    <li class="inline-flex items-center">
                        <a href="{{route('myBusiness')}}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            My Business
                        </a>
                    </li>

                    <li class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            {{$myBusiness->name}}
                        </a>
                    </li>

                    <li class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            Product
                        </a>
                    </li>
                </ol>
            </nav>

            <nav>
                <ol>
                    <a class="button bg-primary flex items-center gap-1 text-white py-2 px-3.5 shadow ml-auto"
                        data-cid="{{$myBusiness->cid}}" data-name="{{$myBusiness->name}}"
                        uk-toggle="target: #add-product-popup">
                        <ion-icon class="text-xl" name="add-outline"></ion-icon> Add New Product
                    </a></li>

                </ol>
            </nav>
        </div>



        @if($products->count() > 0)
            <div class="grid sm:grid-cols-3  lg:grid-cols-4 grid-cols-2 gap-3"
                uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
                @foreach($products as $product)
                <div class="card">
                    <a href="{{route('timeline-page')}}">
                        <div class="card-media sm:aspect-[2/1.7] h-40">
                            <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="">
                            <div class="card-overly"></div>
                        </div>
                    </a>
                    <div class="card-body">
                        <a href="{{route('timeline-page')}}">
                            <h4 class="card-title"> {{$product->name}} </h4>
                        </a>
                        <p class="card-text">{{$product->category ? $product->category->name : 'No Category'}}</p>

                        <h3>₹. {{$product->price}}</h3>
                        <div class="flex gap-3">
                            
                            <a class="button p-2 bg-primary text-white" 
                                href="{{route('businessDetail', ['city' => $myBusiness->city, 'slug' => $myBusiness->slug])}}?p={{$product->slug}}">
                        
                                <ion-icon class="text-xl" name="eye-outline"></ion-icon>
                            </a>

                            <button type="button" class="button p-2 bg-danger text-white btn-delete" 
                                data-name="{{$product->name}}" data-type="Product"
                                data-action="{{route('myBusiness.productDelete', $product->id)}}" data-id="{{$product->id}}"
                                uk-toggle="target: #confirm-delete-popup"
                                >
                                <ion-icon class="text-xl" name="trash-outline"></ion-icon>
                            </button>

                            <button type="button" class="button p-2 btn-sm bg-success text-white btn-edit" 
                                data-product-category="{{$product->category->name}}" 

                                data-name="{{$product->name}}" data-price="{{$product->price}}" data-type="Product"
                                data-items="{{$product->items}}" data-unit="{{$product->unit}}" data-description="{!! $product->description !!}"
                                data-action="{{route('myBusiness.productUpdate', $product->id)}}" data-id="{{$product->id}}"
                                uk-toggle="target: #edit-product-popup"
                                >
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
</main>
</div>



@include('front.widget.popup.delete-confirm-popup')
@include('front.widget.popup.share-popup')

@include('front.widget.popup.add-product-popup')
@include('front.widget.popup.edit-product-popup')


@endsection