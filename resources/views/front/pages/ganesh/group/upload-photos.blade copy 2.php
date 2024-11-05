@extends('front.layout.ganesh-festival-layout')

@section('content')


        <!-- main contents -->
<main id="site__main" class="p-2.5 h-[calc(100vh-var(--m-top))] mt-20">
    <div class="2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[828px] mx-auto mt-10 container-w" id="js-oversized">

    <div class="lg:flex 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto lg:mt-2 mt-6">

    

        <div class="w-3/5 bg-white p-4">
            <!-- Content for the second column (60%) -->
             
<div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
  <div class="bg-blue-600 h-1 rounded-full" style="width: 10%"></div>
</div>


            <p class='heading-h1 font-semibold page-title'>Upload Photos</p>
            <p class="mb-3 subheading-h2">ગણેશ મંડળના ફોટોગ્રાફ અપલોડ કરો.</p>
                     

                       
                <div>
                    <div>
                        <div class="space-y-6">
                            <div class="md:flex items-center gap-10">
                                <div class="flex-1 max-md:mt-4">

                                    <p id="uploadStatus"></p>

                                    <div class="image-upload-container">
                                        <input type="file" id="imageInput" accept="image/*" style="display: none;" />
                                        <form method="post" action="{{route('uploadGaneshGroupCover')}}">
                                            @csrf
                                            <input type="hidden" name="cid" value="{{$cid}}" />
                                            
                                            <button type="button" id="uploadButton" class="flex align-items-center">
                                                <ion-icon name="cloud-upload-outline" style="height: 18px;width: 18px;">
                                                </ion-icon>&nbsp;&nbsp;Upload Cover
                                            </button>
                                        </form>

                                        <div class="card uk-transition-toggle shadow-none">
                                            <div id="imagePreview" class="image-preview">
                                                <img id="previewImg"
                                                src="@if($group->cover)https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$group->cover}}/sm @else {{asset('front')}}/images/web/no-logo.png @endif"
                                                    alt="">
                                                <div class="card-overly"></div>
                                            </div>
                                            <button type="button" id="deleteButton"
                                                onclick="deleteImage('{{$group->cover}}')"
                                                class="uk-transition-fade absolute top-0 right-0 m-2 z-10 bg-black/20 rounded-full flex p-1 thumb-delete">
                                                <ion-icon name="close" class="text-white md hydrated icon" role="img"
                                                    aria-label="close"></ion-icon>
                                            </button>
                                        </div>

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
        </div>
    </div>
    
    
                </div> 
            </div>
        </main>
    </div>
    


 @include('front.widget.product-modal-block')


@endsection
