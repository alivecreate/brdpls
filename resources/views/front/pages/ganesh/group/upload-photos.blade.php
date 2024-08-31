@extends('front.layout.ganesh-festival-layout')

@section('meta')
<meta name="business-id" content="{{$group->id}}">
<meta name="user-id" content="{{Auth::id()}}">
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
                        My Group
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
                        {{$group->name}}
                    </a>
                </li>
            </ol>
        </nav>


        <div class="2xl:gap-12 gap-10 2xl:max-w-[1220px] mx-auto bg-white">

            <div class="relative border-b" tabindex="-1" uk-slider="finite: true">

                <nav class="uk-slider-container overflow-hidden nav__underline px-6 p-0 border-transparent -mb-px">
                    <ul class="uk-slider-items w-[calc(100%+10px)] !overflow-hidden"
                        uk-switcher="connect: #setting_tab ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">

                        <li class="w-auto pr-2.5"> <a href="#logo"> Upload Photos</a> </li>
                        <li class="w-auto pr-2.5"> <a href="#profile">Group Detail </a> </li>
                        <li class="w-auto pr-2.5"> <a href="#social-link"> Social Links</a> </li>
                        <li class="w-auto pr-2.5"> <a href="#"> Contact Detail</a> </li>
                    </ul>
                </nav>

                <a class="absolute -translate-y-1/2 top-1/2 left-0 flex items-center w-20 h-full p-2 py-1 justify-start bg-gradient-to-r from-white via-white dark:from-slate-800 dark:via-slate-800"
                    href="#" uk-slider-item="previous">
                    <ion-icon name="chevron-back" class="text-2xl ml-1"></ion-icon>
                </a>
                <a class="absolute right-0 -translate-y-1/2 top-1/2 flex items-center w-20 h-full p-2 py-1 justify-end bg-gradient-to-l from-white via-white dark:from-slate-800 dark:via-slate-800"
                    href="#" uk-slider-item="next">
                    <ion-icon name="chevron-forward" class="text-2xl mr-1"></ion-icon>
                </a>

            </div>


            <div id="setting_tab" class="uk-switcher md:py-12 p-6 overflow-hidden text-black text-sm">
                <div>
                    <div>
                        <div class="space-y-6">
                            <div class="md:flex items-center gap-10">
                                <div class="flex-1 max-md:mt-4">
                                    

                                <p id="uploadStatus"></p>
                                    <div class="image-upload-container">

                                <form action="{{route('uploadGaneshGroupCover')}}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="hidden" name='cid' value="{{$cid}}" />

    <!-- File input with an ID -->
    <input type="file" id="coverImageInput" name="cover" accept="image/*" />

    <button type="submit" class="mt-4 flex align-items-center uploadButton">
        <ion-icon name="cloud-upload-outline" style="height: 18px;width: 18px;"></ion-icon>
        &nbsp;&nbsp;Save Cover Pic
    </button>
</form>

<!-- Image preview area -->

<img id="imagePreview" 
src="@if($group->cover)https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$group->cover}}/sm @else {{asset('front')}}/images/web/no-logo.png @endif"
style="max-width: 100%;margin-top: 10px;height: 100px;" />


