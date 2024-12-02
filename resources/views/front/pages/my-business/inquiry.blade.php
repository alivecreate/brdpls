@extends('front.layout.my-business-layout')
@section('custom-script')

<script>
$(document).ready(function() {
    $('.mybusiness').addClass('active');
    $('.uk-parent').addClass('uk-open');
    $('.uk-parent ul').removeAttr('hidden');
});
</script>
@endsection

@section('content')

<!-- main contents -->
<main id="site__main" class="p-2.5 h-[calc(100vh-var(--m-top))] mt-10 mb-10">


    <div class="2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[828px] mx-auto container-w" id="js-oversized">

        <div class="page-heading">
            <h1 class="page-title"> Inquiries </h1>
        </div>

        <div class="2xl:gap-12 gap-10 2xl:max-w-[1220px] mx-auto mb-10">
            <div class="overflow-x-auto shadow-md sm:rounded-lg w-full">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 table">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Customer Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Title
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Description
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Status
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


                        @forelse($inquiries as $key => $inquiry)

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                            <td class="px-6 py-4">{{ $loop->iteration }}</td>
                            <td scope="row"
                                class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white text-capitalize">

                                <a href="#">
                                    {{$inquiry->name}}</a><br>

                                <p class="font-medium text-primary">{{ $inquiry->business->name ?? 'N/A' }}</p>
                            </td>
                            <td class="px-6 py-4">
                                {{$inquiry->title}}

                            </td>
                            <td class="px-6 py-4">
                                {{$inquiry->message}}
                            </td>
                            <td class="px-6 py-4"  id="inquiry-status-{{ $inquiry->id }}">


                                <select  onchange="updateInquiryStatus({{ $inquiry->id }}, this.value)"  name="inquiry_stage" id="inquiry_stage" class="form-control">
                                    @foreach (getInquiryStages() as $key => $status)
                                    <option value="{{ $key }}" @if($status == $inquiry->status) selected @endif>{{ $status }}</option>
                                    @endforeach
                                </select>


                            </td>
                            <td class="px-6 py-4 text-right flex-center">


                            <a class="delete-button text-danger btn-delete"
                                                data-name="{{$inquiry->name}}" data-type="Inquiry"
                                                data-action="{{route('businessInquiryDelete', $inquiry->id)}}"
                                                data-id="{{$inquiry->id}}" uk-toggle="target: #confirm-delete-popup">
                                                <ion-icon class="text-xl" name="eye-outline"></ion-icon>
                                                
                                            </a>

                                <div class=''>
                                    <button type="button"
                                        class="rounded-lg bg-secondery flex px-2.5 py-2 dark:bg-dark2">
                                        <ion-icon name="ellipsis-horizontal" class="text-xl">
                                    </button>

                                    <div class="w-[240px]"
                                        uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click;offset:10">

                                        <nav>

                                            <a class="delete-button text-danger btn-delete"
                                                data-name="{{$inquiry->name}}" data-type="Inquiry"
                                                data-action="{{route('businessInquiryDelete', $inquiry->id)}}"
                                                data-id="{{$inquiry->id}}" uk-toggle="target: #confirm-delete-popup">
                                                <ion-icon class="text-xl" name="trash-outline"></ion-icon> Delete
                                                Inquiry
                                            </a>

                                        </nav>
                                    </div>
                                </div>
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

            <div class="custom-pagination">
                {{ $inquiries->links() }}
            </div>
        </div>
    </div>
    </div>
</main>


@include('front.widget.popup.delete-confirm-popup')


@include('front.widget.product-modal-block')


@endsection