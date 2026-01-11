<?php

namespace ForuMs\Tags\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PostTagsResponse extends JsonSerializableType
{
    /**
     * @var ?PostTagsResponseData $data
     */
    #[JsonProperty('data')]
    public ?PostTagsResponseData $data;

    /**
     * @param array{
     *   data?: ?PostTagsResponseData,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->data = $values['data'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
