@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>รายงานรวม</h4>
                    </div>
                    <div class="card-body">
                            @csrf
{{--                            @method('PUT')--}}
                        <style type="text/css">
                            .tg  {border-collapse:collapse;border-spacing:0;}
                            .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:2px;overflow:hidden;word-break:normal;border-color:black;}
                            .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:2px;overflow:hidden;word-break:normal;border-color:black;}
                            .tg .tg-lboi{border-color:inherit;text-align:left;vertical-align:middle}
                            .tg .tg-9wq8{border-color:inherit;text-align:center;vertical-align:middle}
                            .tg .tg-baqh{text-align:center;vertical-align:top}
                            .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
                            .tg .tg-0lax{text-align:left;vertical-align:top}
                            .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
                        </style>
                        {{--    <div class="container-fluid">--}}
                        {{--        <div class="animated fadeIn">--}}

                        {{--                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">--}}
                        {{--                    <div class="card">--}}
                        {{--                        <div class="card-header">--}}
                        {{--                            <i class="fa fa-align-justify"></i>ภ.ด.ส.3</div>--}}
                        {{--                        <div class="card-body">--}}
                        <h2>ภ.ด.ส.1</h2>
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
                                <th class="tg-baqh" rowspan="3"><br><br><br>รวมราคาประเมิน<br>ของที่ดิน<br>และสิ่งปลูกสร้าง<br>(บาท)</th>
                                <th class="tg-baqh" rowspan="3"><br><br><br>ราคาประเมิน<br>ของที่ดินและสิ่ง<br>ปลูกสร้างตาม<br>สัดส่วนการใช้<br>ประโยชน์<br>(บาท)</th>
                                <th class="tg-baqh" rowspan="3"><br><br><br>หักมูลค่า<br>ฐานภาษี<br>ที่ได้รับยกเว้น<br>(บาท)</th>
                                <th class="tg-baqh" rowspan="3"><br><br><br>คงเหลือ<br>ราคาประเมิน<br>ทุนทรัพย์<br>ที่ต้องเสียภาษี<br>(บาท)</th>
                                <th class="tg-c3ow" rowspan="3"><br><br><br>อัตราภาษี<br>(ร้อยละ)</th>
                            </tr>
                            <tr>
                                <td class="tg-9wq8" colspan="3">จำนวน<br>เนื้อที่ดิน</td>
                                <td class="tg-9wq8" rowspan="2">คำนวณ<br>เป็น<br>ตารางวา</td>
                                <td class="tg-9wq8" rowspan="2">ราคาประเมิน<br>ต่อตารางวา<br>(บาท)</td>
                                <td class="tg-9wq8" rowspan="2">รวมราคา<br>ประเมินที่ดิน<br>(บาท)</td>
                                <td class="tg-9wq8" rowspan="2">ที่</td>
                                <td class="tg-9wq8" rowspan="2">ประเภท<br>สิ่งปลูกสร้าง</td>
                                <td class="tg-9wq8" rowspan="2">ลักษณะ<br>สิ่งปลูกสร้าง</td>
                                <td class="tg-c3ow" rowspan="2"><br><br>ลักษณะ<br>การใช้<br>ประโยชน์<br></td>
                                <td class="tg-c3ow" rowspan="2"><br><br>ขนาดพื้นที่<br>สิ่งปลูกสร้าง<br>(ตารางเมตร)</td>
                                <td class="tg-c3ow" rowspan="2"><br>คิดเป็น<br>สัดส่วนตาม<br>การใช้<br>ประโยชน์</td>
                                <td class="tg-c3ow" rowspan="2"><br>ราคาประเมิน<br>ต่อ<br>ตารางเมตร<br>(บาท)</td>
                                <td class="tg-c3ow" rowspan="2"><br>รวมราคา<br>สิ่งปลูกสร้าง<br>(บาท)</td>
                                <td class="tg-c3ow" colspan="2">ค่าเสื่อม</td>
                                <td class="tg-baqh" rowspan="2">ราคาประเมิน<br>สิ่งปลูกสร้าง<br>หลักหัก<br>ค่าเสื่อม<br>(บาท)</td>
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
                            @endphp
                            @foreach($datas1 as $pds1)
                                <tr>
                                <td class="tg-lboi">{{$i++}}</td>
                                <td class="tg-lboi">{{$pds1->ldoc_type}}</td>
                                <td class="tg-lboi">{{$pds1->sn}}</td>
                                <td class="tg-lboi">{{$pds1->dn}}</td>
                                <td class="tg-lboi">{{$pds1->moo}} {{$pds1->vl}} {{$pds1->tambon_id}}</td>
                                <td class="tg-lboi">{{$pds1->rai}}</td>
                                <td class="tg-9wq8">{{$pds1->rai}}</td>
                                <td class="tg-9wq8">{{$pds1->yawn}}</td>
                                <td class="tg-9wq8">{{$pds1->wa}}</td>
                                <td class="tg-lboi">{{$pds1->square_1}}</td>
                                <td class="tg-lboi">{{number_format($pds1->meanprice_vl),2}}</td>
                                <td class="tg-lboi">{{number_format($pds1->result_landprice_lands),2}}</td>
                                <td class="tg-lboi">{{$pds1->id}}</td>
                                <td class="tg-lboi">{{$pds1->building_type_name}}</td>
                                <td class="tg-lboi">{{$pds1->bm_id}}</td>
                                <td class="tg-0pky">{{$pds1->building_use_name}}</td>
                                <td class="tg-0pky">{{number_format($pds1->result_wl),2}}</td>
                                <td class="tg-0pky">{{$pds1->buildratio}}%</td>
                                <td class="tg-0pky">{{number_format($pds1->meanprice_wl),2}}</td>
                                <td class="tg-0pky">{{number_format($pds1->result_buildprice),2}}</td>
                                <td class="tg-c3ow">อายุ</td>
                                <td class="tg-0lax">{{number_format($pds1->depreciation),2}}</td>
                                <td class="tg-0lax">{{number_format($pds1->result_real),2}}</td>
                                <td class="tg-0lax">{{number_format($pds1->result_final),2}}</td>
                                <td class="tg-0lax">{{number_format($pds1->tax_exem),2}}</td>
                                <td class="tg-0lax">{{number_format($pds1->result_real_final),2}}</td>
                                <td class="tg-0lax">{{number_format($pds1->result_real_final),2}}</td>
                                <td class="tg-c3ow">{{$pds1->tax_final_percent}}%</td>
                                    @endforeach
                            </tr>
                        </table>
                        <br>


                        <style type="text/css">
                            .tg  {border-collapse:collapse;border-spacing:0;}
                            .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:2px;overflow:hidden;word-break:normal;border-color:black;}
                            .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:2px;overflow:hidden;word-break:normal;border-color:black;}
                            .tg .tg-9wq8{border-color:inherit;text-align:center;vertical-align:middle}
                            .tg .tg-baqh{text-align:center;vertical-align:top}
                            .tg .tg-nrix{text-align:center;vertical-align:middle}
                            .tg .tg-0lax{text-align:left;vertical-align:top}
                        </style>

                        <h2>ภ.ด.ส.3</h2>
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
                            $ipsd3 =1;
                            @endphp

                            @foreach($datas3 as $pds3)
                            <tr>
                                <td class="tg-0lax">{{$ipsd3++}}</td>
                                <td class="tg-0lax">{{$pds3->ldoc_type}}</td>
                                <td class="tg-0lax">{{$pds3->dn}}</td>
                                <td class="tg-0lax">{{$pds3->ln}}</td>
                                <td class="tg-0lax">{{$pds3->sn}}</td>
                                <td class="tg-0lax">{{$pds3->moo}} {{$pds3->vl}} {{$pds3->tambon_id}}</td>
                                <td class="tg-0lax">{{$pds3->rai}}</td>
                                <td class="tg-0lax">{{$pds3->yawn}}</td>
                                <td class="tg-0lax"> {{$pds3->square_1}}</td>
                                <td class="tg-0lax">
                                    @if($pds3->lut_id ===6 )
                                        {{number_format($pds3->result_square),2}}
                                    @elseif($pds3->lut_id ===7 )
                                        {{number_format($pds3->result_square),2}}
                                    @elseif($pds3->lut_id ===8 )
                                        {{number_format($pds3->result_square),2}}
                                    @elseif($pds3->lut_id ===9 )
                                        {{number_format($pds3->result_square),2}}
                                    @elseif($pds3->lut_id ===10 )
                                        {{number_format($pds3->result_square),2}}
                                    @else

                                    @endif</td>
                                <td class="tg-0lax">
                                    @if($pds3->lut_id ===1 )
                                        {{number_format($pds3->result_square),2}}
                                    @elseif($pds3->lut_id ===2 )
                                        {{number_format($pds3->result_square),2}}
                                    @elseif($pds3->lut_id ===3 )
                                        {{number_format($pds3->result_square),2}}
                                    @elseif($pds3->lut_id ===4 )
                                        {{number_format($pds3->result_square),2}}
                                    @elseif($pds3->lut_id ===5 )
                                        {{number_format($pds3->result_square),2}}
                                    @else

                                    @endif</td>
                                <td class="tg-0lax">
                                    @if($pds3->lut_id ===99 )
                                        {{number_format($pds3->result_square),2}}
                                    @else

                                    @endif
                                </td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax">{{$pds3->id}}</td>
                                <td class="tg-0lax">{{$pds3->b_number}}</td>
                                <td class="tg-0lax">{{$pds3->building_type_name}}</td>
                                <td class="tg-0lax">
                                    @if($pds3->bm_id ===1 )
                                        ตึก
                                        @elseif($pds3->bm_id ===2 )
                                        ไม้
                                    @else
                                        ตึกครึ่งไม้
                                    @endif
                                </td>
                                <td class="tg-0lax">{{number_format($pds3->result_wl),2}}</td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('javascript')

@endsection
