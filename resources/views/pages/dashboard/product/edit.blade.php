@extends('layouts.dashboard')
@section('title')
    Product
@endsection

@push('after-style')
    @livewireStyles
@endpush

@section('content')

    <h1 class="mb-5">Product</h1>

    <div class="row mb-4">
        <div class="col-md-8">
            @livewire('product-form')
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            @livewire('product-table')
        </div>
    </div>
@endsection

@push('before-script')
    @livewireScripts
@endpush
