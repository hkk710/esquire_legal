@include('partials.header')
<body>
@include('partials.navbar',['page' => 'about'])
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/backgroundimage3.png') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">About us</h1>
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span>
                    <span>About us <i class="ion-ios-arrow-forward"></i></span>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt ftco-animate ">
        <div class="container ">
            <div class="row ">
                <div class="missionandvission col-md-3 ftco-animate">
                    <h2 class="ftco-animate">MISSION</h2>
                    <p class="ftco-animate">Providing sterling legal services through a solution-oriented approach thereby ensuring the entitled legal rights of the client.</p>
                    <h2 class="ftco-animate">VISION</h2>
                    <p class="ftco-animate">To be a premier full-service law firm providing optimal legal remedies with the highest ethical standards.</p>
                    <h2 class="ftco-animate">VALUES</h2>
                    <p class="ftco-animate">To consistently act with fairness, integrity, ethics, diligence, and social responsibility.</p>
                </div>
                <div class="col-md-9 ftco-animate" style="padding-top:5%">
                    <h2 class="subheading ftco-animate">ABOUT US</h2>
                    <p class="ftco-animate">ESQUIRE LEGAL is a niche full-service Indian law firm offering transactional, regulatory, advisory, dispute resolution, criminal, civil, and tax services, operating in Bengaluru, Kochi, and Delhi. The firm is the outcome of the coalescence
                        of several professionals including Lawyers, Company Secretaries, and Chartered Accountants. The Firm has experienced lawyers as associates in all major commercial cities of India. The Firm is professionally equipped to
                        handle large-sized and complex corporate transactions like Mergers & Acquisitions, Corporate Restructuring, Joint Ventures, Corporate Taxation, etc. </p>
                    <p class="ftco-animate">We are at the cutting edge of white-collar and criminal defense cases. We advise clients to achieve reduced penalties where a conviction cannot be avoided. </p>
                    <p class="ftco-animate">The Firm also offers proven capabilities in litigation and dispute resolution practice areas, litigation in the Supreme Court, various High Courts of India and various judicial and quasi-judicial tribunals/ forums, and other adjudicatory
                        bodies. The Firm has extensive experience in handling corporate insolvency and bankruptcy matters.</p>
                    <p class="ftco-animate"> Our clients cover a broad range of industry sectors predominantly in the IT, green energy, waste management, medical and pharma, technology, media & entertainment, retail, and fashion sectors. We service both corporate entities and
                        private individuals.
                    </p>
                </div>
            </div>
        </div>
    </section>
@include('partials.footer')
@include('partials.scripts')
</body>