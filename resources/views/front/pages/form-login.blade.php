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
        <div class="w-full lg:max-w-sm mx-auto space-y-10 m-responsive"
            uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">

            <div>
                <h2 class="text-2xl font-semibold mb-1.5">Sign in to your account </h2>
                <p class="text-sm text-gray-700 font-normal">If you haven’t signed up yet. <a
                        href="{{route('registration')}}" class="text-blue-700">Register here!</a></p>
            </div>


            <form method="POST" action="{{route('checkAuth')}}"
                class="space-y-7 text-sm text-black font-medium dark:text-white"
                uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true"
                enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="email" class="">Phone Number</label>
                    <div class="mt-2.5">
                        <input id="phone" name="phone" type="tel" placeholder="Phone No." value="{{old('phone')}}"
                            required
                            class="w-full rounded-lg bg-transparent shadow-sm border border-slate-200 dark:border-slate-800 dark:bg-white/5 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                </div>
                <div>
                    <label for="email" class="">Password</label>
                    <div class="mt-2.5">
                        <input id="password" name="password" type="password" placeholder="***"
                            class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5">
                    </div>
                </div>

                <div class="flex items-center justify-between">

                    <div class="flex items-center gap-2.5">
                        <input id="rememberme" name="rememberme" type="checkbox">
                        <label for="rememberme" class="font-normal">Remember me</label>
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
                    <button type="submit" class="button bg-primary text-white w-full">Sign in</button>
                </div>

            </form>
        </div>
    </div>

    <div class="flex-1 relative bg-primary max-md:hidden" style="background: #6e0e1a;">
        <div class="relative w-full h-full" tabindex="-1" uk-slideshow="animation: slide; autoplay: true">
            <ul class="uk-slideshow-items w-full h-full">
                <li class="w-full">
                    <img src="{{asset('front')}}/images/web/login-image.webp" alt=""
                        class="w-full h-full uk-transform-origin-center-left" 
                        style="object-fit: contain;">

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