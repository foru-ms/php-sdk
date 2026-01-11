<?php

namespace ForuMs\Users\Requests;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class PatchUsersIdRequest extends JsonSerializableType
{
    /**
     * @var ?string $displayName Display name
     */
    #[JsonProperty('displayName')]
    public ?string $displayName;

    /**
     * @var ?string $bio User bio
     */
    #[JsonProperty('bio')]
    public ?string $bio;

    /**
     * @var ?string $signature Forum signature
     */
    #[JsonProperty('signature')]
    public ?string $signature;

    /**
     * @var ?string $username Username (letters, numbers, underscores, hyphens)
     */
    #[JsonProperty('username')]
    public ?string $username;

    /**
     * @var ?string $email Email address
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $password New password
     */
    #[JsonProperty('password')]
    public ?string $password;

    /**
     * @var ?string $url Website URL
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @var ?array<string, mixed> $extendedData Extended data
     */
    #[JsonProperty('extendedData'), ArrayType(['string' => 'mixed'])]
    public ?array $extendedData;

    /**
     * @var ?array<string> $roles Role slugs (admin only)
     */
    #[JsonProperty('roles'), ArrayType(['string'])]
    public ?array $roles;

    /**
     * @param array{
     *   displayName?: ?string,
     *   bio?: ?string,
     *   signature?: ?string,
     *   username?: ?string,
     *   email?: ?string,
     *   password?: ?string,
     *   url?: ?string,
     *   extendedData?: ?array<string, mixed>,
     *   roles?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->displayName = $values['displayName'] ?? null;
        $this->bio = $values['bio'] ?? null;
        $this->signature = $values['signature'] ?? null;
        $this->username = $values['username'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->password = $values['password'] ?? null;
        $this->url = $values['url'] ?? null;
        $this->extendedData = $values['extendedData'] ?? null;
        $this->roles = $values['roles'] ?? null;
    }
}
