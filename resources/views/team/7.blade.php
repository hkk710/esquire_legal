@include('partials.header')
<body>
@include('partials.navbar')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/backgroundimage3.png') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">TRANSACTIONS SPECIALIST</h1>
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span>
                    <span class="mr-2"><a href="/team">Team <i class="ion-ios-arrow-forward"></i></a></span>
                    <span>Transaction Specialists<i class="ion-ios-arrow-forward"></i></span>
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
                      <div class="front" style="background-image: url('{{ asset('images/team/ts2.jpg') }}');">
                          <div class="box">
                              <h2>MALATHI</h2>
                              <p>ACS</p>
                          </div>
                      </div>
                      <div class="back" style="background-image: url('{{ asset('images/team/ts2.jpg') }}'); background-size:cover;background-position:center;background-repeat:no-repeat;">
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-9 col-sm-12">
              <div class=" ftco-animate">
                  <h2>MALATHI</h2>
                  <p>ACS</p>
                  <p>Malathy is a well-experienced Company Secretary providing independent company law, company secretarial and corporate governance services, company formation, company administration, company secretary services, restructuring etc.</p>
                  <p>Her core area of practice is the Companies Act, SEBI Regulations, FEMA Regulations, and laws applicable to Financial Sector. She is actively involved in advising Banks, NBFCs, HFCs, several MNCs, and listed companies, Corporate Restructuring, Resolution Services, and corporate law advisory.</p>
                  <p>Her expertise involves Business Setup & Closure Services, Services to LLP, Corporate Advisory & Compliances, Corporate & Financial Restructuring, Due Diligence, FEMA & RBI related compliances, Audit and Certification services, SEBI and Listing Compliances, Representation and related services etc.</p>
              </div>
          </div>
      </div>
    </div>
</section>
@include('partials.footer')
@include('partials.scripts')
</body>