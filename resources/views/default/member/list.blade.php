@extends('default.layout')
@section('content')
<div class="bg-white p-3 rounded shadow d-flex flex-wrap gap-3 align-items-end mb-3">
    <div class="flex-grow-1">
        <label for="group" class="form-label fw-semibold">Group</label>
        <select class="form-select" id="group">
            <option value="">All Groups</option>
            <option value="A">Science</option>
            <option value="B">Commerce</option>
            <option value="C">Arts</option>
        </select>
    </div>
    <div class="flex-grow-1">
        <label for="section" class="form-label fw-semibold">Section</label>
        <input type="text" class="form-control" id="section" placeholder="Section">
    </div>
    <div class="flex-grow-1">
        <label for="roll" class="form-label fw-semibold">Roll</label>
        <input type="text" class="form-control" id="roll" placeholder="Roll">
    </div>

    <div>
        <button class="btn btn-primary w-100" onclick="searchDirectory()">Search</button>
    </div>

</div>
<div class="row">
    @foreach($data['rows'] as $row)

    <div class="col-md-3 mb-4">

        <div class="container py-3 d-flex justify-content-center">
            <div class="card shadow rounded-4 text-center" style="width: 18rem;">
                <div class="p-3">
                    <img src="{{ asset('storage/' . $row->photo_new) }}" alt="Student Photo"
                        class="img-fluid rounded border border-4 border-success"
                        style="height: 200px; width: 200px; object-fit: cover;">
                </div>


                <div class="card-body">
                    <h5 class="fw-bold mb-1">{{ $row->name }}</h5>
                    <p class="text-muted mb-1">Group: {{ $row->group }} | Section: {{ $row->section }}</p>
                    <p class="text-muted">Roll No: {{ $row->roll }}</p>

                    <a href="{{ route('member.profile', $row->id) }}" class="btn btn-primary mb-2 w-100">Profile</a>
                    <a href="{{ route('member.edit', $row->id) }}" class="btn btn-secondary w-100">Edit</a>
                </div>
            </div>
        </div>
    </div>

    @endforeach
    @endsection