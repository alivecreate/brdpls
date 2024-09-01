@extends('front.layout.ganesh-festival-layout')


@section('custom-head')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
@endsection

@section('content')

@section('custom-script')
@if (session('error'))

<script>
toastr.error('{{ session('error') }}');
</script>
@endif

@if (session('success'))
<script>
toastr.success('{{ session('success') }}');
</script>
@endif

@endsection


<main id="site__main"
    class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] 2xl:ml-[--w-side]  xl:ml-[--w-side-sm] h-[calc(100vh-var(--m-top))] mt-[--m-top] p-6">

    <div class="2xl:max-w-[1220px] max-w-[1065px] mx-auto lg:mt-2 mt-6 mt-2"
        id="js-oversized">
        @include('front.ext.nav-mobile-menu')

        <div class="flex-1 px-6">

        <h1 class="text-success payment-fail" >Payment Failed, Please Try Again.</h1>

        </div>


        <div class="2xl:w-[380px] lg:w-[330px] w-full">

            <div class="lg:space-y-6 space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6"
                uk-sticky="media: 1024; end: #js-oversized; offset: 80">



                <div class="box p-5 px-6">

                    <div class="flex items-baseline justify-between text-black dark:text-white">
                        <h3 class="font-bold text-base"> Recent Ganesh Mandal </h3>
                        <a href="" class="text-sm text-blue-500">See all</a>
                    </div>

                    <div class="side-list">

                        @foreach($groups as $group)
                        <div class="side-list-item">
                            <a href="{{ route('ganeshFestivalGroup.show', $group->slug) }}">

                                @if(optional($group)->cover)
                                <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$group->cover}}/icon"
                                    alt="{{$group->name}}" class="side-list-image rounded-full cover">
                                @else
                                <img src="{{asset('front/images/product/product-1.jpg')}}" alt="{{$group->name}}"
                                    class="side-list-image rounded-full">
                                @endif
                            </a>
                            <div class="flex-1">
                                <a href="{{ route('ganeshFestivalGroup.show', $group->slug) }}">
                                    <h4 class="side-list-title">{{$group->name}}</h4>
                                </a>
                                <div class="side-list-info"> {{$group->address}} </div>
                            </div>
                            <a href="{{ route('ganeshFestivalGroup.show', $group->slug) }}"
                                class="button bg-secondery">View</a>
                        </div>
                        @endforeach

                    </div>

                </div>

                
                <div class="bg-white rounded-xl shadow p-5 px-6 border1 dark:bg-dark2">
                    <img src="{{asset('front/images/web')}}/advertise-and-sponsorship-barodaplus.webp"/>
                </div>

            </div>

        </div>

    </div>

</main>



</div>
</div>
</div>



@include('front.widget.product-modal-block')


@endsection