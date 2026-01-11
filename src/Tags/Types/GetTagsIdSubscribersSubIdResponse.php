<?php

namespace ForuMs\Tags\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetTagsIdSubscribersSubIdResponse extends JsonSerializableType
{
    /**
     * @var GetTagsIdSubscribersSubIdResponseData $data
     */
    #[JsonProperty('data')]
    public GetTagsIdSubscribersSubIdResponseData $data;

    /**
     * @param array{
     *   data: GetTagsIdSubscribersSubIdResponseData,
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
