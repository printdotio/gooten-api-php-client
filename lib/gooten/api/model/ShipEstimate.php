<?php
/**
 * ShipEstimate
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
 * ShipEstimate Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     gooten.api.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ShipEstimate implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'min_price' => '\gooten.api.model\ShipPrice',
        'max_price' => '\gooten.api.model\ShipPrice',
        'vendor_country_code' => 'string',
        'can_ship_expedited' => 'bool',
        'est_ship_days' => 'int'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'min_price' => 'MinPrice',
        'max_price' => 'MaxPrice',
        'vendor_country_code' => 'VendorCountryCode',
        'can_ship_expedited' => 'CanShipExpedited',
        'est_ship_days' => 'EstShipDays'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'min_price' => 'setMinPrice',
        'max_price' => 'setMaxPrice',
        'vendor_country_code' => 'setVendorCountryCode',
        'can_ship_expedited' => 'setCanShipExpedited',
        'est_ship_days' => 'setEstShipDays'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'min_price' => 'getMinPrice',
        'max_price' => 'getMaxPrice',
        'vendor_country_code' => 'getVendorCountryCode',
        'can_ship_expedited' => 'getCanShipExpedited',
        'est_ship_days' => 'getEstShipDays'
    );
  
    
    /**
      * $min_price 
      * @var \gooten.api.model\ShipPrice
      */
    protected $min_price;
    
    /**
      * $max_price 
      * @var \gooten.api.model\ShipPrice
      */
    protected $max_price;
    
    /**
      * $vendor_country_code 
      * @var string
      */
    protected $vendor_country_code;
    
    /**
      * $can_ship_expedited 
      * @var bool
      */
    protected $can_ship_expedited;
    
    /**
      * $est_ship_days 
      * @var int
      */
    protected $est_ship_days;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->min_price = $data["min_price"];
            $this->max_price = $data["max_price"];
            $this->vendor_country_code = $data["vendor_country_code"];
            $this->can_ship_expedited = $data["can_ship_expedited"];
            $this->est_ship_days = $data["est_ship_days"];
        }
    }
    
    /**
     * Gets min_price
     * @return \gooten.api.model\ShipPrice
     */
    public function getMinPrice()
    {
        return $this->min_price;
    }
  
    /**
     * Sets min_price
     * @param \gooten.api.model\ShipPrice $min_price 
     * @return $this
     */
    public function setMinPrice($min_price)
    {
        
        $this->min_price = $min_price;
        return $this;
    }
    
    /**
     * Gets max_price
     * @return \gooten.api.model\ShipPrice
     */
    public function getMaxPrice()
    {
        return $this->max_price;
    }
  
    /**
     * Sets max_price
     * @param \gooten.api.model\ShipPrice $max_price 
     * @return $this
     */
    public function setMaxPrice($max_price)
    {
        
        $this->max_price = $max_price;
        return $this;
    }
    
    /**
     * Gets vendor_country_code
     * @return string
     */
    public function getVendorCountryCode()
    {
        return $this->vendor_country_code;
    }
  
    /**
     * Sets vendor_country_code
     * @param string $vendor_country_code 
     * @return $this
     */
    public function setVendorCountryCode($vendor_country_code)
    {
        
        $this->vendor_country_code = $vendor_country_code;
        return $this;
    }
    
    /**
     * Gets can_ship_expedited
     * @return bool
     */
    public function getCanShipExpedited()
    {
        return $this->can_ship_expedited;
    }
  
    /**
     * Sets can_ship_expedited
     * @param bool $can_ship_expedited 
     * @return $this
     */
    public function setCanShipExpedited($can_ship_expedited)
    {
        
        $this->can_ship_expedited = $can_ship_expedited;
        return $this;
    }
    
    /**
     * Gets est_ship_days
     * @return int
     */
    public function getEstShipDays()
    {
        return $this->est_ship_days;
    }
  
    /**
     * Sets est_ship_days
     * @param int $est_ship_days 
     * @return $this
     */
    public function setEstShipDays($est_ship_days)
    {
        
        $this->est_ship_days = $est_ship_days;
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
