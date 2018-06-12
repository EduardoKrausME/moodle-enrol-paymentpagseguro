<?php

/**
 * 2007-2014 [PagSeguro Internet Ltda.]
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @author    PagSeguro Internet Ltda.
 * @copyright 2007-2014 PagSeguro Internet Ltda.
 * @license   http://www.apache.org/licenses/LICENSE-2.0
 */

/**
 * Represents a PagSeguro web service error
 * @see PagSeguroServiceException
 */

defined('MOODLE_INTERNAL') || die();

class PagSeguroError {

    /**
     * Error code
     */
    private $code;

    /**
     * Error description
     */
    private $message;

    /**
     * Initializes a new instance of the PagSeguroError class
     *
     * @param String $code
     * @param String $message
     */
    public function __construct($code, $message) {
        $this->setCode($code);
        $this->setMessage($message);
    }

    /**
     * @return integer|string the code
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Sets the code
     * @param String $code
     */
    public function setCode($code) {
        $this->code = $code;
    }

    /**
     * @return String the error description
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * Sets the error description
     * @param String $message
     */
    public function setMessage($message) {
        $this->message = $message;
    }
}