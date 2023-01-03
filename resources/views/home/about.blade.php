@extends('home.includes.layout')
@section('title', 'LNMUBED || About Us')
@section('head-area')
    <style>
        /* .inner-page-banner-area {
                    margin-top: 92px;
                } */

        @media only screen and (max-width: 989px) {
            .inner-page-banner-area {
                margin-top: 32px;
                background-size: cover;
                padding: 16px 10px;
            }
        }
    </style>
@endsection
@section('content')

    <div class="inner-page-banner-area"
        style="background-image: url('{{ asset('home/FrontAssets/img/banner/about-us.jpg') }}');">
        <div class="container">
            <div class="pagination-area">
                <h1>About Campus</h1>
                <ul>
                    <li><a href="#">Home</a> -</li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="text-center text-effect">About Campus</h2>
        <div class="row text-justify" style="margin-top: 50px;">
            <div class="col-sm-8">
                <p class="sub-title-full-width">B.Ed. (Regular) course was started by the Directorate of Distance Education,
                    L. N. Mithila University, Darbhanga in 2012 with due approval from Lalit Narayan Mithila University and
                    recognition by the apex body of Teacher Education, the National Council for Teacher Education (NCTE),
                    Ministry of Human Resource Development, Government of India, New Delhi.
                    B.Ed. (Regular) has intake capacity of one hundred (100). Fee structure of the B.Ed. (Regular) programme
                    is monitored by the L. N. Mithila University and Government of Bihar. Currently B.Ed. (Regular)
                    programme fee is Rs. 1,50,000/- for two-year course excluding university examination fee.
                    The uniqueness of the B.Ed. (Regular) is its practicum based and experiential learning. To guide such
                    instruction, there are qualified, experienced and innovative teachers. It’s the dedication,
                    innovativeness of faculty which have established it as one of the premier institutions for B.Ed. in the
                    state of Bihar.
                </p>
            </div>
            <div class="col-sm-4">
                <img src="{{ asset('home/images/bed_building.jpg') }}"  />
            </div>

        </div>
    </div>

    <br /><br />

@endsection
