@extends('front.layout.ganesh-festival-layout')


@include('front.ext.head')
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="data-user-id" content="{{ Auth::id() }}">
    <meta name="data-category-id" content="{{ csrf_token() }}">


@yield('meta-content')

@section('custom-script')
@if (session('error'))

<script>
toastr.error('{{ session('
    error ') }}');
</script>
@endif

@if (session('success'))
<script>
toastr.success('{{ session('
    success ') }}');
</script>
@endif
@endsection


@section('content')
<main id="site__main"
    class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

    <div class="2xl:max-w-[1220px] max-w-[1065px] mx-auto mt-10">

        <div class="page-heading">

            <h1 class="page-title"> ગણેશ સ્પર્ધા </h1>
            <nav class="nav__underline">
                <ul class="group"
                    uk-switcher="connect: #group-tabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">
                    <li> <a href="#">શ્રેષ્ઠ મૂર્તિ ({{getTotalCategoryGroup('1-2')}})</a> </li>
                    <li> <a href="#">શ્રેષ્ઠ ડેકોરેશન ({{getTotalCategoryGroup('1-2')}})</a> </li>
                    <li> <a href="#"> ઘરની બેસ્ટ મૂર્તિ</a> </li>
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