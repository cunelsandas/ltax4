@extends('dashboard.base')

@section('content')
    <style>
        @media print {
            body, page[size="A4"] {
                font-family: THSarabunNew !important;
                margin: 0 auto !important;
                margin-bottom: 0.5cm !important;
                box-shadow: 0;
                background-color: white;
                size: A4 portrait !important;
                width: 29.7cm !important;
                height: 21.0cm !important;
            }
        }
    </style>
    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
    <div class="container-fluid" style="overflow-x: scroll">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card" style="width: 120%">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>แบบบัญชีรายการห้องชุด (ภ.ด.ส. 4)</div>
                        <div class="card-body" id="PDS4">
                            <link href="{{ asset('css/stylesprint.css') }}" rel="stylesheet" media="print">
                            <style type="text/css">
                                .tg  {border-collapse:collapse;border-spacing:0;}
                                .tg td{font-size:14px;padding:10px 5px;border-style:solid;border-width:2px;overflow:hidden;word-break:normal;border-color:black;}
                                .tg th{font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:2px;overflow:hidden;word-break:normal;border-color:black;}
                                .tg .tg-lboi{border-color:inherit;text-align:left;vertical-align:middle}
                                .tg .tg-9wq8{border-color:inherit;text-align:center;vertical-align:middle}
                                .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
                                .tg .tg-0lax{text-align:left;vertical-align:top}
                            </style>

                            <h2 align="center">แบบบัญชีรายการห้องชุด (ภ.ด.ส. 4)</h2>
                            <br>
                            <table class="tg" align="center">
                                <tr>
                                    <th class="tg-0pky" rowspan="2">ที่</th>
                                    <th class="tg-0pky" rowspan="2">ชื่ออาคารชุด</th>
                                    <th class="tg-0pky" rowspan="2">เลขทะเบียนอาคารชุด</th>
                                    <th class="tg-9wq8" colspan="4">ที่ตั้ง</th>
                                    <th class="tg-0pky" rowspan="2">เลขที่ห้องชุด</th>
                                    <th class="tg-0pky" rowspan="2">ขนาดพื้นที่รวม<br>(ตร.ม.)</th>
                                    <th class="tg-9wq8" colspan="3">ลักษณะการทำประโยชน์ (ตร.ม.)</th>
                                    <th class="tg-0pky" rowspan="2">หมายเหตุ</th>
                                </tr>
                                <tr>
                                    <td class="tg-lboi">โฉนด<br>เลขที่</td>
                                    <td class="tg-lboi">หน้าสำรวจ</td>
                                    <td class="tg-lboi">ตำบล</td>
                                    <td class="tg-lboi">อำเภอ</td>
                                    <td class="tg-lboi">อยู่อาศัย</td>
                                    <td class="tg-lboi">อื่นๆ</td>
                                    <td class="tg-lboi">ว่างเปล่า/ไม่ทำประโยชน์</td>
                                </tr>
                                @php $i = 1 @endphp
                                @foreach($getDataPDS4 as $key => $gdtpds4)
                                    <tr>
                                        <td class="tg-lboi">{{$i++}}</td>
                                        <td class="tg-lboi">{{$gdtpds4->condo_name}}</td>
                                        <td class="tg-lboi">{{$gdtpds4->reg_no}}</td>
                                        <td class="tg-lboi">{{$gdtpds4->dn}}</td>
                                        <td class="tg-lboi">{{$gdtpds4->sn}}</td>
                                        <td class="tg-lboi">{{$gdtpds4->tambon}}</td>
                                        <td class="tg-lboi">{{$gdtpds4->amphoe}}</td>
                                        <td class="tg-lboi">{{$gdtpds4->condo_no}}</td>
                                        <td class="tg-lboi">{{$gdtpds4->total_area}}</td>
                                        <td class="tg-lboi">{{$gdtpds4->living}}</td>
                                        <td class="tg-lboi">{{$gdtpds4->other}}</td>
                                        <td class="tg-lboi">{{$gdtpds4->empty}}</td>
                                        <td class="tg-lboi">{{$gdtpds4->remark}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <a style="margin: 0 auto;text-align: center" class="btn btn-info btn-lg col-3" onclick="printDiv()" target="_blank">
                            <span class="cil-print btn-icon mr-2"></span> พิมพ์แบบบัญชีรายการห้องชุด (ภ.ด.ส. 4)
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('javascript')
    <script>
        function printDiv() {
            var divContents = document.getElementById("PDS4").innerHTML;
            var a = window.open('', '', '');
            a.document.write('<style>@page{size:landscape;}</style><html><head><title>แบบบัญชีรายการห้องชุด (ภ.ด.ส. 4)</title></head>');
            a.document.write('<html>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>
@endsection
