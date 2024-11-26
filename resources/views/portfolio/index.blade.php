@extends('layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Portfolio List</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item active">Portfolio List</div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>All Portfolios</h4>
                    <div class="card-header-action">
                        <a href="{{ route('admin.portfolio.create') }}" class="btn btn-primary">Add Portfolio</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($portfolios as $portfolio)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $portfolio->title }}</td>
                                    <td>{{ $portfolio->category?->name }}</td>
                                    <td>{{ $portfolio->date }}</td>
                                    <td>
                                        <a href="{{ route('admin.portfolio.show', $portfolio->id) }}" class="btn btn-info btn-sm">View</a>
                                        <a href="{{ route('admin.portfolio.edit', $portfolio->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.portfolio.destroy', $portfolio->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
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
