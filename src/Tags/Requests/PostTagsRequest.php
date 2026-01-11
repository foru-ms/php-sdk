<?php

namespace ForuMs\Tags\Requests;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class PostTagsRequest extends JsonSerializableType
{
    /**
     * @var string $name Tag name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $slug Tag slug (unique identifier)
     */
    #[JsonProperty('slug')]
    public ?string $slug;

    /**
     * @var ?string $description Tag description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $color Hex color code
     */
    #[JsonProperty('color')]
    public ?string $color;

    /**
     * @var ?array<string, mixed> $extendedData Extended data
     */
    #[JsonProperty('extendedData'), ArrayType(['string' => 'mixed'])]
    public ?array $extendedData;

    /**
     * @param array{
     *   name: string,
     *   slug?: ?string,
     *   description?: ?string,
     *   color?: ?string,
     *   extendedData?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->slug = $values['slug'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->color = $values['color'] ?? null;
        $this->extendedData = $values['extendedData'] ?? null;
    }
}
