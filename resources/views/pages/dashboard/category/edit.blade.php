@extends('layouts.dashboard')
@section('title')
    Category Edit
@endsection

@push('after-style')
    @livewireStyles
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css"/> --}}
@endpush

@section('content')
    <div class="container">
        <div class="mb-4">
            <a href="{{ route('dashboard.category') }}" class="btn btn-primary">Back</a>
        </div>
        <div class="row mb-4">
            <div class="col-md-8">
                @livewire('edit-category',['category'=>$category_edit])
            </div>
        </div>
    </div>
@endsection

@push('before-script')
    @livewireScripts
@endpush
