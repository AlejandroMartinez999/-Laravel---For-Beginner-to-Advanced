<?php
namespace App\Services;

use Mockery\Matcher\Type;

class SimpleService
{
    public function log(string $string)
    {
        logger($string);
    }

    }


