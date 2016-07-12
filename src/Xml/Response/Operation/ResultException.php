<?php

/*
 * Copyright 2016 Intacct Corporation.
 * 
 * Licensed under the Apache License, Version 2.0 (the "License"). You may not
 * use this file except in compliance with the License. You may obtain a copy 
 * of the License at
 * 
 * http://www.apache.org/licenses/LICENSE-2.0
 * 
 * or in the "LICENSE" file accompanying this file. This file is distributed on 
 * an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either 
 * express or implied. See the License for the specific language governing 
 * permissions and limitations under the License.
 */

namespace Intacct\Xml\Response\Operation;

use Intacct\Xml\Response\OperationException;
use Exception;

class ResultException extends OperationException
{

    /**
     *
     * @param string $message
     * @param array $errors
     * @param int $code
     * @param Exception $previous
     * @todo add controlid, status, function, etc
     */
    public function __construct($message, array $errors = [], $code = 0, $previous = null)
    {
        parent::__construct($message, $errors, $code, $previous);
    }
}
