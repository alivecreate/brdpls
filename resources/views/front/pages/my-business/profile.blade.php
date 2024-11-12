@extends('front.layout.my-business-layout')

@section('meta')
<meta name="business-id" content="{{$myBusiness->id}}">
<meta name="user-id" content="{{Auth::id()}}">
@endsection


@section('custom-script')
    
<script>
    
    $(document).ready(function() {
        $('.mybusiness').addClass('active');
        
        $('#{{$myBusiness->id}}').addClass('link-active');

        $('.uk-parent').addClass('uk-open');
        $('.uk-parent ul').removeAttr('hidden');

        $('.my-b-profile a').addClass('uk-active-tab');

    });

</script>



@endsection



@section('content')


<main id="site__main" class="p-2.5 h-[calc(100vh-var(--m-top))] mt-20">
    <div class="2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[828px] mx-auto mt-10 container-w" id="js-oversized">

        <nav class="flex mb-6" aria-label="Breadcrumb">
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

                <li class="inline-flex items-center">
                    <a href="#"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        {{$myBusiness->name}}
                    </a>
                </li>



            </ol>
        </nav>


        <div class="2xl:gap-12 gap-10 2xl:max-w-[1220px] mx-auto bg-white">
        
        @include('front.pages.my-business.page-tab')
            

            <div id="setting_tab" class="uk-switcher md:py-6 p-6 overflow-hidden text-black text-sm">
                <div class='uk-active' id="profile">
                    <div>
                        <form class="needs-validation data-form"
                            action="{{ route('updateMyBusinessProfile', $myBusiness->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="space-y-6">

                                @error('name')
                                <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                                @enderror


                                <div class="md:flex items-center gap-10">
                                    <label class="md:w-32"> Business Name </label>
                                    <div class="flex-1 max-md:mt-4">
                                        <input type="text" name="name" value="{{$myBusiness->name}}"
                                            placeholder="Your Business Name" class="w-full"
                                            value="{{old('name', $myBusiness->description)}}">
                                    </div>
                                </div>

                                <div class="md:flex items-start gap-10">
                                    <label class="md:w-32"> Description </label>
                                    <div class="flex-1 max-md:mt-4">
                                        <textarea class="w-full" name="description" rows="5"
                                            placeholder="About Your Business">{{old('description', $myBusiness->description)}}</textarea>
                                    </div>
                                </div>


                                <div class="md:flex items-center gap-10">
                                    <label class="md:w-32"> Building / Apartment</label>
                                    <div class="flex-1 max-md:mt-4">
                                        <input type="text" name="building" placeholder="" class="w-full"
                                            value="{{old('building', $myBusiness->building)}}">
                                    </div>
                                </div>


                                <div class="md:flex items-center gap-10 w-full">
                                    <label class="md:w-32"> Street / Lane</label>
                                    <div class="flex-1 max-md:mt-4">
                                        <input type="text" name="street" value="{{$myBusiness->street}}" placeholder=""
                                            class="lg:w-1/2 w-full" value="{{old('street', $myBusiness->street)}}">
                                    </div>
                                </div>

                                <div class="md:flex items-center gap-10 w-full">
                                    <label class="md:w-32"> City</label>
                                    <div class="flex-1 max-md:mt-4">
                                        <select class="w-full text-capitalize lg:w-1/2 w-full"
                                            name="city">
                                            @foreach(getGujaratCities() as $city)
                                            <option value="{{$city->name}}" @if($city->name == $myBusiness->city) selected
                                                @endif>{{$city->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>



                                <div class="md:flex items-center gap-10 w-full ">
                                    <label class="md:w-32"> State</label>
                                    <div class="flex-1 max-md:mt-4">
                                        <select class="w-full text-capitalize lg:w-1/2 w-full"
                                            name="state">
                                            @foreach(getStates() as $state)
                                            <option value="{{$state->name}}" @if($state->name == $myBusiness->state)
                                                selected @endif>{{$state->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>



                                <div class="md:flex items-center gap-10">
                                    <label class="md:w-32"> Pin Code </label>
                                    <div class="flex-1 max-md:mt-4">
                                        <input type="text" name="pincode" value="{{$myBusiness->pincode}}" placeholder=""
                                            class="lg:w-1/2 w-full" value="{{old('pincode', $myBusiness->pincode)}}">
                                    </div>
                                </div>



                                <div class="md:flex items-center gap-10">
                                    <label class="md:w-32"> Establishment Year </label>
                                    <div class="flex-1 max-md:mt-4">
                                        <select class="lg:w-1/2 w-full" name="establishment_year"
                                            value="{{old('establishment_year', $myBusiness->establishment_year)}}">
                                            <option value="">Select Year</option>
                                            @for($i = 2024; $i >= 1850; $i--)
                                            <option value="{{$i}}" @if($i==$myBusiness->establishment_year) selected
                                                @endif>{{$i}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>

                                
                                <div class="md:flex items-center gap-10 w-full">
                                    <label class="md:w-32"> GST No</label>
                                    <div class="flex-1 max-md:mt-4">
                                        <input type="text" name="gst" value="{{$myBusiness->gst}}" placeholder=""
                                            class="lg:w-1/2 w-full" value="{{old('gst', $myBusiness->gst)}}">
                                    </div>
                                </div>


                            </div>

                            <div class="flex items-center gap-4 mt-16 lg:pl-[10.5rem]">
                                <button type="submit" class="button lg:px-10 bg-primary text-white max-md:flex-1"> Save
                                    Changes <span class="ripple-overlay"></span></button>
                            </div>
                        </form>

                    </div>

                </div>

                <div>

                    <div class="w-full">

                        <div class="font-normal text-gray-400">

                            <div>
                                <h4 class="text-xl font-medium text-black dark:text-white"> Social Links </h4>
                                <p class="mt-3 font-normal text-gray-600 dark:text-white">We may still send you
                                    important notifications about your account and content outside of you preferred
                                    notivications settings</p>
                            </div>


                            <form class="needs-validation data-form"
                                action="{{route('updateMyBusinessSocialLinks', $myBusiness->id)}}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <div class="space-y-6 mt-8">

                                    <div class="flex items-center gap-3">
                                        <div class="bg-blue-50 rounded-full p-2 flex ">
                                            <ion-icon name="logo-facebook" class="text-2xl text-blue-600"></ion-icon>
                                        </div>

                                        <div class="flex-1">
                                            <input type="text" name="facebook" class="w-full"
                                                value="{{ isset($myBusiness->socialLinks->facebook) ? $myBusiness->socialLinks->facebook : '' }}"
                                                placeholder="http://www.facebook.com/myname">
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="bg-pink-50 rounded-full p-2 flex ">
                                            <ion-icon name="logo-instagram" class="text-2xl text-pink-600"></ion-icon>
                                        </div>
                                        <div class="flex-1">
                                            <input type="text" name="instagram" class="w-full"
                                                value="{{ isset($myBusiness->socialLinks->instagram) ? $myBusiness->socialLinks->instagram : '' }}"
                                                placeholder="http://www.instagram.com/myname">
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="bg-sky-50 rounded-full p-2 flex ">
                                            <ion-icon name="logo-twitter" class="text-2xl text-sky-600"></ion-icon>
                                        </div>
                                        <div class="flex-1">
                                            <input type="text" name="twitter" class="w-full"
                                                value="{{ isset($myBusiness->socialLinks->twitter) ? $myBusiness->socialLinks->twitter : '' }}"
                                                placeholder="http://www.twitter.com/myname">
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="bg-red-50 rounded-full p-2 flex ">
                                            <ion-icon name="logo-youtube" class="text-2xl text-red-600"></ion-icon>
                                        </div>
                                        <div class="flex-1">
                                            <input type="text" name="youtube" class="w-full"
                                                value="{{ isset($myBusiness->socialLinks->youtube) ? $myBusiness->socialLinks->youtube : '' }}"
                                                placeholder="http://www.youtube.com/myname">
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="bg-red-50 rounded-full p-2 flex ">
                                            <ion-icon name="logo-pinterest" class="text-2xl text-red-600"></ion-icon>
                                        </div>
                                        <div class="flex-1">
                                            <input type="text" name="pinterest" class="w-full"
                                                value="{{ isset($myBusiness->socialLinks->pinterest) ? $myBusiness->socialLinks->pinterest : '' }}"
                                                placeholder="http://www.pinterest.com/myname">
                                        </div>
                                    </div>

                                </div>
                        </div>

                        <div class="flex items-center justify-center gap-4 mt-16">
                            <button type="submit" class="button lg:px-6 bg-secondery max-md:flex-1"> Cancle</button>
                            <button type="submit" class="button lg:px-10 bg-primary text-white max-md:flex-1">
                                Save</button>
                        </div>

                        </form>

                    </div>

                </div>


                <div>
                    <div class="w-full">
                        
                        @error('selected_item')
                        <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                        @enderror

                        <p class='heading-h1 font-semibold page-title'>Business Categories
                        </p>

                        <p class='mb-4'>Choose Your Business Category</p>

                        <form class="needs-validation data-form" action="{{route('storeStep4BusinessCategory')}}"
                            method="POST" enctype="multipart/form-data">

                            <input type="hidden" name="selected_item" id="selected_item"
                                value='{{$myBusiness->categoryIds()}}'>
                            <input type="hidden" name="cid" value="{{$myBusiness->cid}}">

                            @csrf

                            <div class="w-full">
                                <div class="flex">
                                    <div id="selected-list" class="mt-4">
                                        <p class="block heading-h2 font-medium text-gray-700">Selected Categories:</p>
                                        <ul id="selected-items" class="list-none">

                                            @foreach($myBusiness->categories as $selectedCategory)
                                            <li id="selected-{{$selectedCategory->id}}"
                                                class="selected-item flex justify-between items-center py-1"
                                                data-id="{{$selectedCategory->id}}">{{$selectedCategory->name}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div id="search--box" class="sm:relative rounded-mdoverflow-hidden z-20 left-0 bg-white">
                                <ion-icon name="search" class="absolute left-4 search-icon top-1/2 -translate-y-1/2">
                                </ion-icon>
                                <input type="text" placeholder="Search Category"
                                    class="w-full search-bar !pl-10 !font-normal !bg-transparent h-12 !text-sm"
                                    id="search-input">
                            </div>

                            <!-- search dropdown-->
                            <div class="hidden uk-open z-10" id="search-dropdown">
                                <div
                                    class="sm:w-96 bg-white dark:bg-dark3 w-screen p-2 rounded-lg shadow-lg -mt-14 pt-14">
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
                                                const resultsContainer = $(
                                                    '#search-results');
                                                resultsContainer
                                                    .empty(); // Clear previous results

                                                data.results.forEach(function(item) {
                                                    const resultItem = `
                            <a href="#" class="result-item relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10" data-id="${item.id}" data-name="${item.name}" >
                                <div>
                                    <div>${item.name}</div>
                                </div>
                                <ion-icon name="close" class="text-base absolute right-3 top-1/2 -translate-y-1/2"></ion-icon>
                            </a>
                        `;
                                                    resultsContainer.append(
                                                        resultItem);
                                                });

                                                $('#search-dropdown').removeClass(
                                                    'hidden'); // Show the dropdown
                                            },
                                            error: function(xhr, status, error) {
                                                console.error('Error fetching data:',
                                                    error);
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

                                    var selectedItems = $('#selected-list #selected-items').children()
                                        .map(
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
                                    var selectedItems = $('#selected-list #selected-items').children().map(
                                        function() {
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
                                        <img src="http://localhost:8000/front/images/avatars/avatar-3.jpg" alt=""
                                            name="image" class="w-10 h-10 rounded-full">
                                        <button type="submit"
                                            class="px-4 py-1 rounded-full bg-slate-100/60 border dark:bg-slate-700 dark:border-slate-600 dark:text-white">
                                            Change</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex w-full items-center gap-4 mt-6">
                                <button type="submit"
                                    class="btn-md button lg:px-10 bg-primary text-white text-24 w-half"> Save
                                    & Continue <span class="ripple-overlay"></span></button>
                            </div>
                        </form>
                    </div>

                </div>

                <div>
                    <div class="w-full">

                        <p class='heading-h1 font-semibold text-black font-semibold text-black mb-5'>Contact Details</p>
                        <form class="needs-validation data-form"
                            action="{{route('updateMyBusinessContact', $myBusiness->id)}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="space-y-5">
                                <input type="hidden" name="cid" value="{{$myBusiness->cid}}">
                                <div class="md:flex items-center gap-10">
                                    <div class="flex flex-1 max-md:mt-4">

                                        <select class="form-title float-left" name="title">
                                            @foreach(getContactTitles() as $title)
                                            <option value="{{$title}}" @if($title==$myBusiness->title) selected
                                                @endif>{{$title}}</option>
                                            @endforeach

                                        </select>

                                        <input type="text" name="contact_person" placeholder="Contact Person Name"
                                            value="@if($myBusiness->contact_person){{$myBusiness->contact_person}}@endif"
                                            class="flex-auto float-left">
                                    </div>
                                </div>

                                <p>Mobile Number:</p>

                                <div class="md:flex items-center gap-10">
                                    <div class="flex flex-1 max-md:mt-4 form-group">
                                        <input type="text" class="form-title float-left" disabled value="+91">
                                        <input type="number" name="phone1"
                                            value="@if($myBusiness->phone1){{$myBusiness->phone1}}@endif"
                                            placeholder="Primary Mobile No" class="flex-auto float-left">
                                    </div>
                                </div>

                                <div class="md:flex items-center gap-10">
                                    <div class="flex flex-1 max-md:mt-4 form-group">
                                        <input type="text" class="form-title float-left" disabled value="+91">
                                        <input type="number" name="phone2"
                                            value="@if($myBusiness->phone2){{$myBusiness->phone2}}@endif"
                                            placeholder="Secondary Mobile No" class="flex-auto float-left">
                                    </div>
                                </div>

                                <p>Whatsapp Number:</p>

                                <div class="md:flex items-center gap-10">
                                    <div class="flex flex-1 max-md:mt-4 form-group">
                                        <input type="text" class="form-title float-left" disabled value="+91">
                                        <input type="number" name="whatsapp1"
                                            value="@if($myBusiness->whatsapp1){{$myBusiness->whatsapp1}}@endif"
                                            placeholder="Primary Whatsapp" class="flex-auto float-left">
                                    </div>
                                </div>


                                <p>Email Accounts:</p>

                                <div class="md:flex items-center gap-10">
                                    <div class="flex flex-1 max-md:mt-4 form-group">
                                        <input type="email" name="email1"
                                            value="@if($myBusiness->email1){{$myBusiness->email1}}@endif"
                                            placeholder="Primary Email" class="flex-auto float-left">
                                    </div>
                                </div>


                                <div class="md:flex items-center gap-10">
                                    <div class="flex flex-1 max-md:mt-4 form-group">
                                        <input type="email" name="email2"
                                            value="@if($myBusiness->email2){{$myBusiness->email2}}@endif"
                                            placeholder="Secondary Email" class="flex-auto float-left">
                                    </div>
                                </div>



                                <div class="md:flex items-start gap-10 " hidden="">
                                    <div class="flex-1 flex items-center gap-5 max-md:mt-4">
                                        <img src="http://localhost:8000/front/images/avatars/avatar-3.jpg" alt=""
                                            name="image" class="w-10 h-10 rounded-full">
                                        <button type="submit"
                                            class="px-4 py-1 rounded-full bg-slate-100/60 border dark:bg-slate-700 dark:border-slate-600 dark:text-white">
                                            Change</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex w-full items-center gap-4 mt-6">
                                <button type="submit"
                                    class="btn-md button lg:px-10 bg-primary text-white text-24 w-full"> Save
                                    & Continue <span class="ripple-overlay"></span></button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>
</main>
</div>



@include('front.widget.product-modal-block')


@endsection