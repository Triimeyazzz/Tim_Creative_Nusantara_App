@extends('layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Create Portfolio</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>New Portfolio Form</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.gallery_portfolio.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="team">Portfolio</label>
                        <select name="portfolio_id" id="portfolio_id" class="form-control" required>
                            <option value="">-- Select Portfolio --</option>
                            @foreach ($portfolios as $portfolio)
                                <option value="{{ $portfolio->id }}">{{ $portfolio->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" id="image" name="image" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
