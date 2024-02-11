<?php

namespace Osiom\Pterodactyl\Exceptions;

class InvalidApiKeyException extends \Exception
{
    public function __construct()
    {
        parent::__construct('An invalid API key was provided.');
    }
}
