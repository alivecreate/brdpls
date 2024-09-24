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
    $('.tab-videos').addClass('border-blue-600 text-blue-600');
});
</script>




@endsection



@section('content')

<main id="site__main"
    class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

    <div class="max-w-[1065px] mx-auto">
       
        @include('front.pages.ganesh.group.navbar-group')

            @if(count($groupVideos) == 0)
                <p class="alert-danger2 mt-4 mb-10">No Video Available</p>
            @endif

        <div class="grid 2xl:grid-cols-3 lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 gap-2.5 mt-6 mb-10"
            uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-small; delay: 100 ;repeat: true">

            

                @foreach($groupVideos as $groupVideo)
                    
                    @if($groupVideo->video)
                        @if(getVideoStatus($groupVideo->video)['status'] == 'ready')
                        <div class="relative w-full h-full blur-background video-container">
                            <div style="padding-top: 56.25%;height: inherit;">
                                <iframe
                                    src="https://customer-awdbchbk0llt915y.cloudflarestream.com/{{$groupVideo->video}}/watch"
                                    style="border: none; position: absolute; top: 0; height: 100%; width: 100%"
                                    allow="accelerometer; gyroscope; autoplay; encrypted-media; picture-in-picture;"
                                    allowfullscreen="true"></iframe>
                            </div>
                        </div>
                        @elseif(getVideoStatus($groupVideo->video)['status'] == 'processing')
                        <div class="relative w-full h-full sm:px-4 mb-4 blur-background"
                            style="text-align: center;background: black;">
                            <img src="{{getVideoStatus($groupPost->video)['thumbnail']}}" style="margin: 0 auto;" />
                            <p class="bg-alert-processing">Your video is under processing please wait.</p>
                        </div>
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