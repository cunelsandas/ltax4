<!DOCTYPE html>
<html lang="en">
<head>
    <title>ระบบภาษี</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">

    <style>
        * {
            font-size: 10px;
            font-family: "THSarabunNew", sans-serif;
        }

        body {
            background: linear-gradient(to bottom right, #5533ff, #38e2ee);
            background-size: cover;
            background-repeat: no-repeat;
            min-height: 100vh;
            position: relative;

        }

        .main-contain {
            display: flex;
            flex-direction: column;
            justify-content: center;
            max-width: 180rem;
            margin: auto;
        }

        h1 {
            font-size: 6rem;
            padding: 1rem;
            text-align: center;
            color: white;
            font-weight: 500;
            margin: 5rem 0 0 0;
        }

        button {
            border: none;
            text-decoration: none;
            color: rgba(255, 255, 255, 0.95);
            cursor: pointer;
        }

        .div {
            padding-top: 50px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            text-align: center;
            position: relative;
            max-width: 1200px;
            margin: auto;
        }

        .psuedo-text {
            color: #5533ff;
            position: relative;
            top: 0;
            height: 100%;
            width: 100%;
            display: inline;
            height: auto;
            font-size: 1.7rem;
            font-size: 700;
            transition: 0.25s ease-in;
            transition-delay: 0.1s;
        }

        .flex-1 {
            flex: 1;
            min-width: 250px;
            margin: 0 auto 50px;
        }

        .button {
            padding: 2rem 7rem;
            background: white;
            text-align: center;
            display: inline-block;
            font-size: 1.7rem;
            text-transform: uppercase;
            font-weight: 700;
            position: relative;
            will-change: transform;
        }

        .button-mat {
            color: #5533ff;
            border: 0px transparent;
            border-radius: 0.3rem;
            transition: 0.3s ease-in-out;
            transition-delay: 0.35s;
            overflow: hidden;
        }

        .button-mat:before {
            content: "";
            display: block;
            background: #401aff;
            position: absolute;
            width: 200%;
            height: 500%;
            border-radius: 100%;
            transition: 0.36s cubic-bezier(0.4, 0, 1, 1);
        }

        .button-mat:hover .psuedo-text {
            color: white;
        }

        .button-mat:hover {
            color: transparent;
        }

        .btn-1 {
            letter-spacing: 0.05rem;
            transition: 0.5s all ease-in-out;
            position: relative;
            background: transparent;
        }

        .btn-1:before {
            border-top: 0.3rem solid white;
            border-bottom: 0.3rem solid white;
            display: block;
            position: absolute;
            background: transparent;
            content: "";
            top: 0;
            bottom: 0;
            left: 100%;
            right: 100%;
            transition: 0.48s all ease-in-out;
        }

        .btn-1:hover {
            letter-spacing: 0.4rem;
        }

        .btn-1:hover:before {
            left: 25%;
            right: 25%;
        }

        .btn-2 {
            letter-spacing: 0.05rem;
            position: relative;
            background: white;
            color: #401aff;
            border-radius: 0.3rem;
            position: relative;
            transition: 0.2s all ease-in-out;
        }

        .btn-2:before {
            display: block;
            position: absolute;
            background: transparent;
            border: none;
            border-radius: 0.3rem;
            transform: translateY(5px) scale(0.9);
            content: "";
            height: 5px;
            z-index: -1;
            bottom: -1%;
            left: 0;
            right: 0;
            transition: 0.2s all ease-in-out;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
        }

        .btn-2:hover:before {
            transform: translateY(8px) scale(0.8);
            opacity: 0.8;
            box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgba(0, 0, 0, 0.22);
        }

        .btn-2:hover {
            transform: translateY(-5px);
        }

        .btn-3 {
            letter-spacing: 0.05rem;
            position: relative;
            background: white;
            color: #401aff;
            overflow: hidden;
            transition: 0.3s ease-in-out;
            border-radius: 0.3rem;
            z-index: 1;
            box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgba(0, 0, 0, 0.22);
        }

        .btn-3:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
            transform: scale(0.95);
        }

        .btn-4 {
            background: rgba(0, 0, 0, 0.1);
            box-shadow: 0px 0px 0px 5px rgba(255, 255, 255, 0.95);
            border: 1px solid white;
            transition: 0.3s all ease-in-out;
        }

        .btn-4:hover {
            background: rgba(0, 0, 0, 0.2);
            box-shadow: 0px 0px 10px 5px rgba(255, 255, 255, 0.85);
        }

        .btn--5 {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }

        .btn--5:before {
            transform: translate(-120%, -50%) translateZ(0);
        }

        .btn--5:hover:before {
            transform: translate(-45%, -34%) translateZ(0);
        }

        .btn--6 {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }

        .btn--6:before {
            transform: translate(40%, -50%) translateZ(0);
        }

        .btn--6:hover:before {
            transform: translate(-45%, -34%) translateZ(0);
        }

        .btn--7 {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }

        .btn--7:before {
            transform: translate(-110%, -110%) translateZ(0);
        }

        .btn--7:hover:before {
            transform: translate(-45%, -34%) translateZ(0);
        }

        .btn--8 {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }

        .btn--8:before {
            transform: translate(30%, 10%) translateZ(0);
        }

        .btn--8:hover:before {
            transform: translate(-45%, -34%) translateZ(0);
        }

    </style>
</head>
<body>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v9.0'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/th_TH/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="794165887337371"
     theme_color="#0A7CFF"
     logged_in_greeting="สอบถามสินค้าและบริการ 053-441700 / 086-4314547 Line : itglobal"
     logged_out_greeting="สอบถามสินค้าและบริการ 053-441700 / 086-4314547 Line : itglobal">
</div>
<div style="margin-right: 1%;margin-top: 1%">
    <a href="dashboards">
        <button class='btn btn-warning pull-right'>
            <i class="fa fa-user-circle-o" aria-hidden="true"></i> ผู้ดูแลระบบ
        </button>
    </a>
</div>
<div class="main-contain"></div>
<h1>ระบบภาษี
    <div class="div">
        <div class="flex-1">
            <a href="{{route('land')}}">
                <button class="button btn-2">เช็คภาษีที่ดินและสิ่งปลูกสร้าง</button>
            </a>
        </div>
        <div class="flex-1">
            <a href="{{route('condo')}}">
                <button class="button btn-2">เช็คภาษีคอนโดมิเนียม</button>
            </a>
        </div>
        <div class="flex-1">
            <a href="{{route('sign')}}">
                <button class="button btn-2">เช็คภาษีป้าย</button>
            </a>
        </div>
    </div>

    {{--    <div class="col-12">--}}
    {{--    <img class="img-fluid" src="{{ asset('image/poster_index.jpg') }}">--}}
    {{--    </div>--}}

    <div class="container">
        {{--        <h2>Carousel Example</h2>--}}
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{ asset('image/poster_index.jpg') }}" alt="Los Angeles" style="width:100%;">
                </div>

                <div class="item">
                    <img src="{{ asset('image/poster_index.jpg') }}" alt="Chicago" style="width:100%;">
                </div>

                <div class="item">
                    <img src="{{ asset('image/poster_index.jpg') }}" alt="New york" style="width:100%;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</h1>
</body>
</html>
