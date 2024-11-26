@extends('layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Gallery Portfolio</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Portfolio List</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.gallery_portfolio.create') }}" class="btn btn-primary">Add New Member</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Portfolio</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($portfolios as $portfolio)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $portfolio->portfolio->title }}</td>
                                <td>{{ $portfolio->description }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $portfolio->image_path) }}" alt="Portfolio Image" class="img-thumbnail" width="100">
                                </td>
                                <td>
                                    <form class="d-flex" action="{{ route('admin.gallery_portfolio.destroy', $portfolio->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('admin.gallery_portfolio.edit', $portfolio->id) }}" class="btn btn-warning btn-sm mr-1">Edit</a>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
