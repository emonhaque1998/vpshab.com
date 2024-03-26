<x-app-layout>
    <!--breadcrumb-->
    <x-breadcrumb pageName="Categories" />
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-header py-3">
            <h6 class="mb-0">Add Product Category</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-lg-4 d-flex">
                    <div class="card border shadow-none w-100">
                        <div class="card-body">
                            <form class="row g-3" action="{{ route('category.index') }}" method="POST"
                                id="categorySubmitForm">
                                @csrf
                                <div class="col-12">
                                    <label for="categoyName" class="form-label">Name</label>
                                    <input type="text" id="categoyName" class="form-control"
                                        placeholder="Category name" name="category_name">
                                </div>

                                <div class="col-12">
                                    <div class="d-grid">
                                        <x-submit btnId="btnCategorySubmit" btnText="Add Category" />
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
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Order</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="categoryList">
                                        @isset($information)
                                            @foreach ($information as $key => $category)
                                                <tr>
                                                    <td>#{{ ++$key }}</td>
                                                    <td>{{ $category->category_name }}</td>
                                                    <td>{{ $category->category_slug }}</td>
                                                    <td>54</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3 fs-6">
                                                            <a href="javascript:;" id="categoryView"
                                                                data={{ $category->category_slug }} class="text-primary"
                                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                title="" data-bs-original-title="View detail"
                                                                aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                                            <a href="{{ url("admin/products/category/$category->category_slug/edit") }}"
                                                                class="text-warning" id="editCategory"
                                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                title="" data-bs-original-title="Edit info"
                                                                aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                                            <a href="javascript:;" class="text-danger"
                                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                data={{ $category->category_slug }} id="deleteCategory"
                                                                onclick="deleteCategory(event)" title=""
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
    <script>
        function deleteCategory(event) {
            console.log(event.target.parentElement)
        }
    </script>
</x-app-layout>
