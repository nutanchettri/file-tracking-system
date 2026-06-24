@extends('layouts.app')
@section('title', 'Edit User')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('users.index') }}">Admin Users</a></li>
<li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Edit User</h1>
        <div class="page-subtitle">Update details for {{ $user->name }}</div>
    </div>
    <a href="{{ route('users.index') }}" class="btn-portal-outline"><i class="fa-solid fa-arrow-left"></i> Back</a>
</div>

<div class="portal-form-card">
    <form method="POST" action="{{ route('users.update', $user->uuid) }}" enctype="multipart/form-data" class="portal-form">
        @csrf @method('PUT')
        <div class="row g-3">
            <div class="col-12">
                @if($user->photo_url)
                <div class="mb-3 d-flex align-items-center gap-3">
                    <img src="{{ $user->photo_url }}" alt="{{ $user->name }}" class="rounded-circle" style="width:72px;height:72px;object-fit:cover;">
                    <div class="text-muted">Current profile photo for {{ $user->name }}</div>
                </div>
                @endif
            </div>
            <div class="col-md-6">
                <label class="form-label">Full Name <span class="required-star">*</span></label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name', $user->name) }}" required>
                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">Email <span class="required-star">*</span></label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email', $user->email) }}" required>
                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">New Password <span class="text-muted">(leave blank to keep current)</span></label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="col-md-6">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control">
            </div>
            <div class="col-md-6">
                <label class="form-label">Role</label>
                <select name="role" class="form-select">
                    <option value="super_admin" {{ $user->role === 'super_admin' ? 'selected' : '' }}>Super Admin</option>
                    <option value="admin" {{ $user->role === 'admin'       ? 'selected' : '' }}>Admin</option>
                    <option value="user" {{ $user->role === 'user'        ? 'selected' : '' }}>User</option>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">Department</label>
                <select name="department_id" class="form-select">
                    <option value="">None</option>
                    @foreach($departments as $dept)
                    <option value="{{ $dept->id }}" {{ $user->department_id == $dept->id ? 'selected' : '' }}>{{ $dept->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">Designation</label>
                <select name="designation_id" class="form-select" id="designationSelect">
                    <option value="">None</option>
                    @foreach($designations as $des)
                    <option value="{{ $des->id }}" data-department-id="{{ $des->department_id }}"
                        {{ $user->designation_id == $des->id ? 'selected' : '' }}>{{ $des->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">Contact Number</label>
                <input type="text" name="contact_number" class="form-control" value="{{ old('contact_number', $user->contact_number) }}">
            </div>
        </div>
        <div class="d-flex gap-2 mt-4">
            <button type="submit" class="btn-portal-primary"><i class="fa-solid fa-floppy-disk"></i> Update User</button>
            <a href="{{ route('users.index') }}" class="btn-portal-outline">Cancel</a>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var departmentSelect = document.querySelector('select[name="department_id"]');
        var designationSelect = document.getElementById('designationSelect');

        function syncDesignations() {
            if (!departmentSelect || !designationSelect) {
                return;
            }
            var departmentId = departmentSelect.value;
            Array.from(designationSelect.options).forEach(function(opt) {
                var isDefault = opt.value === '';
                if (isDefault) {
                    opt.hidden = false;
                    return;
                }
                var optionDept = opt.dataset.departmentId;
                opt.hidden = departmentId && optionDept !== departmentId;
            });

            if (designationSelect.selectedOptions.length > 0) {
                var selected = designationSelect.selectedOptions[0];
                if (selected.hidden) {
                    designationSelect.value = '';
                }
            }
        }

        if (departmentSelect && designationSelect) {
            departmentSelect.addEventListener('change', syncDesignations);
            syncDesignations();
        }
    });
</script>
@endpush