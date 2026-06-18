@extends('layouts.app')

@section('content')

<div class="container">

    <h2>📤 Transfer File</h2>

    <!-- FILE INFO -->
    <div class="alert alert-info">
        <strong>File:</strong> {{ $file->file_name }} <br>
        <strong>Number:</strong> {{ $file->file_number }} <br>
        <strong>Department:</strong> {{ $file->department->name ?? 'N/A' }}
    </div>

    <form action="{{ route('files.transfer.store') }}" method="POST">
        @csrf

        <input type="hidden" name="file_record_id" value="{{ $file->id }}">

        <div class="mb-3">
            <label>Select User</label>
            <select name="to_user_id" class="form-control">
                @foreach($users as $user)
                <option value="{{ $user->id }}">
                    {{ $user->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Remarks</label>
            <textarea name="remarks" class="form-control"></textarea>
        </div>

        <button class="btn btn-success"
            onclick="return confirm('Confirm file transfer?')">
            Transfer
        </button>

    </form>

</div>

@endsection