<!DOCTYPE html>
<html class="no-js" lang="zxx">


@include('themes.website.html.head')
<body>

	<!-- Start Header Area -->
@include('themes.website.html.header')
<!-- Header section end -->

<!-- Product section -->

<section class="product-section">

        @yield('content')


</section>
<!-- Product section end -->
@include('themes.website.html.footer')

</body>
</html>