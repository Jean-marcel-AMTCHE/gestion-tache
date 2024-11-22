<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'description' => 'required',
            'priority' => 'required|in:haute,moyenne,basse',
            'due_date' => 'required|date|after_or_equal:today',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Le titre est obligatoire.',
            'description.required' => 'La description est obligatoire.',
            'priority.required' => 'La priorité est obligatoire.',
            'priority.in' => 'La priorité doit être haute, moyenne ou basse.',
            'due_date.required' => 'La date limite est obligatoire.',
            'due_date.date' => 'La date limite doit être une date valide.',
            'due_date.after_or_equal' => 'La date limite doit être aujourd\'hui ou une date future.',
        ];
    }
}

