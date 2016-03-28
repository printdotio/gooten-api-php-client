<?php
/**
 * ProductPriceInfo
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
 * ProductPriceInfo Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     gooten.api.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductPriceInfo implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'price' => 'int',
        'currency_code' => 'string',
        'formatted_price' => 'string',
        'currency_format' => 'string',
        'currency_digits' => 'int'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'price' => 'Price',
        'currency_code' => 'CurrencyCode',
        'formatted_price' => 'FormattedPrice',
        'currency_format' => 'CurrencyFormat',
        'currency_digits' => 'CurrencyDigits'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'price' => 'setPrice',
        'currency_code' => 'setCurrencyCode',
        'formatted_price' => 'setFormattedPrice',
        'currency_format' => 'setCurrencyFormat',
        'currency_digits' => 'setCurrencyDigits'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'price' => 'getPrice',
        'currency_code' => 'getCurrencyCode',
        'formatted_price' => 'getFormattedPrice',
        'currency_format' => 'getCurrencyFormat',
        'currency_digits' => 'getCurrencyDigits'
    );
  
    
    /**
      * $price 
      * @var int
      */
    protected $price;
    
    /**
      * $currency_code 
      * @var string
      */
    protected $currency_code;
    
    /**
      * $formatted_price 
      * @var string
      */
    protected $formatted_price;
    
    /**
      * $currency_format 
      * @var string
      */
    protected $currency_format;
    
    /**
      * $currency_digits 
      * @var int
      */
    protected $currency_digits;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->price = $data["price"];
            $this->currency_code = $data["currency_code"];
            $this->formatted_price = $data["formatted_price"];
            $this->currency_format = $data["currency_format"];
            $this->currency_digits = $data["currency_digits"];
        }
    }
    
    /**
     * Gets price
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }
  
    /**
     * Sets price
     * @param int $price 
     * @return $this
     */
    public function setPrice($price)
    {
        
        $this->price = $price;
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
     * Gets formatted_price
     * @return string
     */
    public function getFormattedPrice()
    {
        return $this->formatted_price;
    }
  
    /**
     * Sets formatted_price
     * @param string $formatted_price 
     * @return $this
     */
    public function setFormattedPrice($formatted_price)
    {
        
        $this->formatted_price = $formatted_price;
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
     * Gets currency_digits
     * @return int
     */
    public function getCurrencyDigits()
    {
        return $this->currency_digits;
    }
  
    /**
     * Sets currency_digits
     * @param int $currency_digits 
     * @return $this
     */
    public function setCurrencyDigits($currency_digits)
    {
        
        $this->currency_digits = $currency_digits;
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
