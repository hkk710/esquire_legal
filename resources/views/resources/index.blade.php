@include('partials.header')
<body>
@include('partials.navbar',['page' => 'resources'])
<section class="hero-wrap hero-wrap-2"  style="background-image: url('{{ asset('images/backgroundimage3.png') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Resources</h1>
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span>
                    <span>Resources <i class="ion-ios-arrow-forward"></i></span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="case img d-flex align-items-center justify-content-center">
                        <div class="text text-center">
                            <a href="/resources/nodata"><span class="icon-newspaper-o"></span></a>
                            <h3><a href="/resources/nodata">News</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="case img d-flex align-items-center justify-content-center">
                        <div class="text text-center">
                            <a href="​https://sreerajm.blog/"><span class="icon-chat"></span></a>
                            <h3><a href="​https://sreerajm.blog/">Blogs</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="case img d-flex align-items-center justify-content-center">
                        <div class="text text-center">
                            <a href="/resources/nodata"><span class="icon-video-camera"></span></a>
                            <h3><a href="/resources/nodata">Videos</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('partials.footer')
@include('partials.scripts')
</body>