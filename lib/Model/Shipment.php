<?php
/**
 * Shipment
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
 * Shipment Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Shipment implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'tracking_number' => 'string',
        'tracking_url' => 'string',
        'ship_carrier_name' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'tracking_number' => 'TrackingNumber',
        'tracking_url' => 'TrackingUrl',
        'ship_carrier_name' => 'ShipCarrierName'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'tracking_number' => 'setTrackingNumber',
        'tracking_url' => 'setTrackingUrl',
        'ship_carrier_name' => 'setShipCarrierName'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'tracking_number' => 'getTrackingNumber',
        'tracking_url' => 'getTrackingUrl',
        'ship_carrier_name' => 'getShipCarrierName'
    );
  
    
    /**
      * $tracking_number 
      * @var string
      */
    protected $tracking_number;
    
    /**
      * $tracking_url 
      * @var string
      */
    protected $tracking_url;
    
    /**
      * $ship_carrier_name 
      * @var string
      */
    protected $ship_carrier_name;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->tracking_number = $data["tracking_number"];
            $this->tracking_url = $data["tracking_url"];
            $this->ship_carrier_name = $data["ship_carrier_name"];
        }
    }
    
    /**
     * Gets tracking_number
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->tracking_number;
    }
  
    /**
     * Sets tracking_number
     * @param string $tracking_number 
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        
        $this->tracking_number = $tracking_number;
        return $this;
    }
    
    /**
     * Gets tracking_url
     * @return string
     */
    public function getTrackingUrl()
    {
        return $this->tracking_url;
    }
  
    /**
     * Sets tracking_url
     * @param string $tracking_url 
     * @return $this
     */
    public function setTrackingUrl($tracking_url)
    {
        
        $this->tracking_url = $tracking_url;
        return $this;
    }
    
    /**
     * Gets ship_carrier_name
     * @return string
     */
    public function getShipCarrierName()
    {
        return $this->ship_carrier_name;
    }
  
    /**
     * Sets ship_carrier_name
     * @param string $ship_carrier_name 
     * @return $this
     */
    public function setShipCarrierName($ship_carrier_name)
    {
        
        $this->ship_carrier_name = $ship_carrier_name;
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
