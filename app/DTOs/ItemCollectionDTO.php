<?php

namespace App\DTOs;

use Illuminate\Support\Str;
use App\Http\Requests\UpsertItemCollectionRequest;

readonly class ItemCollectionDTO
{
    private function __construct(public string $name, public string $slug, public string $description)
    {}

    public static function fromRequest(UpsertItemCollectionRequest $request): self
    {
        return new self(
            name: $request->validated('name'),
            slug: Str::slug($request->validated('name')),
            description: $request->validated('description'),
        );
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
        ];
    }
}
