<?php
/**
 * TagModel
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
 * TagModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TagModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TagModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'object_type' => 'int',
        'tag_type_id' => 'int',
        'tag_type_name' => 'string',
        'tag_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'object_type' => 'int64',
        'tag_type_id' => 'int64',
        'tag_type_name' => null,
        'tag_name' => null
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
        'object_type' => 'object_type',
        'tag_type_id' => 'tag_type_id',
        'tag_type_name' => 'tag_type_name',
        'tag_name' => 'tag_name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'object_type' => 'setObjectType',
        'tag_type_id' => 'setTagTypeId',
        'tag_type_name' => 'setTagTypeName',
        'tag_name' => 'setTagName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'object_type' => 'getObjectType',
        'tag_type_id' => 'getTagTypeId',
        'tag_type_name' => 'getTagTypeName',
        'tag_name' => 'getTagName'
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
        $this->container['object_type'] = isset($data['object_type']) ? $data['object_type'] : null;
        $this->container['tag_type_id'] = isset($data['tag_type_id']) ? $data['tag_type_id'] : null;
        $this->container['tag_type_name'] = isset($data['tag_type_name']) ? $data['tag_type_name'] : null;
        $this->container['tag_name'] = isset($data['tag_name']) ? $data['tag_name'] : null;
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
     * @param int $id Unique ID
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets object_type
     * @return int
     */
    public function getObjectType()
    {
        return $this->container['object_type'];
    }

    /**
     * Sets object_type
     * @param int $object_type Object type ID
     * @return $this
     */
    public function setObjectType($object_type)
    {
        $this->container['object_type'] = $object_type;

        return $this;
    }

    /**
     * Gets tag_type_id
     * @return int
     */
    public function getTagTypeId()
    {
        return $this->container['tag_type_id'];
    }

    /**
     * Sets tag_type_id
     * @param int $tag_type_id Tag type ID
     * @return $this
     */
    public function setTagTypeId($tag_type_id)
    {
        $this->container['tag_type_id'] = $tag_type_id;

        return $this;
    }

    /**
     * Gets tag_type_name
     * @return string
     */
    public function getTagTypeName()
    {
        return $this->container['tag_type_name'];
    }

    /**
     * Sets tag_type_name
     * @param string $tag_type_name Tag type Name
     * @return $this
     */
    public function setTagTypeName($tag_type_name)
    {
        $this->container['tag_type_name'] = $tag_type_name;

        return $this;
    }

    /**
     * Gets tag_name
     * @return string
     */
    public function getTagName()
    {
        return $this->container['tag_name'];
    }

    /**
     * Sets tag_name
     * @param string $tag_name Tag Name (same as tag_type_name, but tag_type_name will become deprecated in the future)
     * @return $this
     */
    public function setTagName($tag_name)
    {
        $this->container['tag_name'] = $tag_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
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


