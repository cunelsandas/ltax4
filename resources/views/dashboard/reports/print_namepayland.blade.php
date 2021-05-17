@extends('dashboard.base')

@section('content')

    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>รายชื่อผู้ชำระภาษีทีดิน</div>
                        <div class="card-body" id="namepayland">
                            <link href="{{ asset('css/styles2.css') }}" rel="stylesheet" media="print">
                            <style type="text/css">
                                .tg  {border-collapse:collapse;border-spacing:0;}
                                .tg td{font-size:12px;padding:10px 5px;border-style:solid;border-width:2px;overflow:hidden;word-break:normal;border-color:black;}
                                .tg th{font-size:12px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:2px;overflow:hidden;word-break:normal;border-color:black;}
                                .tg .tg-lboi{border-color:inherit;text-align:left;vertical-align:middle}
                                .tg .tg-9wq8{border-color:inherit;text-align:center;vertical-align:middle}
                                .tg .tg-baqh{text-align:center;vertical-align:top}
                                .tg .tg-0lax{text-align:left;vertical-align:top}
                            </style>
                            <h2 align="center">รายชื่อผู้ชำระภาษีทีดิน</h2>
                            <br>
                            <table class="tg">
                                <tr>
                                    <th class="tg-9wq8">ที่</th>
                                    <th class="tg-9wq8">เลขบัตรประชาชน</th>
                                    <th class="tg-9wq8">ชื่อ - นามสกุล</th>
                                    <th class="tg-9wq8">เลขที่โฉนด</th>
                                    <th class="tg-9wq8">ที่อยู่</th>
                                    <th class="tg-9wq8">ภาษีที่ต้องชำระ</th>
                                </tr>
                                @foreach($getDataNamepayland as $key => $gdtnpl)
                                <tr>
                                    <td class="tg-lboi">{{$getDataNamepayland->firstItem()+$key}}</td>
                                    <td class="tg-lboi">{{$gdtnpl->pop_id}}</td>
                                    <td class="tg-lboi">{{$gdtnpl->first_name}} {{$gdtnpl->last_name}}</td>
                                    <td class="tg-lboi">{{$gdtnpl->dn}}</td>
                                    <td class="tg-lboi">{{$gdtnpl->address}} ม.{{$gdtnpl->moo}} ซ.{{$gdtnpl->soi}} ถ.{{$gdtnpl->road}} ต.{{$gdtnpl->tambon_name}}</td>
                                    <td class="tg-lboi">{{$gdtnpl->tax}} บาท</td>

                                </tr>
                                    @endforeach
                            </table>
                        </div>
                        <a style="margin: 0 auto;text-align: center" class="btn btn-info btn-lg col-3" onclick="printDiv()" target="_blank">
                            <span class="cil-print btn-icon mr-2"></span> พิมพ์รายชื่อผู้ชำระภาษีที่ดิน
                        </a>
                    </div>
                    {{ $getDataNamepayland->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection


@section('javascript')
                                <script>
                                    function printDiv() {
                                        var divContents = document.getElementById("namepayland").innerHTML;
                                        var a = window.open('', '', '');
                                        a.document.write('<style>@page{size:portrait;}</style><html><head><title>แบบบัญชีรายการที่ดินและสิ่งปลูกสร้าง (ภ.ด.ส. 3)</title>');
                                        a.document.write('<html>');
                                        a.document.write(divContents);
                                        a.document.write('</body></html>');
                                        a.document.close();
                                        a.print();
                                    }
                                </script>
@endsection
