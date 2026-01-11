<?php

namespace ForuMs\Threads\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

/**
 * Poll data
 */
class GetThreadsIdResponseDataPoll extends JsonSerializableType
{
    /**
     * @var string $title Poll title
     */
    #[JsonProperty('title')]
    public string $title;

    /**
     * @var array<GetThreadsIdResponseDataPollOptionsItem> $options Poll options
     */
    #[JsonProperty('options'), ArrayType([GetThreadsIdResponseDataPollOptionsItem::class])]
    public array $options;

    /**
     * @param array{
     *   title: string,
     *   options: array<GetThreadsIdResponseDataPollOptionsItem>,
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
