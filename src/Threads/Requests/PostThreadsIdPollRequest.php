<?php

namespace ForuMs\Threads\Requests;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Threads\Types\PostThreadsIdPollRequestOptionsItem;
use ForuMs\Core\Types\ArrayType;
use DateTime;
use ForuMs\Core\Types\Date;

class PostThreadsIdPollRequest extends JsonSerializableType
{
    /**
     * @var string $title Poll question/title
     */
    #[JsonProperty('title')]
    public string $title;

    /**
     * @var array<PostThreadsIdPollRequestOptionsItem> $options Poll options (2-20)
     */
    #[JsonProperty('options'), ArrayType([PostThreadsIdPollRequestOptionsItem::class])]
    public array $options;

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
     *   title: string,
     *   options: array<PostThreadsIdPollRequestOptionsItem>,
     *   expiresAt?: ?DateTime,
     *   extendedData?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->title = $values['title'];
        $this->options = $values['options'];
        $this->expiresAt = $values['expiresAt'] ?? null;
        $this->extendedData = $values['extendedData'] ?? null;
    }
}
