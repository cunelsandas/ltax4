@extends('dashboard.base')

@section('content')
    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
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
                        <div class="form-group">
                            <input type="text" name="serach" id="serach" class="form-control" />
                        </div>
                    </div>
                </div>
                  <div class="table-responsive">
                      <table class="table table-striped table-bordered">
                          <thead>
                          <tr>
                              <th width="5%" class="sorting" data-sorting_type="asc" data-column_name="id" style="cursor: pointer">ID <span id="id_icon"></span></th>
                              <th width="38%" class="sorting" data-sorting_type="asc" data-column_name="post_title" style="cursor: pointer">Title <span id="post_title_icon"></span></th>
                              <th width="57%">Description</th>
                          </tr>
                          </thead>
                          <tbody>
                          @include('pagination_data')
                          </tbody>
                      </table>
                      <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                      <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
                      <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
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
                        {{ $getData->links() }}
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    <script>
        <script>
        $(document).ready(function(){

            function clear_icon()
            {
                $('#id_icon').html('');
                $('#post_title_icon').html('');
            }

            function fetch_data(page, sort_type, sort_by, query)
            {
                $.ajax({
                    url:"/pagination/fetch_data?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&query="+query,
                    success:function(data)
                    {
                        $('tbody').html('');
                        $('tbody').html(data);
                    }
                })
            }

            $(document).on('keyup', '#serach', function(){
                var query = $('#serach').val();
                var column_name = $('#hidden_column_name').val();
                var sort_type = $('#hidden_sort_type').val();
                var page = $('#hidden_page').val();
                fetch_data(page, sort_type, column_name, query);
            });

            $(document).on('click', '.sorting', function(){
                var column_name = $(this).data('column_name');
                var order_type = $(this).data('sorting_type');
                var reverse_order = '';
                if(order_type == 'asc')
                {
                    $(this).data('sorting_type', 'desc');
                    reverse_order = 'desc';
                    clear_icon();
                    $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-bottom"></span>');
                }
                if(order_type == 'desc')
                {
                    $(this).data('sorting_type', 'asc');
                    reverse_order = 'asc';
                    clear_icon
                    $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-top"></span>');
                }
                $('#hidden_column_name').val(column_name);
                $('#hidden_sort_type').val(reverse_order);
                var page = $('#hidden_page').val();
                var query = $('#serach').val();
                fetch_data(page, reverse_order, column_name, query);
            });

            $(document).on('click', '.pagination a', function(event){
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                $('#hidden_page').val(page);
                var column_name = $('#hidden_column_name').val();
                var sort_type = $('#hidden_sort_type').val();

                var query = $('#serach').val();

                $('li').removeClass('active');
                $(this).parent().addClass('active');
                fetch_data(page, sort_type, column_name, query);
            });

        });
    </script>

    </script>

@endsection


@section('javascript')

@endsection

