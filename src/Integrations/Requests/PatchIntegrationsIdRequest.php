<?php

namespace ForuMs\Integrations\Requests;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class PatchIntegrationsIdRequest extends JsonSerializableType
{
    /**
     * @var ?string $name Integration name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?array<string, mixed> $config JSON configuration (merged with existing)
     */
    #[JsonProperty('config'), ArrayType(['string' => 'mixed'])]
    public ?array $config;

    /**
     * @var ?bool $active Enable/disable integration
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * @param array{
     *   name?: ?string,
     *   config?: ?array<string, mixed>,
     *   active?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->config = $values['config'] ?? null;
        $this->active = $values['active'] ?? null;
    }
}
