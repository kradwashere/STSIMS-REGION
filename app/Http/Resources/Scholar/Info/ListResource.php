<?php

namespace App\Http\Resources\Scholar\Info;

use Illuminate\Http\Resources\Json\JsonResource;

class ListResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'attachment' => json_decode($this->attachment,true),
            'grades' => $this->lists,
            'benefits' => $this->benefits,
            'level' => $this->level->others,
            'semester' => $this->semester,
            'status' => $this->info,
            // 'academic_year' => $this->semester->academic_year,
            // 'start_at' => $this->semester->start_at,
            // 'end_at' => $this->semester->end_at,
        ];
    }
}
