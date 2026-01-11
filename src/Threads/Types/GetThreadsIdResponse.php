<?php

namespace ForuMs\Threads\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetThreadsIdResponse extends JsonSerializableType
{
    /**
     * @var ?GetThreadsIdResponseData $data
     */
    #[JsonProperty('data')]
    public ?GetThreadsIdResponseData $data;

    /**
     * @param array{
     *   data?: ?GetThreadsIdResponseData,
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
