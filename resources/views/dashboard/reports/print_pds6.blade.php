@extends('dashboard.base')

@section('content')
    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>หนังสือแจ้งการประเมินภาษีที่ดินและสิ่งปลูกสร้าง</div>
                        <div class="card-body" id="PDS6">
                            <link href="{{ asset('css/styles2.css') }}" rel="stylesheet" media="print">

                            <h5 style="text-align: center;"><strong>หนังสือแจ้งการประเมินภาษีที่ดินและสิ่งปลูกสร้าง</strong></h5>
                            <h5 style="text-align: center;"><strong>ประจำปี ภาษี พ.ศ. .....</strong></h5>
                            <p>&nbsp;</p>
                            @php
                            $customer_name = '';
                            @endphp
                            <p style="text-align: left;"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ที่.................../...................&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; สำนักงาน/ที่ทำการ @php echo $customer_name; @endphp</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;วันที่.........เดือน............................พ.ศ. .......</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp;  เรื่อง แจ้งการประเมินเพื่อเสียภาษีที่ดินและสิ่งปลูกสร้าง</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp;  เรียน คุณ{{$getOwnerData->fname}} {{$getOwnerData->lname}}</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ตามที่ท่านเป็นเจ้าของทรัพย์สิน ประกอบด้วย</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;๑. ที่ดิน จำนวน @php $row = 0; @endphp @foreach($getData as $gdt) <font hidden>{{$row++}}</font> @endforeach{{$row++}}  แปลง </p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ๒. สิ่งปลูกสร้าง จำนวน {{$getBuildingCount}}หลัง</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ๓. อาคารชุด/ห้องชุด จำนวน @if(isset($getCondoCount)){{$getCondoCount}} ห้อง/หลัง @else 0 ห้อง/หลัง @endif</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; พนักงานประเมินได้ทำการประเมินภาษีที่ดินและสิ่งปลูกสร้างแล้ว เป็นจำนวนเงิน @php $landtax = 0; $buildtax = 0; @endphp  @foreach($getData as $gdt) <label style="display: none">{{$landtax+=$gdt->total_tax}} </label>  @endforeach {{number_format($landtax,2)}}  บาท ({{baht_text($landtax)}}) @php   @endphp</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ตามรายการที่ปรากฏในแบบแสดงรายการคำนวณภาษีที่ดินและสิ่งปลูกสร้างแนบท้ายหนังสือฉบับนี้</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ฉะนั้น ขอให้ท่านนำเงินภาษีที่ดินและสิ่งปลูกสร้างไปชำระ ณ สำนักงาน/ที่ทำการ @php echo $customer_name; @endphp</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ภายในเดือนเมษายนของทุกปี หรือ ..........................................................................................................................</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ถ้าไม่ชำระภาษีภายในกำหนดจะต้องเสียเบี้ยปรับและเงินเพิ่มตามมาตรา ๖๘ มาตรา ๖๙ และมาตรา ๗๐ แห่งพระราชบัญญัติภาษีที่ดินและสิ่งปลูกสร้าง พ.ศ. ๒๕๖๓</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; อนึ่ง หากท่านได้รับแจ้งการประเมินภาษีที่ดินและสิ่งปลูกสร้างแล้ว เห็นว่าการประเมินไม่ถูกต้อง มีสิทธิยื่นคำร้องคัดค้านต่อผู้บริหารท้องถิ่นเพื่อพิจารณา</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ทบทวนตามแบบ ภ.ด.ส. ๙ ภายในสามสิบวันนับแต่วันที่ได้รับแจ้งการประเมิน และหากผู้บริหารท้องถิ่นไม่เห็นชอบกับคำร้องคัดค้านนี้ ให้มีสิทธิอุทธรณ์</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ต่อคณะกรรมการพิจารณาอุทธรณ์การประเมินภาษี โดยยื่นอุทธรณ์ต่อผู้บริหารท้องถิ่นภายในสามสิบวันนับแต่วันที่ได้รับหนังสือแจ้ง และกรณีไม่เห็นด้วย</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; กับคำวินิจฉัยอุทธรณ์ มีสิทธิฟ้องเป็นคดีต่อศาลภายในสามสิบวันนับแต่วันที่ได้รับแจ้งคำวินิจฉัยอุทธรณ์ ทั้งที่ ตามมาตรา ๗๓ และมาตรา ๘๒&nbsp;</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; แห่งพระราชบัญญติภาษีที่ดินและสิ่งปลูกสร้าง พ.ศ. ๒๕๖๒</p>
                            <p>&nbsp;</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ขอแสดงความนับถือ</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;..................................................</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (..................................................)</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ตำแหน่ง.........................................................</p>
{{--                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;&nbsp;พนักงานประเมิน</p>--}}
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                        </div>
                        <a style="margin: 0 auto;text-align: center" class="btn btn-info btn-lg col-3" onclick="printDiv()" target="_blank">
                            <span class="cil-print btn-icon mr-2"></span> พิมพ์หนังสือแจ้งการประเมินภาษีที่ดินและสิ่งปลูกสร้าง (ภ.ด.ส. 6)
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
                    var divContents = document.getElementById("PDS6").innerHTML;
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
