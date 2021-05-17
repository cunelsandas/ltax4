

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i>{{ __('ค้นหาข้อมูล') }}</div>
                    <div class="card-body">
        <div class="col-md-12">
            <input type="text"  class="form-control" placeholder="ค้นหาด้วย เลขบัตรประชา, ชื่อ, นามสกุล, เลข ผ.ท.4, ที่อยู่" wire:model="searchTerm" />
            <br>
            <table class="table table-responsive-sm table-striped">
                <tr>
                    <thead>
                    <tr>
                        <th width="20%">ผ.ท.4</th>
                        <th width="20%">บัตรประจำตัวประชาชน</th>
                        <th width="20%">ชื่อเจ้าของทรัพย์สิน	</th>
                        <th width="30%">ที่อยู่</th>
                        <th width="10%"></th>
{{--                        <th width="10%"></th>--}}
{{--                        <th width="5%"></th>--}}
                    </tr>
                    </thead>
                </tr>
                <tbody>
                @foreach($getData2 as $key=>$dt)
                    <tr>
                        <td><strong>{{ $dt->codept4 }}</strong></td>
                        <td><strong>{{ $dt->pop_id }}</strong></td>
                        <td>{{ $dt->prefix }}{{ $dt->fname }} {{ $dt->lname }}</td>
                        <td>{{ $dt->address }}</td>
                        {{--                              <td>--}}
                        {{--                                <a href="{{ url('/paytaxs/' . $dt->owner_id) }}" class="btn btn-block btn-primary">ตรวจสอบ</a>--}}
                        {{--                              </td>--}}
                        <td>
                            <a href="{{ url('/paytaxs/' . $dt->owner_id . '/edit') }}" class="btn btn-block btn-primary">ตรวจสอบ</a>
                        </td>
{{--                        <td>--}}
{{--                            <form action="{{ route('paytaxs.destroy', $dt->owner_id ) }}" method="POST">--}}
{{--                                @method('DELETE')--}}
{{--                                @csrf--}}
{{--                                <button class="btn btn-block btn-danger">ลบ</button>--}}
{{--                            </form>--}}
{{--                        </td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>

