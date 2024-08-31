@extends('front.layout.ganesh-festival-layout')

@section('content')

@section('custom-script')
@if (session('error'))

<script>
toastr.error('{{ session('
    error ') }}');
</script>
@endif

@if (session('success'))
<script>
toastr.success('{{ session('
    success ') }}');
</script>
@endif

@endsection




<main id="site__main"
    class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

    <div class="flex max-lg:flex-col 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto lg-mt-4"
        id="js-oversized">

        <div class="flex-1">


            <div class="w-full">


                <p class='heading-h1 font-semibold text-black font-semibold text-black mb-0 text-underline'>ગણેશ મંડળની
                    વિગત</p>
                <!-- <p class="subheading-h2">Ganesh Group Details</p> -->
                <p class='subheading-h3 font-semibold font-semibold mb-0'>Note: એક યુઝર એકાઉન્ટ પરથી માત્ર એકજ ગણેશ
                    મંડળનું રજીસ્ટ્રેશન થઈ શકસે.</p>


                <div id="type1-2Form" class="competition-form">
                    @if($homeCompetition)
                    <div class="flex md:items-center space-x-4 p-4 rounded-md box">
                        <div class="sm:w-20 w-14 sm:h-20 h-14 flex-shrink-0 rounded-lg relative">
                            @if(optional($homeCompetition)->cover)
                                <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$homeCompetition->cover}}/sm" alt="{{$homeCompetition->name}}"
                                class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm"
                                >
                            @else 
                                <img src="{{asset('front/images/product/product-1.jpg')}}" alt="{{$homeCompetition->name}}"
                                class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm">
                            @endif

                        </div>
                        <div class="flex-1">
                            <a
                                class="md:text-lg text-base font-semibold capitalize text-black dark:text-white">{{$homeCompetition->name}}</a>

                            <div class="flex space-x-2 items-center text-sm font-normal flex-icon">
                                <div>
                                    <ion-icon class='text-xl' name="location-outline"></ion-icon>
                                    {{$homeCompetition->address}}
                                </div>
                            </div>
                            <div class="flex space-x-2 items-center text-sm font-normal flex-icon mt-2">

                                <div>
                                    <ion-icon class='text-xl' name="time-outline"></ion-icon>
                                    {{$homeCompetition->created_at}}
                                </div>
                            </div>
                        </div>
                        <a href="#" class="delete-button button bg-secondery !w-auto" data-cid="{{$homeCompetition->cid}}"
                            data-name="{{$homeCompetition->name}}" uk-toggle="target: #confirm-delete-mybusiness-popup">
                            <ion-icon class="text-xl" name="trash-outline"></ion-icon> Delete
                        </a>
                    </div>

                    @if (session('error'))
                    <p class="text-danger">{{session('error')}}</p>
                    @endif


                    @if(count($homeCompetition->competitions) == 0)

                                        
                    <form action="{{route('ganeshFestivalCompetition.store')}}" method="post">
                        @csrf
                        
                        <input type="hidden" name="participant_id" value="{{$homeCompetition->id}}"/>
                        <input type="hidden" name="competition_type" value="1-2"/>
                        <div class="flex w-full items-center gap-4 mt-6">
                            <button type="submit" class="btn-md button lg:px-10 bg-primary text-white text-24 w-full font-semibold"> ગણેશ સ્પર્ધામાં રજિસ્ટ્રેશન કરો <span class="ripple-overlay"></span></button>
                        </div>
                    </form>


                    @elseif(count($homeCompetition->competitions) == 1 && $homeCompetition->myCompetition[0]->status == 'pending')

                   
                    @endif

                    @endif

                </div>
            </div>
        </div>


        <!-- sidebar -->
        <div class="2xl:w-[380px] lg:w-[330px] w-full">

            <div class="lg:space-y-6 space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6"
                uk-sticky="media: 1024; end: #js-oversized; offset: 80">

                
                <!-- <div class="bg-white rounded-xl shadow p-5 px-6 border1 dark:bg-dark2">
                    <div class="flex items-baseline justify-between text-black dark:text-white">
                        <h3 class="font-bold text-base"> Recent Ganesh Mandal</h3>
                        <a href="#" class="text-sm text-blue-500">See all</a>
                    </div>

                    <div class="side-list">

                        <div class="side-list-item">
                            <a href="">
                                <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt=""
                                    class="side-list-image rounded-full">
                            </a>
                            <div class="flex-1">
                                <a href="">
                                    <h4 class="side-list-title"> John Michael</h4>
                                </a>
                                <div class="side-list-info"> Updated 6 day ago </div>
                            </div>
                            <button class="button bg-primary-soft text-primary dark:text-white">Like</button>
                        </div>

                    </div>

                    <button
                        class="bg-secondery w-full text-black py-1.5 font-medium px-3.5 rounded-md text-sm mt-3 dark:text-white">See
                        all</button>
                </div> -->


                <div class="box p-5 px-6">

                    <div class="flex items-baseline justify-between text-black dark:text-white">
                        <h3 class="font-bold text-base"> Recent Ganesh Mandal </h3>
                        <a href="" class="text-sm text-blue-500">See all</a>
                    </div>

                    <div class="side-list">

                    @foreach($homeCompetitions as $homeCompetition)    
                        <div class="side-list-item">
                            <a href="#">
                                
                            @if(optional($homeCompetition)->cover)
                                <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$homeCompetition->cover}}/icon" alt="{{$homeCompetition->name}}"
                                class="side-list-image rounded-full cover" 
                                >
                            @else 
                                <img src="{{asset('front/images/product/product-1.jpg')}}" alt="{{$homeCompetition->name}}"
                                class="side-list-image rounded-full">
                            @endif
                            </a>
                            <div class="flex-1">
                                <a  href="#">
                                    <h4 class="side-list-title">{{$homeCompetition->name}}</h4>
                                </a>
                                <div class="side-list-info"> {{$homeCompetition->address}} </div>
                            </div>
                            <a href="#" class="button bg-secondery">View</a>
                        </div>
                        @endforeach
                        
                    </div>

                </div>

                <!-- Groups You Manage  -->
                <div class="bg-white rounded-xl shadow p-5 px-6 border1 dark:bg-dark2">

                    <div class="flex items-baseline justify-between text-black dark:text-white">
                        <h3 class="font-bold text-base"> Suggested pages </h3>
                        <a href="#" class="text-sm text-blue-500">See all</a>
                    </div>

                    <div class="side-list">

                        <div class="side-list-item">
                            <a href="">
                                <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt=""
                                    class="side-list-image rounded-full">
                            </a>
                            <div class="flex-1">
                                <a href="">
                                    <h4 class="side-list-title"> John Michael</h4>
                                </a>
                                <div class="side-list-info"> Updated 1 week ago </div>
                            </div>
                            <button class="button bg-primary text-white">Like</button>
                        </div>
                        <div class="side-list-item">
                            <a href="">
                                <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt=""
                                    class="side-list-image rounded-full">
                            </a>
                            <div class="flex-1">
                                <a href="">
                                    <h4 class="side-list-title"> Martin Gray</h4>
                                </a>
                                <div class="side-list-info"> Updated 4 week ago </div>
                            </div>
                            <button class="button bg-primary text-white">Like</button>
                        </div>
                        <div class="side-list-item">
                            <a href="">
                                <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt=""
                                    class="side-list-image rounded-full">
                            </a>
                            <div class="flex-1">
                                <a href="">
                                    <h4 class="side-list-title"> Monroe Parker</h4>
                                </a>
                                <div class="side-list-info"> Updated 2 month ago </div>
                            </div>
                            <button class="button bg-primary text-white">Like</button>
                        </div>


                    </div>

                </div>

            </div>

        </div>

    </div>

