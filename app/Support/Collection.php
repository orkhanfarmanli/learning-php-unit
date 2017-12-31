<?php

namespace App\Support;

use ArrayIterator;
use IteratorAggregate;
use JsonSerializable;

class Collection implements IteratorAggregate, JsonSerializable
{

    protected $items = [];

    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    /**
     * Get method
     */

    public function get()
    {
        return $this->items;
    }

    /**
     *
     * Collection Count
     *
     */

    public function count()
    {
        return count($this->items);
    }

    /**
     *
     * Get Iterator Aggregate
     *
     */

    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }

    /**
     *
     * Merge collections
     *
     */

    public function merge(Collection $collection)
    {
        return $this->add($collection->get());
    }

    /**
     *
     * Add items to collection
     *
     */

    public function add(array $items = [])
    {
        return $this->items = array_merge($this->items, $items);
    }

    /**
     *
     * Convert to json object
     *
     */

    public function toJson()
    {
        return json_encode($this->items);
    }

    /**
     *
     * Serialize to json
     *
     */

    public function jsonSerialize()
    {
        return $this->items;
    }
}
