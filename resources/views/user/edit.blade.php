@extends('layouts.master')
@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush

@section('content')
    <div class="container">
        <div class="mb-4">
            <a href="{{ route('users.home') }}" class="btn btn-primary">Back</a>
        </div>
        <div class="row mb-4">
            <div class="col-md-8">
                @livewire('user-edit',['user'=>$user])
            </div>
        </div>
    </div>
@endsection
