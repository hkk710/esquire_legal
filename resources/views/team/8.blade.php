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
                            <div class="front" style="background-image: url('{{ asset('images/team/founder1.jpg') }}');">
                                <div class="box">
                                    <h2>SRIKANT MOHAN</h2>
                                    <p>FCS, ACMA, IP – IBBI, LLB</p>
                                </div>
                            </div>
                            <div class="back" style="background-image: url('{{ asset('images/team/founder1.jpg') }}'); background-size:cover;background-position:center;background-repeat:no-repeat;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-12">
                    <div class=" ftco-animate">
                        <h2>SRIKANT MOHAN</h2>
                        <p>FCS, ACMA, IP – IBBI, LLB</p>
                        <p>Srikant Mohan has over 20 years of well-rounded experience in corporate law, FEMA, Corporate Finance & Taxation, and Mergers & Amalgamations (M&As). His expertise span various Business Sectors, handling the VCs, SEBI & Stock Exchanges, Audits, and Corporate law compliances including holding Shareholder meetings. During his corporate stint, he was associated with diverse Industries such as Gems & Jewellery; Heavy Engineering; Media; Construction, and Marine Exports. During the year 2012, he took up practice as a Company Secretary and continued until 2021 when he enrolled as an Advocate. He has handled Corporate Disputes and Resolutions, Mergers and Amalgamations, and Joint Ventures during his Practice and has appeared before various legal forums like National Company Law Tribunals and its Appellate Tribunal, ITAT, Securities Appellate Tribunal, SEBI, IT/ GST Commissionerate etc.</p>
                        <p>A few of the industry majors where he was associated include Suashish Diamonds Ltd. (7th largest exporter of Gems & Jewellery) Siemens Ltd., Mumbai (Heavy Engineering), Asianet Communications Ltd., Mumbai (Media), Bhageeratha Constructions, Kochi (Construction), Zonta Group, Bangalore (Waste Management), Oracle India, Mumbai (Software), Continuum Group, Mumbai and KK Group, Bangalore (Energy), etc.</p>
                        <p>Presently, he specializes inter-alia, in FEMA, Security Laws, Tax Laws, Corporate Law matters of the significance of Oppression & Mismanagement, Corporate Insolvency, and Structuring. He is presently stationed in Bangalore.</p>
                        <p>Srikant Mohan has been in the field of Advisory and Consultancy since 2003. He has done his Masters in Finance and has Graduated in Law from Karnataka State Law University, Hubli, Karnataka. He is a qualified Company Secretary and a Cost and Management Accountant. He is also an Insolvency Professional registered with IBBI.</p>
                    </div>
                </div>
            </div>
    </div>
</section>
@include('partials.footer')
@include('partials.scripts')
</body>