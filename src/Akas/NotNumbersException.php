<?php

namespace Akas;

use Exception;

class NotNumbersException extends Exception
{
    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}";
    }
}
