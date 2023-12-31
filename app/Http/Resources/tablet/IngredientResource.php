<?php

namespace App\Http\Resources\tablet;

use Illuminate\Http\Resources\Json\JsonResource;

class IngredientResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->getTranslations('name'),
            'food_id' => $this->food_id,
            // 'value' => $this->value,
            // 'unit' => $this->ingredient->getTranslations('unit') ?: null,
        ];
    }
}
