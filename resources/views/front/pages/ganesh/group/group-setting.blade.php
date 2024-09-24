@extends('front.layout.ganesh-festival-layout')

@section('title')
{{ $group->name }}, {{ $group->city }}, Ganesh Festival Settings - Barodaplus.com
@endsection

@section('custom-head')
<style>
/* Inline print styles */
@media print {
    @page {
        size: A4;
        margin: 1cm;
    }
}
</style>
@endsection

@section('custom-script')

<script>
document.getElementById('share-button').addEventListener('click', async () => {
    // Check if the Web Share API is supported
    if (navigator.share) {
        try {
            await navigator.share({
                title: '{{optional($group)->name}}',
                text: '*🚩 બરોડા પ્લસ ગણેશ સ્પર્ધા - 2024 🚩 - {{optional($group)->name}}* - મંડળને વોટ કરવા અને ફોટો તેમજ વિડિયો જોવા નીચે આપેલી લિન્ક પર ક્લિક કરો.',
                url: window.location.href
            });
            console.log('Content shared successfully!');
        } catch (error) {
            console.error('Error sharing:', error);
        }
    } else {
        alert('Your browser does not support the Web Share API.');
    }
});


$(document).ready(function() {
    $('.tab-settings').addClass('border-blue-600 text-blue-600');
});
</script>




@endsection



@section('content')

<main id="site__main"
    class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

    <div class="max-w-[1065px] mx-auto">

        @include('front.pages.ganesh.group.navbar-group')


        <div class="w-full gap-2.5 mt-6 mb-10"
            uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-small; delay: 100 ;repeat: true">


            <style>
            .custom-alert {
                background-color: #f8d7da;
                color: #721c24;
                border: 1px solid #f5c6cb;
                padding: 10px;
                margin-bottom: 15px;
                border-radius: 4px;
            }

            .custom-alert .custom-list {
                list-style-type: disc;
                margin-left: 20px;
            }
            </style>

            @if ($errors->any())
            <div class="custom-alert">
                <ul class="custom-list">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif


            <div class="box relative rounded-lg shadow-md">


            <!-- nav tabs -->
            <div class="relative border-b" tabindex="-1" uk-slider="finite: true">

                <nav class="uk-slider-container overflow-hidden nav__underline px-6 p-0 border-transparent -mb-px">

                    <ul class="uk-slider-items w-[calc(100%+10px)] !overflow-hidden"
                        uk-switcher="connect: #setting_tab ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">
                        <li class="w-auto pr-2.5"> <a href="#"> Group Setting </a> </li>
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


            <div id="setting_tab" class="uk-switcher md:py-12 md:px-20 p-6 overflow-hidden text-black text-sm">


                <!-- tab user basic info -->
                <div>

                    <div>
                        
                        <form class="needs-validation data-form dark:text-white"
                            action="{{ route('group.update', $group->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="space-y-6">

                                <div class="md:flex items-center gap-10">
                                    <label class="md:w-32"> Group Name </label>
                                    <div class="flex-1 max-md:mt-4">
                                        <input type="text" name="name" placeholder="Your Group Name"
                                            required class="w-full"
                                            value="{{ old('name') ?: $group->name }}">
                                    </div>
                                </div>

                                <div class="md:flex items-center gap-10">
                                    <label class="md:w-32"> Description </label>
                                    <div class="flex-1 max-md:mt-4">
                                            <textarea class="w-full" name="description" rows="5" value="{{old('description')}}"
                                            placeholder="Your Group Description">{{ old('bio') ?: $group->description}}</textarea>
                                    </div>
                                </div>
                                

                                <div class="md:flex items-center gap-10">
                                    <label class="md:w-32"> Address </label>
                                    <div class="flex-1 max-md:mt-4">
                                        <input type="text" name="address" placeholder="Your Address" class="w-full not-allowed"
                                             value="{{ old('address') ?: $group->address }}">
                                    </div>
                                </div>

                                
                                <div class="md:flex items-center gap-10">
                                    <label class="md:w-32"> City</label>
                                        <div class="flex-1 max-md:mt-4">
                                            <select class="!rounded-md w-full text-capitalize" name="city">
                                                <option value="">Select City</option>
                                                @foreach(getGujaratCities() as $city)
                                                <option value="{{$city->name}}" @if(old('city')==$city->name ||
                                                    $city->name == $group->city) selected @endif>{{$city->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                <div class="md:flex items-center gap-10">
                                    <label class="md:w-32"> Establishment Year </label>
                                    <select name="year" id="year" class="space-y-5 mt-3 p-2 w-40">
                                        <option value="">Select Year</option>
                                        @for($i = now()->year; $i >= 1925; $i--)
                                            <option value="{{ $i }}" @if($i == $group->year) selected @endif>{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>



                            </div>

                            <div class="flex items-center gap-4 mt-16 lg:pl-[10.5rem]">
                                <button type="submit" class="button lg:px-10 bg-primary text-white max-md:flex-1"> Save
                                    Group Setting <span class="ripple-overlay"></span></button>
                            </div>
                        </form>

                    </div>

                    @if ($errors->any())
                    <div class="custom-alert mt-4">
                        <ul class="custom-list">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>


            </div>
        </div>




            @include('front.widget.confirm-popup')

            @include('front.widget.popup.upload-cover-popup')
            @include('front.widget.popup.upload-photos-group-popup')
            @include('front.widget.popup.upload-video-group-popup')



</main>

</div>

@endsection