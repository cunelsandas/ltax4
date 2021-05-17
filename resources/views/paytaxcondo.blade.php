@extends('dashboard.authBase')

@section('content')

    <script type="text/javascript">
        document.title = 'ยืนยันการชำระภาษี';
    </script>

    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card-group">
                    <div class="card p-4">
                        <div class="card-body">
                            <h1>ยืนยันการชำระภาษีคอนโดมิเนียม</h1>
                            <h4 style="margin: 5% auto auto auto"> ยินดีต้อนรับคุณ<font
                                        color="#1e90ff">{{ $ownerData->fname }} {{ $ownerData->lname }}
                                    (พ.ศ.2564)</font></h4>
                            <div class="card-body">
                                <tr class="row-cols-6" style="float: left">
                                    <td>
                                        <strong>Condo_ID: </strong> {{ $getCondoFromPDS4->id }}<br>
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
                                        <strong>รหัสไปรษณีย์: </strong> {{ $ownerData->zip_code }}
                                        <strong>โทร: </strong> {{ $ownerData->telephone }}
                                        {{--                                    <a href="{{ url('/inputs/' . $input->id . '/edit') }}" class="btn btn-block btn-primary" style="width: 10%">แก้ไข</a>--}}
                                    </td>
                                </tr>
                                <br>
                                <br>
{{--                                @php--}}
{{--                                    $sumtaxlandbuild = 0;--}}
{{--                                @endphp--}}

                                    <p style="display: none">{{$getCondoFromPDS4->total_tax}}</p>

