<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\SupportTicket */
class SupportTicketResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // Определяем статус для iOS
        // new/in_progress -> "pending", closed -> "answered"
        $iosStatus = in_array($this->status, ['new', 'in_progress']) ? 'pending' : 'answered';
        
        return [
            'id' => (string) $this->id, // iOS ожидает строку
            'message' => $this->question, // iOS использует 'message' вместо 'question'
            'response' => $this->answer, // iOS использует 'response' вместо 'answer'
            'status' => $iosStatus,
            'createdAt' => $this->created_at?->format('Y-m-d\TH:i:s.v\Z'), // ISO8601 с миллисекундами
            
            // Дополнительные поля для совместимости с админ-панелью
            'title' => $this->title,
            'device_id' => $this->device_id,
        ];
    }
}
