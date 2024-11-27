@extends('front.layout.landing-layout')
@section('custom-script')

<script>
$(document).ready(function() {
    $('.mybusiness').addClass('active');
    $('.uk-parent').addClass('uk-open');
    $('.uk-parent ul').removeAttr('hidden');

    $('.review').addClass('uk-active');

});
</script>
@endsection


@section('content')

<!-- main contents -->
<main id="site__main" class="mt-0 h-[calc(100vh-var(--m-top))] mt-[--m-top]">


    @include('front.pages.business.contents.business-detail-header')


    <div class="lg:flex 2xl:gap-12 gap-4 w-full md:w-auto md:px-20 mx-auto" id="js-oversized">


        <div class="lg:w-3/4">

            <div class="lg:max-w-full w-full">

                @include('front.pages.business.contents.business-detail-tab')

                <div class="">
                    <div class="card p-4 mb-6">

                        <h1 class="text-lg mb-6 text-dark">Reviews & Ratings</h1>
                        <div class="row flex mb-4">
                            <div
                                class="bg-primary-green flex flex-col font-semibold text-lg items-center justify-center rounded-lg rating-badge ">
                                {{getAverageBusinessRating($businessDetail->id)}}</div>
                            <div class="ml-4">
                                <h2 class="heading-2 text-dark">{{getTotalBusinessRating($businessDetail->id)}} Ratings
                                </h2>
                                <h3>Average Rating of this business is {{getAverageBusinessRating($businessDetail->id)}}
                                    out of {{getTotalBusinessRating($businessDetail->id)}} total rating</h3>
                            </div>

                        </div>

                        <div class="grid gap-4">
                        <h1 class="text-lg text-dark mt-6">User Reviews</h1>
                            @foreach($businessDetail->reviews()->get() as $review)
                            <div>
                                <div class="side-list-item mt-3">
                                    @if(optional($review->user)->image)
                                        <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{getUserDetail($review->user_id)->image}}/xs"
                                            alt="" class="side-list-image rounded-md">
                                    @else
                                        <img src="default-image.jpg" alt="Default Image">
                                    @endif

                                    <div class="flex-1">
                                            <h4 class="side-list-title">{{getUserDetail($review->user_id)->first_name}}
                                                {{getUserDetail($review->user_id)->last_name}}</h4>
                                        <div class="side-list-info"> Updated 2 day ago </div>
                                    </div>

                                @if($review->user_id == getUserData()->id)
                                    <!-- <button class="button bg-secondery">Edit</button> -->
                                    <form action="{{route('businessReviewDelete')}}" method="POST">
                                        @csrf 
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{$review->id}}">
                                        <button type="submit" class="button bg-secondery"><ion-icon class="text-lg" name="trash-outline"></ion-icon></button>
                                    </form>
                                @endif

                                </div>

                                <nav class="my-3">
                                    <ul uk-tab id=""
                                        class="flex gap-2 mt-2 flex-wrap text-sm text-center text-gray-600 capitalize font-semibold dark:text-white/80"
                                        uk-switcher="connect: #ttabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">

                                        @for($i = 1; $i <= 5; $i++) <li data-star="{{$i}}">

                                            @if($i <= $review->rating)
                                                <ion-icon class='text-one-half active-star' name="star"></ion-icon>
                                                @else
                                                <ion-icon class='text-one-half' name="star-outline"></ion-icon>
                                                @endif

                                                </li>
                                                @endfor
                                    </ul>
                                </nav>
                                <h3>{{$review->review}}</h3>
                            </div>
                            <hr>

                            @endforeach

                        </div>

                        {{ $products->links() }}
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