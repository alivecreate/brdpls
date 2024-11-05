<!DOCTYPE html>
<html lang="en">
<head>

    @include('front.ext.head')
    
    @yield('custom-head')
 
</head>
<body>
 
    <div id="wrapper">

		@include('front.ext.header')

        @include('front.widget.sidebar')

        @yield('content')

		@include('front.ext.scripts')
        @yield('custom-script')

</body>
</html>