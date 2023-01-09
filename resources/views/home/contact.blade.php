@extends('home.includes.layout')
@section('title', 'LNMUBED || Contact Us')
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

<div class="inner-page-banner-area" style="background-image: url('{{ asset('home/FrontAssets/img/banner/about-us.jpg') }}');">
    <div class="container">
        <div class="pagination-area">
            <h1>Contact Campus</h1>
            <ul>
                <li><a href="#">Home</a> -</li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <h2 class="text-center text-effect">Contact Campus</h2>
    <div class="row text-justify" style="margin-top: 50px;">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                <div class="card-body ml-5">
                    <form action="{{route('contactStore')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-5">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="col-md-5">
                                <label for="mobile" class="form-label">Mobile</label>
                                <input type="text" class="form-control" id="mobile" name="mobile">
                            </div>
                            <div class="col-md-10">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="col-md-10">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" name="message" placeholder="Message a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            </div>
                        </div><br>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <!-- <img src="{{ asset('home/images/bed_building.jpg') }}" /> -->
            <li class="">


                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14324.385511317501!2d85.8958245!3d26.1609905!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3b6113d300867bf0!2sLalit%20Narayan%20Mithila%20University!5e0!3m2!1sen!2sin!4v1669435621926!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </li>
        </div>

    </div>
</div>

<br /><br />

@endsection