@include('partials.header')
<body>
@include('partials.navbar',['page' => 'team'])
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
                      <div class="front" style="background-image: url('{{ asset('images/team/ts1.png') }}');">
                          <div class="box">
                              <h2>PRASHANT MOHAN</h2>
                              <p>B.Com., LLB., FCS, FCA, IP (IBBI), DISA</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-9 col-sm-12">
              <div class=" ftco-animate">
                  <h2>PRASHANT MOHAN</h2>
                  <p>B.Com., LLB., FCS, FCA, IP (IBBI), DISA</p>
                  <p>PRASHANT MOHAN is a Chartered Accountant in Practice, with over 12 years of experience in diversified fields of Taxation, Finance and Accounting, FEMA, legal, Company Secretarial, and general management. He is a member of the Institute of Company Secretaries of India since 2005 and a member of the Institute of Chartered Accountants of India since 2012.</p>
                  <p>Prashant had a short stint in a Corporate career before entering into the wider world of Practice where he additionally got experience with the practical insights of roping in and handling Private Equity Partners.</p>
                  <p>He has extensive experience in drafting various Agreements and Petitions, advisory on Private Equity investments and takeovers, advisory on preparations for IPO, financial and legal due diligence, and appearances before various regulatory authorities including the National Company Law Tribunal, Regional Director and Registrar of Companies, advisory on various corporate events like bonus issue, preferential issue, capital reduction, etc.</p>
                  <p>He specialises in FEMA and FDI, advise on tax planning, preparation of Project Reports and Information Memorandum, financial due diligence, statutory and internal audits, systems audit, compliance audits, business and project valuations, and consolidation of financial statements of companies having both Indian and international operations.</p>
                  <p>Prashant is also a qualified Insolvency Professional with the IBBI, empanelled with various banks and state industrial development corporations. He is also a regular speaker at various fora and institutes and is also a regular faculty with the State Employment Offices for their various programs.</p>
              </div>
          </div>
      </div>
    </div>
</section>
@include('partials.footer')
@include('partials.scripts')
</body>