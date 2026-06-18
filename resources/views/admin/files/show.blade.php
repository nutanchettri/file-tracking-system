@extends('layouts.app')

@section('content')

<h2>📁 File Details</h2>

<!-- FILE INFO CARD -->
<div style="padding:15px;border:1px solid #ccc;margin-bottom:20px;">

    <h3>{{ $file->file_number }} - {{ $file->file_name }}</h3>

    <p><b>Remarks:</b> {{ $file->remarks }}</p>

    <p><b>Current Department:</b> {{ $file->department->name ?? 'N/A' }}</p>

    <p><b>Current Holder:</b> {{ $file->currentUser->name ?? 'N/A' }}</p>

</div>

<!-- CURRENT STATUS -->
<div style="padding:10px;background:#f4f4f4;margin-bottom:20px;">
    <b>Status:</b> ACTIVE
</div>

<!-- TIMELINE -->
<h3>📜 Movement Timeline</h3>

@if($file->movements->count() == 0)
<p>No movements yet</p>
@endif

<div style="border-left:3px solid #333;padding-left:20px;">

    @foreach($file->movements as $move)

    <div style="margin-bottom:20px;">

        <p>
            <b>Action:</b> {{ strtoupper($move->action) }}
        </p>

        <p>
            <b>From:</b>
            {{ $move->fromUser->name ?? 'System' }}
            ({{ $move->fromDept->name ?? '-' }})
        </p>

        <p>
            <b>To:</b>
            {{ $move->toUser->name ?? '-' }}
            ({{ $move->toDept->name ?? '-' }})
        </p>

        <small>
            📅 {{ $move->created_at }}
        </small>

        <hr>

    </div>

    @endforeach

</div>

@endsection