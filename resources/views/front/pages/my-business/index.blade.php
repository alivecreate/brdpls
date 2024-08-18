@extends('front.layout.my-business-layout')

@section('content')


<!-- main contents -->
<main id="site__main" class="p-2.5 h-[calc(100vh-var(--m-top))] mt-20">

    <div class="2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[828px] mx-auto mt-10 container-w" id="js-oversized">
<div class="flex justify-between mb-5">
        <nav class="flex" aria-label="Breadcrumb">
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
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        My Business
                    </a>
                </li>

                <li>

                
            </ol>
        </nav>

        
        <nav>
        <ol>
        <a class="button bg-primary flex items-center gap-1 text-white py-2 px-3.5 shadow ml-auto" href="{{route('businessList', ['ref' => 'my-business'])}}">Add New Business</a></li>
        
        </ol>
        </nav>
</div>
        <div class="2xl:gap-12 gap-10 2xl:max-w-[1220px] mx-auto ">
            <div class="overflow-x-auto shadow-md sm:rounded-lg w-full">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 table">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                            Business name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    status
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    reviews
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            
                            <th scope="col" class="py-3 text-center">
                                <span class="sr-only">options</span>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        

                        @forelse($businesses as $business)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-capitalize">
                                @if($business->status !== 'deleted')
                                <a href="{{route('myBusiness.show',$business->slug)}}">                                
                                {{$business->name}}</a>
                                @else                               
                                {{$business->name}}
                                @endif
                            </th>
                            <td class="px-6 py-4">
                                @if($business->status == 'deleted')
                                <p class="text-danger">Permanent Deleted</p>
                                @else  
                                <p class="text-capitalize text-success">{{$business->status}}</p>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                Laptop
                            </td>
                            <td class="px-6 py-4 text-right flex-center">

                            @if($business->status == 'deleted')
                            {{formatDate($business->deleted_at)}}
                            @else
                            <a href="{{route('myBusiness.show',$business->slug)}}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                           

                            <div class=''> 
                                <button type="button" class="rounded-lg bg-secondery flex px-2.5 py-2 dark:bg-dark2"> 
                                    <ion-icon name="ellipsis-horizontal" class="text-xl">
                                </button>

                                <div  class="w-[240px]" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click;offset:10"> 
                                    
                                <nav>
                                        <a href="#"> <ion-icon class="text-xl" name="share-outline"></ion-icon> Share  </a>  
                                        <a href="#"> <ion-icon class="text-xl" name="link-outline"></ion-icon>  Copy link </a> 

                                        <a href="#" class="delete-biz-button text-danger" data-cid="{{$business->cid}}" data-name="{{$business->name}}"
                                          uk-toggle="target: #confirm-delete-mybusiness-popup"> <ion-icon class="text-xl" name="trash-outline"></ion-icon>  Delete Business </a>  
  
                                    </nav>
                                </div>
                            </div>
                            @endif
                            </td>
                        </tr>
                        @empty
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" colspan="4"
                                class="px-6 py-10 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                                
        <p>No businesses have been created yet.</p>
                            </th>
</tr>
                        @endforelse

                    </tbody>
                </table>
            </div>

        </div>
    </div>
    </div>
</main>
</div>

@if($businesses->count() > 0)
@include('front.widget.popup.delete-my-business-popup')
@endif


@include('front.widget.product-modal-block')


@endsection