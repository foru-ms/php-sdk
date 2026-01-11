<?php

namespace ForuMs\Integrations\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PostIntegrationsResponseData extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<PostIntegrationsResponseDataType> $type Integration type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $name Integration name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var bool $active Whether integration is active
     */
    #[JsonProperty('active')]
    public bool $active;

    /**
     * @var string $createdAt Integration creation timestamp
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $updatedAt Integration last update timestamp
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   type: value-of<PostIntegrationsResponseDataType>,
     *   name: string,
     *   active: bool,
     *   createdAt: string,
     *   updatedAt: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->type = $values['type'];
        $this->name = $values['name'];
        $this->active = $values['active'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
