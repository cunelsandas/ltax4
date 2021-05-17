@extends('dashboard.base')

@section('content')

    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>รายชื่อผู้ชำระภาษีป้าย</div>
                        <div class="card-body" id="namepaysign">
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
                            <h2 align="center">รายชื่อผู้ชำระภาษีป้าย</h2>
                            <br>
                            <table class="tg">
                                <tr>
                                    <th class="tg-9wq8">ที่</th>
                                    <th class="tg-9wq8">เลขบัตรประชาชน</th>
                                    <th class="tg-9wq8">ชื่อ - นามสกุล</th>
                                    <th class="tg-9wq8">ชื่อป้าย</th>
                                    <th class="tg-9wq8">ที่อยู่</th>
                                    <th class="tg-9wq8">ภาษีที่ต้องชำระ</th>
                                </tr>
                                @foreach($getDataNamepaysign as $key => $gdtnps)
                                <tr>
                                    <td class="tg-lboi">{{$getDataNamepaysign->firstItem()+$key}}</td>
                                    <td class="tg-lboi">{{$gdtnps->pop_id}}</td>
                                    <td class="tg-lboi">{{$gdtnps->first_name}} {{$gdtnps->last_name}}</td>
                                    <td class="tg-lboi">{{$gdtnps->s_name}}</td>
                                    <td class="tg-lboi">{{$gdtnps->address}} ม.{{$gdtnps->moo}} ซ.{{$gdtnps->soi}} ถ.{{$gdtnps->road}} ต.{{$gdtnps->tambon_name}}</td>
                                    <td class="tg-lboi">{{number_format($gdtnps->tax)}} บาท</td>

                                </tr>
                                    @endforeach
                            </table>
                        </div>
                        <a style="margin: 0 auto;text-align: center" class="btn btn-info btn-lg col-3" onclick="printDiv()" target="_blank">
                            <span class="cil-print btn-icon mr-2"></span> พิมพ์รายชื่อผู้ชำระภาษีป้าย
                        </a>
                    </div>
                    {{ $getDataNamepaysign->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection


@section('javascript')
                                <script>
                                    function printDiv() {
                                        var divContents = document.getElementById("namepaysign").innerHTML;
                                        var a = window.open('', '', '');
                                        a.document.write('<style>@page{size:portrait;}</style><html><head><title>รายชื่อผู้ชำระภาษีป้าย</title>');
                                        a.document.write('<html>');
                                        a.document.write(divContents);
                                        a.document.write('</body></html>');
                                        a.document.close();
                                        a.print();
                                    }
                                </script>
@endsection
