<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePanierRequest extends FormRequest
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
            'article_id'=>'required',
            'user_id' => 'required',
            'quantite' => 'nullable',
            'montant' => 'nullable',
            'etat' => 'nullable'
            //
        ];
    }

    public function getData(){
        return[
            'article_id',
            'user_id',
            'quantite',
            'montant',
            'etat'
    ];
    }
}
