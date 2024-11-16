@extends('layouts.master')

@section('title', 'Edit Social Media')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Edit Social Media</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('admin.sosmed.index') }}">Social Media</a></div>
            <div class="breadcrumb-item active">Edit</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Social Media</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.sosmed.update', $sosmed->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="team">Team Member</label>
                        <select name="our_team_id" id="team" class="form-control" required>
                            @foreach ($teams as $team)
                                <option value="{{ $team->id }}" {{ $sosmed->our_team_id == $team->id ? 'selected' : '' }}>
                                    {{ $team->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sosmed">Social Media</label>
                        <input type="text" name="sosmed" id="sosmed" class="form-control" value="{{ $sosmed->sosmed }}" required>
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="url" name="url" id="url" class="form-control" value="{{ $sosmed->url }}" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('admin.sosmed.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
