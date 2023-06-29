<?php

namespace Programic\LaravelCarImage;

use Illuminate\Support\Facades\Http;

class CarImage
{
    protected array $dataPoints = [];

    public function make(string $value): self
    {
        $this->dataPoints['make'] = $value;

        return $this;
    }

    public function where(string | array $key, string $value = null): self
    {
        if (is_array($key)) {
            $this->dataPoints = array_merge($this->dataPoints, $key);

            return $this;
        }

        $this->dataPoints[$key] = $value;

        return $this;
    }

    public function find(): CarImageResponse
    {
        $customerCode = config('services.imagin.customer_code');

        return new CarImageResponse(
            Http::get("https://cdn.imagin.studio/getImage?customer={$customerCode}&" . http_build_query($this->dataPoints))
        );
    }
}
