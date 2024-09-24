@extends('front.layout.ganesh-festival-layout')


@section('title')
{{ $group->name }}, {{ $group->city }}, Ganesh Festival Photos - Barodaplus.com
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
    $('.tab-photos').addClass('border-blue-600 text-blue-600');
});
</script>




@endsection



@section('content')

<main id="site__main"
    class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

    <div class="max-w-[1065px] mx-auto">
        
    
    @include('front.pages.ganesh.group.navbar-group')


            @if(count($groupPhotos) == 0)
                <p class="alert-danger2 mt-4 mb-10">No Photos Available</p>
            @endif

        <div class="grid 2xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-2.5 mt-6 mb-10"
            uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-small; delay: 100 ;repeat: true">


            @foreach($groupPhotos as $groupPhoto)

            @if(count(getPostImages($groupPhoto->image)) == 1)

            <div class="">
                <a href="#">
                    <div class="">
                        <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{getPostImages($groupPhoto->image)[0]}}/md"
                            alt="">
                    </div>
                </a>
            </div>


            @elseif(count(getPostImages($groupPhoto->image)) > 1)
            @php
            $postImages = getPostImages($groupPhoto->image);
            @endphp

            @if(is_array($postImages) && count($postImages) > 0)
            @foreach($postImages as $index => $image)

            <div class="">
                <a href="#">
                    <div class="">
                        <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$image}}/md" alt="">
                    </div>
                </a>
            </div>

            @endforeach
            @endif


            @endif

            @endforeach
        </div>
    </div>



    @include('front.widget.confirm-popup')

    @include('front.widget.popup.upload-cover-popup')
    @include('front.widget.popup.upload-photos-group-popup')
    @include('front.widget.popup.upload-video-group-popup')



</main>

</div>

@endsection