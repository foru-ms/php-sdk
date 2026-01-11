<?php

namespace ForuMs\Threads\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetThreadsIdSubscribersResponse extends JsonSerializableType
{
    /**
     * @var GetThreadsIdSubscribersResponseData $data
     */
    #[JsonProperty('data')]
    public GetThreadsIdSubscribersResponseData $data;

    /**
     * @param array{
     *   data: GetThreadsIdSubscribersResponseData,
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
