<?php

namespace ForuMs\Threads\Requests;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use DateTime;
use ForuMs\Core\Types\Date;
use ForuMs\Core\Types\ArrayType;

class PatchThreadsIdPollRequest extends JsonSerializableType
{
    /**
     * @var ?string $title Poll question/title
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var ?bool $closed Close the poll
     */
    #[JsonProperty('closed')]
    public ?bool $closed;

    /**
     * @var ?DateTime $expiresAt Optional expiration time
     */
    #[JsonProperty('expiresAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $expiresAt;

    /**
     * @var ?array<string, mixed> $extendedData Additional custom data
     */
    #[JsonProperty('extendedData'), ArrayType(['string' => 'mixed'])]
    public ?array $extendedData;

    /**
     * @param array{
     *   title?: ?string,
     *   closed?: ?bool,
     *   expiresAt?: ?DateTime,
     *   extendedData?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->title = $values['title'] ?? null;
        $this->closed = $values['closed'] ?? null;
        $this->expiresAt = $values['expiresAt'] ?? null;
        $this->extendedData = $values['extendedData'] ?? null;
    }
}
