@extends('layouts.dashboard')
@section('title')
    User Edit
@endsection
@push('after-style')
    @livewireStyles
@endpush

@section('content')
    <div class="container">
        <div class="mb-4">
            <a href="{{ route('dashboard.user') }}" class="btn btn-primary">Back</a>
        </div>
        <div class="row mb-4">
            <div class="col-md-8">
                @livewire('user-edit',compact('user_edit'))
            </div>
        </div>
    </div>
@endsection

@push('before-script')
    @livewireScripts
@endpush
