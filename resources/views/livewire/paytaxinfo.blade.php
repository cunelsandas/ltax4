

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i>{{ __('ค้นหาข้อมูล ผู้ชำระภาษี') }}</div>
                    <div class="card-body">
        <div class="col-md-12">
            <input type="text"  class="form-control" placeholder="ค้นหาด้วย เลขบัตรประชา, ชื่อ, นามสกุล, เลข ผ.ท.4, ที่อยู่" wire:model="searchTerm" />
            <br>
            <table class="table table-responsive-sm table-striped">
                <thead>
                <tr>
                    <th width="10%">ผ.ท.4</th>
                    <th width="20%">บัตรประจำตัวประชาชน</th>
                    <th width="20%">ชื่อเจ้าของทรัพย์สิน	</th>
                    <th width="10%">สถานะการชำระภาษีที่ดิน</th>
                    <th width="10%">สถานะการชำระภาษีอาคาร</th>
                    <th width="10%">สถานะการชำระภาษีที่ป้าย</th>
                    <th width="5%">จดหมาย</th>
                    <th width="10%">ดูข้อมูล</th>
                    {{--                            <th width="10%"></th>--}}
                    {{--                            <th width="5%"></th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach($getData as $key=>$dt)
                    <tr>
                        <td><strong>{{ $dt->codept4 }}</strong></td>
                        <td><strong>{{ $dt->pop_id }}</strong></td>
                        <td>{{ $dt->fname }} {{ $dt->lname }}</td>
                        <td>
                            @foreach($getstatuspayland as $gspl)
                                @if($dt->owner_id == $gspl->owner_id)
                                    <span style="font-size: 14px" class="badge badge-pill badge-success">
                                      ชำระภาษีเรียบร้อยแล้ว
                                  </span>
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach($getstatuspaybuild as $gspb)
                                @if($dt->owner_id == $gspb->owner_id)
                                    <span style="font-size: 14px" class="badge badge-pill badge-success">
                                      ชำระภาษีเรียบร้อยแล้ว
                                  </span>
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach($getstatuspaysign as $gsps)
                                @if($dt->owner_id == $gsps->owner_id)
                                    <span style="font-size: 14px" class="badge badge-pill badge-success">
                                      ชำระภาษีเรียบร้อยแล้ว
                                  </span>
                                @endif
                            @endforeach
                        </td>
                        {{--                              <td>--}}
                        {{--                                <a href="{{ url('/paytaxs/' . $dt->owner_id) }}" class="btn btn-block btn-primary">ตรวจสอบ</a>--}}
                        {{--                              </td>--}}
                        <td>

                            <a target="_blank" href="{{ url('/reports/' . $dt->owner_id . '/letter') }}" class="btn btn-block btn-primary"> <i class="cil-print"></i></a>
                        </td>
                        <td>
                            <a href="{{ url('/paytaxs/' . $dt->owner_id . '/edit') }}" class="btn btn-block btn-primary">ตรวจสอบ</a>
                        </td>
                        {{--                              <td>--}}
                        {{--                                <form action="{{ route('paytaxs.destroy', $dt->owner_id ) }}" method="POST">--}}
                        {{--                                    @method('DELETE')--}}
                        {{--                                    @csrf--}}
                        {{--                                    <button class="btn btn-block btn-danger">ลบ</button>--}}
                        {{--                                </form>--}}
                        {{--                              </td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>
{{--            {{ $getData->links() }}--}}
            <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card" style="border: solid 2px black">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>{{ __('ข้อมูลผู้ชำระภาษี') }}</div>
                        <div class="card-body">
                            <div class="col-md-12">
                                <br>
                                <table class="table table-responsive-sm table-striped">
                                    <thead>
                                    <tr>
                                        <th width="10%">ผ.ท.4</th>
                                        <th width="20%">บัตรประจำตัวประชาชน</th>
                                        <th width="20%">ชื่อเจ้าของทรัพย์สิน	</th>
                                        <th width="10%">สถานะการชำระภาษีที่ดิน</th>
                                        <th width="10%">สถานะการชำระภาษีอาคาร</th>
                                        <th width="10%">สถานะการชำระภาษีที่ป้าย</th>
                                        <th width="5%">จดหมาย</th>
                                        <th width="10%">ดูข้อมูล</th>
                                        {{--                            <th width="10%"></th>--}}
                                        {{--                            <th width="5%"></th>--}}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($getData2 as $key=>$dt)
                                        <tr>
                                            <td><strong>{{ $dt->codept4 }}</strong></td>
                                            <td><strong>{{ $dt->pop_id }}</strong></td>
                                            <td>{{ $dt->fname }} {{ $dt->lname }}</td>
                                            <td>
                                                @foreach($getstatuspayland as $gspl)
                                                    @if($dt->owner_id == $gspl->owner_id)
                                                        <span style="font-size: 14px" class="badge badge-pill badge-success">
                                      ชำระภาษีเรียบร้อยแล้ว
                                  </span>
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($getstatuspaybuild as $gspb)
                                                    @if($dt->owner_id == $gspb->owner_id)
                                                        <span style="font-size: 14px" class="badge badge-pill badge-success">
                                      ชำระภาษีเรียบร้อยแล้ว
                                  </span>
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($getstatuspaysign as $gsps)
                                                    @if($dt->owner_id == $gsps->owner_id)
                                                        <span style="font-size: 14px" class="badge badge-pill badge-success">
                                      ชำระภาษีเรียบร้อยแล้ว
                                  </span>
                                                    @endif
                                                @endforeach
                                            </td>
                                            {{--                              <td>--}}
                                            {{--                                <a href="{{ url('/paytaxs/' . $dt->owner_id) }}" class="btn btn-block btn-primary">ตรวจสอบ</a>--}}
                                            {{--                              </td>--}}
                                            <td>
                                                <a target="_blank" href="{{ url('/reports/' . $dt->owner_id . '/letter') }}" class="btn btn-block btn-primary"> <i class="cil-print"></i></a>
                                            </td>
                                            <td>
                                                <a href="{{ url('/paytaxs/' . $dt->owner_id . '/edit') }}" class="btn btn-block btn-primary">ตรวจสอบ</a>
                                            </td>
                                            {{--                              <td>--}}
                                            {{--                                <form action="{{ route('paytaxs.destroy', $dt->owner_id ) }}" method="POST">--}}
                                            {{--                                    @method('DELETE')--}}
                                            {{--                                    @csrf--}}
                                            {{--                                    <button class="btn btn-block btn-danger">ลบ</button>--}}
                                            {{--                                </form>--}}
                                            {{--                              </td>--}}
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                            {{ $getData2->links() }}
                                <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@section('javascript')

@endsection


