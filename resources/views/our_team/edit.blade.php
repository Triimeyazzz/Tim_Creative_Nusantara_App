@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Edit Team Member</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Member Form</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('our_team.update', $teamMember->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ $teamMember->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="job">Job</label>
                        <input type="text" id="job" name="job" class="form-control" value="{{ $teamMember->job }}" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" class="form-control" required>{{ $teamMember->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
