<!DOCTYPE html>
<html lang="en">
<head>

    @include('front.ext.head')
 
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @yield('meta')
    
    @yield('custom-head')

</head>
<body>
 
    <div id="wrapper">

		@include('front.ext.headers.header-dashboard')
        @include('front.widget.sidebar.business')

        @yield('content')

		@include('front.ext.scripts')
        @yield('custom-script')
  
 
           
        @if (session('error'))
        
        <script>
            toastr.error('{{ session('error') }}');
            </script>
        @endif

        @if (session('success'))
        <script>
            toastr.success('{{ session('success') }}');
            </script>
        @endif

      
        

</body>
</html>