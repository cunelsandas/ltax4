

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header" style="text-decoration: underline"><h4>จดหมาย</h4></div>
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i>{{ __('ค้นหาข้อมูล ผู้ชำระภาษี') }}</div>
                    <div class="card-body">
        <div class="col-md-12">
            <input type="text"  class="form-control" placeholder="ค้นหาด้วย เลขบัตรประชา, ชื่อ, นามสกุล, เลข ผ.ท.4, ที่อยู่" wire:model="searchTerm" />
            <br>
            <br>
            <table class="table table-responsive-sm table-striped">
                <thead>
                <tr>
                    {{--                            <th>Author</th>--}}
                    <th>บัตรประจำตัวประชาชน</th>
                    <th>ประเภทบุคคล</th>
                    <th>ชื่อเจ้าของทรัพย์สิน</th>
                    <th width="20%">ที่อยู่</th>

                    {{--                            <th>สถานะข้อมูล</th>--}}
                    <th>วันที่เพิ่ม</th>
                    <th></th>
                    {{--                            <th></th>--}}
                    {{--                            <th></th>--}}
                    {{--                            <th></th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach($getData as $gdt)
                    <tr>
                        {{--                              <td><strong>{{ $input->user->name }}</strong></td>--}}
                        <td><strong>{{ $gdt->pop_id }}</strong></td>
                        <td>{{ $gdt->t_desc}}</td>
                        <td>
                            {{ $gdt->title_name }}{{ $gdt->first_name }} {{ $gdt->last_name }}
                        </td>
                        <td>
                            {{ $gdt->address }} ม.{{ $gdt->moo }} ซ.{{ $gdt->soi }} ถ.{{ $gdt->road }} ต.{{ $gdt->tambon_name }} อ.{{ $gdt->amphoe_name }} จ.{{ $gdt->province_name }}
                        </td>
                        <td>
                            {{ formatDateThai($gdt->create_date) }} น.
                        </td>

                        {{--                              <td>--}}
                        {{--                                  <span class="{{ $input->status->class }}">--}}
                        {{--                                      {{ $input->status->name }}--}}

                        {{--                                  </span>--}}
                        {{--                              </td>--}}
                        <td>
                            <a href="{{ url('/reports/' . $gdt->owner_id.'/letter') }}" class="btn btn-block btn-primary"><span class="cil-library-building btn-icon mr-2"></span>ดูจดหมาย</a>
                        </td>
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
{{--            {{ $getData->links() }}--}}
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
                            <i class="fa fa-align-justify"></i>{{ __('จดหมาย') }}</div>
                        <div class="card-body">
                            <div class="col-md-12">
                                <br>
                                <table class="table table-responsive-sm table-striped">
                                    <thead>
                                    <tr>
                                        {{--                            <th>Author</th>--}}
                                        <th>บัตรประจำตัวประชาชน</th>
                                        <th>ประเภทบุคคล</th>
                                        <th>ชื่อเจ้าของทรัพย์สิน</th>
                                        <th width="20%">ที่อยู่</th>

                                        {{--                            <th>สถานะข้อมูล</th>--}}
                                        <th>วันที่เพิ่ม</th>
                                        <th></th>
                                        {{--                            <th></th>--}}
                                        {{--                            <th></th>--}}
                                        {{--                            <th></th>--}}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($getData2 as $gdt)
                                        <tr>
                                            {{--                              <td><strong>{{ $input->user->name }}</strong></td>--}}
                                            <td><strong>{{ $gdt->pop_id }}</strong></td>
                                            <td>{{ $gdt->t_desc}}</td>
                                            <td>
                                                {{ $gdt->title_name }}{{ $gdt->first_name }} {{ $gdt->last_name }}
                                            </td>
                                            <td>
                                                {{ $gdt->address }} ม.{{ $gdt->moo }} ซ.{{ $gdt->soi }} ถ.{{ $gdt->road }} ต.{{ $gdt->tambon_name }} อ.{{ $gdt->amphoe_name }} จ.{{ $gdt->province_name }}
                                            </td>
                                            <td>
                                                {{ formatDateThai($gdt->create_date) }} น.
                                            </td>

                                            {{--                              <td>--}}
                                            {{--                                  <span class="{{ $input->status->class }}">--}}
                                            {{--                                      {{ $input->status->name }}--}}

                                            {{--                                  </span>--}}
                                            {{--                              </td>--}}
                                            <td>
                                                <a href="{{ url('/reports/' . $gdt->owner_id.'/letter') }}" class="btn btn-block btn-primary"><span class="cil-library-building btn-icon mr-2"></span>ดูจดหมาย</a>
                                            </td>
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
                                            {{ $getData2->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@section('javascript')

@endsection


