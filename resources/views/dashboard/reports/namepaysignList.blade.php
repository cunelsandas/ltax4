@extends('dashboard.base')

@section('content')

{{--    <style>--}}
{{--        body{--}}
{{--            font-family: "TH SarabunPSK";--}}
{{--            font-size: 16px;--}}
{{--        }--}}
{{--    </style>--}}
<link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header" style="text-decoration: underline"><h4>รายชื่อผู้ชำระภาษีป้าย ประจำปี พ.ศ. {{\Illuminate\Support\Carbon::now()->year+543}}</h4></div>
                    <div class="card-body">
{{--                        <div class="row">--}}
{{--                          <a href="{{ route('inputs.create') }}" class="btn btn-dark m-2"><span class="cil-people btn-icon mr-2"></span>{{ __('เพิ่มข้อมูลผู้ชำระภาษี') }}</a>--}}
{{--                        </div>--}}

                        <form action="/search" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form-control" name="q"
                                       placeholder="Search"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
                            </div>
{{--                            <iframe frameborder="0" width="500px" height="400px" src="https://covid19.th-stat.com/th/share/dashboard"></iframe>--}}
{{--                            <iframe frameborder="0" width="500px" height="400px" src="https://covid19.th-stat.com/th/share/map"></iframe>--}}
{{--                            <iframe frameborder="0" scrolling="auto" width="500px" height="400px" src="https://covid19.th-stat.com/th/share/network"></iframe>--}}
                        </form>
                        <br>
                        <table class="table table-responsive-sm table-striped">
                        <thead>
                        <tr>
                            {{--                            <th>Author</th>--}}
                            <th width="5%">ที่</th>
                            <th width="10%">บัตรประจำตัวประชาชน</th>
                            <th width="20%">ชื่อเจ้าของทรัพย์สิน</th>
                            <th width="20%">ชื่อป้าย</th>
                            <th width="30%">ที่อยู่อาคาร</th>
                            {{--                            <th>สถานะข้อมูล</th>--}}
                            <th width="15%">ภาษี</th>
{{--                            <th></th>--}}
{{--                            <th></th>--}}
{{--                            <th></th>--}}
{{--                            <th></th>--}}
                        </tr>
                        </thead>
                            <tbody>
                            <a href="{{ url('/reports/1/namepaysign') }}" class="btn btn-block btn-primary"><span class="cil-library-building btn-icon mr-2"></span>พิมพ์รายงานรายชื่อผู้ชำระภาษีป้าย</a>
                            @foreach($namepaysign as $key => $gdt)
                                <tr>
                                    <td>
                                        {{$namepaysign->firstItem()+$key}}
                                    </td>
                                    {{--                              <td><strong>{{ $input->user->name }}</strong></td>--}}
                                    <td><strong>{{ $gdt->pop_id }}</strong></td>
                                    <td>
                                        {{ $gdt->first_name }} {{ $gdt->last_name }}
                                    </td>
                                    <td>
                                        {{ $gdt->s_name }}
                                    </td>
                                    <td>
                                        {{ $gdt->address }} ม.{{ $gdt->moo }} ซ.{{ $gdt->soi }} ถ.{{ $gdt->road }} ต.{{ $gdt->tambon_name }}
                                    </td>
                                    <td>
                                        {{ number_format($gdt->tax) }} บาท
                                    </td>

                                    {{--                              <td>--}}
                                    {{--                                  <span class="{{ $input->status->class }}">--}}
                                    {{--                                      {{ $input->status->name }}--}}

                                    {{--                                  </span>--}}
                                    {{--                              </td>--}}
{{--                                    <td>--}}
{{--                                        <a href="{{ url('/reports/' . $gdt->owner_id.'/pds3') }}" class="btn btn-block btn-primary"><span class="cil-library-building btn-icon mr-2"></span>ดูรายงาน ภ.ด.ส. 3</a>--}}
{{--                                    </td>--}}
                                    {{--                              <td>--}}
                                    {{--                                <a href="{{ url('/inputs/' . $input->id . '/edit') }}" class="btn btn-block btn-warning"><span class="cil-pencil btn-icon mr-2"></span>แก้ไข</a>--}}
                                    {{--                              </td>--}}
                                    {{--                              <td>--}}
                                    {{--                                <form action="{{ route('inputs.destroy', $input->id ) }}" method="POST">--}}
                                    {{--                                    @method('DELETE')--}}
                                    {{--                                    @csrf--}}
                                    {{--                                    <button class="btn btn-block btn-danger">ลบ</button>--}}
                                    {{--                                </form>--}}
                                    {{--                              </td>--}}
                                </tr>
                          @endforeach
                        </tbody>
                      </table>
                        {{ $namepaysign->links() }}
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection

