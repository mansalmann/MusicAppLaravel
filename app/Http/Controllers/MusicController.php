<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;
use App\Http\Requests\MusicRequest;
use App\Http\Resources\SongsCollection;

class MusicController extends Controller
{
    public function formPage(){
        return response()->view('form-music');
    }

    public function addMusic(MusicRequest $request){
        $request->validated();

        $data = $request->only("file_input","artist_name","cover_image");

        $music_title = time() . "_" . $data["file_input"]->getClientOriginalName();
        $data["file_input"]->storeAs("music_files", $music_title);

        if($request->hasFile("cover_image")){
            $cover_image_name_file = time() . "_" . $data["cover_image"]->getClientOriginalName();
            $data["cover_image"]->storeAs("cover_images", $cover_image_name_file);
        }

        Music::create([
            "music_title" => $music_title,
            "artist_name" => $data["artist_name"] ?? "Unknown Artist",
            "cover_image" => $cover_image_name_file ?? null,
        ]);

        return redirect()->route("player");
    }

    public function library():SongsCollection{
        return new SongsCollection(Music::get());
    }
}
