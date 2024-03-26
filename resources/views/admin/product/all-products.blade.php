<x-app-layout>
    <!--breadcrumb-->
    <x-breadcrumb pageName="All Products" />
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-header py-3">
            <div class="row align-items-center m-0">
                <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                    <select class="form-select" id="allProductCetegorySelect">
                        @isset($categories)
                            @foreach ($categories as $category)
                                <option value="{{ $category->category_slug }}">{{ $category->category_name }}</option>
                            @endforeach
                        @endisset
                    </select>
                </div>
            </div>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table align-middle table-striped">
                    <tbody id="allProuctBody">
                        {{-- @unless (!$information)
                            <h1 class="text-center mt-5">No Product Found</h1>
                        @endunless --}}
                        @isset($information)
                            @foreach ($information as $product)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td class="productlist">
                                        <a class="d-flex align-items-center gap-2" href="#">
                                            <div>
                                                <h6 class="mb-0 product-title">{{ $product->title }}</h6>
                                            </div>
                                        </a>
                                    </td>
                                    <td><span>{{ $product->currency }} {{ $product->monthly_price }}.00</span></td>
                                    <td>
                                        <span
                                            class="badge rounded-pill bg-{{ $product->status === 'published' ? 'success' : 'danger' }}">{{ $product->status }}</span>
                                    </td>
                                    <td><span>5-31-2020</span></td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3 fs-6">
                                            <a href="{{ url("admin/products/all-products/$product->slug") }}"
                                                class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="" data-bs-original-title="View detail" aria-label="Views"><i
                                                    class="bi bi-eye-fill"></i></a>
                                            <a href="{{ url("admin/products/edit/single-product/$product->slug") }}"
                                                class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="" data-bs-original-title="Edit info" aria-label="Edit"><i
                                                    class="bi bi-pencil-fill"></i></a>

                                            <a href="{{ url("admin/products/all-products/$product->slug") }}"
                                                data={{ $product->slug }} id="productDelete" class="text-danger"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
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

            <nav class="float-end mt-4" aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>

        </div>
    </div>
</x-app-layout>
