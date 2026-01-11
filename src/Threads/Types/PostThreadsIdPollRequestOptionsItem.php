<?php

namespace ForuMs\Threads\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class PostThreadsIdPollRequestOptionsItem extends JsonSerializableType
{
    /**
     * @var string $title Option text
     */
    #[JsonProperty('title')]
    public string $title;

    /**
     * @var ?string $color Optional color for display
     */
    #[JsonProperty('color')]
    public ?string $color;

    /**
     * @var ?array<string, mixed> $extendedData Additional custom data
     */
    #[JsonProperty('extendedData'), ArrayType(['string' => 'mixed'])]
    public ?array $extendedData;

    /**
     * @param array{
     *   title: string,
     *   color?: ?string,
     *   extendedData?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->title = $values['title'];
        $this->color = $values['color'] ?? null;
        $this->extendedData = $values['extendedData'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
