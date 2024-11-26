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
                    <p><strong>Category:</strong> {{ $portfolio->category }}</p>
                    <p><strong>Description:</strong> {{ $portfolio->description }}</p>
                    <p><strong>Date:</strong> {{ $portfolio->date }}</p>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('admin.portfolio.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </section>
@endsection
