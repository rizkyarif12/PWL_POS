@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage Kategori</div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
            <div class="kategoriCreate" style="padding-bottom: 10px; padding-left: 10px">
                <a href="{{ url('/kategori/create')}}">
                    <button type="submit" class="btn btn-primary">Tambah Kategori</button>
                </a>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush