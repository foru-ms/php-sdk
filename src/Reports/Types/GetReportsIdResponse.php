<?php

namespace ForuMs\Reports\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetReportsIdResponse extends JsonSerializableType
{
    /**
     * @var ?GetReportsIdResponseData $data
     */
    #[JsonProperty('data')]
    public ?GetReportsIdResponseData $data;

    /**
     * @param array{
     *   data?: ?GetReportsIdResponseData,
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
