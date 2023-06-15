<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InteractionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type' => $this->type,
            'content' => $this->content,
            'user_id' => $this->user_id,
            'contact_id' => $this->contact_id,
            'project_id' => $this->project_id,

            'user' => [
                'name' => $this->user->name,
                'email' => $this->user->email,
            ],
            'contact' => [
                'first_name' => $this->contact->first_name,
                'last_name' => $this->contact->last_name,
                'email' => $this->contact->email,
                'phone' => $this->contact->phone,
            ],
            'project' => [
                'title' => $this->project->title,
                'deadline' => $this->project->deadline,
                'status' => $this->project->status,
            ],
        ];
    }
}
