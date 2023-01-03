@extends('home.includes.layout')
@section('title', 'Welcome to LNMUBED')
@section('content')
    <div class="layout layout--onecol">
        <div class="layout__region
                    layout__region--content">
            <div data-block-plugin-id="views_block:home_page-hpg_announcements">
                <div class="content
                            block-content">
                    <div class="views-element-container">
                        <div
                            class="view
                                    view-home-page
                                    view-id-home_page
                                    view-display-id-hpg_announcements
                                    js-view-dom-id-49b137bebf7faef7f9a7b13c92d236d2b8de5eb8bc91786ac4e59b78fbbc3218">
                            <div class="view-content">
                                <!-- Announcements Section Start -->
                                <div class="announcements">
                                    <div class="container">
                                        <p class="announcements__text">Announcements</p>
                                        <div class="marquee__movecotent">
                                            <div id="marqueeContent"
                                                class="marquee__content
                                                        clearfix">
                                                <div class="announcements__list">
                                                    <a href="#">Admissions
                                                        Demo News</a>
                                                </div>
                                                <div class="announcements__list">
                                                    <a href="#">
                                                        Demo News</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h1 class="sr-only">No.
                                        1 for 5
                                        Years
                                        Running...</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="layout layout--onecol">
        <div class="layout__region
                    layout__region--content">
            <div data-block-plugin-id="views_block:config_page_-hpg_hero_banners">
                <div class="content
                            block-content">
                    <div class="views-element-container">
                        <div
                            class="view
                                    view-config-page-
                                    view-id-config_page_
                                    view-display-id-hpg_hero_banners
                                    js-view-dom-id-a97028c7b2987f6b844de048af4accb78d16bd6711a8cefed2519566705bb66c">
                            <div class="view-content">
                                <section class="slider
                                            slider__arrowcenter"
                                    role="banner">
                                    <div
                                        class="bannerSlider
                                                owl-carousel
                                                owl-theme">
                                        <a href="javascript:;">
                                            <div class="slider__imgcontrol"
                                                style="background-image:
                                                        url({{ asset('home/images/bannerimage1.jpg') }});background-size:cover;">
                                                <div class="container">
                                                    <h2 class="banner__heading">The
                                                        Champions
                                                        of
                                                        Technology</h2>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:;">
                                            <div class="slider__imgcontrol"
                                                style="background-image:
                                                        url({{ asset('home/images/bannerimage2.jpg') }});background-size:cover;">
                                                <div class="container">
                                                    <h2 class="banner__heading">Incubating
                                                        Minds</h2>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:;">
                                            <div class="slider__imgcontrol"
                                                style="background-image:
                                                        url({{ asset('home/images/bannerimage3.jpg') }});background-size:cover;">
                                                <div class="container">
                                                    <h2 class="banner__heading">Catalyzing
                                                        Careers</h2>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:;">
                                            <div class="slider__imgcontrol"
                                                style="background-image:
                                                        url({{ asset('home/images/bannerimage4.jpg') }});background-size:cover;">
                                                <div class="container">
                                                    <h2 class="banner__heading">The
                                                        Best
                                                        of
                                                        the
                                                        Best</h2>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:;">
                                            <div class="slider__imgcontrol"
                                                style="background-image:
                                                        url({{ asset('home/images/bannerimage5.jpg') }});background-size:cover;">
                                                <div class="container">
                                                    <h2 class="banner__heading">No.
                                                        1
                                                        for
                                                        5
                                                        Years
                                                        Running...</h2>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add-on Section start -->
    <div class="container" style="padding:70px;">
        <div class="row">
            <div class="col-sm-3">
                <a href="#" class="btn3 btn-lg">
                    <span>Alumni</span>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#" class="btn3 btn-lg">
                    <span>Gallery</span>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#" class="btn3 btn-lg">
                    <span>AQAR</span>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#" class="btn3 btn-lg">
                    <span>E-Learning</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Add-on Section end -->

    <!-- Welcome Section start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center"
                style="background-image:url({{ asset('home/images/background.jpg') }}); background-size: cover; background-repeat: no-repeat;">
                <div class="text-effect">
                    <span>Welcome to LNMUBED Department</span>
                </div>
                {{-- <h3 class="m-1">We provide a high
                    quality and academically
                    rigorous education with in a
                    caring and personalized
                    setting.</h3> --}}
                <div class="col-lg-12 text-center">
                    <br><br/><br><br/><br><br/><br><br/><br>
                    <p>B.Ed. (Regular) course was started by the Directorate of Distance Education, L. N. Mithila University, Darbhanga in 2012 with due approval from Lalit Narayan Mithila University and recognition by the apex body of Teacher Education, the National Council for Teacher Education (NCTE), Ministry of Human Resource Development, Government of India, New Delhi.</p>
                </div>
                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class=" text-center">
                            <img src="{{ asset('home/themes/custom/iitm/assets/images/s3.jpg') }}" height="auto"
                                width="100%" alt="" class="img-fluid" style="opacity:.2;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome Section end -->

    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Notice Section start -->
    <div class="container">
        <div class="row m-4">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12
                        news-inner-area">
                <h2 class="pull-left text-effect">Latest Notice</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 card">
                            <div class="tab" role="tabpanel">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#Section1" aria-controls="notice"
                                            data-toggle="tab">Notice
                                        </a></li>
                                    <li role="presentation"><a href="#Section2" aria-controls="exam"
                                            data-toggle="tab">Exams</a></li>
                                    <li role="presentation"><a href="#Section3" aria-controls="admission"
                                            data-toggle="tab">Admission</a></li>
                                    <li role="presentation"><a href="#Section4" aria-controls="tender"
                                            data-toggle="tab">Tender</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content scroll" style="overflow-y:scroll ">
                                    <div role="tabpanel"
                                        class="tab-pane in
                                                active"
                                        id="Section1">
                                        <marquee onmouseover="this.stop();" onmouseout="this.start();" direction="up"
                                            height="340px">
                                            <ul>
                                                <li><span>&#9997;</span>
                                                    Lorem ipsum
                                                    dolor sit amet.<img src="{{ asset('home/images/arrow.gif') }}"
                                                        height="50px" width="50px">
                                                </li>
                                            </ul>
                                        </marquee>
                                    </div>
                                    <div class="tab-pane " id="Section2">
                                        <ul>
                                            <li><span>&#9997;</span>
                                                Lorem ipsum dolor
                                                sit amet.<img src="{{ asset('home/images/arrow.gif') }}" height="50px"
                                                    width="50px"></li>
                                            <li><span>&#9997;</span>
                                                Lorem ipsum dolor
                                                sit amet.<img src="{{ asset('home/images/arrow.gif') }}" height="50px"
                                                    width="50px"></li>
                                            <li><span>&#9997;</span>
                                                Lorem ipsum dolor
                                                sit amet.<img src="{{ asset('home/images/arrow.gif') }}" height="50px"
                                                    width="50px"></li>
                                        </ul>
                                    </div>
                                    <div role="tabpanel" class="tab-pane " id="Section3">
                                        <ul>
                                            <li><span>&#9997;</span>
                                                Lorem ipsum dolor
                                                sit amet.<img src="{{ asset('home/images/arrow.gif') }}" height="50px"
                                                    width="50px"></li>
                                            <li><span>&#9997;</span>
                                                Lorem ipsum dolor
                                                sit amet.<img src="{{ asset('home/images/arrow.gif') }}" height="50px"
                                                    width="50px"></li>
                                        </ul>
                                    </div>
                                    <div role="tabpanel" class="tab-pane " id="Section4">
                                        <ul>
                                            <li><span>&#9997;</span>
                                                Lorem ipsum dolor
                                                sit amet,
                                                consectetur
                                                adipisicing elit.
                                                Est, quaerat?
                                                lorem20<img src="{{ asset('home/images/arrow.gif') }}" height="50px"
                                                    width="50px"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12
                        event-inner-area">
                <h2 class="text-effect">Head</h2>
                <div class="featured-box" style="border-radius:5px;box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                    <div class="featured-img-holder">
                        <img src="{{ asset('home/images/headbed.jpg') }}" class="img-responsive" alt="featured">
                    </div>
                    <div class="featured-content-holder" style="padding:10px;">
                        <h3><a class="text-center" href="#">Dr. Arvind Kumar
                                Milan</a></h3>
                        <!--<p> process of... <a class="btn btn-primary"-->
                        <!--        href="#">Read-->
                        <!--        More</a></p>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Notice Section end -->

    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Mentors Section start -->
    <div class="container-fluid">
        <div class="row"
            style="background-image:url({{ asset('home/images/background.jpg') }}); background-size: cover; background-repeat: no-repeat;padding-bottom: 100px; padding-top:20px;">
            <h2 class="text-center text-effect" style="padding-bottom:20px;">
                Our Inspiration (Mentors)</h2>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12
                        event-inner-area">
                <div class="featured-box card">
                    <div class="featured-img-holder">
                        <img src="{{ asset('home/images/vc.jpeg') }}" class="img-responsive" alt="featured"
                            style="height:300px;width:300px;">
                    </div>
                    <div class="featured-content-holder">
                        <h3 class="text-center"><a href="#">Prof. Surendra Pratap
                                Singh</a></h3>
                        <p class="text-center">(VICE-CHANCELLOR, LNMU)</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12
                        event-inner-area ">
                <div class="featured-box card">
                    <div class="featured-img-holder">
                        <img src="{{ 'home/images/pvc.jpeg' }}" class="img-responsive" alt="featured"
                            style="height:300px;width:300px;">
                    </div>
                    <div class="featured-content-holder">
                        <h3 class="text-center"><a href="#">Prof. Dolly Sinha</a>
                        </h3>
                        <p class="text-center">(PRO-VICE CHANCELLOR, LNMU)</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12
                        event-inner-area ">
                <div class="featured-box card">
                    <div class="featured-img-holder">
                        <img src="{{ asset('home/images/registrar.jpeg') }}" class="img-responsive" alt="featured"
                            style="height:300px;width:300px;">
                    </div>
                    <div class="featured-content-holder">
                        <h3 class="text-center"><a href="#">Prof. Mushtaque Ahmad</a>
                        </h3>
                        <p class="text-center">(REGISTRAR, LNMU)</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12
                        event-inner-area ">
                <div class="featured-box card">
                    <div class="featured-img-holder">
                        <img src="{{ asset('home/images/distance_education.jpeg') }}" class="img-responsive"
                            alt="featured" style="height:300px;width:300px;">
                    </div>
                    <div class="featured-content-holder">
                        <h3 class="text-center"><a href="#">Prof. Ashok Kumar
                                Mehta</a></h3>
                        <p class="text-center">(Director-DDE)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mentors Section end -->

    <!-- Event Section start -->
    <div class="container-fluid"
        style="background-image:url({{ asset('home/images/background.jpg') }}); background-size: cover; background-repeat: no-repeat;padding-bottom: 100px; padding-top:20px;">
        <h2 class="text-center text-effect" style="padding-bottom:20px;">Our
            Events</h2>
        <div
            class="swiffy-slider slider-item-reveal slider-item-reveal slider-item-show4 slider-nav-round slider-item-snapstart slider-nav-page">
            <ul class="slider-container">
                <li>
                    <div class="card border-0">
                        <div class="ratio ratio-1x1">
                            <img src="{{ asset('home/images/event/event1.jpg') }}" class="card-img-top" loading="lazy"
                                alt="...">
                        </div>
                        <div class="card-body p-0 pt-2">
                            <div class="d-flex text-center">
                                <h3 class="flex-grow-1">Event 1</h3>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card border-0">
                        <div class="ratio ratio-1x1">
                            <img src="{{ asset('home/images/event/event2.jpg') }}" class="card-img-top" loading="lazy"
                                alt="...">
                        </div>
                        <div class="card-body p-0 pt-2">
                            <div class="d-flex text-center">
                                <h3 class="flex-grow-1">Event 2</h3>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card border-0">
                        <div class="ratio ratio-1x1">
                            <img src="{{ asset('home/images/event/event3.jpg') }}" class="card-img-top" loading="lazy"
                                alt="...">
                        </div>
                        <div class="card-body p-0 pt-2">
                            <div class="d-flex text-center">
                                <h3 class="flex-grow-1">Event 3</h3>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card border-0">
                        <div class="ratio ratio-1x1">
                            <img src="{{ asset('home/images/event/event4.jpg') }}" class="card-img-top" loading="lazy"
                                alt="...">
                        </div>
                        <div class="card-body p-0 pt-2">
                            <div class="d-flex text-center">
                                <h3 class="flex-grow-1">Event 4</h3>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card border-0">
                        <div class="ratio ratio-1x1">
                            <img src="{{ asset('home/images/event/event5.jpg') }}" class="card-img-top" loading="lazy"
                                alt="...">
                        </div>
                        <div class="card-body p-0 pt-2">
                            <div class="d-flex text-center">
                                <h3 class="flex-grow-1">Event 5</h3>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card border-0">
                        <div class="ratio ratio-1x1">
                            <img src="{{ asset('home/images/event/event6.jpg') }}" class="card-img-top" loading="lazy"
                                alt="...">
                        </div>
                        <div class="card-body p-0 pt-2">
                            <div class="d-flex text-center">
                                <h3 class="flex-grow-1">Event 6</h3>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card border-0">
                        <div class="ratio ratio-1x1">
                            <img src="{{ asset('home/images/event/event7.jpg') }}" class="card-img-top" loading="lazy"
                                alt="...">
                        </div>
                        <div class="card-body p-0 pt-2">
                            <div class="d-flex text-center">
                                <h3 class="flex-grow-1">Event 7</h3>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card border-0">
                        <div class="ratio ratio-1x1">
                            <img src="{{ asset('home/images/event/event8.jpg') }}" class="card-img-top" loading="lazy"
                                alt="...">
                        </div>
                        <div class="card-body p-0 pt-2">
                            <div class="d-flex text-center">
                                <h3 class="flex-grow-1">Event 8</h3>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <button type="button" class="slider-nav" aria-label="Go
                    left"></button>
            <button type="button" class="slider-nav slider-nav-next" aria-label="Go left"></button>
        </div>
    </div>
    <!-- Event Section end -->
@endsection
