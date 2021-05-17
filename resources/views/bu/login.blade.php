@extends('dashboard.authBase')

@section('content')

    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="card-group">
                    <div class="card p-4">
                        <h1 style="text-align: center">ระบบตรวจสอบภาษีอาคาร/สิ่งปลูกสร้าง</h1>
                        <div class="card-body">
                            <h6 class="text-danger text-center">
                                {{Session::get('error_login')}}
                            </h6>
                            <form method="POST" action="{{url('bucheck')}}">
                                @csrf
                                <div class="input-group mb-3" style="justify-content: center;">
                                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-user"></use>
                        </svg>
                      </span>
                                    </div>

                                    <input class="form-control col-lg-8 col-md-8 col-sm-12" type="text"  name="username" onkeypress="return (event.charCode !==8 && event.charCode ===0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="{{ __('ใส่เลขบัตรประจำตัวประชาชน 13 หลัก') }}" required autofocus minlength="13" maxlength="13" oninvalid="this.setCustomValidity('กรุณากรอกเลขบัตรประชาขน13หลัก')"
                                           oninput="this.setCustomValidity('')"/>
                                </div>
                                <div class="input-group mb-3" style="justify-content: center;">
                                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-lock-locked"></use>
                        </svg>
                      </span>
                                    </div>

                                    <input class="form-control col-lg-8 col-md-8 col-sm-12" type="text" name="password" placeholder="เลขที่บ้าน" required oninvalid="this.setCustomValidity('กรุณากรอกเลขที่บ้าน')"
                                           oninput="this.setCustomValidity('')"/>
                                </div>
                                <div class="row">
                                    <div class="col-12" style="display: flex;justify-content: center;">
                                        <button style="width: 40%" type="submit" id="submitButton" class="btn btn-primary" value="card_id"><span class="cil-search btn-icon mr-2"></span>ตรวจสอบภาษี</button>
                                    </div>
                                </div>
                                {{-- <div class="text-center mt-2">
                                     <a class="text-light" href="#">
                                         Forgot Password?
                                     </a>
                                 </div>--}}
                            </form>
                            <div class="row" style="margin-top: 2%">
                                <div class="col-12" style="display: flex;justify-content: center;">
                                    <a href="login"><button type="submit" class="btn btn-warning" ><span class="cil-settings btn-icon mr-2"></span>ผู้ดูแลระบบ</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        (function ($) {
            "use strict";
            $('.input100').each(function () {
                $(this).on('blur', function () {
                    if ($(this).val().trim() != "") {
                        $(this).addClass('has-val');
                    } else {
                        $(this).removeClass('has-val');
                    }
                })
            });
        })(jQuery);
    </script>
    </body>
    </html>
@endsection

@section('javascript')

@endsection
