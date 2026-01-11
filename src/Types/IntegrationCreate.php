<?php

namespace ForuMs\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class IntegrationCreate extends JsonSerializableType
{
    /**
     * @var string $type Integration type (e.g. slack, discord)
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var array<string, mixed> $config JSON configuration
     */
    #[JsonProperty('config'), ArrayType(['string' => 'mixed'])]
    public array $config;

    /**
     * @var ?bool $enabled
     */
    #[JsonProperty('enabled')]
    public ?bool $enabled;

    /**
     * @param array{
     *   type: string,
     *   config: array<string, mixed>,
     *   enabled?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->config = $values['config'];
        $this->enabled = $values['enabled'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
