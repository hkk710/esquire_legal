@include('partials.header')
<body>
@include('partials.navbar')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/backgroundimage3.png') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">ADVOCATE</h1>
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span>
                    <span class="mr-2"><a href="/team">Team <i class="ion-ios-arrow-forward"></i></a></span>
                    <span>Advocates<i class="ion-ios-arrow-forward"></i></span>
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
                            <div class="front" style="background-image: url('{{ asset('images/team/adv1.jpg') }}');">
                                <div class="box">
                                    <h2>PANKAJ SHARMA</h2>
                                    <p>B.A LLB (Hons.)</p>
                                </div>
                            </div>
                            <div class="back" style="background-image: url('{{ asset('images/team/adv1.jpg') }}'); background-size:cover;background-position:center;background-repeat:no-repeat;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-12">
                    <div class=" ftco-animate">
                        <h2>PANKAJ SHARMA</h2>
                        <p>B.A LLB (Hons.)</p>
                        <p>Pankaj advises on corporate and Civil Laws, Insolvency and Bankruptcy, and Criminal Laws. He is recognised by clients for his commercial awareness and his solution-driven approach, together with his easy-going manner on a wide range of corporate law matters including private company mergers and acquisitions, joint ventures, company re-organisations, shareholder agreements, share buy-backs, corporate governance, and private equity deals. He regularly represents our clients before the High Courts, lower courts, Tribunals, and Government Agencies</p>
                        <p>Pankaj assists clients with cases involving:
                            <ul>
                                <li>Corporate Law matters</li>
                                <li>Criminal Defence</li>
                                <li>Serious drug offences</li>
                                <li>Sexual offences</li>
                                <li>Assaults</li>
                                <li>Financial crime including complex fraud and Proceeds of Crime Act proceedings.</li>
                                <li>Private prosecutions</li>
                                <li>Police station representation</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
    </div>
</section>
@include('partials.footer')
@include('partials.scripts')
</body>