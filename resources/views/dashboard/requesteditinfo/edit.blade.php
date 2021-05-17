@extends('dashboard.base')

@section('content')
    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
    <style>

        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }
        table {

            border-collapse: collapse;
            width: 100%;
        }

        .tg  {border-collapse:collapse;border-spacing:0;}
        .tg td{font-size:14px;padding:10px 5px;border-style:solid;border-width:2px;overflow:hidden;word-break:normal;border-color:black;}
        .tg th{font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:2px;overflow:hidden;word-break:normal;border-color:black;}
        .tg .tg-9wq8{border-color:inherit;text-align:center;vertical-align:middle}
        .tg .tg-baqh{text-align:center;vertical-align:top}
        .tg .tg-nrix{text-align:center;vertical-align:middle}
        .tg .tg-0lax{text-align:left;vertical-align:top}

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {opacity: 0.7;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin:2% auto;
            display: block;
            width: 80%;
            max-width: 500px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content, #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {-webkit-transform:scale(0)}
            to {-webkit-transform:scale(1)}
        }

        @keyframes zoom {
            from {transform:scale(0)}
            to {transform:scale(1)}
        }

        /* The Close Button */
        .close1 {
            position: absolute;
            top: 20%;
            right: 35px;
            color: #f1f1f1;
            font-size: 60px;
            font-weight: bold;
            transition: 0.3s;
            z-index: 1000;
        }

        .close1:hover,
        .close1:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }
        /* The Close Button */
        .close2 {
            position: absolute;
            top: 20%;
            right: 35px;
            color: #f1f1f1;
            font-size: 60px;
            font-weight: bold;
            transition: 0.3s;
            z-index: 1000;
        }

        .close2:hover,
        .close2:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }
        /* The Close Button */
        .close3 {
            position: absolute;
            top: 20%;
            right: 35px;
            color: #f1f1f1;
            font-size: 60px;
            font-weight: bold;
            transition: 0.3s;
            z-index: 1000;
        }

        .close3:hover,
        .close3:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
        }
    </style>

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>{{ __('ค้นหาข้อมูล ผู้ยื่นคำร้องขอแก้ไขข้อมูล') }}</div>
                        <div class="card-body">
                            <h1 class="divnone">ยื่นคำร้องแก้ไขข้อมูลจากระบบ ข้อมูลที่ดินและสิ่งปลูกสร้าง <label style="text-decoration: underline">เลขที่โฉนด {{$getDataEditland->dn}}</label></h1>
{{--                            <p class="divnone" style="margin: 0 auto;font-size: 24px;color: green">ส่งเรื่องไปที่หน่วยงานเรียบร้อยแล้ว กรุณารอการตรวจสอบและติดต่อจากหน่วยงานอีกครั้ง</p>--}}
{{--                            <p class="divnone" style="margin: 0 auto;font-size: 16px;color: red">พิมพ์คำร้องขอแก้ไขข้อมูล</p>--}}
{{--                            <button style="margin: 0 auto" class="print-button divnone" onclick="window.print()"><span class="print-icon"></span></button>--}}


                            <table style="width: 28%; margin-left: calc(72%); margin-right: calc(1%);border: solid 2px black">
                                <tbody>
                                <tr>
                                    <td style="width: 100.0000%;">.........................................................................<br>เลขที่รับ............/...............วันที่........................<br>ผู้รับเรื่อง..........................................................</td>
                                </tr>
                                </tbody>
                            </table>
                            <p style="text-align: center;">คำร้องขอแก้ไขบัญชีรายการที่ดินและสิ่งปลูกสร้าง/บัญชีรายการห้องชุด</p>
                            <p style="text-align: center;">ตามมาตรา 32 พระราชบัญญัติภาษีที่ดินและสิ่งปลูกสร้าง พ.ศ. 2562</p>
                            @php
                                $yeardb = \Carbon\Carbon::parse(($getDataEditland->created_at))->format('Y');
                                $monthdb = \Carbon\Carbon::parse(($getDataEditland->created_at))->format('m');
                                $datedb = \Carbon\Carbon::parse(($getDataEditland->created_at))->format('d');

                            @endphp

                            <p style="text-align: right;margin-right: 100px">วันที่...{{$datedb}}.....เดือน...{{Thaimonthonly($yeardb)}}...พ.ศ....{{Thaiyearonly($yeardb)}}....</p>
                            <p style="text-align: left;"><br></p>
                            <p style="text-align: left; margin-left: 80px;">เรื่อง &nbsp;ขอแก้ไขรายการที่ดินและสิ่งปลูกสร้าง/รายการห้องชุด</p>
                            <p style="text-align: left; margin-left: 80px;">เรียน &nbsp; นายกเทศมนตรี..........................................</p>
                            <p style="text-align: left; margin-left: 140px;"><strong>๑.&nbsp;</strong><u><strong>กรณีเป็นบุคคลธรรมดา</strong></u></p>
                            <p style="text-align: left; margin-left: 140px;">ข้าพเจ้า .........................................{{$getDataEditland->title_name}}{{$getDataEditland->first_name}} {{$getDataEditland->last_name}}.........................................................................................</p>
                            <p style="text-align: left; margin-left: 80px;">บัตรประจำตัวประชาชน .........................................{{$getDataEditland->pop_id}}.......................... อยู่บ้านเลขที่ ..................{{$getDataEditland->address}}.............. หมู่ที่ .............{{$getDataEditland->moo}}......... </p>
                            <p style="text-align: left; margin-left: 80px;">ตรอก/ซอย .....................{{$getDataEditland->soi}}...................... ถนน ......................{{$getDataEditland->road}}....................... แขวง/ตำบล ............................{{$getDataEditland->tambon}}................. </p>
                            <p style="text-align: left; margin-left: 80px;">เขต/อำเภอ .........................{{$getDataEditland->amphoe}}.................. จังหวัด .................{{$getDataEditland->province}}............ โทรศัพท์ ..............{{$getDataEditland->telephone}}........... </p>
                            <p style="text-align: left; margin-left: 140px;"><u><strong>กรณีเป็นนิติบุคคล</strong></u></p>
                            <p style="text-align: left; margin-left: 140px;">ข้าพเจ้า ...............................................................{{$getDataEditland->name_niti}}...................................................... </p>
                            <p style="text-align: left; margin-left: 80px;">เลขทะเบียนนิติบุคคล .......................{{$getDataEditland->juristic_id_niti}}..................... มีสำนักงานใหญ่เลขที่ .............{{$getDataEditland->headquarter_address_niti}}.............. หมู่ที่ .................{{$getDataEditland->headquarter_moo_niti}}................. </p>
                            <p style="text-align: left; margin-left: 80px;">ตรอก/ซอย .................{{$getDataEditland->headquarter_soi_niti}}.................... ถนน ......................{{$getDataEditland->headquarter_road_niti}}......................... แขวง/ตำบล ....................{{$getDataEditland->headquarter_tambon_niti}}................... </p>
                            <p style="text-align: left; margin-left: 80px;">เขต/อำเภอ .....................{{$getDataEditland->headquarter_amphoe_niti}}................... จังหวัด ..........................{{$getDataEditland->headquarter_province_niti}}......................... โทรศัพท์ .........................{{$getDataEditland->headquarter_telephone_niti}}..................... </p>
                            <p style="text-align: left; margin-left: 80px;">โดย .....................................{{$getDataEditland->by_first_niti}} {{$getDataEditland->by_last_niti}}................................. บัตรประจำตัวประชาชน ......................{{$getDataEditland->pop_id_niti}}...................... </p>
                            <p style="text-align: left; margin-left: 80px;">ผู้มีอำนาจลงนามผูกพันนิติบุคคล ตามหนังสือรับรองของสำนักทะเบียนหุ้นส่วนบริษัท ........{{$getDataEditland->company_name_niti}}.......... </p>
                            <p style="text-align: left; margin-left: 80px;">ลงวันที่ ..........................@isset($getDataEditland->date_input_niti) {{Thaidateonly($getDataEditland->date_input_niti)}} @endisset..................... (แนบสำเนาหนังสือรับรอง และหนังสือมอบอำนาจ (ถ้ามี))</p>
                            <p style="text-align: left; margin-left: 140px;"><strong>๒. ข้าพเจ้าได้รับแบบแจ้งข้อมูลรายการที่ดินและสิ่งปลูกสร้าง/แบบแจ้งรายการข้อมูลห้องชุด</strong></p>
                            <p style="text-align: left; margin-left: 140px;"><span style='color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>⬜️ </span>️ รายการที่ดิน ชุดที่.............หน้า...............ลำดับที่.......................ตามประกาศ.......................................................ลงวันที่.................................</p>
                            <p style="text-align: left; margin-left: 140px;"><span style='color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>⬜️</span> รายการสิ่งปลูกสร้าง ชุดที่...............หน้า................ลำดับที่......................................ตามประกาศ......................................................................</p>
                            <p style="text-align: left; margin-left: 160px;">&nbsp; ลงวันที่....................................................</p>
                            <p style="text-align: left; margin-left: 140px;">⬜️ รายการที่ห้องชุด ชุดที่.............หน้า...............ลำดับที่.......................ตามประกาศ.......................................................ลงวันที่..........................</p>
                            <p style="text-align: left; margin-left: 140px;"><strong>๓. ข้าพเจ้าขอแก้ไขรายการที่ดินและสิ่งปลูกสร้าง/รายการห้องชุด ตามข้อ ๒ ดังนี้</strong></p>
                            <p style="text-align: left; margin-left: 160px;">๓.๑<strong>&nbsp;<u>ที่ดิน</u></strong></p>
                            <p style="text-align: left; margin-left: 160px;"><strong><span style='color: rgb(0, 0, 0);font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>⬜️&nbsp;</span></strong><span style='color: rgb(0, 0, 0); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>เจ้าของกรรมสิทธิ์จาก (นาย/นาง/นางสาว)</span><span style='color: rgb(0, 0, 0); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>................................................{{$getDataEditland->first_name}} {{$getDataEditland->last_name}}.........................................</span></p>
                            <p style="text-align: left; margin-left: 180px;"><span style='color: rgb(0, 0, 0);  font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'><strong>ขอแก้ไขเป็น</strong> (นาย/นาง/นางสาว) .............................................................{{$getDataEditland->first_name_land_edit}} {{$getDataEditland->last_name_land_edit}}.........................................................</span></p>
                            <p style="text-align: left; margin-left: 180px;"><span style='color: rgb(0, 0, 0);  font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>เนื่องจาก........................................{{$getDataEditland->reason_land}}............................................</span></p>
                            <p style="text-align: left; margin-left: 160px;"><strong style='font-weight: 700; color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> จำนวนที่เนื้อที่ดิน จาก.......@isset($getDataLandOnDn){{$getDataLandOnDn->rai}}@endisset......ไร่.....@isset($getDataLandOnDn){{$getDataLandOnDn->yawn}}@endisset.........งาน...........@isset($getDataLandOnDn){{$getDataLandOnDn->wa}}@endisset...........ตร.ว.</p>
                            <p style="text-align: left; margin-left: 180px;"><strong>ขอแก้ไขเป็น</strong>..{{$getDataEditland->rai_land_edit}}.........ไร่...........{{$getDataEditland->yawn_land_edit}}.......งาน........{{$getDataEditland->wa_land_edit}}.......ตร.ว.</p>
                            {{--                            <p style="text-align: left; margin-left: 160px;"><strong style='font-weight: 700; color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> ลักษณะการทำประโยชน์ จาก <strong style='font-weight: 700; color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> เกษตรกรรม <strong style='font-weight: 700; color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> อยู่อาศัย <strong style='font-weight: 700; color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> อื่น ๆ <strong style='font-weight: 700; color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> ว่างเปล่า</p>--}}

                            <p style="text-align: left; margin-left: 160px;"><strong style='font-weight: 700; color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'></span><span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> ลักษณะการทำประโยชน์ จาก ...........@isset($getDataLandUseOnDn) @if($getDataLandUseOnDn->lut_id==1 || $getDataLandUseOnDn->lut_id==2 || $getDataLandUseOnDn->lut_id==3 || $getDataLandUseOnDn->lut_id==4 || $getDataLandUseOnDn->lut_id==5) อยู่อาศัย @elseif($getDataLandUseOnDn->lut_id==6 || $getDataLandUseOnDn->lut_id==7 || $getDataLandUseOnDn->lut_id==8) เกษตรกรรม @elseif($getDataLandUseOnDn->lut_id==99 || $getDataLandUseOnDn->lut_id==11) อื่น ๆ @elseif($getDataLandUseOnDn->lut_id==9 || $getDataLandUseOnDn->lut_id==10) ว่างเปล่า @elseif($getDataLandUseOnDn->lut_id==null) ไม่มีข้อมูล @endif @endisset..............<span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'></span></p>
                            <p style="text-align: left; margin-left: 180px;"><strong>ขอแก้ไขเป็น</strong></p>
                            {{--                            <p style="text-align: left; margin-left: 200px;"><strong style='font-weight: 700; color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> เกษตรกรรม <span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>@if($getDataEditland->lutname_land_edit==1 || $getDataEditland->lutname_land_edit==2 || $getDataEditland->lutname_land_edit==3 || $getDataEditland->lutname_land_edit==4 || $getDataEditland->lutname_land_edit==5)☑</span>@else <span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span>  @endif</strong> อยู่อาศัย <strong style='font-weight: 700; color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>@if($getDataEditland->lutname_land_edit==11 || $getDataEditland->lutname_land_edit==99)☑@else <span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span>  @endif</span></strong> อื่น ๆ <strong style='font-weight: 700; color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> ว่างเปล่า ขนาดเนื้อที่ดิน..................................................................................................</p>--}}
                            <p style="text-align: left; margin-left: 160px;"><strong style='font-weight: 700; color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>&nbsp&nbsp&nbsp️️</span></strong> ลักษณะการทำประโยชน์ เป็น ...........@if($getDataEditland->lutname_land_edit==1 || $getDataEditland->lutname_land_edit==2 || $getDataEditland->lutname_land_edit==3 || $getDataEditland->lutname_land_edit==4 || $getDataEditland->lutname_land_edit==5) อยู่อาศัย @elseif($getDataEditland->lutname_land_edit==6 || $getDataEditland->lutname_land_edit==7 || $getDataEditland->lutname_land_edit==8) เกษตรกรรม @elseif($getDataEditland->lutname_land_edit==99 || $getDataEditland->lutname_land_edit==11) อื่น ๆ @elseif($getDataEditland->lutname_land_edit==9 || $getDataEditland->lutname_land_edit==10) ว่างเปล่า @elseif($getDataEditland->lutname_land_edit==null) ไม่มีข้อมูล  @endif..............<span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'></span></p>
                            <p style="text-align: left; margin-left: 160px;"><strong style='font-weight: 700; color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> อื่น ๆ .........................................................................................................................................................................................................</p>
                            <p style="text-align: left; margin-left: 220px;">.........................................................................................................................................................................................................</p>

                            <p style="text-align: left; margin-left: 160px;margin-top: 100px">๓.๒<strong>&nbsp;<u>สิ่งปลูกสร้าง</u></strong></p>
                            <p style="text-align: left; margin-left: 160px;"><strong><span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>⬜️&nbsp;</span></strong><span style='color: rgb(0, 0, 0); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>เจ้าของกรรมสิทธิ์จาก (นาย/นาง/นางสาว)</span><span style='color: rgb(0, 0, 0); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>..............................................{{$getDataEditland->first_name}} {{$getDataEditland->last_name}}.................................</span></p>
                            <p style="text-align: left; margin-left: 180px;"><span style='color: rgb(0, 0, 0);  font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'><strong>ขอแก้ไขเป็น</strong> (นาย/นาง/นางสาว).......................................................{{$getDataEditland->first_name_build_edit}} {{$getDataEditland->last_name_build_edit}}..............................................................</span></p>
                            <p style="text-align: left; margin-left: 180px;"><span style='color: rgb(0, 0, 0);  font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>เนื่องจาก.....................................{{$getDataEditland->reason_build}}.............................................</span></p>
                            <p style="text-align: left; margin-left: 160px;"><strong style='font-weight: 700; color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> สิ่งปลูกสร้าง จาก ลักษณะสิ่งปลูกสร้าง...............@isset($getDataBuildingPDS3->bt_name){{$getDataBuildingPDS3->bt_name}}@endisset.....................ขนาดพื้นที่.......@isset($getDataBuildingPDS3->bwidth){{$getDataBuildingPDS3->bwidth*$getDataBuildingPDS3->blength}}@endisset......ตร.ม.</p>
                            <p style="text-align: left; margin-left: 180px;"><strong>ขอแก้ไขเป็น</strong></p>
                            <p style="text-align: left; margin-left: 180px;">ลักษณะสิ่งปลูกสร้าง.......{{$getDataEditland->btname_build_edit}}......ขนาดพื้นที่....{{$getDataEditland->area_build_edit}}....ตร.ม. กว้าง...{{$getDataEditland->width_build_edit}}...ม. ยาว....{{$getDataEditland->length_build_edit}}...ม. จำนวนชั้น.....{{$getDataEditland->floor_build_edit}}.....</p>
                            <p style="text-align: left; margin-left: 160px;"><strong style='font-weight: 700; color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> ลักษณะการทำประโยชน์ จาก <span style='color: rgb(0, 0, 0); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'> ................@isset($getDataBuildingPDS3->usage_id)@if($getDataBuildingPDS3->usage_id == 0 || $getDataBuildingPDS3->usage_id == 3 || $getDataBuildingPDS3->usage_id == 4 || $getDataBuildingPDS3->usage_id == 6 || $getDataBuildingPDS3->usage_id == 8 || $getDataBuildingPDS3->usage_id == 12 || $getDataBuildingPDS3->usage_id == 13 || $getDataBuildingPDS3->usage_id == 14 || $getDataBuildingPDS3->usage_id == 15 || $getDataBuildingPDS3->usage_id == 17) อยู่อาศัย @elseif($getDataBuildingPDS3->usage_id == 1 || $getDataBuildingPDS3->usage_id == 2 || $getDataBuildingPDS3->usage_id == 5 || $getDataBuildingPDS3->usage_id == 7 || $getDataBuildingPDS3->usage_id == 9 || $getDataBuildingPDS3->usage_id == 10 || $getDataBuildingPDS3->usage_id == 11) อื่น ๆ @elseif($getDataBuildingPDS3->usage_id == 16) เกษตรกรรม @else @endif @endisset........................</span></p>
                            <p style="text-align: left; margin-left: 180px;"><strong>ขอแก้ไขเป็น</strong><span style='color: rgb(0, 0, 0);  font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'> ................@if($getDataEditland->bucate_build_edit == 0 && $getDataEditland->bucate_build_edit != null || $getDataEditland->bucate_build_edit == 3 || $getDataEditland->bucate_build_edit == 4 || $getDataEditland->bucate_build_edit == 6 || $getDataEditland->bucate_build_edit == 8 || $getDataEditland->bucate_build_edit == 12 || $getDataEditland->bucate_build_edit == 13 || $getDataEditland->bucate_build_edit == 14 || $getDataEditland->bucate_build_edit == 15 || $getDataEditland->bucate_build_edit == 17) อยู่อาศัย @elseif($getDataEditland->bucate_build_edit == 1 || $getDataEditland->bucate_build_edit == 2 || $getDataEditland->bucate_build_edit == 5 || $getDataEditland->bucate_build_edit == 7 || $getDataEditland->bucate_build_edit == 9 || $getDataEditland->bucate_build_edit == 10 || $getDataEditland->bucate_build_edit == 11) อื่น ๆ @elseif($getDataEditland->bucate_build_edit == 16) เกษตรกรรม @elseif($getDataEditland->bucate_build_edit == null) ไม่มีข้อมูล @endif..............   ขนาดเนื้อที่ดิน.......{{$getDataEditland->area_builduse_edit}}........</span></p>
                            {{--                            <p style="text-align: left; margin-left: 200px;"><strong style='font-weight: 700; color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> เกษตรกรรม <strong style='font-weight: 700; color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> อยู่อาศัย <strong style='font-weight: 700; color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> อื่น ๆ <strong style='font-weight: 700; color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> ว่างเปล่า ขนาดเนื้อที่ดิน..................................................................................................</p>--}}
                            <p style="text-align: left; margin-left: 160px;"><strong style='font-weight: 700; color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> อื่น ๆ .........................................................................................................................................................................................................</p>
                            <p style="text-align: left; margin-left: 220px;">.........................................................................................................................................................................................................</p>
                            <p style="text-align: left; margin-left: 160px;">๓.๓<strong>&nbsp;<u>ห้องชุด</u></strong></p>
                            <p style="text-align: left; margin-left: 160px;"><strong><span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>⬜️&nbsp;</span></strong><span style='color: rgb(0, 0, 0);  font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>เจ้าของกรรมสิทธิ์จาก (นาย/นาง/นางสาว)</span><span style='color: rgb(0, 0, 0); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>......................................................{{$getDataEditland->first_name}} {{$getDataEditland->last_name}}..................................................</span></p>
                            <p style="text-align: left; margin-left: 180px;"><span style='color: rgb(0, 0, 0); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'><strong>ขอแก้ไขเป็น</strong> (นาย/นาง/นางสาว)....................................................................{{$getDataEditland->first_name_build_condo_edit}} {{$getDataEditland->last_name_build_condo_edit}}...........................................</span></p>
                            <p style="text-align: left; margin-left: 180px;"><span style='color: rgb(0, 0, 0);  font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>เนื่องจาก............................................{{$getDataEditland->reason_build_condo}}.........................................</span></p>
                            <p style="text-align: left; margin-left: 160px;"><strong style='font-weight: 700; color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> ห้องชุด จาก ขนาดพื้นที่........ @isset($getDataBuildingCondoPDS3){{$getDataBuildingCondoPDS3->bwidth*$getDataBuildingCondoPDS3->blength}}@endisset.......ตร.ม.</p>
                            <p style="text-align: left; margin-left: 180px;"><strong>ขอแก้ไขเป็น&nbsp;</strong>ขนาดพื้นที่.......{{$getDataEditland->area_building_condo_edit}}.......ตร.ม. &nbsp;กว้าง....{{$getDataEditland->width_building_condo_edit}}.....ม. ยาว....{{$getDataEditland->length_building_condo_edit}}.....ม. ชั้น.....{{$getDataEditland->floor_building_condo_edit}}......</p>
                            <p style="text-align: left; margin-left: 160px;"><strong style='font-weight: 700; color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> ลักษณะการทำประโยชน์ จาก .............@isset($getDataBuildingCondoPDS3) @if($getDataBuildingCondoPDS3->usage_id == 0 || $getDataBuildingCondoPDS3->usage_id == 3 || $getDataBuildingCondoPDS3->usage_id == 4 || $getDataBuildingCondoPDS3->usage_id == 6 || $getDataBuildingCondoPDS3->usage_id == 8 || $getDataBuildingCondoPDS3->usage_id == 12 || $getDataBuildingCondoPDS3->usage_id == 13 || $getDataBuildingCondoPDS3->usage_id == 14 || $getDataBuildingCondoPDS3->usage_id == 15 || $getDataBuildingCondoPDS3->usage_id == 17) อยู่อาศัย @elseif($getDataBuildingCondoPDS3->usage_id == 1 || $getDataBuildingCondoPDS3->usage_id == 2 || $getDataBuildingCondoPDS3->usage_id == 5 || $getDataBuildingCondoPDS3->usage_id == 7 || $getDataBuildingCondoPDS3->usage_id == 9 || $getDataBuildingCondoPDS3->usage_id == 10 || $getDataBuildingCondoPDS3->usage_id == 11) อื่น ๆ @elseif($getDataBuildingCondoPDS3->usage_id == 16) เกษตรกรรม @else @endif @endisset...................</p>
                            <p style="text-align: left; margin-left: 180px;"><strong>ขอแก้ไขเป็น </strong><span style='color: rgb(0, 0, 0);  font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>...........@if($getDataEditland->bu_condo_cate_edit == 0 && $getDataEditland->bu_condo_cate_edit != null || $getDataEditland->bu_condo_cate_edit == 3 || $getDataEditland->bu_condo_cate_edit == 4 || $getDataEditland->bu_condo_cate_edit == 6 || $getDataEditland->bu_condo_cate_edit == 8 || $getDataEditland->bu_condo_cate_edit == 12 || $getDataEditland->bu_condo_cate_edit == 13 || $getDataEditland->bu_condo_cate_edit == 14 || $getDataEditland->bu_condo_cate_edit == 15 || $getDataEditland->bu_condo_cate_edit == 17) อยู่อาศัย @elseif($getDataEditland->bu_condo_cate_edit == 1 || $getDataEditland->bu_condo_cate_edit == 2 || $getDataEditland->bu_condo_cate_edit == 5 || $getDataEditland->bu_condo_cate_edit == 7 || $getDataEditland->bu_condo_cate_edit == 9 || $getDataEditland->bu_condo_cate_edit == 10 || $getDataEditland->bu_condo_cate_edit == 11) อื่น ๆ @elseif($getDataEditland->bu_condo_cate_edit == 16) เกษตรกรรม @elseif($getDataEditland->bu_condo_cate_edit == null) ไม่มีข้อมูล @endif..............</span></p>
                            <p style="text-align: left; margin-left: 160px;"><strong style='font-weight: 700; color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> อื่น ๆ .........................................................................................................................................................................................................</p>
                            <p style="text-align: left; margin-left: 220px;">.........................................................................................................................................................................................................</p>
                            <p style="text-align: left; margin-left: 160px;">๓.๔ <strong><u>อื่น ๆ (ถ้ามี)</u></strong></p>
                            <p style="text-align: left; margin-left: 180px;">....................................................................................................................................................................................................................</p>
                            <p style="text-align: left; margin-left: 140px;"><strong>๔. ข้าพเจ้าได้แนบเอกสารหลักฐาน จำนวน....................ฉบับ มาเพื่อประกอบการพิจารณาคำร้องขอแก้ไข ดังนี้</strong></p>
                            <p style="text-align: left; margin-left: 160px;">๔.๑ <strong style='font-weight: 700; color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>@if($getDataEditland->dn_doc == null)⬜️@else <span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>☑️</span> @endif</span></strong> สำเนาโฉนด...................................................</p>
                            <p style="text-align: left; margin-left: 160px;">๔.๒ <strong style='font-weight: 700; color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>@if($getDataEditland->pop_id_doc == null)⬜️@else <span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>☑️</span> @endif</span></strong> สำเนาบัตรประจำตัวประชาชน.....................................................</p>
                            <p style="text-align: left; margin-left: 160px;">๔.๓ <strong style='font-weight: 700; color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>@if($getDataEditland->house_doc == null)⬜️@else <span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>☑️</span> @endif</span></strong> สำเนาทะเบียนบ้าน.............................................................</p>
                            <p style="text-align: left; margin-left: 160px;">๔.๔ <strong style='font-weight: 700; color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>@if($getDataEditland->other_doc == null)⬜️@else <span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>☑️</span> @endif</span></strong> อื่น..........................................................................................</p>
                            <p style="text-align: left; margin-left: 140px;">ขอรับรองว่า ข้อความข้างต้นเป็นจริงทุกประการ</p>
                            <p style="text-align: left; margin-left: 140px;"><br></p>
                            <p style="text-align: left; margin-left: 540px;">ลงชื่อ................................................................................ผู้ยื่นคำร้อง</p>
                            <p style="text-align: left; margin-left: 560px;">(&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$getDataEditland->title_name}}{{$getDataEditland->first_name}}  {{$getDataEditland->last_name}}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp)</p>

                            @php $datecheck = \Carbon\Carbon::parse(($getDataEditland->created_at))->format('Y-m-d'); @endphp

                            <div class="row ml-2 mr-2 mt-2 mb-4">
                                <div class="col-3">
                                    <p style="font-weight: bold;font-size: 16px;text-align: left">สำเนาโฉนด</p>
                                        @if(file_exists( public_path().'/landeditinfo/dn/'. $getDataEditland->owner_id .'_'.$getDataEditland->dn.'_dn_'.$datecheck.'.png' ))
                                            <div style="border: 2px solid black">  เลขโฉนดที่ดิน {{$getDataEditland->dn}} <br>
                                                <a style="cursor: zoom-in" href="../../landeditinfo/dn/{{$getDataEditland->owner_id}}_{{$getDataEditland->dn}}_dn_{{$datecheck}}.png" target="_blank">
                                                    <img width="100%" id="imgland" style="margin: 0 auto" src="../../landeditinfo/dn/{{$getDataEditland->owner_id}}_{{$getDataEditland->dn}}_dn_{{$datecheck}}.png"></a>
                                                <br>

                                                                            <img src="/images/photos/account/default.png" alt="">
                                            </div>
                                        @elseif(file_exists( public_path().'/landeditinfo/dn/'. $getDataEditland->owner_id .'_'.$getDataEditland->dn.'_dn_'.$datecheck.'.jpg' ))
                                        <div style="border: 2px solid black">  เลขโฉนดที่ดิน {{$getDataEditland->dn}} <br>
                                            <a style="cursor: zoom-in" href="../../landeditinfo/dn/{{$getDataEditland->owner_id}}_{{$getDataEditland->dn}}_dn_{{$datecheck}}.jpg" target="_blank">
                                                <img width="100%" id="imgland" style="margin: 0 auto" src="../../landeditinfo/dn/{{$getDataEditland->owner_id}}_{{$getDataEditland->dn}}_dn_{{$datecheck}}.jpg"></a>
                                            <br>

                                            <img src="/images/photos/account/default.png" alt="">
                                        </div>
                                        @elseif(file_exists( public_path().'/landeditinfo/dn/'. $getDataEditland->owner_id .'_'.$getDataEditland->dn.'_dn_'.$datecheck.'.pdf' ))
                                        <div style="border: 2px solid black">  เลขโฉนดที่ดิน {{$getDataEditland->dn}} <br>
                                            <a style="cursor: zoom-in" href="../../landeditinfo/dn/{{$getDataEditland->owner_id}}_{{$getDataEditland->dn}}_dn_{{$datecheck}}.pdf" target="_blank">
                                                <img width="100%" id="imgland" style="margin: 0 auto" src="../../landeditinfo/dn/{{$getDataEditland->owner_id}}_{{$getDataEditland->dn}}_dn_{{$datecheck}}.pdf"></a>
                                            <br>

                                            <img src="/images/photos/account/default.png" alt="">
                                        </div>
                                        @endif
                                </div>
                                <div class="col-3">
                                    <p style="font-weight: bold;font-size: 16px;text-align: left">สำเนาบัตรประชาชน</p>
                                    @if(file_exists( public_path().'/landeditinfo/pop_id_doc/'. $getDataEditland->owner_id .'_'.$getDataEditland->dn.'_pop_id_doc_'.$datecheck.'.png' ))
                                        <div style="border: 2px solid black">  เลขโฉนดที่ดิน {{$getDataEditland->dn}} <br>
                                            <a style="cursor: zoom-in" href="../../landeditinfo/pop_id_doc/{{$getDataEditland->owner_id}}_{{$getDataEditland->dn}}_pop_id_doc_{{$datecheck}}.png" target="_blank">
                                                <img width="100%" id="imgland" style="margin: 0 auto" src="../../landeditinfo/pop_id_doc/{{$getDataEditland->owner_id}}_{{$getDataEditland->dn}}_pop_id_doc_{{$datecheck}}.png"></a>
                                            <br>

                                            <img src="/images/photos/account/default.png" alt="">
                                        </div>
                                    @elseif(file_exists( public_path().'/landeditinfo/pop_id_doc/'. $getDataEditland->owner_id .'_'.$getDataEditland->dn.'_pop_id_doc_'.$datecheck.'.jpg' ))
                                        <div style="border: 2px solid black">  เลขโฉนดที่ดิน {{$getDataEditland->dn}} <br>
                                            <a style="cursor: zoom-in" href="../../landeditinfo/pop_id_doc/{{$getDataEditland->owner_id}}_{{$getDataEditland->dn}}_pop_id_doc_{{$datecheck}}.jpg" target="_blank">
                                                <img width="100%" id="imgland" style="margin: 0 auto" src="../../icons/pdf.png"></a>
                                            <br>

                                            <img src="/images/photos/account/default.png" alt="">
                                        </div>
                                    @elseif(file_exists( public_path().'/landeditinfo/pop_id_doc/'. $getDataEditland->owner_id .'_'.$getDataEditland->dn.'_pop_id_doc_'.$datecheck.'.pdf' ))
                                        <div style="border: 2px solid black">  เลขโฉนดที่ดิน {{$getDataEditland->dn}} <br>
                                            <a style="cursor: zoom-in" href="../../landeditinfo/pop_id_doc/{{$getDataEditland->owner_id}}_{{$getDataEditland->dn}}_pop_id_doc_{{$datecheck}}.pdf" target="_blank">
                                                <img width="100%" id="imgland" style="margin: 0 auto" src="../../icons/pdf.png"></a>
                                            <br>

                                            <img src="/images/photos/account/default.png" alt="">
                                        </div>
                                    @endif
                                </div>
                                <div class="col-3">
                                    <p style="font-weight: bold;font-size: 16px;text-align: left">สำเนาทะเบียนบ้าน</p>
                                    @if(file_exists( public_path().'/landeditinfo/house_doc/'. $getDataEditland->owner_id .'_'.$getDataEditland->dn.'_house_doc_'.$datecheck.'.png' ))
                                        <div style="border: 2px solid black">  เลขโฉนดที่ดิน {{$getDataEditland->dn}} <br>
                                            <a style="cursor: zoom-in" href="../../landeditinfo/house_doc/{{$getDataEditland->owner_id}}_{{$getDataEditland->dn}}_house_doc_{{$datecheck}}.png" target="_blank">
                                                <img width="100%" id="imgland" style="margin: 0 auto" src="../../landeditinfo/house_doc/{{$getDataEditland->owner_id}}_{{$getDataEditland->dn}}_house_doc_{{$datecheck}}.png"></a>
                                            <br>

                                            <img src="/images/photos/account/default.png" alt="">
                                        </div>
                                    @elseif(file_exists( public_path().'/landeditinfo/house_doc/'. $getDataEditland->owner_id .'_'.$getDataEditland->dn.'_house_doc_'.$datecheck.'.pdf' ))
                                        <div style="border: 2px solid black">  เลขโฉนดที่ดิน {{$getDataEditland->dn}} <br>
                                            <a style="cursor: zoom-in" href="../../landeditinfo/house_doc/{{$getDataEditland->owner_id}}_{{$getDataEditland->dn}}_house_doc_{{$datecheck}}.pdf" target="_blank">
                                                <img width="100%" id="imgland" style="margin: 0 auto" src="../../icons/pdf.png"></a>
                                            <br>

                                            <img src="/images/photos/account/default.png" alt="">
                                        </div>
                                    @elseif(file_exists( public_path().'/landeditinfo/house_doc/'. $getDataEditland->owner_id .'_'.$getDataEditland->dn.'_house_doc_'.$datecheck.'.jpg' ))
                                        <div style="border: 2px solid black">  เลขโฉนดที่ดิน {{$getDataEditland->dn}} <br>
                                            <a style="cursor: zoom-in" href="../../landeditinfo/house_doc/{{$getDataEditland->owner_id}}_{{$getDataEditland->dn}}_house_doc_{{$datecheck}}.jpg" target="_blank">
                                                <img width="100%" id="imgland" style="margin: 0 auto" src="../../icons/pdf.png"></a>
                                            <br>

                                            <img src="/images/photos/account/default.png" alt="">
                                        </div>
                                    @endif
                                </div>
                                <div class="col-3">
                                    <p style="font-weight: bold;font-size: 16px;text-align: left">อื่น ๆ</p>
                                    @if(file_exists( public_path().'/landeditinfo/other_doc/'. $getDataEditland->owner_id .'_'.$getDataEditland->dn.'_other_doc_'.$datecheck.'.png' ))
                                        <div style="border: 2px solid black">  เลขโฉนดที่ดิน {{$getDataEditland->dn}} <br>
                                            <a style="cursor: zoom-in" href="../../landeditinfo/other_doc/{{$getDataEditland->owner_id}}_{{$getDataEditland->dn}}_other_doc_{{$datecheck}}.png" target="_blank">
                                                <img width="100%" id="imgland" style="margin: 0 auto" src="../../landeditinfo/other_doc/{{$getDataEditland->owner_id}}_{{$getDataEditland->dn}}_other_doc_{{$datecheck}}.png"></a>
                                            <br>

                                            <img src="/images/photos/account/default.png" alt="">
                                        </div>
                                    @elseif(file_exists( public_path().'/landeditinfo/other_doc/'. $getDataEditland->owner_id .'_'.$getDataEditland->dn.'_other_doc_'.$datecheck.'.pdf' ))
                                        <div style="border: 2px solid black">  เลขโฉนดที่ดิน {{$getDataEditland->dn}} <br>
                                            <a style="cursor: zoom-in" href="../../landeditinfo/other_doc/{{$getDataEditland->owner_id}}_{{$getDataEditland->dn}}_other_doc_{{$datecheck}}.pdf" target="_blank">
                                                <img width="100%" id="imgland" style="margin: 0 auto" src="../../icons/pdf.png"></a>
                                            <br>

                                            <img src="/images/photos/account/default.png" alt="">
                                        </div>
                                    @elseif(file_exists( public_path().'/landeditinfo/other_doc/'. $getDataEditland->owner_id .'_'.$getDataEditland->dn.'_other_doc_'.$datecheck.'.jpg' ))
                                        <div style="border: 2px solid black">  เลขโฉนดที่ดิน {{$getDataEditland->dn}} <br>
                                            <a style="cursor: zoom-in" href="../../landeditinfo/other_doc/{{$getDataEditland->owner_id}}_{{$getDataEditland->dn}}_other_doc_{{$datecheck}}.jpg" target="_blank">
                                                <img width="100%" id="imgland" style="margin: 0 auto" src="../../icons/pdf.png"></a>
                                            <br>

                                            <img src="/images/photos/account/default.png" alt="">
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>{{ __('ภ.ด.ส.3') }}</div>
                        <div class="card-body">
                <div class="column">
                    <table class="tg">
                <tr>
                    <th class="tg-9wq8" colspan="14">รายการที่ดิน</th>
                </tr>
                <tr>
                    <td class="tg-9wq8" rowspan="2">ที่</td>
                    <td class="tg-9wq8" rowspan="2">ประเภท<br>ที่ดิน</td>
                    <td class="tg-9wq8" rowspan="2">เลขที่<br>เอกสาร<br>สิทธิ์</td>
                    <td class="tg-nrix" colspan="2">ตำแหน่งที่ดิน</td>
                    <td class="tg-nrix" rowspan="2">สถานที่ตั้ง<br>(หมู่/ชุมชน,<br>ตำบล)</td>
                    <td class="tg-nrix" colspan="3">จำนวนเนื้อที่ดิน</td>
                    <td class="tg-baqh" colspan="5">ลักษณะการทำประโยชน์(ตร.ว.)</td>
                </tr>
                <tr>
                    <td class="tg-nrix">เลขที่ดิน</td>
                    <td class="tg-nrix">หน้า<br>สำรวจ</td>
                    <td class="tg-nrix">ไร่</td>
                    <td class="tg-nrix">งาน</td>
                    <td class="tg-nrix">ตร.ว.</td>
                    <td class="tg-nrix">ประกอบ<br>เกษตรกรรม</td>
                    <td class="tg-nrix">อยู่อาศัย</td>
                    <td class="tg-nrix">อื่นๆ</td>
                    <td class="tg-nrix">ว่างเปล่า/<br>ไม่ทำ<br>ประโยชน์</td>
                    <td class="tg-nrix">ใช้<br>ประโยชน์<br>หลาย<br>ประเภท</td>
                </tr>
                @php
                    $i = 1;
                    $l = 1;
                @endphp
                    <tr>
                        <td class="tg-0lax">{{$i++}}</td>
                        <td class="tg-0lax">@isset($getDataPDS3toedit){{$getDataPDS3toedit->ldoc_name}}@endisset</td>
                        <td class="tg-0lax">@isset($getDataPDS3toedit){{$getDataPDS3toedit->dn}}@endisset</td>
                        <td class="tg-0lax">@isset($getDataPDS3toedit){{$getDataPDS3toedit->ln}}@endisset</td>
                        <td class="tg-0lax">@isset($getDataPDS3toedit){{$getDataPDS3toedit->sn}}@endisset</td>
                        <td class="tg-0lax">@isset($getDataPDS3toedit){{$getDataPDS3toedit->moo}} ซ.{{$getDataPDS3toedit->soi}} ถ.{{$getDataPDS3toedit->road}} ต.{{$getDataPDS3toedit->tambon_name}}@endisset</td>
                        <td class="tg-0lax">@isset($getDataPDS3toedit){{$getDataPDS3toedit->rai}}@endisset</td>
                        <td class="tg-0lax">@isset($getDataPDS3toedit){{$getDataPDS3toedit->yawn}}@endisset</td>
                        <td class="tg-0lax">@isset($getDataPDS3toedit){{number_format($getDataPDS3toedit->wa),2}}@endisset</td>
                        <td class="tg-0lax">
                            @isset($getDataPDS3toedit)
                            @if($getDataPDS3toedit->lutid == 6 || $getDataPDS3toedit->lutid == 7 || $getDataPDS3toedit->lutid == 8)
                                {{$getDataPDS3toedit->rai*400+$getDataPDS3toedit->yawn*100+$getDataPDS3toedit->wa}}
                            @endif
                            @endisset
                        </td>
                        <td class="tg-0lax">
                            @isset($getDataPDS3toedit)
                            @if($getDataPDS3toedit->lutid == 1 || $getDataPDS3toedit->lutid == 2 || $getDataPDS3toedit->lutid == 3 || $getDataPDS3toedit->lutid == 4 || $getDataPDS3toedit->lutid == 5)
                                {{$getDataPDS3toedit->rai*400+$getDataPDS3toedit->yawn*100+$getDataPDS3toedit->wa}}
                            @endif
                            @endisset
                        </td>
                        <td class="tg-0lax">
                            @isset($getDataPDS3toedit)
                            @if($getDataPDS3toedit->lutid == 99)
                                {{$getDataPDS3toedit->rai*400+$getDataPDS3toedit->yawn*100+$getDataPDS3toedit->wa}}
                            @endif
                            @endisset
                        </td>
                        <td class="tg-0lax">
                            @isset($getDataPDS3toedit)
                            @if($getDataPDS3toedit->lutid == 9)
                                {{$getDataPDS3toedit->rai*400+$getDataPDS3toedit->yawn*100+$getDataPDS3toedit->wa}}
                            @endif</td>      <!-- ว่างไม่ทำประโยชน์  -->
                            @endisset
                        <td class="tg-0lax"></td>       <!-- ใช้ประโยชน์หลายประเภท -->
                    </tr>


            </table>
        </div>

    </div>
        </div>
    </div>
            </div>
        </div>
    </div>


@endsection

@section('javascript')

@endsection



