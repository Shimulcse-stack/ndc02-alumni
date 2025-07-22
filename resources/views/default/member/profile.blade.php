@extends('default.layout')
@section('content')
  <div class="container my-5">
    <h5 class="text-primary fw-semibold mb-4">
      <a href="#" class="text-decoration-none">{{ $data['row']->name }}'s Profile</a>
    </h5> 


    <div class="card rounded-4 p-4 shadow-sm">

      <div class="text-center mb-4">
       @if($data['row']->photo_new)
         <img src="{{ asset('storage/' . $data['row']->photo_new) }}" alt="Profile" class="rounded-circle border border-3 border-dark" width="100" height="100" style="object-fit: cover;">
       @endif  
     
      </div>
      <div class="row g-3">
   
        <div class="col-md-4">
          <div class="bg-light p-2 rounded border">
            <strong>Email</strong>
            <div>{{ $data['row']->email }}</div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="bg-light p-2 rounded border">
            <strong>Phone</strong>
            <div>{{ $data['row']->phone }}</div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="bg-light p-2 rounded border">
            <strong>Roll</strong>
            <div>{{ $data['row']->roll }}</div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="bg-light p-2 rounded border">
            <strong>Role</strong>
            <div>{{ $data['row']->role }}</div>
            <p>Member</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="bg-light p-2 rounded border">
            <strong>Group</strong>
            <div>{{ $data['row']->group }}</div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="bg-light p-2 rounded border">
            <strong>Section</strong>
            <div>{{ $data['row']->section }}</div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="bg-light p-2 rounded border">
            <strong>Blood Group</strong>
            <div>{{ $data['row']->blood_group }}</div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="bg-light p-2 rounded border">
            <strong>Blood Donor</strong><br>
            <span class="badge bg-danger">{{ $data['row']->blood_donor ? 'Yes' : 'No' }}</span>
          </div>
        </div>

        <div class="col-md-4">
          <div class="bg-light p-2 rounded border">
            <strong>T-Shirt Size</strong>
            <div>{{ $data['row']->tshirt_size }}</div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="bg-light p-2 rounded border">
            <strong>Address</strong>
            <div>{{ $data['row']->address }}</div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="bg-light p-2 rounded border">
            <strong>City</strong>
            <div>{{ $data['row']->city }}</div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="bg-light p-2 rounded border">
            <strong>Postcode</strong>
            <div>{{ $data['row']->postcode }}</div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="bg-light p-2 rounded border">
            <strong>Designation</strong>
            <div>{{ $data['row']->designation }}</div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="bg-light p-2 rounded border">
            <strong>Organization</strong>
            <div>{{ $data['row']->organization }}</div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="bg-light p-2 rounded border">
            <strong>Status</strong><br>
            <span class="badge bg-success">{{ $data['row']->status }}</span>
          </div>
        </div>
      
      </div>
       <div class="mt-4 text-end">
        <a href="{{ route('member.index') }}" class="btn btn-outline-primary"><i class="fas fa-arrow-left"></i> Back to List</a>
      </div>
    </div>
  </div>

@endsection