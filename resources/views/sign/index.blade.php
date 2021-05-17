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
                        <div class="card-header" style="text-decoration: underline"><h4>ตรวจสอบภาษีป้าย</h4></div>
                        <h4 style="margin: 5% auto auto auto">  ยินดีต้อนรับคุณ<font color="#1e90ff">{{ $ownerData->fname }} {{ $ownerData->lname }} (พ.ศ.2564)</font></h4>
                        <div class="card-body">
                            <tr class="row-cols-6" style="float: left">
                                <td>
                                    <strong>Sign_ID: </strong> {{ $getSignData->id }}<br>
                                    <strong>เจ้าของทรัพย์สิน: </strong> {{$ownerData->prefix}}{{ $ownerData->fname }} {{ $ownerData->lname }}
                                    {{--                                        {{ $input->first_name }}--}}
                                    {{--                                        {{ $input->last_name }}--}}

                                    <strong>รหัสบัตรประชาชน: </strong>{{$ownerData->pop_id}}

                                </td> <br>
                                <td>
                                    <strong>ที่อยู่: </strong> {{ $ownerData->address }}
                                    <strong>หมู่: </strong> {{ $ownerData->moo }}
                                    <strong>ซอย: </strong> {{ $ownerData->soi }}
                                    <strong>ถนน: </strong> {{ $ownerData->road }}
                                </td><br>
                                <td>
                                    <strong>ตำบล: </strong> {{ $getDistrict->district }}
                                    <strong>อำเภอ: </strong> {{ $getDistrict->amphoe }}
                                    <strong>จังหวัด: </strong> {{ $getDistrict->province }}
                                </td><br>
                                <td>
                                    <strong>รหัสไปรษณีย์: </strong> {{ $ownerData->zip_code }}
                                    <strong>โทร: </strong> {{ $ownerData->telephone }}
                                    {{--                                    <a href="{{ url('/inputs/' . $input->id . '/edit') }}" class="btn btn-block btn-primary" style="width: 10%">แก้ไข</a>--}}
                                </td>
                            </tr>
                            {{--                            <div style="margin-left: 80%;margin-top: -10%;">--}}
                            {{--                                <td>--}}
                            {{--                                    <a href="{{ url('/lands/' . $input->id.'/edit') }}" class="btn btn-block btn-success">บันทึกข้อมูลแปลงที่ดิน/สิ่งปลูกสร้าง</a>--}}
                            {{--                                    --}}{{--                                <a href="{{ url('/buildings/' . $input->owner_id . '/edit') }}" class="btn btn-block btn-success" >บันทึกข้อมูลโรงเรือน/สิ่งปลูกสร้าง</a>--}}
                            {{--                                    <a href="{{ url('/signs/' . $input->id . '/edit') }}" class="btn btn-block btn-success" >บันทึกข้อมูลป้าย</a>--}}
                            {{--                                    <a href="{{ url('/reports/' . $input->id) }}" class="btn btn-block btn-warning" >รายงาน</a>--}}
                            {{--                                </td> <br>--}}

                            {{--                            </div>--}}

                            <div class="tab">
{{--                                <button class="tablinks" onclick="openCity(event, 'lands')" id="defaultOpen">ที่ดิน</button>--}}
                                {{--                                <button class="tablinks" onclick="openCity(event, 'builds')">โรงเรือนสิ่งปลูกสร้าง</button>--}}
                                <button class="tablinks" onclick="openCity(event, 'signs')" id="defaultOpen">ป้าย</button>
                            </div>
{{--                            <div id="lands" class="tabcontent" style="height: 400px;overflow-x: scroll">--}}
{{--                                @php--}}
{{--                                    $il = 1;--}}
{{--                                @endphp--}}

