<?php
/**
 * Address
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * Address Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Address implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'city' => 'string',
        'country_code' => 'string',
        'postal_code' => 'string',
        'state_or_province_code' => 'string',
        'street_lines' => 'string[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'city' => 'City',
        'country_code' => 'CountryCode',
        'postal_code' => 'PostalCode',
        'state_or_province_code' => 'StateOrProvinceCode',
        'street_lines' => 'StreetLines'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'city' => 'setCity',
        'country_code' => 'setCountryCode',
        'postal_code' => 'setPostalCode',
        'state_or_province_code' => 'setStateOrProvinceCode',
        'street_lines' => 'setStreetLines'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'city' => 'getCity',
        'country_code' => 'getCountryCode',
        'postal_code' => 'getPostalCode',
        'state_or_province_code' => 'getStateOrProvinceCode',
        'street_lines' => 'getStreetLines'
    );
  
    
    /**
      * $city 
      * @var string
      */
    protected $city;
    
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
      * $state_or_province_code 
      * @var string
      */
    protected $state_or_province_code;
    
    /**
      * $street_lines 
      * @var string[]
      */
    protected $street_lines;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->city = $data["city"];
            $this->country_code = $data["country_code"];
            $this->postal_code = $data["postal_code"];
            $this->state_or_province_code = $data["state_or_province_code"];
            $this->street_lines = $data["street_lines"];
        }
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
     * Gets state_or_province_code
     * @return string
     */
    public function getStateOrProvinceCode()
    {
        return $this->state_or_province_code;
    }
  
    /**
     * Sets state_or_province_code
     * @param string $state_or_province_code 
     * @return $this
     */
    public function setStateOrProvinceCode($state_or_province_code)
    {
        
        $this->state_or_province_code = $state_or_province_code;
        return $this;
    }
    
    /**
     * Gets street_lines
     * @return string[]
     */
    public function getStreetLines()
    {
        return $this->street_lines;
    }
  
    /**
     * Sets street_lines
     * @param string[] $street_lines 
     * @return $this
     */
    public function setStreetLines($street_lines)
    {
        
        $this->street_lines = $street_lines;
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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
