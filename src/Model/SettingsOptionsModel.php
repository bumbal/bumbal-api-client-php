<?php
/**
 * SettingsOptionsModel
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
 * SettingsOptionsModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SettingsOptionsModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SettingsOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_settings_group_name' => 'bool',
        'include_record_info' => 'bool',
        'include_record_object' => 'bool',
        'include_value_options' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'include_settings_group_name' => null,
        'include_record_info' => null,
        'include_record_object' => null,
        'include_value_options' => null
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
        'include_settings_group_name' => 'include_settings_group_name',
        'include_record_info' => 'include_record_info',
        'include_record_object' => 'include_record_object',
        'include_value_options' => 'include_value_options'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'include_settings_group_name' => 'setIncludeSettingsGroupName',
        'include_record_info' => 'setIncludeRecordInfo',
        'include_record_object' => 'setIncludeRecordObject',
        'include_value_options' => 'setIncludeValueOptions'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'include_settings_group_name' => 'getIncludeSettingsGroupName',
        'include_record_info' => 'getIncludeRecordInfo',
        'include_record_object' => 'getIncludeRecordObject',
        'include_value_options' => 'getIncludeValueOptions'
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
        $this->container['include_settings_group_name'] = isset($data['include_settings_group_name']) ? $data['include_settings_group_name'] : false;
        $this->container['include_record_info'] = isset($data['include_record_info']) ? $data['include_record_info'] : false;
        $this->container['include_record_object'] = isset($data['include_record_object']) ? $data['include_record_object'] : false;
        $this->container['include_value_options'] = isset($data['include_value_options']) ? $data['include_value_options'] : false;
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
     * Gets include_settings_group_name
     * @return bool
     */
    public function getIncludeSettingsGroupName()
    {
        return $this->container['include_settings_group_name'];
    }

    /**
     * Sets include_settings_group_name
     * @param bool $include_settings_group_name
     * @return $this
     */
    public function setIncludeSettingsGroupName($include_settings_group_name)
    {
        $this->container['include_settings_group_name'] = $include_settings_group_name;

        return $this;
    }

    /**
     * Gets include_record_info
     * @return bool
     */
    public function getIncludeRecordInfo()
    {
        return $this->container['include_record_info'];
    }

    /**
     * Sets include_record_info
     * @param bool $include_record_info
     * @return $this
     */
    public function setIncludeRecordInfo($include_record_info)
    {
        $this->container['include_record_info'] = $include_record_info;

        return $this;
    }

    /**
     * Gets include_record_object
     * @return bool
     */
    public function getIncludeRecordObject()
    {
        return $this->container['include_record_object'];
    }

    /**
     * Sets include_record_object
     * @param bool $include_record_object
     * @return $this
     */
    public function setIncludeRecordObject($include_record_object)
    {
        $this->container['include_record_object'] = $include_record_object;

        return $this;
    }

    /**
     * Gets include_value_options
     * @return bool
     */
    public function getIncludeValueOptions()
    {
        return $this->container['include_value_options'];
    }

    /**
     * Sets include_value_options
     * @param bool $include_value_options
     * @return $this
     */
    public function setIncludeValueOptions($include_value_options)
    {
        $this->container['include_value_options'] = $include_value_options;

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


