@extends('home.includes.layout')
@section('title', 'LNMUBED || Registrar')
@section('head-area')

@endsection
@section('content')

    <div class="inner-page-banner-area"
        style="background-image: url('{{ asset('home/FrontAssets/img/banner/vision-mission.jpg') }}');">
        <div class="container">
            <div class="pagination-area">
                <h1>Registrar</h1>
                <ul>
                    <li><a href="#">Home</a> -</li>
                    <li>Registrar</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="text-center text-effect">Registrar</h2>

        <div class="row" style="margin-top: 50px;">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="lecturers-contact-info">
                    <img src="{{ asset('home/images/registrar.jpeg') }}" class="img-responsive" alt="team">
                    <h2>Dr. Mushtaque Ahmad</h2>
                    <h3>Registrar (LNMU)</h3>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
                <h3 class="title-default-left title-bar-big-left-close">Message From Registrar</h3>
                <img src="{{ asset('home/images/registrar_msg.png') }}" />
            </div>
        </div>

    </div>

    <br /><br />

@endsection
