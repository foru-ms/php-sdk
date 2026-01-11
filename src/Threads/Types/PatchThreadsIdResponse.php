<?php

namespace ForuMs\Threads\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PatchThreadsIdResponse extends JsonSerializableType
{
    /**
     * @var ?PatchThreadsIdResponseData $data
     */
    #[JsonProperty('data')]
    public ?PatchThreadsIdResponseData $data;

    /**
     * @param array{
     *   data?: ?PatchThreadsIdResponseData,
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
