@extends('layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Portfolio</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Update Portfolio</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.portfolio.update', $portfolio->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $portfolio->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category" id="team" class="form-control" required>
                                <option value="">-- Select Category --</option>
                                @foreach ($categories as $category)
                                    <option {{ $category->id == $portfolio->category_id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control">{{ $portfolio->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" name="date" class="form-control" value="{{ $portfolio->date }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('admin.portfolio.index') }}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
