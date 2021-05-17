@extends('dashboard.authBase')

@section('content')
    <script type="text/javascript">
        document.title = 'ยื่นคัดค้านการชำระภาษี';
    </script>


    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card-group">
                    <div class="card p-4">
                        <div class="card-body">
                            <h1>หนังสือยื่นคัดค้าน</h1>
                            <br>
                            <a href="https://www.reic.or.th/Upload/20_20257_1570159477_77369.PDF#page=12" target="_blank" >คำร้องคัดค้านการประเมินภาษีหรือการเรียกเก็บภาษีที่ดินและสิ่งปลูกสร้าง (ภ.ด.ส. 10)</a> <br><br>
                            <a href="https://www.reic.or.th/Upload/20_20257_1570159477_77369.PDF#page=11" target="_blank">คำร้องขอรับเงินภาษีที่ดินและสิ่งปลูกสร้างคืน (ภ.ด.ส. 9)</a><br><br>
                            <a href="https://www.reic.or.th/Upload/20_20257_1570159477_77369.PDF#page=7" target="_blank">แบบแจ้งการเปลี่ยนแปลงการใช้ประโยชน์ในที่ดินหรือสิ่งปลูกสร้าง (ภ.ด.ส. 5)</a>
                    </div>

                </div>

            </div>
                <br>
                <div class="col-4" style="text-align: center; margin: 0 auto">
                    <td>
                        <a href="{{ url()->previous() }}" class="btn btn-block btn-primary">ย้อนกลับ</a>
                        {{--                                <a href="{{ url('/buildings/' . $input->owner_id . '/edit') }}" class="btn btn-block btn-success" >บันทึกข้อมูลโรงเรือน/สิ่งปลูกสร้าง</a>--}}
                    </td> <br>
                </div>
        </div>
    </div>


@endsection

@section('javascript')

@endsection
