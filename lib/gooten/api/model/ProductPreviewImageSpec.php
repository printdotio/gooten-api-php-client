<?php
/**
 * ProductPreviewImageSpec
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
 * ProductPreviewImageSpec Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     gooten.api.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductPreviewImageSpec implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'url' => 'string',
        'x1' => 'int',
        'x2' => 'int',
        'y1' => 'int',
        'y2' => 'int'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'url' => 'Url',
        'x1' => 'X1',
        'x2' => 'X2',
        'y1' => 'Y1',
        'y2' => 'Y2'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'url' => 'setUrl',
        'x1' => 'setX1',
        'x2' => 'setX2',
        'y1' => 'setY1',
        'y2' => 'setY2'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'url' => 'getUrl',
        'x1' => 'getX1',
        'x2' => 'getX2',
        'y1' => 'getY1',
        'y2' => 'getY2'
    );
  
    
    /**
      * $url 
      * @var string
      */
    protected $url;
    
    /**
      * $x1 
      * @var int
      */
    protected $x1;
    
    /**
      * $x2 
      * @var int
      */
    protected $x2;
    
    /**
      * $y1 
      * @var int
      */
    protected $y1;
    
    /**
      * $y2 
      * @var int
      */
    protected $y2;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->url = $data["url"];
            $this->x1 = $data["x1"];
            $this->x2 = $data["x2"];
            $this->y1 = $data["y1"];
            $this->y2 = $data["y2"];
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
     * Gets x1
     * @return int
     */
    public function getX1()
    {
        return $this->x1;
    }
  
    /**
     * Sets x1
     * @param int $x1 
     * @return $this
     */
    public function setX1($x1)
    {
        
        $this->x1 = $x1;
        return $this;
    }
    
    /**
     * Gets x2
     * @return int
     */
    public function getX2()
    {
        return $this->x2;
    }
  
    /**
     * Sets x2
     * @param int $x2 
     * @return $this
     */
    public function setX2($x2)
    {
        
        $this->x2 = $x2;
        return $this;
    }
    
    /**
     * Gets y1
     * @return int
     */
    public function getY1()
    {
        return $this->y1;
    }
  
    /**
     * Sets y1
     * @param int $y1 
     * @return $this
     */
    public function setY1($y1)
    {
        
        $this->y1 = $y1;
        return $this;
    }
    
    /**
     * Gets y2
     * @return int
     */
    public function getY2()
    {
        return $this->y2;
    }
  
    /**
     * Sets y2
     * @param int $y2 
     * @return $this
     */
    public function setY2($y2)
    {
        
        $this->y2 = $y2;
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
