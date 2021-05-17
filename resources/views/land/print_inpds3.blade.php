@extends('dashboard.base')

@section('content')

    <style>
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
    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
    {{--   print ภ.ด.ส.3--}}
    <div class="container-fluid" style="overflow-x: scroll">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card" style="width: 100%">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>แบบบัญชีรายการที่ดินและสิ่งปลูกสร้าง (ภ.ด.ส. 3)
                        </div>
                        <div class="card-body" id="PDS3">
                            <link href="{{ asset('css/styles2.css') }}" rel="stylesheet" media="print">
                            <style type="text/css">
                                .column {
                                    flex: 100%;
                                }

                                /* Clearfix (clear floats) */
                                .row::after {
                                    content: "";
                                    clear: both;
                                    display: table;
                                }

                                @page {
                                    size: A4;
                                    margin: 0;
                                }

                                @media print {
                                    @page {
                                        size: A4 landscape;
                                    }

                                    html, body {
                                        width: 210mm;
                                        height: 297mm;
                                    }
                                }

                                table {
                                    border-collapse: collapse;
                                    border-spacing: 0;
                                    width: 100%;
                                }

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

                                .tg .tg-9wq8 {
                                    border-color: inherit;
                                    text-align: center;
                                    vertical-align: middle
                                }

                                .tg .tg-baqh {
                                    text-align: center;
                                    vertical-align: top
                                }

                                .tg .tg-nrix {
                                    text-align: center;
                                    vertical-align: middle
                                }

                                .tg .tg-0lax {
                                    text-align: left;
                                    vertical-align: top
                                }
                            </style>

                            <h2 align="center">แบบบัญชีรายการที่ดินและสิ่งปลูกสร้าง (ภ.ด.ส. 3)</h2>
                            <br>
                            <div class="row">
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
                                            <td class="tg-0lax">{{$getLandFromPDS3->land_type}}</td>
                                            <td class="tg-0lax">{{$getLandFromPDS3->dn}}</td>
                                            <td class="tg-0lax">{{$getLandFromPDS3->ln}}</td>
                                            <td class="tg-0lax">{{$getLandFromPDS3->sn}}</td>
                                            <td class="tg-0lax">{{$getLandFromPDS3->address}}</td>
                                            <td class="tg-0lax">{{$getLandFromPDS3->rai}}</td>
                                            <td class="tg-0lax">{{$getLandFromPDS3->yawn}}</td>
                                            <td class="tg-0lax">{{number_format($getLandFromPDS3->wa),2}}</td>
                                            <td class="tg-0lax">
                                                {{$getLandFromPDS3->agri}}
                                            </td>
                                            <td class="tg-0lax">
                                                {{$getLandFromPDS3->living}}
                                            </td>
                                            <td class="tg-0lax">
                                                {{$getLandFromPDS3->other}}
                                            </td>
                                            <td class="tg-0lax">
                                                {{$getLandFromPDS3->wasteland}}
                                            </td>      <!-- ว่างไม่ทำประโยชน์  -->
                                            <td class="tg-0lax">
                                                {{$getLandFromPDS3->mixused}}
                                            </td>       <!-- ใช้ประโยชน์หลายประเภท -->
                                        </tr>


                                    </table>
                                </div>
                                <div class="column">
                                    <table class="tg">
                                        <tr>
                                            <th class="tg-baqh" colspan="11">รายการสิ่งปลูกสร้าง</th>
                                        </tr>
                                        <tr>
                                            <td class="tg-nrix" rowspan="2">ที่</td>
                                            <td class="tg-nrix" rowspan="2">บ้านเลขที่</td>
                                            <td class="tg-nrix" rowspan="2">ประเภท<br>สิ่งปลูกสร้าง<br>(ตามบัญชี<br>กรมธนารักษ์)
                                            </td>
                                            <td class="tg-nrix" rowspan="2"><br>ลักษณะ<br>สิ่งปลูกสร้าง<br>(ตึก/ไม้/<br>ครึ่งตึกครึ่งไม้)<br>
                                            </td>
                                            <td class="tg-nrix" rowspan="2">ขนาดพื้นที่รวม<br>ของสิ่งปลูกสร้าง<br>(ตร.ม.)
                                            </td>
                                            <td class="tg-nrix" colspan="4">ลักษณะการทำประโยชน์ (ตร.ม.)</td>
                                            <td class="tg-nrix" rowspan="2">อายุโรงเรือน<br>หรือ<br>สิ่งปลูกสร้าง<br>(ปี)
                                            </td>
                                            <td class="tg-nrix" rowspan="2">หมายเหตุ</td>
                                        </tr>
                                        <tr>
                                            <td class="tg-nrix">ประกอบ<br>เกษตรกรรม</td>
                                            <td class="tg-nrix">อยู่อาศัย</td>
                                            <td class="tg-nrix">อื่นๆ</td>
                                            <td class="tg-nrix">ว่างเปล่า/<br>ไม่ทำ<br>ประโยชน์</td>
                                        </tr>
                                       @foreach($getBuildingFromPDS3 as $gbfpds3)
                                        <tr>

                                            <td class="tg-0lax">{{$l++}}</td>

                                            <td class="tg-0lax">{{$gbfpds3->address}}</td>
                                            <td class="tg-0lax">{{$gbfpds3->b_type}}</td>
                                            <td class="tg-0lax">{{$gbfpds3->b_mat}}</td>
                                            <td class="tg-0lax">{{$gbfpds3->b_area}}</td>

                                            <td class="tg-0lax">
                                                {{$gbfpds3->b_agri}}
                                            </td>
                                            <td class="tg-0lax">
                                                {{$gbfpds3->b_living}}
                                            </td>

                                            <td class="tg-0lax">
                                                {{$gbfpds3->b_other}}
                                            </td>
                                            <td class="tg-0lax">
                                                {{$gbfpds3->b_waste}}
                                            </td>
                                            <td class="tg-0lax">
                                                {{$gbfpds3->b_age}}
                                            </td>
                                            <td class="tg-0lax">
                                                {{$gbfpds3->remark}}
                                            </td>
                                        </tr>
                                        @endforeach


                                    </table>
                                </div>
                            </div>
                        </div>
                        {{--    <a style="margin: 0 auto;text-align: center" class="btn btn-info btn-lg col-3" onclick="printDiv()" target="_blank">--}}
                        {{--     <span class="cil-print btn-icon mr-2"></span> พิมพ์แบบบัญชีรายการที่ดินและสิ่งปลูกสร้าง (ภ.ด.ส. 3)--}}
                        {{--    </a>--}}
                        <div class="col-6" style="text-align: center; margin: 0 auto">
                            <td>
                                <a href="{{ url('/paytaxland/' . $ownerData->owner_id) }}"
                                   class="btn btn-block btn-success">ตรวจสอบแล้วข้อมูลถูกต้อง ไปหน้าชำระภาษี</a>
                                {{--                                <a href="{{ url('/buildings/' . $input->owner_id . '/edit') }}" class="btn btn-block btn-success" >บันทึกข้อมูลโรงเรือน/สิ่งปลูกสร้าง</a>--}}
                                <a href="{{ url('/land/editinfo/'. $ownerData->owner_id ) }}"
                                   class="btn btn-block btn-danger">ตรวจสอบแล้วข้อมูลไม่ถูกต้อง
                                    ยื่นคำร้องขอแก้ไขข้อมูล</a>
                                <a href="{{ url()->previous() }}" class="btn btn-block btn-primary">ย้อนกลับ</a>

                            </td>
                            <br>
                        </div>
                    </div>
                    {{--                    {{ $getDataPDS3->links() }}--}}
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
            a.document.write('<style>@page{size:landscape;}</style><html><head><title>แบบบัญชีรายการที่ดินและสิ่งปลูกสร้าง (ภ.ด.ส. 3)</title>');
            a.document.write('<html>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>
@endsection
