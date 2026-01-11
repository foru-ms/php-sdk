<?php

namespace ForuMs\Threads\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetThreadsIdReactionsResponse extends JsonSerializableType
{
    /**
     * @var GetThreadsIdReactionsResponseData $data
     */
    #[JsonProperty('data')]
    public GetThreadsIdReactionsResponseData $data;

    /**
     * @param array{
     *   data: GetThreadsIdReactionsResponseData,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->data = $values['data'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
