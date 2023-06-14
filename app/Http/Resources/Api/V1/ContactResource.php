<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            // 'id' => $this->id,
            // 'uuid' => $this->uuid,
            'title' => $this->title,
            'name' => [
                'first' => $this->first_name,
                'middle' => $this->middle_name,
                'last' => $this->last_name,
                'preferred' => $this->preferred_name,
                'full' => $this->fullName(),
            ],
            'email' => $this->email,
            'phone' => $this->phone,
            // 'pronouns' => $this->pronouns,
            // 'created_at' => $this->created_at,
        ];
    }

    protected function fullName(): string
    {
        return ltrim("{$this->first_name} {$this->middle_name} {$this->last_name}");
    }
}
