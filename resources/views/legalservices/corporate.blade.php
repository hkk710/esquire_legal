

@include('partials.header')
<body>
@include('partials.navbar')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/backgroundimage3.png') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">CORPORATE</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="/">Home <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </span>
                        <span class="mr-2">
                            <a href="/legalservices">Legal Services <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </span>
                        <span>CORPORATE</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ftco-animate mainparagraph">
                    <h2 class="mb-3">CORPORATE</h2>
                    <p class="ftco-animate">
                        If you are exercising diligence for buying or selling a business, attracting third-party investment or financing, entering into a joint venture, expanding across a jurisdiction, or restructuring your business, you need the assistance of wise counsel,
                        who can help you navigate the commercial issues and structure your business appropriately. We are involved in every aspect of the legal life of a business from inception and constitutional documentation, development, and expansion
                        with rounds of equity and debt finance through to strategic exit planning and disposal of assets. We advise businesses of all sizes from start-ups to listed international corporations.
                    </p>
                    <h5 class="ftco-animate">Scope of our services in Corporate Laws:</h5>
                    <ul>
                        <li class="ftco-animate">
                            Mergers and Acquisitions - share and asset sales and purchases
                        </li>
                        <li class="ftco-animate">Shareholders agreements and joint ventures</li>
                        <li class="ftco-animate">Company Restructuring</li>
                        <li class="ftco-animate">Corporate finance</li>
                        <li class="ftco-animate">
                            Corporate governance, including Environmental, Social, and Governance (ESG) issues
                        </li>
                        <li class="ftco-animate">Director's service agreements</li>
                        <li class="ftco-animate">Share plans (including employee share schemes)</li>
                        <li class="ftco-animate">Shareholder disputes</li>
                        <li class="ftco-animate">
                            Equity capital markets, listings on stock exchanges, and share placings
                        </li>
                        <li class="ftco-animate">Company incorporation and start-up advice</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- .section -->
    @include('partials.footer')
@include('partials.scripts')
</body>


