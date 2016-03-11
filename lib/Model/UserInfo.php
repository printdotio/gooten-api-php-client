<?php
/**
 * UserInfo
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
 * UserInfo Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserInfo implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'language_code' => 'string',
        'country_code' => 'string',
        'country_name' => 'string',
        'currency_name' => 'string',
        'currency_code' => 'string',
        'currency_format' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'language_code' => 'LanguageCode',
        'country_code' => 'CountryCode',
        'country_name' => 'CountryName',
        'currency_name' => 'CurrencyName',
        'currency_code' => 'CurrencyCode',
        'currency_format' => 'CurrencyFormat'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'language_code' => 'setLanguageCode',
        'country_code' => 'setCountryCode',
        'country_name' => 'setCountryName',
        'currency_name' => 'setCurrencyName',
        'currency_code' => 'setCurrencyCode',
        'currency_format' => 'setCurrencyFormat'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'language_code' => 'getLanguageCode',
        'country_code' => 'getCountryCode',
        'country_name' => 'getCountryName',
        'currency_name' => 'getCurrencyName',
        'currency_code' => 'getCurrencyCode',
        'currency_format' => 'getCurrencyFormat'
    );
  
    
    /**
      * $language_code 
      * @var string
      */
    protected $language_code;
    
    /**
      * $country_code 
      * @var string
      */
    protected $country_code;
    
    /**
      * $country_name 
      * @var string
      */
    protected $country_name;
    
    /**
      * $currency_name 
      * @var string
      */
    protected $currency_name;
    
    /**
      * $currency_code 
      * @var string
      */
    protected $currency_code;
    
    /**
      * $currency_format 
      * @var string
      */
    protected $currency_format;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->language_code = $data["language_code"];
            $this->country_code = $data["country_code"];
            $this->country_name = $data["country_name"];
            $this->currency_name = $data["currency_name"];
            $this->currency_code = $data["currency_code"];
            $this->currency_format = $data["currency_format"];
        }
    }
    
    /**
     * Gets language_code
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }
  
    /**
     * Sets language_code
     * @param string $language_code 
     * @return $this
     */
    public function setLanguageCode($language_code)
    {
        
        $this->language_code = $language_code;
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
     * Gets country_name
     * @return string
     */
    public function getCountryName()
    {
        return $this->country_name;
    }
  
    /**
     * Sets country_name
     * @param string $country_name 
     * @return $this
     */
    public function setCountryName($country_name)
    {
        
        $this->country_name = $country_name;
        return $this;
    }
    
    /**
     * Gets currency_name
     * @return string
     */
    public function getCurrencyName()
    {
        return $this->currency_name;
    }
  
    /**
     * Sets currency_name
     * @param string $currency_name 
     * @return $this
     */
    public function setCurrencyName($currency_name)
    {
        
        $this->currency_name = $currency_name;
        return $this;
    }
    
    /**
     * Gets currency_code
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }
  
    /**
     * Sets currency_code
     * @param string $currency_code 
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        
        $this->currency_code = $currency_code;
        return $this;
    }
    
    /**
     * Gets currency_format
     * @return string
     */
    public function getCurrencyFormat()
    {
        return $this->currency_format;
    }
  
    /**
     * Sets currency_format
     * @param string $currency_format 
     * @return $this
     */
    public function setCurrencyFormat($currency_format)
    {
        
        $this->currency_format = $currency_format;
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