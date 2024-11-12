
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

   
        @if($businessDetail->phone2)
        <a class="font-bold text-lg subheading-h2  mr-2"> {{$businessDetail->phone1}}</a>
        @endif
        @if($businessDetail->phone2),
        <a class="font-bold text-lg subheading-h2 "> {{$businessDetail->phone2}}</a>
        @endif

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
                <li><a target="_blank" href="{{$businessDetail->socialLinks->facebook}}">
                        <ion-icon name="logo-facebook" class="text-2xl text-blue-600"></ion-icon>
                    </a></li>
                @endif

                @if($businessDetail->socialLinks->instagram)
                <li><a target="_blank" href="{{$businessDetail->socialLinks->instagram}}">
                        <ion-icon name="logo-instagram" class="text-2xl text-pink-600"></ion-icon>
                    </a></li>

                @endif

                @if($businessDetail->socialLinks->twitter)
                <li><a target="_blank" href="{{$businessDetail->socialLinks->twitter}}">
                        <ion-icon name="logo-twitter" class="text-2xl text-sky-600"></ion-icon>
                    </a></li>
                @endif

                @if($businessDetail->socialLinks->linkedin)
                <li><a target="_blank" href="{{$businessDetail->socialLinks->linkedin}}">
                        <ion-icon name="logo-linkedin" class="text-2xl text-sky-600"></ion-icon>
                    </a></li>
                @endif

                @if($businessDetail->socialLinks->youtube)
                <li><a target="_blank" href="{{$businessDetail->socialLinks->youtube}}">
                        <ion-icon name="logo-youtube" class="text-2xl text-red-600"></ion-icon>
                    </a></li>
                @endif

                @if($businessDetail->socialLinks->pinterest)
                <li><a target="_blank" href="{{$businessDetail->socialLinks->pinterest}}">
                        <ion-icon name="logo-pinterest" class="text-2xl text-red-800"></ion-icon>
                    </a></li>
                @endif
            </ul>
            @endif

            <div class="detail-links">

                <ul>
                    <li>

                    <?php


$Datamessage = "*{$businessDetail->name}*" . 
     ' - ' . $businessDetail->name. 
           "\nCheck our detail on Barodaplus! Discover more details and shop now:\n". route('businessDetail', ['city' => $businessDetail->city, 'slug' => $businessDetail->slug]);

           
                    ?>

                        <a href="#" id="shareBtn"
                            data-url="{{$Datamessage}}"
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

                    @if($businessDetail->website)
                        <li>
                            <a target="_blank" href="{{$businessDetail->website}}" id="shareBtn"
                                class="inline-flex lg:text-lg text-md items-center gap-2 py-2 px-2.5 pr-3 bg-slate-200/60 rounded-full aria-expanded:text-black aria-expanded:border-black aria-expanded:dark:text-white aria-expanded:dark:border-white">
                                <ion-icon class="text-xl" name="globe-outline"></ion-icon>
                                Visit Website
                            </a>
                        </li>
                    @endif

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