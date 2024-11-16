@extends('layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Edit Gallery Portfolio</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Portfolio</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('gallery_portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" class="form-control" value="{{ $portfolio->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" class="form-control" required>{{ $portfolio->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" id="image" name="image" class="form-control" accept="image/*">
                        <small>Leave blank if you don't want to change the image</small>
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $portfolio->image) }}" alt="Current Image" width="150">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
