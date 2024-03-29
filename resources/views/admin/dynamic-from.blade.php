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
                <form class="row g-4">

                    <!-- Input item -->
                    <div id="descriptions-content">
                        <div class="col-12">
                            <label class="form-label">Description 1</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>

                    <!-- Save button -->
                    <div class="d-sm-flex justify-content-end">
                        <button type="button" class="btn btn-info mb-0 mx-2" id="add-item">Add Item</button>
                        <button type="button" class="btn btn-primary mb-0">Update</button>
                    </div>
                </form>
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
            content.append(
                `
                    <div class="col-12">
                        <label class="form-label">Description 1</label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                `
            )
        })

    </script>

@endsection
