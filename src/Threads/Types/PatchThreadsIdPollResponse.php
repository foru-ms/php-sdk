<?php

namespace ForuMs\Threads\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PatchThreadsIdPollResponse extends JsonSerializableType
{
    /**
     * @var PatchThreadsIdPollResponseData $data
     */
    #[JsonProperty('data')]
    public PatchThreadsIdPollResponseData $data;

    /**
     * @param array{
     *   data: PatchThreadsIdPollResponseData,
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
