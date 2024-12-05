<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\SongsResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class SongsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => SongsResource::collection($this->collection)
        ];
    }
}
