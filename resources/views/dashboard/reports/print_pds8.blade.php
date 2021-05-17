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
        @media screen {
            body, page[size="A4"] {
                font-family: THSarabunNew, serif !important;
            }
        }
    </style>
    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>แบบแสดงรายการคำนวณภาษีอาคารชุด/ห้องชุด (ภ.ด.ส. 8)
                        </div>
                        <div class="card-body" id="PDS8">
                            <link type="text/css" href="{{ asset('css/stylesprint.css') }}" rel="stylesheet" media="print">
                            <style type="text/css">
                                .tg {
                                    border-collapse: collapse;
                                    border-spacing: 0;
                                }

                                .tg td {
                                    font-size: 14px;
                                    padding: 10px 5px;
                                    border-style: solid;
                                    border-width: 2px;
                                    overflow: hidden;
                                    word-break: normal;
                                    border-color: black;
                                }

                                .tg th {
                                    font-size: 14px;
                                    font-weight: normal;
                                    padding: 10px 5px;
                                    border-style: solid;
                                    border-width: 2px;
                                    overflow: hidden;
                                    word-break: normal;
                                    border-color: black;
                                }

                                .tg .tg-lboi {
                                    border-color: inherit;
                                    text-align: left;
                                    vertical-align: middle
                                }

                                .tg .tg-e3bp {
                                    background-color: #caf08a;
                                    text-align: center;
                                    vertical-align: top
                                }

                                .tg .tg-tej8 {
                                    background-color: #caf08a;
                                    border-color: inherit;
                                    text-align: center;
                                    vertical-align: middle
                                }

                                .tg .tg-qk24 {
                                    background-color: #caf08a;
                                    border-color: inherit;
                                    text-align: center;
                                    vertical-align: top
                                }

                                .tg .tg-0pky {
                                    border-color: inherit;
                                    text-align: left;
                                    vertical-align: top
                                }

                                .tg .tg-0lax {
                                    text-align: left;
                                    vertical-align: top
                                }
                            </style>
                            <h2 align="center">แบบแสดงรายการคำนวณภาษีอาคารชุด/ห้องชุด (ภ.ด.ส. 8)</h2>
                            <br>
                            <table class="tg">
                                <tr>
                                    <th class="tg-tej8">ที่</th>
                                    <th class="tg-tej8">ชื่ออาคารชุด/ห้องชุด</th>
                                    <th class="tg-tej8">เลขทะเบียนอาคารชุด</th>
                                    <th class="tg-tej8">ที่ตั้งอาคารชุด/ห้องชุด</th>
                                    <th class="tg-tej8">ลักษณะการทำประโยชน์</th>
                                    <th class="tg-tej8">เลขที่ห้องชุด</th>
                                    <th class="tg-tej8">ขนาดพื้นที่รวม<br>(ตารางเมตร)</th>
                                    <th class="tg-tej8">ราคาประเมินต่อตารางเมตร<br>(บาท)</th>
                                    <th class="tg-tej8">ราคาประเมินห้องชุด/อาคารชุด<br>(บาท)</th>
                                    <th class="tg-tej8">หักมูลค่าฐานภาษีที่ได้รับ<br>การยกเว้น<br>(บาท)</th>
                                    <th class="tg-tej8">คงเหลือราคาประเมิน<br>ทุนทรัพย์ที่ต้องเสียภาษี<br>(บาท)</th>
                                    <th class="tg-qk24">อัตราภาษี<br>(ร้อยละ)</th>
                                    <th class="tg-e3bp">จำนวนภาษี<br>ที่ต้องชำระ<br>(บาท)</th>
                                </tr>
                                @foreach($getDataPDS8 as $key => $gdtpds8)
                                    <tr>
                                        <td class="tg-lboi">{{$getDataPDS8->firstItem()+$key}}</td>
                                        <td class="tg-lboi">{{$gdtpds8->condo_name}}</td>
                                        <td class="tg-lboi">{{$gdtpds8->reg_no}}</td>
                                        <td class="tg-lboi">{{$gdtpds8->location}}</td>
                                        <td class="tg-lboi">@if($gdtpds8->used_type == 2) อยู่อาศัย @endif</td>
                                        <td class="tg-lboi">{{$gdtpds8->condo_no}}</td>
                                        <td class="tg-lboi">{{$gdtpds8->total_area}}</td>
                                        <td class="tg-lboi">{{number_format($gdtpds8->price_per_meter,2)}}</td>
                                        <td class="tg-lboi">{{number_format($gdtpds8->total_price,2)}}</td>
                                        <td class="tg-lboi">{{number_format($gdtpds8->reduce,2)}}</td>
                                        <td class="tg-lboi">{{number_format($gdtpds8->net_price,2)}}</td>
                                        <td class="tg-0pky">{{$gdtpds8->tax_rate}}%</td>
                                        <td class="tg-0lax">{{number_format($gdtpds8->total_tax,2)}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <a style="margin: 0 auto;text-align: center" class="btn btn-info btn-lg col-3"
                           onclick="printDiv()" target="_blank">
                            <span class="cil-print btn-icon mr-2"></span> พิมพ์แบบแสดงรายการคำนวณภาษีอาคารชุด/ห้องชุด
                            (ภ.ด.ส. 8)
                        </a>
                    </div>
                    {{ $getDataPDS8->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection


@section('javascript')
    <script>
        function printDiv() {
            var divContents = document.getElementById("PDS8").innerHTML;
            var a = window.open('', '', '');
            a.document.write('<style>@page{size:landscape;}</style><html lang="en"><head><title>แบบแสดงรายการคำนวณภาษีอาคารชุด/ห้องชุด (ภ.ด.ส. 8)</title></head>');
            a.document.write('<html lang="en">');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>
@endsection
