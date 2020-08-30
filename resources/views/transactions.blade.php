@extends('adminlte::page')

@section('title', 'Transactions')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div id="app">
        <div>
            <div class="container-fluid">
                @include('partials.transactions-table')
            </div>
        </div>
        @include('partials.transaction-delete')
        @include('partials.transaction-update')
        @include('partials.transaction-detail')
    </div>
@stop

@section('css')

@stop

@section('js')
    <script src="{{ asset('js/app.js') }}" defer></script>
@stop
