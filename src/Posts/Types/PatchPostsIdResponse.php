<?php

namespace ForuMs\Posts\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PatchPostsIdResponse extends JsonSerializableType
{
    /**
     * @var ?PatchPostsIdResponseData $data
     */
    #[JsonProperty('data')]
    public ?PatchPostsIdResponseData $data;

    /**
     * @param array{
     *   data?: ?PatchPostsIdResponseData,
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
