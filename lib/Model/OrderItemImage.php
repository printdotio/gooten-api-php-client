<?php
/**
 * OrderItemImage
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
 * OrderItemImage Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderItemImage implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'url' => 'string',
        'index' => 'int',
        'thumbnail_url' => 'string',
        'manip_command' => 'string',
        'space_id' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'url' => 'Url',
        'index' => 'Index',
        'thumbnail_url' => 'ThumbnailUrl',
        'manip_command' => 'ManipCommand',
        'space_id' => 'SpaceId'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'url' => 'setUrl',
        'index' => 'setIndex',
        'thumbnail_url' => 'setThumbnailUrl',
        'manip_command' => 'setManipCommand',
        'space_id' => 'setSpaceId'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'url' => 'getUrl',
        'index' => 'getIndex',
        'thumbnail_url' => 'getThumbnailUrl',
        'manip_command' => 'getManipCommand',
        'space_id' => 'getSpaceId'
    );
  
    
    /**
      * $url 
      * @var string
      */
    protected $url;
    
    /**
      * $index 
      * @var int
      */
    protected $index;
    
    /**
      * $thumbnail_url 
      * @var string
      */
    protected $thumbnail_url;
    
    /**
      * $manip_command 
      * @var string
      */
    protected $manip_command;
    
    /**
      * $space_id 
      * @var string
      */
    protected $space_id;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->url = $data["url"];
            $this->index = $data["index"];
            $this->thumbnail_url = $data["thumbnail_url"];
            $this->manip_command = $data["manip_command"];
            $this->space_id = $data["space_id"];
        }
    }
    
    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
  
    /**
     * Sets url
     * @param string $url 
     * @return $this
     */
    public function setUrl($url)
    {
        
        $this->url = $url;
        return $this;
    }
    
    /**
     * Gets index
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }
  
    /**
     * Sets index
     * @param int $index 
     * @return $this
     */
    public function setIndex($index)
    {
        
        $this->index = $index;
        return $this;
    }
    
    /**
     * Gets thumbnail_url
     * @return string
     */
    public function getThumbnailUrl()
    {
        return $this->thumbnail_url;
    }
  
    /**
     * Sets thumbnail_url
     * @param string $thumbnail_url 
     * @return $this
     */
    public function setThumbnailUrl($thumbnail_url)
    {
        
        $this->thumbnail_url = $thumbnail_url;
        return $this;
    }
    
    /**
     * Gets manip_command
     * @return string
     */
    public function getManipCommand()
    {
        return $this->manip_command;
    }
  
    /**
     * Sets manip_command
     * @param string $manip_command 
     * @return $this
     */
    public function setManipCommand($manip_command)
    {
        
        $this->manip_command = $manip_command;
        return $this;
    }
    
    /**
     * Gets space_id
     * @return string
     */
    public function getSpaceId()
    {
        return $this->space_id;
    }
  
    /**
     * Sets space_id
     * @param string $space_id 
     * @return $this
     */
    public function setSpaceId($space_id)
    {
        
        $this->space_id = $space_id;
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
