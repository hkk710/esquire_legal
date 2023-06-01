

@include('partials.header')
<body>
@include('partials.navbar')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/backgroundimage3.png') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">FAMILY LAW</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span>
                        <span class="mr-2"><a href="/legalservices">Legal Services <i class="ion-ios-arrow-forward"></i></a></span>
                        <span>Family Law<i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ftco-animate">
                    <h2 class="mb-3">FAMILY LAW</h2>
                    <p class="ftco-animate">
                        We aim to offer decisive advice at all stages, always mindful of the realities of family finances and your strategic goals. We are driven by a desire to find cost-effective, practical solutions to meet your objectives. Our team will always explore alternative
                        dispute resolution methods that avoid determination by the court wherever that is practicable, as detailed below. Equally, our lawyers are experienced in Court processes and are prepared to take your case to court, if that is what
                        is required to get the justice. Whatever the case, your matter will always be handled with sensitivity and discretion. Matters involving a person’s familial relationships are dealt with paramount sensitivity, empathy, and expertise
                        by us. We regularly advise on family law matters including succession, wills, family settlements, partition, paternity, guardianship, juvenile delinquency, custody, child support, adoption, and divorce. We offer our support and
                        expertise to our innumerable clients in varied ways and manners including counselling sessions in our offices, managing court cases, negotiating/ mediating, and settling disputes outside courts.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- .section -->
    @include('partials.footer')
@include('partials.scripts')
</body>


   