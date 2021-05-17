<div id="content"
     style="background-image: url({{url('img/header.jpg')}}); background-repeat: no-repeat; background-size: 100% 100%">
    <div class="row">
        <div class="col-lg-12">
            <div>
                <form method="POST" action="{{url('signcheck')}}">
                        <span>
                        <i class="fa fa-user-alt">@csrf</i>
                    </span>
                    <span>
                        </span>
                    <h6 class="text-danger text-center">
                        {{--                        {{Session::get('error_login')}}--}}
                    </h6>
                    <div class="input-group mb-3" style="justify-content: center;">
                        <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-user"></use>
                        </svg>
                      </span>
                        </div>

                        <input class="form-control col-lg-8 col-md-8 col-sm-12" type="text"  name="username"  onkeypress="return (event.charCode !==8 && event.charCode ===0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="{{ __('ใส่เลขบัตรประจำตัวประชาชน 13 หลัก') }}" required autofocus minlength="13" maxlength="13" oninvalid="this.setCustomValidity('กรุณากรอกเลขบัตรประชาขน13หลัก')"
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
                        <input class="form-control col-lg-8 col-md-8 col-sm-12" type="text" name="password" wire:model="searchTerm"
                               placeholder="เลขที่บ้าน" required oninvalid="this.setCustomValidity('กรุณากรอกเลขที่โฉนดที่ดิน')"
                               oninput="this.setCustomValidity('')"/>
                        <span class="focus-input100"></span>
                    </div>
                    <p style="text-align: center;font-size: 18px;font-weight: bolder;">
                        {{ $address }}
                    </p>
                    <div class="row">
                        <div class="col-12" style="display: flex;justify-content: center;">
                            <button style="width: 40%" type="submit" id="submitButton" class="btn btn-primary" value="card_id"><span class="cil-search btn-icon mr-2"></span>ตรวจสอบภาษี</button>
                        </div>
                    </div>
                    <br>
                    {{-- <div class="text-center mt-2">
                         <a class="text-light" href="#">
                             Forgot Password?
                         </a>
                     </div>--}}
                </form>
            </div>
        </div>
    </div>
</div>


