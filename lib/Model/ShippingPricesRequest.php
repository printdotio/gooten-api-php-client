<?php
/**
 * ShippingPricesRequest
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
 * ShippingPricesRequest Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ShippingPricesRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'ship_to_postal_code' => 'string',
        'ship_to_country' => 'string',
        'ship_to_state' => 'string',
        'currency_code' => 'string',
        'language_code' => 'string',
        'items' => '\Swagger\Client\Model\SkuQuantityPair[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'ship_to_postal_code' => 'ShipToPostalCode',
        'ship_to_country' => 'ShipToCountry',
        'ship_to_state' => 'ShipToState',
        'currency_code' => 'CurrencyCode',
        'language_code' => 'LanguageCode',
        'items' => 'Items'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'ship_to_postal_code' => 'setShipToPostalCode',
        'ship_to_country' => 'setShipToCountry',
        'ship_to_state' => 'setShipToState',
        'currency_code' => 'setCurrencyCode',
        'language_code' => 'setLanguageCode',
        'items' => 'setItems'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'ship_to_postal_code' => 'getShipToPostalCode',
        'ship_to_country' => 'getShipToCountry',
        'ship_to_state' => 'getShipToState',
        'currency_code' => 'getCurrencyCode',
        'language_code' => 'getLanguageCode',
        'items' => 'getItems'
    );
  
    
    /**
      * $ship_to_postal_code 
      * @var string
      */
    protected $ship_to_postal_code;
    
    /**
      * $ship_to_country 
      * @var string
      */
    protected $ship_to_country;
    
    /**
      * $ship_to_state 
      * @var string
      */
    protected $ship_to_state;
    
    /**
      * $currency_code 
      * @var string
      */
    protected $currency_code;
    
    /**
      * $language_code 
      * @var string
      */
    protected $language_code;
    
    /**
      * $items 
      * @var \Swagger\Client\Model\SkuQuantityPair[]
      */
    protected $items;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->ship_to_postal_code = $data["ship_to_postal_code"];
            $this->ship_to_country = $data["ship_to_country"];
            $this->ship_to_state = $data["ship_to_state"];
            $this->currency_code = $data["currency_code"];
            $this->language_code = $data["language_code"];
            $this->items = $data["items"];
        }
    }
    
    /**
     * Gets ship_to_postal_code
     * @return string
     */
    public function getShipToPostalCode()
    {
        return $this->ship_to_postal_code;
    }
  
    /**
     * Sets ship_to_postal_code
     * @param string $ship_to_postal_code 
     * @return $this
     */
    public function setShipToPostalCode($ship_to_postal_code)
    {
        
        $this->ship_to_postal_code = $ship_to_postal_code;
        return $this;
    }
    
    /**
     * Gets ship_to_country
     * @return string
     */
    public function getShipToCountry()
    {
        return $this->ship_to_country;
    }
  
    /**
     * Sets ship_to_country
     * @param string $ship_to_country 
     * @return $this
     */
    public function setShipToCountry($ship_to_country)
    {
        
        $this->ship_to_country = $ship_to_country;
        return $this;
    }
    
    /**
     * Gets ship_to_state
     * @return string
     */
    public function getShipToState()
    {
        return $this->ship_to_state;
    }
  
    /**
     * Sets ship_to_state
     * @param string $ship_to_state 
     * @return $this
     */
    public function setShipToState($ship_to_state)
    {
        
        $this->ship_to_state = $ship_to_state;
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
     * Gets items
     * @return \Swagger\Client\Model\SkuQuantityPair[]
     */
    public function getItems()
    {
        return $this->items;
    }
  
    /**
     * Sets items
     * @param \Swagger\Client\Model\SkuQuantityPair[] $items 
     * @return $this
     */
    public function setItems($items)
    {
        
        $this->items = $items;
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
