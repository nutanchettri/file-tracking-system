@extends('layouts.app')
@section('title', 'Admin Users')

@section('breadcrumb')
<li class="breadcrumb-item active">Admin Users</li>
@endsection

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Admin Users</h1>
        <div class="page-subtitle">Manage all administrators and super admins</div>
    </div>
    <a href="{{ route('users.create') }}" class="btn-portal-primary"><i class="fa-solid fa-plus"></i> Create Admin</a>
</div>

<div class="portal-table-wrap mb-3">
    <form method="GET" class="table-toolbar">
        <input type="text" name="search" class="form-control" style="max-width:220px;"
            placeholder="Search name or email..." value="{{ request('search') }}">
        <select name="role" class="form-select" style="max-width:180px;">
            <option value="">All Roles</option>
            <option value="super_admin" {{ request('role') === 'super_admin' ? 'selected' : '' }}>Super Admin</option>
            <option value="admin" {{ request('role') === 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="user" {{ request('role') === 'user' ? 'selected' : '' }}>User</option>
        </select>
        <select name="department_id" class="form-select" style="max-width:220px;">
            <option value="">All Departments</option>
            @foreach($departments as $dept)
            <option value="{{ $dept->id }}" {{ request('department_id') == $dept->id ? 'selected' : '' }}>{{ $dept->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary btn-sm px-3"><i class="fa-solid fa-magnifying-glass me-1"></i>Filter</button>
        <a href="{{ route('users.index') }}" class="btn btn-outline-secondary btn-sm px-3">Reset</a>
    </form>
</div>

<div class="portal-table-wrap">
    <div class="table-responsive">
        <table class="portal-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr>
                    <td class="text-muted">{{ $loop->iteration }}</td>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <x-user-avatar :user="$user" :size="32" />
                            <div class="fw-700">{{ $user->name }}</div>
                        </div>
                    </td>
                    <td class="text-muted">{{ $user->email }}</td>
                    <td><span class="badge-status badge-role-{{ $user->role }}">{{ ucfirst(str_replace('_',' ',$user->role)) }}</span></td>
                    <td class="text-muted">{{ $user->department->name ?? '—' }}</td>
                    <td class="text-muted">{{ $user->designation->name ?? '—' }}</td>
                    <td>
                        <div class="d-flex gap-1">
                            <a href="{{ route('users.edit', $user->uuid) }}" class="btn btn-sm btn-outline-primary"><i class="fa-solid fa-pen"></i></a>
                            @if($user->id !== auth()->id())
                            <form action="{{ route('users.destroy', $user->uuid) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                    onclick="return confirm('Delete this user?')"><i class="fa-solid fa-trash"></i></button>
                            </form>
                            @endif
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7">
                        <div class="empty-state"><i class="fa-solid fa-users"></i>No admin users found.</div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($users->hasPages())
    <div class="px-4 py-3 border-top">{{ $users->links() }}</div>
    @endif
</div>
@endsection