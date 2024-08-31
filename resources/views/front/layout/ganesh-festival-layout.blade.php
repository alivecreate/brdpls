<!DOCTYPE html>
<html lang="en">
<head>

    @include('front.ext.head')
    @yield('custom-head')
    
    
    @viteReactRefresh
    @vite('resources/js/app.jsx')

 
</head>
<body>
 
    <div id="wrapper">

		@include('front.ext.header-ganesh-festival')

        @include('front.widget.sidebar-ganesh-festival')

        
        @yield('content')

		@include('front.ext.scripts')
        @yield('custom-script')
 

</body>
</html>