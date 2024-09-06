@extends('front.layout.ganesh-festival-layout')

@section('content')



<main id="site__main"
    class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">
    <div class="lg:flex 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto mt-10" id="js-oversized">


        <div class="flex-1 px-6">
            <div class="w-full">

                <p class='heading-h1 font-semibold page-title text-underline'>ગણેશ મંડળની વિગત</p>
                <!-- <p class="subheading-h2">Ganesh Group Details</p> -->
                <p class='subheading-h3 font-semibold font-semibold mb-0'>Note: એક યુઝર એકાઉન્ટ પરથી માત્ર એકજ ગણેશ મંડળનું રજીસ્ટ્રેશન થઈ શકસે.</p>


                <div id="type1-2Form" class="competition-form">
                    @if($group)
                    <div class="flex md:items-center space-x-4 p-4 rounded-md box">
                        <div class="sm:w-20 w-14 sm:h-20 h-14 flex-shrink-0 rounded-lg relative">
                            @if(optional($group)->cover)
                                <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$group->cover}}/sm" alt="{{$group->name}}"
                                class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm"
                                >
                            @else 
                                <img src="{{asset('front/images/product/product-1.jpg')}}" alt="{{$group->name}}"
                                class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm">
                            @endif

                        </div>
                        <div class="flex-1">
                            <a
                                href="{{route('ganeshFestivalGroup.show', $group->slug)}}"
                                class="md:text-lg text-base font-semibold capitalize text-black dark:text-white">{{$group->name}}</a>

                            <div class="flex space-x-2 items-center text-sm font-normal flex-icon">
                                <div>
                                    <ion-icon class='text-xl' name="location-outline"></ion-icon>
                                    {{$group->address}}
                                </div>
                            </div>
                            <div class="flex space-x-2 items-center text-sm font-normal flex-icon mt-2">

                                <div>
                                    <ion-icon class='text-xl' name="time-outline"></ion-icon>
                                    {{$group->created_at}}
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex gap-2">
                            <a href="{{route('ganeshFestivalGroup.show', $group->slug)}}" class="button bg-primary text-white flex-1"> View</a> 
                        </div>

                    </div>

                    @if (session('error'))
                    <p class="text-danger">{{session('error')}}</p>
                    @endif


                    @if(count($group->competitions) == 0)
                                        
                    <form action="{{route('ganeshFestivalCompetition.store')}}" method="post">
                        @csrf
                        
                        <input type="hidden" name="participant_id" value="{{$group->id}}"/>
                        <input type="hidden" name="competition_type" value="1-2"/>
                        <div class="flex w-full items-center gap-4 mt-6">
                            <button type="submit" class="btn-md button lg:px-10 bg-primary text-white text-24 w-full font-semibold"> ગણેશ સ્પર્ધામાં રજિસ્ટ્રેશન કરો <span class="ripple-overlay"></span></button>
                        </div>
                    </form>


                    @elseif(count($group->competitions) == 1 && $group->myCompetition[0]->status == 'pending')

                   
                    @endif

                    @endif

                </div>
            </div>
        </div>


        @include('front.pages.ganesh.competition.sidebar')

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
            action="{{route('ganeshFestivalGroup.destroy', $group->cid)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="space-y-5 p-2">
                <input type="hidden" name="cid" value="{{$group->cid}}">

                <div class="flex justify-center items-center flex-column p-4 h-full">
                    <p class="text-center">Are you sure you want to delete <strong
                            class="disp-name text-capitalize">{{$group->name}}</strong>?</p>
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