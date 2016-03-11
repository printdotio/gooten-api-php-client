<?php
/**
 * ProductBuildInfo
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
 * ProductBuildInfo Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductBuildInfo implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'description' => 'string',
        'type' => 'string',
        'z_index' => 'int',
        'x1' => 'int',
        'x2' => 'int',
        'y1' => 'int',
        'y2' => 'int',
        'color' => 'string',
        'background_image_url' => 'string',
        'overlay_image_url' => 'string',
        'font_name' => 'string',
        'font_size' => 'string',
        'font_h_alignment' => 'string',
        'font_v_alighment' => 'string',
        'default_text' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'Id',
        'description' => 'Description',
        'type' => 'Type',
        'z_index' => 'ZIndex',
        'x1' => 'X1',
        'x2' => 'X2',
        'y1' => 'Y1',
        'y2' => 'Y2',
        'color' => 'Color',
        'background_image_url' => 'BackgroundImageUrl',
        'overlay_image_url' => 'OverlayImageUrl',
        'font_name' => 'FontName',
        'font_size' => 'FontSize',
        'font_h_alignment' => 'FontHAlignment',
        'font_v_alighment' => 'FontVAlighment',
        'default_text' => 'DefaultText'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'description' => 'setDescription',
        'type' => 'setType',
        'z_index' => 'setZIndex',
        'x1' => 'setX1',
        'x2' => 'setX2',
        'y1' => 'setY1',
        'y2' => 'setY2',
        'color' => 'setColor',
        'background_image_url' => 'setBackgroundImageUrl',
        'overlay_image_url' => 'setOverlayImageUrl',
        'font_name' => 'setFontName',
        'font_size' => 'setFontSize',
        'font_h_alignment' => 'setFontHAlignment',
        'font_v_alighment' => 'setFontVAlighment',
        'default_text' => 'setDefaultText'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'description' => 'getDescription',
        'type' => 'getType',
        'z_index' => 'getZIndex',
        'x1' => 'getX1',
        'x2' => 'getX2',
        'y1' => 'getY1',
        'y2' => 'getY2',
        'color' => 'getColor',
        'background_image_url' => 'getBackgroundImageUrl',
        'overlay_image_url' => 'getOverlayImageUrl',
        'font_name' => 'getFontName',
        'font_size' => 'getFontSize',
        'font_h_alignment' => 'getFontHAlignment',
        'font_v_alighment' => 'getFontVAlighment',
        'default_text' => 'getDefaultText'
    );
  
    
    /**
      * $id 
      * @var string
      */
    protected $id;
    
    /**
      * $description 
      * @var string
      */
    protected $description;
    
    /**
      * $type 
      * @var string
      */
    protected $type;
    
    /**
      * $z_index 
      * @var int
      */
    protected $z_index;
    
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
      * $color 
      * @var string
      */
    protected $color;
    
    /**
      * $background_image_url 
      * @var string
      */
    protected $background_image_url;
    
    /**
      * $overlay_image_url 
      * @var string
      */
    protected $overlay_image_url;
    
    /**
      * $font_name 
      * @var string
      */
    protected $font_name;
    
    /**
      * $font_size 
      * @var string
      */
    protected $font_size;
    
    /**
      * $font_h_alignment 
      * @var string
      */
    protected $font_h_alignment;
    
    /**
      * $font_v_alighment 
      * @var string
      */
    protected $font_v_alighment;
    
    /**
      * $default_text 
      * @var string
      */
    protected $default_text;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->id = $data["id"];
            $this->description = $data["description"];
            $this->type = $data["type"];
            $this->z_index = $data["z_index"];
            $this->x1 = $data["x1"];
            $this->x2 = $data["x2"];
            $this->y1 = $data["y1"];
            $this->y2 = $data["y2"];
            $this->color = $data["color"];
            $this->background_image_url = $data["background_image_url"];
            $this->overlay_image_url = $data["overlay_image_url"];
            $this->font_name = $data["font_name"];
            $this->font_size = $data["font_size"];
            $this->font_h_alignment = $data["font_h_alignment"];
            $this->font_v_alighment = $data["font_v_alighment"];
            $this->default_text = $data["default_text"];
        }
    }
    
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id 
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
  
    /**
     * Sets description
     * @param string $description 
     * @return $this
     */
    public function setDescription($description)
    {
        
        $this->description = $description;
        return $this;
    }
    
    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
  
    /**
     * Sets type
     * @param string $type 
     * @return $this
     */
    public function setType($type)
    {
        
        $this->type = $type;
        return $this;
    }
    
    /**
     * Gets z_index
     * @return int
     */
    public function getZIndex()
    {
        return $this->z_index;
    }
  
    /**
     * Sets z_index
     * @param int $z_index 
     * @return $this
     */
    public function setZIndex($z_index)
    {
        
        $this->z_index = $z_index;
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
     * Gets color
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
  
    /**
     * Sets color
     * @param string $color 
     * @return $this
     */
    public function setColor($color)
    {
        
        $this->color = $color;
        return $this;
    }
    
    /**
     * Gets background_image_url
     * @return string
     */
    public function getBackgroundImageUrl()
    {
        return $this->background_image_url;
    }
  
    /**
     * Sets background_image_url
     * @param string $background_image_url 
     * @return $this
     */
    public function setBackgroundImageUrl($background_image_url)
    {
        
        $this->background_image_url = $background_image_url;
        return $this;
    }
    
    /**
     * Gets overlay_image_url
     * @return string
     */
    public function getOverlayImageUrl()
    {
        return $this->overlay_image_url;
    }
  
    /**
     * Sets overlay_image_url
     * @param string $overlay_image_url 
     * @return $this
     */
    public function setOverlayImageUrl($overlay_image_url)
    {
        
        $this->overlay_image_url = $overlay_image_url;
        return $this;
    }
    
    /**
     * Gets font_name
     * @return string
     */
    public function getFontName()
    {
        return $this->font_name;
    }
  
    /**
     * Sets font_name
     * @param string $font_name 
     * @return $this
     */
    public function setFontName($font_name)
    {
        
        $this->font_name = $font_name;
        return $this;
    }
    
    /**
     * Gets font_size
     * @return string
     */
    public function getFontSize()
    {
        return $this->font_size;
    }
  
    /**
     * Sets font_size
     * @param string $font_size 
     * @return $this
     */
    public function setFontSize($font_size)
    {
        
        $this->font_size = $font_size;
        return $this;
    }
    
    /**
     * Gets font_h_alignment
     * @return string
     */
    public function getFontHAlignment()
    {
        return $this->font_h_alignment;
    }
  
    /**
     * Sets font_h_alignment
     * @param string $font_h_alignment 
     * @return $this
     */
    public function setFontHAlignment($font_h_alignment)
    {
        
        $this->font_h_alignment = $font_h_alignment;
        return $this;
    }
    
    /**
     * Gets font_v_alighment
     * @return string
     */
    public function getFontVAlighment()
    {
        return $this->font_v_alighment;
    }
  
    /**
     * Sets font_v_alighment
     * @param string $font_v_alighment 
     * @return $this
     */
    public function setFontVAlighment($font_v_alighment)
    {
        
        $this->font_v_alighment = $font_v_alighment;
        return $this;
    }
    
    /**
     * Gets default_text
     * @return string
     */
    public function getDefaultText()
    {
        return $this->default_text;
    }
  
    /**
     * Sets default_text
     * @param string $default_text 
     * @return $this
     */
    public function setDefaultText($default_text)
    {
        
        $this->default_text = $default_text;
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