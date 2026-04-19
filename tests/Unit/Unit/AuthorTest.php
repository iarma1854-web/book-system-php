<?php

namespace Tests\Unit\Unit;

use PHPUnit\Framework\TestCase;

class AuthorTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_author_returns_full_name()
{
    $author = new \App\Models\Author([
        'name' => 'Stephen',
        'surname' => 'Curry'
    ]);

    $this->assertEquals('Stephen Curry', $author->fullName());
}
}
