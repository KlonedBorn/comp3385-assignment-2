<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'full_name' => 'required',
            'email' => 'required|email',
            'comment' => 'required'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}