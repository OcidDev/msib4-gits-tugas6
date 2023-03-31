@extends('layouts.dashboard')
@section('title')
Product
@endsection

@push('after-style')
   @livewireStyles
@endpush

@section('content')
<h1>Product</h1>
@endsection

@push('before-script')
    @livewireScripts
@endpush
