<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SongsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $display_title = pathinfo(explode("_",$this->music_title)[1], PATHINFO_FILENAME);
        
        return [
            "music_title" => $this->music_title,
            "display_title" => $display_title,
            "artist_name" => $this->artist_name,
            "cover_image" => $this->cover_image
        ];
    }
}
