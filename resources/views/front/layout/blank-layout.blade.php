<!DOCTYPE html>
<html lang="en">
<head>

    @include('front.ext.head')
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @yield('meta-content')
    
    @yield('custom-head')

 
</head>
<body>
 
    <div id="wrapper">

    @include('front.ext.header-ganesh-festival')
    @include('front.widget.sidebar-ganesh-festival-login')

    
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