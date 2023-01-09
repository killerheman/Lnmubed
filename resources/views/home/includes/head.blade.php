<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="theme-color" content="#C00404" />
<link rel="shortlink" href="index.html" />
<meta name="description"
    content="Indian Institute of Technology Madras
            is Best Institute for higher education in India. It is a public
            technical and research university located in Chennai" />
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="{{ asset('home/themes/custom/iitm/assets/images/logo.png') }}"
    type="image/vnd.microsoft.icon" />
<link rel="revision" href="https://www.iitm.ac.in/home" />
<title>@yield('title')</title>
<link rel="canonical" href="https://iitm.ac.in" />
<link rel="stylesheet"
    href="{{ asset('home/sites/default/files/css/css_KKvfRYpPC4wAWVzsQfpgLWa9fG1BekRjuQ8tad6w27k.css') }}" />
<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('home/sites/default/files/css/css_n6hVBduWgAxICcsGxvIzSvZhceP_ZhFFIoD543nQxIY.css') }}" />
<link rel="stylesheet" href="{{ asset('home/css/style.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap"
    rel="stylesheet" />
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css" rel="stylesheet">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<style>
    .btn3 {
        color: #fff;
        background: linear-gradient(to left top, #7c0000bf 50%, #7C0000 50%);
        font-family: 'Montserrat', sans-serif;
        font-size: 25px;
        font-weight: 700;
        text-transform: capitalize;
        letter-spacing: 1px;
        border-radius: 0;
        box-shadow: 0px 6px 2px rgba(0, 0, 0, .2);
        padding: 20px 25px;
        overflow: hidden;
        position: relative;
        transition: all .5s ease 0s;
    }

    .btn3:focus {
        color: #fff;
    }

    .btn3:hover {
        color: #fff;
        box-shadow: 0px 3px 5px rgba(0, 0, 0, .4);
        transform: rotate(-3deg) scale(1.1);
    }

    .btn3:before,
    .btn3:after,
    .btn3 span:before,
    .btn3 span:after {
        content: "";
        background: linear-gradient(to right, rgba(0, 0, 0, 0), #f6e58d);
        width: 100%;
        height: 3px;
        position: absolute;
        top: 0;
        left: 0;
        animation: animate1 2s linear infinite;
        animation-delay: 1s;
        transition: all 0.3s;
    }

    .btn3:after {
        background: linear-gradient(to left, rgba(0, 0, 0, 0), #f6e58d);
        top: auto;
        bottom: 0;
        left: auto;
        right: 0;
        animation: animate3 2s linear infinite;
        animation-delay: 3s;
    }

    .btn3 span:before {
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0), #f6e58d);
        width: 3px;
        height: 100%;
        left: auto;
        right: 0;
        animation: animate2 2s linear infinite;
        animation-delay: 2s;
    }

    .btn3 span:after {
        background: linear-gradient(to top, rgba(0, 0, 0, 0), #f6e58d);
        width: 3px;
        height: 100%;
        animation: animate4 2s linear infinite;
        animation-delay: 4s;
    }

    .btn3:hover:before,
    .btn3:hover:after,
    .btn3:hover span:before,
    .btn3:hover span:after {
        animation-play-state: paused;
    }

    @keyframes animate1 {
        0% {
            transform: translateX(-100%);
        }

        100% {
            transform: translateX(100%);
        }
    }

    @keyframes animate2 {
        0% {
            transform: translateY(-100%);
        }

        100% {
            transform: translateY(100%);
        }
    }

    @keyframes animate3 {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    @keyframes animate4 {
        0% {
            transform: translateY(100%);
        }

        100% {
            transform: translateY(-100%);
        }
    }

    @media only screen and (max-width: 767px) {
        .btn3 {
            margin-bottom: 30px;
        }
    }
</style>
