<x-home-layout> <!-- ***** KNOWLEDGEBASE ***** -->
    @include('users.header.header')
    <section class="config cd-main-content pb-80 blog sec-bg2 motpath notoppadding bg-seccolorstyle">
        <div class="container">
            <form action="{{ url('/checkout') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12 col-lg-8 pt-80">
                        <div id="sidebar_content" class="wrap-blog">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="wrapper targetDiv sec-grad-white-to-green noshadow bg-colorstyle">
                                        <h1 class="mergecolor">Review & Checkout</h1>
                                        <p class="mergecolor">{{ $product->title ?? '' }}</p>
                                        <div class="row">
                                            <div class="col-md-12 pt-4">
                                                <div class="table-responsive-lg">
                                                    <table class="table compare">
                                                        <thead>
                                                            <tr class="seccolor">
                                                                <th>Product/Options</th>
                                                                <th>Qty</th>
                                                                <th>Price/Cycle</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            {{-- <tr class="seccolor">
                                                            <td>
                                                                <div class="badge bg-purple">Save 15%</div> Business VPS
                                                                Linux
                                                            </td>
                                                            <td><input type="number" value="1" aria-label="Number"
                                                                    class="form-control"></td>
                                                            <td><span class="ltgh">$12.30</span> <b
                                                                    class="c-green">$9.99</b></td>
                                                            <td>
                                                                <a href="configurator" class="me-2 c-pink"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Edit your product"><i
                                                                        class="fas fa-cog"></i></a>
                                                                <a href="#" aria-label="delete"
                                                                    data-bs-toggle="modal" data-bs-target="#myModal"><i
                                                                        class="far fa-trash-alt c-grey seccolor"></i></a>
                                                            </td>
                                                        </tr> --}}
                                                            <tr class="seccolor">
                                                                <td>{{ $product->title ?? '' }}</td>
                                                                <input type="hidden" value="{{ $product->id }}"
                                                                    name="productId">
                                                                <td><input id="quantityNumber" type="number"
                                                                        value="1" aria-label="Number"
                                                                        class="form-control" name="quantityNumber"></td>
                                                                <td>{{ $product->currency ?? '' }}
                                                                    <span class=""
                                                                        id="priceAmount">{{ $product->monthly_price ?? '' }}</span>
                                                                    <input type="hidden"
                                                                        value={{ $product->monthly_price }}
                                                                        id="getAmmount" />
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-12 pt-4">
                                                <div class="cd-filter-block">
                                                    <div class="radio-group radios-filter cd-filter-content list w-100">
                                                        <div class="table-responsive-sm">
                                                            <table class="table compare min">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="badge bg-grey me-1">Promo</div>
                                                                            <span class="seccolor">Promocode</span>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" name="promocode"
                                                                                aria-label="Promocode"
                                                                                placeholder="Put your promocode here">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="badge bg-grey me-1">Legal</div>
                                                                            <a class="golink " href="legal"
                                                                                target="_blank">Terms (GDPR)</a>
                                                                        </td>
                                                                        <td>
                                                                            <label
                                                                                class="label-form float-end mb-0"></label>
                                                                            <div class="my-3">
                                                                                <input class="filter" value="11"
                                                                                    type="checkbox"
                                                                                    aria-label="Checkbox"
                                                                                    id="checkbox1">
                                                                                <label class="checkbox-label seccolor"
                                                                                    for="checkbox1">Agree with terms and
                                                                                    conditions?</label>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- sidebar -->
                    <div class="col-md-12 col-lg-4">
                        <aside id="sidebar" class="mt-80 sidebar sec-bg1 bg-colorstyle noshadow">
                            <div class="ordersummary mt-0 mb-5">
                                <div class="mergecolor h4">Order Summary</div>
                                <div class="table-responsive-lg">
                                    <table class="table">
                                        <tbody>
                                            <tr class="seccolor">
                                                <td>
                                                    <div class="title-table">Subtotal</div>
                                                </td>
                                                <input id="productSlug" type="hidden" value="{{ $product->slug }}">
                                                <td>{{ $product->currency }} <span
                                                        id="priceAmount">{{ $product->monthly_price }}</span></td>
                                            </tr>

                                            <tr class="seccolor">
                                                <td>
                                                    <div class="title-table">Total Amount</div>
                                                </td>
                                                <td><b>{{ $product->currency }} </b><b
                                                        id="priceAmount">{{ $product->monthly_price }}</b></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <button type="submit" id="checkoutRequest"
                                class="btn btn-default-yellow-fill mb-3">Checkout <i
                                    class="fas fa-arrow-alt-circle-right"></i></button>
                            <a href="index" class="btn btn-default-fill mb-3">Continue Shopping</a>
                        </aside>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-home-layout>
