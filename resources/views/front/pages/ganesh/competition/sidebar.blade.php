
<div class="2xl:w-[380px] lg:w-[330px] w-full">

<div class="lg:space-y-6 space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6"
    uk-sticky="media: 1024; end: #js-oversized; offset: 80">


    <div class="box p-5 px-6">

        <div class="flex items-baseline justify-between text-black dark:text-white">
            <h3 class="font-bold text-base"> Recent Ganesh Mandal </h3>
            <a href="" class="text-sm text-blue-500">See all</a>
        </div>

        <div class="side-list">

        @foreach($groups as $grouplist)    
            <div class="side-list-item">
                <a href="#">
                    
                @if(optional($grouplist)->cover)
                    <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$grouplist->cover}}/icon" alt="{{$grouplist->name}}"
                    class="side-list-image rounded-full cover" 
                    >
                @else 
                    <img src="{{asset('front/images/product/product-1.jpg')}}" alt="{{$grouplist->name}}"
                    class="side-list-image rounded-full">
                @endif
                </a>
                <div class="flex-1">
                    <a  href="#">
                        <h4 class="side-list-title">{{$grouplist->name}}</h4>
                    </a>
                    <div class="side-list-info"> {{$grouplist->address}} </div>
                </div>
                <a href="#" class="button bg-secondery">View</a>
            </div>
            @endforeach
            
        </div>

    </div>

    
    <div class="bg-white rounded-xl shadow p-5 px-6 border1 dark:bg-dark2">
        <img src="{{asset('front/images/web')}}/advertise-and-sponsorship-barodaplus.webp"/>
    </div>

</div>

</div>
