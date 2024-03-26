<!-- ***** FOOTER ****** -->
<footer class="footer">
    <img class="logo-bg logo-footer" src="./assets/img/symbol.svg" alt="logo" width="600" height="290">
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="heading">Hosting</div>
                    <ul class="footer-menu">
                        <li class="menu-item"><a href="hosting" title="Shared Hosting">Shared Hosting</a></li>
                        <li class="menu-item"><a href="dedicated" title="Dedicated Server">Dedicated Server</a></li>
                        <li class="menu-item"><a href="vps" title="Cloud Virtual (VPS)">Cloud Virtual (VPS)</a></li>
                        <li class="menu-item"><a href="domains" title="Domain Names">Domain Names</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="heading">Support</div>
                    <ul class="footer-menu">
                        <li class="menu-item"><a href="login" title="myAntler">myAntler</a></li>
                        <li class="menu-item"><a href="knowledgebase-list" title="Knowledge Base">Knowledge Base</a>
                        </li>
                        <li class="menu-item"><a href="contact" title="Contact Us">Contact Us</a></li>
                        <li class="menu-item"><a href="faq" title="FAQ">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="heading">Company</div>
                    <ul class="footer-menu">
                        <li class="menu-item"><a href="about" title="About Us">About Us</a> </li>
                        <li class="menu-item"><a href="elements" title="Features">Features</a></li>
                        <li class="menu-item"><a href="blog-details" title="Blog">Blog</a></li>
                        <li class="menu-item"><a href="legal" title="Legal">Legal</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="svg logo-footer d-block" src="./assets/img/logo.svg" alt="logo" width="200"
                        height="50">
                    <img class="svg logo-footer d-none" src="./assets/img/logo-light.svg" alt="logo" width="200"
                        height="50">
                    <div class="copyright">{{ $information->wb_site_short_about ?? 'No About Found' }}</div>
                    <div class="soc-icons">
                        @isset($information->facebook)
                            <a href="{{ $information->facebook }}" title="Facebook"><i
                                    class="fab fa-facebook-f withborder noshadow"></i></a>
                        @endisset
                        @isset($information->youtube)
                            <a href="{{ $information->youtube }}" title="youtube"><i
                                    class="fab fa-youtube withborder noshadow"></i></a>
                        @endisset
                        @isset($information->twiter)
                            <a href="{{ $information->twiter }}" title="Twitter"><i
                                    class="fab fa-x-twitter withborder noshadow"></i></a>
                        @endisset
                        @isset($information->instagram)
                            <a href="{{ $information->instagram }}" title="Twitter"><i
                                    class="fab fa-x-twitter withborder noshadow"></i></a>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="subcribe news">
        <div class="container">
            <div class="row">
                <form action="{{ route('subscribe.store') }}" method="POST" class="w-100">
                    @csrf
                    <div class="col-md-6 offset-md-3">
                        <div class="general-input">
                            <input class="fill-input" type="email" name="email"
                                placeholder="Input you Email for updates" id="subscribe">
                            <input type="submit" value="SUBSCRIBE"
                                class="btn btn-default-yellow-fill initial-transform">
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-3 text-center pt-4">
                        <p>Subscribe our newsletter to receive news and updates</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="footer-menu">
                        <li class="menu-item by">VPSHab<span class="c-pink">♥</span> Develop by
                            <a href="http://inebur.com/"
                                target="_blank">{{ $information->developer_name ?? 'Not found Developer' }}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="payment-list">
                        <li>
                            <p>Payments We Accept</p>
                        </li>
                        <li><i class="fab fa-cc-paypal"></i></li>
                        <li><i class="fab fa-cc-visa"></i></li>
                        <li><i class="fab fa-cc-mastercard"></i></li>
                        <li><i class="fab fa-cc-apple-pay"></i></li>
                        <li><i class="fab fa-cc-discover"></i></li>
                        <li><i class="fab fa-cc-amazon-pay"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/65b3d3400ff6374032c540de/1hl372ds6';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->




</footer>
<script>
    $(document.body)
        .on("gdpr:show", function() {
            console.log("Cookie dialog is shown");
        })
        .on("gdpr:accept", function() {
            var preferences = $.gdprcookie.preference();
            console.log("Preferences saved:", preferences);
        })
        .on("gdpr:advanced", function() {
            console.log("Advanced button was pressed");
        });
</script>
