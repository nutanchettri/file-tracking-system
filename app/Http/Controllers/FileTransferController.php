<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileRecord;
use App\Models\FileTransfer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\TransferRequest;

// class FileTransferController extends Controller
// {
//     public function create($fileId)
//     {
//         $file = FileRecord::findOrFail($fileId);
//         $users = User::where('department_id', $file->department_id)->get();

//         return view('files.transfer', compact('file', 'users'));
//     }

//     // STORE TRANSFER
//     // public function store(Request $request)
//     // {
//     //     $request->validate([
//     //         'file_record_id' => 'required|exists:file_records,id',
//     //         'to_user_id' => 'required|exists:users,id',
//     //     ]);

//     //     $file = FileRecord::findOrFail($request->file_record_id);
//     //     $targetUser = User::findOrFail($request->to_user_id);

//     //     // CROSS DEPARTMENT
//     //     if ($targetUser->department_id != auth()->user()->department_id) {

//     //         TransferRequest::create([
//     //             'file_id' => $file->id,
//     //             'requested_by' => auth()->id(),
//     //             'from_department' => auth()->user()->department_id,
//     //             'to_department' => $targetUser->department_id,
//     //             'target_user' => $targetUser->id,
//     //             'status' => 'pending'
//     //         ]);

//     //         return back()->with('success', 'Transfer request sent for Admin approval');
//     //     }

//     //     // SAME DEPARTMENT TRANSFER
//     //     FileTransfer::create([
//     //         'file_id' => $file->id,          // ✅ FIXED
//     //         'sender_id' => auth()->id(),     // ✅ FIXED
//     //         'receiver_id' => $targetUser->id, // ✅ FIXED
//     //         'remarks' => $request->remarks,
//     //     ]);

//     //     $file->update([
//     //         'current_user_id' => $targetUser->id,
//     //         'department_id' => $targetUser->department_id
//     //     ]);

//     //     return redirect()
//     //         ->route('files.index')
//     //         ->with('success', 'File transferred successfully');
//     // }


//     public function store(Request $request)
//     {
//         $request->validate([
//             'file_record_id' => 'required|exists:file_records,id',
//             'to_user_id' => 'required|exists:users,id',
//         ]);

//         $file = FileRecord::findOrFail($request->file_record_id);
//         $targetUser = User::findOrFail($request->to_user_id);

//         // CROSS DEPARTMENT
//         if ($targetUser->department_id != auth()->user()->department_id) {

//             TransferRequest::create([
//                 'file_id' => $file->id,
//                 'requested_by' => auth()->id(),
//                 'from_department' => auth()->user()->department_id,
//                 'to_department' => $targetUser->department_id,
//                 'target_user' => $targetUser->id,
//                 'status' => 'pending'
//             ]);

//             return back()->with('success', 'Transfer request sent for admin approval');
//         }

//         // SAME DEPARTMENT TRANSFER
//         FileTransfer::create([
//             'file_id' => $file->id,              // ✅ FIXED
//             'sender_id' => auth()->id(),         // current user
//             'receiver_id' => $request->to_user_id, // ✅ FIXED (was wrong field)
//             'remarks' => $request->remarks,
//         ]);

//         $file->update([
//             'current_user_id' => $targetUser->id
//         ]);

//         return redirect()
//             ->route('files.index')
//             ->with('success', 'File transferred successfully');
//     }
// }

class FileTransferController extends Controller
{
    // SHOW TRANSFER PAGE
    public function create($fileId)
    {
        $file = FileRecord::findOrFail($fileId);

        $users = User::where('department_id', auth()->user()->department_id)
            ->where('id', '!=', auth()->id())
            ->get();

        return view('files.transfer', compact('file', 'users'));
    }

    // STORE TRANSFER
    public function store(Request $request)
    {
        $request->validate([
            'file_record_id' => 'required|exists:file_records,id',
            'to_user_id' => 'required|exists:users,id',
            'remarks' => 'nullable|string',
        ]);

        $file = FileRecord::findOrFail($request->file_record_id);
        $targetUser = User::findOrFail($request->to_user_id);

        // CROSS DEPARTMENT
        if ($targetUser->department_id != auth()->user()->department_id) {

            TransferRequest::create([
                'file_id' => $file->id,
                'requested_by' => auth()->id(),
                'from_department' => auth()->user()->department_id,
                'to_department' => $targetUser->department_id,
                'target_user' => $targetUser->id,
                'status' => 'pending'
            ]);

            return back()->with('success', 'Transfer request sent for admin approval');
        }

        // SAME DEPARTMENT TRANSFER
        FileTransfer::create([
            'file_id' => $file->id,          // ✅ FIXED
            'sender_id' => auth()->id(),     // ✅ FIXED
            'receiver_id' => $targetUser->id, // ✅ FIXED
            'remarks' => $request->remarks,
        ]);

        return redirect()
            ->route('files.index')
            ->with('success', 'File transferred successfully');
    }
}
