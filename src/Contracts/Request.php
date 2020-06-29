<?php
/**
 * Copyright (c) 2016, VOOV LLC.
 * All rights reserved.
 * Written by Daniel Fekete.
 */

namespace Billingo\API\Connector\Contracts;

interface Request
{
    /**
     * GET.
     */
    public function get(string $uri, array $data = []): array;

    /**
     * POST.
     */
    public function post(string $uri, array $data = []): array;

    /**
     * PUT.
     */
    public function put(string $uri, array $data = []): array;

    /**
     * DELETE.
     */
    public function delete(string $uri, array $data = []): array;
}
