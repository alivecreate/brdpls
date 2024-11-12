<div class="lg:flex 2xl:gap-12 gap-10 w-full md:w-auto md:px-20 mx-auto" id="js-oversized">


    <div class="lg:w-3/4">

        <div class="lg:max-w-full w-full">

            <div class="page-heading">

                <nav class="nav__underline">
                    <ul class="group detail-tab"
                        uk-switcher="connect: #group-tabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">
                        <li> <a class="text-lg" href="#"> Overview </a> </li>
                        <li> <a class="text-lg" href="#"> Products </a> </li>
                        <li> <a class="text-lg" href="#"> Services </a> </li>
                        <li> <a class="text-lg" href="#"> Contact </a> </li>
                    </ul>
                </nav>
            </div>

            <!-- group list tabs -->
            <div class="uk-switcher" id="group-tabs">
                <div class="card p-4 mb-6">

                    @if(count($businessDetail->gallery)>0)
                    <div class="relative capitalize font-medium text-sm text-center mt-4 mb-2" tabindex="-1"
                        uk-slider="autoplay: true;finite: true">

                        <div class="overflow-hidden uk-slider-container">

                            <ul class="-ml-2 uk-slider-items w-[calc(100%+0.5rem)]">

                                @foreach($businessDetail->gallery(3)->get() as $gallery)
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
                            <p class="text-lg">Experience:</p>
                            <strong>{{$businessDetail->gst}}</strong>
                        </div>
                        @endif

                    </div>
                </div>


                <!-- card layout 3 -->
                <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-2.5">

                    @foreach($businessDetail->products as $product)

                    <div class="card">
                        <a href="{{route('businessDetail', ['city' => $businessDetail->city, 'slug' => $businessDetail->slug])}}?p={{$product->slug}}">
                            <div class="card-media h-24">
                                <img src="{{asset('front')}}/images/group/group-cover-2.jpg" alt="">
                                <div class="card-overly">{{$businessDetail->slug}}</div>
                            </div>
                        </a>

                        <div class="card-body">
                            <a href="{{route('timeline-page')}}">
                                <h4 class="card-title"> {{$product->name}} </h4>
                            </a>
                            <p class="card-text">{{$product->category ? $product->category->name : 'No Category'}}</p>

                            <h3>₹. {{$product->price}}</h3>
                            <div class="flex gap-3">
                                <a href="#" class="button p-2 bg-primary text-white">
                                    Inquire Now
                                </a>

                                <a href="#" id="shareBtn" class="shareBtn button p-2 bg-green" title="Whatsapp Us">
                                    <ion-icon class="text-xl text-white md hydrated" name="logo-whatsapp"></ion-icon>
                                </a>

                                <a href="#" id="shareBtn" class="shareBtn button p-2 bg-slate-200/60"  title="Share This Product">
                                    <ion-icon class="text-xl" name="arrow-redo"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- sidebar -->
    <div class="lg:w-1/4 mt-4">

        <div class="lg:space-y-6 space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6"
            uk-sticky="media: 1024; end: #js-oversized; offset: 80">


            <div class="box p-5 px-6">
                <div class="mb-4">
                    <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$businessDetail->logo}}/md" alt=""
                        class="object-cover w-40  inset-0">
                </div>
                <div class="flex items-ce justify-between text-black dark:text-white">

                    <h3 class="font-bold text-lg"> {{$businessDetail->title}} {{$businessDetail->contact_person}}</h3>

                    @if($businessOwner)
                    <a target="_blank" href="{{route('myBusiness.show', $businessDetail->slug)}}"
                        class="text-sm text-blue-500">Edit</a>
                    @endif
                </div>

                <!-- <a href="tel:+91{{$businessDetail->phone1}}"
                class="inline-flex text-lg items-center gap-2 px-2.5 pr-3 bg-slate-200/60 rounded-full aria-expanded:text-black aria-expanded:border-black aria-expanded:dark:text-white aria-expanded:dark:border-white">
                {{$businessDetail->phone1}}
            </a>

            <a href="tel:+91{{$businessDetail->phone2}}"
                class="inline-flex text-lg items-center gap-2 px-2.5 pr-3 bg-slate-200/60 rounded-full aria-expanded:text-black aria-expanded:border-black aria-expanded:dark:text-white aria-expanded:dark:border-white">
                {{$businessDetail->phone2}}
            </a> -->

                <a class="font-bold text-lg subheading-h2  mr-2"> {{$businessDetail->phone1}}</a>,
                <a class="font-bold text-lg subheading-h2 "> {{$businessDetail->phone2}}</a>


                <ul class="text-gray-700 space-y-4 mt-4 text-sm dark:text-white/80 text-capitalize">
                    <li class="flex items-center gap-3">
                        <ion-icon class="font-bold text-3xl lg:text-5xl" name="location-outline"></ion-icon>
                        <div>
                            @if($businessDetail->building){{$businessDetail->building}}, @endif
                            @if($businessDetail->street) {{$businessDetail->street}}, @endif{{$businessDetail->city}},
                            @if($businessDetail->pincode){{$businessDetail->pincode}}. @endif </div>
                    </li>

                    @if($businessDetail->socialLinks)
                    <ul class='social-links'>
                        @if($businessDetail->socialLinks->facebook)
                        <li><a href="{{$businessDetail->socialLinks->facebook}}">
                                <ion-icon name="logo-facebook" class="text-2xl text-blue-600"></ion-icon>
                            </a></li>
                        @endif

                        @if($businessDetail->socialLinks->instagram)
                        <li><a href="{{$businessDetail->socialLinks->instagram}}">
                                <ion-icon name="logo-instagram" class="text-2xl text-pink-600"></ion-icon>
                            </a></li>

                        @endif

                        @if($businessDetail->socialLinks->twitter)
                        <li><a href="{{$businessDetail->socialLinks->twitter}}">
                                <ion-icon name="logo-twitter" class="text-2xl text-sky-600"></ion-icon>
                            </a></li>
                        @endif

                        @if($businessDetail->socialLinks->linnkedin)
                        <li><a href="{{$businessDetail->socialLinks->linnkedin}}">
                                <ion-icon name="logo-linnkedin" class="text-2xl text-sky-600"></ion-icon>
                            </a></li>
                        @endif

                        @if($businessDetail->socialLinks->youtube)
                        <li><a href="{{$businessDetail->socialLinks->youtube}}">
                                <ion-icon name="logo-youtube" class="text-2xl text-red-600"></ion-icon>
                            </a></li>
                        @endif

                        @if($businessDetail->socialLinks->pinterest)
                        <li><a href="{{$businessDetail->socialLinks->pinterest}}">
                                <ion-icon name="logo-pinterest" class="text-2xl text-red-600"></ion-icon>
                            </a></li>
                        @endif

                    </ul>

                    @endif

                    <div class="detail-links">
                        <ul>
                            <li>
                                <a href="#" id="shareBtn"
                                    class="shareBtn inline-flex lg:text-lg text-md items-center gap-2 py-2 px-2.5 pr-3 bg-slate-200/60 rounded-full aria-expanded:text-black aria-expanded:border-black aria-expanded:dark:text-white aria-expanded:dark:border-white">
                                    <ion-icon class="text-xl" name="arrow-redo"></ion-icon>
                                    Share This Page
                                </a>
                            </li>
                            <li>
                                <a href="mailto:{{$businessDetail->email1}}"
                                    class="inline-flex lg:text-lg text-md items-center gap-2 py-2 px-2.5 pr-3 bg-slate-200/60 rounded-full aria-expanded:text-black aria-expanded:border-black aria-expanded:dark:text-white aria-expanded:dark:border-white">
                                    <ion-icon class="text-xl" name="mail-outline"></ion-icon>
                                    Send Email
                                </a>

                            </li>

                            <li>
                                <a href="#" id="shareBtn"
                                    class="inline-flex lg:text-lg text-md items-center gap-2 py-2 px-2.5 pr-3 bg-slate-200/60 rounded-full aria-expanded:text-black aria-expanded:border-black aria-expanded:dark:text-white aria-expanded:dark:border-white">
                                    <ion-icon class="text-xl" name="globe-outline"></ion-icon>
                                    Visit Website
                                </a>
                            </li>

                            <li>
                                <a href="#"
                                    class="inline-flex lg:text-lg text-md items-center gap-2 py-2 px-2.5 pr-3 bg-slate-200/60 rounded-full aria-expanded:text-black aria-expanded:border-black aria-expanded:dark:text-white aria-expanded:dark:border-white">
                                    <ion-icon class="text-xl" name="star-outline"></ion-icon>
                                    Give Rating
                                </a>
                            </li>
                        </ul>
                    </div>
                </ul>


                <div class="w-full">
                    <div class="flex">
                        <div id="selected-list" class="mt-4">
                            <h3 class="font-bold text-base text-gray-700">Categories:</h3>
                            <ul id="selected-items" class="list-none">

                                @foreach($businessDetail->categories as $selectedCategory)
                                <li id="selected-{{$selectedCategory->id}}"
                                    class="selected-item text-1rem flex justify-between items-center py-1"
                                    data-id="{{$selectedCategory->id}}">{{$selectedCategory->name}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>