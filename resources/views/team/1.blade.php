@include('partials.header')
<body>
@include('partials.navbar')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/backgroundimage3.png') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Mentor</h1>
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span>
                    <span class="mr-2"><a href="/team">Team <i class="ion-ios-arrow-forward"></i></a></span>
                    <span>Mentor<i class="ion-ios-arrow-forward"></i></span>
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
                        <div class="front" style="background-image: url('{{ asset('images/team/mentor.jpg') }}');">
                            <div class="box">
                                <h2>K. G. MOHAN</h2>
                                <p>Principal Mentor</p>
                            </div>
                        </div>
                        <div class="back" style="background-image: url('{{ asset('images/team/mentor.jpg') }}'); background-size:cover;background-position:center;background-repeat:no-repeat;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-sm-12">
                <div class=" ftco-animate">
                    <h2>K. G. MOHAN (FCS, M.Com, CAIIB)</h2>
                    <p>Principal Mentor</p>
                    <p>Shri. Mohan is an expert in the legal analysis of complex commercial litigation that is often compounded by significant economic and financial issues. His deep experience has helped minimise the risks associated with litigation by providing unbiased and objective assessments of complex issues, resulting in efficient and effective trial and settlement strategies. In addition, he has been relentlessly guiding counsels to identify documentary and other evidentiary needs along with the development of relevant questions for depositions and interrogatories.</p>
                    <p>Experience:
                        <ul>
                            <li> Over Five decades of expertise in Litigation Advisory, Banking Law, Financial Laws and Corporate Laws including FEMA and SEBI laws. </li>
                            <li>Post-graduate in Commerce, Member of the Indian Institute of Bankers, Mumbai </li>
                            <li>Promoter of first S E B I registered Transfer agent from Kerala, Promoter and Managing Director of the first N S E member listed on B S E, from Kerala </li>
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