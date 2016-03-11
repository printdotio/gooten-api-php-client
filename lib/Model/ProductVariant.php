<?php
/**
 * ProductVariant
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
 * ProductVariant Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductVariant implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'sku' => 'string',
        'max_images' => 'int',
        'has_templates' => 'bool',
        'options' => '\Swagger\Client\Model\ProductOption[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'sku' => 'Sku',
        'max_images' => 'MaxImages',
        'has_templates' => 'HasTemplates',
        'options' => 'Options'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'sku' => 'setSku',
        'max_images' => 'setMaxImages',
        'has_templates' => 'setHasTemplates',
        'options' => 'setOptions'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'sku' => 'getSku',
        'max_images' => 'getMaxImages',
        'has_templates' => 'getHasTemplates',
        'options' => 'getOptions'
    );
  
    
    /**
      * $sku 
      * @var string
      */
    protected $sku;
    
    /**
      * $max_images 
      * @var int
      */
    protected $max_images;
    
    /**
      * $has_templates 
      * @var bool
      */
    protected $has_templates;
    
    /**
      * $options 
      * @var \Swagger\Client\Model\ProductOption[]
      */
    protected $options;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->sku = $data["sku"];
            $this->max_images = $data["max_images"];
            $this->has_templates = $data["has_templates"];
            $this->options = $data["options"];
        }
    }
    
    /**
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }
  
    /**
     * Sets sku
     * @param string $sku 
     * @return $this
     */
    public function setSku($sku)
    {
        
        $this->sku = $sku;
        return $this;
    }
    
    /**
     * Gets max_images
     * @return int
     */
    public function getMaxImages()
    {
        return $this->max_images;
    }
  
    /**
     * Sets max_images
     * @param int $max_images 
     * @return $this
     */
    public function setMaxImages($max_images)
    {
        
        $this->max_images = $max_images;
        return $this;
    }
    
    /**
     * Gets has_templates
     * @return bool
     */
    public function getHasTemplates()
    {
        return $this->has_templates;
    }
  
    /**
     * Sets has_templates
     * @param bool $has_templates 
     * @return $this
     */
    public function setHasTemplates($has_templates)
    {
        
        $this->has_templates = $has_templates;
        return $this;
    }
    
    /**
     * Gets options
     * @return \Swagger\Client\Model\ProductOption[]
     */
    public function getOptions()
    {
        return $this->options;
    }
  
    /**
     * Sets options
     * @param \Swagger\Client\Model\ProductOption[] $options 
     * @return $this
     */
    public function setOptions($options)
    {
        
        $this->options = $options;
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
