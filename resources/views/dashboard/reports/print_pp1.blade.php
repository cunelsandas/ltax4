@extends('dashboard.base')

@section('content')

    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>แบบแสดงรายการภาษีป้าย (ภ.ป. 1)</div>
                        <div class="card-body" id="PP1">
                            <link href="{{ asset('css/styles2.css') }}" rel="stylesheet" media="print">
                            <style type="text/css">
                                .tg  {border-collapse:collapse;border-spacing:0;}
                                .tg td{font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                                .tg th{font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                                .tg .tg-wa1i{font-weight:bold;text-align:center;vertical-align:middle}
                                .tg .tg-7btt{font-weight:bold;border-color:inherit;text-align:center;vertical-align:top}
                                .tg .tg-fymr{font-weight:bold;border-color:inherit;text-align:left;vertical-align:top}
                                .tg .tg-uzvj{font-weight:bold;border-color:inherit;text-align:center;vertical-align:middle}
                                .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
                                .tg .tg-0lax{text-align:left;vertical-align:top}
                            </style>
{{--                            <h2 align="center">แบบแสดงรายการภาษีป้าย (ภ.ป. 1)</h2>--}}
                            <br>
                            @php $customer_name = 'บริษัท ไอทีโกลโบล จำกัด' @endphp
                            @if(isset($getDataOwner))

                            <h4>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ภ.ป. 1</h4>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; แบบแสดงรายการปภาษีป้าย</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ประจำปี พ.ศ. ...............</p>
                            <p>&nbsp;</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ชื่อเจ้าของป้าย {{$getDataOwner->fname}} {{$getDataOwner->lname}} ชื่อสถานที่ประกอบการค้าหรือกิจกรรมอื่น @foreach($getData as $gtd) {{$gtd->s_name}}@endforeach</p>

                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ที่อยู่ เลขที่ {{$getDataOwner->address}}  ตรอก,ซอย {{$getDataOwner->soi}}  ถนน  {{$getDataOwner->road}}  หมู่ที่ {{$getDataOwner->moo}} </p>
{{--                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ตำบล {{$getDataOwner->holder_province_id}}  อำเภอ {{$getDataOwner->holder_amphoe_id}}จังหวัด {{$getDataOwner->holder_province_id}} โทรศัพท์ {{$getDataOwner->telephone}} </p>--}}
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ขอยื่นแบบแสดงรายการภาษีป้ายต่อพนักงานเจ้าหน้าที่ ณ
                                {{$customer_name}} ตามรายการต่อไปนี้</p>
                            @endif
                                <table class="tg">
                                <tr>
                                    <th class="tg-7btt" rowspan="2">1<br>ประเภท<br>ป้าย</th>
                                    <th class="tg-7btt" colspan="2">2<br>ขนาดป้าย ซ.ม.</th>
                                    <th class="tg-7btt" rowspan="2">3<br>เนื้อที่ป้าย<br>ตาราง ซ.ม.</th>
                                    <th class="tg-7btt" rowspan="2">4<br>จำนวนป้าย<br><br> </th>
                                    <th class="tg-7btt" rowspan="2">5<br>ข้อความหรือภาพหรือเครื่องหมายที่ปรากฏ<br>ในป้ายโดยย่อ</th>
                                    <th class="tg-7btt" rowspan="2">6<br>สถานที่ติดตั้งป้ายและวันติดตั้ง (แสดงป้าย)<br>ถนน, ตรอก, ซอย, ตำบล, อำเภอ, สถานที่ใกล้เคียง<br>หรือระหว่าง ก.ม. ที่</th>
                                    <th class="tg-fymr" rowspan="2">หมายเหตุ</th>
                                </tr>
                                <tr>
                                    <td class="tg-7btt">กว้าง</td>
                                    <td class="tg-7btt">ยาว</td>
                                </tr>
                                @foreach($getData as $gtd)
                                    @if($gtd->sign_type_id == 1)
                                <tr>
                                    <td class="tg-uzvj">(1)มีอักษรไทยล้วน</td>
                                    <td class="tg-0pky">{{$gtd->sw}}</td>
                                    <td class="tg-0pky">{{$gtd->sl}}</td>
                                    <td class="tg-0pky">{{number_format($gtd->sa)}}</td>
                                    <td class="tg-0pky">{{$gtd->no_side}}</td>
                                    <td class="tg-0pky">{{$gtd->s_desc}}</td>
                                    <td class="tg-0pky">{{$gtd->road}} {{$gtd->soi}} {{$gtd->nearby}} {{$gtd->setup_date}}</td>
                                    <td class="tg-0pky">{{$gtd->note}}</td>
                                </tr>
                                    @endif
                                @endforeach
                                @foreach($getData as $gtd)
                                    @if($gtd->sign_type_id == 2)
                                <tr>
                                    <td class="tg-wa1i">(2)มีอักษรไทย<br>ปนอักษรต่างประเทศ<br>หรือเครื่องหมาย</td>
                                    <td class="tg-0lax">{{$gtd->sw}}</td>
                                    <td class="tg-0lax">{{$gtd->sl}}</td>
                                    <td class="tg-0lax">{{number_format($gtd->sa)}}</td>
                                    <td class="tg-0lax">{{$gtd->no_side}}</td>
                                    <td class="tg-0lax">{{$gtd->s_desc}}</td>
                                    <td class="tg-0lax">{{$gtd->road}} {{$gtd->soi}} {{$gtd->nearby}} {{$gtd->setup_date}}</td>
                                    <td class="tg-0lax">{{$gtd->note}}</td>
                                </tr>
                                    @endif
                                @endforeach
                                @foreach($getData as $gtd)
                                    @if($gtd->sign_type_id == 3)
                                <tr>
                                    <td class="tg-wa1i">(3)ป้ายที่ไม่มีอักษรไทย</td>
                                    <td class="tg-0lax">{{$gtd->sw}}</td>
                                    <td class="tg-0lax">{{$gtd->sl}}</td>
                                    <td class="tg-0lax">{{number_format($gtd->sa)}}</td>
                                    <td class="tg-0lax">{{$gtd->no_side}}</td>
                                    <td class="tg-0lax">{{$gtd->s_desc}}</td>
                                    <td class="tg-0lax">{{$gtd->road}} {{$gtd->soi}} {{$gtd->nearby}} {{$gtd->setup_date}}</td>
                                    <td class="tg-0lax">{{$gtd->note}}</td>
                                </tr>
                                    @endif
                                @endforeach
                            </table>
                            <br>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ข้าพเจ้าขอรับรองว่ารายการที่แจ้งไว้ในแบบนี้ถูกต้องและครบถ้วนตามความจริงทุกประการ</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; วันที่..................... เดือน................................ พ.ศ. ..................</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ลงชื่อ............................................................. เจ้าของป้าย</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                        </div>
                        <a style="margin: 0 auto;text-align: center" class="btn btn-info btn-lg col-3" onclick="printDiv()">
                            <span class="cil-print btn-icon mr-2"></span> พิมพ์แบบแสดงรายการภาษีป้าย (ภ.ป. 1)
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
            var divContents = document.getElementById("PP1").innerHTML;
            var a = window.open('', '', '');
            a.document.write('<style>@page{size:portrait;}</style><html><head><title>แบบแสดงรายการภาษีป้าย (ภ.ป. 1)</title>');
            a.document.write('<html>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>

@endsection
