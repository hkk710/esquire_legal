@include('partials.header')
<style>

.section {
  padding: 40px 20px;
  text-align: center;
}

.section h2 {
  margin-bottom: 20px;
  color:#000;
}

.section .member {
  display: inline-block;
  margin: 20px;
  text-align: center;
}

.section img {
  width: 150px;
  height: 150px;
  object-fit: cover;
  border-radius: 50%;
  box-shadow: 0px 0px 28px -13px #000;
}

.section h3 {
  margin-top: 10px;
  color:#afa939;
}

.section p {
  color: #777;
}

.section .member-link {
  display: block;
  margin-top: 10px;
  color: #333;
  text-decoration: none;
}

.section .member-link i {
  margin-right: 5px;
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
    <section class="section mentor">
   
    <div class="member ftco-animate"> 
        <h2>Mentor</h2>
      <img src="{{ asset('images/team/mentor.png') }}" alt="Mentor">
      <h3>K. G. MOHAN</h3>
      <p>FCS, M.Com, CAIIB</p>
      <a href="/team/one" class="member-link">
        <i class="fas fa-info-circle"></i>Know more
      </a>
    </div>
    <div class="member ftco-animate">
    <h2>Elite Counsel</h2>
      <img src="{{ asset('images/team/elite1.png') }}" alt="Elite Council 1">
      <h3>Adv Dr. KRISS VENUGOPAL</h3>
      <p>B.Tech (Civil) PGDEPM M.Sc (App Psy) LLB</p>
      <a href="/team/two" class="member-link">
        <i class="fas fa-info-circle"></i>Know more
      </a>
    </div>
  </section>

  <section class="section council">
    

  </section>

  <section class="section advocates">
    <h2>Team of Advocates</h2>
    <div class="member ftco-animate">
      <img src="{{ asset('images/team/adv1.png') }}" alt="Advocate 1">
      <h3>PANKAJ SHARMA</h3>
      <p>B.A LLB (Hons.)</p>
      <a href="/team/three" class="member-link">
        <i class="fas fa-info-circle"></i>Know more
      </a>
    </div>
    <div class="member ftco-animate">
      <img src="{{ asset('images/team/adv2.png') }}" alt="Advocate 2">
      <h3>HEMANTH HARI</h3>
      <p>M.Com, LLB</p>
      <a href="/team/four" class="member-link">
        <i class="fas fa-info-circle"> </i>Know more
      </a>
    </div>
    <div class="member ftco-animate">
      <img src="{{ asset('images/team/adv3.png') }}" alt="Advocate 3">
      <h3>SETHU S KRISHNA</h3>
      <p>BBA, LLB(Hons)</p>
      <a href="/team/five" class="member-link">
        <i class="fas fa-info-circle"></i>Know more
      </a>
    </div>
  </section>

  <section class="section specialists">
    <h2>Transaction Specialists</h2>
    <div class="member ftco-animate">
      <img src="{{ asset('images/team/ts1.png') }}" alt="Specialist 1">
      <h3>PRASHANT MOHAN</h3>
      <p>B.Com., LLB., FCS, FCA, IP (IBBI), DISA</p>
      <a href="/team/teamsix" class="member-link">
        <i class="fas fa-info-circle"></i>Know more
      </a>
    </div>
    <div class="member ftco-animate">
      <img src="{{ asset('images/team/ts2.png') }}" alt="Specialist 2">
      <h3>MALATHI</h3>
      <p>ACS</p>
      <a href="/team/seven" class="member-link">
        <i class="fas fa-info-circle"></i>Know more
      </a>
    </div>
  </section>

  <section class="section founders">
    <h2>Founders</h2>
    <div class="member ftco-animate">
      <img src="{{ asset('images/team/founder1.png') }}" alt="Founder 1">
      <h3>SRIKANT MOHAN</h3>
      <p>FCS, ACMA, IP – IBBI, LLB</p>
      <a href="/team/eight" class="member-link">
        <i class="fas fa-info-circle"></i>Know more
      </a>
    </div>
    <div class="member ftco-animate">
      <img src="{{ asset('images/team/founder2.png') }}" alt="Founder 2">
      <h3>SREERAJ MURALIDHARAN</h3>
      <p>BBM, FCS, LLB</p>
      <a href="/team/nine" class="member-link">
        <i class="fas fa-info-circle"></i>Know more
      </a>
    </div>
  </section>
    </div>
</section>

@include('partials.footer')
@include('partials.scripts')
</body>