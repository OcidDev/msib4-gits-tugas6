@extends('layouts.dashboard')
@section('title')
    User
@endsection

@push('after-style')
    @livewireStyles
@endpush

@section('content')

    <h1 class="mb-5">User</h1>

    <div class="row mb-4">
        <div class="col-md-8">
            @livewire('user-create')
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            @livewire('user-table')
        </div>
    </div>
@endsection

@push('before-script')
    @livewireScripts
@endpush
