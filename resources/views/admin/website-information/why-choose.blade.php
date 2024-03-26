<x-app-layout>
    <!--breadcrumb-->
    <x-breadcrumb pageName="Why Choose" />
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-header py-3">
            <h6 class="mb-0">Add Why Choose Option</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-lg-4 d-flex">
                    <div class="card border shadow-none w-100">
                        <div class="card-body">
                            <form class="row g-3" action="" method="POST" id="specificationForm">
                                @csrf
                                <div class="col-12">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" id="title" class="form-control" placeholder="Title"
                                        name="title">
                                </div>
                                <div class="col-12">
                                    <label for="sub-title" class="form-label">Sub Title</label>
                                    <input type="text" id="sub-title" class="form-control" placeholder="Sub Title"
                                        name="sub-title">
                                </div>
                                <div class="col-12">
                                    <label for="button_text" class="form-label">Button Text</label>
                                    <input type="text" id="button_text" class="form-control"
                                        placeholder="Button Text" name="button_text">
                                </div>
                                <div class="col-12">
                                    <label for="button_url" class="form-label">Button URL</label>
                                    <input type="text" id="button_url" class="form-control" placeholder="Button URL"
                                        name="button_url">
                                </div>

                                <div class="col-12">
                                    <div class="d-grid">
                                        <x-submit btnId="optionAddSubmit" btnText="Add Option" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 d-flex">
                    <div class="card border shadow-none w-100">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Features</th>
                                            <th>Performance</th>
                                            <th>boosters</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="specificatonList">
                                        @isset($information)
                                            @foreach ($information as $key => $specification)
                                                <tr>
                                                    <td>#{{ ++$key }}</td>
                                                    <td>{{ $specification->features }}</td>
                                                    <td>{{ $specification->performance }}</td>
                                                    <td>{{ $specification->boosters }}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3 fs-6">
                                                            <a href="javascript:;" id="specificationView"
                                                                data={{ $specification->category_slug }}
                                                                class="text-primary" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom" title=""
                                                                data-bs-original-title="View detail" aria-label="Views"><i
                                                                    class="bi bi-eye-fill"></i></a>
                                                            <a href="{{ url("admin/products/category/$specification->category_slug/edit") }}"
                                                                class="text-warning" id="" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom" title=""
                                                                data-bs-original-title="Edit info" aria-label="Edit"><i
                                                                    class="bi bi-pencil-fill"></i></a>
                                                            <a href="javascript:;" class="text-danger"
                                                                id="removeSpecification" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom" title=""
                                                                data-bs-original-title="Delete" aria-label="Delete"><i
                                                                    class="bi bi-trash-fill"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endisset
                                    </tbody>
                                </table>
                            </div>
                            <nav class="float-end mt-0" aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div><!--end row-->
        </div>
    </div>
</x-app-layout>
