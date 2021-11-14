<?php

namespace App\Http\Resources\KpiActivity;

use App\Http\Resources\Setting\SettingResource;
use Illuminate\Http\Resources\Json\JsonResource;

class KpiActivityResource extends JsonResource
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
            "score" => $this->score,
            "pipeline" => new SettingResource($this->pipeline)
        ];
    }
}
