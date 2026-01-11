<?php

namespace ForuMs\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

/**
 * Poll data
 */
class ThreadCreatePoll extends JsonSerializableType
{
    /**
     * @var string $title Poll title
     */
    #[JsonProperty('title')]
    public string $title;

    /**
     * @var array<ThreadCreatePollOptionsItem> $options Poll options
     */
    #[JsonProperty('options'), ArrayType([ThreadCreatePollOptionsItem::class])]
    public array $options;

    /**
     * @param array{
     *   title: string,
     *   options: array<ThreadCreatePollOptionsItem>,
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
