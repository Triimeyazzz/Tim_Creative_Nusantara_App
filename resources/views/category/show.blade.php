@extends('layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Portfolio Details</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>{{ $portfolio->title }}</h4>
            </div>
            <div class="card-body">
                <p><strong>Description:</strong> {{ $portfolio->description }}</p>
                <div>
                    <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" class="img-thumbnail" width="300">
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('admin.gallery_portfolio.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
</section>
@endsection
