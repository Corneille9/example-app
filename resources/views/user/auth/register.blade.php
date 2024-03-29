@extends("user.auth.layout.app")

@section("title", "Register")

@section("style")
    <style>
        .error{
            color: red;
        }
    </style>
@endsection

@section("content")

    <!-- Right -->
    <div class="col-12 col-lg-6 m-auto">
        <div class="row my-5">
            <div class="col-sm-10 col-xl-8 m-auto">
                <!-- Title -->
                <img src="assets/images/element/03.svg" class="h-40px mb-2" alt="">
                <h2>Sign up for your account!</h2>
                <p class="lead mb-4">Nice to see you! Please Sign up with your account.</p>

                <!-- Form START -->
                <form action="{{route("register.store")}}" method="post">
                    @csrf
                    <!-- name -->
                    <div class="mb-4">
                        <label for="name" class="form-label">Name *</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control border-0 bg-light rounded-end ps-1" name="name" id="name" placeholder="Votre nom" required data-value-missing="Ce champ est obligatoire" value="{{old("name")}}">
                        </div>
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="form-label">Email address *</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-envelope-fill"></i></span>
                            <input type="email" class="form-control border-0 bg-light rounded-end ps-1" name="email" id="email" placeholder="E-mail" required data-value-missing="Ce champ est obligatoire" value="{{old("email")}}">
                        </div>
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Password -->
                    <div class="mb-4">
                        <label for="password" class="form-label">Password *</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control border-0 bg-light rounded-end ps-1" placeholder="*********" id="password" name="password" required data-value-missing="Ce champ est obligatoire">
                        </div>
                        @error('password')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Confirm Password -->
                    <div class="mb-4">
                        <label for="confirm-password" class="form-label">Confirm Password *</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control border-0 bg-light rounded-end ps-1" placeholder="*********" id="confirm-password" name="password_confirmation" required data-value-missing="Ce champ est obligatoire">
                        </div>
                        @error('password_confirmation')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Check box -->
                    <div class="mb-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="accept-condition" name="accept_condition" required data-value-missing="Veuillez accepter les conditions">
                            <label class="form-check-label" for="accept-condition">By signing up, you agree to the<a href="#"> terms of service</a></label>
                        </div>
                        @error('accept_condition')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Button -->
                    <div class="align-items-center mt-0">
                        <div class="d-grid">
                            <button class="btn btn-primary mb-0" type="submit">Sign Up</button>
                        </div>
                    </div>
                </form>
                <!-- Form END -->

                <!-- Social buttons -->
                <div class="row">
                    <!-- Divider with text -->
                    <div class="position-relative my-4">
                        <hr>
                        <p class="small position-absolute top-50 start-50 translate-middle bg-body px-5">Or</p>
                    </div>
                    <!-- Social btn -->
                    <div class="col-xxl-6 d-grid">
                        <a href="#" class="btn bg-google mb-2 mb-xxl-0"><i class="fab fa-fw fa-google text-white me-2"></i>Signup with Google</a>
                    </div>
                    <!-- Social btn -->
                    <div class="col-xxl-6 d-grid">
                        <a href="#" class="btn bg-facebook mb-0"><i class="fab fa-fw fa-facebook-f me-2"></i>Signup with Facebook</a>
                    </div>
                </div>

                <!-- Sign up link -->
                <div class="mt-4 text-center">
                    <span>Already have an account?<a href="sign-in.html"> Sign in here</a></span>
                </div>
            </div>
        </div>
    </div>

@endsection

@section("script")
    <script src="{{asset("assets/vendor/html5-validation-1.0.0/validation.min.js")}}"></script>
@endsection
