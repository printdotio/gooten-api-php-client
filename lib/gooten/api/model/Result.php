<?php
/**
 * Result
 *
 * PHP version 5
 *
 * @category Class
 * @package  gooten.api.client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace gooten.api.model;

use \ArrayAccess;
/**
 * Result Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     gooten.api.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Result implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'is_valid' => 'bool',
        'reason' => 'string',
        'score' => 'int',
        'proposed_address' => '\gooten.api.model\Address'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'is_valid' => 'IsValid',
        'reason' => 'Reason',
        'score' => 'Score',
        'proposed_address' => 'ProposedAddress'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'is_valid' => 'setIsValid',
        'reason' => 'setReason',
        'score' => 'setScore',
        'proposed_address' => 'setProposedAddress'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'is_valid' => 'getIsValid',
        'reason' => 'getReason',
        'score' => 'getScore',
        'proposed_address' => 'getProposedAddress'
    );
  
    
    /**
      * $is_valid 
      * @var bool
      */
    protected $is_valid;
    
    /**
      * $reason 
      * @var string
      */
    protected $reason;
    
    /**
      * $score 
      * @var int
      */
    protected $score;
    
    /**
      * $proposed_address 
      * @var \gooten.api.model\Address
      */
    protected $proposed_address;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->is_valid = $data["is_valid"];
            $this->reason = $data["reason"];
            $this->score = $data["score"];
            $this->proposed_address = $data["proposed_address"];
        }
    }
    
    /**
     * Gets is_valid
     * @return bool
     */
    public function getIsValid()
    {
        return $this->is_valid;
    }
  
    /**
     * Sets is_valid
     * @param bool $is_valid 
     * @return $this
     */
    public function setIsValid($is_valid)
    {
        
        $this->is_valid = $is_valid;
        return $this;
    }
    
    /**
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }
  
    /**
     * Sets reason
     * @param string $reason 
     * @return $this
     */
    public function setReason($reason)
    {
        
        $this->reason = $reason;
        return $this;
    }
    
    /**
     * Gets score
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }
  
    /**
     * Sets score
     * @param int $score 
     * @return $this
     */
    public function setScore($score)
    {
        
        $this->score = $score;
        return $this;
    }
    
    /**
     * Gets proposed_address
     * @return \gooten.api.model\Address
     */
    public function getProposedAddress()
    {
        return $this->proposed_address;
    }
  
    /**
     * Sets proposed_address
     * @param \gooten.api.model\Address $proposed_address 
     * @return $this
     */
    public function setProposedAddress($proposed_address)
    {
        
        $this->proposed_address = $proposed_address;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\gooten.api.client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\gooten.api.client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
