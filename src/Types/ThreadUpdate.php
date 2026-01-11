<?php

namespace ForuMs\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class ThreadUpdate extends JsonSerializableType
{
    /**
     * @var ?string $title New title
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var ?string $body New content
     */
    #[JsonProperty('body')]
    public ?string $body;

    /**
     * @var ?bool $locked Lock/unlock thread
     */
    #[JsonProperty('locked')]
    public ?bool $locked;

    /**
     * @var ?bool $pinned Pin/unpin thread
     */
    #[JsonProperty('pinned')]
    public ?bool $pinned;

    /**
     * @var ?array<string> $tags Update tags by slug, name, or ID
     */
    #[JsonProperty('tags'), ArrayType(['string'])]
    public ?array $tags;

    /**
     * @var ?array<string, mixed> $extendedData Update extended data
     */
    #[JsonProperty('extendedData'), ArrayType(['string' => 'mixed'])]
    public ?array $extendedData;

    /**
     * @param array{
     *   title?: ?string,
     *   body?: ?string,
     *   locked?: ?bool,
     *   pinned?: ?bool,
     *   tags?: ?array<string>,
     *   extendedData?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->title = $values['title'] ?? null;
        $this->body = $values['body'] ?? null;
        $this->locked = $values['locked'] ?? null;
        $this->pinned = $values['pinned'] ?? null;
        $this->tags = $values['tags'] ?? null;
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
