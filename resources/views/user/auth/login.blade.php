@extends("user.auth.layout.app")

@section("title", "Login")

@section("style")
@endsection

@section("content")
    <!-- Right -->
    <div class="col-12 col-lg-6 m-auto">
        <div class="row my-5">
            <div class="col-sm-10 col-xl-8 m-auto">

                @include("common.alert")

                <!-- Title -->
                <span class="mb-0 fs-1">👋</span>
                <h1 class="fs-2">Login into Eduport!</h1>
                <p class="lead mb-4">Nice to see you! Please log in with your account.</p>

                <!-- Form START -->
                <form  action="{{route("login.authenticate")}}" method="POST">
                    @csrf
                    <!-- Email -->
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Email address *</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-envelope-fill"></i></span>
                            <input type="email" class="form-control border-0 bg-light rounded-end ps-1" placeholder="E-mail" id="exampleInputEmail1" name="email">
                        </div>
                        @error('email')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!-- Password -->
                    <div class="mb-4">
                        <label for="inputPassword5" class="form-label">Password *</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control border-0 bg-light rounded-end ps-1" placeholder="password" id="inputPassword5" name="password">
                        </div>
                        @error('password')
                        <div class="form-text text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <!-- Check box -->
                    <div class="mb-4 d-flex justify-content-between mb-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <div class="text-primary-hover">
                            <a href="{{route("forgot.password")}}" class="text-secondary">
                                <u>Forgot password?</u>
                            </a>
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="align-items-center mt-0">
                        <div class="d-grid">
                            <button class="btn btn-primary mb-0" type="submit">Login</button>
                        </div>
                    </div>
                </form>
                <!-- Form END -->

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
