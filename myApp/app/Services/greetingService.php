<?php

namespace App\Services;

class greetingService
{
    /**
     * Create a new class instance.
     */
      public function greet($name)
    {
        return "Hello " . $name;
    }
}
