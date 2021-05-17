@extends('dashboard.base')

@section('content')

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
        .wrimagecard{
            margin-top: 0;
            margin-bottom: 1.5rem;
            text-align: left;
            position: relative;
            background: #fff;
            box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        .wrimagecard .fa{
            position: relative;
            font-size: 70px;
        }
        .wrimagecard-topimage_header{
            padding: 20px;
        }
        a.wrimagecard:hover, .wrimagecard-topimage:hover {
            box-shadow: 2px 4px 8px 0px rgba(46,61,73,0.2);
        }
        .wrimagecard-topimage a {
            width: 100%;
            height: 100%;
            display: block;
        }
        .wrimagecard-topimage_title {
            padding: 20px 24px;
            height: 120px;
            padding-bottom: 0.75rem;
            position: relative;
        }
        .wrimagecard-topimage a {
            border-bottom: none;
            text-decoration: none;
            color: #525c65;
            transition: color 0.3s ease;
        }

        /* -- usable codes start -- */

        html,
        body,
        div,
        span,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        code,
        del,
        dfn,
        em,
        img,
        q,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        dialog,
        figure,
        footer,
        header,
        hgroup,
        nav,
        section {
            margin: 0;
            padding: 0;
            border: 0;
            vertical-align: baseline;
            text-decoration: none;
            list-style: none;
        }
        img {
            width: 100%
        }
        .anim04c {
            -webkit-transition: all .4s cubic-bezier(.5, .35, .15, 1.4);
            transition: all .4s cubic-bezier(.5, .35, .15, 1.4);
        }

        html,
        body {

        }
        body {
            overflow-x: hidden;
            overflow-y: auto;
        }
        /*-----*/

        .outer {
            position: relative;
            top: 50%;
            z-index: 1;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            cursor: pointer;
        }
        /*-----*/

        .signboard {
            width: 100px;
            height: 100px;
            margin: auto;
            color: #fff;
            border-radius: 10px;
        }
        /*-----*/

        .front {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 3;
            background: #ff726b;
            text-align: center;
        }
        .right1 {
            position: absolute;
            right: : 0;
            z-index: 2;
            -webkit-transform: rotate(-10deg) translate(7px, 8px);
            -moz-transform: rotate(-10deg) translate(7px, 8px);
            -ms-transform: rotate(-10deg) translate(7px, 8px);
            -o-transform: rotate(-10deg) translate(7px, 8px);
            transform: rotate(-10deg) translate(7px, 8px);
            background: #EFC94C;
        }
        .left {
            position: absolute;
            left: 0;
            z-index: 1;
            -webkit-transform: rotate(5deg) translate(-4px, 4px);
            -moz-transform: rotate(5deg) translate(-4px, 4px);
            -ms-transform: rotate(5deg) translate(-4px, 4px);
            -o-transform: rotate(5deg) translate(-4px, 4px);
            transform: rotate(5deg) translate(-4px, 4px);
            background: #3498DB;
        }
        /*-----*/

        .outer:hover .inner {
            -webkit-transform: rotate(0) translate(0);
            -moz-transform: rotate(0) translate(0);
            -ms-transform: rotate(0) translate(0);
            -o-transform: rotate(0) translate(0);
            transform: rotate(0) translate(0);
        }
        /*-----*/

        .outer:active .inner {
            -webkit-transform: rotate(0) translate(0) scale(0.9);
            -moz-transform: rotate(0) translate(0) scale(0.9);
            -ms-transform: rotate(0) translate(0) scale(0.9);
            -o-transform: rotate(0) translate(0) scale(0.9);
            transform: rotate(0) translate(0) scale(0.9);
        }
        .outer:active .front .date {
            -webkit-transform: scale(2);
        }
        .outer:active .front .day,
        .outer:active .front .month {
            visibility: hidden;
            opacity: 0;
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
        }
        .outer:active .right1 {
            -webkit-transform: rotate(-5deg) translateX(80px) scale(0.9);
            -moz-transform: rotate(-5deg) translateX(80px) scale(0.9);
            -ms-transform: rotate(-5deg) translateX(80px) scale(0.9);
            -o-transform: rotate(-5deg) translateX(80px) scale(0.9);
            transform: rotate(-5deg) translateX(80px) scale(0.9);
        }
        .outer:active .left {
            -webkit-transform: rotate(5deg) translateX(-80px) scale(0.9);
            -moz-transform: rotate(5deg) translateX(-80px) scale(0.9);
            -ms-transform: rotate(5deg) translateX(-80px) scale(0.9);
            -o-transform: rotate(5deg) translateX(-80px) scale(0.9);
            transform: rotate(5deg) translateX(-80px) scale(0.9);
        }
        /*-----*/

        .outer:active .calendarMain {
            -webkit-transform: scale(1.8);
            opacity: 0;
            visibility: hidden;
        }
        .outer:active .clock {
            -webkit-transform: scale(1.4);
            opacity: 1;
            visibility: visible;
        }
        .outer:active .calendarNormal {
            bottom: -30px;
            opacity: 1;
            visibility: visible;
        }
        .outer:active .year {
            top: -30px;
            opacity: 1;
            visibility: visible;
            letter-spacing: 3px;
        }
        /*-----*/

        .calendarMain {
            width: 100%;
            height: 100%;
            position: absolute;
            opacity: 1;
        }
        .month,
        .day {
            font-size: 10px;
            line-height: 30px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 3px;
        }
        .date {
            font-size: 40px;
            line-height: 40px;
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 3px;
        }
        /*-----*/

        .clock {
            width: 100%;
            height: 100%;
            position: absolute;
            font-size: 40px;
            line-height: 100px;
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 3px;
            text-align: center;
            opacity: 0;
            visibility: hidden;
        }
        /*-----*/

        .year {
            width: 100%;
            position: absolute;
            top: 0;
            font-size: 14px;
            line-height: 30px;
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 0;
            text-align: center;
            opacity: 0;
            visibility: hidden;
            color: #ff726b;
        }
        .calendarNormal {
            width: 100%;
            position: absolute;
            bottom: 0;
            font-size: 14px;
            line-height: 30px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 3px;
            text-align: center;
            opacity: 0;
            visibility: hidden;
        }
        .date2 {
            color: #ff726b;
        }
        .day2 {
            color: #3498DB;
        }
        .month2 {
            color: #EFC94C;
        }
        /* -- usable codes end -- */

        /* -- unusable codes (text, logo, etc.) -- */

        .info {
            width: 100%;
            height: 25%;
            position: absolute;
            top: 15%;
            text-align: center;
            opacity: 0;
        }
        .info li {
            width: 100%;
        }
        .hover,
        .click,
        .yeaa {
            font-size: 14px;
            line-height: 25px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-align: center;
            bottom: 0;
            opacity: 1;
        }
        .dribbble {
            position: absolute;
            top: -60px;
            font-size: 14px;
            opacity: 0;
        }
        em {
            color: #ed4988;
        }
        .designer {
            width: 100%;
            height: 50%;
            position: absolute;
            bottom: 0;
            text-align: center;
            opacity: 0;
        }
        .designer li {
            width: 100%;
            position: absolute;
            bottom: 30%;
        }
        .designer a {
            width: 30px;
            height: 30px;
            display: block;
            position: relative;
            border-radius: 100%;
            margin: auto;
            color: rgba(46, 204, 113, 0.55);
        }
        .designer a:after {
            content: "see designs";
            position: absolute;
            top: 0;
            left: 40px;
            font-size: 14px;
            line-height: 33px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            white-space: nowrap;
        }
        .designer a:hover:after {
            color: #2ecc71;
        }
        .designer img {
            display: block;
            border-radius: 100%;
        }
        body:hover .info,
        body:hover .designer {
            opacity: 1;
        }
        ::selection {
            background: transparent;
        }
        ::-moz-selection {
            background: transparent;
        }

        /* -moz-selection  diable ctrl+a   */

    </style>




    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        //owner TYPE

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {'packages':['corechart']});

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart);

        // Callback that creates and populates a data table,
        // instantiates the pie chart, passes in the data and
        // draws it.
        function drawChart() {

            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows([
                ['นิติบุคคล', {{$ownerDataType2}}],
                ['รัฐวิสาหกิจ', {{$ownerDataType3}}],
                ['ราชการ', {{$ownerDataType4}}],
                ['สมาคม', {{$ownerDataType5}}],
                ['มูลนิธิ', {{$ownerDataType6}}],
                ['วัด/ศาสนา', {{$ownerDataType7}}],
                ['นิติบุคคลอื่นๆ', {{$ownerDataType8}}]
            ]);

            // Set chart options
            var options = {'title':'ประเภทเจ้าของทรัพย์สิน',
                'width':'100%',
                'height':450,
                'is3D':true,
                'legend':'left',
                'fontName':'THSarabunNew'};

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>

    <script type="text/javascript">
        //Tax TYPE

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {'packages':['corechart']});

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChartTax);

        // Callback that creates and populates a data table,
        // instantiates the pie chart, passes in the data and
        // draws it.
        function drawChartTax() {

            // Create the data table.
            var datatax = new google.visualization.DataTable();
            datatax.addColumn('string', 'Topping');
            datatax.addColumn('number', 'Slices');
            datatax.addRows([
                ['ภาษีที่ดินและสิ่งปลูกสร้าง', {{$sumlandtax}}],
                ['ภาษีคอนโดมิเนียม', {{$sumcondotax}}],
                ['ภาษีป้าย', {{$sumsigntax}}]

            ]);

            // Set chart options
            var options = {'title':'ภาษีที่สามารถเก็บได้แยกประเภท',
                'width':'100%',
                'height':450,
                'is3D':true,
                'legend':'left',
                'fontName':'THSarabunNew'};

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('chart_divtax'));
            chart.draw(datatax, options);
        }
    </script>

    <script type="text/javascript">
        //land ALL

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {'packages':['corechart']});

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart2);

        // Callback that creates and populates a data table,
        // instantiates the pie chart, passes in the data and
        // draws it.
        function drawChart2() {

            // Create the data table.
            var data2 = new google.visualization.DataTable();
            data2.addColumn('string', 'Topping');
            data2.addColumn('number', 'Slices');
            data2.addRows([
                ['อยู่ในข่ายเสียภาษี', {{$landDataMustPay}}],
                ['อยู่ในข่ายยกเว้นภาษี', {{$landDataNotPay}}]

            ]);

            // Set chart options
            var options = {'title':'แปลงที่ดิน',
                'width':'auto',
                'height':'auto',
                'legend':'left',
                'fontName':'THSarabunNew'};

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
            chart.draw(data2, options);
        }
    </script>

    <script type="text/javascript">
        //condo ALL

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {'packages':['corechart']});

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart3);

        // Callback that creates and populates a data table,
        // instantiates the pie chart, passes in the data and
        // draws it.
        function drawChart3() {

            // Create the data table.
            var data3 = new google.visualization.DataTable();
            data3.addColumn('string', 'Topping');
            data3.addColumn('number', 'Slices');
            data3.addRows([
                ['อยู่ในข่ายเสียภาษี', {{$sumappcondo}}],
                ['อยู่ในข่ายยกเว้นภาษี', {{$condoDataCount-$sumappcondo}}]

            ]);

            // Set chart options
            var options = {'title':'คอนโดมิเนียม',
                'width':'auto',
                'height':'auto',
                'legend':'left',
                'fontName':'THSarabunNew'};

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('chart_div3'));
            chart.draw(data3, options);
        }
    </script>

    <script type="text/javascript">
        //Sign ALL

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {'packages':['corechart']});

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart4);

        // Callback that creates and populates a data table,
        // instantiates the pie chart, passes in the data and
        // draws it.
        function drawChart4() {

            // Create the data table.
            var data4 = new google.visualization.DataTable();
            data4.addColumn('string', 'Topping');
            data4.addColumn('number', 'Slices');
            data4.addRows([
                ['อยู่ในข่ายเสียภาษี', {{$signDataMustPay}}],
                ['อยู่ในข่ายยกเว้นภาษี', {{$signDataNotPay}}]

            ]);

            // Set chart options
            var options = {'title':'ป้าย',
                'width':'auto',
                'height':'auto',
                'legend':'left',
                'fontName':'THSarabunNew'};

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('chart_div4'));
            chart.draw(data4, options);
        }
    </script>



