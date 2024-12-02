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

    $('.my-b-social a').addClass('uk-active-tab');
});
</script>

@endsection



@section('content')


<main id="site__main" class="p-2.5 h-[calc(100vh-var(--m-top))] mt-20">
    <div class="2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[828px] mx-auto mt-10 container-w" id="js-oversized">


    @include('front.pages.my-business.breadcrumb')

        <div class="2xl:gap-12 gap-10 2xl:max-w-[1220px] mx-auto bg-white">


            @include('front.pages.my-business.page-tab')


            <script>
            document.addEventListener("DOMContentLoaded", function() {
                const tabLinks = document.querySelectorAll('#myTab li a');

                tabLinks.forEach(link => {
                    link.addEventListener('click', function(event) {
                        const targetID = this.getAttribute('href'); // e.g., #profile
                        history.pushState(null, null,
                        targetID); // Update the URL with the target ID
                    });
                });
            });

            // Handle back/forward navigation
            window.addEventListener('popstate', function() {
                const hash = window.location.hash;
                if (hash) {
                    const targetTab = document.querySelector(`#myTab li a[href="${hash}"]`);
                    if (targetTab) {
                        UIkit.tab("#myTab").show(targetTab.closest('li').index);
                    }
                }
            });
            </script>


            <div id="setting_tab" class="uk-switcher md:py-6 p-6 overflow-hidden text-black text-sm">
                <div class='uk-active' id="logo">


                <div>

                    <div class="w-full">

                        <div class="font-normal text-gray-400">

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
                                        <div class="bg-sky-50 rounded-full p-2 flex ">
                                            <ion-icon name="logo-linkedin" class="text-2xl text-sky-600"></ion-icon>
                                        </div>
                                        <div class="flex-1">
                                            <input type="text" name="linkedin" class="w-full"
                                                value="{{ isset($myBusiness->socialLinks->linkedin) ? $myBusiness->socialLinks->linkedin : '' }}"
                                                placeholder="http://www.linkedin.com/myname">
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

            </div>
        </div>
    </div>
    </div>
</main>
</div>



@include('front.widget.product-modal-block')


@endsection