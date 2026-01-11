<?php

namespace ForuMs\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

/**
 * Partial OIDC provider update
 */
class SsoUpdate extends JsonSerializableType
{
    /**
     * @var ?string $name Provider name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $domain Email domain to match
     */
    #[JsonProperty('domain')]
    public ?string $domain;

    /**
     * @var ?string $clientId
     */
    #[JsonProperty('clientId')]
    public ?string $clientId;

    /**
     * @var ?string $clientSecret
     */
    #[JsonProperty('clientSecret')]
    public ?string $clientSecret;

    /**
     * @var ?string $issuer
     */
    #[JsonProperty('issuer')]
    public ?string $issuer;

    /**
     * @var ?string $authorizationEndpoint
     */
    #[JsonProperty('authorizationEndpoint')]
    public ?string $authorizationEndpoint;

    /**
     * @var ?string $tokenEndpoint
     */
    #[JsonProperty('tokenEndpoint')]
    public ?string $tokenEndpoint;

    /**
     * @var ?string $userInfoEndpoint
     */
    #[JsonProperty('userInfoEndpoint')]
    public ?string $userInfoEndpoint;

    /**
     * @var ?bool $active Enable/disable provider
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * @param array{
     *   name?: ?string,
     *   domain?: ?string,
     *   clientId?: ?string,
     *   clientSecret?: ?string,
     *   issuer?: ?string,
     *   authorizationEndpoint?: ?string,
     *   tokenEndpoint?: ?string,
     *   userInfoEndpoint?: ?string,
     *   active?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->domain = $values['domain'] ?? null;
        $this->clientId = $values['clientId'] ?? null;
        $this->clientSecret = $values['clientSecret'] ?? null;
        $this->issuer = $values['issuer'] ?? null;
        $this->authorizationEndpoint = $values['authorizationEndpoint'] ?? null;
        $this->tokenEndpoint = $values['tokenEndpoint'] ?? null;
        $this->userInfoEndpoint = $values['userInfoEndpoint'] ?? null;
        $this->active = $values['active'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