{{--                                <p style="font-weight: bold" hidden> ภาษีที่ดิน : {{number_format($sumtaxlandbuild,2)}}--}}
{{--                                    บาท </p>--}}
                                <p style="font-weight: bold"> รวมภาษีที่ดินที่ต้องชำระ : <font
                                            style="font-size: 2rem;color: red">{{number_format($getCondoFromPDS4->total_tax,2)}}
                                        บาท </font></p>
                                <p style="font-weight: bold">(<?php echo baht_text($getCondoFromPDS4->total_tax)  ?>)</p>


                                @if(empty($getdate))

                                    <form method="post" action="{{url('/confirmcondo')}}" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <table class="table">
                                                <tr>
                                                    <td width="100%">
                                                        <a onclick="return confirm('กรุณาตรวจสอบข้อมูลให้ถูกต้องอีกครั้ง ก่อนกดปุ่มยืนยัน')">
                                                            <input type="submit" align="left" name="confirm"
                                                                   class="btn btn-block btn-success"
                                                                   value="ยืนยันข้อมูลถูกต้อง">
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>

                                    </form>
                                @endif

                                @isset($getdate)
                                    @php
                                        $getdate = DB::table('img_paytax_condo')->where('owner_id','=', $getData->owner_id)->where('cdrid','=',$getData->cdr_id)->first();
                                        $getcon = $getdate->status;
                                        $getbackcon = $getdate->status_backend;
                                    @endphp
                                    {{--    check confirm--}}
                                    @if($getcon==1 && $getbackcon==0)

                                        <h1 style="text-align: center;color: green;text-decoration: underline">
                                            มีการยืนยันข้อมูล</h1>
                                        <p style="text-align: center;color: red;font-size: 22px;">
                                            "รอการยืนยันจากฝั่งเจ้าหน้าที่
                                            ระบบจะเปิดให้ชำระภาษีเมื่อมีการยืนยันความถูกต้องเรียบร้อยแล้วภายใน 2-3
                                            วัน"</p>

                                    @elseif($getcon==1 && $getbackcon==1)

                                        <div class="row">
                                            @php $i = 1; @endphp
                                            @isset($getBankAcc)
                                                @foreach($getBankAcc as $gba)
                                                    <div class="col-lg-3 col-sm-12 m-5">
                                                        QR CODE ธนาคาร <b
                                                                style="text-decoration: underline">{{$gba->bank_name}}</b>
                                                        <img width="100%" height="auto" style="margin: 0 auto"
                                                             src="../_bankaccount/images/{{$gba->bank_image}}?id={{time()}}">
                                                    </div>
                                                @endforeach
                                            @endisset
                                        </div>
                                    @endisset
                                    <br>
                                    @if($getcon==1 && $getbackcon==1)
                                        <h3>อัพโหลดสลิปโอนเงิน</h3>
                                        @if(count($errors) > 0)
                                            <div class="alert alert-danger">
                                                อัพโหลดผิดพลาด<br><br>
                                                <ul>
                                                    @foreach($errors->all() as $error)
                                                        <li>{{$error}}</li>
                                                    @endforeach
                                                </ul>
                                                @endif
                                                @if($message = Session::get('success'))
                                                    <div class="alert alert-success alert-block">
                                                        <button type="button" class="close" data-dismiss="alert">x
                                                        </button>
                                                        <strong>{{$message}}</strong>
                                                    </div>

                                                    <img src="images/{{Session::get('path')}}" width="300"/>
                                                    @php
                                                        $namepay = $ownerData->fname;
                                                        $lastnamepay = $ownerData->lname;
                                                        $popidpay = $ownerData->pop_id;
                                                        $url        = 'https://notify-api.line.me/api/notify';
                                                        $token      = 'vUZalG4ZPhv0IswNZ3N9ZWJdtsuPqNnK3de7vdkb6TQ';
                                                        $headers    = [
                                                             'Content-Type: application/x-www-form-urlencoded',
                                                            'Authorization: Bearer ' . $token
                                        ];
                                                        $fields     = "message=มีผู้ชำระภาษีที่ดินและสิ่งปลูกสร้าง ชื่อ: $namepay $lastnamepay \n รหัสบัตรประชาชน: $popidpay \n
                                                         URL:";

                                        $ch = curl_init();
                                        curl_setopt($ch, CURLOPT_URL, $url);
                                        curl_setopt($ch, CURLOPT_POST, 1);
                                        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                                        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                        $result = curl_exec($ch);
                                        curl_close($ch);
                                                    @endphp
                                                @endif
                                                <form method="post" action="{{url('/uploadfilecondo')}}"
                                                      enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                    <div class="form-group">
                                                        <table class="table">
                                                            <tr>
                                                                <td width="40%" align="right"><label>เลือกไฟล์</label>
                                                                </td>
                                                                <td width="30%"><input type="file" name="select_file">
                                                                </td>
                                                                <td width="30%"><input type="submit" align="left"
                                                                                       name="upload"
                                                                                       class="btn-primary"
                                                                                       value="อัพโหลด">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>

                                                </form>
                                                @if(isset($getdate->upload_date))
                                                    @if(file_exists( public_path().'/paytaxcondo/images/'. $ownerData->owner_id .'_'.$getCondoData->cdrid.'_'.$getCondoFromPDS4->id.'_paytaxcondo_'.$getdate->upload_date.'.png' ))
                                                        <img width="50%" style="margin: 0 auto"
                                                             src="../paytaxcondo/images/{{$ownerData->owner_id}}_{{$getCondoData->cdrid}}_{{$getCondoFromPDS4->id}}_paytaxcondo_{{$getdate->upload_date}}.png?id={{time()}}">
                                                    @else

                                                    @endif

                                                @endif
                                                <br>
                                                <br>
                                                <h3>ผ่อนชำระภาษี</h3>
                                                <a href="http://www.bangkok.go.th/upload/user/00000077/form/rd/04.pdf">หนังสือขอผ่อนชำระภาษี</a>
                                            </div>
                                            <a href="{{ url()->previous() }}"
                                               class="btn btn-block btn-primary">ย้อนกลับ</a>
                                        @endif
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
@endsection

@section('javascript')

@endsection
