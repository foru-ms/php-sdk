<?php

namespace ForuMs\Threads\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

/**
 * Poll data
 */
class PatchThreadsIdResponseDataPoll extends JsonSerializableType
{
    /**
     * @var string $title Poll title
     */
    #[JsonProperty('title')]
    public string $title;

    /**
     * @var array<PatchThreadsIdResponseDataPollOptionsItem> $options Poll options
     */
    #[JsonProperty('options'), ArrayType([PatchThreadsIdResponseDataPollOptionsItem::class])]
    public array $options;

    /**
     * @param array{
     *   title: string,
     *   options: array<PatchThreadsIdResponseDataPollOptionsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->title = $values['title'];
        $this->options = $values['options'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
