<?php

it('returns a successful response', function () {
    // If your / route is protected by middleware (e.g., authentication),
    // your test might fail with a 403 Forbidden or 302 Redirect response.
    // Using withoutMiddleware() will disable middleware and allow the test to proceed without restrictions.
    $response = $this->withoutMiddleware()->get('/');

    $response->assertStatus(200);
});