</head>
<body>

        <div class="container-fluid">
            <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <div class="info anim04c">

                        </div>


                        <!-- main codes start -->
                        <div class="signboard outer">
                            <div class="signboard front inner anim04c">
                                <li class="year anim04c">
                                    <span></span>
                                </li>
                                <ul class="calendarMain anim04c">
                                    <li class="month anim04c">
                                        <span></span>
                                    </li>
                                    <li class="date anim04c">
                                        <span></span>
                                    </li>
                                    <li class="day anim04c">
                                        <span></span>
                                    </li>
                                </ul>
                                <li class="clock minute anim04c">
                                    <span></span>
                                </li>
                                <li class="calendarNormal date2 anim04c">
                                    <span></span>
                                </li>
                            </div>
                            <div class="signboard left inner anim04c">
                                <li class="clock hour anim04c">
                                    <span></span>
                                </li>
                                <li class="calendarNormal day2 anim04c">
                                    <span></span>
                                </li>
                            </div>
                            <div class="signboard right1 inner anim04c">
                                <li class="clock second anim04c">
                                    <span></span>
                                </li>
                                <li class="calendarNormal month2 anim04c">
                                    <span></span>
                                </li>
                            </div>
                        </div>
                        <!-- main codes end -->


                        <div class="designer anim04c">
                            <li>
                            </li>
                        </div>

                        <script>
                            $(document).ready(function () {

                                var monthNames = [ "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม" ];
                                var dayNames= [ "อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัส","ศุกร์","เสาร์" ];

                                var newDate = new Date();
                                newDate.setDate(newDate.getDate());

                                setInterval( function() {
                                    var hours = new Date().getHours();
                                    $(".hour").html(( hours < 10 ? "0" : "" ) + hours);
                                    var seconds = new Date().getSeconds();
                                    $(".second").html(( seconds < 10 ? "0" : "" ) + seconds);
                                    var minutes = new Date().getMinutes();
                                    $(".minute").html(( minutes < 10 ? "0" : "" ) + minutes);

                                    $(".month span,.month2 span").text(monthNames[newDate.getMonth()]);
                                    $(".date span,.date2 span").text(newDate.getDate());
                                    $(".day span,.day2 span").text(dayNames[newDate.getDay()]);
                                    $(".year span").html(newDate.getFullYear());
                                }, 1000);



                                $(".outer").on({
                                    mousedown:function(){
                                        $(".dribbble").css("opacity","1");
                                    },
                                    mouseup:function(){
                                        $(".dribbble").css("opacity","0");
                                    }
                                });



                            });
                        </script>
                    <div class="card-body">
                        <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12" style="margin: 0 auto">
                            <div class="wrimagecard wrimagecard-topimage">
                                <a>
                                    <div class="wrimagecard-topimage_header" style="background-color:  rgba(250, 188, 9, 0.1)">
                                        <center><i class="fa fa-tasks" style="color:royalblue"> </i></center>
                                    </div>
                                    <div class="wrimagecard-topimage_title" style="height: auto">
                                        <h4>เจ้าของทรัพย์สิน
                                            <div class="pull-right badge" id="WrGridSystem"> <font style="text-decoration: underline;"></font> </div></h4>
                                        <div class="card__change">
                                            <div class="card__triangle-up"></div>
                                            <table>
                                                <tr>
                                                    <td>จำนวนเจ้าของทรัพย์สินทั้งหมด</td>
                                                    <td>{{number_format(count($ownerData))}} คน</td>
                                                </tr>
                                                <tr>
                                                    <td>ประเภทบุคคลธรรมดา</td>
                                                    <td>{{number_format($ownerDataType1)}} คน</td>
                                                </tr>
                                                <tr>
                                                    <td>ประเภทนิติบุคคล</td>
                                                    <td>{{number_format($ownerDataType2)}} คน</td>
                                                </tr>
                                                <tr>
                                                    <td>ประเภทรัฐวิสาหกิจ</td>
                                                    <td>{{number_format($ownerDataType3)}} คน</td>
                                                </tr>
                                                <tr>
                                                    <td>ประเภทราชการ</td>
                                                    <td>{{number_format($ownerDataType4)}} คน</td>
                                                </tr>
                                                <tr>
                                                    <td>ประเภทสมาคม</td>
                                                    <td>{{number_format($ownerDataType5)}} คน</td>
                                                </tr>
                                                <tr>
                                                    <td>ประเภทมูลนิธิ</td>
                                                    <td>{{number_format($ownerDataType6)}} คน</td>
                                                </tr>
                                                <tr>
                                                    <td>ประเภทวัด/ศาสนา</td>
                                                    <td>{{number_format(($ownerDataType7))}} คน</td>
                                                </tr>
                                                <tr>
                                                    <td>ประเภทนิติบุคคลอื่นๆ</td>
                                                    <td>{{number_format($ownerDataType8)}} คน</td>
                                                </tr>
                                            </table>
                                            ภาษีที่สามารถจัดเก็บได้ <label style="color: red"> {{number_format($sumlandbuildtax+$sumsigntax),2}} </label> บาท
                                        </div>

                                        <!--Owner Type CHART-->
                                        <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12" id="chart_div" style="fon"></div>
                                        <div class="col-lg-6 col-md-12 col-sm-12" id="chart_divtax"></div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                        </div>


                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="margin: 0 auto">
                                <div class="wrimagecard wrimagecard-topimage">
                                    <a>
                                        <div class="wrimagecard-topimage_header" style="background-color:  rgba(250, 188, 9, 0.1)">
                                            <center><i class="fa fa-object-ungroup"  style="color:#795a47"> </i></center>
                                        </div>
                                        <div class="wrimagecard-topimage_title" style="height: auto">
                                            <h4 style="text-decoration: underline">แปลงที่ดิน
                                                <div class="pull-right badge" id="WrGridSystem"></div></h4>
                                            <div class="card__change">
                                                <div class="card__triangle-up"></div>
                                                <table>
                                                    <tr>
                                                        <td>จำนวนแปลงที่ดินทั้งหมด</td>
                                                        <td>{{number_format($landDataCount)}} คน</td>
                                                    </tr>
                                                    <tr>
                                                        <td>อยู่ในข่ายเสียภาษี</td>
                                                        <td>{{number_format($landDataMustPay)}} คน</td>
                                                    </tr>
                                                    <tr>
                                                        <td>อยู่ในข่ายยกเว้นภาษี</td>
                                                        <td>{{number_format($landDataNotPay)}} คน</td>
                                                    </tr>
                                                    <tr>
                                                        <td>จำนวนเจ้าของที่ดินทั้งหมด</td>
                                                        <td>{{number_format($landDataGroup)}} คน</td>
                                                    </tr>
                                                </table>
                                                <br>
                                                <h4 style="text-decoration: underline">โรงเรือนและสิ่งปลูกสร้าง
                                                    <div class="pull-right badge" id="WrGridSystem"></div></h4>
                                                <div class="card__change">
                                                    <div class="card__triangle-up"></div>
                                                    <table>
                                                        <tr>
                                                            <td>จำนวนโรงเรือนทั้งหมด</td>
                                                            <td>{{number_format($buildDataCount)}} คน</td>
                                                        </tr>
                                                    </table>
                                                    {{--                                                ภาษีที่สามารถจัดเก็บได้ <label style="color: red"> {{number_format($sumlandtax+$sumbuildtax+$sumsigntax),2}} </label> บาท--}}
                                                </div>
{{--                                                ภาษีที่สามารถจัดเก็บได้ <label style="color: red"> {{number_format($sumlandtax+$sumbuildtax+$sumsigntax),2}} </label> บาท--}}
                                            </div>
                                        </div>
                                        <div class="wrimagecard-topimage_title">
                                                รวมภาษี <label style="color: red">{{number_format($sumlandtax)}}</label> บาท
                                        </div>
                                        <!--LAND all CHART-->
                                        <div id="chart_div2"></div>
                                    </a>
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12" style="margin: 0 auto">
                                <div class="wrimagecard wrimagecard-topimage">
                                    <a>
                                        <div class="wrimagecard-topimage_header" style="background-color:  rgba(250, 188, 9, 0.1)">
                                            <center><i class="fa fa-building" style="color:orange"> </i></center>
                                        </div>
                                        <div class="wrimagecard-topimage_title" style="height: auto">
                                            <h4>คอนโดมิเนียมหรือห้องชุด
                                                <div class="pull-right badge" id="WrGridSystem"> <font style="text-decoration: underline;"></font> </div></h4>
                                            <div class="card__change">
                                                <div class="card__triangle-up"></div>
                                                <table>
                                                    <tr>
                                                        <td>จำนวนคอนโดมิเนียมทั้งหมด</td>
                                                        <td>{{number_format($condoDataCount)}} ห้อง</td>
                                                    </tr>
                                                    <tr>
                                                        <td>อยู่ในข่ายเสียภาษี</td>
                                                        <td>{{number_format($sumappcondo)}} ห้อง</td>
                                                    </tr>
                                                    <tr>
                                                        <td>อยู่ในข่ายยกเว้นภาษี</td>
                                                        <td>{{number_format($condoDataCount-$sumappcondo)}} ห้อง</td>
                                                    </tr>
                                                    <tr>
                                                        <td>จำนวนเจ้าของห้องทั้งหมด</td>
                                                        <td>{{number_format($condoOwnerDataCount)}} คน</td>
                                                    </tr>
                                                </table>
                                                {{--                                                ภาษีที่สามารถจัดเก็บได้ <label style="color: red"> {{number_format($sumlandtax+$sumbuildtax+$sumsigntax),2}} </label> บาท--}}
                                            </div>
                                        </div>
                                        <div class="wrimagecard-topimage_title">
                                            รวมภาษี <label style="color: red">{{number_format($sumcondotax)}}</label> บาท
                                        </div>
                                        <!--Condo all CHART-->
                                        <div id="chart_div3"></div>
                                    </a>
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12" style="margin: 0 auto">
                                <div class="wrimagecard wrimagecard-topimage">
                                    <a>
                                        <div class="wrimagecard-topimage_header" style="background-color:  rgba(250, 188, 9, 0.1)">
                                            <center><i class="fa fa-map-signs" style="color:green"> </i></center>
                                        </div>
                                        <div class="wrimagecard-topimage_title" style="height: auto">
                                            <h4>ป้าย
                                                <div class="pull-right badge" id="WrGridSystem"> <font style="text-decoration: underline;"></font> </div></h4>
                                            <div class="card__change">
                                                <div class="card__triangle-up"></div>
                                                <table>
                                                    <tr>
                                                        <td>จำนวนป้ายทั้งหมด</td>
                                                        <td>{{number_format($signDataCount)}} ป้าย</td>
                                                    </tr>
                                                    <tr>
                                                        <td>อยู่ในข่ายเสียภาษี</td>
                                                        <td>{{number_format($signDataMustPay)}} ป้าย</td>
                                                    </tr>
                                                    <tr>
                                                        <td>อยู่ในข่ายยกเว้นภาษี</td>
                                                        <td>{{number_format($signDataNotPay)}} ป้าย</td>
                                                    </tr>
                                                    <tr>
                                                        <td>จำนวนเจ้าของป้ายทั้งหมด</td>
                                                        <td>{{number_format($signDataGroup)}} คน</td>
                                                    </tr>
                                                </table>
{{--                                                ภาษีที่สามารถจัดเก็บได้ <label style="color: red"> {{number_format($sumlandtax+$sumbuildtax+$sumsigntax),2}} </label> บาท--}}
                                            </div>
                                        </div>
                                        <div class="wrimagecard-topimage_title">
                                            รวมภาษี <label style="color: red">{{number_format($sumsigntax)}}</label> บาท
                                        </div>
                                        <!--Sign all CHART-->
                                        <div id="chart_div4"></div>
                                    </a>
                                </div>
                            </div>

                        </div>
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-4 col-md-12 col-sm-12" style="margin: 0 auto">--}}
{{--                            <div class="wrimagecard wrimagecard-topimage">--}}
{{--                                <a>--}}
{{--                                    <div class="wrimagecard-topimage_header" style="background-color:  rgba(121, 90, 71, 0.1)">--}}
{{--                                        <center><i class="fa fa-object-ungroup" style="color:#795a47"> </i></center>--}}
{{--                                    </div>--}}
{{--                                    <div class="wrimagecard-topimage_title">--}}
{{--                                        <h4>ภาษีที่ดินและสิ่งปลูกสร้าง พ.ศ. {{$yearNow}}--}}
{{--                                            <div class="pull-right badge" id="WrGridSystem"> <font style="text-decoration: underline;"></font> </div></h4>--}}
{{--                                        <div class="card__change">--}}
{{--                                            <div class="card__triangle-up"></div>--}}
{{--                                            รวมทั้งหมด {{number_format(count($landData))}} แห่ง <br>--}}
{{--                                            ที่สามารถเก็บได้ {{number_format($sumappland)}} แห่ง <br>--}}
{{--                                            รวมภาษี <label style="color: red">{{number_format($sumlandtax)}}</label> บาท--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                            <div class="col-lg-4 col-md-12 col-sm-12" style="margin: 0 auto">--}}
{{--                                <div class="wrimagecard wrimagecard-topimage">--}}
{{--                                    <a>--}}
{{--                                        <div class="wrimagecard-topimage_header" style="background-color:  rgba(121, 90, 71, 0.1)">--}}
{{--                                            <center><i class="fa fa-building" style="color:orange"> </i></center>--}}
{{--                                        </div>--}}
{{--                                        <div class="wrimagecard-topimage_title">--}}
{{--                                            <h4>ภาษีคอนโดมิเนียม พ.ศ. {{$yearNow}}--}}
{{--                                                <div class="pull-right badge" id="WrGridSystem"> <font style="text-decoration: underline;"></font> </div></h4>--}}
{{--                                            <div class="card__change">--}}
{{--                                                <div class="card__triangle-up"></div>--}}
{{--                                                รวมทั้งหมด {{number_format($condoDataCount)}} ห้อง <br>--}}
{{--                                                    ที่สามารถเก็บได้ {{number_format($sumappcondo)}} อาคาร <br>--}}
{{--                                                    รวมภาษี <label style="color: red">{{number_format($sumcondotax)}}</label> บาท--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-4 col-md-12 col-sm-12" style="margin: 0 auto">--}}
{{--                                <div class="wrimagecard wrimagecard-topimage">--}}
{{--                                    <a>--}}
{{--                                        <div class="wrimagecard-topimage_header" style="background-color:  rgba(121, 90, 71, 0.1)">--}}
{{--                                            <center><i class="fa fa-map-signs" style="color:green"> </i></center>--}}
{{--                                        </div>--}}
{{--                                        <div class="wrimagecard-topimage_title">--}}
{{--                                            <h4>ภาษีป้าย พ.ศ. {{$yearNow}}--}}
{{--                                                <div class="pull-right badge" id="WrGridSystem"> <font style="text-decoration: underline;"></font> </div></h4>--}}
{{--                                            <div class="card__change">--}}
{{--                                                <div class="card__triangle-up"></div>--}}
{{--                                                รวมทั้งหมด {{number_format(count($signData))}} ป้าย <br>--}}
{{--                                                ที่สามารถเก็บได้ {{number_format($sumappsign)}} ป้าย <br>--}}
{{--                                                รวมภาษี <label style="color: red">{{number_format($sumsigntax)}} </label> บาท--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                        <h2 class="title">รายชื่อผู้ที่ต้องชำระภาษี</h2>
                        <div class="container-fluid">
                                {{--                            <div class="col-md-3 col-sm-4">--}}
                                {{--                                <div class="wrimagecard wrimagecard-topimage">--}}
                                {{--                                    --}}
                                {{--                                    <span>กิจกรรม </span>--}}
                                {{--                                </p>--}}
                                {{--                                <i class="icon fa fa" aria-hidden="true"></i>--}}
                                {{--                                <p class="card__number">{{$countactivitys}}</p>--}}
                                {{--                                <div class="card__change">--}}
                                {{--                                    --}}{{--                <div class="card__triangle-up"></div>--}}
                                {{--                                    --}}{{--                <span>78%</span>--}}
                                {{--                                </div>--}}

                                {{--                                <p class="card__name">--}}
                                {{--                                    <span>รวมทั้งหมด</span>--}}
                                {{--                                </p>--}}
                                {{--                                <i class="icon fa fa" aria-hidden="true"></i>--}}
                                {{--                                <p class="card__number__sm" style="color: orange">{{$countactivityalls}}</p>--}}
                                {{--                                <div class="card__change">--}}
                                {{--                                    --}}{{--                <div class="card__triangle-up"></div>--}}
                                {{--                                    --}}{{--                <span>78%</span>--}}
                                {{--                                </div>--}}
                                {{--                                </div>--}}
                                {{--                            </div><!-- CARD small-->--}}

                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12" style="margin: 0 auto">
                                    <div class="wrimagecard wrimagecard-topimage">
                                            <div class="wrimagecard-topimage_header" style="background-color:  rgba(121, 90, 71, 0.1)">
                                                <center><i class="fa fa-tasks" style="color:#795a47"> </i></center>
                                            </div>
                                            <div class="wrimagecard-topimage_title">
                                                <h4>ภาษีที่ดิน
                                                    <div class="pull-right badge" id="WrGridSystem"> <font style="text-decoration: underline;"></font> </div></h4>
                                                <div class="card__change">
                                                    <div class="card__triangle-up"></div>
                                                    <a href="reports/namepayland" target="_blank" style="text-decoration: underline">ดูรายชื่อผู้ชำระภาษี <label style="color: red">&#8594;</label></a>
                                                </div>
                                            </div>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12" style="margin: 0 auto">
                                    <div class="wrimagecard wrimagecard-topimage">
                                            <div class="wrimagecard-topimage_header" style="background-color:  rgba(121, 90, 71, 0.1)">
                                                <center><i class="fa fa-tasks" style="color:orange"> </i></center>
                                            </div>
                                            <div class="wrimagecard-topimage_title">
                                                <h4>ภาษีอาคารและสิ่งปลูกสร้าง
                                                    <div class="pull-right badge" id="WrGridSystem"> <font style="text-decoration: underline;"></font> </div></h4>
                                                <div class="card__change">
                                                    <div class="card__triangle-up"></div>
                                                    <a href="reports/namepaybuild" target="_blank" style="text-decoration: underline">ดูรายชื่อผู้ชำระภาษี <label style="color: red">&#8594;</label></a>
                                                </div>
                                            </div>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12" style="margin: 0 auto">
                                    <div class="wrimagecard wrimagecard-topimage">
                                            <div class="wrimagecard-topimage_header" style="background-color:  rgba(121, 90, 71, 0.1)">
                                                <center><i class="fa fa-tasks" style="color:green"> </i></center>
                                            </div>
                                            <div class="wrimagecard-topimage_title">
                                                <h4>แบ่งเป็นภาษีป้าย
                                                    <div class="pull-right badge" id="WrGridSystem"> <font style="text-decoration: underline;"></font> </div></h4>
                                                <div class="card__change">
                                                    <div class="card__triangle-up"></div>
                                                    <a href="reports/namepaysign" target="_blank" style="text-decoration: underline">ดูรายชื่อผู้ชำระภาษี <label style="color: red">&#8594;</label></a>

                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2 style="margin-top: 5%" class="title">ชำระภาษีระหว่างวันที่ {{Thaidateonly($sevenDayAgo)}} - {{Thaidateonly($nowDay)}}</h2>
                        <div class="container-fluid">
                            <div class="row">
                                {{--                            <div class="col-md-3 col-sm-4">--}}
                                {{--                                <div class="wrimagecard wrimagecard-topimage">--}}
                                {{--                                    --}}
                                {{--                                    <span>กิจกรรม </span>--}}
                                {{--                                </p>--}}
                                {{--                                <i class="icon fa fa" aria-hidden="true"></i>--}}
                                {{--                                <p class="card__number">{{$countactivitys}}</p>--}}
                                {{--                                <div class="card__change">--}}
                                {{--                                    --}}{{--                <div class="card__triangle-up"></div>--}}
                                {{--                                    --}}{{--                <span>78%</span>--}}
                                {{--                                </div>--}}

                                {{--                                <p class="card__name">--}}
                                {{--                                    <span>รวมทั้งหมด</span>--}}
                                {{--                                </p>--}}
                                {{--                                <i class="icon fa fa" aria-hidden="true"></i>--}}
                                {{--                                <p class="card__number__sm" style="color: orange">{{$countactivityalls}}</p>--}}
                                {{--                                <div class="card__change">--}}
                                {{--                                    --}}{{--                <div class="card__triangle-up"></div>--}}
                                {{--                                    --}}{{--                <span>78%</span>--}}
                                {{--                                </div>--}}
                                {{--                                </div>--}}
                                {{--                            </div><!-- CARD small-->--}}

                                <div class="col-lg-12 col-md-12 col-sm-12" style="margin: 0 auto">
                                    <div class="wrimagecard wrimagecard-topimage">
                                        <a>
                                            <div class="wrimagecard-topimage_header" style="background-color:  rgba(250, 188, 9, 0.1)">
                                                <center><i class="fa fa-tasks" style="color:#fabc09"> </i></center>
                                            </div>
                                            <div class="wrimagecard-topimage_title">
                                                <h4>ผู้ชำระภาษี
                                                    <div class="pull-right badge" id="WrGridSystem"> <font style="text-decoration: underline;"></font> </div></h4>
                                                <div class="card__change">
                                                    <div class="card__triangle-up"></div>
                                                    รวมทั้งหมด {{$paytaxcountall7day}} รายการ
                                                </div>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12" style="margin: 0 auto">
                                    <div class="wrimagecard wrimagecard-topimage">
                                            <div class="wrimagecard-topimage_header" style="background-color:  rgba(121, 90, 71, 0.1)">
                                                <center><i class="fa fa-btc" style="color:#795a47"> </i></center>
                                            </div>
                                            <div class="wrimagecard-topimage_title">
                                                <h4>แบ่งเป็นภาษีที่ดิน
                                                    <div class="pull-right badge" id="WrGridSystem"> <font style="text-decoration: underline;"></font> </div></h4>
                                                <div class="card__change">
                                                    <div class="card__triangle-up"></div>
                                                    รวมทั้งหมด {{number_format($paylandcount7day)}} รายการ
                                                    @foreach($paylandin as $key => $pli)
                                                        <br><a style="cursor: pointer" href="paytaxs/{{$pli->owner_id}}/edit"> ชื่อ{{$pli->fname}} {{$pli->lname}} <label style="color: red;cursor: pointer">[ตรวจสอบข้อมูล]&#8594;</label> </a>

                                                    @endforeach
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12" style="margin: 0 auto">
                                    <div class="wrimagecard wrimagecard-topimage">
                                            <div class="wrimagecard-topimage_header" style="background-color:  rgba(121, 90, 71, 0.1)">
                                                <center><i class="fa fa-btc" style="color:orange"> </i></center>
                                            </div>
                                            <div class="wrimagecard-topimage_title">
                                                <h4>แบ่งเป็นภาษีอาคารและสิ่งปลูกสร้าง
                                                    <div class="pull-right badge" id="WrGridSystem"> <font style="text-decoration: underline;"></font> </div></h4>
                                                <div class="card__change">
                                                    <div class="card__triangle-up"></div>
                                                    @if(isset($buildData))
                                                        รวมทั้งหมด {{number_format($paybuildcount7day)}} รายการ
                                                        @foreach($paybuildin as $key => $pbi)
                                                            <br><a style="cursor: pointer" href="paytaxs/{{$pbi->owner_id}}/edit"> ชื่อ{{$pbi->fname}} {{$pbi->lname}}
                                                                @if($pbi->status == 1) <label>[ตรวจสอบข้อมูล]</label>
                                                                @elseif($pbi->status == 2) [ชำระภาษีเรียบร้อยแล้ว]
                                                                @endif</a>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12" style="margin: 0 auto">
                                    <div class="wrimagecard wrimagecard-topimage">
                                            <div class="wrimagecard-topimage_header" style="background-color:  rgba(121, 90, 71, 0.1)">
                                                <center><i class="fa fa-btc" style="color:green"> </i></center>
                                            </div>
                                            <div class="wrimagecard-topimage_title">
                                                <h4>แบ่งเป็นภาษีป้าย
                                                    <div class="pull-right badge" id="WrGridSystem"> <font style="text-decoration: underline;"></font> </div></h4>
                                                <div class="card__change">
                                                    <div class="card__triangle-up"></div>
                                                    รวมทั้งหมด {{number_format($paysigncount7day)}} รายการ
                                                    @foreach($paysignin as $key => $psi)
                                                        <br><a style="cursor: pointer" href="paytaxs/{{$psi->owner_id}}/edit"> ชื่อ{{$psi->fname}} {{$psi->lname}}</a>
                                                            @if($psi->status == 1) <label>[ตรวจสอบข้อมูล]</label>
                                                            @elseif($psi->status == 2) [ชำระภาษีเรียบร้อยแล้ว]
                                                            @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</body>
</html>

@endsection


@section('javascript')

@endsection

