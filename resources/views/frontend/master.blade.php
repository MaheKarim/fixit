<!DOCTYPE html>
<html lang="en">

<!-- Start Header -->
@include('frontend.layouts.header')
<!-- End Header -->

<body>


<!-- Start Menu Line -->
@include('frontend.layouts.menu')
<!-- Start Menu Line -->
    @yield('contents')
<!--Start footer area-->
@include('frontend.layouts.footer')
<!--End footer area-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Start Scripts JS -->
@include('frontend.layouts.scripts')
<!--End Scripts JS -->

</body>

</html>
