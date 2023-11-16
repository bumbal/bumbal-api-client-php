<?php
/**
 * BrandColourModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bumbal Client Api
 *
 * Bumbal API documentation
 *
 * OpenAPI spec version: 2.0
 * Contact: info@bumbal.eu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalClient\Model;

use \ArrayAccess;

/**
 * BrandColourModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BrandColourModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BrandColourModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'brand_id' => 'int',
        'name' => 'string',
        'hex' => 'string',
        'r' => 'int',
        'g' => 'int',
        'b' => 'int',
        'a' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'brand_id' => 'int64',
        'name' => null,
        'hex' => null,
        'r' => null,
        'g' => null,
        'b' => null,
        'a' => 'double'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'brand_id' => 'brand_id',
        'name' => 'name',
        'hex' => 'hex',
        'r' => 'r',
        'g' => 'g',
        'b' => 'b',
        'a' => 'a'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'brand_id' => 'setBrandId',
        'name' => 'setName',
        'hex' => 'setHex',
        'r' => 'setR',
        'g' => 'setG',
        'b' => 'setB',
        'a' => 'setA'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'brand_id' => 'getBrandId',
        'name' => 'getName',
        'hex' => 'getHex',
        'r' => 'getR',
        'g' => 'getG',
        'b' => 'getB',
        'a' => 'getA'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['brand_id'] = isset($data['brand_id']) ? $data['brand_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['hex'] = isset($data['hex']) ? $data['hex'] : null;
        $this->container['r'] = isset($data['r']) ? $data['r'] : null;
        $this->container['g'] = isset($data['g']) ? $data['g'] : null;
        $this->container['b'] = isset($data['b']) ? $data['b'] : null;
        $this->container['a'] = isset($data['a']) ? $data['a'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Unique Identifier
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets brand_id
     * @return int
     */
    public function getBrandId()
    {
        return $this->container['brand_id'];
    }

    /**
     * Sets brand_id
     * @param int $brand_id id for brand where this colour belongs to
     * @return $this
     */
    public function setBrandId($brand_id)
    {
        $this->container['brand_id'] = $brand_id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets hex
     * @return string
     */
    public function getHex()
    {
        return $this->container['hex'];
    }

    /**
     * Sets hex
     * @param string $hex hex
     * @return $this
     */
    public function setHex($hex)
    {
        $this->container['hex'] = $hex;

        return $this;
    }

    /**
     * Gets r
     * @return int
     */
    public function getR()
    {
        return $this->container['r'];
    }

    /**
     * Sets r
     * @param int $r red value for rgba
     * @return $this
     */
    public function setR($r)
    {
        $this->container['r'] = $r;

        return $this;
    }

    /**
     * Gets g
     * @return int
     */
    public function getG()
    {
        return $this->container['g'];
    }

    /**
     * Sets g
     * @param int $g green value for rgba
     * @return $this
     */
    public function setG($g)
    {
        $this->container['g'] = $g;

        return $this;
    }

    /**
     * Gets b
     * @return int
     */
    public function getB()
    {
        return $this->container['b'];
    }

    /**
     * Sets b
     * @param int $b blue value for rgba
     * @return $this
     */
    public function setB($b)
    {
        $this->container['b'] = $b;

        return $this;
    }

    /**
     * Gets a
     * @return double
     */
    public function getA()
    {
        return $this->container['a'];
    }

    /**
     * Sets a
     * @param double $a alpha value (opacity/transparency) for rgba
     * @return $this
     */
    public function setA($a)
    {
        $this->container['a'] = $a;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    #[\ReturnTypeWillChange]
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    #[\ReturnTypeWillChange]
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BumbalClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BumbalClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


