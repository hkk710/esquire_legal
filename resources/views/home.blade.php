@include('partials.header')

<body>
    <!-- Modal -->
    <div class="modal fade" id="discaimermdal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">DISCLAIMER</h5>
                </div>
                <div class="modal-body">
                    <p class="content">The Bar Council of India does not permit advertisement or solicitation by advocates in any form or manner. By accessing this website, www. esquirelegal.in, you acknowledge and confirm that you are seeking information relating to Esquire
                        Legal of your own accord and that there has been no form of solicitation, advertisement, or inducement by Esquire Legal or its members. The content of this website is for informational purposes only and should not be interpreted
                        as soliciting or advertising. No material/information provided on this website should be construed as legal advice. Esquire Legal shall not be liable for the consequences of any action taken by relying on the material/information
                        provided on this website. The contents of this website are the intellectual property of Esquire Legal.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Accept</button>
                </div>
            </div>
        </div>
    </div>

@include('partials.navbar')
    <!-- END nav -->

    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.png');" data-stellar-background-ratio="0.9">
        <div class="overlay"></div>
        <div class="container overflow-auto">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate fadeInUp">
                    <h1 class="ftco-animate">
                        <span style="color:#fff">ADVOCATES</span>
                        <span style="color:#fff">&</span>
                        <br/>
                        <span style="color:#fff">LEGAL</span>
                        <span style="color:#fff">COUNSELS</span>
                    </h1>
                </div>
                <div class="col-md-6 ftco-animate fadeInUp d-none d-lg-block" style="padding: 2%;text-align: left;background:#afa93987">
                    <h1 style="font-size:20px;">Why Us ?</h1>
                    <ul style="color: #fff;">
                        <li class="ftco-animate">Practical Approach</li>
                        <p class="ftco-animate">Practical and holistic approach towards litigation, and tax, combined with the corporate talent of the Firm to deliver the optimal solutions to clients.</p>
                        <li class="ftco-animate">Unique Client Focus</li>
                        <p class="ftco-animate">The unique client-focused approach coupled with a high degree of responsiveness coupled with an illustrious Advisory Board.</p>
                        <li class="ftco-animate">Optimal Advice</li>
                        <p class="ftco-animate">Optimal legal advice, legal research, and analysis-based advisory with a high degree of partner involvement and availability.</p>
                    </ul>
                </div>
                <div class="col-md-6 ftco-animate fadeInUp d-lg-none whyusmobile" style="text-align: center;">
                    <h1 style="color: #afa939;">Why Us ?</h1>
                    <button type="button" class="btn btn-rounded btn-icon" data-toggle="collapse" data-target="#collapseWhyus" aria-expanded="false" aria-controls="collapseWhyus" style="background:#fff;border-radius: 50%;">
                        <i class="fa-solid fa-arrow-down"></i>
                    </button>
                    <div class="collapse" id="collapseWhyus" style="background-color: #00000047;border-left: 5px solid #afa93987 !important;padding-top: 5%;">
                        <ul style="color:#fff;text-align: left;">
                            <li class="ftco-animate" style="text-align: left;background:#afa93987;list-style-type: none;"><i class="fa-brands fa-think-peaks"></i> Practical Approach</li>
                            <p class="ftco-animate">Practical and holistic approach towards litigation, and tax, combined with the corporate talent of the Firm to deliver the optimal solutions to clients.</p>
                            <li class="ftco-animate" style="text-align: left;background:#afa93987;list-style-type: none;"><i class="fa-solid fa-fingerprint"></i> Unique Client Focus</li>
                            <p class="ftco-animate">The unique client-focused approach coupled with a high degree of responsiveness coupled with an illustrious Advisory Board.</p>
                            <li class="ftco-animate" style="text-align: left;background:#afa93987;list-style-type: none;"><i class="fa-solid fa-arrows-to-dot"></i> Optimal Advice</li>
                            <p class="ftco-animate">Optimal legal advice, legal research, and analysis-based advisory with a high degree of partner involvement and availability.</p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('partials.footer')



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


@include('partials.scripts')

    <script>
        $(window).load(function() {
            $('#discaimermdal').modal('show');
        });
    </script>

</body>
