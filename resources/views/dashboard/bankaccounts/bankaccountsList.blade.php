@extends('dashboard.base')

@section('content')

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
    <style>
        .wrimagecard{
            margin-top: 0;
            margin-bottom: 1.5rem;
            text-align: left;
            position: relative;
            background: #fff;
            box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        .wrimagecard .fa{
            position: relative;
            font-size: 70px;
        }
        .wrimagecard-topimage_header{
            padding: 20px;
        }
        a.wrimagecard:hover, .wrimagecard-topimage:hover {
            box-shadow: 2px 4px 8px 0px rgba(46,61,73,0.2);
        }
        .wrimagecard-topimage a {
            width: 100%;
            height: 100%;
            display: block;
        }
        .wrimagecard-topimage_title {
            padding: 20px 24px;
            height: 120px;
            padding-bottom: 0.75rem;
            position: relative;
        }
        .wrimagecard-topimage a {
            border-bottom: none;
            text-decoration: none;
            color: #525c65;
            transition: color 0.3s ease;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12" style="margin: 0 auto">
                                    <div class="wrimagecard wrimagecard-topimage">
                                        <a>
                                            <div class="wrimagecard-topimage_header" style="background-color:  rgba(250, 188, 9, 0.1)">
                                                <center><i class="fa fa-tasks" style="color:royalblue"> </i></center>
                                            </div>
                                        </a>
                                            <h3>อัพโหลด QR ธนาคาร</h3>
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


                                                    @endif
                                                    <form method="post" action="{{url('/uploadbankaccount')}}" enctype="multipart/form-data">
                                                        {{csrf_field()}}
                                                        <div class="form-group">
                                                            <table class="table">
                                                                <tr>
                                                                    <td width="30%"><input type="text" class="form-control" name="bank_name" placeholder="ชื่อธนาคาร"></td>
                                                                    <td width="20%" align="right"><label>เลือกไฟล์</label></td>
                                                                    <td width="30%"><input type="file" name="select_file"></td>
                                                                    <td width="20%"><input type="submit" align="left" name="upload" class="btn-primary" value="อัพโหลด"></td>
                                                                </tr>
                                                            </table>
                                                        </div>

                                                    </form>



                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="row">
                                @foreach ($bankac as $bac)
                                    @if(isset($bankac))
                                        <div class="col-lg-3 col-sm-12 m-5">
                                            <p>QR CODE ธนาคาร {{$bac->bank_name}}
                                            <img width="100%" style="margin: 0 auto" src="_bankaccount/images/{{$bac->bank_image}}?id={{time()}}">
                                            <td>
                                                <form action="{{ route('bankaccount.destroy', $bac->id ) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button onclick="return confirm('ยืนยันการลบ QR?');" class="btn btn-block btn-danger">ลบ</button>
                                                </form>
                                            </td>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>

@endsection


@section('javascript')

@endsection

