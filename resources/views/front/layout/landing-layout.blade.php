<!DOCTYPE html>
<html lang="en">
<head>

    @include('front.ext.head')
    
    @yield('custom-head')
 
</head>
<body>
 
    <div id="wrapper">

		@include('front.ext.header-ganesh-festival')

        @yield('content')


		@include('front.ext.scripts')
        @yield('custom-script')
  
 

</body>
</html>