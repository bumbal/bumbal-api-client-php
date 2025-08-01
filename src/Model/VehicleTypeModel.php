<?php
/**
 * VehicleTypeModel
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
 * VehicleTypeModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class VehicleTypeModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'VehicleTypeModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'max_speed' => 'int',
        'speed_factor' => 'double',
        'duration_factor' => 'double',
        'cost_per_meter' => 'double',
        'cost_per_route' => 'double',
        'cost_per_driving_minute' => 'double',
        'cost_per_waiting_minute' => 'double',
        'cost_per_service_minute' => 'double',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'name' => null,
        'max_speed' => 'int64',
        'speed_factor' => 'double',
        'duration_factor' => 'double',
        'cost_per_meter' => 'double',
        'cost_per_route' => 'double',
        'cost_per_driving_minute' => 'double',
        'cost_per_waiting_minute' => 'double',
        'cost_per_service_minute' => 'double',
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
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
        'name' => 'name',
        'max_speed' => 'max_speed',
        'speed_factor' => 'speed_factor',
        'duration_factor' => 'duration_factor',
        'cost_per_meter' => 'cost_per_meter',
        'cost_per_route' => 'cost_per_route',
        'cost_per_driving_minute' => 'cost_per_driving_minute',
        'cost_per_waiting_minute' => 'cost_per_waiting_minute',
        'cost_per_service_minute' => 'cost_per_service_minute',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'max_speed' => 'setMaxSpeed',
        'speed_factor' => 'setSpeedFactor',
        'duration_factor' => 'setDurationFactor',
        'cost_per_meter' => 'setCostPerMeter',
        'cost_per_route' => 'setCostPerRoute',
        'cost_per_driving_minute' => 'setCostPerDrivingMinute',
        'cost_per_waiting_minute' => 'setCostPerWaitingMinute',
        'cost_per_service_minute' => 'setCostPerServiceMinute',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'max_speed' => 'getMaxSpeed',
        'speed_factor' => 'getSpeedFactor',
        'duration_factor' => 'getDurationFactor',
        'cost_per_meter' => 'getCostPerMeter',
        'cost_per_route' => 'getCostPerRoute',
        'cost_per_driving_minute' => 'getCostPerDrivingMinute',
        'cost_per_waiting_minute' => 'getCostPerWaitingMinute',
        'cost_per_service_minute' => 'getCostPerServiceMinute',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['max_speed'] = isset($data['max_speed']) ? $data['max_speed'] : null;
        $this->container['speed_factor'] = isset($data['speed_factor']) ? $data['speed_factor'] : null;
        $this->container['duration_factor'] = isset($data['duration_factor']) ? $data['duration_factor'] : null;
        $this->container['cost_per_meter'] = isset($data['cost_per_meter']) ? $data['cost_per_meter'] : null;
        $this->container['cost_per_route'] = isset($data['cost_per_route']) ? $data['cost_per_route'] : null;
        $this->container['cost_per_driving_minute'] = isset($data['cost_per_driving_minute']) ? $data['cost_per_driving_minute'] : null;
        $this->container['cost_per_waiting_minute'] = isset($data['cost_per_waiting_minute']) ? $data['cost_per_waiting_minute'] : null;
        $this->container['cost_per_service_minute'] = isset($data['cost_per_service_minute']) ? $data['cost_per_service_minute'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
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
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The name of the VehicleType
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets max_speed
     * @return int
     */
    public function getMaxSpeed()
    {
        return $this->container['max_speed'];
    }

    /**
     * Sets max_speed
     * @param int $max_speed Max Speed in km/h, Bikes (id 4) ignore max_speed
     * @return $this
     */
    public function setMaxSpeed($max_speed)
    {
        $this->container['max_speed'] = $max_speed;

        return $this;
    }

    /**
     * Gets speed_factor
     * @return double
     */
    public function getSpeedFactor()
    {
        return $this->container['speed_factor'];
    }

    /**
     * Sets speed_factor
     * @param double $speed_factor Speed Factor
     * @return $this
     */
    public function setSpeedFactor($speed_factor)
    {
        $this->container['speed_factor'] = $speed_factor;

        return $this;
    }

    /**
     * Gets duration_factor
     * @return double
     */
    public function getDurationFactor()
    {
        return $this->container['duration_factor'];
    }

    /**
     * Sets duration_factor
     * @param double $duration_factor Duration Factor
     * @return $this
     */
    public function setDurationFactor($duration_factor)
    {
        $this->container['duration_factor'] = $duration_factor;

        return $this;
    }

    /**
     * Gets cost_per_meter
     * @return double
     */
    public function getCostPerMeter()
    {
        return $this->container['cost_per_meter'];
    }

    /**
     * Sets cost_per_meter
     * @param double $cost_per_meter Cost per meter
     * @return $this
     */
    public function setCostPerMeter($cost_per_meter)
    {
        $this->container['cost_per_meter'] = $cost_per_meter;

        return $this;
    }

    /**
     * Gets cost_per_route
     * @return double
     */
    public function getCostPerRoute()
    {
        return $this->container['cost_per_route'];
    }

    /**
     * Sets cost_per_route
     * @param double $cost_per_route Cost per route
     * @return $this
     */
    public function setCostPerRoute($cost_per_route)
    {
        $this->container['cost_per_route'] = $cost_per_route;

        return $this;
    }

    /**
     * Gets cost_per_driving_minute
     * @return double
     */
    public function getCostPerDrivingMinute()
    {
        return $this->container['cost_per_driving_minute'];
    }

    /**
     * Sets cost_per_driving_minute
     * @param double $cost_per_driving_minute Cost per driving minute
     * @return $this
     */
    public function setCostPerDrivingMinute($cost_per_driving_minute)
    {
        $this->container['cost_per_driving_minute'] = $cost_per_driving_minute;

        return $this;
    }

    /**
     * Gets cost_per_waiting_minute
     * @return double
     */
    public function getCostPerWaitingMinute()
    {
        return $this->container['cost_per_waiting_minute'];
    }

    /**
     * Sets cost_per_waiting_minute
     * @param double $cost_per_waiting_minute Cost per waiting minute
     * @return $this
     */
    public function setCostPerWaitingMinute($cost_per_waiting_minute)
    {
        $this->container['cost_per_waiting_minute'] = $cost_per_waiting_minute;

        return $this;
    }

    /**
     * Gets cost_per_service_minute
     * @return double
     */
    public function getCostPerServiceMinute()
    {
        return $this->container['cost_per_service_minute'];
    }

    /**
     * Sets cost_per_service_minute
     * @param double $cost_per_service_minute Cost per service minute
     * @return $this
     */
    public function setCostPerServiceMinute($cost_per_service_minute)
    {
        $this->container['cost_per_service_minute'] = $cost_per_service_minute;

        return $this;
    }

    /**
     * Gets created_at
     * @return \DateTime|string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param \DateTime|string|null $created_at created_at date time
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     * @return \DateTime|string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param \DateTime|string|null $updated_at updated_at date time
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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


