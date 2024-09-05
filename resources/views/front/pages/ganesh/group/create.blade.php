@extends('front.layout.ganesh-festival-layout')

@section('content')


<!-- main contents -->
<main id="site__main"
    class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">
    <div class="lg:flex 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto lg:mt-2 mt-6" id="js-oversized">

        <div class="lg:flex mx-auto w-full">
            <div class="2xl:w-[380px] lg:w-[330px] w-full hidden lg:block">
                <img src="{{asset('front/images/web')}}/group-create.webp" alt="barodaplus ganesh festival groups">
            </div>


            <div class="lg:w-1/2 w-full bg-gray-300 p-4">




                @if(isUserVerified() && isUserVerified()->status == 'pending')

                <p class="mb-3 mt-100 text-primary text-xl text-center mt-6"><ion-icon name="alert-circle"></ion-icon>ગણેશ મંડળના રજિસ્ટ્રેશન માટે વેરીફિકેસન ફરજિયાત છે.</p>
                <a class="btn-md button lg:px-10 bg-primary text-white text-24 w-full" href="{{route('userVerification',['cid' => isUserVerified()->cid])}}">Verify Account</a>

                @else
                
                <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                    <div class="bg-blue-600 h-1 rounded-full" style="width: 10%"></div>
                </div>

                <p class='heading-h1 font-semibold text-black font-semibold text-black mb-0'>Group Registration</p>
                <p class="subheading-h2">ગણેશ મંડળ અને યુવક મંડળનું રજિસ્ટ્રેશન</p>
                <p class="mb-3 text-danger">દરેક વિગત English માં લખો.</p>
                <form class="needs-validation data-form" action="{{route('ganeshFestivalGroup.store')}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="space-y-5">

                        <div class="md:flex items-center gap-10">
                            <div class="flex-1 max-md:mt-4">
                                <input type="text" name="name" placeholder="Group Name" required class="w-full"
                                    value="{{old('name')}}">
                            </div>
                        </div>

                        <div class="md:flex items-center gap-10">
                            <div class="flex-1 max-md:mt-4">
                                <textarea type="text" name="decoration" placeholder="Decoration and Theme" required
                                    class="w-full textarea">{{old('decoration')}}</textarea>
                            </div>
                        </div>

                        <div class="md:flex items-center gap-10">
                            <div class="flex-1 max-md:mt-4">
                                <input type="text" name="address" placeholder="Address" required class="w-full"
                                    value="{{old('address')}}">
                            </div>
                        </div>

                        <div class="md:flex items-center gap-10">
                            <div class="flex-1 max-md:mt-4">
                                <select class="!rounded-md w-full text-capitalize" name="city">
                                    <option value="">Select City</option>
                                    @foreach(getGujaratCities() as $city)
                                    <option value="{{$city->name}}" @if(old('city')==$city->name || $city->name ==
                                        'vadodara') selected @endif>{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex-1 max-md:mt-4">
                                <select class="!rounded-md w-full text-capitalize" name="state">
                                    <option value="">Select State</option>
                                    @foreach(getStates() as $state)
                                    <option value="{{$state->name}}" @if($state->name == 'Gujarat') selected
                                        @endif>{{$state->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="flex-1 max-md:mt-4">
                            <select class="!rounded-md w-full text-capitalize" name="year" value="{{old('year')}}">
                                <option value="">Establishment Year</option>
                                @for($i = 2024; $i >= 1850; $i--)
                                <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>

                        <div class="md:flex items-center gap-10">
                            <div class="flex-1 max-md:mt-4">
                                <input type="file" id="coverImageInput" name="cover" style="display: none;"
                                    accept="image/jpeg, image/png, image/webp" />



                                <!-- Custom upload button -->
                                <button type="button" id="customUploadButton"
                                    class="mt-4 flex align-items-center uploadButton" style="background: #545252;">
                                    <ion-icon name="image-outline" style="height: 18px;width: 18px;"></ion-icon>
                                    &nbsp;&nbsp;Choose Cover Photo
                                </button>

                                <img id="imagePreview" src=""
                                    style="max-width: 100%;margin-top: 10px;max-height: 100px;" />

                                <script>
                                document.getElementById('customUploadButton').addEventListener('click', function() {
                                    document.getElementById('coverImageInput').click();
                                });

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



                        @if ($errors->any())
                        <div class="custom-alert">
                            <ul class="custom-list">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif




                        <div class="md:flex items-start gap-10 " hidden="">
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
                            &amp; Continue <span class="ripple-overlay"></span></button>
                    </div>

                </form>

                
                @endif

            </div>
        </div>


    </div>
    </div>
</main>
</div>



@include('front.widget.product-modal-block')


@endsection