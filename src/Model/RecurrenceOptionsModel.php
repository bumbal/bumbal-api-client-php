<?php
/**
 * RecurrenceOptionsModel
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
 * RecurrenceOptionsModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RecurrenceOptionsModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RecurrenceOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_recurrence_meta_data' => 'bool',
        'include_recurrence_links' => 'bool',
        'include_recurrence_base' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'include_recurrence_meta_data' => null,
        'include_recurrence_links' => null,
        'include_recurrence_base' => null
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
        'include_recurrence_meta_data' => 'include_recurrence_meta_data',
        'include_recurrence_links' => 'include_recurrence_links',
        'include_recurrence_base' => 'include_recurrence_base'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'include_recurrence_meta_data' => 'setIncludeRecurrenceMetaData',
        'include_recurrence_links' => 'setIncludeRecurrenceLinks',
        'include_recurrence_base' => 'setIncludeRecurrenceBase'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'include_recurrence_meta_data' => 'getIncludeRecurrenceMetaData',
        'include_recurrence_links' => 'getIncludeRecurrenceLinks',
        'include_recurrence_base' => 'getIncludeRecurrenceBase'
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
        $this->container['include_recurrence_meta_data'] = isset($data['include_recurrence_meta_data']) ? $data['include_recurrence_meta_data'] : null;
        $this->container['include_recurrence_links'] = isset($data['include_recurrence_links']) ? $data['include_recurrence_links'] : null;
        $this->container['include_recurrence_base'] = isset($data['include_recurrence_base']) ? $data['include_recurrence_base'] : null;
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
     * Gets include_recurrence_meta_data
     * @return bool
     */
    public function getIncludeRecurrenceMetaData()
    {
        return $this->container['include_recurrence_meta_data'];
    }

    /**
     * Sets include_recurrence_meta_data
     * @param bool $include_recurrence_meta_data
     * @return $this
     */
    public function setIncludeRecurrenceMetaData($include_recurrence_meta_data)
    {
        $this->container['include_recurrence_meta_data'] = $include_recurrence_meta_data;

        return $this;
    }

    /**
     * Gets include_recurrence_links
     * @return bool
     */
    public function getIncludeRecurrenceLinks()
    {
        return $this->container['include_recurrence_links'];
    }

    /**
     * Sets include_recurrence_links
     * @param bool $include_recurrence_links
     * @return $this
     */
    public function setIncludeRecurrenceLinks($include_recurrence_links)
    {
        $this->container['include_recurrence_links'] = $include_recurrence_links;

        return $this;
    }

    /**
     * Gets include_recurrence_base
     * @return bool
     */
    public function getIncludeRecurrenceBase()
    {
        return $this->container['include_recurrence_base'];
    }

    /**
     * Sets include_recurrence_base
     * @param bool $include_recurrence_base
     * @return $this
     */
    public function setIncludeRecurrenceBase($include_recurrence_base)
    {
        $this->container['include_recurrence_base'] = $include_recurrence_base;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
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


