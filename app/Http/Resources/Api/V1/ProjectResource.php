<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'deadline' => $this->deadline,
            'status' => $this->status,
            'company' => [
                'name' => $this->company->name,
                'email' => $this->company->email,
                'phone' => $this->company->phone,
            ],
            // 'team' => [],
            'user' => [
                'name' => $this->user->name,
                'email' => $this->user->email,
            ],
            'department' => [
                'name' => $this->department->name,
            ],
        ];
    }
}
