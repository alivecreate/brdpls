@extends('front.layout.blank-layout')


@section('meta-content')

@endsection

@section('content')

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


<div class="sm:flex login-page-wrapper">
    <div
        class="relative lg:w-[580px] md:w-96 w-full p-10 min-h-screen bg-white shadow-xl flex items-center pt-10 dark:bg-slate-900 z-10">
        <div class="w-full lg:max-w-sm mx-auto space-y-10 m-responsive dark:text-white"
            uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">

            <div>
                <h2 class="text-2xl font-semibold mb-1.5">Forgot Password </h2>
                <p class="text-sm text-gray-700 font-normal">If you haven’t signed up yet. <a
                        href="{{route('registration')}}" class="text-blue-700">Register here!</a></p>
            </div>


            <form method="POST" action="{{route('forgotPWPost')}}"
                class="space-y-7 text-sm text-black font-medium dark:text-white"
                uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true"
                enctype="multipart/form-data">
                @csrf
                <div>

                    <div class="col-span-2">
                        <label for="checkPhone" class=""><span class='text-danger'>*</span>Phone Number</label>
                        <div class="mt-2.5 flex items-center">
                            <span
                                class="px-3 py-2 mr-1 border border-slate-200 dark:border-slate-800 bg-slate-100 dark:bg-white/5 rounded-l-lg text-slate-600 dark:text-slate-300">
                                +91
                            </span>
                            <input required id="checkPhone" name="phone" type="text" style="
                                  border-bottom-left-radius: 0px;
                                  border-top-left-radius: 0px;
                              " placeholder="your mobile number"
                                class="w-full !rounded-l-none !rounded-r-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5">
                        </div>
                        <p id="error-message" class="text-red-500 mt-1 text-sm"></p> <!-- Error message container -->
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
                <div>
                    <button type="submit" class="button bg-primary text-sm text-white w-full">Send OTP</button>
                </div>

            </form>
        </div>
    </div>

    <div class="flex-1 relative bg-primary max-md:hidden" style="background: #6e0e1a;">
        <div class="relative w-full h-full" tabindex="-1" uk-slideshow="animation: slide; autoplay: true">
            <ul class="uk-slideshow-items w-full h-full">
                <li class="w-full">
                    <img src="{{asset('front')}}/images/web/login-image.webp" alt=""
                        class="w-full h-full uk-transform-origin-center-left" style="object-fit: contain;">

                    <div class="w-full h-96 absolute bottom-0 left-0"></div>
                </li>
            </ul>

            <div class="flex justify-center">
                <ul class="inline-flex flex-wrap justify-center  absolute bottom-8 gap-1.5 uk-dotnav uk-slideshow-nav">
                </ul>
            </div>

        </div>


    </div>

</div>


<!-- Ion icon -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- Dark mode -->
<script>
// On page load or when changing themes, best to add inline in `head` to avoid FOUC
if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)')
        .matches)) {
    document.documentElement.classList.add('dark')
} else {
    document.documentElement.classList.remove('dark')
}

// Whenever the user explicitly chooses light mode
localStorage.theme = 'light'

// Whenever the user explicitly chooses dark mode
localStorage.theme = 'dark'

// Whenever the user explicitly chooses to respect the OS preference
localStorage.removeItem('theme')
</script>


@endsection