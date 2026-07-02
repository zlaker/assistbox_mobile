<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DeviceBackup extends Model
{
    protected $fillable = [
        'device_id',
        'user_id',
        'backup_data',
        'app_version',
        'book_count',
        'size_bytes',
    ];

    protected $casts = [
        'backup_data' => 'array',
        'user_id' => 'integer',
        'book_count' => 'integer',
        'size_bytes' => 'integer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
