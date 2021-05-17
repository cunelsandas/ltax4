@extends('dashboard.base')

@section('content')

    <style>
        @media print {
            body, page[size="A4"] {
                font-family: THSarabunNew, serif !important;
                margin: 0 auto !important;
                margin-bottom: 0.5cm !important;
                box-shadow: 0;
                background-color: white;
                size: A4 landscape !important;
                width: 29.7cm !important;
                height: 21.0cm !important;
            }
        }
    </style>
    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
    {{--   print ภ.ด.ส.3--}}
    <div class="container-fluid" style="overflow-x: scroll">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card" style="width: 150%">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>แบบบัญชีรายการที่ดินและสิ่งปลูกสร้าง (ภ.ด.ส. 3)</div>
                        <div class="card-body" id="PDS3">
                            <link href="{{ asset('css/stylesprint.css') }}" rel="stylesheet" media="print">
    <style type="text/css">
        .tg  {border-collapse:collapse;border-spacing:0;}
        .tg td{font-size:14px;padding:10px 5px;border-style:solid;border-width:2px;overflow:hidden;word-break:normal;border-color:black;}
        .tg th{font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:2px;overflow:hidden;word-break:normal;border-color:black;}
        .tg .tg-9wq8{border-color:inherit;text-align:center;vertical-align:middle}
        .tg .tg-baqh{text-align:center;vertical-align:top}
        .tg .tg-nrix{text-align:center;vertical-align:middle}
        .tg .tg-0lax{text-align:left;vertical-align:top}
    </style>

    <h2 align="center">แบบบัญชีรายการที่ดินและสิ่งปลูกสร้าง (ภ.ด.ส. 3)</h2>
                            <br>
    <table class="tg">
        <tr>
            <th class="tg-9wq8" colspan="14">รายการที่ดิน</th>
            <th class="tg-baqh" colspan="11">รายการสิ่งปลูกสร้าง</th>
        </tr>
        <tr>
            <td class="tg-9wq8" rowspan="2">ที่</td>
            <td class="tg-9wq8" rowspan="2">ประเภท<br>ที่ดิน</td>
            <td class="tg-9wq8" rowspan="2">เลขที่<br>เอกสาร<br>สิทธิ์</td>
            <td class="tg-nrix" colspan="2">ตำแหน่งที่ดิน</td>
            <td class="tg-nrix" rowspan="2">สถานที่ตั้ง<br>(หมู่/ชุมชน,<br>ตำบล)</td>
            <td class="tg-nrix" colspan="3">จำนวนเนื้อที่ดิน</td>
            <td class="tg-baqh" colspan="5">ลักษณะการทำประโยชน์(ตร.ว.)</td>
            <td class="tg-nrix" rowspan="2">ที่</td>
            <td class="tg-nrix" rowspan="2">บ้านเลขที่</td>
            <td class="tg-nrix" rowspan="2">ประเภท<br>สิ่งปลูกสร้าง<br>(ตามบัญชี<br>กรมธนารักษ์)</td>
            <td class="tg-nrix" rowspan="2">ลักษณะ<br>สิ่งปลูกสร้าง<br>(ตึก/ไม้/<br>ครึ่งตึกครึ่งไม้)</td>
            <td class="tg-nrix" rowspan="2">ขนาดพื้นที่รวม<br>ของสิ่งปลูกสร้าง<br>(ตร.ม.)</td>
            <td class="tg-nrix" colspan="4">ลักษณะการทำประโยชน์ (ตร.ม.)</td>
            <td class="tg-nrix" rowspan="2">อายุโรงเรือน<br>หรือ<br>สิ่งปลูกสร้าง<br>(ปี)</td>
            <td class="tg-nrix" rowspan="2">หมายเหตุ</td>
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
            <td class="tg-nrix">ประกอบ<br>เกษตรกรรม</td>
            <td class="tg-nrix">อยู่อาศัย</td>
            <td class="tg-nrix">อื่นๆ</td>
            <td class="tg-nrix">ว่างเปล่า/<br>ไม่ทำ<br>ประโยชน์</td>
        </tr>

        @php
            $i = 1;
            $l = 1;
        @endphp
        @foreach($getDataPDS3 as $key => $gdtpds3)
        <tr>
            <td class="tg-0lax">{{$getDataPDS3->firstItem()+$key}}</td>
            <td class="tg-0lax">{{$gdtpds3->land_type}}</td>
            <td class="tg-0lax">{{$gdtpds3->dn}}</td>
            <td class="tg-0lax">{{$gdtpds3->ln}}</td>
            <td class="tg-0lax">{{$gdtpds3->sn}}</td>
            <td class="tg-0lax">{{$gdtpds3->location}}</td>
            <td class="tg-0lax">{{$gdtpds3->rai}}</td>
            <td class="tg-0lax">{{$gdtpds3->yawn}}</td>
            <td class="tg-0lax">{{number_format($gdtpds3->wa),2}}</td>
            <td class="tg-0lax">
                @if(isset($gdtpds3->agri))
                    {{$gdtpds3->agri}}
                @endif
            </td>
            <td class="tg-0lax">
                @if(isset($gdtpds3->living))
                    {{$gdtpds3->living}}
                @endif
            </td>
            <td class="tg-0lax">
                @if(isset($gdtpds3->other))
                    {{$gdtpds3->other}}
                @endif
            </td>
            <td class="tg-0lax">
                @if(isset($gdtpds3->wasteland))
                    {{$gdtpds3->wasteland}}
                @endif
            </td>      <!-- ว่างไม่ทำประโยชน์  -->
            <td class="tg-0lax">
                @if(isset($gdtpds3->mixused))
                    {{$gdtpds3->mixused}}
                @endif
            </td>       <!-- ใช้ประโยชน์หลายประเภท -->
            <!-- รายการสิ่งปลูกสร้างแล้วนะ -->

            <td class="tg-0lax">{{$getDataPDS3->firstItem()+$key}}</td>
            <td class="tg-0lax">{{$gdtpds3->address}}</td>
            <td class="tg-0lax">{{$gdtpds3->b_type}}</td>
            <td class="tg-0lax">{{$gdtpds3->b_mat}}</td>
            <td class="tg-0lax">{{$gdtpds3->b_area}}</td>
            <td class="tg-0lax">
                @if(isset($gdtpds3->b_agri))
                    {{$gdtpds3->b_agri}}
                @endif
            </td>
            <td class="tg-0lax">
                @if(isset($gdtpds3->b_living))
                    {{$gdtpds3->b_living}}
                @endif
            </td>
            <td class="tg-0lax">
                @if(isset($gdtpds3->b_other))
                    {{$gdtpds3->b_other}}
                @endif
            </td>
            <td class="tg-0lax">
                @if(isset($gdtpds3->b_waste))
                    {{$gdtpds3->b_waste}}
                @endif
            </td>
            <td class="tg-0lax">{{$gdtpds3->b_age}}</td>
            <td class="tg-0lax">{{$gdtpds3->remark}}</td>
        </tr>


            @endforeach

    </table>
                        </div>
                        <a style="margin: 0 auto;text-align: center" class="btn btn-info btn-lg col-3" onclick="printDiv()" target="_blank">
                            <span class="cil-print btn-icon mr-2"></span> พิมพ์แบบบัญชีรายการที่ดินและสิ่งปลูกสร้าง (ภ.ด.ส. 3)
                        </a>
                    </div>
                    {{ $getDataPDS3->links() }}
                </div>
            </div>
        </div>
    </div>


@endsection


@section('javascript')
                                <script>
                                    function printDiv() {
                                        var divContents = document.getElementById("PDS3").innerHTML;
                                        var a = window.open('', '', '');
                                        a.document.write('<style>@page{size:landscape;}</style><html><head><title>แบบบัญชีรายการที่ดินและสิ่งปลูกสร้าง (ภ.ด.ส. 3)</title></head>');
                                        a.document.write('<html>');
                                        a.document.write(divContents);
                                        a.document.write('</body></html>');
                                        a.document.close();
                                        a.print();
                                    }
                                </script>
@endsection
