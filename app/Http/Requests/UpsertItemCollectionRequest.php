<?php

namespace App\Http\Requests;

use App\Models\ItemCollection;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpsertItemCollectionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if ($itemCollection = $this->route('itemCollection')) {
            return $this->user()->can('update', $itemCollection);
        }

        return $this->user()->can('create', ItemCollection::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // 'name' => 'required|string|min:2|max:255|unique:item_collections,name,' . optional($this->route('itemCollection'))->id,
            'name' => [
                'required',
                'string',
                'min:2',
                'max:255',
                // 'unique:item_collections,name,' . optional($this->route('itemCollection'))->id,
                // o
                // Rule::unique('item_collections', 'name')->ignore(optional($this->route('itemCollection'))->id),
                // o
                Rule::unique('item_collections', 'name')->ignore($this->route('itemCollection')),
            ],
            'description' => 'required|string|max:1000',
        ];
    }

    public function prepareForValidation(): void
    {
        $this->merge([
            'name' => trim($this->name),
            'description' => trim($this->description),
            // o
            // 'name' => trim($this->input('name')),
            // 'description' => trim($this->input('description')),
        ]);
    }
}
