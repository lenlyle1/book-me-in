<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "userId" => $this->user_id,
            "companyName" => $this->company_name,
            "address1" => $this->address1,
            "address2" => $this->address2,
            "city" => $this->city,
            "state" => $this->state,
            "country" => $this->country,
            "postalCode" => $this->postal_code,
            "euVatNumber" => $this->eu_vat_number,
            "facebook" => $this->facebook,
            "x" => $this->x,
            "instagram" => $this->instagram,
            "linkedin" => $this->linkedin,
            "createdAt" => $this->created_at,
            "updatedAt" => $this->updated_at,  
        ];
    }
}
