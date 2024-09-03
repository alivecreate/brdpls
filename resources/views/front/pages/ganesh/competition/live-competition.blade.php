@extends('front.layout.ganesh-festival-layout')

@section('custom-head')

<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="data-user-id" content="{{ Auth::id() }}">
    <meta name="data-category-id" content="{{ csrf_token() }}">

@endsection



@section('content')
<main id="site__main"
    class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] 2xl:ml-[--w-side]  xl:ml-[--w-side-sm] h-[calc(100vh-var(--m-top))] mt-[--m-top] p-6">

    <div class="2xl:max-w-[1220px] max-w-[1065px] mx-auto lg:mt-2 mt-6">

    @include('front.ext.nav-mobile-menu')

        <div class="page-heading">

            <h1 class="page-title"> ગણેશ સ્પર્ધા </h1>
            <nav class="nav__underline">
                <ul class="group"
                    uk-switcher="">
                    <a href="?cid=1">શ્રેષ્ઠ મૂર્તિ ({{getTotalCategoryGroup('1-2')}})</a>
                    <a href="?cid=2">શ્રેષ્ઠ ડેકોરેશન ({{getTotalCategoryGroup('1-2')}})</a>
                    <a href="?cid=3"> ઘરની બેસ્ટ મૂર્તિ</a>
                </ul>
            </nav>
        </div>

        <div class="" id='voting-list'  
            data-user-id="{{Auth::id() ? Auth::id() : 0}}"
            data-category-id="1"
            ></div>
    
        </div>
    </div>


</main>

</div>

@endsection