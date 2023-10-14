<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from thegenius.co/html/loanplus/preview/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 22:05:38 GMT -->

<head>
    @include('web.layouts.head.meta-data')

    @include('web.layouts.head.style')
</head>

<body class="js">

    {{-- header --}}
    @include('web.layouts.navigation.header')

    @yield('contents')

    <!-- end of footer area -->
    @include('web.layouts.bottom.footer')
    @include('web.layouts.bottom.scripts')

    <!-- Mirrored from thegenius.co/html/loanplus/preview/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 22:06:38 GMT -->
</body>

</html>
