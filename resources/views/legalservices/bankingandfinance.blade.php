
@include('partials.header')
<body>
@include('partials.navbar',['page' => 'legalservices'])
   
   <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/backgroundimage3.png') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">BANKING AND FINANCE</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="/legalservices">Legal Services <i class="ion-ios-arrow-forward"></i></a></span> <span>Banking and Finance</span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ftco-animate">
                    <h2 class="mb-3 ftco-animate">BANKING AND FINANCE</h2>
                    <p class="ftco-animate">Esquire Legal practices in Legal Advisory support including Advocacy support for Banks, Promoters, and Investors on an array of transactions including Domestic loans, External Commercial Borrowing, Acquisition finance, Project finance,
                        Working capital finance, Structured finance, and re-financing transactions. We Negotiate and do advise on distressed debt situations and cater to various stakeholders in assessing the risks in such transactions.
                    </p>
                </div>
            </div>
        </div>
    </section>

@include('partials.footer')
@include('partials.scripts')
</body>

