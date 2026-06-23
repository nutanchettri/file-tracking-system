<?php

namespace App\Notifications;

use App\Models\TransferRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

/**
 * Sent to the SOURCE department admin when a new cross-department
 * transfer request is submitted by one of their users.
 */
class TransferRequestNotification extends Notification
{
    use Queueable;

    public function __construct(public readonly TransferRequest $transferReq) {}

    public function via(object $notifiable): array
    {
        return ['database'];
    }

    public function toDatabase(object $notifiable): array
    {
        return [
            'type'          => 'transfer_requested',
            'message'       => 'New transfer request from ' . ($this->transferReq->sender->name ?? 'Unknown'),
            'file_title'    => $this->transferReq->file->file_name ?? 'Unknown File',
            'file_number'   => $this->transferReq->file->file_number ?? '',
            'from_dept'     => $this->transferReq->fromDept->name ?? '',
            'to_dept'       => $this->transferReq->toDept->name ?? '',
            'target_user'   => $this->transferReq->receiver->name ?? '',
            'request_uuid'  => $this->transferReq->uuid,
        ];
    }
}
