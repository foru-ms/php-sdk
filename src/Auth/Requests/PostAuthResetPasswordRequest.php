<?php

namespace ForuMs\Auth\Requests;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PostAuthResetPasswordRequest extends JsonSerializableType
{
    /**
     * @var string $password New Password (min 8 chars)
     */
    #[JsonProperty('password')]
    public string $password;

    /**
     * @var ?string $oldPassword Old Password (for change password)
     */
    #[JsonProperty('oldPassword')]
    public ?string $oldPassword;

    /**
     * @var ?string $email Email (required if using oldPassword)
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $token Reset Token
     */
    #[JsonProperty('token')]
    public ?string $token;

    /**
     * @param array{
     *   password: string,
     *   oldPassword?: ?string,
     *   email?: ?string,
     *   token?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->password = $values['password'];
        $this->oldPassword = $values['oldPassword'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->token = $values['token'] ?? null;
    }
}
