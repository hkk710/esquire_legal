@include('partials.header')
<body>
@include('partials.navbar',['page' => 'team'])
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
                            <div class="front" style="background-image: url('{{ asset('images/team/adv2.jpg') }}');">
                                <div class="box">
                                    <h2>HEMANTH HARI</h2>
                                    <p>M.Com, LLB</p>
                                </div>
                            </div>
                            <div class="back" style="background-image: url('{{ asset('images/team/adv2.jpg') }}'); background-size:cover;background-position:center;background-repeat:no-repeat;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-12">
                    <div class=" ftco-animate">
                        <h2>HEMANTH HARI</h2>
                        <p>M.Com, LLB</p>
                        <p>Hemanth Hari specialises in lower courts and tribunals. He has excellent legal acumen and handles cases relating to 'Family Laws like Divorce, Maintenance, Guardianship, Arbitration and Conciliation, Civil Laws, Criminal Laws, Consumer Protection, etc. Expertise in handling banking & NBFC-related cases with a pleasing personality and complex client dealing experience. He is specially trained to identify and deal with the sensitivities involved in statutory/regulatory inquiries and civil and criminal proceedings arising out of offences. His promptness and personal investment in our client’s matters have earned us our Client’s trust.</p>
                        <p>He has several years of experience in dealing with Wills, estate planning, and administration matters. </p>
                        <p>He also possesses a wealth of experience across the full scope of Family Law matters including Financial Remedy, Child Arrangements, Contested Divorce, Pre- and Post-Nuptial Agreements, Property Disputes, Domestic Abuse, and matters involving children’s services.</p>
                        <p>He has extensive experience of pursuing and defending domestic commercial arbitrations under various procedural and substantive governing laws.</p>
                        <p>His areas of practice include the following:
                            <ul>
                                <li>Criminal Defence</li>
                                <li>Lease & Rent Control</li>
                                <li>Wills & Succession</li>
                                <li>Matrimonial & Divorce </li>
                                <li>Cheque Bounce cases</li>
                                <li>Civil Disputes, Commercial Disputes, Consumer Disputes</li>
                                <li>Motor Accident Claims, Insurance Claims</li>
                                <li>Arbitration & Mediation</li>
                                <li>Drafting, negotiation, and enforcement of contracts and agreements</li>
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