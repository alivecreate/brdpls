<!DOCTYPE html>
<html lang="en">
<head>

    @include('front.ext.head')
 
</head>
<body>
 
    <div id="wrapper">

		@include('front.ext.header')

        @yield('content')


		@include('front.ext.scripts')
  
 

</body>
</html>