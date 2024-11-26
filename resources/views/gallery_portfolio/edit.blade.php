@extends('layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Edit Portfolio</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Portfolio Form</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.gallery_portfolio.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="team">Portfolio</label>
                        <select name="portfolio_id" id="portfolio_id" class="form-control" required>
                            <option value="">-- Select Portfolio --</option>
                            @foreach ($portfolios as $portfolio)
                                <option {{ $portfolio->id == $gallery->portfolio_id ? 'selected' : '' }} value="{{ $portfolio->id }}">{{ $portfolio->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" class="form-control" required>{{ $gallery->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" id="image" name="image" class="form-control">
                        <small>Leave blank if you don't want to update the image.</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
