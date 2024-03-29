@extends("user.auth.layout.app")

@section("title", "Reset Password")

@section("style")
@endsection

@section("content")
    <!-- Right -->
    <div class="col-12 col-lg-6 d-flex justify-content-center">
        <div class="row my-5">
            <div class="col-sm-10 col-xl-12 m-auto">

                @include("common.alert")

                <!-- Title -->
                <span class="mb-0 fs-1">🤔</span>
                <h1 class="fs-2">Reset Password</h1>
                <h5 class="fw-light mb-4">To receive a new password, enter your email address below.</h5>

                <!-- Form START -->
                <form action="{{route("password.update")}}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <input type="hidden" name="email" value="{{ $email }}">
                    <!-- Email -->
                    <div class="mb-4">
                        <label for="password" class="form-label">New Password *</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="fas fa-lock"></i></span>
                            <input type="password" name="password" class="form-control border-0 bg-light rounded-end ps-1" placeholder="Password" id="password">
                        </div>
                        @error('password')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password-confirmation" class="form-label">Confirm Password *</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="fas fa-lock"></i></span>
                            <input type="password" name="password_confirmation" class="form-control border-0 bg-light rounded-end ps-1" placeholder="Confirm Password" id="password-confirmation">
                        </div>
                        @error('password_confirmation')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!-- Button -->
                    <div class="align-items-center">
                        <div class="d-grid">
                            <button class="btn btn-primary mb-0" type="submit">Reset password</button>
                        </div>
                    </div>
                </form>
                <!-- Form END -->
            </div>
        </div> <!-- Row END -->
    </div>
@endsection

@section("script")
@endsection
