<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
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
            "companyId" =>  $this->company_id,
            "clientId" => $this->client_id,
            "firstName" => $this->first_name,
            "lastName" => $this->last_name,
            "fullName" => $this->full_name,
            "blocked" => $this->blocked,
            "blockReason" => $this->block_reason,
            "appointments" => $this->appointments,
            "noShows" => $this->no_shows,
            "totalSales" => $this->total_sales,
            "outstanding" => $this->outstanding,
            "gender" => $this->gender,
            "mobileNumber" => $this->mobile_number,
            "telephone" => $this->telephone,
            "email" => $this->email,
            "acceptsMarketing" => $this->accepts_marketing,
            "acceptsSmsMarketing" => $this->accepts_sms_marketing,
            "address" => $this->address,
            "apartmentSuite" => $this->apartment_suite,
            "area" => $this->area,
            "city" => $this->city,
            "state" => $this->state,
            "postCode" => $this->post_code,
            "dateOfBirth" => $this->date_of_birth,
            "added" => $this->added,
            "note" => $this->note,
            "referralSource" => $this->referral_source,
            // "created_at" => $this->created_at,
            // "updated_at" => $this->updated_at,
        ];
    }
}
