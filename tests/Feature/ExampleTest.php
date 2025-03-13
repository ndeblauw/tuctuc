<?php

use Mockery\MockInterface;

it('returns a successful response', function () {
    Http::fake(['https://api.api-ninjas.com/v1/quotes' => Http::response(json_encode([['quote' => 'No quote available', 'author' => 'nobody', 'category' => 'empty']]), 200),]);

    $response = $this->get('/');

    $response->assertStatus(200);
});
