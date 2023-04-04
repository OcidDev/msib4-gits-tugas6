@extends('layouts.frontend')
@section('title')
Home
@endsection

@section('content')
{{-- row --}}
<div class="row mt-3">
    @foreach ($category as $c)
    {{-- col --}}
    <div class="mt-2 mb-5 col-md-2">
        {{-- card --}}
        <div class="card text-center">
            <img src="{{ asset('storage/' . $c->icon)}}" class="card-img-top rounded w-100" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $c->name }}</h5>
                <p class="card-text">{{ $c->description }}</p>
            </div>
        </div>
        {{-- end card --}}
    </div>
    {{-- end col --}}
    @endforeach
</div>
{{-- end row --}}
@endsection
