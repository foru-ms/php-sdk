<?php

namespace ForuMs\Webhooks\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class GetWebhooksResponseDataItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $name Webhook name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $url Webhook endpoint URL
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @var array<string> $events Event types to trigger on
     */
    #[JsonProperty('events'), ArrayType(['string'])]
    public array $events;

    /**
     * @var bool $active Whether webhook is active
     */
    #[JsonProperty('active')]
    public bool $active;

    /**
     * @var ?string $lastTriggered Last trigger timestamp
     */
    #[JsonProperty('lastTriggered')]
    public ?string $lastTriggered;

    /**
     * @var int $failureCount Consecutive failure count
     */
    #[JsonProperty('failureCount')]
    public int $failureCount;

    /**
     * @var string $createdAt Webhook creation timestamp
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $updatedAt Webhook last update timestamp
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   url: string,
     *   events: array<string>,
     *   active: bool,
     *   failureCount: int,
     *   createdAt: string,
     *   updatedAt: string,
     *   lastTriggered?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->url = $values['url'];
        $this->events = $values['events'];
        $this->active = $values['active'];
        $this->lastTriggered = $values['lastTriggered'] ?? null;
        $this->failureCount = $values['failureCount'];
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
