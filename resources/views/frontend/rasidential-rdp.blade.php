<x-home-layout>
    <!-- ***** BANNER ***** -->
    <div class="top-header overlay-video">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="wrapper">
                        <h1 class="heading">Residential RDP</h1>

                        <p class="subheading h4">{{ $pageInformation->pageSubTitle ?? '' }}</p>
                        <a href="#features" class="golink gocheck"> Features </a>
                        <a href="#custom" class="golink gocheck"> Custom VPS </a>
                        <a href="#specs" class="golink gocheck"> Specs </a>
                    </div>
                </div>
            </div>
            <div class="banner-video">
                <div class="cover-wrapper">
                    <div class="lazyload">
                        <video class="cover-video" autoplay loop muted>
                            @isset($pageInformation->videoUrl)
                                <source src="{{ asset("$pageInformation->videoUrl") }}" type="video/mp4">
                            @endisset
                            <track src="captions_en.vtt" kind="captions" srclang="en" label="english_captions">
                            <track src="captions_es.vtt" kind="captions" srclang="pt" label="portuguese_captions">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** PRICING TABLES ***** -->
    <section class="pricing special sec-bg2 bg-colorstyle specialposition mt-5">
        <div class="container">
            <div class="sec-up-slider nopadding">
                <div class="row">
                    @isset($category)

                        @foreach ($category->product as $product)
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

                                        <div class="fromer seccolor"><b>Category:
                                                {{ $category->category_name }}</b></div>

                                        <div class="fromer seccolor">Starting at:
                                            {{ $product->discount ? $product->discount : '' }}</div>
                                        <div class="price seccolor">
                                            <sup>{{ $product->currency }}</sup>{{ $product->monthly_price }}
                                            <span class="period">/month</span>
                                        </div>
                                        <a href="{{ url("checkout/$product->slug") }}" class="btn btn-default-yellow-fill"
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
                                                System</span><br> <span>{{ $product->operating_system }}</span>
                                        </li>
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


    <!-- ***** SPECIFICATIONS ***** -->
    <section id="specs" class="sec-normal sec-bg1 bg-colorstyle pb-80">
        <div class="best-plans pricing">
            <div class="container">
                <div class="randomline">
                    <div class="bigline"></div>
                    <div class="smallline"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="section-heading mergecolor">VPS Server Technical Specifications</h2>
                        <p class="section-subheading mergecolor">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                    <div class="col-sm-12">
                        <div class="table-responsive-lg">
                            <table class="table sample mt-5">
                                <thead>
                                    <tr class="seccolor">
                                        <td scope="col" class="title">Features</td>
                                        <td scope="col" class="title">Performance</td>
                                        <td scope="col" class="title">Boosters</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="title-table" data-bs-toggle="popover" data-bs-trigger="hover"
                                                data-bs-placement="top"
                                                data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                <span class="fas fa-check-circle me-2"></span>
                                                CentOS 6/7, Ubuntu 16v
                                            </div>
                                        </td>
                                        <td><span class="fas fa-check-circle me-2"></span> SSD Storage</td>
                                        <td><span class="fas fa-check-circle me-2"></span> cPanel</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="title-table" data-bs-toggle="popover" data-bs-trigger="hover"
                                                data-bs-placement="top"
                                                data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                <span class="fas fa-check-circle me-2"></span> Fedora 23, Debian 8
                                            </div>
                                        </td>
                                        <td><span class="fas fa-check-circle me-2"></span> Tier IV Data Center</td>
                                        <td><span class="fas fa-check-circle me-2"></span> Plesk Onyx</td>
                                    </tr>
                                    <tr>
                                        <td class="title-table"><span class="fas fa-check-circle me-2"></span> Private
                                            Network</td>
                                        <td><span class="fas fa-check-circle me-2"></span> Juniper Networks</td>
                                        <td><span class="fas fa-check-circle me-2"></span> WHMCS</td>
                                    </tr>
                                    <tr>
                                        <td class="title-table"><span class="fas fa-check-circle me-3"></span> Quick
                                            VNC access</td>
                                        <td><span class="fas fa-check-circle me-2"></span> DDos mitigation</td>
                                        <td><span class="fas fa-check-circle me-2"></span> SAN storage</td>
                                    </tr>
                                    <tr>
                                        <td class="border-0"><a href="#"
                                                class="btn btn-default-grad-purple-fill">All Specs</a></td>
                                        <td class="border-0"><a href="#"
                                                class="btn btn-default-grad-purple-fill">All Specs</a></td>
                                        <td class="border-0"><a href="#"
                                                class="btn btn-default-grad-purple-fill">All Specs</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** HELP ***** -->
    <section class="help pt-4 notoppadding pb-80 bg-colorstyle">
        <div class="container">
            <div class="service-wrap">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="help-container bg-seccolorstyle noshadow">
                            <div class="plans badge feat left bg-grey"><i class="fas fa-long-arrow-alt-left"></i>
                            </div>
                            <a href="hosting" class="help-item">
                                <div class="img">
                                    <img class="svg ico" src="./assets/fonts/svg/cloudfiber.svg" alt="">
                                </div>
                                <div class="inform">
                                    <div class="title mergecolor">Go to Residential VPS</div>
                                    <div class="description seccolor">Need similar power but a simpler solution?</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="help-container bg-seccolorstyle noshadow">
                            <div class="plans badge feat bg-grey"><i class="fas fa-long-arrow-alt-right"></i></div>
                            <a href="dedicated" class="help-item">
                                <div class="img">
                                    <img class="svg ico" src="./assets/fonts/svg/dedicated.svg" alt="">
                                </div>
                                <div class="inform">
                                    <div class="title mergecolor">Go to Dedicated Server</div>
                                    <div class="description seccolor">Need more power and resources?</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <x-slot:scripts>
        <script defer type="text/javascript" src="{{ asset('assets/js/nouislider.min.js') }}"></script>
    </x-slot>
</x-home-layout>
