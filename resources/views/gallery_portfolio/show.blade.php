@extends('layouts.master')

@section('content')
<div class="section-header">
    <h1>Portfolio Details</h1>
</div>

<div class="section-body">
    <div class="card">
        <div class="card-header">
            <h4>{{ $portfolio->title }}</h4>
        </div>
        <div class="card-body">
            <p>{{ $portfolio->description }}</p>
            <img src="{{ asset('storage/' . $portfolio->image) }}" class="img-fluid" width="400">
            <a href="{{ route('gallery_portfolio.index') }}" class="btn btn-secondary mt-3">Back</a>
        </div>
    </div>
</div>
@endsection
