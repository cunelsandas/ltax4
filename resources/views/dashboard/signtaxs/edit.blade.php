@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> {{ __('ID:') }} {{ $getData->owner_id }} {{ __('รหัส ผท.4:') }} {{ $getData->codept4 }}</div>
                    <div class="card-body">
                        <form method="POST" action="/paytaxs/{{ $getData->owner_id }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <div class="col-2">
                                    <label>คำนำหน้า</label>
                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="title_name" value="{{$titleData->title_name}}" required autofocus readonly>
                                </div>
                                <div class="col-5">
                                    <label>ชื่อ</label>
                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="first_name" value="{{ $getData->first_name }}" required autofocus readonly>
                                </div>
                                <div class="col-5">
                                    <label>นามสกุล</label>
                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="last_name" value="{{ $getData->last_name }}" required autofocus readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <label>เลขบัตรประจำตัวประชาชน</label>
                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="pop_id" value="{{$getData->pop_id}}" required autofocus readonly>                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-6">
                                    <label>บ้านเลขที่</label>
                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="address" value="{{$getData->address}}" required autofocus readonly>
                                </div>
                                <div class="col-6">
                                    <label>หมู่ที่</label>
                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="moo" value="{{ $getData->moo }}" required autofocus readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-6">
                                    <label>ซอย</label>
                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="soi" value="{{$getData->soi}}" required autofocus readonly>
                                </div>
                                <div class="col-6">
                                    <label>ถนน</label>
                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="road" value="{{ $getData->road }}" required autofocus readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-4">
                                    <label>จังหวัด</label>
                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="province" value="{{$provinceData->province_name}}" required autofocus readonly>
                                </div>
                                <div class="col-4">
                                    <label>อำเภอ</label>
                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="amphoe" value="{{ $amphoeData->amphoe_name }}" required autofocus readonly>
                                </div>
                                <div class="col-4">
                                    <label>ตำบล</label>
                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="tambon" value="{{ $tambonData->tambon_name }}" required autofocus readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-6">
                                    <label>หมู่บ้าน</label>
                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="community" value="{{$getData->community}}" required autofocus readonly>
                                </div>
                                <div class="col-6">
                                    <label>รหัสไปรษณีย์</label>
                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="zip_code" value="{{ $getData->zip_code }}" required autofocus readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-6">
                                    <label>โทรศัพท์</label>
                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="telephone" value="{{$getData->telephone}}" required autofocus readonly>
                                </div>
                                <div class="col-6">
                                    <label>โทรสาร</label>
                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="fax" value="{{ $getData->fax }}" required autofocus readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <label>อีเมล</label>
                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="email" value="{{$getData->email}}" required autofocus readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <label>วันที่ลงข้อมูล</label>
                                    <input class="form-control" type="text" placeholder="{{ __('-') }}" name="create_date" value="{{formatDateThai($getData->create_date)}}" required autofocus readonly>
                                </div>
                            </div>

{{--                            <div class="form-group row">--}}
{{--                                <div class="col">--}}
{{--                                    <label>Applies to date</label>--}}
{{--                                    <input type="date" class="form-control" name="applies_to_date" value="{{ $getData->owner_id }}" required/>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <div class="col">--}}
{{--                                    <label>Status</label>--}}
{{--                                    <select class="form-control" name="status_id">--}}
{{--                                        @foreach($statuses as $status)--}}
{{--                                            @if( $status->id == $note->status_id )--}}
{{--                                                <option value="{{ $status->id }}" selected="true">{{ $status->name }}</option>--}}
{{--                                            @else--}}
{{--                                                <option value="{{ $status->id }}">{{ $status->name }}</option>--}}
{{--                                            @endif--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <div class="col">--}}
{{--                                    <label>Note type</label>--}}
{{--                                    <input class="form-control" type="text" placeholder="{{ __('Note type') }}" name="note_type" value="{{ $getData->owner_id }}" required>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <button class="btn btn-block btn-success" type="submit">{{ __('Save') }}</button>--}}
                            <a href="{{ route('paytaxs.index') }}" class="btn btn-block btn-primary">{{ __('ย้อนกลับ') }}</a>
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection

@section('javascript')

@endsection
