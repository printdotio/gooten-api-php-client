<?php
/**
 * SubmittedOrderList
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
 * SubmittedOrderList Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     gooten.api.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SubmittedOrderList implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'orders' => '\gooten.api.model\SearchSubmittedOrder[]',
        'total_pages' => 'int',
        'page' => 'int',
        'had_error' => 'bool'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'orders' => 'Orders',
        'total_pages' => 'TotalPages',
        'page' => 'Page',
        'had_error' => 'HadError'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'orders' => 'setOrders',
        'total_pages' => 'setTotalPages',
        'page' => 'setPage',
        'had_error' => 'setHadError'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'orders' => 'getOrders',
        'total_pages' => 'getTotalPages',
        'page' => 'getPage',
        'had_error' => 'getHadError'
    );
  
    
    /**
      * $orders 
      * @var \gooten.api.model\SearchSubmittedOrder[]
      */
    protected $orders;
    
    /**
      * $total_pages 
      * @var int
      */
    protected $total_pages;
    
    /**
      * $page 
      * @var int
      */
    protected $page;
    
    /**
      * $had_error 
      * @var bool
      */
    protected $had_error;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->orders = $data["orders"];
            $this->total_pages = $data["total_pages"];
            $this->page = $data["page"];
            $this->had_error = $data["had_error"];
        }
    }
    
    /**
     * Gets orders
     * @return \gooten.api.model\SearchSubmittedOrder[]
     */
    public function getOrders()
    {
        return $this->orders;
    }
  
    /**
     * Sets orders
     * @param \gooten.api.model\SearchSubmittedOrder[] $orders 
     * @return $this
     */
    public function setOrders($orders)
    {
        
        $this->orders = $orders;
        return $this;
    }
    
    /**
     * Gets total_pages
     * @return int
     */
    public function getTotalPages()
    {
        return $this->total_pages;
    }
  
    /**
     * Sets total_pages
     * @param int $total_pages 
     * @return $this
     */
    public function setTotalPages($total_pages)
    {
        
        $this->total_pages = $total_pages;
        return $this;
    }
    
    /**
     * Gets page
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }
  
    /**
     * Sets page
     * @param int $page 
     * @return $this
     */
    public function setPage($page)
    {
        
        $this->page = $page;
        return $this;
    }
    
    /**
     * Gets had_error
     * @return bool
     */
    public function getHadError()
    {
        return $this->had_error;
    }
  
    /**
     * Sets had_error
     * @param bool $had_error 
     * @return $this
     */
    public function setHadError($had_error)
    {
        
        $this->had_error = $had_error;
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
