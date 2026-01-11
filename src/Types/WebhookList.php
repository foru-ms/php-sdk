<?php

namespace ForuMs\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class WebhookList extends JsonSerializableType
{
    /**
     * @var ?float $limit Items per page (max 75)
     */
    #[JsonProperty('limit')]
    public ?float $limit;

    /**
     * @var ?string $cursor Cursor for pagination
     */
    #[JsonProperty('cursor')]
    public ?string $cursor;

    /**
     * @param array{
     *   limit?: ?float,
     *   cursor?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->cursor = $values['cursor'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
