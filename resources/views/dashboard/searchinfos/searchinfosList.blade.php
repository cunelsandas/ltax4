@extends('dashboard.base')

@section('content')
    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
    <div>
   @livewire('paytax')
    </div>
@endsection


@section('javascript')

@endsection

