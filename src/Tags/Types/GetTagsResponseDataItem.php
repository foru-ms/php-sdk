<?php

namespace ForuMs\Tags\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class GetTagsResponseDataItem extends JsonSerializableType
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
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $createdAt Tag creation timestamp
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $updatedAt Tag last update timestamp
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   name: string,
     *   id: string,
     *   createdAt: string,
     *   updatedAt: string,
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
        $this->id = $values['id'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
