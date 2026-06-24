@extends('layouts.app')
@section('title', 'Transfer Requests')
@section('breadcrumb')
<li class="breadcrumb-item active">Transfer Requests</li>
@endsection

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Transfer Requests</h1>
        <div class="page-subtitle">
            @if($isSuper)
            System-wide view &mdash; <span class="badge bg-secondary">Monitor Only</span>
            @else
            {{ auth()->user()->department->name ?? 'Your Department' }} &mdash; Review requests from your department's files
            @endif
        </div>
    </div>
</div>

{{-- Super Admin notice --}}
@if($isSuper)
<div class="alert alert-info d-flex align-items-center gap-2 mb-4" role="alert">
    <i class="fa-solid fa-circle-info fa-lg"></i>
    <div>
        <strong>Read-Only View.</strong>
        As Super Admin you can monitor all transfer requests.
        Approval and rejection is handled by the <strong>source department's Admin</strong> (the department the file is coming from).
    </div>
</div>
@endif

{{-- Stats --}}
<div class="row g-3 mb-4">
    <div class="col-4">
        <div class="stat-kpi">
            <div class="stat-kpi-icon orange"><i class="fa-solid fa-clock"></i></div>
            <div>
                <div class="stat-kpi-label">Pending</div>
                <div class="stat-kpi-value">{{ $pending->count() }}</div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="stat-kpi">
            <div class="stat-kpi-icon green"><i class="fa-solid fa-check"></i></div>
            <div>
                <div class="stat-kpi-label">Approved</div>
                <div class="stat-kpi-value">{{ $approved->count() }}</div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="stat-kpi">
            <div class="stat-kpi-icon red"><i class="fa-solid fa-xmark"></i></div>
            <div>
                <div class="stat-kpi-label">Rejected</div>
                <div class="stat-kpi-value">{{ $rejected->count() }}</div>
            </div>
        </div>
    </div>
</div>

{{-- Tabs --}}
<ul class="nav nav-tabs mb-3" id="transferTabs">
    <li class="nav-item">
        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-pending">
            Pending <span class="badge bg-warning text-dark ms-1">{{ $pending->count() }}</span>
        </button>
    </li>
    <li class="nav-item">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-approved">
            Approved <span class="badge bg-success ms-1">{{ $approved->count() }}</span>
        </button>
    </li>
    <li class="nav-item">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-rejected">
            Rejected <span class="badge bg-danger ms-1">{{ $rejected->count() }}</span>
        </button>
    </li>
</ul>

