<?php
/**
 * ServiceWindowModel
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
 * Contact: gerb@bumbal.eu
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
 * ServiceWindowModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ServiceWindowModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ServiceWindowModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'service_windows_scheme_id' => 'int',
        'week_day' => 'int',
        'time_from' => 'string',
        'time_to' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'service_windows_scheme_id' => 'int64',
        'week_day' => 'int64',
        'time_from' => null,
        'time_to' => null
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
        'service_windows_scheme_id' => 'service_windows_scheme_id',
        'week_day' => 'week_day',
        'time_from' => 'time_from',
        'time_to' => 'time_to'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'service_windows_scheme_id' => 'setServiceWindowsSchemeId',
        'week_day' => 'setWeekDay',
        'time_from' => 'setTimeFrom',
        'time_to' => 'setTimeTo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'service_windows_scheme_id' => 'getServiceWindowsSchemeId',
        'week_day' => 'getWeekDay',
        'time_from' => 'getTimeFrom',
        'time_to' => 'getTimeTo'
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
        $this->container['service_windows_scheme_id'] = isset($data['service_windows_scheme_id']) ? $data['service_windows_scheme_id'] : null;
        $this->container['week_day'] = isset($data['week_day']) ? $data['week_day'] : null;
        $this->container['time_from'] = isset($data['time_from']) ? $data['time_from'] : null;
        $this->container['time_to'] = isset($data['time_to']) ? $data['time_to'] : null;
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
     * Gets service_windows_scheme_id
     * @return int
     */
    public function getServiceWindowsSchemeId()
    {
        return $this->container['service_windows_scheme_id'];
    }

    /**
     * Sets service_windows_scheme_id
     * @param int $service_windows_scheme_id Service windows scheme ID
     * @return $this
     */
    public function setServiceWindowsSchemeId($service_windows_scheme_id)
    {
        $this->container['service_windows_scheme_id'] = $service_windows_scheme_id;

        return $this;
    }

    /**
     * Gets week_day
     * @return int
     */
    public function getWeekDay()
    {
        return $this->container['week_day'];
    }

    /**
     * Sets week_day
     * @param int $week_day Week day
     * @return $this
     */
    public function setWeekDay($week_day)
    {
        $this->container['week_day'] = $week_day;

        return $this;
    }

    /**
     * Gets time_from
     * @return string
     */
    public function getTimeFrom()
    {
        return $this->container['time_from'];
    }

    /**
     * Sets time_from
     * @param string $time_from time from
     * @return $this
     */
    public function setTimeFrom($time_from)
    {
        $this->container['time_from'] = $time_from;

        return $this;
    }

    /**
     * Gets time_to
     * @return string
     */
    public function getTimeTo()
    {
        return $this->container['time_to'];
    }

    /**
     * Sets time_to
     * @param string $time_to time to
     * @return $this
     */
    public function setTimeTo($time_to)
    {
        $this->container['time_to'] = $time_to;

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


