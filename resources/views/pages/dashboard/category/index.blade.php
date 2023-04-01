@extends('layouts.dashboard')
@section('title')
    Category
@endsection

@push('after-style')
    @livewireStyles
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css"/> --}}
@endpush

@section('content')
    <h1 class="mb-5">Category</h1>
    <div class="row mb-4">
        <div class="col-md-8">
            @livewire('form-category')
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            @livewire('table-category')
        </div>
    </div>
@endsection

@push('before-script')
    @livewireScripts
@endpush
