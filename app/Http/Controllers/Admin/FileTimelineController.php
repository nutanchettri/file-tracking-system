<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FileRecord;
use App\Models\FileMovement;

class FileTimelineController extends Controller
{
    public function show($id)
    {
        $file = FileRecord::with([
            'currentUser',
            'department',
        ])->findOrFail($id);

        $timeline = FileMovement::with([
            'fromUser',
            'toUser',
            'fromDept',
            'toDept'
        ])
            ->where('file_id', $id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.files.show', compact('file', 'timeline'));
    }
    public function fileDetails($id)
    {
        $file = FileRecord::with([
            'currentUser',
            'department',
            'movements.fromUser',
            'movements.toUser',
            'movements.fromDept',
            'movements.toDept'
        ])->findOrFail($id);

        return view('admin.files.show', compact('file'));
    }
}