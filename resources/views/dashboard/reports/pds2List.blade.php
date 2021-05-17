@extends('dashboard.base')

@section('content')

{{--    <style>--}}
{{--        body{--}}
{{--            font-family: "TH SarabunPSK";--}}
{{--            font-size: 16px;--}}
{{--        }--}}
{{--    </style>--}}
<link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
<div>
    @livewire('pds2listinfo')
</div>
@endsection


@section('javascript')

@endsection

