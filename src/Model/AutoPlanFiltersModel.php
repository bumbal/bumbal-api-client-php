<?php
/**
 * AutoPlanFiltersModel
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
 * Contact: support@bumbal.eu
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
 * AutoPlanFiltersModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AutoPlanFiltersModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AutoPlanFiltersModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activity' => '\BumbalClient\Model\ActivityFiltersModel',
        'route' => '\BumbalClient\Model\RouteFiltersModel',
        'route_general' => '\BumbalClient\Model\RouteFiltersModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'activity' => null,
        'route' => null,
        'route_general' => null
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
        'activity' => 'activity',
        'route' => 'route',
        'route_general' => 'route_general'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'activity' => 'setActivity',
        'route' => 'setRoute',
        'route_general' => 'setRouteGeneral'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'activity' => 'getActivity',
        'route' => 'getRoute',
        'route_general' => 'getRouteGeneral'
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
    public function __construct(?array $data = null)
    {
        $this->container['activity'] = isset($data['activity']) ? $data['activity'] : null;
        $this->container['route'] = isset($data['route']) ? $data['route'] : null;
        $this->container['route_general'] = isset($data['route_general']) ? $data['route_general'] : null;
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
     * Gets activity
     * @return \BumbalClient\Model\ActivityFiltersModel
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity
     * @param \BumbalClient\Model\ActivityFiltersModel $activity
     * @return $this
     */
    public function setActivity($activity)
    {
        $this->container['activity'] = $activity;

        return $this;
    }

    /**
     * Gets route
     * @return \BumbalClient\Model\RouteFiltersModel
     */
    public function getRoute()
    {
        return $this->container['route'];
    }

    /**
     * Sets route
     * @param \BumbalClient\Model\RouteFiltersModel $route
     * @return $this
     */
    public function setRoute($route)
    {
        $this->container['route'] = $route;

        return $this;
    }

    /**
     * Gets route_general
     * @return \BumbalClient\Model\RouteFiltersModel
     */
    public function getRouteGeneral()
    {
        return $this->container['route_general'];
    }

    /**
     * Sets route_general
     * @param \BumbalClient\Model\RouteFiltersModel $route_general
     * @return $this
     */
    public function setRouteGeneral($route_general)
    {
        $this->container['route_general'] = $route_general;

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


