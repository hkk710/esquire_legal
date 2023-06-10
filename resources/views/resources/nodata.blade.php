@include('partials.header')
<body>
@include('partials.navbar',['page' => 'resources'])
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/backgroundimage3.png') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">RESOURCES</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="/">Home 
                                <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </span>
                        <span class="mr-2">
                            <a href="/resources">Resources 
                                <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center" style="padding:10%">No data found.</p>
                </div>
            </div>
        </div>
    </section>
@include('partials.footer')
@include('partials.scripts')
</body>
