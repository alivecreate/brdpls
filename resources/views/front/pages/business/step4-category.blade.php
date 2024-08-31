@extends('front.layout.landing-layout')

@section('content')


<!-- main contents -->
<main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

    <div class="lg:flex 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto mt-10" id="js-oversized">

        <div class="lg:flex 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto">
            <div class="2xl:w-[380px] lg:w-[330px] w-full sm-hidden">
                <!-- Content for the first column (40%) -->
                <img src="https://www.justdial.com/Free-Listing/_next/image?url=https%3A%2F%2Fakam.cdn.jdmagicbox.com%2Fimages%2Ficontent%2Flistingbusiness%2Fbusiness_detail_2x_new.png&w=1920&q=75"
                    alt="">
            </div>



            <div class="2xl:w-[380px] lg:w-[330px] w-full">
                <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                    <div class="bg-blue-600 h-1 rounded-full" style="width: 75%"></div>
                </div>

                @error('selected_item')
                <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                @enderror

                <p class='heading-h1 font-semibold text-black font-semibold text-black mb-0'>Business Categories</p>

                <p class='mb-4'>Choose Your Business Category</p>

                <form class="needs-validation data-form" action="{{route('storeStep4BusinessCategory')}}" method="POST"
                    enctype="multipart/form-data">

                    <input type="hidden" name="selected_item" id="selected_item" value='{{$selectedCategoryIds}}'>
                    <input type="hidden" name="cid" value="{{$cid}}">
                    @csrf

                    <div class="w-full">
                        <div class="flex">
                            <!-- <ul id="selected-list" class="mt-1 block w-full pl-3 pr-10 py-2 text-base rounded-md"></ul> -->

                            <div id="selected-list" class="mt-4">
                                <p class="block heading-h2 font-medium text-gray-700">Selected Categories:</p>
                                <ul id="selected-items" class="list-none">

                                    @foreach($selectedCategories as $selectedCategory)
                                    <li id="selected-{{$selectedCategory->id}}"
                                        class="selected-item flex justify-between items-center py-1"
                                        data-id="{{$selectedCategory->id}}">{{$selectedCategory->name}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div id="search--box" class="sm:w-96 sm:relative rounded-mdoverflow-hidden z-20 left-0 bg-white">
                        <ion-icon name="search" class="absolute left-4 search-icon top-1/2 -translate-y-1/2"></ion-icon>
                        <input type="text" placeholder="Search Category"
                            class="w-full search-bar !pl-10 !font-normal !bg-transparent h-12 !text-sm"
                            id="search-input">
                    </div>

                    <!-- search dropdown-->
                    <div class="hidden uk-open z-10" id="search-dropdown">
                        <div class="sm:w-96 bg-white dark:bg-dark3 w-screen p-2 rounded-lg shadow-lg -mt-14 pt-14">
                            <div class="flex justify-between px-2 py-2.5 text-sm font-medium">
                                <div class="text-black dark:text-white">Recent</div>
                                <button type="button" class="text-blue-500" id="clear-button">Clear</button>
                            </div>
                            <nav class="text-sm font-medium text-black dark:text-white" id="search-results">
                            </nav>

                            <hr class="-mx-2 mt-2 hidden">
                            <div class="flex justify-end pr-2 text-sm font-medium text-red-500 hidden">
                                <a href="#" class="flex hover:bg-red-50 dark:hover:bg-slate-700 p-1.5 rounded">
                                    <ion-icon name="trash" class="mr-2 text-lg"></ion-icon> Clear your history
                                </a>
                            </div>
                        </div>
                    </div>



                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                    $(document).ready(function() {
                        $('#search-input').on('keyup', function() {
                            const query = $(this).val().toLowerCase();
                            if (query.length > 0) {
                                $.ajax({
                                    url: '/api/search-category',
                                    method: 'GET',
                                    data: {
                                        query: query
                                    },
                                    success: function(data) {
                                        const resultsContainer = $('#search-results');
                                        resultsContainer.empty(); // Clear previous results

                                        data.results.forEach(function(item) {
                                            const resultItem = `
                            <a href="#" class="result-item relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10" data-id="${item.id}" data-name="${item.name}" >
                                <div>
                                    <div>${item.name}</div>
                                </div>
                                <ion-icon name="close" class="text-base absolute right-3 top-1/2 -translate-y-1/2"></ion-icon>
                            </a>
                        `;
                                            resultsContainer.append(resultItem);
                                        });

                                        $('#search-dropdown').removeClass(
                                            'hidden'); // Show the dropdown
                                    },
                                    error: function(xhr, status, error) {
                                        console.error('Error fetching data:', error);
                                    }
                                });
                            } else {
                                $('#search-dropdown').addClass(
                                    'hidden'); // Hide the dropdown if query is empty
                            }
                        });

                        $('#clear-button').on('click', function() {
                            $('#search-input').val('');
                            $('#search-results').empty();
                            $('#search-dropdown').addClass('hidden');
                        });

                        $(document).on('click', '.result-item', function() {
                            const id = $(this).data('id');
                            const name = $(this).data('name');
                            const img = $(this).data('img');
                            const type = $(this).data('type');

                            const selectedItem =
                                `<li id="selected-${id}" class="selected-item flex justify-between items-center py-1" data-id='${id}'>${name}</li>`;

                            $('#selected-items').append(selectedItem);

                            // Hide the selected item from the search results
                            $(this).remove();

                            var selectedItems = $('#selected-list #selected-items').children().map(
                                function() {
                                    // return $(this).text();
                                    return $(this).data('id');

                                }).get();
                            $('#selected_item').val(selectedItems.join(','));


                        });

                        $(document).on('click', '.selected-item', function() {
                            const id = $(this).attr('id').replace('selected-', '');

                            $(this).remove();
                            updateSelectedItems();

                        });

                        function updateSelectedItems() {
                            var selectedItems = $('#selected-list #selected-items').children().map(function() {
                                // return $(this).text();

                                return $(this).data('id');
                            }).get();

                            $('#selected_item').val(selectedItems.join(','));
                        }
                    });
                    </script>

                    <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const optionList = document.getElementById('option-list');
                        const selectedList = document.getElementById('selected-list');

                        optionList.addEventListener('click', function(e) {
                            if (e.target.classList.contains('option-item')) {
                                const selectedOption = e.target;
                                const value = selectedOption.getAttribute('data-value');
                                const text = selectedOption.textContent;

                                if (document.getElementById(`selected-${value}`)) {
                                    return;
                                }


                                const li = document.createElement('li');
                                li.id = `selected-${value}`;
                                li.className =
                                    'flex justify-between items-center py-1 cursor-pointer selected-item';
                                li.textContent = text;
                                li.addEventListener('click', function() {
                                    removeSelected(value);
                                });

                                selectedList.appendChild(li);
                                selectedOption.remove();
                            }
                        });
                    });

                    function removeSelected(value) {
                        const li = document.getElementById(`selected-${value}`);
                        const optionList = document.getElementById('option-list');

                        if (li) {
                            const optionText = li.textContent;
                            const option = document.createElement('div');
                            option.className = 'option-item py-1 px-2 hover:bg-gray-200 cursor-pointer';
                            option.setAttribute('data-value', value);
                            option.textContent = optionText;

                            optionList.appendChild(option);
                            li.remove();
                        }
                    }
                    </script>


                    <div class="space-y-5">
                        <div class="md:flex items-start gap-10" hidden="">
                            <div class="flex-1 flex items-center gap-5 max-md:mt-4">
                                <img src="http://localhost:8000/front/images/avatars/avatar-3.jpg" alt="" name="image"
                                    class="w-10 h-10 rounded-full">
                                <button type="submit"
                                    class="px-4 py-1 rounded-full bg-slate-100/60 border dark:bg-slate-700 dark:border-slate-600 dark:text-white">
                                    Change</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex w-full items-center gap-4 mt-6">
                        <button type="submit" class="btn-md button lg:px-10 bg-primary text-white text-24 w-full"> Save
                            & Continue <span class="ripple-overlay"></span></button>
                    </div>
                </form>
            </div>
        </div>


    </div>
    </div>
</main>
</div>



@include('front.widget.product-modal-block')


@endsection