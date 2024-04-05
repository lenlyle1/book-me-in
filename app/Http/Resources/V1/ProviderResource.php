<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProviderResource extends JsonResource
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
            "companyId" => $this->company_id,
            "firstName" => $this->first_name,
            "lastName" => $this->last_name,
            "mobileNumber" => $this->mobile_number,
            "email" => $this->email,
            "status" => $this->status,
            "appointments" => $this->appointments,
            "userPermission" => $this->user_permission,
            "startDate" => $this->start_date,
            "endDate" => $this->end_date,
            "notes" => $this->notes,
            "serviceCommission" => $this->service_commission,
            "productCommission" => $this->product_commission,
            "voucherCommission" => $this->voucher_commission,
            // "createdAt" => $this->created_at,
            // "updatedAt" => $this->updated_at,
        ];
    }
}
