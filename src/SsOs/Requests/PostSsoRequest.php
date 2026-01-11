<?php

namespace ForuMs\SsOs\Requests;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PostSsoRequest extends JsonSerializableType
{
    /**
     * @var string $name Provider name (e.g. Google)
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $clientId
     */
    #[JsonProperty('clientId')]
    public string $clientId;

    /**
     * @var string $clientSecret
     */
    #[JsonProperty('clientSecret')]
    public string $clientSecret;

    /**
     * @var string $issuer
     */
    #[JsonProperty('issuer')]
    public string $issuer;

    /**
     * @var string $authorizationEndpoint
     */
    #[JsonProperty('authorizationEndpoint')]
    public string $authorizationEndpoint;

    /**
     * @var string $tokenEndpoint
     */
    #[JsonProperty('tokenEndpoint')]
    public string $tokenEndpoint;

    /**
     * @var string $userInfoEndpoint
     */
    #[JsonProperty('userInfoEndpoint')]
    public string $userInfoEndpoint;

    /**
     * @param array{
     *   name: string,
     *   clientId: string,
     *   clientSecret: string,
     *   issuer: string,
     *   authorizationEndpoint: string,
     *   tokenEndpoint: string,
     *   userInfoEndpoint: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->clientId = $values['clientId'];
        $this->clientSecret = $values['clientSecret'];
        $this->issuer = $values['issuer'];
        $this->authorizationEndpoint = $values['authorizationEndpoint'];
        $this->tokenEndpoint = $values['tokenEndpoint'];
        $this->userInfoEndpoint = $values['userInfoEndpoint'];
    }
}