<div class="tab-content">

    {{-- ── PENDING ─────────────────────────────────── --}}
    <div class="tab-pane fade show active" id="tab-pending">
        <div class="portal-table-wrap">
            <div class="table-responsive">
                <table class="portal-table">
                    <thead>
                        <tr>
                            <th>File</th>
                            <th>Requested By</th>
                            <th>From Dept.</th>
                            <th>To Dept.</th>
                            <th>Target User</th>
                            <th>Date</th>
                            @if(!$isSuper)<th>Actions</th>@else<th>Approval By</th>@endif
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pending as $req)
                        <tr id="row-{{ $req->uuid }}">
                            <td>
                                <div class="fw-700">{{ $req->file->file_name ?? 'N/A' }}</div>
                                <div class="text-muted fs-sm">{{ $req->file->file_number ?? '' }}</div>
                            </td>
                            <td>{{ $req->sender->name ?? 'N/A' }}</td>
                            <td class="text-muted">{{ $req->fromDept->name ?? 'N/A' }}</td>
                            <td class="text-muted">{{ $req->toDept->name ?? 'N/A' }}</td>
                            <td>{{ $req->receiver->name ?? 'N/A' }}</td>
                            <td class="text-muted fs-sm">{{ $req->created_at->format('d M Y') }}</td>
                            @if(!$isSuper)
                            <td>
                                <div class="d-flex gap-1">
                                    <button onclick="handleRequest('{{ $req->uuid }}', 'approve', this)"
                                        class="btn btn-sm btn-success">
                                        <i class="fa-solid fa-check me-1"></i>Approve
                                    </button>
                                    <button onclick="handleRequest('{{ $req->uuid }}', 'reject', this)"
                                        class="btn btn-sm btn-danger">
                                        <i class="fa-solid fa-xmark me-1"></i>Reject
                                    </button>
                                </div>
                            </td>
                            @else
                            <td>
                                <span class="badge-status badge-pending"
                                    title="Approval by {{ $req->fromDept->name ?? '' }} Admin (source department)">
                                    <i class="fa-solid fa-lock me-1"></i>{{ $req->fromDept->name ?? 'N/A' }} Admin
                                </span>
                            </td>
                            @endif
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">
                                <div class="empty-state"><i class="fa-solid fa-clock"></i>No pending requests.</div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- ── APPROVED ─────────────────────────────────── --}}
    <div class="tab-pane fade" id="tab-approved">
        <div class="portal-table-wrap">
            <div class="table-responsive">
                <table class="portal-table">
                    <thead>
                        <tr>
                            <th>File</th>
                            <th>From</th>
                            <th>To</th>
                            <th>From Dept.</th>
                            <th>To Dept.</th>
                            <th>Approved</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($approved as $req)
                        <tr>
                            <td>
                                <div class="fw-700">{{ $req->file->file_name ?? 'N/A' }}</div>
                                <div class="text-muted fs-sm">{{ $req->file->file_number ?? '' }}</div>
                            </td>
                            <td>{{ $req->sender->name ?? 'N/A' }}</td>
                            <td>{{ $req->receiver->name ?? 'N/A' }}</td>
                            <td class="text-muted">{{ $req->fromDept->name ?? 'N/A' }}</td>
                            <td class="text-muted">{{ $req->toDept->name ?? 'N/A' }}</td>
                            <td class="text-muted fs-sm">{{ $req->updated_at->format('d M Y') }}</td>
                            <td>@include('partials.status-badge', ['status' => 'approved'])</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">
                                <div class="empty-state"><i class="fa-solid fa-check"></i>No approved requests.</div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- ── REJECTED ─────────────────────────────────── --}}
    <div class="tab-pane fade" id="tab-rejected">
        <div class="portal-table-wrap">
            <div class="table-responsive">
                <table class="portal-table">
                    <thead>
                        <tr>
                            <th>File</th>
                            <th>From</th>
                            <th>To</th>
                            <th>From Dept.</th>
                            <th>To Dept.</th>
                            <th>Rejected</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($rejected as $req)
                        <tr>
                            <td>
                                <div class="fw-700">{{ $req->file->file_name ?? 'N/A' }}</div>
                                <div class="text-muted fs-sm">{{ $req->file->file_number ?? '' }}</div>
                            </td>
                            <td>{{ $req->sender->name ?? 'N/A' }}</td>
                            <td>{{ $req->receiver->name ?? 'N/A' }}</td>
                            <td class="text-muted">{{ $req->fromDept->name ?? 'N/A' }}</td>
                            <td class="text-muted">{{ $req->toDept->name ?? 'N/A' }}</td>
                            <td class="text-muted fs-sm">{{ $req->updated_at->format('d M Y') }}</td>
                            <td>@include('partials.status-badge', ['status' => 'rejected'])</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">
                                <div class="empty-state"><i class="fa-solid fa-xmark"></i>No rejected requests.</div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<div id="requestFeedback" class="alert d-none mt-3" role="alert"></div>

@push('scripts')
<script>
    function handleRequest(uuid, action, btn) {
        if (!confirm((action === 'approve' ? 'Approve' : 'Reject') + ' this transfer request?')) return;
        var originalHtml = btn ? btn.innerHTML : null;
        if (btn) {
            btn.disabled = true;
            btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i>';
        }

        fetch('/admin/transfer-requests/' + uuid + '/' + action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({})
            })
            .then(function(r) {
                return r.json().then(function(data) {
                    return {
                        ok: r.ok,
                        status: r.status,
                        data: data
                    };
                });
            })
            .then(function(res) {
                var fb = document.getElementById('requestFeedback');
                if (res.data.success) {
                    var row = document.getElementById('row-' + uuid);
                    if (row) row.remove();
                    fb.className = 'alert alert-success mt-3';
                    fb.textContent = res.data.message;
                    var sound = document.getElementById('notif-sound');
                    if (sound) {
                        sound.currentTime = 0;
                        sound.play().catch(function() {});
                    }
                    setTimeout(function() {
                        window.location.reload();
                    }, 1500);
                } else {
                    fb.className = 'alert alert-danger mt-3';
                    fb.textContent = res.data.message || 'Action failed. Please try again.';
                    if (btn) {
                        btn.disabled = false;
                        btn.innerHTML = originalHtml;
                    }
                }
                fb.scrollIntoView({
                    behavior: 'smooth',
                    block: 'nearest'
                });
                setTimeout(function() {
                    fb.className = 'alert d-none';
                }, 5000);
            })
            .catch(function() {
                alert('A network error occurred. Please refresh and try again.');
                if (btn) {
                    btn.disabled = false;
                    btn.innerHTML = originalHtml;
                }
            });
    }
</script>
@endpush
@endsection