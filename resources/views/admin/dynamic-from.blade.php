@extends("admin.layout.app")

@section("content")
    <!-- Page main content START -->
    <div class="page-content-wrapper border">

        <!-- Title -->
        <div class="row">
            <div class="col-12 mb-3">
                <h1 class="h3 mb-2 mb-sm-0">Dashboard</h1>
            </div>
        </div>

        <div class="card">

            <!-- Card header -->
            <div class="card-header border-bottom">
                <h5 class="card-header-title">General Settings</h5>
            </div>

            <!-- Card body START -->
            <div class="card-body">
                <form class="row g-4" action="{{route("dynamic-form")}}" method="POST">

                    @csrf

                    <!-- Input item -->
                    <div id="descriptions-content">
                        <div class="col-12 d-flex justify-content-between align-items-end">
                            <div class="w-100 mx-2">
                                <label class="form-label">Description 1</label>
                                <input type="text" name="descriptions[]" class="form-control w-100" placeholder="">
                            </div>
                            <button type="button" class="btn btn-danger btn-sm remove-item">Remove</button>
                        </div>
                    </div>

                    <!-- Save button -->
                    <div class="d-sm-flex justify-content-end">
                        <button type="button" class="btn btn-info mb-0 mx-2" id="add-item">Add Item</button>
                        <button type="submit" class="btn btn-primary mb-0">Update</button>
                    </div>
                </form>


                @foreach(\App\Models\Blog::find(1)->images as $image)
                    <img src="{{asset($image)}}" alt="">
                @endforeach

            </div>
            <!-- Card body END -->

        </div>
    </div>
    <!-- Page main content END -->
@endSection

@section("script")

    <script>

        const content = $("#descriptions-content");

        $("#add-item").click(function (e) {

            const len = content.children().length + 1;

            content.append(
                `
                    <div class="col-12 d-flex justify-content-between align-items-end">
                            <div class="w-100 mx-2">
                                <label class="form-label">Description ${len}</label>
                                <input type="text" name="descriptions[]" class="form-control w-100" placeholder="">
                            </div>
                            <button type="button" class="btn btn-danger btn-sm remove-item">Remove</button>
                        </div>
                `
            );

            $(".remove-item").click(function (e) {
                $(this).parent().remove();
            });
        });

        $(".remove-item").click(function (e) {
            $(this).parent().remove();
        });

    </script>

@endsection
