<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\UploadedFile;
use Illuminate\Validation\Rule;

/**
 * @property-read string $name
 * @property-read string $lastname
 * @property-read string $email
 * @property-read string $bio
 * @property-read UploadedFile $photo
 */
class ProfileRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'email' => ['required', 'email', Rule::unique('users')->ignoreModel($this->user())],
            'lastname' => ['required', 'string'],
            'photo' => ['nullable', 'image'],
            'bio' => ['nullable', 'string'],
        ];
    }
}
