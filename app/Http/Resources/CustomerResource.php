<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "email" => $this->email,
            "phone_number" => $this->phone_number,
            "contact_name" => $this->contact_name,
            "telegram" => $this->telegram,
            "bandwidth" => $this->bandwidth,
            "deposit" => $this->deposit,
            "installation" => $this->installation,
            "payment_term" => $this->payment_term,
            "estimated_cash_collect" => $this->estimated_cash_collect,
            "monthly_fee" => $this->monthly_fee,
            "expected_closed_date" => $this->expected_closed_date,
            "billing_date" => $this->billing_date,
            "next_follow_up_date" => $this->next_follow_up_date,
            "remark" => $this->remark
        ];
    }
}