</main>



<!-- Delete Confirmation Popup -->
<div class="hidden lg:p-20 uk- open" id="confirm-delete-mybusiness-popup" uk-modal>
    <div
        class="uk-modal-dialog tt relative overflow-hidden mx-auto bg-white shadow-xl rounded-lg md:w-[520px] w-full dark:bg-dark2">
        <div class="text-center py-4 border-b mb-0 dark:border-slate-700">
            <h2 class="text-sm font-medium text-black">Delete Group</h2>
            <button type="button" class="button-icon absolute top-0 right-0 m-2.5 uk-modal-close" uk-close>
            </button>
        </div>
        <form class="needs-validation data-form confirm-delete-link" id='confirm-delete-form'
            action="{{route('ganeshFestivalGroup.destroy', $homeCompetition->cid)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="space-y-5 p-2">
                <input type="hidden" name="cid" value="{{$homeCompetition->cid}}">

                <div class="flex justify-center items-center flex-column p-4 h-full">
                    <p class="text-center">Are you sure you want to delete <strong
                            class="disp-name text-capitalize">{{$homeCompetition->name}}</strong>?</p>
                </div>
            </div>

            <div class="p-5 d-flex flex justify-center items-center">
                <div class="flex items-center gap-2">
                    <button type="button"
                        class="button bg-blue-500 text-white py-2 px-12 text-[14px] uk-modal-close">Cancel</button>
                    <button type="submit" class="button bg-red-600 text-white py-2 px-12 text-[14px]">Confirm</button>
                </div>
            </div>
        </form>
    </div>
</div>

</div>
</div>
</div>



@include('front.widget.product-modal-block')


@endsection