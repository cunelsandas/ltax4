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
            <div class="row-cols-6">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header" style="text-decoration: underline"><h4>ตรวจสอบภาษี</h4></div>
                        <h4 style="margin: 5% auto auto auto">  ชื่อผู้ชำระภาษี <font color="#1e90ff">{{ $ownerData->first_name }} {{ $ownerData->last_name }}</font></h4>
                        <div class="card-body">
                            <tr class="row-cols-6" style="float: left">
                                <td>
{{--                                    <strong>Land_ID: </strong> {{ $getData->land_id }}<br>--}}
                                    <strong>เจ้าของทรัพย์สิน: </strong> {{$titleData->title_name}}{{ $ownerData->first_name }} {{ $ownerData->last_name }}
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
                                    <strong>ตำบล: </strong> {{ $tambonData->tambon_name }}
                                    <strong>อำเภอ: </strong> {{ $amphoeData->amphoe_name }}
                                    <strong>จังหวัด: </strong> {{ $provinceData->province_name }}
                                </td><br>
                                <td>
                                    <strong>รหัสไปรษณีย์: </strong> {{ $tambonData->zipcode }}
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
                                <button class="tablinks" onclick="openCity(event, 'lands')" id="defaultOpen">ที่ดิน</button>
                                                                <button class="tablinks" onclick="openCity(event, 'builds')">โรงเรือนสิ่งปลูกสร้าง</button>
                                                                <button class="tablinks" onclick="openCity(event, 'signs')">ป้าย</button>
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
                                        <th width="5%">จำนวนเนื้อที่</th>
                                        <th width="45%">รวมราคาประเมินที่ดิน</th>
                                        <th width="10%">อัตราภาษี</th>
                                    </tr>
                                    @if(isset($getLandData))
                                    <tr style="color: #0080ff">
                                        <td>{{$il++}}</td>
                                        <td>{{$getLandData->parcel_code}}</td>
                                        <td>{{$getLandtypeData->ldoc_name}}</td>
                                        <td>{{$getLandData->dn}}</td>
                                        <td>{{$getLandData->rw}}</td>
                                        <td>{{$getLandData->ln}}</td>
                                        <td>{{$getLandData->sn}}</td>
                                        <td>{{$getLandData->rai}}-{{$getLandData->yawn}}-{{$getLandData->wa}}</td>
                                        <td><font style="color: red">{{$getLandData->notes}}</font> บาท</td>
                                        <td><font style="color: red">
                                                {{number_format($getLandData->tax),2}}</font> บาท </td>

                                    </tr>
                                        @endif
                                </table>

                            </div>

                            <div id="builds" class="tabcontent" style="height: 400px;overflow-x: scroll">
                                @php
                                    $ib = 1;
                                @endphp

                                <table width="100%">
                                    <tr>
                                        <th width="5%">ลำดับ</th>
                                        <th  width="5%">แปลงที่ดิน</th>
                                        <th  width="20%">ชื่อ หรือ ที่ตั้งอาคาร</th>
                                        <th  width="5%">ห้อง</th>
                                        <th  width="5%">ชั้น</th>
                                        <th  width="5%">กว้าง x ยาว</th>
                                        {{--                                        <th  width="10%">ราคาประเมินต่อตร.ม.</th>--}}
                                        <th  width="10%">ราคาประเมินสิ่งปลูกสร้าง</th>
                                        {{--                                        <th  width="10%">ราคารวมที่ดินและสิ่งปลูกสร้างหลังหักค่าเสื่อม</th>--}}
                                        <th  width="10%">ภาษี</th>
                                    </tr>
                                    @if(isset($getBuildData))
                                        <tr style="color: #0080ff">
                                            <td>{{$ib++}}</td>
                                            <td>{{$getBuildData->parcel_code}}</td>
                                            <td>{{$getBuildData->bname}} {{$getBuildData->baddress}} {{$getBuildData->bmoo}} {{$getBuildData->bsoi}} {{$getBuildData->broad}}</td>
                                            <td>{{$getBuildData->broom}}</td>
                                            <td>{{$getBuildData->bfloor}}</td>
                                            {{--                                        <td>{{$getData->bwidth}}X{{$getData->blength}}={{$getData->result_wl}}</td>--}}
                                            <td>{{$getBuildData->bwidth}}X{{$getBuildData->blength}}</td>
                                            {{--                                        <td>{{number_format($getData->meanprice_wl),2}} บาท</td>--}}
                                            <td>{{number_format($getBuildData->bprice),2}} บาท</td>
                                            {{--                                        <td><font style="color: red">{{number_format($getData->result_final),2}}</font> บาท</td>--}}
                                            <td><font style="color: red">{{number_format($getBuildData->tax),2}} </font>บาท</td>


                                        </tr>
                                    @endif
                                </table>


                            </div>

                            <div id="signs" class="tabcontent" style="height: 400px;overflow-x: scroll">
                                @php
                                    $is = 1;
                                @endphp

                                <table width="100%">
                                    <tr>
                                        <th width="10%">ลำดับ</th>
                                        <th  width="10%">แปลงที่ดิน</th>
                                        <th  width="20%">ที่ตั้งของป้าย</th>
                                        <th  width="10%">ประเภทป้าย</th>
                                        <th  width="5%">กว้าง X ยาว</th>
                                        <th  width="5%">เนื้อที่</th>
                                        <th  width="10%">จำนวนด้าน</th>
                                        <th  width="10%">ข้อความในป้าย</th>
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
                                        <td>{{$gsd10->area}}</td>
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

                                @if(isset($getLandData))
                                    <p style="font-weight: bold" hidden> ภาษีที่ดิน : {{$sum_tax_land+=$getLandData->tax}} บาท </p>
                                    <p style="font-weight: bold"> ภาษีที่ดิน : {{$getLandData->tax}} บาท </p>
                                @endif
                                @if(isset($getBuildData))
                                    <p style="font-weight: bold" hidden> ภาษีโรงเรือน : {{$sum_tax_build+=$getBuildData->tax}} บาท </p>
                                    <p style="font-weight: bold"> ภาษีโรงเรือน : {{$getBuildData->tax}} บาท </p>
                                @endif
                                @if(isset($getSignData))
                                @foreach($getSignData10 as $gsd)
                                        <p style="font-weight: bold" hidden> ภาษีป้าย : {{$sum_tax_sign+=$gsd->tax}} บาท </p>
                                        <font style="font-weight: bold"> ภาษีป้าย {{$l++}} : {{$gsd->tax}} บาท </font>
                                @endforeach
{{--                                    <p style="font-weight: bold"> ภาษีป้ายรวม : {{$sum_tax_sign}} บาท </p>--}}
                                    @endif

                            </td>
                            <hr style="border: solid 1px #c3c3c3">
                            <p style="font-weight: bold;font-size: 16px;text-align: center">รวมภาษีที่ดิน <label style="color: red">{{$sum_tax_land}}</label> บาท</p>
                            <p style="font-weight: bold;font-size: 16px;text-align: center">รวมภาษีโรงเรือน <label style="color: red"> {{$sum_tax_build}} </label> บาท</p>
                            <p style="font-weight: bold;font-size: 16px;text-align: center">รวมภาษีป้าย <label style="color: red"> {{$sum_tax_sign}} </label> บาท</p>
                            <hr style="border: solid 1px #c3c3c3">
                            <p style="font-weight: bold;font-size: 16px;text-align: center">รวมภาษีทั้งหมด <label style="color: red;font-size: 20px;"> {{$sum_tax_land+$sum_tax_build+$sum_tax_sign}} </label> บาท</p>
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
{{--                        <h2 style="color: red;margin: 0 auto">*กรุณาเช็คข้อมูลภาษีอย่างละเอียดอีกครั้ง ก่อนทำการชำระหรือยื่นคัดค้าน*</h2>--}}
{{--                        <div class="col-6" style="text-align: center; margin: 0 auto">--}}
{{--                            <td>--}}
{{--                                <a href="{{ url('/confirm/' . $getData->s_id) }}" class="btn btn-block btn-success">ชำระภาษี</a>--}}
{{--                                --}}{{--                                <a href="{{ url('/buildings/' . $input->owner_id . '/edit') }}" class="btn btn-block btn-success" >บันทึกข้อมูลโรงเรือน/สิ่งปลูกสร้าง</a>--}}
{{--                                <a href="{{ url('/cancel/' ) }}" class="btn btn-block btn-danger" >ยื่นคัดค้าน</a>--}}
{{--                            </td> <br>--}}
{{--                        </div>--}}
                        <hr style="border: solid 1px #c3c3c3">
                        <div class="row ml-2 mr-2 mt-2 mb-4">
                            <div class="col-4">
                        <p style="font-weight: bold;font-size: 16px;text-align: left">สลิปธนาคารที่ชำระภาษีที่ดิน</p>
                                @if(isset($getdateland->upload_date))
                        @if(file_exists( public_path().'/paytaxland/images/'. $ownerData->owner_id .'_paytaxland_'.$getdateland->upload_date.'.png' ))
                          <a style="cursor: zoom-in" href="../../paytaxland/images/{{$ownerData->owner_id}}_paytaxland_{{$getdateland->upload_date}}.png?id={{time()}}" target="_blank"><img width="70%" id="imgland" style="margin: 0 auto" src="../../paytaxland/images/{{$ownerData->owner_id}}_paytaxland_{{$getdateland->upload_date}}.png?id={{time()}}"></a>
                        @else
{{--                            <img src="/images/photos/account/default.png" alt="">--}}
                        @endif
                                    @endif
                            </div>
                            <div class="col-4">
                            <p style="font-weight: bold;font-size: 16px;text-align: center">สลิปธนาคารที่ชำระภาษีสิ่งปลูกสร้าง</p>
                                @if(isset($getdatebuild->upload_date))
                            @if(file_exists( public_path().'/paytaxbuild/images/'. $ownerData->owner_id .'_paytaxbuild_'.$getdatebuild->upload_date.'.png' ))
                                    <a style="cursor: zoom-in" href="../../paytaxbuild/images/{{$ownerData->owner_id}}_paytaxbuild_{{$getdatebuild->upload_date}}.png?id={{time()}}" target="_blank"> <img width="70%" id="imgbuild" style="margin: 0 auto" src="../../paytaxbuild/images/{{$ownerData->owner_id}}_paytaxbuild_{{$getdatebuild->upload_date}}.png?id={{time()}}"></a>
                            @else
                                {{--                            <img src="/images/photos/account/default.png" alt="">--}}
                            @endif

                                    @endif
                            </div>
                            <div class="col-4">
                            <p style="font-weight: bold;font-size: 16px;text-align: center">สลิปธนาคารที่ชำระภาษีป้าย</p>
                                @if(isset($getdatesign->upload_date))
                            @if(file_exists( public_path().'/paytaxsign/images/'. $ownerData->owner_id .'_paytaxsign_'.$getdatesign->upload_date.'.png' ))
                                    <a style="cursor: zoom-in" href="../../paytaxsign/images/{{$ownerData->owner_id}}_paytaxsign_{{$getdatesign->upload_date}}.png?id={{time()}}" target="_blank"><img width="70%" id="imgsign" style="margin: 0 auto" src="../../paytaxsign/images/{{$ownerData->owner_id}}_paytaxsign_{{$getdatesign->upload_date}}.png?id={{time()}}"></a>
                            @else
                                {{--                            <img src="/images/photos/account/default.png" alt="">--}}
                            @endif
                                    @endif
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <!-- The Modal land -->--}}
{{--    <div id="myModal1" class="modal">--}}
{{--        <span class="close1" style="z-index: 1000">&times;</span>--}}
{{--        <img class="modal-content" id="img01" width="50%">--}}
{{--        <div id="caption"></div>--}}
{{--    </div>--}}

