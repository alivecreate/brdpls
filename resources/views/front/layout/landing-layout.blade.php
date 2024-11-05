<!DOCTYPE html>
<html lang="en">

<head>

    @include('front.ext.head')
    
    @yield('custom-head')

    @if(View::hasSection('layout-type'))
        <link rel="stylesheet" href="{{ asset('css/' . trim(View::getSection('layout-type')) . '.css') }}">
        <title>{{trim(View::getSection('layout-type'))}}</title>
    @endif
    

</head>

<body>

    <div id="wrapper">

        @include('front.ext.headers.header-landing')

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





    </div>
</body>

</html>