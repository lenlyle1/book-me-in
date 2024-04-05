<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // dd($this);
        return [
            "id" => $this->id,
            "companyId" => $this->company_id,
            "serviceName" => $this->service_name,
            "retailPrice" => $this->retail_price,
            "duration" => $this->duration,
            "extraTime" => $this->extra_time,
            "tax" => $this->tax,
            "description" => $this->description,
            "categoryName" => $this->category_name,
            "treatmentType" => $this->treatment_type,
            "resource" => $this->resource->resource,
            "onlineBooking" => $this->online_booking,
            "availableFor" => $this->available_for,
            "voucherSales" => $this->voucher_sales,
            "commissions" => $this->commissions,
            "serviceId" => $this->service_id,
            "createdAt" => $this->created_at,
            "updatedAt" => $this->updated_at,
        ];
    }
}
