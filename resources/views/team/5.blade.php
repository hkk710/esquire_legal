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
                            <div class="front" style="background-image: url('{{ asset('images/team/adv3.jpg') }}');">
                                <div class="box">
                                    <h2>SETHU S KRISHNA</h2>
                                    <p>BBA, LLB(Hons)</p>
                                </div>
                            </div>
                            <div class="back" style="background-image: url('{{ asset('images/team/adv3.jpg') }}'); background-size:cover;background-position:center;background-repeat:no-repeat;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-12">
                    <div class=" ftco-animate">
                        <h2>SETHU S KRISHNA</h2>
                        <p>BBA, LLB(Hons)</p>
                        <p>Sethu has garnered excellent all-around experience in advising clients who have been arrested and are subject to investigation by the police and other investigating bodies. She is a versatile defence lawyer and her experience of defending clients at every stage of proceedings as both litigator and advocate allow her to bring a tactical and strategic savvy to her practice.</p>
                        <p>Her experience spans both civil and criminal matters at various lower courts. Expertise in conducting counselling sessions in family law-related cases and conducting Abkari and NDPS cases over various courts with high patience level to deal with various types of people and possess excellent communication skills. </p>
                        <p>She regularly provides specialist criminal defence representation to clients and provides expert legal advice and representation. Whether you are in the police station, Magistrates’ Court, or in prison, Sethu is here to help.</p>
                        <p>Her areas of practice include the following:
                            <ul>
                                <li>Criminal Defence</li>
                                <li>Attend police station interviews and offer the appropriate advice</li>
                                <li>Visit in prison or on remand if the client is in custody</li>
                                <li>Prepare the defence for trial </li>
                                <li>Communicate with police, witnesses and probation officers on behalf of the client</li>
                                <li>Representation in court</li>
                                <li>Matrimonial & Divorce</li>
                                <li>Lease & Rent Control</li>
                                <li>Land Acquisition</li>
                                <li>Wills & Succession</li>
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