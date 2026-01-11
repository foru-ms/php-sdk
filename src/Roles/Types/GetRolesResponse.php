<?php

namespace ForuMs\Roles\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class GetRolesResponse extends JsonSerializableType
{
    /**
     * @var array<GetRolesResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([GetRolesResponseDataItem::class])]
    public array $data;

    /**
     * @var GetRolesResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public GetRolesResponseMeta $meta;

    /**
     * @param array{
     *   data: array<GetRolesResponseDataItem>,
     *   meta: GetRolesResponseMeta,
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
