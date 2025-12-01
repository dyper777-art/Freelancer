<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Impact Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="icon" href="{{ asset('assets/img/icon.jpg') }}" type="image/x-icon">

    @include('frontend.layout.style')

    <!-- =======================================================
  * Template Name: Impact
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    @include('frontend.layout.header')

    <main class="main">

        @yield('content')

    </main>

    @include('frontend.layout.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    @include('frontend.layout.jsshop')

</body>

</html>
