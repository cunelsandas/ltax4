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

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>


    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header" style="text-decoration: underline"><h4>ตรวจสอบภาษีดิน</h4></div>
                        <h4 style="margin: 5% auto auto auto"> ยินดีต้อนรับคุณ<font
                                    color="#1e90ff">{{ $ownerData->fname }} {{ $ownerData->lname }} (พ.ศ.2564)</font>
                        </h4>
                        <div class="card-body">
                            <tr class="row-cols-6" style="float: left">
                                <td>
                                    <strong>Land_ID: </strong> {{ $getLandData->lid }}<br>
                                    <strong>เจ้าของทรัพย์สิน: </strong> {{$ownerData->prefix}}{{ $ownerData->fname }} {{ $ownerData->lname }}
                                    {{--                                        {{ $input->first_name }}--}}
                                    {{--                                        {{ $input->last_name }}--}}

                                    <strong>รหัสบัตรประชาชน: </strong>{{$ownerData->pop_id}}

                                </td>
                                <br>
                                <td>
                                    <strong>ที่อยู่: </strong> {{ $ownerData->address }}
                                    <strong>หมู่: </strong> {{ $ownerData->moo }}
                                    <strong>ซอย: </strong> {{ $ownerData->soi }}
                                    <strong>ถนน: </strong> {{ $ownerData->road }}
                                </td>
                                <br>
                                <td>
                                    <strong>ตำบล: </strong> {{ $getDistrict->district }}
                                    <strong>อำเภอ: </strong> {{ $getDistrict->amphoe }}
                                    <strong>จังหวัด: </strong> {{ $getDistrict->province }}
                                </td>
                                <br>
                                <td>
                                    <strong>รหัสไปรษณีย์: </strong> {{ $getDistrict->zipcode }}
                                    <strong>โทร: </strong> {{ $ownerData->telephone }}
                                    {{--                                    <a href="{{ url('/inputs/' . $input->id . '/edit') }}" class="btn btn-block btn-primary" style="width: 10%">แก้ไข</a>--}}
                                </td>
                            </tr>
                            <br>
                            <br>
                            <td>
                                <a href="{{ url('land/pds3/' . $ownerData->owner_id) }}"
                                   class="btn btn-block btn-primary">ดู ภ.ด.ส. 3 รายบุคคล</a>
                                {{--                                <a href="{{ url('/buildings/' . $input->owner_id . '/edit') }}" class="btn btn-block btn-success" >บันทึกข้อมูลโรงเรือน/สิ่งปลูกสร้าง</a>--}}
                            </td>
                            <br>

                            {{--                            <div style="margin-left: 80%;margin-top: -10%;">--}}
                            {{--                                <td>--}}
                            {{--                                    <a href="{{ url('/lands/' . $input->id.'/edit') }}" class="btn btn-block btn-success">บันทึกข้อมูลแปลงที่ดิน/สิ่งปลูกสร้าง</a>--}}
                            {{--                                    --}}{{--                                <a href="{{ url('/buildings/' . $input->owner_id . '/edit') }}" class="btn btn-block btn-success" >บันทึกข้อมูลโรงเรือน/สิ่งปลูกสร้าง</a>--}}
                            {{--                                    <a href="{{ url('/signs/' . $input->id . '/edit') }}" class="btn btn-block btn-success" >บันทึกข้อมูลป้าย</a>--}}
                            {{--                                    <a href="{{ url('/reports/' . $input->id) }}" class="btn btn-block btn-warning" >รายงาน</a>--}}
                            {{--                                </td> <br>--}}

                            {{--                            </div>--}}

                            <div class="tab">
                                <button class="tablinks" onclick="openCity(event, 'lands')" id="defaultOpen">ที่ดิน
                                </button>
                                <button class="tablinks" onclick="openCity(event, 'builds')">โรงเรือนสิ่งปลูกสร้าง
                                </button>
                                {{--                                <button class="tablinks" onclick="openCity(event, 'signs')">ป้าย</button>--}}
                            </div>
                            <div id="lands" class="tabcontent" style="height: 400px;overflow-x: scroll">
                                @php
                                    $il = 1;
                                @endphp

                                <table width="100%">
                                    <tr>
                                        <th width="5%">ลำดับ</th>
                                        <th width="5%">รหัสแปลงที่ดิน</th>
                                        <th width="5%">เอกสารสิทธิ์</th>
                                        <th width="5%">เลขที่เอกสารสิทธิ์</th>
                                        <th width="10%">ระวาง</th>
                                        <th width="5%">เลขที่ดิน</th>
                                        <th width="5%">หน้าสำรวจ</th>
                                        <th width="10%">จำนวนเนื้อที่</th>
                                        <th width="20%">การใช้ประโยชน์</th>
                                    </tr>
                                    @foreach($getFromPDS3 as $gfpds3)
                                        <tr style="color: #0080ff">
                                            <td>{{$il++}}</td>
                                            <td>{{$gfpds3->parcel_code}}</td>
                                            <td>{{$gfpds3->land_type}}</td>
                                            <td>{{$gfpds3->dn}}</td>
                                            <td>{{$getLandData->rw}}</td>
                                            <td>{{$gfpds3->ln}}</td>
                                            <td>{{$gfpds3->sn}}</td>
                                            <td>{{$gfpds3->rai}}-{{$gfpds3->yawn}}-{{$gfpds3->wa}}</td>
                                            <td>
                                                @if(isset($gfpds3->agri))
                                                    เกษตรกรรม
                                                    <font style="color: red">
                                                        {{number_format($gfpds3->agri)}} ตร.ม.
                                                    </font>
                                                @elseif(isset($gfpds3->living))
                                                    อยู่อาศัย
                                                    <font style="color: red">
                                                        {{number_format($gfpds3->living)}} ตร.ม.
                                                    </font>
                                                @elseif(isset($gfpds3->other))
                                                    อื่นๆ
                                                    <font style="color: red">
                                                        {{number_format($gfpds3->other)}} ตร.ม.
                                                    </font>
                                                @elseif(isset($gfpds3->wasteland))
                                                    พื้นที่ว่าง
                                                    <font style="color: red">
                                                        {{number_format($gfpds3->wasteland)}} ตร.ม.
                                                    </font>
                                                @elseif(isset($gfpds3->mixused))
                                                    ใช้ประโยชน์หลายประเภท
                                                    <font style="color: red">
                                                        {{number_format($gfpds3->mixused)}} ตร.ม.
                                                    </font>
                                                @else
                                                    NULL
                                                @endif
                                            </td>
                                            {{--                                            <td><font style="color: red">--}}
                                            {{--                                                    {{$gfpds3->tax_rate}}</font></td>--}}

                                        </tr>
                                    @endforeach
                                </table>

                            </div>

                            <div id="builds" class="tabcontent" style="height: 400px;overflow-x: scroll">
                                @php
                                    $ib = 1;
                                @endphp

                                <table width="100%">
                                    <tr>
                                        <th width="5%">ลำดับ</th>
                                        <th width="5%">แปลงที่ดิน</th>
                                        <th width="20%">ชื่อ หรือที่ตั้งอาคาร</th>
                                        <th width="20%">ประเภทโรงเรือน</th>
                                        <th width="5%">ขนาดอาคาร</th>
                                        <th width="5%">จำนวนชั้น</th>
                                        <th width="5%">ภาษี(บาท)</th>
                                        <th width="10%">หมายเหตุ</th>
                                    </tr>
                                    @foreach($getBuildingJoinPDS3 as $gbjpds3)
                                        <tr style="color: #0080ff">
                                            <td>{{$ib++}}</td>
                                            <td>{{$gbjpds3->b_code}}</td>
                                            <td>{{$gbjpds3->bname}} {{$gbjpds3->address}} {{$gbjpds3->moo}} {{$gbjpds3->soi}} {{$gbjpds3->road}}</td>
                                            <td>{{$gbjpds3->b_type}}</td>
                                            <td>{{$gbjpds3->b_area}} ตร.ม.</td>
                                            <td>{{$gbjpds3->no_floor}}</td>
                                            <td><font style="color: red">{{number_format($gbjpds3->total_tax,2)}}</font></td>
                                            <td>{{$gbjpds3->notes}} </td>
                                        </tr>
                                    @endforeach
                                </table>

                            </div>

                            {{--                            <div id="signs" class="tabcontent" style="height: 400px;overflow-x: scroll">--}}
                            {{--                                @php--}}
                            {{--                                    $is = 1;--}}
                            {{--                                @endphp--}}

                            {{--                                <table width="100%">--}}
                            {{--                                    <tr>--}}
                            {{--                                        <th width="10%">ลำดับ</th>--}}
                            {{--                                        <th  width="10%">แปลงที่ดิน</th>--}}
                            {{--                                        <th  width="20%">ที่ตั้งของป้าย</th>--}}
                            {{--                                        <th  width="10%">ประเภทป้าย</th>--}}
                            {{--                                        <th  width="5%">กว้าง X ยาว</th>--}}
                            {{--                                        <th  width="5%">เนื้อที่</th>--}}
                            {{--                                        <th  width="10%">จำนวนด้าน</th>--}}
                            {{--                                        <th  width="10%">ข้อความในป้าย</th>--}}
                            {{--                                        <th  width="10%">อัตราภาษี</th>--}}
                            {{--                                    </tr>--}}
                            {{--                                    <tr style="color: #0080ff">--}}
                            {{--                                        <td>{{$is++}}</td>--}}
                            {{--                                        <td>{{$getData->b_code}}</td>--}}
                            {{--                                        <td>{{$getData->s_name}}</td>--}}
                            {{--                                        <td>--}}
                            {{--                                            @if($getData->sign_type_id==1)--}}
                            {{--                                                ประเภท 1 อักษรไทยล้วน--}}
                            {{--                                            @elseif($getData->sign_type_id==2)--}}
                            {{--                                                ประเภท 2 อักษรไทยปนกับอักษรต่างประเทศ/ภาพ/เครื่องหมายอื่น--}}
                            {{--                                            @elseif($getData->sign_type_id==3)--}}
                            {{--                                                ประเภท 3(ก) ไม่มีอักษรไทย--}}
                            {{--                                            @elseif($getData->sign_type_id==4)--}}
                            {{--                                                ประเภท 3(ข) อักษรไทยบางส่วนหรือทั้งหมดอยู่ใต้ หรือต่ำกว่าอักษรต่างประเทศ--}}
                            {{--                                            @endif--}}

                            {{--                                        </td>--}}
                            {{--                                        <td>{{$getData->sw}}X{{$getData->sl}}</td>--}}
                            {{--                                        <td>{{$getData->area}}</td>--}}
                            {{--                                        <td>{{$getData->no_side}}</td>--}}
                            {{--                                        <td>{{$getData->s_desc}}</td>--}}
                            {{--                                        <td><font style="color: red">{{number_format($getData->tax),2}}</font> บาท</td>--}}

                            {{--                                    </tr>--}}
                            {{--                                </table>--}}

                            {{--                            </div>--}}
                        </div>
                        {{--                        <div style="margin: 0 auto">--}}
                        {{--                            <td>--}}
                        {{--                                @php--}}
                        {{--                                    $sum_tax_lu = 0;--}}
                        {{--                                    $sum_tax_bu = 0;--}}
                        {{--                                    $sum_tax = 0;--}}
                        {{--                                    $sum_tax_sign = 0;--}}
                        {{--                                    $i = 1;--}}
                        {{--                                    $l = 1;--}}

                        {{--                                @endphp--}}

                        {{--                                <p style="font-weight: bold" hidden> ภาษีที่ดิน {{$i++}} :  {{number_format($sum_tax_lu+=$getData->tax_lu),2}}+{{number_format($sum_tax_bu+=$getData->tax_bu),2}} บาท </p>--}}
                        {{--                                <p style="font-weight: bold" hidden> ภาษีที่ดิน {{$i++}} : {{number_format($sum_tax_bu+=$getData->tax_bu),2}} บาท </p>--}}

                        {{--                                <p style="font-weight: bold"> ภาษีที่ดิน : {{number_format($getData->tax),2}} บาท </p>--}}
                        {{--                                <p style="font-weight: bold"> ภาษีสิ่งปลูกสร้าง : {{number_format($buildData->tax),2}} บาท </p>--}}

                        {{--                                --}}{{--                                    <p style="font-weight: bold" hidden> ภาษีโรงเรือน {{$i++}} : {{number_format($sum_tax+=$getData->sum_pay_land_tax),2}} บาท </p>--}}

                        {{--                                --}}{{--                                <p style="font-weight: bold"> ภาษีโรงเรือน : {{number_format($sum_tax),2}} บาท </p>--}}

                        {{--                                --}}{{--                                    <p style="font-weight: bold" hidden> ภาษีป้าย {{$l++}} : {{number_format($sum_tax_sign+=$getData->tax),2}} บาท </p>--}}

                        {{--                                --}}{{--                                <p style="font-weight: bold"> ภาษีป้าย : {{number_format($sum_tax_sign),2}} บาท </p>--}}
                        {{--                                <p style="font-weight: bold"> รวมภาษี : <font style="font-size: 2rem;color: red">{{number_format($getData->tax),2}}  บาท </font> </p>--}}
                        {{--                                <p style="font-weight: bold">(<?php echo baht_text(round($getData->tax))  ?>)</p>--}}
                        {{--                            </td> <br>--}}

                        {{--                            <script>--}}
                        {{--                                //คำนวนพื้นที่ป้าย--}}
                        {{--                                $(document).ready(function () {--}}
                        {{--                                    $('input[type="number"]').keyup(function () {--}}
                        {{--                                        var val1 = parseFloat($('#sum_land_tax').val());--}}
                        {{--                                        var val2 = parseFloat($('#sum_sign_tax').val());--}}
                        {{--                                        var sum = Math.round(val1 * val2);--}}
                        {{--                                        $("input##").val(sum);--}}
                        {{--                                    });--}}
                        {{--                                });--}}
                        {{--                            </script>--}}



                        {{--                        </div>--}}

                        @php
                            $sumtaxlandbuild = 0;
                        @endphp
                        @foreach($getFromPDS3 as $countlandtax)
                            <p style="display: none">{{$sumtaxlandbuild += $countlandtax->total_tax}}</p>
                        @endforeach
                        <div style="margin: 0 auto">
                            <p style="font-weight: bold;font-size: 2rem"> ภาษีที่ดิน : <font style="color: red">{{number_format($sumtaxlandbuild,2)}}</font> บาท </p>
                        </div>
                        <div style="margin: 0 auto">
                            <p style="font-weight: bold;font-size: 1rem"> <font style="color: black">({{baht_text($sumtaxlandbuild)}})</font> </p>
                        </div>
                        <h2 style="color: red;margin: 0 auto">*กรุณาเช็คข้อมูลภาษีอย่างละเอียดอีกครั้ง
                            ก่อนทำการชำระหรือยื่นคัดค้าน*</h2>
                        <div class="col-6" style="text-align: center; margin: 0 auto">
                            <td>
                                <a href="{{ url('/paytaxland/' . $ownerData->owner_id) }}"
                                   class="btn btn-block btn-success">ชำระภาษี</a>
                                {{--                                <a href="{{ url('/buildings/' . $input->owner_id . '/edit') }}" class="btn btn-block btn-success" >บันทึกข้อมูลโรงเรือน/สิ่งปลูกสร้าง</a>--}}
                                <a href="{{ url('/cancel/' ) }}" class="btn btn-block btn-danger">ยื่นคัดค้าน</a>
                            </td>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        document.getElementById("defaultOpen").click();
    </script>

@endsection

@section('javascript')

@endsection
