@extends('dashboard.base')

@section('content')

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            @foreach($inputs as $input)
                        </div>
                        <div class="card-body">
                            <h4>ID: {{ $input->id }}</h4>
                            <h4>ชื่อ: {{$input->first_name}}
                                {{$input->last_name}}</h4>
                            <a href="{{ route('reports.index') }}" class="btn btn-warning">ภ.ด.ส.1</a>
                            <a href="{{ route('reports.index') }}" class="btn btn-warning">ภ.ด.ส.2</a>
                            <a href="{{ route('reports.index') }}" class="btn btn-warning">ภ.ด.ส.3</a>
                            <a href="{{ route('reports.index') }}" class="btn btn-warning">ภ.ด.ส.4</a>
                            <a href="{{ route('reports.index') }}" class="btn btn-primary">ภ.ด.ส.6</a>
                            <a href="{{ route('reports.index') }}" class="btn btn-primary">ภ.ด.ส.7</a>
                            <a href="{{ route('reports.index') }}" class="btn btn-primary">ภ.ด.ส.8</a>
                        @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('javascript')

@endsection
