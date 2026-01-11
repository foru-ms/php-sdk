<?php

namespace ForuMs\SsOs\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PostSsoResponseData extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<PostSsoResponseDataProvider> $provider SSO provider type
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * @var string $domain Email domain for this provider
     */
    #[JsonProperty('domain')]
    public string $domain;

    /**
     * @var bool $active Whether SSO is active
     */
    #[JsonProperty('active')]
    public bool $active;

    /**
     * @var string $createdAt SSO configuration creation timestamp
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $updatedAt SSO configuration last update timestamp
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   provider: value-of<PostSsoResponseDataProvider>,
     *   domain: string,
     *   active: bool,
     *   createdAt: string,
     *   updatedAt: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->provider = $values['provider'];
        $this->domain = $values['domain'];
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
