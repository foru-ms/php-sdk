<?php

namespace ForuMs\Auth\Requests;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PostAuthLoginRequest extends JsonSerializableType
{
    /**
     * @var string $login Username or Email
     */
    #[JsonProperty('login')]
    public string $login;

    /**
     * @var string $password Password
     */
    #[JsonProperty('password')]
    public string $password;

    /**
     * @param array{
     *   login: string,
     *   password: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->login = $values['login'];
        $this->password = $values['password'];
    }
}
