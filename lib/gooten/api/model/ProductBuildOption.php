<?php
/**
 * ProductBuildOption
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
 * ProductBuildOption Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     gooten.api.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductBuildOption implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'name' => 'string',
        'image_url' => 'string',
        'is_default' => 'bool',
        'category' => 'string',
        'is_partner_specific' => 'bool',
        'spaces' => '\gooten.api.model\ProductBuildInfoSpace[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'name' => 'Name',
        'image_url' => 'ImageUrl',
        'is_default' => 'IsDefault',
        'category' => 'Category',
        'is_partner_specific' => 'IsPartnerSpecific',
        'spaces' => 'Spaces'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'name' => 'setName',
        'image_url' => 'setImageUrl',
        'is_default' => 'setIsDefault',
        'category' => 'setCategory',
        'is_partner_specific' => 'setIsPartnerSpecific',
        'spaces' => 'setSpaces'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'name' => 'getName',
        'image_url' => 'getImageUrl',
        'is_default' => 'getIsDefault',
        'category' => 'getCategory',
        'is_partner_specific' => 'getIsPartnerSpecific',
        'spaces' => 'getSpaces'
    );
  
    
    /**
      * $name 
      * @var string
      */
    protected $name;
    
    /**
      * $image_url 
      * @var string
      */
    protected $image_url;
    
    /**
      * $is_default 
      * @var bool
      */
    protected $is_default;
    
    /**
      * $category 
      * @var string
      */
    protected $category;
    
    /**
      * $is_partner_specific 
      * @var bool
      */
    protected $is_partner_specific;
    
    /**
      * $spaces 
      * @var \gooten.api.model\ProductBuildInfoSpace[]
      */
    protected $spaces;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->name = $data["name"];
            $this->image_url = $data["image_url"];
            $this->is_default = $data["is_default"];
            $this->category = $data["category"];
            $this->is_partner_specific = $data["is_partner_specific"];
            $this->spaces = $data["spaces"];
        }
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
     * Gets is_default
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->is_default;
    }
  
    /**
     * Sets is_default
     * @param bool $is_default 
     * @return $this
     */
    public function setIsDefault($is_default)
    {
        
        $this->is_default = $is_default;
        return $this;
    }
    
    /**
     * Gets category
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }
  
    /**
     * Sets category
     * @param string $category 
     * @return $this
     */
    public function setCategory($category)
    {
        
        $this->category = $category;
        return $this;
    }
    
    /**
     * Gets is_partner_specific
     * @return bool
     */
    public function getIsPartnerSpecific()
    {
        return $this->is_partner_specific;
    }
  
    /**
     * Sets is_partner_specific
     * @param bool $is_partner_specific 
     * @return $this
     */
    public function setIsPartnerSpecific($is_partner_specific)
    {
        
        $this->is_partner_specific = $is_partner_specific;
        return $this;
    }
    
    /**
     * Gets spaces
     * @return \gooten.api.model\ProductBuildInfoSpace[]
     */
    public function getSpaces()
    {
        return $this->spaces;
    }
  
    /**
     * Sets spaces
     * @param \gooten.api.model\ProductBuildInfoSpace[] $spaces 
     * @return $this
     */
    public function setSpaces($spaces)
    {
        
        $this->spaces = $spaces;
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