{{--    <script>--}}
{{--        // Get the modal--}}
{{--        var modal = document.getElementById("myModal1");--}}

{{--        // Get the image and insert it inside the modal - use its "alt" text as a caption--}}
{{--        var img = document.getElementById("imgland");--}}
{{--        var modalImg = document.getElementById("img01");--}}
{{--        var captionText = document.getElementById("caption");--}}
{{--        img.onclick = function(){--}}
{{--            modal.style.display = "block";--}}
{{--            modalImg.src = this.src;--}}
{{--            captionText.innerHTML = this.alt;--}}
{{--        }--}}

{{--        // Get the <span> element that closes the modal--}}
{{--        var span = document.getElementsByClassName("close1")[0];--}}

{{--        // When the user clicks on <span> (x), close the modal--}}
{{--        span.onclick = function() {--}}
{{--            modal.style.display = "none";--}}
{{--        }--}}
{{--    </script>--}}



{{--    <!-- The Modal build -->--}}
{{--    <div id="myModal2" class="modal">--}}
{{--        <span class="close2" style="z-index: 1000">&times;</span>--}}
{{--        <img class="modal-content" id="img02" width="50%">--}}
{{--        <div id="caption"></div>--}}
{{--    </div>--}}

{{--    <script>--}}
{{--        // Get the modal--}}
{{--        var modal = document.getElementById("myModal2");--}}

{{--        // Get the image and insert it inside the modal - use its "alt" text as a caption--}}
{{--        var img = document.getElementById("imgbuild");--}}
{{--        var modalImg = document.getElementById("img02");--}}
{{--        var captionText = document.getElementById("caption");--}}
{{--        img.onclick = function(){--}}
{{--            modal.style.display = "block";--}}
{{--            modalImg.src = this.src;--}}
{{--            captionText.innerHTML = this.alt;--}}
{{--        }--}}

{{--        // Get the <span> element that closes the modal--}}
{{--        var span = document.getElementsByClassName("close2")[0];--}}

{{--        // When the user clicks on <span> (x), close the modal--}}
{{--        span.onclick = function() {--}}
{{--            modal.style.display = "none";--}}
{{--        }--}}
{{--    </script>--}}

{{--    <!-- The Modal sign -->--}}
{{--    <div id="myModal3" class="modal">--}}
{{--        <span class="close3" style="z-index: 1000">&times;</span>--}}
{{--        <img class="modal-content" id="img03" width="50%">--}}
{{--        <div id="caption"></div>--}}
{{--    </div>--}}

{{--    <script>--}}
{{--        // Get the modal--}}
{{--        var modal = document.getElementById("myModal3");--}}

{{--        // Get the image and insert it inside the modal - use its "alt" text as a caption--}}
{{--        var img = document.getElementById("imgsign");--}}
{{--        var modalImg = document.getElementById("img03");--}}
{{--        var captionText = document.getElementById("caption");--}}
{{--        img.onclick = function(){--}}
{{--            modal.style.display = "block";--}}
{{--            modalImg.src = this.src;--}}
{{--            captionText.innerHTML = this.alt;--}}
{{--        }--}}

{{--        // Get the <span> element that closes the modal--}}
{{--        var span = document.getElementsByClassName("close3")[0];--}}

{{--        // When the user clicks on <span> (x), close the modal--}}
{{--        span.onclick = function() {--}}
{{--            modal.style.display = "none";--}}
{{--        }--}}
{{--    </script>--}}





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




{{--@extends('dashboard.base')--}}

{{--@section('content')--}}

{{--        <div class="container-fluid">--}}
{{--          <div class="animated fadeIn">--}}
{{--            <div class="row">--}}
{{--              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">--}}
{{--                  <h5>ข้อมูลผู้ชำระภาษี</h5>--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">--}}
{{--                      <i class="fa fa-align-justify"></i> {{ __('ID:') }} {{ $getData->owner_id }} {{ __('รหัส ผท.4:') }} {{ $getData->codept4 }}</div>--}}
{{--                    <div class="card-body">--}}
{{--                        <form method="POST" action="/paytaxs/{{ $getData->owner_id }}">--}}
{{--                            @csrf--}}
{{--                            @method('PUT')--}}
{{--                            <div class="form-group row">--}}
{{--                                <div class="col-2">--}}
{{--                                    <label>คำนำหน้า</label>--}}
{{--                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="title_name" value="{{$titleData->title_name}}" required autofocus readonly>--}}
{{--                                </div>--}}
{{--                                <div class="col-5">--}}
{{--                                    <label>ชื่อ</label>--}}
{{--                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="first_name" value="{{ $getData->first_name }}" required autofocus readonly>--}}
{{--                                </div>--}}
{{--                                <div class="col-5">--}}
{{--                                    <label>นามสกุล</label>--}}
{{--                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="last_name" value="{{ $getData->last_name }}" required autofocus readonly>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <div class="col">--}}
{{--                                    <label>เลขบัตรประจำตัวประชาชน</label>--}}
{{--                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="pop_id" value="{{$getData->pop_id}}" required autofocus readonly>                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <div class="col-6">--}}
{{--                                    <label>บ้านเลขที่</label>--}}
{{--                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="address" value="{{$getData->address}}" required autofocus readonly>--}}
{{--                                </div>--}}
{{--                                <div class="col-6">--}}
{{--                                    <label>หมู่ที่</label>--}}
{{--                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="moo" value="{{ $getData->moo }}" required autofocus readonly>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <div class="col-6">--}}
{{--                                    <label>ซอย</label>--}}
{{--                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="soi" value="{{$getData->soi}}" required autofocus readonly>--}}
{{--                                </div>--}}
{{--                                <div class="col-6">--}}
{{--                                    <label>ถนน</label>--}}
{{--                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="road" value="{{ $getData->road }}" required autofocus readonly>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <div class="col-4">--}}
{{--                                    <label>จังหวัด</label>--}}
{{--                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="province" value="{{$provinceData->province_name}}" required autofocus readonly>--}}
{{--                                </div>--}}
{{--                                <div class="col-4">--}}
{{--                                    <label>อำเภอ</label>--}}
{{--                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="amphoe" value="{{ $amphoeData->amphoe_name }}" required autofocus readonly>--}}
{{--                                </div>--}}
{{--                                <div class="col-4">--}}
{{--                                    <label>ตำบล</label>--}}
{{--                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="tambon" value="{{ $tambonData->tambon_name }}" required autofocus readonly>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <div class="col-6">--}}
{{--                                    <label>หมู่บ้าน</label>--}}
{{--                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="community" value="{{$getData->community}}" required autofocus readonly>--}}
{{--                                </div>--}}
{{--                                <div class="col-6">--}}
{{--                                    <label>รหัสไปรษณีย์</label>--}}
{{--                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="zip_code" value="{{ $getData->zip_code }}" required autofocus readonly>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <div class="col-6">--}}
{{--                                    <label>โทรศัพท์</label>--}}
{{--                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="telephone" value="{{$getData->telephone}}" required autofocus readonly>--}}
{{--                                </div>--}}
{{--                                <div class="col-6">--}}
{{--                                    <label>โทรสาร</label>--}}
{{--                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="fax" value="{{ $getData->fax }}" required autofocus readonly>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <div class="col">--}}
{{--                                    <label>อีเมล</label>--}}
{{--                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="email" value="{{$getData->email}}" required autofocus readonly>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <div class="col">--}}
{{--                                    <label>วันที่ลงข้อมูล</label>--}}
{{--                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="create_date" value="{{formatDateThai($getData->create_date)}}" required autofocus readonly>--}}
{{--                                </div>--}}
{{--                            </div>--}}


{{--                            <div class="form-group row">--}}
{{--                                <div class="col">--}}
{{--                                    <label>Applies to date</label>--}}
{{--                                    <input type="date" class="form-control" name="applies_to_date" value="{{ $getData->owner_id }}" required/>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <div class="col">--}}
{{--                                    <label>Status</label>--}}
{{--                                    <select class="form-control" name="status_id">--}}
{{--                                        @foreach($statuses as $status)--}}
{{--                                            @if( $status->id == $note->status_id )--}}
{{--                                                <option value="{{ $status->id }}" selected="true">{{ $status->name }}</option>--}}
{{--                                            @else--}}
{{--                                                <option value="{{ $status->id }}">{{ $status->name }}</option>--}}
{{--                                            @endif--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <div class="col">--}}
{{--                                    <label>Note type</label>--}}
{{--                                    <input class="form-control" type="text" placeholder="{{ __('Note type') }}" name="note_type" value="{{ $getData->owner_id }}" required>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <button class="btn btn-block btn-success" type="submit">{{ __('Save') }}</button>--}}
{{--                            <a href="{{ route('paytaxs.index') }}" class="btn btn-block btn-primary">{{ __('ย้อนกลับ') }}</a>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--                @if(isset($getLandData))--}}
{{--                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">--}}
{{--                    <h5>ข้อมูลที่ดิน</h5>--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            <i class="fa fa-align-justify"></i> {{ __('Land ID:') }} {{ $getLandData->land_id }} {{ __('โฉนดที่ดิน:') }} {{ $getLandData->parcel_code }} {{ __('ประจำปี:') }} {{ $getLandData->annual }}</div>--}}
{{--                        <div class="card-body">--}}
{{--                            <form method="POST" action="/paytaxs/{{ $getData->owner_id }}">--}}
{{--                                @csrf--}}
{{--                                @method('PUT')--}}
{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-3">--}}
{{--                                        <label>เล่มที่</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="lb" value="{{$getLandData->lb}}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-3">--}}
{{--                                        <label>หน้าที่</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="lp" value="{{ $getLandData->lp }}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label>ระวางที่</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="rw" value="{{ $getLandData->rw }}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-4">--}}
{{--                                        <label>ประเภทเอกสารสิทธิ์</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="ldoc_type" value="{{$getLandtypeData->ldoc_name}}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-4">--}}
{{--                                        <label>เลขที่ดิน</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="ln" value="{{$getLandData->ln}}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-4">--}}
{{--                                        <label>หน้าสำรวจ</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="sn" value="{{$getLandData->sn}}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label>มาตราส่วน</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="sc" value="{{$getLandData->sc}}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label>พื้นที่ ไร่-งาน-ตร.วา</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="moo" value="{{$getLandData->rai}}-{{$getLandData->yawn}}-{{$getLandData->wa}}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-4">--}}
{{--                                        <label>หมู่ที่</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="moo" value="{{$getLandData->moo}}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-4">--}}
{{--                                        <label>หมู่บ้าน</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="vl" value="{{ $getLandData->vl }}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-4">--}}
{{--                                        <label>ซอย</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="soi" value="{{ $getLandData->soi }}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label>ถนน</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="road" value="{{$getLandData->road}}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label>ตำบล</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="tambon" value="{{ $tambonData->tambon_name }}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-12">--}}
{{--                                        <label>รายละเอียดเพิ่มเติม</label>--}}
{{--                                        <textarea class="form-control" rows="3" type="text" placeholder="{{ __('-') }}" name="notes" required autofocus readonly>{{$getLandData->notes}} &#13;&#10; ผู้ถือกรรมสิทธิ์ที่ดินร่วม: {{$getLandData->co_owner}} </textarea>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-12">--}}
{{--                                        <label>ประมาณภาษี</label>--}}
{{--                                        <input style="color: red" class="form-control" type="text" placeholder="{{ __('-') }}" name="tax" value="{{number_format($getLandData->tax,2)}} บาท" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label>บันทึกเมื่อ</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="record_date" value="{{formatDateThai($getLandData->record_date)}}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label>ผู้บันทึกข้อมูล</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="uid" value="{{$getUserData->fname}} {{$getUserData->surname}}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                @endif--}}



{{--                                                            <div class="form-group row">--}}
{{--                                                                <div class="col">--}}
{{--                                                                    <label>Applies to date</label>--}}
{{--                                                                    <input type="date" class="form-control" name="applies_to_date" value="{{ $getData->owner_id }}" required/>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}

{{--                                                            <div class="form-group row">--}}
{{--                                                                <div class="col">--}}
{{--                                                                    <label>Status</label>--}}
{{--                                                                    <select class="form-control" name="status_id">--}}
{{--                                                                        @foreach($statuses as $status)--}}
{{--                                                                            @if( $status->id == $note->status_id )--}}
{{--                                                                                <option value="{{ $status->id }}" selected="true">{{ $status->name }}</option>--}}
{{--                                                                            @else--}}
{{--                                                                                <option value="{{ $status->id }}">{{ $status->name }}</option>--}}
{{--                                                                            @endif--}}
{{--                                                                        @endforeach--}}
{{--                                                                    </select>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}

{{--                                                            <div class="form-group row">--}}
{{--                                                                <div class="col">--}}
{{--                                                                    <label>Note type</label>--}}
{{--                                                                    <input class="form-control" type="text" placeholder="{{ __('Note type') }}" name="note_type" value="{{ $getData->owner_id }}" required>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}

{{--                                                            <button class="btn btn-block btn-success" type="submit">{{ __('Save') }}</button>--}}
{{--                                <a href="{{ route('paytaxs.index') }}" class="btn btn-block btn-primary">{{ __('ย้อนกลับ') }}</a>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                @if(isset($getBuildData))--}}
{{--                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">--}}
{{--                    <h5>ข้อมูลอาคารและสิ่งปลูกสร้าง</h5>--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            <i class="fa fa-align-justify"></i> {{ __('Build ID:') }} {{ $getBuildData->bid }} {{ __('รหัสโรงเรือน:') }} {{ $getBuildData->b_code }} {{ __('ประจำปี:') }} {{ $getLandData->annual }}</div>--}}
{{--                        <div class="card-body">--}}
{{--                            <form method="POST" action="/paytaxs/{{ $getData->owner_id }}">--}}
{{--                                @csrf--}}
{{--                                @method('PUT')--}}
{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label>รหัสแปลงที่ดิน</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="parcel_code_b" value="{{$getBuildData->parcel_code}}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label>รหัสบ้าน</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="house_code" value="{{ $getBuildData->house_code }}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label>ประเภทอาคาร</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="bt" value="{{$getBuildtypeData->bt_name}}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label>ประเภทสิ่งก่อสร้าง</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="bm" value="{{$getBuildmatData->bm_name}}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label>ชื่ออาคาร</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="bname" value="{{$getBuildData->bname}}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label>ชุมชน</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="community" value="{{$getBuildData->community}}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-4">--}}
{{--                                        <label>จำนวนชั้น</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="bfloor" value="{{$getBuildData->bfloor}}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-4">--}}
{{--                                        <label>จำนวนห้อง</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="broom" value="{{ $getBuildData->broom }}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-4">--}}
{{--                                        <label>กว้าง / ยาว</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="bwl" value="{{ $getBuildData->bwidth }} / {{ $getBuildData->blength }}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label>วันที่สร้างเสร็จ</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="bcomplete_date" value="{{Thaidateonly($getBuildData->bcomplete_date)}}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label>ราคาก่อสร้าง</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="bprice" value="{{ number_format($getBuildData->bprice) }} บาท" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-12">--}}
{{--                                        <label>รายละเอียดเพิ่มเติม</label>--}}
{{--                                        <textarea class="form-control" type="text" placeholder="{{ __('-') }}" name="notes" required autofocus readonly>{{$getBuildData->notes}}</textarea>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-12">--}}
{{--                                        <label>ประมาณภาษี</label>--}}
{{--                                        <input style="color: red" class="form-control" type="text" placeholder="{{ __('-') }}" name="tax" value="{{number_format($getBuildData->tax,2)}} บาท" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label>บันทึกเมื่อ</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="record_date" value="{{formatDateThai($getBuildData->record_date)}}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label>ผู้บันทึกข้อมูล</label>--}}
{{--                                        <input class="form-control" type="text" placeholder="{{ __('-') }}" name="uid" value="{{$getUserbData->fname}} {{$getUserbData->surname}}" required autofocus readonly>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                @endif--}}



{{--                                                            <div class="form-group row">--}}
{{--                                                                <div class="col">--}}
{{--                                                                    <label>Applies to date</label>--}}
{{--                                                                    <input type="date" class="form-control" name="applies_to_date" value="{{ $getData->owner_id }}" required/>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}

{{--                                                            <div class="form-group row">--}}
{{--                                                                <div class="col">--}}
{{--                                                                    <label>Status</label>--}}
{{--                                                                    <select class="form-control" name="status_id">--}}
{{--                                                                        @foreach($statuses as $status)--}}
{{--                                                                            @if( $status->id == $note->status_id )--}}
{{--                                                                                <option value="{{ $status->id }}" selected="true">{{ $status->name }}</option>--}}
{{--                                                                            @else--}}
{{--                                                                                <option value="{{ $status->id }}">{{ $status->name }}</option>--}}
{{--                                                                            @endif--}}
{{--                                                                        @endforeach--}}
{{--                                                                    </select>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}

{{--                                                            <div class="form-group row">--}}
{{--                                                                <div class="col">--}}
{{--                                                                    <label>Note type</label>--}}
{{--                                                                    <input class="form-control" type="text" placeholder="{{ __('Note type') }}" name="note_type" value="{{ $getData->owner_id }}" required>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}

{{--                                                            <button class="btn btn-block btn-success" type="submit">{{ __('Save') }}</button>--}}
{{--                                                                <a href="{{ route('paytaxs.index') }}" class="btn btn-block btn-primary">{{ __('ย้อนกลับ') }}</a>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--                        @if(isset($getSignData))--}}
{{--                            @foreach($getSignData10 as $gsd10)--}}
{{--                            <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">--}}
{{--                                <h5>ข้อมูลป้าย</h5>--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-header">--}}
{{--                                        <i class="fa fa-align-justify"></i> {{ __('Sign ID:') }} {{ $gsd10->s_id }}  {{ __('ประจำปี:') }} {{ $gsd10->annual }}</div>--}}
{{--                                    <div class="card-body">--}}
{{--                                        <form method="POST" action="/paytaxs/{{ $gsd10->owner_id }}">--}}
{{--                                            @csrf--}}
{{--                                            @method('PUT')--}}
{{--                                            <div class="form-group row">--}}
{{--                                                <div class="col">--}}
{{--                                                    <label>ชื่อป้าย</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="s_name" value="{{$gsd10->s_name}}" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="form-group row">--}}
{{--                                                <div class="col-4">--}}
{{--                                                    <label>ที่อยู่</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="s_address" value="{{$gsd10->address}}" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-3">--}}
{{--                                                    <label>หมู่</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="s_moo" value="{{$gsd10->moo}}" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-5">--}}
{{--                                                    <label>ซอย</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="s_soi" value="{{$gsd10->soi}}" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="form-group row">--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <label>ถนน</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="s_road" value="{{$gsd10->road}}" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <label>ตำบล</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="s_tambon" value="{{$tambonData->tambon_name}}" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group row">--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <label>สถานที่ใกล้เคียง</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="s_nearby" value="{{$gsd10->nearby}}" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <label>ตำบล</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="s_tambon" value="{{$tambonData->tambon_name}}" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="form-group row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <label>ชื่อเจ้าของ</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="holder_name" value="{{$gsd10->holder_name}}" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group row">--}}
{{--                                                <div class="col-4">--}}
{{--                                                    <label>ที่อยู่เจ้าของ</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="s_haddress" value="{{$gsd10->holder_address}}" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-3">--}}
{{--                                                    <label>หมู่</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="s_hmoo" value="{{$gsd10->holder_moo}}" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-5">--}}
{{--                                                    <label>ซอย</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="s_hsoi" value="{{$gsd10->holder_soi}}" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group row">--}}
{{--                                                <div class="col-4">--}}
{{--                                                    <label>จังหวัด</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="s_hprovince" value="{{$holderProvince->province_name}}" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-4">--}}
{{--                                                    <label>อำเภอ</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="s_hamphoe" value="{{$holderAmphoe->amphoe_name}}" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-4">--}}
{{--                                                    <label>ตำบล</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="s_htambon" value="{{$holderTambon->tambon_name}}" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group row">--}}
{{--                                                <div class="col">--}}
{{--                                                    <label>รหัสไปรษณีย์</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="s_hzipcode" value="{{$gsd10->holder_zipcode}}" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                                <div class="col">--}}
{{--                                                    <label>เบอร์โทรศัพท์</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="s_hphone" value="{{$gsd10->holder_phone}}" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <hr>--}}
{{--                                            <div class="form-group row">--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <label>ประเภทป้าย</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="s_type" value="{{$getSignType->sign_desc}}" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <label>ข้อความในป้าย</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="s_desc" value="{{$gsd10->s_desc}}" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group row">--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <label>ขนาดป้ายกว้าง / ยาว</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="s_type" value="{{$gsd10->sw}} * {{$gsd10->sl}} = {{$gsd10->area}} " required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <label>ข้อความในป้าย</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="s_desc" value="{{$gsd10->s_desc}}" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group row">--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <label>วันที่สร้างเสร็จ</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="bcomplete_date" value="{{Thaidateonly($getBuildData->bcomplete_date)}}" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <label>ราคาก่อสร้าง</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="bprice" value="{{ number_format($getBuildData->bprice) }} บาท" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="form-group row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <label>รายละเอียดเพิ่มเติม</label>--}}
{{--                                                    <textarea class="form-control" type="text" placeholder="{{ __('-') }}" name="notes" required autofocus readonly>{{$getBuildData->notes}}</textarea>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <label>ประมาณภาษี</label>--}}
{{--                                                    <input style="color: red" class="form-control" type="text" placeholder="{{ __('-') }}" name="tax" value="{{number_format($gsd10->tax,2)}} บาท" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="form-group row">--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <label>บันทึกเมื่อ</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="record_date" value="{{formatDateThai($getBuildData->record_date)}}" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <label>ผู้บันทึกข้อมูล</label>--}}
{{--                                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="uid" value="{{$getUserbData->fname}} {{$getUserbData->surname}}" required autofocus readonly>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}





{{--                                                                        <div class="form-group row">--}}
{{--                                                                            <div class="col">--}}
{{--                                                                                <label>Applies to date</label>--}}
{{--                                                                                <input type="date" class="form-control" name="applies_to_date" value="{{ $getData->owner_id }}" required/>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}

{{--                                                                        <div class="form-group row">--}}
{{--                                                                            <div class="col">--}}
{{--                                                                                <label>Status</label>--}}
{{--                                                                                <select class="form-control" name="status_id">--}}
{{--                                                                                    @foreach($statuses as $status)--}}
{{--                                                                                        @if( $status->id == $note->status_id )--}}
{{--                                                                                            <option value="{{ $status->id }}" selected="true">{{ $status->name }}</option>--}}
{{--                                                                                        @else--}}
{{--                                                                                            <option value="{{ $status->id }}">{{ $status->name }}</option>--}}
{{--                                                                                        @endif--}}
{{--                                                                                    @endforeach--}}
{{--                                                                                </select>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}

{{--                                                                        <div class="form-group row">--}}
{{--                                                                            <div class="col">--}}
{{--                                                                                <label>Note type</label>--}}
{{--                                                                                <input class="form-control" type="text" placeholder="{{ __('Note type') }}" name="note_type" value="{{ $getData->owner_id }}" required>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}

{{--                                                                        <button class="btn btn-block btn-success" type="submit">{{ __('Save') }}</button>--}}
{{--                                                                            <a href="{{ route('paytaxs.index') }}" class="btn btn-block btn-primary">{{ __('ย้อนกลับ') }}</a>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            @endforeach--}}
{{--                        @endif--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}

{{--@endsection--}}

{{--@section('javascript')--}}

{{--@endsection--}}
