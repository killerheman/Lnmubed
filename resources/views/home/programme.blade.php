@extends('home.includes.layout')
@section('title', 'LNMUBED || Programme/Courses')
@section('head-area')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        a:hover,
        a:focus {
            outline: none;
            text-decoration: none;
        }

        #accordion .panel {
            border-radius: 0;
            margin-bottom: 15px;
        }

        #accordion .panel-heading {
            padding: 0;
        }

        #accordion .panel-title {
            position: relative;
        }

        #accordion .panel-title:before {
            content: "";
            border-bottom: 25px solid rgba(0, 0, 0, 0);
            border-left: 15px solid #eee;
            border-top: 23px solid rgba(0, 0, 0, 0);
            width: 0;
            height: 0;
            position: absolute;
            top: 0;
            left: 34px;
        }

        #accordion .panel-title a {
            color: #fff;
            background: #e63c22;
            display: block;
            font-size: 16px;
            line-height: 21px;
            font-weight: bold;
            text-transform: uppercase;
            padding: 13px 10px 13px 65px;
        }

        #accordion .panel-title a.collapsed {
            color: #5b5656;
            background: #fff;
        }

        #accordion .panel-title a:before,
        #accordion .panel-title a.collapsed:before {
            content: "\f068";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            position: absolute;
            top: 0;
            left: 0px;
            padding: 14px 10px;
            color: #e63c22;
            background: #eee;
        }

        #accordion .panel-title a.collapsed:before {
            content: "\f067";
        }

        #accordion .panel-body {
            color: #828282;
            font-size: 14px;
            line-height: 26px;
        }
    </style>
@endsection
@section('content')

    <div class="inner-page-banner-area"
        style="background-image: url('{{ asset('home/FrontAssets/img/banner/about-us.jpg') }}');">
        <div class="container">
            <div class="pagination-area">
                <h1>Programmes/Courses</h1>
                <ul>
                    <li><a href="#">Home</a> -</li>
                    <li>Programme/Courses</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Doctoral Programmes
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                            aria-labelledby="headingOne">
                            <div class="panel-body">
                               <ul >
                                    <li><a href="#">Demo</a></li>
                                    <li><a href="#">Demo</a></li>
                                    <li><a href="#">Demo</a></li>
                               </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    PG Programmes
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <ul >
                                     <li><a href="#">Demo</a></li>
                                     <li><a href="#">Demo</a></li>
                                     <li><a href="#">Demo</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    UG Programmes
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree">
                            <div class="panel-body">
                                <ul>
                                     <li><a href="#">Demo</a></li>
                                     <li><a href="#">Demo</a></li>
                                     <li><a href="#">Demo</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br /><br />

@endsection
