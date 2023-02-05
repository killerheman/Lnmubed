@extends('home.includes.layout')
@section('title', 'LNMUBED || Faculties')
@section('head-area')
<style>
.box{
    font-family: 'Raleway', sans-serif;
    position: relative;
    text-align: center;
    overflow: hidden;
}
.box:before{
    content: "";
    background: linear-gradient(to right,#2c89d4,#055ea7);
    width: 100%;
    height: 100%;
    opacity: 0.75;
    transform: scale(0);
    position: absolute;
    left: 0;
    bottom: 0;
    z-index: 1;
    transition: all 0.3s ease-in-out;
}
.box:hover:before{ transform: scale(1); }
.box img{
    width: 100%;
    height: auto;
    transition: all 0.5s ease 0s;
}
.box:hover img{ transform: rotate(-8deg) scale(1.2); }
.box .box-content{
    color: #055ea7;
    background: rgba(255, 255, 255, 0.48);
    width: 100%;
    padding: 15px;
    box-shadow: 0 0 10px rgba(0,0,0,.2);
    opacity: 0;
    transform: translateX(-50%) translateY(-50%);
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 1;
    transition: all 0.8s;
}
.box:hover .box-content{
    border-radius: 70px 0;
    opacity: 1;
}
.box .title{
    color: #fff;
    font-size: 22px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin: 0 0 4px;
    text-shadow: 0 0 7px rgba(0,0,0,0.5);
}
.box .post{
    font-size: 14px;
    font-weight: 300;
    letter-spacing: 1px;
    text-transform: capitalize;
    margin: 0 0 10px;
    display: block;
}
.box .icon{
    padding: 0;
    margin: 0;
    list-style: none;
}
.box .icon li{
    margin: 0 3px;
    display: inline-block;
}
.box .icon li a{
    color: #fff;
    font-size: 16px;
    line-height: 32px;
    height: 35px;
    width: 35px;
    border: 2px solid #fff;
    border-radius: 10px;
    display: block;
    transition: all 0.3s;
}
.box .icon li a:hover{
    color: #055ea7;
    background-color: #fff;
}
@media only screen and (max-width:990px){
    .box{ margin: 0 0 30px; }
}
</style>
@endsection
@section('content')

<div class="inner-page-banner-area" style="background-image: url('{{ asset('home/FrontAssets/img/banner/about-us.jpg') }}');">
    <div class="container">
        <div class="pagination-area">
            <h1>Faculties</h1>
            <ul>
                <li><a href="#">Home</a> -</li>
                <li>Faculties</li>
            </ul>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 50px;">
    <div class="row" style="margin-bottom: 50px;">
        <div class="col-md-3 col-sm-6 ">
            <div class="box">
                <img src="{{ asset('home/images/headbed.jpg') }}">
                <div class="box-content">
                    <h3 class="title">Dr. Arvind Kumar Milan</h3>
                    <span class="post">Head</span>
                </div>
            </div>
            <div class="text-center">
                <h3 class="title">Dr. Arvind Kumar Milan</h3>
                <span style="font-size: 20px;">Head</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="box">
                <img src="{{ asset('home/images/user.jpg') }}">
                <div class="box-content">
                    <h3 class="title">Dr. Nidhi Vatsa</h3>
                    <span class="post">Assistant Professor</span>
                </div>
            </div>
            <div class="text-center">
                <h3 class="title">Dr. Nidhi Vatsa</h3>
                <span style="font-size: 20px;">Assistant Professor</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="box">
                <img src="{{ asset('home/images/user.jpg') }}">
                <div class="box-content">
                    <h3 class="title">Dr. Shubhra</h3>
                    <span class="post">Assistant Professor</span>
                </div>
            </div>
            <div class="text-center">
                <h3 class="title">Dr. Shubhra</h3>
                <span style="font-size: 20px;">Assistant Professor</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="box">
                <img src="{{ asset('home/images/user.jpg') }}">
                <div class="box-content">
                    <h3 class="title">Dr. Kumari Swarn Rekha</h3>
                    <span class="post">Assistant Professor</span>
                </div>
            </div>
            <div class="text-center">
                <h3 class="title">Dr. Kumari Swarn Rekha</h3>
                <span style="font-size: 20px;">Assistant Professor</span>
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom: 50px;">
        <div class="col-md-3 col-sm-6 ">
            <div class="box">
                <img src="{{ asset('home/images/user.jpg') }}">
                <div class="box-content">
                    <h3 class="title">Mr. Uday Kumar</h3>
                    <span class="post">Assistant Professor</span>
                </div>
            </div>
            <div class="text-center">
                <h3 class="title">Mr. Uday Kumar</h3>
                <span style="font-size: 20px;">Assistant Professor</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="box">
                <img src="{{ asset('home/images/user.jpg') }}">
                <div class="box-content">
                    <h3 class="title">Mr. Kumar Satyam</h3>
                    <span class="post">Assistant Professor</span>
                </div>
            </div>
            <div class="text-center">
                <h3 class="title">Mr. Kumar Satyam</h3>
                <span style="font-size: 20px;">Assistant Professor</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="box">
                <img src="{{ asset('home/images/user.jpg') }}">
                <div class="box-content">
                    <h3 class="title">Dr. Mirza Ruhullah Baig</h3>
                    <span class="post">Assistant Professor</span>
                </div>
            </div>
            <div class="text-center">
                <h3 class="title">Dr. Mirza Ruhullah Baig</h3>
                <span style="font-size: 20px;">Assistant Professor</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="box">
                <img src="{{ asset('home/images/user.jpg') }}">
                <div class="box-content">
                    <h3 class="title">Mr. Govind Kumar</h3>
                    <span class="post">Assistant Professor</span>
                </div>
            </div>
            <div class="text-center">
                <h3 class="title">Mr. Govind Kumar</h3>
                <span style="font-size: 20px;">Assistant Professor</span>
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom: 50px;">
        <div class="col-md-3 col-sm-6 ">
            <div class="box">
                <img src="{{ asset('home/images/user.jpg') }}">
                <div class="box-content">
                    <h3 class="title">Dr. Jai Shanker Singh</h3>
                    <span class="post">Assistant Professor</span>
                </div>
            </div>
            <div class="text-center">
                <h3 class="title">Dr. Jai Shanker Singh</h3>
                <span style="font-size: 20px;">Assistant Professor</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="box">
                <img src="{{ asset('home/images/user.jpg') }}">
                <div class="box-content">
                    <h3 class="title">Dr. Reshma Tabassum</h3>
                    <span class="post">Assistant Professor</span>
                </div>
            </div>
            <div class="text-center">
                <h3 class="title">Dr. Reshma Tabassum</h3>
                <span style="font-size: 20px;">Assistant Professor</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="box">
                <img src="{{ asset('home/images/user.jpg') }}">
                <div class="box-content">
                    <h3 class="title">Ms. Kiran Kumari</h3>
                    <span class="post">Assistant Professor</span>
                </div>
            </div>
            <div class="text-center">
                <h3 class="title">Ms. Kiran Kumari</h3>
                <span style="font-size: 20px;">Assistant Professor</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="box">
                <img src="{{ asset('home/images/user.jpg') }}">
                <div class="box-content">
                    <h3 class="title">Mr. Prasenjit Roy</h3>
                    <span class="post">Assistant Professor</span>
                </div>
            </div>
            <div class="text-center">
                <h3 class="title">Mr. Prasenjit Roy</h3>
                <span style="font-size: 20px;">Assistant Professor</span>
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom: 50px;">
        <div class="col-md-3 col-sm-6 ">
            <div class="box">
                <img src="{{ asset('home/images/user.jpg') }}">
                <div class="box-content">
                    <h3 class="title">Dr. Kumari Babita Rani</h3>
                    <span class="post">Assistant Professor</span>
                </div>
            </div>
            <div class="text-center">
                <h3 class="title">Dr. Kumari Babita Rani</h3>
                <span style="font-size: 20px;">Assistant Professor</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="box">
                <img src="{{ asset('home/images/user.jpg') }}">
                <div class="box-content">
                    <h3 class="title">Mr. Sunil Kumar Gupta</h3>
                    <span class="post">Assistant Professor</span>
                </div>
            </div>
            <div class="text-center">
                <h3 class="title">Mr. Sunil Kumar Gupta</h3>
                <span style="font-size: 20px;">Assistant Professor</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="box">
                <img src="{{ asset('home/images/user.jpg') }}">
                <div class="box-content">
                    <h3 class="title">Mr. Raju Kumar</h3>
                    <span class="post">Assistant Professor</span>
                </div>
            </div>
            <div class="text-center">
                <h3 class="title">Mr. Raju Kumar</h3>
                <span style="font-size: 20px;">Assistant Professor</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="box">
                <img src="{{ asset('home/images/user.jpg') }}">
                <div class="box-content">
                    <h3 class="title">Mr. Subhag Lal Das</h3>
                    <span class="post">Assistant Professor</span>
                </div>
            </div>
            <div class="text-center">
                <h3 class="title">Mr. Subhag Lal Das</h3>
                <span style="font-size: 20px;">Assistant Professor</span>
            </div>
        </div>
    </div>
</div>

<br /><br />

@endsection
