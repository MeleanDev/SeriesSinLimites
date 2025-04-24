@extends('software.layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Series')
@section('content_header_title', 'Series')
@section('content_header_subtitle', 'Series')

{{-- plugins --}}
{{-- Datatable --}}
@section('plugins.Datatables', true)
{{-- Sweetalert2 --}}
@section('plugins.Sweetalert2', true)

{{-- Content body: main page content --}}

@section('content_body')

@stop

@push('css')
    <style>
        .dropdown-menu.show {
            display: inline-table;
        }
    </style>
@endpush

@push('js')
    <script src="{{ asset('Modujs/series.js') }}"></script>
@endpush
