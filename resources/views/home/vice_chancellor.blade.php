@extends('home.includes.layout')
@section('title', 'LNMUBED || Vice-Chancellor')
@section('head-area')

@endsection
@section('content')

    <div class="inner-page-banner-area"
        style="background-image: url('{{ asset('home/FrontAssets/img/banner/vision-mission.jpg') }}');">
        <div class="container">
            <div class="pagination-area">
                <h1>Vice-Chancellor</h1>
                <ul>
                    <li><a href="#">Home</a> -</li>
                    <li>Vice-Chancellor</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="text-center text-effect">Vice-Chancellor</h2>

        <div class="row" style="margin-top: 50px;">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="lecturers-contact-info">
            <img src="{{ asset('home/images/vc.jpeg')}}" class="img-responsive" alt="team">
            <h2>Prof. Surendra Pratap Singh</h2>
            <h3>Vice-Chancellor (LNMU)</h3>
            </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
            <h3 class="title-default-left title-bar-big-left-close">Message From Vice-Chancellor</h3>
            <p>It gives me great pleasure to share that the B.Ed. (Regular) Department has completed ten glorious years of its service to the society. Over the years the institution hastraversed a remarkable journey studded with numerous achievements in the fields of teachers' education. This institution has a unique privilege of being a centre located in the campus of the University Headquarter—Kameshwaranagar, Darbhanga. Its responsibility therefore, enhances Apart from conducting teacher training programmes, it must endeavour in future to conduct orientation programmes, content enrichment programmes, workshops, seminars and research projects on thrust areas of content preparation and transaction. On this occasion I congratulate all those members of the B.Ed. (Regular) family who have contributed to the growth and glory of the institution over the years and wish all the best.</p>
            </div>
            </div>

    </div>

    <br /><br />

@endsection
