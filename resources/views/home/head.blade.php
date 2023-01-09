@extends('home.includes.layout')
@section('title', 'LNMUBED || Head')
@section('head-area')

@endsection
@section('content')

    <div class="inner-page-banner-area"
        style="background-image: url('{{ asset('home/FrontAssets/img/banner/vision-mission.jpg') }}');">
        <div class="container">
            <div class="pagination-area">
                <h1>Head</h1>
                <ul>
                    <li><a href="#">Home</a> -</li>
                    <li>Head</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="text-center text-effect">Head</h2>

        <div class="row" style="margin-top: 50px;">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="lecturers-contact-info">
            <img src="{{ asset('home/images/headbed.jpg')}}" class="img-responsive" alt="team">
            <h2>Dr. Arvind Kumar Milan</h2>
            <h3>Head</h3>
            </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
            <h3 class="title-default-left title-bar-big-left-close">विभागाध्यक्ष की कलम से……</h3>
            <p>बी.एड. (नियमित) की स्थापना के दस वर्ष पूरा होने पर गौरवान्वित महसूस कर रहा हूँ । इसकी स्थापना (2012) के साथ से ही विभागाध्यक्ष रहा हूँ और इसके उत्तरोत्तर विकास का साक्षी हूँ । विभाग के योग्य एवं कर्मठ संकाय सदस्यों एवं शिक्षकेत्तर कर्मियों की सक्रिय सहभागिता से उस मुकाम तक पहुंचना संभव हो सका है जहाँ, हम कह सकें कि हम बिहार के श्रेष्ठ अध्यापक शिक्षण संस्थानों में से एक हैं ।
                छात्र-शिक्षक सम्बन्ध इस संस्थान की विशेषता रही है । यहाँ से उत्तीर्ण छात्र-छात्राएं शिक्षण के क्षेत्र में अपनी पहचान बना रहे हैं, यह हमें पुरस्कृत होने जैसी अनुभूति प्रदान करता है । भविष्य में भी संकाय सदस्य, शिक्षकेत्तर कर्मी एवं छात्र-छात्राएं विभाग के विकास के वाहक रहेंगे, इन्हीं अपेक्षाओं के साथ ....
                </p>
            </div>
            </div>

    </div>

    <br /><br />

@endsection
