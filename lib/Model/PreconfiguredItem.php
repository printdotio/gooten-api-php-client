<?php
/**
 * PreconfiguredItem
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
 * PreconfiguredItem Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PreconfiguredItem implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'product_id' => 'int',
        'product_variant_sku' => 'string',
        'preconfigurations' => '\Swagger\Client\Model\Preconfiguration[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'product_id' => 'ProductId',
        'product_variant_sku' => 'ProductVariantSku',
        'preconfigurations' => 'Preconfigurations'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'product_id' => 'setProductId',
        'product_variant_sku' => 'setProductVariantSku',
        'preconfigurations' => 'setPreconfigurations'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'product_id' => 'getProductId',
        'product_variant_sku' => 'getProductVariantSku',
        'preconfigurations' => 'getPreconfigurations'
    );
  
    
    /**
      * $product_id The ID of the product this item references.
      * @var int
      */
    protected $product_id;
    
    /**
      * $product_variant_sku The sku of the product variant this item references.
      * @var string
      */
    protected $product_variant_sku;
    
    /**
      * $preconfigurations 
      * @var \Swagger\Client\Model\Preconfiguration[]
      */
    protected $preconfigurations;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->product_id = $data["product_id"];
            $this->product_variant_sku = $data["product_variant_sku"];
            $this->preconfigurations = $data["preconfigurations"];
        }
    }
    
    /**
     * Gets product_id
     * @return int
     */
    public function getProductId()
    {
        return $this->product_id;
    }
  
    /**
     * Sets product_id
     * @param int $product_id The ID of the product this item references.
     * @return $this
     */
    public function setProductId($product_id)
    {
        
        $this->product_id = $product_id;
        return $this;
    }
    
    /**
     * Gets product_variant_sku
     * @return string
     */
    public function getProductVariantSku()
    {
        return $this->product_variant_sku;
    }
  
    /**
     * Sets product_variant_sku
     * @param string $product_variant_sku The sku of the product variant this item references.
     * @return $this
     */
    public function setProductVariantSku($product_variant_sku)
    {
        
        $this->product_variant_sku = $product_variant_sku;
        return $this;
    }
    
    /**
     * Gets preconfigurations
     * @return \Swagger\Client\Model\Preconfiguration[]
     */
    public function getPreconfigurations()
    {
        return $this->preconfigurations;
    }
  
    /**
     * Sets preconfigurations
     * @param \Swagger\Client\Model\Preconfiguration[] $preconfigurations 
     * @return $this
     */
    public function setPreconfigurations($preconfigurations)
    {
        
        $this->preconfigurations = $preconfigurations;
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