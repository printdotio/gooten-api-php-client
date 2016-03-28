<?php


/**
 * ShipToAddress
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
 * ShipToAddress Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     gooten.api.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ShipToAddress implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'first_name' => 'string',
        'last_name' => 'string',
        'line1' => 'string',
        'line2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'country_code' => 'string',
        'postal_code' => 'string',
        'is_business_address' => 'bool',
        'phone' => 'string',
        'email' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'first_name' => 'FirstName',
        'last_name' => 'LastName',
        'line1' => 'Line1',
        'line2' => 'Line2',
        'city' => 'City',
        'state' => 'State',
        'country_code' => 'CountryCode',
        'postal_code' => 'PostalCode',
        'is_business_address' => 'IsBusinessAddress',
        'phone' => 'Phone',
        'email' => 'Email'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'line1' => 'setLine1',
        'line2' => 'setLine2',
        'city' => 'setCity',
        'state' => 'setState',
        'country_code' => 'setCountryCode',
        'postal_code' => 'setPostalCode',
        'is_business_address' => 'setIsBusinessAddress',
        'phone' => 'setPhone',
        'email' => 'setEmail'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'line1' => 'getLine1',
        'line2' => 'getLine2',
        'city' => 'getCity',
        'state' => 'getState',
        'country_code' => 'getCountryCode',
        'postal_code' => 'getPostalCode',
        'is_business_address' => 'getIsBusinessAddress',
        'phone' => 'getPhone',
        'email' => 'getEmail'
    );
  
    
    /**
      * $first_name 
      * @var string
      */
    protected $first_name;
    
    /**
      * $last_name 
      * @var string
      */
    protected $last_name;
    
    /**
      * $line1 
      * @var string
      */
    protected $line1;
    
    /**
      * $line2 
      * @var string
      */
    protected $line2;
    
    /**
      * $city 
      * @var string
      */
    protected $city;
    
    /**
      * $state 
      * @var string
      */
    protected $state;
    
    /**
      * $country_code 
      * @var string
      */
    protected $country_code;
    
    /**
      * $postal_code 
      * @var string
      */
    protected $postal_code;
    
    /**
      * $is_business_address 
      * @var bool
      */
    protected $is_business_address;
    
    /**
      * $phone 
      * @var string
      */
    protected $phone;
    
    /**
      * $email 
      * @var string
      */
    protected $email;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->first_name = $data["first_name"];
            $this->last_name = $data["last_name"];
            $this->line1 = $data["line1"];
            $this->line2 = $data["line2"];
            $this->city = $data["city"];
            $this->state = $data["state"];
            $this->country_code = $data["country_code"];
            $this->postal_code = $data["postal_code"];
            $this->is_business_address = $data["is_business_address"];
            $this->phone = $data["phone"];
            $this->email = $data["email"];
        }
    }
    
    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }
  
    /**
     * Sets first_name
     * @param string $first_name 
     * @return $this
     */
    public function setFirstName($first_name)
    {
        
        $this->first_name = $first_name;
        return $this;
    }
    
    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }
  
    /**
     * Sets last_name
     * @param string $last_name 
     * @return $this
     */
    public function setLastName($last_name)
    {
        
        $this->last_name = $last_name;
        return $this;
    }
    
    /**
     * Gets line1
     * @return string
     */
    public function getLine1()
    {
        return $this->line1;
    }
  
    /**
     * Sets line1
     * @param string $line1 
     * @return $this
     */
    public function setLine1($line1)
    {
        
        $this->line1 = $line1;
        return $this;
    }
    
    /**
     * Gets line2
     * @return string
     */
    public function getLine2()
    {
        return $this->line2;
    }
  
    /**
     * Sets line2
     * @param string $line2 
     * @return $this
     */
    public function setLine2($line2)
    {
        
        $this->line2 = $line2;
        return $this;
    }
    
    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
  
    /**
     * Sets city
     * @param string $city 
     * @return $this
     */
    public function setCity($city)
    {
        
        $this->city = $city;
        return $this;
    }
    
    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
  
    /**
     * Sets state
     * @param string $state 
     * @return $this
     */
    public function setState($state)
    {
        
        $this->state = $state;
        return $this;
    }
    
    /**
     * Gets country_code
     * @return string
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }
  
    /**
     * Sets country_code
     * @param string $country_code 
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        
        $this->country_code = $country_code;
        return $this;
    }
    
    /**
     * Gets postal_code
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }
  
    /**
     * Sets postal_code
     * @param string $postal_code 
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        
        $this->postal_code = $postal_code;
        return $this;
    }
    
    /**
     * Gets is_business_address
     * @return bool
     */
    public function getIsBusinessAddress()
    {
        return $this->is_business_address;
    }
  
    /**
     * Sets is_business_address
     * @param bool $is_business_address 
     * @return $this
     */
    public function setIsBusinessAddress($is_business_address)
    {
        
        $this->is_business_address = $is_business_address;
        return $this;
    }
    
    /**
     * Gets phone
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }
  
    /**
     * Sets phone
     * @param string $phone 
     * @return $this
     */
    public function setPhone($phone)
    {
        
        $this->phone = $phone;
        return $this;
    }
    
    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
  
    /**
     * Sets email
     * @param string $email 
     * @return $this
     */
    public function setEmail($email)
    {
        
        $this->email = $email;
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

