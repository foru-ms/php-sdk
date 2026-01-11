<?php

namespace ForuMs\PrivateMessages\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class GetPrivateMessagesResponse extends JsonSerializableType
{
    /**
     * @var array<GetPrivateMessagesResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([GetPrivateMessagesResponseDataItem::class])]
    public array $data;

    /**
     * @var GetPrivateMessagesResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public GetPrivateMessagesResponseMeta $meta;

    /**
     * @param array{
     *   data: array<GetPrivateMessagesResponseDataItem>,
     *   meta: GetPrivateMessagesResponseMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->data = $values['data'];
        $this->meta = $values['meta'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
