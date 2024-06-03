<?php

namespace Opencad\App\Helpers\Exceptions\DB;

use Opencad\App\Helpers\Exceptions\BaseException;

class DBConnectionErrorException extends BaseException
{
    public function __construct($message = "", $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
