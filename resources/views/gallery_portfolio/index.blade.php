@extends('layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Our Team</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Team Members</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.our_team.create') }}" class="btn btn-primary">Add New Member</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Job</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teams as $team)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->job }}</td>
                                <td>{{ $team->description }}</td>
                                <td>
                                    <a href="{{ route('admin.our_team.edit', $team->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.our_team.destroy', $team->id) }}" method="POST" style="display: inline-block;">
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
