@extends("user.auth.layout.app")

@section("title", "Forgot Password")

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
                <h1 class="fs-2">Forgot Password?</h1>
                <h5 class="fw-light mb-4">To receive a new password, enter your email address below.</h5>

                <!-- Form START -->
                <form action="{{route("forgot.password")}}" method="POST">
                    @csrf
                    <!-- Email -->
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Email address *</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-envelope-fill"></i></span>
                            <input type="email" name="email" class="form-control border-0 bg-light rounded-end ps-1" placeholder="E-mail" id="exampleInputEmail1">
                        </div>
                        @error('email')
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
