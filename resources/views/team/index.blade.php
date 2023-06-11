@include('partials.header')
<style>
    .team .team-of-adv-heading {
        fontsize:15px;
        fornt-weight:800;
        color:#fff;
        text-align:center;
    }
</style>
<body>
@include('partials.navbar',['page' => 'team'])
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/backgroundimage3.png') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Team</h1>
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span>
                    <span>Team <i class="ion-ios-arrow-forward"></i></span>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section team">
        <div class="container-fluid px-md-5">
        <div class="row" style="box-shadow: -4px 8px 30px -20px #000;">
                <div class="col-lg-2 col-sm-12" style="background-color:#afa939; box-shadow: -4px 8px 30px -20px #000;  display: flex;align-items: center;justify-content: center;">
                    <h4 style="padding:2%;color:#fff;background-color:#afa939">MENTOR</h4>
                </div>
                <div  class="col-lg-4 col-sm-6">
                    <div class="block-2 ftco-animate" style="margin-top:5%;">
                        <div class="know-more">
                            <a href="/team/one" class="btn btn-primary">
                                Know more
                            </a>
                        </div>
                        <div class="flipper">
                            <div class="front" style="background-image: url('{{ asset('images/team/mentor.png') }}');background-size:contain;background-position:center">
                                <!-- <div class="top-box">
                                    <h4>Mentor</h4>
                                </div> -->
                                <div class="box" style="background-color: #000000;color: #afa939!important;padding: 5%;bottom: 2px;left: 0;right: 0;">
                                    <h2>K. G. MOHAN</h2>
                                    <p>Principal Mentor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-12" style="background-color:#afa939; box-shadow: -4px 8px 30px -20px #000;  display: flex;align-items: center;justify-content: center;">
                    <h4 style="padding:2%;color:#fff;background-color:#afa939">ELITE COUNSEL</h4>
                </div>
                <div  class="col-lg-4 col-sm-6">
                    <div class="block-2 ftco-animate" style="margin-top:5%;">
                        <div class="know-more">
                            <a href="/team/two" class="btn btn-primary">
                                Know more
                            </a>
                        </div>
                        <div class="flipper">
                            <div class="front" style="background-image: url('{{ asset('images/team/elite1.png') }}');background-size:contain;background-position:center">
                                <!-- <div class="top-box">
                                    <h4>Elite Counsel</h4>
                                </div>     -->
                                <div class="box" style="background-color: #000000;color: #afa939!important;padding: 5%;bottom: 2px;left: 0;right: 0;">
                                    <h2>Adv Dr. KRISS VENUGOPAL</h2>
                                    <p>B.Tech (Civil) PGDEPM M.Sc (App Psy) LLB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row" style="padding:5%; box-shadow: -4px 8px 30px -20px #000;">
                <div class="col-lg-3 col-sm-12">
                    <h4>ELITE COUNSEL</h4>
                </div>
                <div  class="col-lg-3 col-sm-6">
                    <div class="block-2 ftco-animate">
                        <div class="know-more">
                            <a href="/team/two" class="btn btn-primary">
                                Know more
                            </a>
                        </div>
                        <div class="flipper">
                            <div class="front" style="background-image: url('{{ asset('images/team/elite1.png') }}');">
                                <div class="box" style="background-color: #000000;color: #afa939!important;padding: 5%;bottom: 2px;left: 0;right: 0;">
                                    <h2>Adv Dr. KRISS VENUGOPAL</h2>
                                    <p>B.Tech (Civil) PGDEPM M.Sc (App Psy) LLB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row" style="margin-top:5%;box-shadow: -4px 8px 30px -20px #000;">
                <div class="col-lg-3 col-sm-12" style="background-color:#afa939; box-shadow: -4px 8px 30px -20px #000;  display: flex;align-items: center;justify-content: center;">
                    <h4 style="padding:2%;color:#fff;background-color:#afa939">TEAM OF ADVOCATES</h4>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="block-2 ftco-animate" style="margin-top:5%;">
                        <div class="know-more">
                            <a href="/team/three" class="btn btn-primary">
                                Know more
                            </a>
                        </div>
                        <div class="flipper">
                            <div class="front" style="background-image: url('{{ asset('images/team/adv1.png') }}');background-size:contain;background-position:center">
                                <div class="box" style="background-color: #000000;color: #afa939!important;padding: 5%;bottom: 2px;left: 0;right: 0;">
                                    <h2>PANKAJ SHARMA</h2>
                                    <p>B.A LLB (Hons.)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="block-2 ftco-animate" style="margin-top:5%;">
                        <div class="know-more">
                            <a href="/team/four" class="btn btn-primary">
                                Know more
                            </a>
                        </div>
                        <div class="flipper">
                            <div class="front" style="background-image: url('{{ asset('images/team/adv2.png') }}');background-size:contain;background-position:center">
                                <div class="box" style="background-color: #000000;color: #afa939!important;padding: 5%;bottom: 2px;left: 0;right: 0;">
                                    <h2>HEMANTH HARI</h2>
                                    <p>M.Com, LLB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="block-2 ftco-animate" style="margin-top:5%;">
                        <div class="know-more">
                            <a href="/team/five" class="btn btn-primary">
                                Know more
                            </a>
                        </div>
                        <div class="flipper">
                            <div class="front" style="background-image: url('{{ asset('images/team/adv3.png') }}');background-size:contain;background-position:center">
                                <div class="box" style="background-color: #000000;color: #afa939!important;padding: 5%;bottom: 2px;left: 0;right: 0;">
                                    <h2>SETHU S KRISHNA</h2>
                                    <p>BBA, LLB(Hons)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:5%;box-shadow: -4px 8px 30px -20px #000;">
                <div class="col-lg-4 col-sm-12" style="background-color:#afa939; box-shadow: -4px 8px 30px -20px #000;  display: flex;align-items: center;justify-content: center;">
                    <h4 style="padding:2%;color:#fff;background-color:#afa939">TRANSACTIONS SPECIALISTS</h4>
                </div>
                <div  class="col-lg-4 col-sm-6">
                    <div class="block-2 ftco-animate" style="margin-top:5%;">
                        <div class="know-more">
                            <a href="/team/teamsix" class="btn btn-primary">
                                Know more
                            </a>
                        </div>
                        <div class="flipper">
                            <div class="front" style="background-image: url('{{ asset('images/team/ts1.png') }}');background-size:contain;background-position:center">
                                <div class="box" style="background-color: #000000;color: #afa939!important;padding: 5%;bottom: 2px;left: 0;right: 0;">
                                    <h2>PRASHANT MOHAN</h2>
                                    <p>B.Com., LLB., FCS, FCA, IP (IBBI), DISA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-6">
                    <div class="block-2 ftco-animate" style="margin-top:5%;">
                        <div class="know-more">
                            <a href="/team/seven" class="btn btn-primary">
                                Know more
                            </a>
                        </div>
                        <div class="flipper">
                            <div class="front" style="background-image: url('{{ asset('images/team/ts2.png') }}');background-size:contain;background-position:center">
                                <div class="box" style="background-color: #000000;color: #afa939!important;padding: 5%;bottom: 2px;left: 0;right: 0;">
                                    <h2>MALATHI</h2>
                                    <p>ACS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:5%;box-shadow: -4px 8px 30px -20px #000;">
                <div class="col-lg-4 col-sm-12" style="background-color:#afa939; box-shadow: -4px 8px 30px -20px #000;  display: flex;align-items: center;justify-content: center;">
                    <h4 style="padding:2%;color:#fff;background-color:#afa939">FOUNDERS</h4>
                </div>
                <div  class="col-lg-4 col-sm-6">
                    <div class="block-2 ftco-animate" style="margin-top:5%;">
                        <div class="know-more">
                            <a href="/team/eight" class="btn btn-primary">
                                Know more
                            </a>
                        </div>
                        <div class="flipper">
                            <div class="front" style="background-image: url('{{ asset('images/team/founder1.png') }}');background-size:contain;background-position:center">
                                <div class="box" style="background-color: #000000;color: #afa939!important;padding: 5%;bottom: 2px;left: 0;right: 0;">
                                    <h2>SRIKANT MOHAN</h2>
                                    <p>FCS, ACMA, IP – IBBI, LLB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-6">
                    <div class="block-2 ftco-animate" style="margin-top:5%;">
                        <div class="know-more">
                            <a href="/team/nine" class="btn btn-primary">
                                Know more
                            </a>
                        </div>
                        <div class="flipper">
                            <div class="front" style="background-image: url('{{ asset('images/team/founder2.png') }}');background-size:contain;background-position:center">
                                <div class="box" style="background-color: #000000;color: #afa939!important;padding: 5%;bottom: 2px;left: 0;right: 0;">
                                    <h2>SREERAJ MURALIDHARAN</h2>
                                    <p>BBM, FCS, LLB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('partials.footer')
@include('partials.scripts')
</body>