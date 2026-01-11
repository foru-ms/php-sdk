<?php

namespace ForuMs\Tags\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetTagsIdSubscribersResponse extends JsonSerializableType
{
    /**
     * @var GetTagsIdSubscribersResponseData $data
     */
    #[JsonProperty('data')]
    public GetTagsIdSubscribersResponseData $data;

    /**
     * @param array{
     *   data: GetTagsIdSubscribersResponseData,
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
