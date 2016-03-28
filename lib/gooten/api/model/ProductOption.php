<?php
/**
 * ProductOption
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
 * ProductOption Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     gooten.api.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductOption implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'option_id' => 'string',
        'value_id' => 'string',
        'name' => 'string',
        'value' => 'string',
        'image_url' => 'string',
        'image_type' => 'string',
        'rgba_color' => 'string',
        'cm_value' => 'string',
        'sort_value' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'option_id' => 'OptionId',
        'value_id' => 'ValueId',
        'name' => 'Name',
        'value' => 'Value',
        'image_url' => 'ImageUrl',
        'image_type' => 'ImageType',
        'rgba_color' => 'RgbaColor',
        'cm_value' => 'CmValue',
        'sort_value' => 'SortValue'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'option_id' => 'setOptionId',
        'value_id' => 'setValueId',
        'name' => 'setName',
        'value' => 'setValue',
        'image_url' => 'setImageUrl',
        'image_type' => 'setImageType',
        'rgba_color' => 'setRgbaColor',
        'cm_value' => 'setCmValue',
        'sort_value' => 'setSortValue'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'option_id' => 'getOptionId',
        'value_id' => 'getValueId',
        'name' => 'getName',
        'value' => 'getValue',
        'image_url' => 'getImageUrl',
        'image_type' => 'getImageType',
        'rgba_color' => 'getRgbaColor',
        'cm_value' => 'getCmValue',
        'sort_value' => 'getSortValue'
    );
  
    
    /**
      * $option_id 
      * @var string
      */
    protected $option_id;
    
    /**
      * $value_id 
      * @var string
      */
    protected $value_id;
    
    /**
      * $name 
      * @var string
      */
    protected $name;
    
    /**
      * $value 
      * @var string
      */
    protected $value;
    
    /**
      * $image_url 
      * @var string
      */
    protected $image_url;
    
    /**
      * $image_type 
      * @var string
      */
    protected $image_type;
    
    /**
      * $rgba_color 
      * @var string
      */
    protected $rgba_color;
    
    /**
      * $cm_value 
      * @var string
      */
    protected $cm_value;
    
    /**
      * $sort_value 
      * @var string
      */
    protected $sort_value;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->option_id = $data["option_id"];
            $this->value_id = $data["value_id"];
            $this->name = $data["name"];
            $this->value = $data["value"];
            $this->image_url = $data["image_url"];
            $this->image_type = $data["image_type"];
            $this->rgba_color = $data["rgba_color"];
            $this->cm_value = $data["cm_value"];
            $this->sort_value = $data["sort_value"];
        }
    }
    
    /**
     * Gets option_id
     * @return string
     */
    public function getOptionId()
    {
        return $this->option_id;
    }
  
    /**
     * Sets option_id
     * @param string $option_id 
     * @return $this
     */
    public function setOptionId($option_id)
    {
        
        $this->option_id = $option_id;
        return $this;
    }
    
    /**
     * Gets value_id
     * @return string
     */
    public function getValueId()
    {
        return $this->value_id;
    }
  
    /**
     * Sets value_id
     * @param string $value_id 
     * @return $this
     */
    public function setValueId($value_id)
    {
        
        $this->value_id = $value_id;
        return $this;
    }
    
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name 
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets value
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
  
    /**
     * Sets value
     * @param string $value 
     * @return $this
     */
    public function setValue($value)
    {
        
        $this->value = $value;
        return $this;
    }
    
    /**
     * Gets image_url
     * @return string
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }
  
    /**
     * Sets image_url
     * @param string $image_url 
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        
        $this->image_url = $image_url;
        return $this;
    }
    
    /**
     * Gets image_type
     * @return string
     */
    public function getImageType()
    {
        return $this->image_type;
    }
  
    /**
     * Sets image_type
     * @param string $image_type 
     * @return $this
     */
    public function setImageType($image_type)
    {
        
        $this->image_type = $image_type;
        return $this;
    }
    
    /**
     * Gets rgba_color
     * @return string
     */
    public function getRgbaColor()
    {
        return $this->rgba_color;
    }
  
    /**
     * Sets rgba_color
     * @param string $rgba_color 
     * @return $this
     */
    public function setRgbaColor($rgba_color)
    {
        
        $this->rgba_color = $rgba_color;
        return $this;
    }
    
    /**
     * Gets cm_value
     * @return string
     */
    public function getCmValue()
    {
        return $this->cm_value;
    }
  
    /**
     * Sets cm_value
     * @param string $cm_value 
     * @return $this
     */
    public function setCmValue($cm_value)
    {
        
        $this->cm_value = $cm_value;
        return $this;
    }
    
    /**
     * Gets sort_value
     * @return string
     */
    public function getSortValue()
    {
        return $this->sort_value;
    }
  
    /**
     * Sets sort_value
     * @param string $sort_value 
     * @return $this
     */
    public function setSortValue($sort_value)
    {
        
        $this->sort_value = $sort_value;
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
