<?php

namespace ForuMs\Webhooks\Requests;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class PostWebhooksRequest extends JsonSerializableType
{
    /**
     * @var string $name Webhook name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $url Target URL
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @var array<string> $events List of event types (e.g. post.created)
     */
    #[JsonProperty('events'), ArrayType(['string'])]
    public array $events;

    /**
     * @var ?string $secret Secret for signature verification (auto-generated if missing)
     */
    #[JsonProperty('secret')]
    public ?string $secret;

    /**
     * @param array{
     *   name: string,
     *   url: string,
     *   events: array<string>,
     *   secret?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->url = $values['url'];
        $this->events = $values['events'];
        $this->secret = $values['secret'] ?? null;
    }
}
