@include('partials.header')
<body>
@include('partials.navbar',['page' => 'team'])
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/backgroundimage3.png') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">ELITE COUNSEL</h1>
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span>
                    <span class="mr-2"><a href="/team">Team <i class="ion-ios-arrow-forward"></i></a></span>
                    <span>Elite Counsel<i class="ion-ios-arrow-forward"></i></span>
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
                  <div class="flipper">
                      <div class="front" style="background-image: url('{{ asset('images/team/elite1.png') }}');">
                          <div class="box">
                              <h2>Adv Dr. KRISS VENUGOPAL</h2>
                              <p>B.Tech (Civil) PGDEPM M.Sc (App Psy) LLB</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-9 col-sm-12">
              <div class=" ftco-animate">
                  <h2>Adv Dr. KRISS VENUGOPAL</h2>
                  <p>B.Tech (Civil) PGDEPM M.Sc (App Psy) LLB</p>
                  <p>
                  Kriss as he is lovingly addressed is a Certified Cyber Crime Intervention Officer with an adept background in cyberpsychology and cybercrimes. He embarked on his entrepreneurial stint through his entities like Kriyathmak as its Managing Director and Kaye Inc based out of Dubai as its CEO. He is the Director of La Liberta, involved in training- Soft Skills, corporate training, intercultural communication, voice coaching other than hypnotherapy, and counseling and training in creative writing, Client counselling and administration.</p>
                  <p>Kriss is an award-winning author. He was recognized twice as one of the Best 100 Indian Authors. He was bestowed with the Rising Star Award from Hubooktique Publishers, the Rabindranath Tagore Literature Award, and Bharat Gaurav Ratan Shri Samman for writing. He is also a Media Personality, Consultant Psychologist, Clinical Hypnotherapist, and Motivational Speaker.</p>
                  <p>His keen interest in law and jurisprudence made him choose the profession of law. Kriss is proficient in advising Police, Intelligence Services, and Governments and provides legal guidance to management, personnel, or clients.  He provides opinions on complex legal matters and legal strategies to be initiated in litigation, evaluating contracts, regulations, policies, procedures, and standards, and resolves conflicts in policies and procedures. He is adept at client counselling and administration. He represents clients before various Courts, Tribunals, Quasi-Judicial Bodies, and Statutory Authorities. He has expertise in handling Legal Affairs & Litigation, Dispute Resolution, Petitions, Research, and all kinds of legal and advisory services. He has acquired strong legal and professional skills in Negotiation, Legal Compliance, Contracts, joint venture, collaboration, and investment agreements, and governance.
                  </p>
              </div>
          </div>
      </div>
    </div>
</section>
@include('partials.footer')
@include('partials.scripts')
</body>