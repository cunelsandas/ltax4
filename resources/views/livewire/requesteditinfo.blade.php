

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i>{{ __('ค้นหาข้อมูล ผู้ยื่นคำร้องขอแก้ไขข้อมูล') }}</div>
                    <div class="card-body">
        <div class="col-md-12">
            <input type="text"  class="form-control" placeholder="ค้นหาด้วย เลขบัตรประชาชน, ชื่อ, นามสกุล" wire:model="searchTerm" />
            <br>
            <table class="table table-responsive-sm table-striped">
                <thead>
                <tr>
                    <th width="5%">ลำดับ</th>
                    <th width="20%">บัตรประจำตัวประชาชน</th>
                    <th width="10%">เลขที่โฉนด</th>
                    <th width="20%">ชื่อเจ้าของทรัพย์สิน	</th>
                    <th width="15%">เวลายื่นคำร้อง</th>
                    <th width="10%">ดูข้อมูล</th>
                    {{--                            <th width="10%"></th>--}}
                    {{--                            <th width="5%"></th>--}}
                </tr>
                </thead>
                <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach($getData as $key=>$dt)
                    <tr>
                        <td>{{$i++}}</td>
                        <td><strong>{{ $dt->pop_id }}</strong></td>
                        <td>{{ $dt->dn }} </td>
                        <td>{{ $dt->first_name }} {{ $dt->last_name }}</td>
                        <td>
                            {{formatDateThai($dt->created_at)}} น.
                        </td>
                        {{--                              <td>--}}
                        {{--                                <a href="{{ url('/paytaxs/' . $dt->owner_id) }}" class="btn btn-block btn-primary">ตรวจสอบ</a>--}}
                        {{--                              </td>--}}
                        <td>
                            <a href="{{ url('/requesteditinfo/' . $dt->dn . '/edit') }}" class="btn btn-block btn-primary">ตรวจสอบ</a>
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
                            <i class="fa fa-align-justify"></i>{{ __('ข้อมูลผู้ยื่นคำร้องขอแก้ไขข้อมูล') }}</div>
                        <div class="card-body">
                            <div class="col-md-12">
                                <br>
                                <table class="table table-responsive-sm table-striped">
                                    <thead>
                                    <tr>
                                        <th width="5%">ลำดับ</th>
                                        <th width="20%">บัตรประจำตัวประชาชน</th>
                                        <th width="10%">เลขที่โฉนด</th>
                                        <th width="20%">ชื่อเจ้าของทรัพย์สิน	</th>
                                        <th width="15%">เวลายื่นคำร้อง</th>
                                        <th width="10%">ดูข้อมูล</th>
                                        {{--                            <th width="10%"></th>--}}
                                        {{--                            <th width="5%"></th>--}}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $l = 1;
                                    @endphp
                                    @foreach($getData2 as $key=>$dt)
                                        <tr>
                                            <td>{{$l++}}</td>
                                            <td><strong>{{ $dt->pop_id }}</strong></td>
                                            <td>{{ $dt->dn }}</td>
                                            <td>{{ $dt->first_name }} {{ $dt->last_name }}</td>
                                            <td>
                                                {{formatDateThai($dt->created_at)}} น.
                                            </td>
                                            {{--                              <td>--}}
                                            {{--                                <a href="{{ url('/paytaxs/' . $dt->owner_id) }}" class="btn btn-block btn-primary">ตรวจสอบ</a>--}}
                                            {{--                              </td>--}}
                                            <td>
                                                <a href="{{ url('/requesteditinfo/' . $dt->dn . '/edit') }}" class="btn btn-block btn-primary">ตรวจสอบ</a>
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


