<?php

namespace ForuMs\Tags\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetTagsIdResponse extends JsonSerializableType
{
    /**
     * @var ?GetTagsIdResponseData $data
     */
    #[JsonProperty('data')]
    public ?GetTagsIdResponseData $data;

    /**
     * @param array{
     *   data?: ?GetTagsIdResponseData,
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
