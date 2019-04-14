<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Rezervare extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'date' => $this->date,
            'time_slot' => $this->time_slot,
            'sport' => $this->sport
        ];
    }

    // public function with($request)
    // {
    //     return [
    //         'agaugat1' => 'panselutele',
    //         'agaugat2' => url('https://ro.wikipedia.org/wiki/Panselu%C8%9B%C4%83')
    //     ];
    // }
}
