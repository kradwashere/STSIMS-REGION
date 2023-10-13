<?php

namespace App\Http\Resources\Scholar\Benefits;

use Illuminate\Http\Resources\Json\JsonResource;

class EnrollmentResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'academic_year' => $this->semester->academic_year,
            'semester' => $this->semester->semester->name,
            'benefits' => $this->benefits,
            'total' => $this->benefits->sum('amount'),
        ];
    }
}
