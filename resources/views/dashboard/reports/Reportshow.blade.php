@extends('dashboard.base')

@section('content')
    <style>
        body {font-family: Arial;}

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
            font-family: arial, sans-serif;
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
            <div class="row-cols-6">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header" style="text-decoration: underline"><h4>รายงาน</h4></div>
                        <div class="card-body">
                            <tr class="row-cols-6" style="float: left">
                                <td>
                                    <strong>ID: </strong> {{ $input->id }}<br>
                                    <strong>เจ้าของทรัพย์สิน: </strong> {{ $input->name_titles }}
                                    {{ $input->first_name }}
                                    {{ $input->last_name }}

                                    <strong>รหัสบัตรประชาชน: </strong>{{ $input->card_id }}

                                </td> <br>
                                <td>
                                    <strong>ที่อยู่: </strong> {{ $input->address_number }}
                                    <strong>หมู่: </strong> {{ $input->moo }}
                                    <strong>ซอย: </strong> {{ $input->soi }}
                                    <strong>ถนน: </strong> {{ $input->road }}
                                </td><br>
                                <td>
                                    <strong>ตำบล: </strong> {{ $input->tambon }}
                                    <strong>อำเภอ: </strong> {{ $input->amphoe }}
                                    <strong>จังหวัด: </strong> {{ $input->province }}
                                </td><br>
                                <td>
                                    <strong>รหัสไปรษณีย์: </strong> {{ $input->zip_code }}
                                    <strong>โทร: </strong> {{ $input->telephone }}
                                    <a href="{{ url('/inputs/' . $input->id . '/edit') }}" class="btn btn-block btn-primary" style="width: 10%">แก้ไข</a>
                                </td>
                            </tr>
                            <div style="margin-left: 80%;margin-top: -10%;">
                                <td>
                                    <a href="{{ url('/lands/' . $input->id.'/edit') }}" class="btn btn-block btn-success">บันทึกข้อมูลแปลงที่ดิน/สิ่งปลูกสร้าง</a>
                                    {{--                                <a href="{{ url('/buildings/' . $input->owner_id . '/edit') }}" class="btn btn-block btn-success" >บันทึกข้อมูลโรงเรือน/สิ่งปลูกสร้าง</a>--}}
                                    <a href="{{ url('/signs/' . $input->id . '/edit') }}" class="btn btn-block btn-success" >บันทึกข้อมูลป้าย</a>
                                    <a href="{{ url('/reports/' . $input->id) }}" class="btn btn-block btn-warning" >รายงาน</a>
                                </td> <br>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" style="text-decoration: underline"><h4>แบบรายงาน ภ.ด.ส. (ภาษีที่ดินและสิ่งปลูกสร้าง)</h4></div>
                        <div class="card-body">
                        <td>
                            <a href="{{ url('/reports/' . $input->id) .'/pds1' }}" class="btn btn-block btn-primary" >ภ.ด.ส. 1</a>
                            <a href="{{ url('/reports/' . $input->id) .'/pds2' }}" class="btn btn-block btn-primary" >ภ.ด.ส. 2</a>
                            <a href="{{ url('/reports/' . $input->id) .'/pds3' }}" class="btn btn-block btn-primary" >ภ.ด.ส. 3</a>
                            <a href="{{ url('/reports/' . $input->id) .'/pds4' }}" class="btn btn-block btn-primary" >ภ.ด.ส. 4</a>
                            <a href="{{ url('/reports/' . $input->id) .'/pds6' }}" class="btn btn-block btn-primary" >ภ.ด.ส. 6</a>
                            <a href="{{ url('/reports/' . $input->id) .'/pds7' }}" class="btn btn-block btn-primary" >ภ.ด.ส. 7</a>
                            <a href="{{ url('/reports/' . $input->id) .'/pds8' }}" class="btn btn-block btn-primary" >ภ.ด.ส. 8</a>
                        </td> <br>
                    </div>

                        <div class="card">
                            <div class="card-header" style="text-decoration: underline"><h4>แบบรายงาน ภ.ป. (ภาษีป้าย)</h4></div>
                            <div class="card-body">
                                <td>
                                    <a href="{{ url('/reports/' . $input->id) .'/pp1' }}" class="btn btn-block btn-success" >ภ.ป. 1</a>
                                    <a href="{{ url('/reports/' . $input->id) .'/pp3' }}" class="btn btn-block btn-success" >ภ.ป. 3</a>
                                </td> <br>
                            </div>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('javascript')

@endsection
