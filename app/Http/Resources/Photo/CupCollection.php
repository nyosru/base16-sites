<?php

namespace App\Http\Resources\Photo;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CupCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return $request;
        return [ 'name' => $this->name ?? 'x' ];

        // return [ 'name' => $this->name ?? 'x' ];
        // return [
        //     'data' => $this->collection,
        //     'links' => [
        //         'self' => 'link-value',
        //     ],
        // ];
        // return parent::toArray($request);
    }
}
