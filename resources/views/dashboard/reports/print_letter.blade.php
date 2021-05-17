@extends('dashboard.baseprint')

@section('content')
    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
    <style>
        @import url({{ asset('fonts/thsarabunnew.css') }});
        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }
        .center {
            margin: 2% auto;
            width: 20%;
        }

        .page {
            font-family:THSarabunNew,THBaijam,THK2DJuly8,THChakraPetch,THNiramitAS,Tahoma ,sans-serif;
            font-size:12px;
            width: 50%;
            min-height: 68cm;
            padding: 1cm;
            margin: 1cm auto;
            border: 1px #D3D3D3 solid;
            border-radius: 5px;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            text-align: justify;
            text-justify: inter-word;

        }
        .subpage {
            padding: 0.5cm;
            height: 245mm;
            outline: 2cm;
            background:url({{ asset('image/krut.jpg') }}) no-repeat top center;
            text-align: justify;
            text-justify: inter-word;
        }
        #thfont {
            font-family: THSarabunNew,Tahoma ,sans-serif;
            text-align: justify;
            text-justify: inter-word;

        }
        #thfont table td{
            font-size:12px;
            text-align: justify;
            text-justify: inter-word;
        }

        @page {

            size: A4;
            margin: 0;
        }
        @media print {
            .no-print, .no-print *
            {
                display: none !important;
            }

            .page {
                font-family:THSarabunNew,THBaijam,THK2DJuly8,THChakraPetch,THNiramitAS,Tahoma ,sans-serif;
                font-size:14px;
                margin-right: 12px;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
                text-align: justify;
                text-justify: inter-word;
            }
            .subpage {

                padding: 0.5cm;
                height: 240mm;
                outline: 2cm;
                text-align: justify;
                text-justify: inter-word;
            }
            #thfont {
                font-family:THSarabunNew,THBaijam,THK2DJuly8,THChakraPetch,THNiramitAS,Tahoma ,sans-serif;
                font-size:16px;
                text-align: justify;
                text-justify: inter-word;
            }
            #thfont table td{
                font-size:16px;
                text-align: justify;
                text-justify: inter-word;
            }
        }
    </style>
    <body>
    <div class="no-print center">
        <a style="text-align: center" class="btn btn-info btn-lg col-12" onclick="window.print()" target="_blank">
            <span class="cil-print btn-icon mr-2"></span> พิมพ์จดหมายแจ้งการตรวจสอบบัญชีรายการ
        </a>
    </div>

    <div class="page">
        <div class="subpage">
            <div id="thfont">
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;  ที่&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;สำนักงาน</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; เลขที่</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;วันที่  {{Thaidatefull(date(now()))}}</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  เรื่อง&nbsp; แจ้งการตรวจสอบบัญชีรายการที่ดินและสิ่งปลูกสร้าง</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  เรียน&nbsp; คุณ{{$getDataOwner->fname}} {{$getDataOwner->lname}}</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;สิ่งที่ส่งมาด้วย&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ตามที่.................................ได้ดำเนินการสำรวจตรวจสอบข้อมูลที่ดินและสิ่งปลูกสร้างภายในเขต</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;.........................ที่มีการเพิ่มเติม เปลี่ยนแปลงหรือแก้ไข รวมถึงที่ผู้เสียภาษีแจ้งการเปลี่ยนแปลงการใช้ประโยชน์ใน</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ที่ดินและสิ่งปลูกสร้าง เพื่อนำข้อมูลมาจัดทำบัญชีรายการที่ดินและสิ่งปลูกสร้าง(ภ.ด.ส.๓)และบัญชีรายการห้องชุด</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(ภ.ด.ส.๔) ประจำปี พ.ศ. ............ โดยอาศัยอำนาจตามพระราชบัญญัติภาษีที่ดินและสิ่งปลูกสร้าง พ.ศ. ................</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;มาตรา......... และระเบียบกระทรวงมหาดไทยว่าด้วยการดำนเนิการตามพระราชบัญญัติภาษีที่ดินและสิ่งปลูกสร้าง </p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;พ.ศ.............................. นั้น</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;......................................จึงข้อจัดส่งข้อมูลบัญชีรายการที่ดินและสิ่งปลูกสร้าง เพื่อให้ท่านได้ตรวจ</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;สอบความถูกต้องของข้อมูล ซึ่งอยู่ใน ชุดที่.........หน้าที่...........ลำดับที่.................ของประกาศ.................................</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ลงวันที่ ............... เดือน..............พ.ศ. ................ หากผู้เสียภาษีตรวจสอบแล้วเห็นว่าบัญชีรายการที่ดินและสิ่งปลูก</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;สร้างที่ได้จัดทำขึ้นไม่ถูกต้องตามความเป็นจริง ให้ยื่นคำร้องต่อผู้บริหารท้องถิ่นเพื่อขอแก้ไขให้ถูกต้องได้ที่ฝ่ายแผนที่</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ภาษีและทะเบียนทรัพย์สิน หรือสำนักงานแขวงที่ทรัพย์สินนั้นตั้งอยู่ภายใน ๑๕ วันนับตั้งแต่วันที่ได้รับหนังสือฉบับนี้</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;หากพ้นกำหนดระยะเวลาดังกล่าว ถือว่าข้อมูลตามบัญชีรายการที่ดินและสิ่งปลูกสร้างถูกต้องครบถ้วน และทาง.......</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;..................................จะได้ดำเนินการประเมินภาษีต่อไป</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; จึงเรียนมาเพื่อทราบและดำเนินการต่อไป</p>
                <p>&nbsp;</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ขอแสดงความนับถือ</p>
                <p>&nbsp;</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;........................................</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(..........................................)</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ตำแหน่ง............................................</p>
                <p>&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;สำนักการคลัง</p>
                <p>&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ส่วนพัฒนารายได้</p>
                <p>&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ฝ่ายแผนที่ภาษีและทะเบียนทรัพย์สิน</p>
                <p>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;โทรศัพท์ .............................</p>

                <br>
                <br>
                <br>
                <br>

                <table style="width: 29%; margin-left: calc(68%);margin-top:2%;border:2px solid black;">
                    <tbody>
                    <tr>
                        <td style="width: 100.0000%;padding: 6px">
                            <div style="text-align: center;"><p style="font-weight: bolder">ชำระค่าฝากส่งเป็นรายเดือน</p></div>
                            <p style="text-align: center;font-weight: bolder">ใบอนุญาตเลขที่ ....................</p>
                            <p style="text-align: center;font-weight: bolder">ไปรษณีย์................................</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <p style="font-weight: bolder">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ฝ่ายแผนที่ภาษีและทะเบียนทรัพย์สิน</p>
                <p style="font-weight: bolder">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;..........................................................</p>
                <p style="font-weight: bolder">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;..........................................................</p>
                <p style="font-weight: bolder">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;..........................................................</p>
                <p style="font-weight: bolder">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (.....................................) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b>เรียน</b> &nbsp; &nbsp; &nbsp; คุณ{{$getDataOwner->fname}} {{$getDataOwner->lname}} </p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>....................................................................</span>&nbsp;</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>....................................................................</span>&nbsp;</p>

                <br>
                <br>
                <br>

                <p style="margin-left:44%;text-decoration: underline;font-weight: bolder">ระบบภาษีออนไลน์</p>
                <img style="margin-left:35%" src="{{ asset('image/qrindex.png') }}">

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ตรวจสอบข้อมูล แก้ไขข้อมูล งานแผนที่ภาษี</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;โทร.</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Email : </p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b style="text-decoration: underline">หมายเหตุ</b> กรุณาระบุ ชื่อ-นามสกุล หมายเลขโทรศัพท์ และรายละเอียดเบื้องต้น</p>
                <p style="font-weight: bolder">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ตรวจสอบการชำระภาษีที่ดินและสิ่งปลูกสร้าง</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;แขวง................. โทร. ...........................</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;แขวง................. โทร. ...........................</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;แขวง................. โทร. ...........................</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;แขวง................. โทร. ...........................</p>
            </div>
        </div>
    </div>
{{--    <a style="margin: 0 auto;text-align: center" class="btn btn-info btn-lg col-3" onclick="printDiv()" target="_blank">--}}
{{--        <span class="cil-print btn-icon mr-2"></span> พิมพ์จดหมายแจ้งการตรวจสอบบัญชีรายการ--}}
{{--    </a>--}}
    </body>

@endsection


@section('javascript')
    <script>
        function printDiv() {
            var divContents = document.getElementById("letter").innerHTML;
            var a = window.open('', '', '');
            a.document.write('<style>@page{size:portrait;}</style><html><head><title>หนังสือแจ้งการประเมินภาษีที่ดินและสิ่งปลูกสร้าง</title>');
            a.document.write('<html>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>
@endsection
