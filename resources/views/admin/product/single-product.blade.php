<x-app-layout>
    <!--breadcrumb-->
    <x-breadcrumb pageName="Single Product View" />
    <!--end breadcrumb-->

    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header py-3 bg-transparent">
                    <h5 class="mb-0">View Product</h5>
                </div>
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <form class="row g-3" id="addProductForm">
                            @csrf
                            <div class="col-12">
                                <label for="title" class="form-label">Product title</label>
                                <input type="text" class="form-control" placeholder="Product title" id="title"
                                    name="title" value="{{ $product->title ?? '' }}" disabled>
                            </div>
                            <div class="col-12">
                                <label for="monthlyPrice" class="form-label">Monthly Price</label>
                                <input type="number" class="form-control" placeholder="Monthly Price" id="monthlyPrice"
                                    name="monthly_price" value="{{ $product->monthly_price ?? '' }}" disabled>
                            </div>
                            <div class="col-12">
                                <label for="annualPrice" class="form-label">Annual Price</label>
                                <input type="number" class="form-control" value="{{ $product->annual_price ?? '' }}"
                                    placeholder="Annual Price" id="annualPrice" name="annual_price" disabled>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="discount">Discount</label>
                                <input type="text" class="form-control" value="{{ $product->discount ?? '' }}"
                                    placeholder="Discount" id="discount" name="discount" disabled>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="ram">Ram</label>
                                <input type="number" class="form-control" value="{{ $product->ram ?? '' }}"
                                    placeholder="Ram" id="ram" name="ram" disabled>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="disk">Disk</label>
                                <input type="number" class="form-control" value="{{ $product->disk ?? '' }}"
                                    placeholder="Disk" id="disk" name="disk" disabled>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="operatingSystem">Operating System</label>
                                <select class="form-select" id="operatingSystem" name="operating_system" disabled>
                                    <option value="Windows 11"
                                        {{ $product->operating_system == 'Windows 11' ? 'selected' : null }}>Windows 11
                                    </option>
                                    <option value="Windows 10"
                                        {{ $product->operating_system == 'Windows 10' ? 'selected' : null }}>Windows 10
                                    </option>
                                    <option value="Linux"
                                        {{ $product->operating_system == 'Linux' ? 'selected' : null }}>Linux
                                    </option>
                                    <option value="Mac"
                                        {{ $product->operating_system == 'Mac' ? 'selected' : null }}>Mac
                                    </option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="bandwidth">Bandwidth</label>
                                <input type="number" class="form-control" value="{{ $product->bandwidth ?? '' }}"
                                    placeholder="Bandwidth" id="bandwidth" name="bandwidth" disabled>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="virtualization">Virtualization</label>
                                <input type="text" class="form-control" placeholder="Virtualization"
                                    id="virtualization" name="virtualization"
                                    value="{{ $product->virtualization ?? '' }}" disabled>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="location">Location</label>
                                <select class="form-select" id="location" name="country_id" disabled>
                                    @isset($product->country)
                                        <option value="{{ $product->country->id }}">{{ $product->country->name }}
                                        </option>
                                    @endisset
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="category">Category</label>
                                <select class="form-select" id="category" name="category_id" disabled>
                                    @isset($product->category)
                                        <option value="{{ $product->category->id }}">
                                            {{ $product->category->category_name }}
                                        </option>
                                    @endisset
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="currency">Currency</label>
                                <select class="form-select" id="currency" name="currency" disabled>
                                    <option value="৳" {{ $product->currency == '৳' ? 'selected' : null }}>BDT
                                    </option>
                                    <option value="$" {{ $product->currency == '$' ? 'selected' : null }}>Dollar
                                    </option>
                                </select>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault" name="status" disabled>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Publish on website
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <x-submit btnId="addProductSubmitBtn" btnText="Add Product" disableData="disabled" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end row-->
</x-app-layout>
