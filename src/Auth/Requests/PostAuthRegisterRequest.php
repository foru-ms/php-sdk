<?php

namespace ForuMs\Auth\Requests;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class PostAuthRegisterRequest extends JsonSerializableType
{
    /**
     * @var string $username Username
     */
    #[JsonProperty('username')]
    public string $username;

    /**
     * @var string $email Email
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var ?string $displayName Display Name
     */
    #[JsonProperty('displayName')]
    public ?string $displayName;

    /**
     * @var string $password Password (min 8 chars)
     */
    #[JsonProperty('password')]
    public string $password;

    /**
     * @var ?array<string> $roles Roles
     */
    #[JsonProperty('roles'), ArrayType(['string'])]
    public ?array $roles;

    /**
     * @var ?string $bio Bio
     */
    #[JsonProperty('bio')]
    public ?string $bio;

    /**
     * @var ?array<string, mixed> $extendedData Extended data
     */
    #[JsonProperty('extendedData'), ArrayType(['string' => 'mixed'])]
    public ?array $extendedData;

    /**
     * @param array{
     *   username: string,
     *   email: string,
     *   password: string,
     *   displayName?: ?string,
     *   roles?: ?array<string>,
     *   bio?: ?string,
     *   extendedData?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->username = $values['username'];
        $this->email = $values['email'];
        $this->displayName = $values['displayName'] ?? null;
        $this->password = $values['password'];
        $this->roles = $values['roles'] ?? null;
        $this->bio = $values['bio'] ?? null;
        $this->extendedData = $values['extendedData'] ?? null;
    }
}
