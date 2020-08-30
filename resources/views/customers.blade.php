@extends('adminlte::page')

@section('title', 'Customers')

@section('content_header')
    <h1>Customers</h1>
@stop

@section('content')
    <div id="app">
        <div>
            <div class="container-fluid">
                @include('partials.customers-table')
            </div>
        </div>
        @include('partials.customer-delete')
        @include('partials.customer-update')
        @include('partials.customer-detail')
    </div>
@stop

@section('css')

@stop

@section('js')
    <script src="{{ asset('js/app.js') }}" defer></script>
@stop