{{--                                <table width="100%">--}}
{{--                                    <tr>--}}
{{--                                        <th width="5%">ลำดับ</th>--}}
{{--                                        <th width="10%">แปลงที่ดิน</th>--}}
{{--                                        <th width="10%">ที่ตั้งของป้าย</th>--}}
{{--                                        <th width="10%">ประเภทป้าย</th>--}}
{{--                                        <th width="10%">กว้าง x ยาว</th>--}}
{{--                                        <th width="5%">เนื้อที่</th>--}}
{{--                                        <th width="5%">จำนวนด้าน</th>--}}
{{--                                        <th width="35%">ข้อความในป้าย</th>--}}
{{--                                        <th width="10%">อัตราภาษี</th>--}}
{{--                                    </tr>--}}
{{--                                    <tr style="color: #0080ff">--}}
{{--                                        <td>{{$il++}}</td>--}}
{{--                                        <td>{{$getData->parcel_code}}</td>--}}
{{--                                        <td>{{$getData->s_name}}</td>--}}
{{--                                        <td>{{$getData->sign_type_id}}</td>--}}
{{--                                        <td>{{$getData->sw}}x{{$getData->sl}} cm</td>--}}
{{--                                        <td>{{$getData->area}}</td>--}}
{{--                                        <td>{{$getData->no_side}}</td>--}}
{{--                                        <td>{{$getData->s_desc}}</td>--}}
{{--                                        <td><font style="color: red">--}}
{{--                                                {{number_format($getData->tax),2}}</font> บาท </td>--}}


{{--                                    </tr>--}}
{{--                                </table>--}}

{{--                            </div>--}}

{{--                            <div id="builds" class="tabcontent" style="height: 400px;overflow-x: scroll">--}}
{{--                                @php--}}
{{--                                    $ib = 1;--}}
{{--                                @endphp--}}

{{--                                <table width="100%">--}}
{{--                                    <tr>--}}
{{--                                        <th width="5%">ลำดับ</th>--}}
{{--                                        <th  width="5%">แปลงที่ดิน</th>--}}
{{--                                        <th  width="20%">ชื่อ หรือ ที่ตั้งอาคาร</th>--}}
{{--                                        <th  width="5%">ห้อง</th>--}}
{{--                                        <th  width="5%">ชั้น</th>--}}
{{--                                        <th  width="5%">กว้าง x ยาว</th>--}}
{{--                                        <th  width="10%">ราคาประเมินต่อตร.ม.</th>--}}
{{--                                        <th  width="10%">ราคาประเมินสิ่งปลูกสร้าง</th>--}}
{{--                                        <th  width="10%">ราคารวมที่ดินและสิ่งปลูกสร้างหลังหักค่าเสื่อม</th>--}}
{{--                                        <th  width="10%">ภาษี</th>--}}
{{--                                    </tr>--}}
{{--                                    <tr style="color: #0080ff">--}}
{{--                                        <td>{{$ib++}}</td>--}}
{{--                                        <td>{{$getData->parcel_b_code}}</td>--}}
{{--                                        <td>{{$getData->build_name}}</td>--}}
{{--                                        <td>{{$getData->b_room}}</td>--}}
{{--                                        <td>{{$getData->b_floor}}</td>--}}
{{--                                        <td>{{$getData->width}}X{{$getData->length}}={{$getData->result_wl}}</td>--}}
{{--                                        <td>{{number_format($getData->meanprice_wl),2}} บาท</td>--}}
{{--                                        <td>{{number_format($getData->result_buildprice),2}} บาท</td>--}}
{{--                                        <td><font style="color: red">{{number_format($getData->result_final),2}}</font> บาท</td>--}}
{{--                                        <td><font style="color: red">{{number_format($getData->sum_pay_land_tax),2}} </font>บาท</td>--}}


{{--                                    </tr>--}}
{{--                                </table>--}}

