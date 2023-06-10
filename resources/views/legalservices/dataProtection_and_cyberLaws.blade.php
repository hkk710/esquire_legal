

@include('partials.header')
<body>
@include('partials.navbar',['page' => 'legalservices'])
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/backgroundimage3.png') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">DATA PROTECTION AND CYBER LAWS</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="/">Home <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </span>
                        <span class="mr-2">
                            <a href="/legalservices">Legal Services <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </span>
                        <span>Data Protection And Cyber Laws</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ftco-animate">
                    <h2 class="mb-3">DATA PROTECTION AND CYBER LAWS</h2>
                    <p class="ftco-animate">
                        India is rapidly transforming into a digital society. The storage and management of data have become a major issue for all businesses, led by large-scale changes in the legal and regulatory environment over recent years, especially after the proposal
                        for the implementation of the Digital India Act that will oversee laws dealing with cybercrime and eCommerce. Many practice areas intertwine in cyberlaw such as intellectual property, privacy, freedom of expression, and jurisdiction.
                        We advise in matters relating to Information Technology Law compliance and drafting Privacy Policies, Terms & Conditions, etc. of e-Commerce Companies, Cyber Crime Cases, and Data Privacy Compliance. Formulation and drafting of
                        Information Security Policies and Bring Your Own Device Policies for Companies.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- .section -->
    @include('partials.footer')
@include('partials.scripts')
</body>


