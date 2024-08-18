<!DOCTYPE html>
<html lang="en">
<head>

    @include('front.ext.head')
 
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @yield('meta')

</head>
<body>
 
    <div id="wrapper">

		@include('front.ext.header')
        @include('front.widget.sidebar.business')

        @yield('content')


		@include('front.ext.scripts')
  
 

</body>
</html>