@include('partials.header')
<body>
@include('partials.navbar')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/backgroundimage3.png') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">FOUNDER</h1>
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span>
                    <span class="mr-2"><a href="/team">Team <i class="ion-ios-arrow-forward"></i></a></span>
                    <span>Founder<i class="ion-ios-arrow-forward"></i></span>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container-fluid px-md-5">
    <div class="row">
                <div class="col-lg-3 col-sm-12">
                    <div class="block-2 ftco-animate">
                        <div class="">
                            <div class="front" style="background-image: url('{{ asset('images/team/founder2.jpg') }}');">
                                <div class="box">
                                    <h2>SREERAJ MURALIDHARAN</h2>
                                    <p>BBM, FCS, LLB</p>
                                </div>
                            </div>
                            <div class="back" style="background-image: url('{{ asset('images/team/founder2.jpg') }}'); background-size:cover;background-position:center;background-repeat:no-repeat;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-12">
                    <div class=" ftco-animate">
                        <h2>SREERAJ MURALIDHARAN</h2>
                        <p>BBM, FCS, LLB</p>
                        <p>Sreeraj Muralidharan is a fellow member of the Institute of Company Secretaries of India and an Advocate by profession.</p>
                        <p>With an extensive experience of 14 years in managing projects involving teams of specialist lawyers and other professionals in complex transactions on tight time scales. Sreeraj provides commercial advice to clients in relation to shareholder and financing issues and generally on corporate governance matters and provides legal opinions.</p>
                        <p>He specialises in Corporate and Commercial Laws, especially in mergers and acquisitions (M&A), corporate venture capital for start-ups and high-growth businesses, restructuring, buying and selling companies or their assets, Stock Options, etc. He handles matters in lower courts, High courts, and Tribunals including NCLT/NCLAT and other Appellate Tribunals. He advises a wide variety of clients ranging from high-net-worth individuals to large corporate groups. He has led diverse legal assignments in various laws for over a decade with several Multi-National Corporations as his clients.</p>
                        <p>His focus areas of practice are Company Law, Contract laws, Business laws, Tax Appeals, Insolvency and Bankruptcy (IBC), IPR, litigation & White-collar crimes.</p>
                    </div>
                </div>
            </div>
    </div>
</section>
@include('partials.footer')
@include('partials.scripts')
</body>