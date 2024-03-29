<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eduport.webestica.com/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Mar 2024 09:32:13 GMT -->
<head>
    <title>@yield("title")</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Eduport- LMS, Education and Course Theme">

    @include("admin.layout.partial.theme_mode_script")

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

    @include("admin.layout.partial.style")
    @yield("style")

</head>

<body>


<!-- **************** MAIN CONTENT START **************** -->
<main>

    @include("admin.layout.partial.side_bar")

    <!-- Page content START -->
    <div class="page-content">

        @include("admin.layout.partial.header")

        @yield("content")
    </div>
    <!-- Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

@include("admin.layout.partial.script")
@yield("script")


</body>

</html>
