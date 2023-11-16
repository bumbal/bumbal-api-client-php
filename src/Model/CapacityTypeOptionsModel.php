<?php
/**
 * CapacityTypeOptionsModel
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
 * CapacityTypeOptionsModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CapacityTypeOptionsModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CapacityTypeOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_uom' => 'bool',
        'include_uom_group' => 'bool',
        'include_uom_name' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'include_uom' => null,
        'include_uom_group' => null,
        'include_uom_name' => null
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
        'include_uom' => 'include_uom',
        'include_uom_group' => 'include_uom_group',
        'include_uom_name' => 'include_uom_name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'include_uom' => 'setIncludeUom',
        'include_uom_group' => 'setIncludeUomGroup',
        'include_uom_name' => 'setIncludeUomName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'include_uom' => 'getIncludeUom',
        'include_uom_group' => 'getIncludeUomGroup',
        'include_uom_name' => 'getIncludeUomName'
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
        $this->container['include_uom'] = isset($data['include_uom']) ? $data['include_uom'] : null;
        $this->container['include_uom_group'] = isset($data['include_uom_group']) ? $data['include_uom_group'] : null;
        $this->container['include_uom_name'] = isset($data['include_uom_name']) ? $data['include_uom_name'] : null;
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
     * Gets include_uom
     * @return bool
     */
    public function getIncludeUom()
    {
        return $this->container['include_uom'];
    }

    /**
     * Sets include_uom
     * @param bool $include_uom
     * @return $this
     */
    public function setIncludeUom($include_uom)
    {
        $this->container['include_uom'] = $include_uom;

        return $this;
    }

    /**
     * Gets include_uom_group
     * @return bool
     */
    public function getIncludeUomGroup()
    {
        return $this->container['include_uom_group'];
    }

    /**
     * Sets include_uom_group
     * @param bool $include_uom_group
     * @return $this
     */
    public function setIncludeUomGroup($include_uom_group)
    {
        $this->container['include_uom_group'] = $include_uom_group;

        return $this;
    }

    /**
     * Gets include_uom_name
     * @return bool
     */
    public function getIncludeUomName()
    {
        return $this->container['include_uom_name'];
    }

    /**
     * Sets include_uom_name
     * @param bool $include_uom_name
     * @return $this
     */
    public function setIncludeUomName($include_uom_name)
    {
        $this->container['include_uom_name'] = $include_uom_name;

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


