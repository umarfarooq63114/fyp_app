<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TechnicianResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'technician_name'=>$this->technician_name,
            'technician_category'=>$this->technician_category,
            'technician_no'=>$this->technician_no,
            'technician_rating'=>$this->technician_rating,
            'technician_cnic'=>$this->technician_cnic,
            'technician_address'=>$this->technician_address

        ];
    }
}
