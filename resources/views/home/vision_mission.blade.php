@extends('home.includes.layout')
@section('title', 'LNMUBED || Vision & Mission')
@section('head-area')

@endsection
@section('content')

    <div class="inner-page-banner-area"
        style="background-image: url('{{ asset('home/FrontAssets/img/banner/vision-mission.jpg') }}');">
        <div class="container">
            <div class="pagination-area">
                <h1>Vision & Mission</h1>
                <ul>
                    <li><a href="#">Home</a> -</li>
                    <li>Vision & Mission</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="text-center text-effect">Vision & Mission</h2>

        <div class="row" style="margin-top: 50px;">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="lecturers-contact-info">
                    <img src="{{ asset('home/FrontAssets/img/team/vision.jpg') }}" class="img-responsive" alt="team">
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
                <p>
                    Our Vision and Mission mirror our endeavour to achieve the best in the field of Teacher Education. We commit ourselves to provide best experience to our prospective teachers throughout their stay in the Department and thus serving the society by providing dedicated and responsible teachers.
                </p>
                <h3 class="title-default-left title-bar-big-left-close">Our Vision</h3>
                <p>
                    Place ourselves among the best in the Colleges of Teacher Education focusing on the total personality development of the prospective teachers in line with our university motto of <b><i>atmava are drashtavya</i></b> aligning with the national vision of <b><i>Vishva guru Bharat</i></b></p>
                <h3 class="title-default-left title-bar-big-left-close">Our Mission</h3>
                <p>Endeavour to all round development of prospective teachers by creating learning environment and providing multi-faceted learning experiences leading to inculcation of our Constitutional values of equity, justice and fraternity. Adding to it, motivate to become lifelong learner.</p>
            </div>
        </div>

    </div>

    <br /><br />

@endsection
