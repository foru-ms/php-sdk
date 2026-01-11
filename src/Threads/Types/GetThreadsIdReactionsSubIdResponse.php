<?php

namespace ForuMs\Threads\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetThreadsIdReactionsSubIdResponse extends JsonSerializableType
{
    /**
     * @var GetThreadsIdReactionsSubIdResponseData $data
     */
    #[JsonProperty('data')]
    public GetThreadsIdReactionsSubIdResponseData $data;

    /**
     * @param array{
     *   data: GetThreadsIdReactionsSubIdResponseData,
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
