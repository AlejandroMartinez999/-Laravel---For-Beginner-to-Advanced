<?php

namespace App\Services;

class PaymentGateway
{
    protected $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    // ...existing code...
}
