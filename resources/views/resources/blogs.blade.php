@include('partials.header')
<body>
@include('partials.navbar',['page' => 'resources'])
<section class="hero-wrap hero-wrap-2"  style="background-image: url('{{ asset('images/backgroundimage3.png') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">BLOGS</h1>
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
                        <span class="mr-2">
                            Blogs 
                        </span>
                    </p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <div class="text px-4 py-4">
                            <h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
                        </div>
                        <a href="#" class="block-20" style="background-image: url('../images/image_1.jpg');">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <div class="topper d-flex align-items-center">
                                <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                    <span class="day">18</span>
                                </div>
                                <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                    <span class="yr">2019</span>
                                    <span class="mos">October</span>
                                </div>
                            </div>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <div class="text px-4 py-4">
                            <h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
                        </div>
                        <a href="#" class="block-20" style="background-image: url('../images/image_2.jpg');">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <div class="topper d-flex align-items-center">
                                <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                    <span class="day">18</span>
                                </div>
                                <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                    <span class="yr">2019</span>
                                    <span class="mos">October</span>
                                </div>
                            </div>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <div class="text px-4 py-4">
                            <h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
                        </div>
                        <a href="#" class="block-20" style="background-image: url('../images/image_3.jpg');">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <div class="topper d-flex align-items-center">
                                <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                    <span class="day">18</span>
                                </div>
                                <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                    <span class="yr">2019</span>
                                    <span class="mos">October</span>
                                </div>
                            </div>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('partials.footer')
@include('partials.scripts')
</body>

