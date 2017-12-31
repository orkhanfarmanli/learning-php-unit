<?php

use App\Support\Collection;
use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
    /**  @test   */
    public function empty_instantiated_collection_return_no_items()
    {
        $collection = new Collection;
        $this->assertEmpty($collection->get());
    }

    /** @test */
    public function count_is_correct_for_items_passed_in()
    {
        $collection = new Collection(['one', 'two', 'three']);

        $this->assertEquals(3, $collection->count());
    }

    /** @test */
    public function items_returned_in_matches_items_passed_in()
    {
        $collection = new Collection(['one', 'two', 'three', 'four']);

        $this->assertCount(4, $collection->get());
    }

    /** @test */
    public function if_collection_is_instance_of_iterator_aggregate()
    {
        $collection = new Collection;

        $this->assertInstanceOf(IteratorAggregate::class, $collection);
    }

    /** @test */
    public function collection_can_be_iterated()
    {
        $collection = new Collection(['one', 'two', 'three', 'four']);
        $items = [];

        foreach ($collection as $item) {
            $items[] = $item;
        }

        $this->assertCount(4, $items);
        $this->assertInstanceOf(ArrayIterator::class, $collection->getIterator());
    }

    /** @test */
    public function can_add_to_existing_collection()
    {
        $collection = new Collection(['one', 'two']);
        $collection->add(['three']);

        $this->assertEquals(3, $collection->count());
        $this->assertCount(3, $collection->get());
    }

    /** @test */
    public function collection_can_be_merged_with_another_collection()
    {
        $collection1 = new Collection(['one', 'two']);
        $collection2 = new Collection(['three', 'four', 'five']);

        $collection1->merge($collection2);

        $this->assertCount(5, $collection1->get());
        $this->assertEquals(5, $collection1->count());
    }

    /** @test */
    public function return_json_encoded_items()
    {
        $collection = new Collection([
            ['username' => 'Mans'],
            ['username' => 'Billy'],
        ]);

        $this->assertInternalType('string', $collection->toJson());
        $this->assertEquals('[{"username":"Mans"},{"username":"Billy"}]', $collection->toJson());
    }

    /** @test */
    public function json_encoding_a_collection_object_returns_json()
    {
        $collection = new Collection([
            ['username' => 'Mans'],
            ['username' => 'Billy'],
        ]);

        $encoded = json_encode($collection);

        $this->assertInternalType('string', $encoded);
        $this->assertEquals('[{"username":"Mans"},{"username":"Billy"}]', $encoded);

    }

}
