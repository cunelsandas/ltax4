@extends('dashboard.authBase')

@section('content')

    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="card-group">
                    <div class="card p-4">
                        <h1 style="text-align: center">ระบบตรวจสอบภาษีป้าย</h1>
                        <div class="card-body">
                            <h6 class="text-danger text-center">
                                {{Session::get('error_login')}}
                            </h6>
                            <form method="POST" action="{{url('signcheck')}}">
                                @csrf
                                @livewireStyles


{{--                                <div class="row">--}}
{{--                                    <div class="col-12" style="display: flex;justify-content: center;">--}}
{{--                                        <button style="width: 40%" type="submit" id="submitButton" class="btn btn-primary" value="card_id"><span class="cil-search btn-icon mr-2"></span>ตรวจสอบภาษี</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                {{-- <div class="text-center mt-2">
                                     <a class="text-light" href="#">
                                         Forgot Password?
                                     </a>
                                 </div>--}}
                            </form>
                            @livewire('signcheck')
                            <br>
                            <div class="row" style="margin-top: 2%">
                                <div class="col-12" style="display: flex;justify-content: center;">
                                    <a href="dashboards"><button type="submit" class="btn btn-warning" ><span class="cil-settings btn-icon mr-2"></span>ผู้ดูแลระบบ</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @livewireScripts
<script>

</script>

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
@endsection

@section('javascript')

@endsection
