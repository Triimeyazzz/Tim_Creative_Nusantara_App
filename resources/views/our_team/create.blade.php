@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Add Team Member</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>New Member Form</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('our_team.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label for="job">Job</label>
                        <input type="text" id="job" name="job" class="form-control" placeholder="Enter job title" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" class="form-control" placeholder="Enter description" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
