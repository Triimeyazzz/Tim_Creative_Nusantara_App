@extends('layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Create Category</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>New Category Form</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" name="name" class="form-control" required>
                        </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