{{--                            </div>--}}

                            <div id="signs" class="tabcontent" style="height: 400px;overflow-x: scroll">
                                @php
                                    $is = 1;
                                @endphp

                                <table width="100%">
                                    <tr>
                                        <th width="10%">ลำดับ</th>
                                        <th  width="10%">แปลงที่ดิน</th>
                                        <th  width="15%">ที่ตั้งของป้าย</th>
                                        <th  width="10%">ประเภทป้าย</th>
                                        <th  width="5%">กว้าง X ยาว</th>
                                        <th  width="5%">เนื้อที่</th>
                                        <th  width="10%">จำนวนด้าน</th>
                                        <th  width="15%">ข้อความในป้าย</th>
                                        <th  width="10%">อัตราภาษี</th>
                                    </tr>
                                    @if(isset($getSignData))
                                        @foreach($getSignData10 as $gsd10)
                                            <tr style="color: #0080ff">
                                                <td>{{$is++}}</td>
                                                <td>{{$gsd10->b_code}}</td>
                                                <td>{{$gsd10->s_name}}</td>
                                                <td>
                                                    @if($gsd10->sign_type_id==1)
                                                        ประเภท 1 อักษรไทยล้วน
                                                    @elseif($gsd10->sign_type_id==2)
                                                        ประเภท 2 อักษรไทยปนกับอักษรต่างประเทศ/ภาพ/เครื่องหมายอื่น
                                                    @elseif($gsd10->sign_type_id==3)
                                                        ประเภท 3(ก) ไม่มีอักษรไทย
                                                    @elseif($gsd10->sign_type_id==4)
                                                        ประเภท 3(ข) อักษรไทยบางส่วนหรือทั้งหมดอยู่ใต้ หรือต่ำกว่าอักษรต่างประเทศ
                                                    @endif

                                                </td>
                                                <td>{{$gsd10->sw}}X{{$gsd10->sl}}</td>
                                                <td>{{$gsd10->sa}}</td>
                                                <td>{{$gsd10->no_side}}</td>
                                                <td>{{$gsd10->s_desc}}</td>
                                                <td><font style="color: red">{{number_format($gsd10->tax),2}}</font> บาท</td>

                                            </tr>
                                        @endforeach
                                    @endif
                                </table>

                            </div>
                        </div>
                        <div style="margin: 0 auto">
                            <td>
                                @php
                                    $sum_tax_lu = 0;
                                    $sum_tax_bu = 0;
                                    $sum_tax = 0;
                                    $sum_tax_sign = 0;
                                    $i = 1;
                                    $l = 1;

                                    $sum_tax_land = 0;
                                    $sum_tax_build = 0;
                                    $sum_tax_sign = 0;
                                    $sum_all_tax = 0;
                                    $il = 1;
                                    $ib = 1;
                                    $is = 1;

                                @endphp

                                {{--                              @if(isset($getLandData))--}}
                                {{--                                    <p style="font-weight: bold" hidden> ภาษีที่ดิน {{$i++}} :  {{number_format($sum_tax_lu+=$getLandData->tax),2}} บาท </p>--}}
                                {{--                                <p style="font-weight: bold" hidden> ภาษีที่ดิน {{$i++}} : {{number_format($sum_tax_bu+=$getData->tax_bu),2}} บาท </p>--}}
                                {{--                                    <p style="font-weight: bold"> ภาษีที่ดิน : {{number_format($sum_tax_lu),2}} บาท </p>--}}
                                {{--                                @endif--}}
                                {{--                                @if(isset($getBuildData))--}}
                                {{--                                <p style="font-weight: bold" hidden> ภาษีโรงเรือน {{$i++}} : {{number_format($sum_tax+=$getBuildData->tax),2}} บาท </p>--}}

                                {{--                                <p style="font-weight: bold"> ภาษีโรงเรือน : {{number_format($getBuildData->tax),2}} บาท </p>--}}
                                {{--                                @endif--}}
                                {{--                                @if(isset($getSignData10))--}}
                                {{--                                <p style="font-weight: bold" hidden> ภาษีป้าย {{$l++}} : {{number_format($sum_tax_sign+=$getSignData->tax),2}} บาท </p>--}}
                                {{--                                @endif--}}
                                {{--                                --}}{{--                                <p style="font-weight: bold"> ภาษีป้าย : {{number_format($sum_tax_sign),2}} บาท </p>--}}
                                {{--                                <p style="font-weight: bold"> รวมภาษี : <font style="font-size: 2rem;color: red">{{number_format($getData->tax),2}}  บาท </font> </p>--}}
                                {{--                                <p style="font-weight: bold">(<?php echo baht_text(round($getData->tax))  ?>)</p>--}}

