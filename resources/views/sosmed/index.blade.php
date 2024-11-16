@extends('layouts.master')

@section('title', 'Social Media')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Social Media</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item active">Social Media</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Social Media List</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.sosmed.create') }}" class="btn btn-primary">Add Social Media</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Team Member</th>
                                <th>Social Media</th>
                                <th>URL</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sosmeds as $index => $sosmed)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $sosmed->ourTeam->name }}</td>
                                    <td>{{ $sosmed->sosmed }}</td>
                                    <td><a href="{{ $sosmed->url }}" target="_blank">{{ $sosmed->url }}</a></td>
                                    <td>
                                        <a href="{{ route('admin.sosmed.edit', $sosmed->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.sosmed.destroy', $sosmed->id) }}" method="POST" style="display: inline;">
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
