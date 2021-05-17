@extends('dashboard.base')
@section('content')
    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
    <style>
        body {
            background: rgb(204, 204, 204);
        }

        page[size="A4"] {
            background: white;
            width: 21cm;
            height: 29.7cm;
            display: block;
            margin: 0 auto;
            margin-bottom: 0.5cm;
            box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
            size: landscape;
        }

        @media print {
            body, page[size="A4"] {
                margin: 0;
                box-shadow: 0;
            }
        }
    </style>
    {{--    <page size ="A4"></page>--}}
    <div class="container-fluid" style="overflow-x: scroll">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card" style="width: 180%;">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>ราคาประเมินทุนทรัพย์ของที่ดินและสิ่งปลูกสร้าง (ภ.ด.ส. 1)
                        </div>
                        <div class="card-body" id="PDS1">
                            <link href="{{ asset('css/styles2.css') }}" rel="stylesheet" media="print">
                            <div class="panel-body">
                            </div>
                            {{--   print ภ.ด.ส.1--}}

                            {{--                            {{\App\Http\Controllers\ReportsController::print_pds1()}}--}}
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

                                .tg .tg-9wq8 {
                                    border-color: inherit;
                                    text-align: center;
                                    vertical-align: middle
                                }

                                .tg .tg-baqh {
                                    text-align: center;
                                    vertical-align: top
                                }

                                .tg .tg-c3ow {
                                    border-color: inherit;
                                    text-align: center;
                                    vertical-align: top
                                }

                                .tg .tg-0lax {
                                    text-align: left;
                                    vertical-align: top
                                }

                                .tg .tg-0pky {
                                    border-color: inherit;
                                    text-align: left;
                                    vertical-align: top
                                }
                            </style>
                            {{--    <div class="container-fluid">--}}
                            {{--        <div class="animated fadeIn">--}}

                            {{--                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">--}}
                            {{--                    <div class="card">--}}
                            {{--                        <div class="card-header">--}}
                            {{--                            <i class="fa fa-align-justify"></i>ภ.ด.ส.3</div>--}}
                            {{--                        <div class="card-body">--}}
                            <h2 align="center">ราคาประเมินทุนทรัพย์ของที่ดินและสิ่งปลูกสร้าง (ภ.ด.ส. 1)</h2>
                            <br>
                            <table class="tg">
                                <tr>
                                    <th class="tg-9wq8" rowspan="3">ที่</th>
                                    <th class="tg-9wq8" rowspan="3">ประเภทที่ดิน</th>
                                    <th class="tg-9wq8" rowspan="3">หน้าสำรวจ</th>
                                    <th class="tg-9wq8" rowspan="3">เลขที่</th>
                                    <th class="tg-9wq8" rowspan="3">สถานที่ตั้ง<br>(หมู่/ชุมชน/ตำบล)</th>
                                    <th class="tg-9wq8" rowspan="3">ลักษณะ<br>การใช้<br>ประโยชน์</th>
                                    <th class="tg-9wq8" colspan="6">ราคาประเมินทุนทรัพย์ของที่ดิน</th>
                                    <th class="tg-9wq8" colspan="11">ราคาประเมินทุนทรัพย์ของสิ่งปลูกสร้าง</th>
                                    <th class="tg-baqh" rowspan="3"><br><br><br>รวมราคาประเมิน<br>ของที่ดิน<br>และสิ่งปลูกสร้าง<br>(บาท)
                                    </th>
                                    <th class="tg-baqh" rowspan="3"><br><br><br>ราคาประเมิน<br>ของที่ดินและสิ่ง<br>ปลูกสร้างตาม<br>สัดส่วนการใช้<br>ประโยชน์<br>(บาท)
                                    </th>
                                    <th class="tg-baqh" rowspan="3">
                                        <br><br><br>หักมูลค่า<br>ฐานภาษี<br>ที่ได้รับยกเว้น<br>(บาท)
                                    </th>
                                    <th class="tg-baqh" rowspan="3"><br><br><br>คงเหลือ<br>ราคาประเมิน<br>ทุนทรัพย์<br>ที่ต้องเสียภาษี<br>(บาท)
                                    </th>
                                    <th class="tg-c3ow" rowspan="3"><br><br><br>อัตราภาษี<br>(ร้อยละ)</th>
                                </tr>
                                <tr>
                                    <td class="tg-9wq8" colspan="3">จำนวน<br>เนื้อที่ดิน</td>
                                    <td class="tg-9wq8" rowspan="2">คำนวณ<br>เป็น<br>ตารางวา</td>
                                    <td class="tg-9wq8" rowspan="2">ราคาประเมิน<br>ต่อตารางวา<br>(บาท)</td>
                                    <td class="tg-9wq8" rowspan="2">รวมราคา<br>ต่อตารางวา<br>(บาท)</td>
                                    <td class="tg-9wq8" rowspan="2">ที่</td>
                                    <td class="tg-9wq8" rowspan="2">ประเภท<br>สิ่งปลูกสร้าง</td>
                                    <td class="tg-9wq8" rowspan="2">ลักษณะ<br>สิ่งปลูกสร้าง</td>
                                    <td class="tg-c3ow" rowspan="2"><br><br>ลักษณะ<br>การใช้<br>ประโยชน์<br></td>
                                    <td class="tg-c3ow" rowspan="2"><br><br>ขนาดพื้นที่<br>สิ่งปลูกสร้าง<br>(ตารางเมตร)
                                    </td>
                                    <td class="tg-c3ow" rowspan="2"><br>คิดเป็น<br>สัดส่วนตาม<br>การใช้<br>ประโยชน์</td>
                                    <td class="tg-c3ow" rowspan="2"><br>ราคาประเมิน<br>ต่อ<br>ตารางเมตร<br>(บาท)</td>
                                    <td class="tg-c3ow" rowspan="2"><br>รวมราคา<br>สิ่งปลูกสร้าง<br>(บาท)</td>
                                    <td class="tg-c3ow" colspan="2">ค่าเสื่อม</td>
                                    <td class="tg-baqh" rowspan="2">ราคาประเมิน<br>สิ่งปลูกสร้าง<br>หลักหัก<br>ค่าเสื่อม<br>(บาท)
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tg-0lax">ไร่</td>
                                    <td class="tg-0lax">งาน</td>
                                    <td class="tg-0lax">วา</td>
                                    <td class="tg-baqh">อายุ<br>โรงเรือน<br>(ปี)</td>
                                    <td class="tg-baqh">คิดเป็น<br>ค่าเสื่อม<br>(บาท)</td>
                                </tr>
                                @php
                                    $i = 1;
                                    $l = 1;
                                @endphp

                                @foreach($getData as $gdt)
                                    <tr>
                                        <td class="tg-lboi">{{$i++}}</td>
                                        <td class="tg-lboi">@if(isset($getData)) {{$gdt->land_type}} @endif</td>
                                        <td class="tg-lboi">@if(isset($getData)) {{$gdt->sn}} @endif</td>
                                        <td class="tg-lboi">@if(isset($getData)){{$gdt->dn}} @endif</td>
                                        <td class="tg-lboi">@if(isset($getData)) {{$gdt->location}} @endif </td>
                                        <td class="tg-lboi">
                                            @if($gdt->lu_type==1 || $gdt->lu_type==2 || $gdt->lu_type==3 || $gdt->lu_type==4 || $gdt->lu_type==5)
                                                อยู่อาศัย
                                            @elseif($gdt->lu_type==6 || $gdt->lu_type==7 || $gdt->lu_type==8)
                                                เกษตรกรรม
                                            @elseif($gdt->lu_type==9 )
                                                ที่รกร้างว่างเปล่า
                                            @elseif($gdt->lu_type==10 || $gdt->lu_type==99 || $gdt->lu_type==11 )
                                                อื่นๆ
                                            @endif</td>
                                        <!-- ลักษณะการใช้ประโยชน์ -->
                                        <td class="tg-9wq8">@if(isset($getData)){{$gdt->rai}}@endif</td>
                                        <td class="tg-9wq8">@if(isset($getData)){{$gdt->yawn}}@endif</td>
                                        <td class="tg-9wq8">@if(isset($getData)){{$gdt->wa}}@endif</td>
                                        <td class="tg-lboi">@if(isset($getData)){{$gdt->rai*400+$gdt->yawn*100+$gdt->wa}}@endif</td>
                                        <td class="tg-lboi">@if(isset($getData)){{number_format($gdt->price_per_wa,2)}}@endif</td>
                                        <td class="tg-lboi">@if(isset($getData)){{number_format($gdt->total_price,2)}}@endif</td>
                                        <td class="tg-lboi">{{$l++}}</td>

                                        <td class="tg-lboi">@if(isset($getData)) {{$gdt->b_type}} @endif</td>
                                        <td class="tg-lboi">@if(isset($getData)) {{$gdt->b_mat}}  @endif</td>
                                        <td class="tg-0pky">
                                            @if(isset($gdt->b_living))
                                                อยู่อาศัย
                                            @elseif(isset($gdt->b_agri))
                                                เกษตรกรรม
                                            @elseif(isset($gdt->b_other))
                                                ใช้ประโยชน์อื่นๆ
                                            @elseif(isset($gdt->b_waste))
                                                ไม่ได้ใช้ประโยชน์
                                            @endif

                                        </td>

                                        @php
                                            $allarea = $gdt->rai*400+$gdt->yawn*100+$gdt->wa;
                                        @endphp

                                        <td class="tg-0pky">@if(isset($getData)) {{number_format($gdt->b_area,2)}} @endif</td>
                                        <td class="tg-0pky">@if(isset($getData)) {{number_format(($gdt->b_area/4*100)/$allarea,2)}} % @endif</td>
                                        <td class="tg-0pky">@if(isset($getData)){{$gdt->price_per_wa}} @endif</td>
                                        <td class="tg-0pky">@if(isset($getData)) {{number_format($gdt->b_price,2)}} @endif</td>
                                        <td class="tg-c3ow">@if(isset($getData)) {{$gdt->b_age}} อายุ @endif</td>
                                        <td class="tg-0lax">@if(isset($getData)) {{number_format($gdt->depreciation_price,2)}} @endif</td>
                                        <td class="tg-0lax">@if(isset($getData)) {{number_format($gdt->b_net_price,2)}} @endif</td>
                                        <td class="tg-0lax">@if(isset($getData)) {{number_format($gdt->asset_price,2)}} @endif</td>
                                        <td class="tg-0lax">@if(isset($getData)) {{number_format($gdt->net_asset_price,2)}} @endif</td>
                                        <td class="tg-0lax">@if(isset($getData)) {{number_format($gdt->reduce,2)}} @endif</td>
                                        <td class="tg-0lax">@if(isset($getData)) {{number_format($gdt->net_asset_price,2)}} @endif</td>
                                        <td class="tg-c3ow">@if(isset($getData)) {{$gdt->tax_rate}} @endif%</td>

                                    </tr>
                                @endforeach

                            </table>
                            <br>
                        </div>
                        <a style="margin: 0 auto;text-align: center" class="btn btn-info btn-lg col-3"
                           onclick="printDiv()" target="_blank">
                            <span class="cil-print btn-icon mr-2"></span> พิมพ์ภาษีที่ดินและสิ่งปลูกสร้าง (ภ.ด.ส. 1)
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
            var divContents = document.getElementById("PDS1").innerHTML;
            var a = window.open('', '', '');
            a.document.write('<style>@page{size:landscape A4;}</style><html><head><title>ราคาประเมินทุนทรัพย์ของที่ดินและสิ่งปลูกสร้าง (ภ.ด.ส. 1)</title>');
            a.document.write('<html>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>
@endsection