{{--                                @if(isset($getLandData))--}}
{{--                                    <p style="font-weight: bold" hidden> ภาษีที่ดิน : {{$sum_tax_land+=$getLandData->tax}} บาท </p>--}}
{{--                                    <p style="font-weight: bold"> ภาษีที่ดิน : {{$getLandData->tax}} บาท </p>--}}
{{--                                @endif--}}
{{--                                @if(isset($getBuildData))--}}
{{--                                    <p style="font-weight: bold" hidden> ภาษีโรงเรือน : {{$sum_tax_build+=$getBuildData->tax}} บาท </p>--}}
{{--                                    <p style="font-weight: bold"> ภาษีโรงเรือน : {{$getBuildData->tax}} บาท </p>--}}
{{--                                @endif--}}
                                @if(isset($getSignData))
                                    @foreach($getSignData10 as $gsd)
                                        <p style="font-weight: bold" hidden> ภาษีป้าย : {{$sum_tax_sign+=$gsd->tax}} บาท </p>
                                        <font style="font-weight: bold"> ภาษีป้าย {{$l++}} ({{$gsd->s_name}}) : <font style="color: red">{{number_format($gsd->tax,2)}}</font> บาท </font>
                                        <br>
                                    @endforeach
                                    {{--                                    <p style="font-weight: bold"> ภาษีป้ายรวม : {{$sum_tax_sign}} บาท </p>--}}
                                @endif

                            </td>
                            <hr style="border: solid 1px red">
{{--                            <p style="font-weight: bold;font-size: 16px;text-align: center">รวมภาษีที่ดิน <label style="color: red">{{$sum_tax_land}}</label> บาท</p>--}}
{{--                            <p style="font-weight: bold;font-size: 16px;text-align: center">รวมภาษีโรงเรือน <label style="color: red"> {{$sum_tax_build}} </label> บาท</p>--}}
                            <p style="font-weight: bold;font-size: 16px;text-align: center">รวมภาษีป้าย <label style="color: red;font-size: 20px"> {{number_format($sum_tax_sign,2)}} </label> บาท</p>

{{--                            <p style="font-weight: bold;font-size: 16px;text-align: center">รวมภาษี <label style="color: red;font-size: 20px;"> {{$sum_tax_land+$sum_tax_build+$sum_tax_sign}} </label> บาท</p>--}}
                            <p style="font-weight: bold;text-align: center">({{ baht_text(round($sum_tax_land+$sum_tax_build+$sum_tax_sign))}})</p>
                            <br>

                            <script>
                                //คำนวนพื้นที่ป้าย
                                $(document).ready(function () {
                                    $('input[type="number"]').keyup(function () {
                                        var val1 = parseFloat($('#sum_land_tax').val());
                                        var val2 = parseFloat($('#sum_sign_tax').val());
                                        var sum = Math.round(val1 * val2);
                                        $("input##").val(sum);
                                    });
                                });
                            </script>



                        </div>
                        <h2 style="color: red;margin: 0 auto">*กรุณาเช็คข้อมูลภาษีอย่างละเอียดอีกครั้ง ก่อนทำการชำระหรือยื่นคัดค้าน*</h2>
                        <div class="col-6" style="text-align: center; margin: 0 auto">
                            <td>
                                <a href="{{ url('/paytaxsign/' . $getData->id) }}" class="btn btn-block btn-success">ชำระภาษี</a>
                                {{--                                <a href="{{ url('/buildings/' . $input->owner_id . '/edit') }}" class="btn btn-block btn-success" >บันทึกข้อมูลโรงเรือน/สิ่งปลูกสร้าง</a>--}}
                                <a href="{{ url('/cancel/' ) }}" class="btn btn-block btn-danger" >ยื่นคัดค้าน</a>
                            </td> <br>
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
