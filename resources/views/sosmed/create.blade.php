@extends('layouts.master')

@section('title', 'Add Social Media')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Add Social Media</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('admin.sosmed.index') }}">Social Media</a></div>
            <div class="breadcrumb-item active">Add</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Add Social Media</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.sosmed.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="team">Team Member</label>
                        <select name="our_team_id" id="team" class="form-control" required>
                            <option value="">-- Select Team Member --</option>
                            @foreach ($teams as $team)
                                <option value="{{ $team->id }}">{{ $team->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sosmed">Social Media</label>
                        <input type="text" name="sosmed" id="sosmed" class="form-control" placeholder="e.g., Instagram" required>
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="url" name="url" id="url" class="form-control" placeholder="https://example.com" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('admin.sosmed.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
