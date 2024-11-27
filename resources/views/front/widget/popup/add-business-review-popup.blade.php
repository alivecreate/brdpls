<!-- Delete Confirmation Popup -->
<div class="hidden lg:p-20 uk- open" id="add-business-review-popup" uk-modal>
    <div
        class="uk-modal-dialog tt relative overflow-hidden mx-auto bg-white shadow-xl rounded-lg md:w-[520px] w-full dark:bg-dark2">
        <div class="text-center py-4 border-b mb-0 dark:border-slate-700 px-6">
            <h2 class="text-sm heading-h2 font-medium text-black text-left mb-0">Write Review</h2>
            <button type="button" class="button-icon absolute top-0 right-0 m-2.5 uk-modal-close" uk-close>
            </button>
        </div>
        <div>

            <div class="w-3/5 bg-white p-4">
                <div class="w-full row flex mx-4">

                    <div class="col-half">
                        @if(count($businessDetail->gallery)>0)
                            <img class="mb-2 img-thumb-review" src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$businessDetail->gallery(3)->get()[0]['image']}}/sm"
                            alt="">
                        @endif
                    </div>
                
                    <div class="col-half ml-4">
                        <h2 class="heading-2">{{$businessDetail->name}}</h2>
                        <h3 class="heading-4">
                            @if($businessDetail->building){{$businessDetail->building}}, @endif
                            @if($businessDetail->street) {{$businessDetail->street}}, @endif{{$businessDetail->city}},
                            @if($businessDetail->pincode){{$businessDetail->pincode}}. @endif </h3>

                        
        <nav class="my-3">
            <ul uk-tab id="rating-star-popup"
                class="flex gap-3 mt-3 rating-star-popup flex-wrap text-sm text-center text-gray-600 capitalize font-semibold dark:text-white/80"
                uk-switcher="connect: #ttabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">

                <li data-star="1">
                    <ion-icon class='text-size2' name="star-outline"></ion-icon>
                </li>
                <li data-star="2">
                    <ion-icon class='text-size2' name="star-outline"></ion-icon>
                </li>
                <li data-star="3">
                    <ion-icon class='text-size2' name="star-outline"></ion-icon>
                </li>
                <li data-star="4">
                    <ion-icon class='text-size2' name="star-outline"></ion-icon>
                </li>
                <li data-star="5">
                    <ion-icon class='text-size2' name="star-outline"></ion-icon>
                </li>
            </ul>
        </nav>
                    </div>                
                </div>

                <form class="needs-validation data-form" action="{{route('businessReviewStore')}}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="business_id" value="{{ $businessDetail->id }}">
                    <input type="hidden" id="review-rating" name="rating" value="">
                    <div class="space-y-4">

                        <div class="md:flex items-center">
                            <div class="flex-1 mt-4">
                                <textarea type="text" rows="7"
                                  name="review" placeholder="Write Review Here (Max Length 1500)" 
                                 class="w-full" maxlength="1500"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center text-center mt-5 mb-7">
                        <button type="submit" class="button text-lg lg:px-10 bg-primary text-white max-md:flex-1"> Submit Review
                            <span class="ripple-overlay"></span></button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>