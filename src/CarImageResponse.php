<?php

namespace Programic\LaravelCarImage;

use Illuminate\Http\Client\Response;

class CarImageResponse
{
    public function __construct(
        private readonly Response $response,
    ) {

    }

    public function success(): bool
    {
        return $this->response->successful();
    }

    public function body(): string
    {
        return $this->response->body();
    }

    public function image(): string
    {
        return $this->response->body();
    }
}
