

@include('partials.header')
<body>
@include('partials.navbar',['page' => 'legalservices'])
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/backgroundimage3.png') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">ESTATE PLANNING</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span>
                        <span class="mr-2"><a href="/legalservices">Legal Services <i class="ion-ios-arrow-forward"></i></a></span>
                        <span>Estate Planning<i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ftco-animate mainparagraph">
                    <h2 class="mb-3 ftco-animate">ESTATE PLANNING</h2>
                    <p class="ftco-animate">
                        We work with individuals and their families, entrepreneurs, trustees and beneficiaries, family businesses, etc. and assist our clients in achieving broad objectives ranging from succession planning, asset protection, philanthropy, and maintenance of dependents
                        specific to family and business needs. We recognise the importance of foresight and try to create solutions that last generations. Being a full-service law firm, we provide end-to-end solutions with assistance from our other practice
                        groups such as corporate, tax, and dispute resolution.
                    </p>
                    <ul>
                        <li class="ftco-animate">
                            Estate and Succession Planning, which includes advising on appropriate structures, will-writing, and Trust creation
                        </li>
                        <li class="ftco-animate">Business Succession Planning</li>
                        <li class="ftco-animate">
                            Restructuring Family Partnerships, Investment companies, and companies engaged in business activities/ corporate houses
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- .section -->
    @include('partials.footer')
@include('partials.scripts')
</body>

