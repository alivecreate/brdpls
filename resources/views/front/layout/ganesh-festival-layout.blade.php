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
 
        

        @if (session('error'))
        <script>
        toastr.error("{{ session('error') }}");
        </script>
        @endif

        @if (session('success'))
        <script>
        toastr.success("{{ session('success') }}");
        </script>
        @endif



</body>
</html>