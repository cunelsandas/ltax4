@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i>{{ __('ข้อมูลผู้ชำระภาษี') }}</div>
                    <div class="card-body">
                        <div class="row">
{{--                          <a href="{{ route('notes.create') }}" class="btn btn-primary m-2">{{ __('Add Note') }}</a>--}}
                        </div>
                        <br>
                        <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                              <th width="20%">ผ.ท.4</th>
                            <th width="20%">บัตรประจำตัวประชาชน</th>
                            <th width="20%">ชื่อเจ้าของทรัพย์สิน	</th>
                            <th width="30%">ที่อยู่</th>
                            <th width="10%"></th>
{{--                            <th width="10%"></th>--}}
{{--                            <th width="5%"></th>--}}
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($getData as $key=>$dt)
                            <tr>
                                <td><strong>{{ $dt->codept4 }}</strong></td>
                              <td><strong>{{ $dt->pop_id }}</strong></td>
                              <td>{{ $dt->first_name }} {{ $dt->last_name }}</td>
                              <td>{{ $dt->address }}</td>
{{--                              <td>--}}
{{--                                <a href="{{ url('/paytaxs/' . $dt->owner_id) }}" class="btn btn-block btn-primary">ตรวจสอบ</a>--}}
{{--                              </td>--}}
                              <td>
                                <a href="{{ url('/paytaxs/' . $dt->owner_id . '/edit') }}" class="btn btn-block btn-warning">แก้ไข</a>
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
                        {{ $getData->links() }}
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection

