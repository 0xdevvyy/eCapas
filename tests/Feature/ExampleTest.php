<?php

test('returns a successful response', function () {
    $response = $this->get(route('landing.home'));

    $response->assertOk();
});
