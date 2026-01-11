<?php

namespace ForuMs\Threads\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetThreadsIdSubscribersSubIdResponse extends JsonSerializableType
{
    /**
     * @var GetThreadsIdSubscribersSubIdResponseData $data
     */
    #[JsonProperty('data')]
    public GetThreadsIdSubscribersSubIdResponseData $data;

    /**
     * @param array{
     *   data: GetThreadsIdSubscribersSubIdResponseData,
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
