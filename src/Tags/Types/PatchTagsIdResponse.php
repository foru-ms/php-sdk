<?php

namespace ForuMs\Tags\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PatchTagsIdResponse extends JsonSerializableType
{
    /**
     * @var ?PatchTagsIdResponseData $data
     */
    #[JsonProperty('data')]
    public ?PatchTagsIdResponseData $data;

    /**
     * @param array{
     *   data?: ?PatchTagsIdResponseData,
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
