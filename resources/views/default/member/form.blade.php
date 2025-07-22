@extends('default.layout')
@section('content')
<div class="row">
    <div class="container py-3">
        <div class="col-lg-12 mt-3">
            <div class="card">

                <div class="card-header bg-white border-0">
                    <h4 class="fw-bold mb-0 text-dark"> @if (isset($data['row']))
                        Edit Member
                        @else
                        Add Member
                        @endif</h4>
                </div>

                <div class="card-body">
                    <form class="row"
                        action="{{ isset($data['row']) ? route('member.update', $data['row']->id) : route('member.store') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($data['row'])) @method('PUT') @endif

                        <div class="row lg-4">
                            <div class="col-lg-6">
                                <label class="form-label">Old Photo</label>
                                <input type="file" name="photo_old" class="form-control">
                                @if(isset($data['row']) && $data['row']->photo_old)
                                <img src="{{ asset('storage/' . $data['row']->photo_old) }}" width="100">
                                @endif
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label">New Photo</label>
                                <input type="file" name="photo_new" class="form-control">
                                @if(isset($data['row']) && $data['row']->photo_new)
                                <img src="{{ asset('storage/' . $data['row']->photo_new) }}" width="100">
                                @endif
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="col-lg-6">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Full name"
                                    value="{{ old('name', isset($data['row']) ? $data['row']->name : '') }}" required>
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email address"
                                    value="{{ old('email', isset($data['row']) ? $data['row']->email : '') }}" required>
                            </div>

                            <div class="col-lg-6">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" placeholder="Phone number" class="form-control"
                                    value="{{ old('phone', isset($data['row']) ? $data['row']->phone : '') }}">
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label">Roll</label>
                                <input type="text" name="roll" placeholder="Roll number" class="form-control"
                                    value="{{ old('roll', isset($data['row']) ? $data['row']->roll : '') }}">
                            </div>
                            <div class="form-group">
                                <label for="role">Select Role</label>
                                <select name="role" id="role" class="form-control">
                                    @foreach($data['roles'] as $role)
                                    <option value="{{ $role->name }}"
                                        {{ ($data['row'] && $data['row']->hasRole($role->name)) ? 'selected' : '' }}>
                                        {{ ucfirst($role->name) }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">Group</label>
                                <select name="group" class="form-select">
                                    <option value="">Select Group</option>
                                    <option value="science" @if(!empty($data['row']) && $data['row']->group ==
                                        'science')
                                        selected="selected" @endif>Science</option>
                                    <option value="arts" @if(!empty($data['row']) && $data['row']->group == 'arts')
                                        selected="selected" @endif>Arts</option>
                                    <option value="commerce" @if(!empty($data['row']) && $data['row']->group ==
                                        'commerce')
                                        selected="selected" @endif>Commerce</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">Section</label>
                                <input type="text" name="section" placeholder="Section" class="form-control"
                                    value="{{ old('section', isset($data['row']) ? $data['row']->section : '') }}">
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">Blood Group</label>
                                <input type="text" name="blood_group" placeholder="O+, A+, etc." class="form-control"
                                    value="{{ old('blood_group', isset($data['row']) ? $data['row']->blood_group : '') }}">
                            </div>

                            <div class="col-lg-6">
                                <label class="form-label d-block">Blood Donor</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        {{ old('blood_donor', isset($data['row']) && $data['row']->blood_donor) ? 'checked' : '' }} />
                                    Yes
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label">T-Shirt Size</label>
                                <input type="text" name="tshirt_size" placeholder="S, M, L, XL" class="form-control"
                                    value="{{ old('tshirt_size', isset($data['row']) ? $data['row']->tshirt_size : '') }}" />
                            </div>

                            <div class="col-lg-4">
                                <label class="form-label">City</label>
                                <input type="text" name="address" placeholder="City name" class="form-control"
                                    value="{{old('address', isset($data['row']) ? $data['row']->address : '') }}" />
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">Postcode</label>
                                <input type="text" name="city" class="form-control" placeholder="e.g., 522"
                                    value="{{ old('city', isset($data['row']) ? $data['row']->city : '') }}" />
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">Designation</label>
                                <input type="text" name="designation" placeholder="e.g., Jr Engineer"
                                    class="form-control"
                                    value="{{ old('designation', isset($data['row']) ? $data['row']->designation : '') }}" />
                            </div>

                            <div class="col-12">
                                <label class="form-label">Organization</label>
                                <input type="text" name="organization" placeholder="Organization name"
                                    class="form-control"
                                    value="{{ old('organization', isset($data['row']) ? $data['row']->organization : '') }}" />
                            </div>
                        </div>

                        <div class="text-end mt-4">
                            <button type="submit" class="btn btn-primary btn-lg px-4 rounded-pill">
                                <i class="bi bi-save2 me-2"></i>Save Member
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection