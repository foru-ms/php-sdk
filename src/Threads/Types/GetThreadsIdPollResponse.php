<?php

namespace ForuMs\Threads\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetThreadsIdPollResponse extends JsonSerializableType
{
    /**
     * @var GetThreadsIdPollResponseData $data
     */
    #[JsonProperty('data')]
    public GetThreadsIdPollResponseData $data;

    /**
     * @param array{
     *   data: GetThreadsIdPollResponseData,
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
