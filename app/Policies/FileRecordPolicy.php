<?php

namespace App\Policies;

use App\Models\FileRecord;
use App\Models\User;

class FileRecordPolicy
{
    /**
     * Super Admin can do anything.
     */
    public function before(User $user, string $ability): ?bool
    {
        if ($user->role === 'super_admin') {
            return true;
        }
        return null;
    }

    /**
     * View a file: creator, current holder, or same-department admin.
     */
    public function view(User $user, FileRecord $file): bool
    {
        return $this->hasFileAccess($user, $file);
    }

    /**
     * Download a file: same as view.
     */
    public function download(User $user, FileRecord $file): bool
    {
        return $this->hasFileAccess($user, $file);
    }

    /**
     * Transfer a file: must be current holder or department admin.
     */
    public function transfer(User $user, FileRecord $file): bool
    {
        if ($user->role === 'admin' && (int) $user->department_id === (int) $file->department_id) {
            return true;
        }
        return (int) $file->current_user_id === $user->id;
    }

    /**
     * Create a file: any authenticated user with can_create_file or admin.
     */
    public function create(User $user): bool
    {
        return $user->can_create_file || in_array($user->role, ['admin', 'super_admin'], true);
    }

    /**
     * Core check: creator, current holder, or same-department admin.
     */
    private function hasFileAccess(User $user, FileRecord $file): bool
    {
        if ($user->id === (int) $file->created_by)      return true;
        if ($user->id === (int) $file->current_user_id) return true;
        if ($user->role === 'admin' && (int) $user->department_id === (int) $file->department_id) {
            return true;
        }
        return false;
    }
}
