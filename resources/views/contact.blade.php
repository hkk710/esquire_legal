@include('partials.header')
<body>
@include('partials.navbar',['page' => 'contact'])
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/backgroundimage3.png') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Contact Us</h1>
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span>
                    <span>Contact Us <i class="ion-ios-arrow-forward"></i></span>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-9 mb-2">
                    <div class="row d-flex">
                        <div class="col-md-12">
                            <h2 class="h3"><i class="fa-solid fa-location-dot"></i><span style="padding-left:1%;"> Bengaluru</h2>
                            <p>A - 501, Carlton Towers, No. 1, Old Airport Road Bengaluru, Karnataka- 560 008, India</span></p>
                        </div>
                        <div class="col-md-12">
                            <h2 class="h3"><i class="fa-solid fa-location-dot"></i><span style="padding-left:1%;"> Kochi</h2>
                        </div>

                        <div class="col-md-12">
                            <p>First Floor, Prince Tower, Market Road, Kombara Junction, Near Kerala High Court, Ernakulam, Kerala - 682018, India</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-2">
                    <div class="row border-left border-dark">
                        <div class="col-md-12">
                            <p><span><i class="fa-solid fa-phone">  </i></span><a href="tel://+91-80-8050005784"><span style="padding-left:1%">+91-80-8050005784</span></a></p>
                        </div>
                        <div class="col-md-12">
                            <p><span><i class="fa-solid fa-mobile-retro">  </i></span><a href="tel://+91 9778307400"><span style="padding-left:1%">+91 9778307400</span></a></p>
                            <p><span><i class="fa-solid fa-mobile-retro">  </i></span><a href="tel://+917676649902"><span style="padding-left:1%">+91 7676649902</span></a></p>
                        </div>
                        <div class="col-md-12">
                            <p><span><i class="fa-solid fa-envelope">  </i></span><a href="mailto:info@esquirelegal.in"><span style="padding-left:1%">info@esquirelegal.in</span></a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@include('partials.footer')
@include('partials.scripts')
</body>