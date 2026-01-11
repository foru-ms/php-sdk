<?php

namespace ForuMs\Auth\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PostAuthForgotPasswordResponse extends JsonSerializableType
{
    /**
     * @var string $message
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * @var ?string $resetToken
     */
    #[JsonProperty('resetToken')]
    public ?string $resetToken;

    /**
     * @param array{
     *   message: string,
     *   resetToken?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->message = $values['message'];
        $this->resetToken = $values['resetToken'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
