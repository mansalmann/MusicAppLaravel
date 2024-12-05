<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\File;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class MusicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "file_input" => [
                "required",
                File::types(['mp3', 'ogg', 'm4a'])
                ->min("10kb")
                ->max("15mb"),
            ],
            "cover_image" => [
                "nullable",
                File::image()
                ->min("1kb")
                ->max("10mb"),
            ],
            "artist_name" => [
                "nullable",
                "max:100",
            ]
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->view("form-music", [
                "errors" => $validator->errors()
            ], 400)
        );
    }
}
