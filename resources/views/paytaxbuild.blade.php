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
                            <h1>ยืนยันการชำระภาษีอาคารและสิ่งปลูกสร้าง</h1>
                            <h4 style="margin: 5% auto auto auto">  ยินดีต้อนรับคุณ<font color="#1e90ff">{{ $ownerData->first_name }} {{ $ownerData->last_name }} (พ.ศ.{{ $getData->annual }})</font></h4>
                            <div class="card-body">
                                <tr class="row-cols-6" style="float: left">
                                    <td>
                                        <strong>Building_ID: </strong> {{ $getData->bid }}<br>
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
                                <br>
                                <br>
                                <p style="font-weight: bold" hidden> ภาษีที่ดิน : {{number_format($getData->tax),2}} บาท </p>
                                <p style="font-weight: bold"> รวมภาษีอาคารและสิ่งปลูกสร้างที่ต้องชำระ : <font style="font-size: 2rem;color: red">{{number_format($getData->tax),2}}  บาท </font> </p>
                                <p style="font-weight: bold">(<?php echo baht_text(round($getData->tax))  ?>)</p>
                                <div class="row">
                                    @php $i = 1; @endphp
                                    @isset($getBankAcc)
                                        @foreach($getBankAcc as $gba)
                                            <div class="col-lg-3 col-sm-12 m-5">
                                                QR CODE ธนาคาร <b style="text-decoration: underline">{{$gba->bank_name}}</b>
                                                <img width="100%" height="auto" style="margin: 0 auto" src="../_bankaccount/images/{{$gba->bank_image}}?id={{time()}}">
                                            </div>
                                        @endforeach
                                    @endisset
                                </div>

                            <br>
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
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    <strong>{{$message}}</strong>
                                </div>

                                <img src="images/{{Session::get('path')}}" width="300"/>
                            @endif
                            <form method="post" action="{{url('/uploadfilebuild')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <table class="table">
                                        <tr>
                                            <td width="40%" align="right"><label>เลือกไฟล์</label></td>
                                            <td width="30%"><input type="file" name="select_file"></td>
                                            <td width="30%"><input type="submit" align="left" name="upload" class="btn-primary" value="อัพโหลด"></td>
                                        </tr>
                                    </table>
                                </div>

                            </form>
                                    @if(isset($getdate->upload_date))
                                    @if(file_exists( public_path().'/paytaxbuild/images/'. $ownerData->owner_id .'_paytaxbuild_'.$getdate->upload_date.'.png' ))
                                        <img width="50%" style="margin: 0 auto" src="../paytaxbuild/images/{{$ownerData->owner_id}}_paytaxbuild_{{$getdate->upload_date}}.png?id={{time()}}">
                                    @else

                                    @endif
                                    @endif

                                    <br>
                                    <br>
                                    <h3>ผ่อนชำระภาษี</h3>
                                    <a href="http://www.bangkok.go.th/upload/user/00000077/form/rd/04.pdf">หนังสือขอผ่อนชำระภาษี</a>
                    </div>
                                    <a href="{{ url()->previous() }}" class="btn btn-block btn-primary">ย้อนกลับ</a>

                </div>

            </div>
        </div>
    </div>

    </div>
@endsection

@section('javascript')

@endsection
