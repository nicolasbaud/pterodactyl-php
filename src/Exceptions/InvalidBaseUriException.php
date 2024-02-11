<?php

namespace Osiom\Pterodactyl\Exceptions;

class InvalidBaseUriException extends \Exception
{
    public function __construct()
    {
        parent::__construct('An invalid API key was provided.');
    }
}
