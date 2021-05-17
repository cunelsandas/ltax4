@extends('dashboard.authBase')

@section('content')
    <script type="text/javascript">
        document.title = 'ยื่นคัดค้านการชำระภาษี';
    </script>

    <style>
        body {

        }
        button.print-button {
            width: 100px;
            height: 100px;
        }
        span.print-icon, span.print-icon::before, span.print-icon::after, button.print-button:hover .print-icon::after {
            border: solid 4px #333;
        }
        span.print-icon::after {
            border-width: 2px;
        }

        button.print-button {
            position: relative;
            padding: 0;
            border: 0;

            border: none;
            background: transparent;
        }

        span.print-icon, span.print-icon::before, span.print-icon::after, button.print-button:hover .print-icon::after {
            box-sizing: border-box;
            background-color: #fff;
        }

        span.print-icon {
            position: relative;
            display: inline-block;
            padding: 0;
            margin-top: 20%;

            width: 60%;
            height: 35%;
            background: #fff;
            border-radius: 20% 20% 0 0;
        }

        span.print-icon::before {
            content: " ";
            position: absolute;
            bottom: 100%;
            left: 12%;
            right: 12%;
            height: 110%;

            transition: height .2s .15s;
        }

        span.print-icon::after {
            content: " ";
            position: absolute;
            top: 55%;
            left: 12%;
            right: 12%;
            height: 0%;
            background: #fff;
            background-repeat: no-repeat;
            background-size: 70% 90%;
            background-position: center;
            background-image: linear-gradient(
                to top,
                #fff 0, #fff 14%,
                #333 14%, #333 28%,
                #fff 28%, #fff 42%,
                #333 42%, #333 56%,
                #fff 56%, #fff 70%,
                #333 70%, #333 84%,
                #fff 84%, #fff 100%
            );

            transition: height .2s, border-width 0s .2s, width 0s .2s;
        }

        button.print-button:hover {
            cursor: pointer;
        }

        button.print-button:hover .print-icon::before {
            height:0px;
            transition: height .2s;
        }
        button.print-button:hover .print-icon::after {
            height:120%;
            transition: height .2s .15s, border-width 0s .16s;
        }

        @media print{
            @page {
                size: A4 portrait;
                margin: 20mm 0 10mm 0;
            }
            body {
                margin:0;
                padding:0;
            }
            table { page-break-inside:auto }
            tr    { page-break-inside:avoid; page-break-after:auto }
            thead { display:table-header-group; }
            tfoot { display:table-footer-group; }
            .divnone { display: none}
        }
    </style>


    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card-group">
                    <div class="card p-4">
                        @if(isset($getDataEditland))
                            <h1 class="divnone">ยื่นคำร้องแก้ไขข้อมูลจากระบบ ข้อมูลที่ดินและสิ่งปลูกสร้าง <label style="text-decoration: underline">เลขที่โฉนด {{$getDataEditland->dn}}</label></h1>
                            <p class="divnone" style="margin: 0 auto;font-size: 24px;color: green">ส่งเรื่องไปที่หน่วยงานเรียบร้อยแล้ว กรุณารอการตรวจสอบและติดต่อจากหน่วยงานอีกครั้ง</p>
                            <p class="divnone" style="margin: 0 auto;font-size: 16px;color: red">พิมพ์คำร้องขอแก้ไขข้อมูล</p>
                            <button style="margin: 0 auto" class="print-button divnone" onclick="window.print()"><span class="print-icon"></span></button>

                        <script>
                            function printDiv(divName) {
                                var printContents = document.getElementById(divName).innerHTML;
                                var originalContents = document.body.innerHTML;

                                document.body.innerHTML = printContents;

                                window.print();

                                document.body.innerHTML = originalContents;
                            }
                        </script>

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
                            <p style="text-align: left; margin-left: 160px;"><strong style='font-weight: 700; color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> จำนวนที่เนื้อที่ดิน จาก.......{{$getLandFromPDS3->rai}}......ไร่.....{{$getLandFromPDS3->yawn}}.........งาน...........{{$getLandFromPDS3->wa}}...........ตร.ว.</p>
                            <p style="text-align: left; margin-left: 180px;"><strong>ขอแก้ไขเป็น</strong>..{{$getDataEditland->rai_land_edit}}.........ไร่...........{{$getDataEditland->yawn_land_edit}}.......งาน........{{$getDataEditland->wa_land_edit}}.......ตร.ว.</p>
{{--                            <p style="text-align: left; margin-left: 160px;"><strong style='font-weight: 700; color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> ลักษณะการทำประโยชน์ จาก <strong style='font-weight: 700; color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> เกษตรกรรม <strong style='font-weight: 700; color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> อยู่อาศัย <strong style='font-weight: 700; color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> อื่น ๆ <strong style='font-weight: 700; color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> ว่างเปล่า</p>--}}

                            <p style="text-align: left; margin-left: 160px;"><strong style='font-weight: 700; color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'></span><span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'>⬜️</span></strong> ลักษณะการทำประโยชน์ จาก ...........@if(isset($getLandFromPDS3->agri)) เกษตรกรรม @elseif(isset($getLandFromPDS3->living)) อยู่อาศัย @elseif(isset($getLandFromPDS3->other)) อื่น ๆ @elseif(isset($getLandFromPDS3->wasteland)) ว่างเปล่า @else ไม่มีข้อมูล  @endif..............<span style='color: rgb(0, 0, 0);  font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important;'></span></p>
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


                        @else
                        <div class="card-body">
                            <h1>ยื่นคำร้องแก้ไขข้อมูลจากระบบ ข้อมูลที่ดินและสิ่งปลูกสร้าง <label style="text-decoration: underline">เลขที่โฉนด {{$getLandFromPDS3->dn}}</label></h1>
                            <form method="POST" action="{{ route('land.store') }}" enctype="multipart/form-data">
                                @csrf

                            <div style="border: solid 2px black;padding: 12px;">
                                <label style="text-decoration: underline;font-weight: bolder">ส่วนที่ 1 ข้อมูลผู้ชำระภาษี</label>
                            <div class="row">
                                <div class="col-12" style="margin: 0 auto">
                                <label style="font-size: 14px;text-decoration: underline;text-decoration-color: red"> กรณีบุคคลธรรมดา</label>
                                </div>
                                <div class="col-lg-2 col-sm-4">
                                    <label>คำนำหน้า</label>
                                    <select class="form-control" id="title_name" name="title_name">
                                        <option value="{{$ownerData->prefix}}">{{$ownerData->prefix}}</option>
                                        @foreach($getTitle as $gtt)
                                            <option value="{{$gtt->title_name}}">{{$gtt->title_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-2 col-sm-4">
                                    <label>ชื่อ</label>
                                    <input class="form-control" type="text" id="first_name" name="first_name" value="{{$ownerData->fname}}">
                                </div>
                                <div class="col-lg-2 col-sm-4">
                                    <label>นามสกุล</label>
                                    <input class="form-control" type="text" id="last_name" name="last_name" value="{{$ownerData->lname}}">
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <label>บัตรประจำตัวประชาชน</label>
                                    <input class="form-control" type="text" id="pop_id" name="pop_id" value="{{$ownerData->pop_id}}">
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <label>เบอร์โทรศัพท์</label>
                                    <input class="form-control" type="text" id="telephone" name="telephone" value="{{$ownerData->telephone}}">
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-lg-1 col-sm-2">
                                    <label>บ้านเลขที่</label>
                                    <input class="form-control" type="text" id="address" name="address" value="{{$ownerData->address}}">
                                </div>
                                <div class="col-lg-1 col-sm-2">
                                    <label>หมู่</label>
                                    <input class="form-control" type="text" id="moo" name="moo" value="{{$ownerData->moo}}">
                                </div>
                                <div class="col-lg-1 col-sm-2">
                                    <label>ตรอก/ซอย</label>
                                    <input class="form-control" type="text" id="soi" name="soi" value="{{$ownerData->soi}}">
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <label>ถนน</label>
                                    <input class="form-control" type="text" id="road" name="road" value="{{$ownerData->road}}">
                                </div>
                                <div class="col-lg-2 col-sm-4">
                                    <label>แขวง/ตำบล</label>
                                    <input class="form-control" type="text" id="tambon" name="tambon" value="{{$getDistrict->district}}">
                                </div>
                                <div class="col-lg-2 col-sm-4">
                                    <label>เขต/อำเภอ</label>
                                    <input class="form-control" type="text" id="amphoe" name="amphoe" value="{{$getDistrict->amphoe}}">
                                </div>
                                <div class="col-lg-2 col-sm-4">
                                    <label>จังหวัด</label>
                                    <input class="form-control" type="text" id="province" name="province" value="{{$getDistrict->province}}">
                                </div>
                            </div>
                                <div class="row mt-1">
                                    <div class="col-12" style="margin: 0 auto">
                                        <label style="font-size: 14px;text-decoration: underline;text-decoration-color: red"> กรณีนิติบุคคล</label>
                                    </div>
                                    <div class="col-lg-4 col-sm-8">
                                        <label>ชื่อ</label>
                                        <input class="form-control" type="text" id="name_niti" name="name_niti" value="" placeholder="ชื่อ">
                                    </div>
{{--                                    <div class="col-lg-3 col-sm-6">--}}
{{--                                        <label>นามสกุล</label>--}}
{{--                                        <input class="form-control" type="text" id="last_name_niti" name="last_name_niti" value="" placeholder="นามสกุล">--}}
{{--                                    </div>--}}
                                    <div class="col-lg-4 col-sm-8">
                                        <label>เลขที่ทะเบียนนิติบุคคล</label>
                                        <input class="form-control" type="text" id="juristic_id_niti" name="juristic_id_niti" value="">
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <label>มีสำนักงานใหญ่เลขที่</label>
                                        <input class="form-control" type="text" id="headquarter_address_niti" name="headquarter_address_niti" value="">
                                    </div>
                                    <div class="col-lg-1 col-sm-2">
                                        <label>หมู่ที่</label>
                                        <input class="form-control" type="text" id="headquarter_moo_niti" name="headquarter_moo_niti" value="">
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-1 col-sm-2">
                                        <label>ตรอก/ซอย</label>
                                        <input class="form-control" type="text" id="headquarter_soi_niti" name="headquarter_soi_niti" value="">
                                    </div>
                                    <div class="col-lg-2 col-sm-4">
                                        <label>ถนน</label>
                                        <input class="form-control" type="text" id="headquarter_road_niti" name="headquarter_road_niti" value="">
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <label>แขวง/ตำบล</label>
                                        <input class="form-control" type="text" id="headquarter_tambon_niti" name="headquarter_tambon_niti" value="">
                                    </div>
                                    <div class="col-lg-2 col-sm-4">
                                        <label>เขต/อำเภอ</label>
                                        <input class="form-control" type="text" id="headquarter_amphoe_niti" name="headquarter_amphoe_niti" value="">
                                    </div>
                                    <div class="col-lg-2 col-sm-4">
                                        <label>จังหวัด</label>
                                        <input class="form-control" type="text" id="headquarter_province_niti" name="headquarter_province_niti" value="">
                                    </div>
                                    <div class="col-lg-2 col-sm-4">
                                        <label>โทรศัพท์</label>
                                        <input class="form-control" type="text" id="headquarter_telephone_niti" name="headquarter_telephone_niti" value="">
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-3 col-sm-6">
                                        <label>โดย</label>
                                        <input class="form-control" type="text" id="by_first_niti" name="by_first_niti" value="" placeholder="ชื่อ">
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <label>โดย</label>
                                        <input class="form-control" type="text" id="by_last_niti" name="by_last_niti" value="" placeholder="นามสกุล">
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <label>บัตรประจำตัวประชาชน</label>
                                        <input class="form-control" type="text" id="pop_id_niti" name="pop_id_niti" value="">
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-6 col-sm-10">
                                        <label>ผู้มีอำนาจลงนามผูกพันนิติบุคคล ตามหนังสือรับรองของสำนักทะเบียนหุ้นส่วนบริษัท</label>
                                        <input class="form-control" type="text" id="company_name_niti" name="company_name_niti" value="">
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <label>ลงวันที่</label>
                                        <input class="form-control" type="date" id="date_input_niti" name="date_input_niti" value="">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12 col-sm-12">
                                        <label style="color: red">*แนบสำเนาหนังสือรับรอง และหนังสือมอบอำนาจ (ถ้ามี) ในส่วนของเอกสารหลักฐานเพื่อประกอบพิจารณาคำร้องขอแก้ไข </label>
                                    </div>
                                </div>
                            </div>
                            <div style="border: solid 2px black;padding: 12px;">
                                <label style="text-decoration: underline;font-weight: bolder">ส่วนที่ 2 ข้าพเจ้าได้รับแบบแจ้งข้อมูลรายการที่ดินและสิ่งปลูกสร้าง/แบบแจ้งข้อมูลรายการห้องชุด</label>
                                <div class="row mt-1">
                                    <div class="col-lg-2 col-sm-4">
                                        <label>รายการที่ดิน ชุดที่</label>
                                        <input class="form-control" type="text"  value="{{$getLandData->lb}}" readonly>
                                    </div>
                                    <div class="col-lg-1 col-sm-2">
                                        <label>หน้า</label>
                                        <input class="form-control" type="text"  value="{{$getLandData->lp}}" readonly>
                                    </div>
                                    <div class="col-lg-1 col-sm-2">
                                        <label>ลำดับที่</label>
                                        <input class="form-control" type="text" value="{{$getLandFromPDS3->sn}}" readonly>
                                    </div>
                                    <div class="col-lg-2 col-sm-4">
                                        <label>ลงวันที่</label>
                                        <input class="form-control" type="text"  value="{{Thaidateonly($getLandData->create_at)}}" readonly>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 col-sm-4">
                                        <label>รายการที่สิ่งปลูกสร้าง ชุดที่</label>
                                        <input class="form-control" type="text"  value="{{$getLandData->lb}}" readonly>
                                    </div>
                                    <div class="col-lg-1 col-sm-2">
                                        <label>หน้า</label>
                                        <input class="form-control" type="text"  value="{{$getLandData->lp}}" readonly>
                                    </div>
                                    <div class="col-lg-1 col-sm-2">
                                        <label>ลำดับที่</label>
                                        <input class="form-control" type="text"  value="{{$getLandFromPDS3->sn}}" readonly>
                                    </div>
                                    <div class="col-lg-2 col-sm-4">
                                        <label>ลงวันที่</label>
                                        <input class="form-control" type="text"  value="{{Thaidateonly($getLandData->create_at)}}" readonly>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 col-sm-4">
                                        <label>รายการห้องชุด ชุดที่</label>
                                        <input class="form-control" type="text"  value="{{$getLandData->lb}}" readonly>
                                    </div>
                                    <div class="col-lg-1 col-sm-2">
                                        <label>หน้า</label>
                                        <input class="form-control" type="text"  value="{{$getLandData->lp}}" readonly>
                                    </div>
                                    <div class="col-lg-1 col-sm-2">
                                        <label>ลำดับที่</label>
                                        <input class="form-control" type="text"  value="{{$getLandFromPDS3->sn}}" readonly>
                                    </div>
                                    <div class="col-lg-2 col-sm-4">
                                        <label>ลงวันที่</label>
                                        <input class="form-control" type="text"  value="{{Thaidateonly($getLandData->create_at)}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div style="border: solid 2px black;padding: 12px;">
                                <label style="text-decoration: underline;font-weight: bolder">ส่วนที่ 3 ข้าพเจ้าขอแก้ไขรายการที่ดินและสิ่งปลูกสร้าง/รายการห้องชุด ตามข้อ 2 ดังนี้</label>
                                <div class="row mt-1">
                                    <div class="col-12">
                                        <label><label style="font-weight: bolder">3.1 ที่ดิน</label> เจ้าของกรรมสิทธิ์จาก <label style="text-decoration: underline;text-decoration-color: red;">{{$ownerData->fname}} {{$ownerData->lname}}</label> <strong>ขอแก้ไขเป็น</strong></label>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <input class="form-control" type="text" id="first_name_land_edit" name="first_name_land_edit" value="" placeholder="ชื่อ">
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <input class="form-control" type="text" id="last_name_land_edit" name="last_name_land_edit" value="" placeholder="นามสกุล">
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <input class="form-control" type="text" id="reason_land" name="reason_land" value="" placeholder="เหตุผลที่ขอแก้ไข">
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-12">
                                        <label>จำนวนเนื้อที่ดินจาก <label style="text-decoration: underline;text-decoration-color: red;">{{$getLandData->r}} ไร่ {{$getLandData->y}} งาน {{$getLandData->w}} ตร.ว. </label> <strong></strong>ขอแก้ไขเป็น</label>
                                    </div>
                                    <div class="col-lg-1 col-sm-2">
                                        <input class="form-control" type="text" id="rai_land_edit" name="rai_land_edit" value="" placeholder="ไร่">
                                    </div>
                                    <div class="col-lg-1 col-sm-2">
                                        <input class="form-control" type="text" id="yawn_land_edit" name="yawn_land_edit" value="" placeholder="งาน">
                                    </div>
                                    <div class="col-lg-1 col-sm-2">
                                        <input class="form-control" type="text" id="wa_land_edit" name="wa_land_edit" value="" placeholder="ตร.ว.">
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-12">
                                        <label>ลักษณะการทำประโยชน์ จาก <label style="text-decoration: underline;text-decoration-color: red;">@if(isset($getLandFromPDS3->agri)) เกษตรกรรม @elseif(isset($getLandFromPDS3->living)) อยู่อาศัย @elseif(isset($getLandFromPDS3->other)) อื่น ๆ @elseif(isset($getLandFromPDS3->wasteland)) ว่างเปล่า @else ไม่มีข้อมูล  @endif</label> ขอแก้ไขเป็น</label>
                                    </div>
                                    <div class="col-lg-4 col-sm-8">
                                        <select class="form-control" id="lutname_land_edit" name="lutname_land_edit">
                                            <option value="">--- กรุณาเลือก ---</option>
                                            @foreach($getLandUseType as $glut)
                                                <option value="{{$glut->lutid}}">{{$glut->lutname}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <hr style="height: 2px;color: #c3c3c3">
                                <div class="row mt-1">
                                    <div class="col-12">
                                        <label><label style="font-weight: bolder">3.2 สิ่งปลูกสร้าง</label> เจ้าของกรรมสิทธิ์จาก <label style="text-decoration: underline;text-decoration-color: red;">{{$ownerData->fname}} {{$ownerData->lname}}</label> ขอแก้ไขเป็น</label>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <input class="form-control" type="text" id="first_name_build_edit" name="first_name_build_edit" value="" placeholder="ชื่อ">
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <input class="form-control" type="text" id="last_name_build_edit" name="last_name_build_edit" value="" placeholder="นามสกุล">
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <input class="form-control" type="text" id="reason_build" name="reason_build" value="" placeholder="เหตุผลที่ขอแก้ไข">
                                    </div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-12 mt-1">
                                        <label>สิ่งปลูกสร้าง จาก ลักษณะสิ่งปลูกสร้าง <label style="text-decoration: underline;text-decoration-color: red;">@if(isset($getDataBuildingPDS3->bt_desc)){{$getDataBuildingPDS3->bt_desc}}@else ไม่มีข้อมูล @endif</label>  ขอแก้ไขเป็น</label>
                                    </div>
                                    <div class="col-lg-4 col-sm-8">
                                        <select class="form-control" id="btname_build_edit" name="btname_build_edit">
                                            <option value="">--- กรุณาเลือก ---</option>
                                            @foreach($getDataBuildingType as $gdbt)
                                            <option value="{{$gdbt->bt_desc}}">{{$gdbt->bt_desc}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-1 col-sm-2">
                                        <label>ขนาดพื้นที่</label>
                                    </div>
                                    <div class="col-lg-1 col-sm-2">
                                        <input class="form-control" type="text" id="area_build_edit" name="area_build_edit" value="" placeholder="ตร.ม.">
                                    </div>
                                    <div class="col-lg-1 col-sm-2">
                                        <input class="form-control" type="text" id="width_build_edit" name="width_build_edit" value="" placeholder="กว้าง">
                                    </div>
                                    <div class="col-lg-1 col-sm-2">
                                        <input class="form-control" type="text" id="length_build_edit" name="length_build_edit" value="" placeholder="ยาว">
                                    </div>
                                    <div class="col-lg-1 col-sm-2">
                                        <input class="form-control" type="text" id="floor_build_edit" name="floor_build_edit" value="" placeholder="จำนวนชั้น">
                                    </div>
                                    <div class="col-12 mt-1">
                                        <label>ลักษณะการทำประโยชน์ จาก <label style="text-decoration: underline;text-decoration-color: red;">@if(isset($getDataBuildingPDS3->usage_desc)){{$getDataBuildingPDS3->usage_desc}}@else ไม่มีข้อมูล @endif</label> ขอแก้ไขเป็น</label>
                                    </div>
                                    <div class="col-lg-4 col-sm-8">
                                        <select class="form-control" id="bucate_build_edit" name="bucate_build_edit">
                                            <option value="">--- กรุณาเลือก ---</option>
                                            @foreach($getDataBuildingCate as $gbdc)
                                                <option value="{{$gbdc->usage_id}}">{{$gbdc->usage_desc}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-1 col-sm-2">
                                        <label>ขนาดเนื้อที่ดิน</label>
                                    </div>
                                    <div class="col-lg-1 col-sm-2">
                                        <input class="form-control" type="text" id="area_builduse_edit" name="area_builduse_edit" value="" placeholder="ตร.ม.">
                                    </div>
                                </div>
                                <hr style="height: 2px;color: #c3c3c3">

{{--                                แสดงจากนิติบุคคล--}}
{{--                                @isset($getDataBuildingCondoPDS3)--}}

                                <div class="row mt-1">
                                    <div class="col-12">
                                        <label><label style="font-weight: bolder">3.3 ห้องชุด</label> เจ้าของกรรมสิทธิ์จาก <label style="text-decoration: underline;text-decoration-color: red;">{{$ownerData->fname}} {{$ownerData->lname}}</label> ขอแก้ไขเป็น</label>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <input class="form-control" type="text" id="first_name_build_condo_edit" name="first_name_build_condo_edit" value="" placeholder="ชื่อ">
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <input class="form-control" type="text" id="last_name_build_condo_edit" name="last_name_build_condo_edit" value="" placeholder="นามสกุล">
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <input class="form-control" type="text" id="reason_build_condo" name="reason_build_condo" value="" placeholder="เหตุผลที่ขอแก้ไข">
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-12">
                                        <label>ห้องชุด จาก ขนาดพื้นที่ <label style="text-decoration: underline;text-decoration-color: red;">............... ตร.ม.</label> ขอแก้ไขเป็น</label>
                                    </div>
                                    <div class="col-lg-1 col-sm-2">
                                        <input class="form-control" type="text" id="area_building_condo_edit" name="area_building_condo_edit" value="" placeholder="ตร.ม.">
                                    </div>
                                    <div class="col-lg-1 col-sm-2">
                                        <input class="form-control" type="text" id="width_building_condo_edit" name="width_building_condo_edit" value="" placeholder="กว้าง ม.">
                                    </div>
                                    <div class="col-lg-1 col-sm-2">
                                        <input class="form-control" type="text" id="length_building_condo_edit" name="length_building_condo_edit" value="" placeholder="ยาว ม.">
                                    </div>
                                    <div class="col-lg-1 col-sm-2">
                                        <input class="form-control" type="text" id="floor_building_condo_edit" name="floor_building_condo_edit" value="" placeholder="ชั้น">
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-12">
                                        <label>ลักษณะการทำประโยชน์จาก <label style="text-decoration: underline;text-decoration-color: red;">............... </label> ขอแก้ไขเป็น</label>
                                    </div>
                                    <div class="col-lg-4 col-sm-8">
                                        <select class="form-control" id="bu_condo_cate_edit" name="bu_condo_cate_edit">
                                            <option value="">--- กรุณาเลือก ---</option>
                                            @foreach($getDataBuildingCate as $gbdc)
                                                <option value="{{$gbdc->usage_id}}">{{$gbdc->usage_desc}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--                                @endisset--}}

                                <hr style="height: 2px;color: #c3c3c3">


                                <div class="row">
                                    <div class="col-12">
                                        <label>ข้าพเจ้าได้แนบเอกสารหลักฐาน มาเพื่อประกอบพิจารณาคำร้องขอแก้ไข ดังนี้</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <label>- สำเนาโฉนด (ไฟล์ pdf หรือรูปภาพเท่านั้น)</label>
                                        <input type="file" name="dn_doc" id="dn_doc">
{{--                                        <td width="30%"><input type="submit" align="left" name="upload" class="btn-primary" value="อัพโหลด"></td>--}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <label>- สำเนาบัตรประจำตัวประชาชน (ไฟล์ pdf หรือรูปภาพเท่านั้น)</label>
                                        <input type="file" name="pop_id_doc" id="pop_id_doc">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <label>- สำเนาทะเบียนบ้าน (ไฟล์ pdf หรือรูปภาพเท่านั้น)</label>
                                        <input type="file" name="house_doc" id="house_doc">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <label>- อื่นๆ (ไฟล์ pdf หรือรูปภาพเท่านั้น)</label>
                                        <input type="file" name="other_doc" id="other_doc">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-8 mt-2" style="text-align: center; margin: 0 auto">
                                <label style="color: red">***กรุณาตรวจสอบข้อมูลให้ถูกต้องก่อนการยืนยันคำขอแก้ไขข้อมูล***</label>
                                <button class="btn btn-block btn-success" type="submit" onclick="return confirm('บันทึกข้อมูล')">บันทึกข้อมูล</button>
                            </div>
                            <div class="col-lg-4 col-sm-8 mt-2" style="text-align: center; margin: 0 auto">
                                <button class="btn btn-block btn-warning" type="reset" onclick="return confirm('ต้องการล้างค่าข้อมูลทั้งหมดหรือไม่?')">ล้างค่าข้อมูลทั้งหมด</button>
                            </div>
                            </form>
                        </div>

                    </div>


                </div>
                @endisset
                <br>
            </div>
        </div>

        <div class="container mt-2 divnone">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card-group">
                    <div class="card p-4">
                        <div class="card-body">
                            <h1>หนังสือยื่นคัดค้าน</h1>
                            <br>
                            <a href="https://www.reic.or.th/Upload/20_20257_1570159477_77369.PDF#page=12" target="_blank" >คำร้องคัดค้านการประเมินภาษีหรือการเรียกเก็บภาษีที่ดินและสิ่งปลูกสร้าง (ภ.ด.ส. 10)</a> <br><br>
                            <a href="https://www.reic.or.th/Upload/20_20257_1570159477_77369.PDF#page=11" target="_blank">คำร้องขอรับเงินภาษีที่ดินและสิ่งปลูกสร้างคืน (ภ.ด.ส. 9)</a><br><br>
                            <a href="https://www.reic.or.th/Upload/20_20257_1570159477_77369.PDF#page=7" target="_blank">แบบแจ้งการเปลี่ยนแปลงการใช้ประโยชน์ในที่ดินหรือสิ่งปลูกสร้าง (ภ.ด.ส. 5)</a>
                    </div>

                </div>

            </div>
                <br>
                <div class="col-lg-4 col-sm-8" style="text-align: center; margin: 0 auto">
                    <td>
                        <a href="{{ url()->previous() }}" class="btn btn-block btn-primary">ย้อนกลับ</a>
                        {{--                                <a href="{{ url('/buildings/' . $input->owner_id . '/edit') }}" class="btn btn-block btn-success" >บันทึกข้อมูลโรงเรือน/สิ่งปลูกสร้าง</a>--}}
                    </td> <br>
                </div>
        </div>
    </div>


@endsection

@section('javascript')

@endsection
