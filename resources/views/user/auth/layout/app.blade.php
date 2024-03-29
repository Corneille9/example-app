<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eduport.webestica.com/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Mar 2024 09:32:00 GMT -->
<head>
    <title>@yield("title")</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Eduport- LMS, Education and Course Theme">

    @include("user.auth.layout.partial.theme_mode_script")

    @include("user.auth.layout.partial.style")
    @yield("style")

</head>

<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>
    <section class="p-0 d-flex align-items-center position-relative overflow-hidden">
        <div class="container-fluid">
            <div class="row">
                <!-- left -->
                <div
                    class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-100">
                    <div class="p-3 p-lg-5">
                        <!-- Title -->
                        <div class="text-center">
                            <h2 class="fw-bold">Welcome to our largest community</h2>
                            <p class="mb-0 h6 fw-light">Let's learn something new today!</p>
                        </div>
                        <!-- SVG Image -->
                        <img src="assets/images/element/02.svg" class="mt-5" alt="">
                        <!-- Info -->
                        <div class="d-sm-flex mt-5 align-items-center justify-content-center">
                            <!-- Avatar group -->
                            <ul class="avatar-group mb-2 mb-sm-0">
                                <li class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg"
                                         alt="avatar">
                                </li>
                                <li class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg"
                                         alt="avatar">
                                </li>
                                <li class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg"
                                         alt="avatar">
                                </li>
                                <li class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg"
                                         alt="avatar">
                                </li>
                            </ul>
                            <!-- Content -->
                            <p class="mb-0 h6 fw-light ms-0 ms-sm-3">4k+ Students joined us, now it's your turn.</p>
                        </div>
                    </div>
                </div>

                @yield("content")
            </div> <!-- Row END -->
        </div>
    </section>
</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

@include("user.auth.layout.partial.script")
@yield("script")

</body>

</html>