<!-- JavaScript to handle image preview -->
<script>
document.getElementById('coverImageInput').addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(event) {
            const previewImg = document.getElementById('imagePreview');
            previewImg.setAttribute('src', event.target.result);
            previewImg.style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
});
</script>


                                    </div>
                                </div>
                            </div>







                            <div class="md:flex items-center gap-10">
                                <div class="flex-1 max-md:mt-4">
                                    <div class="image-upload-container">
                                        <input type="file" id="imageUpload" accept="image/jpeg, image/png, image/webp"
                                            multiple style="display:none">
                                    </div>
                                </div>
                            </div>

                            <div class="md:flex items-center gap-10">
                                <div class="flex-1 max-md:mt-4">
                                    <form id="imageUploadForm" enctype="multipart/form-data">
                                        <input type="file" id="images" name="images[]" accept="image/jpeg, image/png, image/webp" multiple style="display: none;">
                                        <button type="button" id="selectImagesButton" class="flex align-items-center">
                                            <ion-icon name="cloud-upload-outline" style="height: 18px;width: 18px;">
                                            </ion-icon>&nbsp;&nbsp;Store Photos
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <div class="uk-slider-container pb-1">
                                <ul id="imageMultiplePreview" class="flex-wrap flex"
                                    style="transform: translate3d(0px, 0px, 0px);">

                                    @foreach($group->gallery as $gallery)

                                    <li class="lg:w-1/4 sm:w-1/3 w-1/2 p-4" tabindex="-1">
                                        <div class="card uk-transition-toggle">
                                            <div class="card-media sm:aspect-[2/1.9] h-40">
                                                <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$gallery->image}}/sm"
                                                    alt="">
                                                <div class="card-overly"></div>
                                            </div>
                                            <button type="button"
                                                onclick="deleteBusinessImage(this,'{{$gallery->image}}')"
                                                id='deleteButton'
                                                class="uk-transition-fade absolute top-0 right-0 m-2 z-10 bg-black/20 rounded-full flex p-1 thumb-delete">
                                                <ion-icon name="close" class="text-white md hydrated icon" role="img"
                                                    aria-label="close"></ion-icon>
                                            </button>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="profile">
                    <div>
                        <form class="needs-validation data-form"
                            action="{{ route('updateMyBusinessProfile', $group->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="space-y-6">

                                @error('name')
                                <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                                @enderror


                                <div class="md:flex items-center gap-10">
                                    <label class="md:w-32"> group Name </label>
                                    <div class="flex-1 max-md:mt-4">
                                        <input type="text" name="name" value="{{$group->name}}"
                                            placeholder="Your group Name" class="w-full"
                                            value="{{old('name', $group->description)}}">
                                    </div>
                                </div>

                                <div class="md:flex items-start gap-10">
                                    <label class="md:w-32"> Description </label>
                                    <div class="flex-1 max-md:mt-4">
                                        <textarea class="w-full" name="description" rows="5"
                                            placeholder="About Your Business">{{old('description', $group->description)}}</textarea>
                                    </div>
                                </div>


                                <div class="md:flex items-center gap-10">
                                    <label class="md:w-32"> Building / Apartment</label>
                                    <div class="flex-1 max-md:mt-4">
                                        <input type="text" name="building" placeholder="" class="w-full"
                                            value="{{old('building', $group->building)}}">
                                    </div>
                                </div>


                                <div class="md:flex items-center gap-10 w-full">
                                    <label class="md:w-32"> Street / Lane</label>
                                    <div class="flex-1 max-md:mt-4">
                                        <input type="text" name="street" value="{{$group->street}}" placeholder=""
                                            class="lg:w-1/2 w-full" value="{{old('street', $group->street)}}">
                                    </div>
                                </div>

                                <div class="md:flex items-center gap-10 w-full">
                                    <label class="md:w-32"> Landmark</label>
                                    <div class="flex-1 max-md:mt-4">
                                        <input type="text" name="landmark" value="{{$group->landmark}}"
                                            placeholder="" class="lg:w-1/2 w-full"
                                            value="{{old('landmark', $group->landmark)}}">
                                    </div>
                                </div>

                                <div class="md:flex items-center gap-10 w-full">
                                    <label class="md:w-32"> City</label>
                                    <div class="flex-1 max-md:mt-4">
                                        <select class="!border-0 !rounded-md w-full text-capitalize lg:w-1/2 w-full"
                                            name="city">
                                            @foreach(getGujaratCities() as $city)
                                            <option value="{{$city->name}}" @if($city->name == $group->city) selected
                                                @endif>{{$city->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>



                                <div class="md:flex items-center gap-10 w-full ">
                                    <label class="md:w-32"> State</label>
                                    <div class="flex-1 max-md:mt-4">
                                        <select class="!border-0 !rounded-md w-full text-capitalize lg:w-1/2 w-full"
                                            name="state">
                                            @foreach(getStates() as $state)
                                            <option value="{{$state->name}}" @if($state->name == $group->state)
                                                selected @endif>{{$state->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>



                                <div class="md:flex items-center gap-10">
                                    <label class="md:w-32"> Pin Code </label>
                                    <div class="flex-1 max-md:mt-4">
                                        <input type="text" name="pincode" value="{{$group->pincode}}" placeholder=""
                                            class="lg:w-1/2 w-full" value="{{old('pincode', $group->pincode)}}">
                                    </div>
                                </div>



                                <div class="md:flex items-center gap-10">
                                    <label class="md:w-32"> Establishment Year </label>
                                    <div class="flex-1 max-md:mt-4">
                                        <select class="!border-0 !rounded-md lg:w-1/2 w-full" name="establishment_year"
                                            value="{{old('establishment_year', $group->establishment_year)}}">
                                            <option value="">Select Year</option>
                                            @for($i = 2024; $i >= 1850; $i--)
                                            <option value="{{$i}}" @if($i==$group->establishment_year) selected
                                                @endif>{{$i}}</option>
                                            @endfor
                                        </select>
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
                                action="{{route('updateMyBusinessSocialLinks', $group->id)}}" method="POST"
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
                                                value="{{ isset($group->socialLinks->facebook) ? $group->socialLinks->facebook : '' }}"
                                                placeholder="http://www.facebook.com/myname">
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="bg-pink-50 rounded-full p-2 flex ">
                                            <ion-icon name="logo-instagram" class="text-2xl text-pink-600"></ion-icon>
                                        </div>
                                        <div class="flex-1">
                                            <input type="text" name="instagram" class="w-full"
                                                value="{{ isset($group->socialLinks->instagram) ? $group->socialLinks->instagram : '' }}"
                                                placeholder="http://www.instagram.com/myname">
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="bg-sky-50 rounded-full p-2 flex ">
                                            <ion-icon name="logo-twitter" class="text-2xl text-sky-600"></ion-icon>
                                        </div>
                                        <div class="flex-1">
                                            <input type="text" name="twitter" class="w-full"
                                                value="{{ isset($group->socialLinks->twitter) ? $group->socialLinks->twitter : '' }}"
                                                placeholder="http://www.twitter.com/myname">
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="bg-red-50 rounded-full p-2 flex ">
                                            <ion-icon name="logo-youtube" class="text-2xl text-red-600"></ion-icon>
                                        </div>
                                        <div class="flex-1">
                                            <input type="text" name="youtube" class="w-full"
                                                value="{{ isset($group->socialLinks->youtube) ? $group->socialLinks->youtube : '' }}"
                                                placeholder="http://www.youtube.com/myname">
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="bg-red-50 rounded-full p-2 flex ">
                                            <ion-icon name="logo-pinterest" class="text-2xl text-red-600"></ion-icon>
                                        </div>
                                        <div class="flex-1">
                                            <input type="text" name="pinterest" class="w-full"
                                                value="{{ isset($group->socialLinks->pinterest) ? $group->socialLinks->pinterest : '' }}"
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

                        <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                            <div class="bg-blue-600 h-1 rounded-full" style="width: 25%"></div>
                        </div>

                        <p class='heading-h1 font-semibold text-black font-semibold text-black mb-5'>Contact Details</p>
                        <form class="needs-validation data-form"
                            action="{{route('updateMyBusinessContact', $group->id)}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="space-y-5">
                                <input type="hidden" name="cid" value="{{$group->cid}}">
                                <div class="md:flex items-center gap-10">
                                    <div class="flex flex-1 max-md:mt-4">

                                        <select class="form-title float-left" name="title">
                                            @foreach(getContactTitles() as $title)
                                            <option value="{{$title}}" @if($title==$group->title) selected
                                                @endif>{{$title}}</option>
                                            @endforeach

                                        </select>

                                        <input type="text" name="contact_person" placeholder="Contact Person Name"
                                            value="@if($group->contact_person){{$group->contact_person}}@endif"
                                            class="flex-auto float-left">
                                    </div>
                                </div>

                                <p>Mobile Number:</p>

                                <div class="md:flex items-center gap-10">
                                    <div class="flex flex-1 max-md:mt-4 form-group">
                                        <input type="text" class="form-title float-left" disabled value="+91">
                                        <input type="number" name="phone1"
                                            value="@if($group->phone1){{$group->phone1}}@endif"
                                            placeholder="Primary Mobile No" class="flex-auto float-left">
                                    </div>
                                </div>

                                <div class="md:flex items-center gap-10">
                                    <div class="flex flex-1 max-md:mt-4 form-group">
                                        <input type="text" class="form-title float-left" disabled value="+91">
                                        <input type="number" name="phone2"
                                            value="@if($group->phone2){{$group->phone2}}@endif"
                                            placeholder="Secondary Mobile No" class="flex-auto float-left">
                                    </div>
                                </div>

                                <p>Whatsapp Number:</p>


                                <div class="md:flex items-center gap-10">
                                    <div class="flex flex-1 max-md:mt-4 form-group">
                                        <input type="text" class="form-title float-left" disabled value="+91">
                                        <input type="number" name="whatsapp1"
                                            value="@if($group->whatsapp1){{$group->whatsapp1}}@endif"
                                            placeholder="Primary Whatsapp" class="flex-auto float-left">
                                    </div>
                                </div>



                                <div class="md:flex items-center gap-10">
                                    <div class="flex flex-1 max-md:mt-4 form-group">
                                        <input type="text" class="form-title float-left" disabled value="+91">
                                        <input type="number" name="whatsapp2"
                                            value="@if($group->whatsapp2){{$group->whatsapp2}}@endif"
                                            placeholder="Secondary Whatsapp" class="flex-auto float-left">
                                    </div>
                                </div>



                                <p>Email Accounts:</p>


                                <div class="md:flex items-center gap-10">
                                    <div class="flex flex-1 max-md:mt-4 form-group">
                                        <input type="email" name="email1"
                                            value="@if($group->email1){{$group->email1}}@endif"
                                            placeholder="Primary Email" class="flex-auto float-left">
                                    </div>
                                </div>



                                <div class="md:flex items-center gap-10">
                                    <div class="flex flex-1 max-md:mt-4 form-group">
                                        <input type="email" name="email2"
                                            value="@if($group->email2){{$group->email2}}@endif"
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