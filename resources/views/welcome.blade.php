<x-home-layout>
    <script>
        $(document).ready(function() {
            const myDefaultAllowList = bootstrap.Tooltip.Default.allowList
            // To allow elements and attributes on elements
            myDefaultAllowList.input = ['type', 'checked']
            myDefaultAllowList.label = ['for']

            $('[data-bs-content]').popover({
                allowList: myDefaultAllowList,
                html: true
            })

            /* or just disable the sanitzer
            $('[data-bs-toggle="popover"]').popover({
              sanitize: false
            })
            */
        })
    </script>
    <!-- BANNER -->
    <section class="top-header sec-bg6 pb-150 bg-colorstyle">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="wrapper">
                        <h1 class="heading mergecolor pb-2" data-aos="fade-up" data-aos-duration="800">
                            {{ $information->title ?? 'High-Performance Dedicated Servers' }}</h1>
                        <h2 class="subheading fw-normal lh-42 text-muted mb-5" data-aos="fade-up"
                            data-aos-duration="1200">{{ $information->discription ?? 'Description Not Found' }}
                        </h2>
                        <a href="hosting" class="btn btn-default-yellow-fill me-2"
                            title="Hosting Order Now">{{ $information->btn1_name ?? 'Order Now' }} <i
                                class="fas fa-cart-plus ps-1 f-15"></i></a>
                        <a href="hosting" class="btn btn-default-grad-purple-fill"
                            title="Hosting Overview">{{ $information->btn2_name ?? 'Hosting Overview' }}</a>
                    </div>
                </div>
                <div class="col-md-1 mb-5"></div>
                <div class="col-md-4">
                    <div class="service-section text-center mt-0 d-none767">
                        <div class ="lazyload">
                            <svg class="svg" x="0" y="0" version="1.1" viewBox="0 0 650 650" width="420"
                                height="420">
                                <style>
                                    .st0,
                                    .st1,
                                    .st2 {
                                        fill: none;
                                        stroke: #ee5586;
                                        stroke-width: 3;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 10
                                    }

                                    .st1,
                                    .st2 {
                                        stroke: gray;
                                        stroke-width: 2
                                    }

                                    .st2 {
                                        stroke: #ee5586
                                    }
                                </style>
                                <path id="svg-concept"
                                    d="M572.7 642.6H67.5a15 15 0 0 1-15-15V269.4a15 15 0 0 1 15-15h505.2a15 15 0 0 1 15 15v358.1a15 15 0 0 1-14.9 15.1h-.1zm17.5-437.9c0 7.8-6.3 14.2-14.2 14.2H69.1c-7.8 0-14.2-6.3-14.2-14.2v-184c0-7.8 6.3-14.2 14.2-14.2H576c7.8 0 14.2 6.3 14.2 14.2v184z"
                                    class="st0" />
                                <path
                                    d="M173.3 35.2h347.9c4.8 0 8.6 4.3 8.6 9.5v46.9h0c0 5.3-3.8 9.5-8.6 9.5h-402c-4.8 0-8.6-4.3-8.6-9.5V44.7c0-5.3 3.8-9.5 8.6-9.5h54.1"
                                    class="st1" />
                                <path
                                    d="M174.3 56.8h243.6c6.3 0 11.3 5.1 11.3 11.3v0c0 6.3-5.1 11.3-11.3 11.3H174.3c-6.3 0-11.3-5.1-11.3-11.3v0c-.1-6.2 5-11.3 11.3-11.3z"
                                    class="st1" />
                                <circle id="svg-concept" cx="407.3" cy="68.2" r="4.3" class="st2" />
                                <circle cx="390.5" cy="68.2" r="4.3" class="st1" />
                                <path
                                    d="M174.3 144.8h243.6c6.3 0 11.3 5.1 11.3 11.3v0c0 6.3-5.1 11.3-11.3 11.3H174.3c-6.3 0-11.3-5.1-11.3-11.3v0c-.1-6.2 5-11.3 11.3-11.3z"
                                    class="st1" />
                                <circle id="svg-concept" cx="407.3" cy="156.1" r="4.3" class="st2" />
                                <circle cx="390.5" cy="156.1" r="4.3" class="st1" />
                                <path
                                    d="M173.3 123.2h347.9c4.8 0 8.6 4.3 8.6 9.5v46.9h0c0 5.3-3.8 9.5-8.6 9.5h-402c-4.8 0-8.6-4.3-8.6-9.5v-46.9c0-5.3 3.8-9.5 8.6-9.5h54.1"
                                    class="st1" />
                                <circle id="svg-concept" cx="482.2" cy="156.1" r="17" class="st0" />
                                <path id="svg-concept"
                                    d="M488.6 156.1c0 3.5-2.8 6.3-6.3 6.3a6.3 6.3 0 0 1-6.3-6.3c0-3.6 2.8-6.3 6.3-6.3 3.4 0 6.3 2.8 6.3 6.3z"
                                    class="st2" />
                                <circle id="svg-concept" cx="482.2" cy="68.1" r="17" class="st0" />
                                <path id="svg-concept"
                                    d="M488.6 68.1c0 3.5-2.8 6.3-6.3 6.3a6.3 6.3 0 0 1-6.3-6.3c0-3.6 2.8-6.3 6.3-6.3 3.4 0 6.3 2.8 6.3 6.3z"
                                    class="st2" />
                                <path
                                    d="M173.3 283h347.9c4.8 0 8.6 4.3 8.6 9.5v46.9h0c0 5.3-3.8 9.5-8.6 9.5h-402c-4.8 0-8.6-4.3-8.6-9.5v-46.9c0-5.3 3.8-9.5 8.6-9.5h54.1"
                                    class="st1" />
                                <path
                                    d="M174.3 304.6h243.6c6.3 0 11.3 5.1 11.3 11.3v0c0 6.3-5.1 11.3-11.3 11.3H174.3c-6.3 0-11.3-5.1-11.3-11.3v0c-.1-6.2 5-11.3 11.3-11.3z"
                                    class="st1" />
                                <circle id="svg-concept" cx="407.3" cy="316" r="4.3" class="st2" />
                                <circle cx="390.5" cy="316" r="4.3" class="st1" />
                                <path
                                    d="M174.3 392.6h243.6c6.3 0 11.3 5.1 11.3 11.3v0c0 6.3-5.1 11.3-11.3 11.3H174.3c-6.3 0-11.3-5.1-11.3-11.3v0c-.1-6.2 5-11.3 11.3-11.3z"
                                    class="st1" />
                                <circle id="svg-concept" cx="407.3" cy="403.9" r="4.3" class="st2" />
                                <circle cx="390.5" cy="403.9" r="4.3" class="st1" />
                                <path
                                    d="M173.3 371h347.9c4.8 0 8.6 4.3 8.6 9.5v46.9h0c0 5.3-3.8 9.5-8.6 9.5h-402c-4.8 0-8.6-4.3-8.6-9.5v-46.9c0-5.3 3.8-9.5 8.6-9.5h54.1"
                                    class="st1" />
                                <circle id="svg-concept" cx="482.2" cy="403.9" r="17" class="st0" />
                                <path id="svg-concept"
                                    d="M488.6 403.9c0 3.5-2.8 6.3-6.3 6.3a6.3 6.3 0 0 1-6.3-6.3c0-3.6 2.8-6.3 6.3-6.3 3.4 0 6.3 2.8 6.3 6.3z"
                                    class="st2" />
                                <circle id="svg-concept" cx="482.2" cy="315.9" r="17" class="st0" />
                                <path id="svg-concept"
                                    d="M488.6 315.9c0 3.5-2.8 6.3-6.3 6.3a6.3 6.3 0 0 1-6.3-6.3c0-3.6 2.8-6.3 6.3-6.3 3.4 0 6.3 2.8 6.3 6.3z"
                                    class="st2" />
                                <path
                                    d="M173.3 460.8h347.9c4.8 0 8.6 4.3 8.6 9.5v46.9h0c0 5.3-3.8 9.5-8.6 9.5h-402c-4.8 0-8.6-4.3-8.6-9.5v-46.9c0-5.3 3.8-9.5 8.6-9.5h54.1"
                                    class="st1" />
                                <path
                                    d="M174.3 482.4h243.6c6.3 0 11.3 5.1 11.3 11.3v0c0 6.3-5.1 11.3-11.3 11.3H174.3c-6.3 0-11.3-5.1-11.3-11.3v0c-.1-6.2 5-11.3 11.3-11.3z"
                                    class="st1" />
                                <circle id="svg-concept" cx="407.3" cy="493.8" r="4.3" class="st2" />
                                <circle cx="390.5" cy="493.8" r="4.3" class="st1" />
                                <path
                                    d="M174.3 570.4h243.6c6.3 0 11.3 5.1 11.3 11.3h0c0 6.3-5.1 11.3-11.3 11.3H174.3c-6.3 0-11.3-5.1-11.3-11.3h0c-.1-6.2 5-11.3 11.3-11.3z"
                                    class="st1" />
                                <circle id="svg-concept" cx="407.3" cy="581.7" r="4.3" class="st2" />
                                <circle cx="390.5" cy="581.7" r="4.3" class="st1" />
                                <path
                                    d="M173.3 548.8h347.9c4.8 0 8.6 4.3 8.6 9.5v46.9h0c0 5.3-3.8 9.5-8.6 9.5h-402c-4.8 0-8.6-4.3-8.6-9.5v-46.9c0-5.3 3.8-9.5 8.6-9.5h54.1"
                                    class="st1" />
                                <circle id="svg-concept" cx="482.2" cy="581.7" r="17" class="st0" />
                                <path id="svg-concept"
                                    d="M488.6 581.7c0 3.5-2.8 6.3-6.3 6.3a6.3 6.3 0 0 1-6.3-6.3c0-3.6 2.8-6.3 6.3-6.3 3.4 0 6.3 2.8 6.3 6.3z"
                                    class="st2" />
                                <circle id="svg-concept" cx="482.2" cy="493.7" r="17" class="st0" />
                                <path id="svg-concept"
                                    d="M488.6 493.7c0 3.5-2.8 6.3-6.3 6.3a6.3 6.3 0 0 1-6.3-6.3c0-3.6 2.8-6.3 6.3-6.3 3.4 0 6.3 2.8 6.3 6.3z"
                                    class="st2" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** PRICING TABLES ***** -->
    <section class="pricing special sec-bg2 bg-colorstyle specialposition">
        <div class="container">
            <div class="sec-up-slider nopadding">
                <div class="row">
                    @isset($products)
                        @foreach ($products as $product)
                            <div class="col-md-12 col-lg-4">
                                <div class="wrapper first">
                                    <div class="top-content bg-seccolorstyle topradius">
                                        <div class="lazyload">
                                            <svg class="svg mb-3" viewBox="0 0 32 32">
                                                <path id="svg-ico"
                                                    d="M21.294 1.969h-.232c-5.325.087-10.656 3.756-10.656 10.688 0 .238.194.425.425.425.238 0 .425-.194.425-.425 0-6.719 5.125-9.8 9.912-9.838 5.387.038 9.762 4.438 9.762 9.838 0 5.425-4.412 9.837-9.838 9.837H7.767c-3.725 0-6.756-3.031-6.756-6.756s3.031-6.756 6.756-6.756c.238 0 .425-.194.425-.425s-.194-.425-.425-.425c-4.2-.006-7.612 3.412-7.612 7.606s3.413 7.613 7.612 7.613h13.331c5.894 0 10.694-4.794 10.694-10.694 0-5.825-4.694-10.581-10.5-10.688z" />
                                                <path fill="#5e686c"
                                                    d="M24.413 28.15h-6.781c-.156-.6-.631-1.075-1.231-1.231v-2.194c0-.238-.194-.425-.425-.425-.238 0-.425.194-.425.425v2.194c-.6.156-1.075.631-1.231 1.231H7.539c-.237 0-.425.194-.425.425s.194.425.425.425h6.781c.188.738.863 1.281 1.656 1.281s1.469-.544 1.656-1.281h6.781c.238 0 .425-.194.425-.425s-.188-.425-.425-.425zm-8.438 1.281c-.469 0-.856-.381-.856-.856 0-.469.381-.856.856-.856s.856.381.856.856-.387.856-.856.856zM21.238 6.931c.238 0 .425-.194.425-.431-.006-.237-.219-.444-.431-.425-3.381.044-6.375 2.719-6.675 6.044l.006.075c.006.156.012.313.012.463 0 .238.194.425.425.425.238 0 .425-.194.425-.425 0-.162-.006-.331-.012-.525l-.012-.019c.269-2.819 2.888-5.144 5.838-5.181z" />
                                            </svg>
                                        </div>
                                        <div class="title">{{ $product->title }}</div>
                                        @isset($product->category)
                                            <div class="fromer seccolor"><b>Category:
                                                    {{ $product->category->category_name }}</b></div>
                                        @endisset
                                        <div class="fromer seccolor">Starting at:
                                            {{ $product->discount ? $product->discount : '' }}</div>
                                        <div class="price seccolor">
                                            <sup>{{ $product->currency }}</sup>{{ $product->monthly_price }} <span
                                                class="period">/month</span>
                                        </div>
                                        <a href="{{ url("review/$product->slug") }}" class="btn btn-default-yellow-fill"
                                            title="Hosting Overview">Order Now</a>
                                    </div>
                                    <ul class="list-info bg-purple">
                                        <li><i class="icon-drives"></i> <span class="f-14">Ram</span><br>
                                            <span>{{ $product->ram }}GB</span>
                                        </li>
                                        <li><i class="icon-drives"></i> <span class="f-14">DISK</span><br>
                                            <span>{{ $product->disk }}GB SSD</span>
                                        </li>
                                        <li><i class="icon-speed"></i> <span class="f-14">DATA</span><br>
                                            <span>{{ $product->bandwidth }}TB Bandwidth</span>
                                        </li>
                                        <li><i class="icon-emailopen"></i> <span class="f-14">Operating
                                                System</span><br> <span>{{ $product->operating_system }}</span></li>
                                        <li><i class="icon-domains"></i> <span class="f-14">Location</span><br>
                                            <span>{{ $product->location }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>
    </section>
    <!-- ***** MAP ***** -->
    <x-map />
    <!-- ***** FEATURES ***** -->
    <svg class="division-ontop bg-white d-none" viewBox="0 0 1440 150">
        <path fill="#fdd700" fill-opacity="1"
            d="M0,96L120,85.3C240,75,480,53,720,53.3C960,53,1200,75,1320,85.3L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
        </path>
    </svg>
    <section class="services sec-normal sec-bg4">
        <div class="container">
            <div class="service-wrap">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="section-heading">Why Choose Antler?</h2>
                        <p class="section-subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt.</p>
                    </div>
                    <div class="col-md-12 col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                        <div class="service-section bg-colorstyle">
                            <div class="plans badge feat bg-purple">Premium</div>
                            <div class="lazyload">
                                <svg class="svg" viewBox="0 0 32 32" width="60" height="60">
                                    <path fill="#5e686c"
                                        d="M12 20.76a1.72 1.72 0 1 1 0-3.43 1.72 1.72 0 0 1 0 3.43zm0-2.57c-.48 0-.86.38-.86.86s.38.86.85.86a.86.86 0 0 0 0-1.72zm8.54 2.57a1.71 1.71 0 1 1 0-3.43 1.71 1.71 0 0 1 0 3.43zm0-2.57c-.47 0-.85.38-.85.86s.38.86.85.86a.86.86 0 0 0 0-1.72z" />
                                    <path id="svg-ico" fill="#ee5586"
                                        d="M18.5 28.79a2.15 2.15 0 1 1 0-4.3 2.15 2.15 0 0 1 0 4.3zm0-3.43a1.29 1.29 0 0 0 0 2.58 1.29 1.29 0 0 0 0-2.58z" />
                                    <path fill="#5e686c"
                                        d="M24.83 15.38a17.47 17.47 0 0 1-12.75-5.37c-.16-.2-.26-.18-.37-.02L7.1 15.2a.43.43 0 0 1-.6.04.43.43 0 0 1-.04-.6l4.57-5.2c.37-.5 1.29-.53 1.7.02.03.03 4.8 5.45 13 5.03.26-.01.44.17.45.4s-.17.44-.4.46l-.96.02zM16.37 31.8c-6.05 0-10.44-4.55-10.44-10.83a.43.43 0 0 1 .86 0c0 5.78 4.03 9.98 9.58 9.98s9.58-4.05 9.58-9.63a.43.43 0 0 1 .87 0A10.25 10.25 0 0 1 16.37 31.8z" />
                                    <path id="svg-ico" fill="#ee5586"
                                        d="M28.79 21.72h-1.71c-.93 0-1.72-.79-1.72-1.71v-6c0-.93.8-1.72 1.72-1.72h1.7c.94 0 1.72.8 1.72 1.72v6c0 .93-.79 1.7-1.71 1.7zm-1.71-8.57c-.45 0-.86.4-.86.86v6c0 .45.4.85.85.85h1.72c.45 0 .85-.4.85-.85v-6c0-.45-.4-.86-.85-.86h-1.72z" />
                                    <path id="svg-ico" fill="#ee5586"
                                        d="M20.3 27.06a.43.43 0 0 1 0-.86h1.6c.13-.01 4.05-.35 4.05-5.13a.43.43 0 0 1 .86 0c0 5.6-4.84 5.98-4.89 5.99h-1.61zM5.5 21.75H3.77c-.93 0-1.72-.79-1.72-1.73V14c0-.93.79-1.73 1.73-1.73h.51A12.17 12.17 0 0 1 16.46.2c6.7 0 12.15 5.61 12.15 12.5a.43.43 0 0 1-.87 0c0-6.42-5.06-11.65-11.29-11.65-6.2 0-11.26 5.03-11.3 11.23h.35c.93 0 1.73.79 1.73 1.72v6.04c-.01.93-.8 1.72-1.73 1.72zm-1.73-8.63a.9.9 0 0 0-.86.87v6.03c0 .45.41.87.86.87H5.5a.9.9 0 0 0 .87-.87V14a.9.9 0 0 0-.87-.87H3.77z" />
                                </svg>
                            </div>
                            <div class="title mergecolor">Support 24x7x365</div>
                            <p class="subtitle seccolor">
                                Excepteur sint occaecat cupidatat non proident voluptate
                            </p>
                            <a href="#" class="btn btn-default-yellow-fill" title="Read More">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4" data-aos="fade-up" data-aos-duration="800">
                        <div class="service-section bg-colorstyle">
                            <div class="plans badge feat bg-purple">Control Panel</div>
                            <div class="lazyload">
                                <svg class="svg" viewBox="0 0 32 32" width="60" height="60">
                                    <path id="svg-ico" fill="#ee5586"
                                        d="M11.41 13.74H5.47a.42.42 0 0 0-.42.43v10.17c0 .24.19.43.42.43h5.94c.24 0 .43-.19.43-.43V14.17a.42.42 0 0 0-.43-.43zM11 23.92H5.9v-9.33h5.09v9.33z" />
                                    <path fill="#5e686b"
                                        d="M31.72 10.2V4.03a.42.42 0 0 0-.43-.42H.71a.42.42 0 0 0-.42.42V28.5c0 .24.19.43.42.43H31.3c.23 0 .42-.19.42-.43V10.2zM1.13 4.46h29.75v5.27H1.13V4.47zm0 23.62v-17.5h29.75v17.5H1.13z" />
                                    <path fill="#5e686b"
                                        d="M5.19 5.3a1.7 1.7 0 1 0 0 3.4 1.7 1.7 0 0 0 0-3.4zm0 2.54a.85.85 0 0 1-.85-.85.85.85 0 0 1 1.7.01c0 .47-.38.84-.85.84zM10 5.3a1.7 1.7 0 1 0 0 3.4 1.7 1.7 0 0 0 0-3.4zm0 2.54a.85.85 0 1 1 0-1.7.85.85 0 0 1 0 1.7zm4.8-2.54a1.7 1.7 0 1 0 0 3.4 1.7 1.7 0 0 0 0-3.4zm0 2.54a.85.85 0 1 1 0-1.7.85.85 0 0 1 0 1.7z" />
                                    <path id="svg-ico" fill="#ee5586"
                                        d="M26.18 17.2H16.01c-.24 0-.43.19-.43.42s.19.43.43.43h10.17c.24 0 .43-.19.43-.42 0-.24-.2-.43-.43-.43zm0 3.29H16.01a.43.43 0 0 0 0 .85h10.17a.42.42 0 1 0 0-.85zm-2.47 3.29h-7.64c-.23 0-.42.19-.42.43s.19.42.42.42h7.64c.23 0 .42-.19.42-.42a.42.42 0 0 0-.42-.43z" />
                                </svg>
                            </div>
                            <div class="title mergecolor">Free WHM &amp; cPanel</div>
                            <p class="subtitle seccolor">
                                Excepteur sint occaecat cupidatat non proident dolor
                            </p>
                            <a href="#" class="btn btn-default-yellow-fill" title="Read More">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4" data-aos="fade-up" data-aos-duration="900">
                        <div class="service-section bg-colorstyle">
                            <div class="lazyload">
                                <svg class="svg" viewBox="0 0 32 32" width="60" height="60">
                                    <path fill="#5e686c"
                                        d="M5.76 17.57a.42.42 0 0 1-.42-.41v-.4l-.71-.7-2.84-.01a.43.43 0 0 1-.38-.26l-.84-2.05a.43.43 0 0 1 .08-.45l1.97-2.08v-.98L.65 8.2a.41.41 0 0 1-.1-.46l.86-2.04a.42.42 0 0 1 .37-.25l2.86-.08.7-.7.03-2.83c0-.17.1-.32.26-.39L7.66.62a.43.43 0 0 1 .45.08l2.08 1.98h1l2-1.99c.12-.12.3-.15.46-.08l2.04.85c.15.06.25.2.25.37l.08 2.86.7.7 2.83.02c.17 0 .32.1.39.26l.84 2.05c.06.15.03.33-.09.45l-1.97 2.07v.87a.42.42 0 0 1-.84 0v-1.04c0-.1.04-.21.12-.29l1.9-2-.63-1.53-2.73-.02a.4.4 0 0 1-.3-.12l-.93-.94a.45.45 0 0 1-.12-.29l-.07-2.75-1.53-.64-1.94 1.91a.52.52 0 0 1-.3.12h-1.33a.44.44 0 0 1-.29-.12l-2-1.9-1.53.64-.02 2.72a.4.4 0 0 1-.13.3l-.94.94a.43.43 0 0 1-.29.12l-2.75.07-.64 1.53 1.91 1.94c.08.08.12.19.12.3v1.32c0 .1-.05.22-.12.29l-1.9 2 .63 1.54 2.73.02a.4.4 0 0 1 .3.12l.94.95c.07.07.12.18.12.28l.02.56c0 .23-.18.42-.42.43z" />
                                    <path fill="#5e686c"
                                        d="M10.67 14.51a3.76 3.76 0 0 1-3.48-5.24 3.78 3.78 0 1 1 3.48 5.24zm.01-6.72a2.94 2.94 0 1 0-.01 5.88 2.94 2.94 0 0 0 .01-5.88zm4.42 13.44a.42.42 0 0 1-.42-.42l-.01-.45v-.08a6.73 6.73 0 0 1 6.55-5.94c.22 0 .42.18.42.42a.4.4 0 0 1-.4.42c-2.9.04-5.48 2.32-5.74 5.1l.01.01.01.52c0 .23-.19.42-.42.42z" />
                                    <path id="svg-ico" fill="#ee5586"
                                        d="M21.09 31.31H7.99a7.48 7.48 0 0 1 0-14.95.42.42 0 0 1 0 .84 6.64 6.64 0 0 0 0 13.28h13.1a9.67 9.67 0 0 0 .07-19.33c-4.7.03-9.73 3.06-9.73 9.66a.42.42 0 0 1-.84 0c0-6.81 5.24-10.42 10.47-10.5h.22a10.51 10.51 0 0 1-.2 21z" />
                                </svg>
                            </div>
                            <div class="title mergecolor">Perfomance Optimized</div>
                            <p class="subtitle seccolor">
                                Excepteur sint occaecat cupidatat non proident voluptate
                            </p>
                            <a href="#" class="btn btn-default-yellow-fill" title="Read More">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** CASE STUDY ***** -->
    <section class="casestudy sec-bg2 bg-colorstyle pt-150">
        <div class="container">
            <div class="sec-main sec-up bg-white mb-0 nomargin p-80 br-12">
                <div class="lazyload">
                    <svg class="svg img-casestudy d-none767" width="450" height="400" x="0" y="0"
                        style="enable-background:new 0 0 543.5 398.4" version="1.1" viewBox="0 0 544 398">
                        <style>
                            .ranking0 {
                                fill: none;
                                stroke: gray;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-miterlimit: 10
                            }

                            .ranking1 {
                                stroke: #ee5586;
                                stroke-width: 2
                            }

                            .ranking1,
                            .ranking2,
                            .ranking3 {
                                fill: none;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-miterlimit: 10
                            }

                            .ranking2 {
                                stroke: gray;
                                stroke-dasharray: 5
                            }

                            .ranking3 {
                                stroke: #ee5586;
                                stroke-width: 3
                            }
                        </style>
                        <path d="m456 286 61 18-244 90-244-90 61-18" class="ranking0" />
                        <path id="svg-concept" d="m320 188 223 67-270 98L3 255l169-51" class="ranking1" />
                        <path d="M373 255h164m-525 0h185m76 95v-67" class="ranking2" />
                        <g>
                            <path id="svg-concept"
                                d="M263 113V31l-45-16-44 16v215l44 17 9-4M174 31l44 17m0 0 45-17m-45 17v215"
                                class="ranking3" />
                            <animate attributeName="opacity" begin="0s" dur="2s" repeatCount="indefinite"
                                values="0;1;0" />
                        </g>
                        <path d="M284 286v-63l45-16 44 16v63l-44 16-45-16z" class="ranking0" />
                        <path d="m329 207-45 16 45 16" class="ranking0" />
                        <path d="m274 282-45-15V127l45-16 44 16v84m11 28 44-16m-44 16v63M229 127l45 16m44-16-44 16"
                            class="ranking0" />
                        <path d="M274 143v139l10-5" class="ranking0" />
                    </svg>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-9">
                        <div class="slider-container slider-filter">
                            <div class="slider-wrap">
                                <div class="swiper-container main-slider" data-autoplay="4000" data-touch="1"
                                    data-mouse="0" data-slides-per-view="responsive" data-loop="1"
                                    data-speed="1200" data-mode="horizontal" data-xs-slides="1" data-sm-slides="1"
                                    data-md-slides="1" data-lg-slides="1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <h3 class="author">Everth Group</h3>
                                            <div class="content-info text-muted">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                    accusantium doloremque laudantium, totamer rem aperiam, eaque ipsa
                                                    quae ab illo.</p>
                                                <div class="mb-3"> Michael Jones - Executive Director</div>
                                                <a href="./assets/casestudy/casestudy-everthgroup.pdf"
                                                    class="btn btn-default-yellow-fill mb-2" title="Case Study">Case
                                                    Study Download</a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <h3 class="author">Growtop Company</h3>
                                            <div class="content-info text-muted">
                                                <p>But I must explain to you how all this mistaken idea of denouncing
                                                    pleasure and praising pain was born and I will give you a complete.
                                                </p>
                                                <div class="mb-3"> Matt Radford - President &amp; Managing Director"
                                                </div>
                                                <a href="./assets/casestudy/casestudy-growtop.pdf"
                                                    class="btn btn-default-yellow-fill mb-2" title="Case Study">Case
                                                    Study Download</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pagination vertical-mode pagination-index"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** HELP ***** -->
    <x-help />
    <!-- ***** UPLOADED FOOTER FROM FOOTER.HTML ***** -->

</x-home-layout>
