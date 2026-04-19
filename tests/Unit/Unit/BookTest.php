<?php

namespace Tests\Unit\Unit;

use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
    /**
     * A basic unit test example.
     */
   public function test_book_has_short_title_attribute()
{
    $book = new \App\Models\Book([
        'title' => 'Shadow Slave: The Forgotten Shore',
        'short_title' => 'Shadow Slave'
    ]);

    $this->assertEquals('Shadow Slave', $book->short_title);
}
}
