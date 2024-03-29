<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnnouncementRequest extends FormRequest
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
            //
            'title' => 'required|string|max:100',
            'description' => 'required|string|max:255',
            'content' => 'required|string',
            'user_id' => 'required|integer',
            'company_id' => 'required|integer',
           // 'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048', // Validate image file types
           'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp', // Validate image file types
        ];
    }
}
