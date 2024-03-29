@extends("user.auth.layout.app")

@section("title", "Verify Email")

@section("style")
@endsection

@section("content")
    <!-- Right -->
    <div class="col-12 col-lg-6 m-auto">
        <div class="row my-5">
            <div class="col-sm-10 col-xl-8 m-auto">
                <!-- Title -->
                <span class="mb-0 fs-1">👋</span>
                <h1 class="fs-2">Verify your email</h1>
                <p class="lead mb-4">Un mail de verification a ette ....... cet addresse email.</p>

                <!-- Social buttons and divider -->
                <div class="row">
                    <!-- Divider with text -->
                    <div class="position-relative my-4">
                        <hr>
                        <p class="small position-absolute top-50 start-50 translate-middle bg-body px-5">Or</p>
                    </div>

                    <!-- Social btn -->
                    <div class="col-xxl-6 d-grid">
                        <a href="#" class="btn bg-google mb-2 mb-xxl-0"><i class="fab fa-fw fa-google text-white me-2"></i>Login with Google</a>
                    </div>
                    <!-- Social btn -->
                    <div class="col-xxl-6 d-grid">
                        <a href="#" class="btn bg-facebook mb-0"><i class="fab fa-fw fa-facebook-f me-2"></i>Login with Facebook</a>
                    </div>
                </div>

                <!-- Sign up link -->
                <div class="mt-4 text-center">
                    <span>Don't have an account? <a href="{{route("register")}}">Signup here</a></span>
                </div>
            </div>
        </div> <!-- Row END -->
    </div>
@endsection

@section("script")
@endsection
