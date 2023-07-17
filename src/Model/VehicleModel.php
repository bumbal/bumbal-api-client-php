<?php
/**
 * VehicleModel
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
 * VehicleModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class VehicleModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'VehicleModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'vehicle_type_id' => 'int',
        'vehicle_type_name' => 'string',
        'name' => 'string',
        'registration_nr' => 'string',
        'max_speed' => 'int',
        'speed_factor' => 'double',
        'start_duration' => 'int',
        'end_duration' => 'int',
        'duration_factor' => 'double',
        'cost_per_meter' => 'double',
        'cost_per_route' => 'double',
        'cost_per_driving_minute' => 'double',
        'cost_per_waiting_minute' => 'double',
        'cost_per_service_minute' => 'double',
        'applied_capacities' => 'object',
        'capacities' => '\BumbalClient\Model\CapacityModel[]',
        'tags' => '\BumbalClient\Model\TagModel[]',
        'meta_data' => '\BumbalClient\Model\MetaDataModel[]',
        'links' => '\BumbalClient\Model\LinkModel[]',
        'files' => '\BumbalClient\Model\FileModel[]',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'updated_by_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'vehicle_type_id' => 'int64',
        'vehicle_type_name' => null,
        'name' => null,
        'registration_nr' => null,
        'max_speed' => 'int64',
        'speed_factor' => 'double',
        'start_duration' => 'int64',
        'end_duration' => 'int64',
        'duration_factor' => 'double',
        'cost_per_meter' => 'double',
        'cost_per_route' => 'double',
        'cost_per_driving_minute' => 'double',
        'cost_per_waiting_minute' => 'double',
        'cost_per_service_minute' => 'double',
        'applied_capacities' => null,
        'capacities' => null,
        'tags' => null,
        'meta_data' => null,
        'links' => null,
        'files' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'updated_by_name' => null
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
        'vehicle_type_id' => 'vehicle_type_id',
        'vehicle_type_name' => 'vehicle_type_name',
        'name' => 'name',
        'registration_nr' => 'registration_nr',
        'max_speed' => 'max_speed',
        'speed_factor' => 'speed_factor',
        'start_duration' => 'start_duration',
        'end_duration' => 'end_duration',
        'duration_factor' => 'duration_factor',
        'cost_per_meter' => 'cost_per_meter',
        'cost_per_route' => 'cost_per_route',
        'cost_per_driving_minute' => 'cost_per_driving_minute',
        'cost_per_waiting_minute' => 'cost_per_waiting_minute',
        'cost_per_service_minute' => 'cost_per_service_minute',
        'applied_capacities' => 'applied_capacities',
        'capacities' => 'capacities',
        'tags' => 'tags',
        'meta_data' => 'meta_data',
        'links' => 'links',
        'files' => 'files',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'updated_by_name' => 'updated_by_name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'vehicle_type_id' => 'setVehicleTypeId',
        'vehicle_type_name' => 'setVehicleTypeName',
        'name' => 'setName',
        'registration_nr' => 'setRegistrationNr',
        'max_speed' => 'setMaxSpeed',
        'speed_factor' => 'setSpeedFactor',
        'start_duration' => 'setStartDuration',
        'end_duration' => 'setEndDuration',
        'duration_factor' => 'setDurationFactor',
        'cost_per_meter' => 'setCostPerMeter',
        'cost_per_route' => 'setCostPerRoute',
        'cost_per_driving_minute' => 'setCostPerDrivingMinute',
        'cost_per_waiting_minute' => 'setCostPerWaitingMinute',
        'cost_per_service_minute' => 'setCostPerServiceMinute',
        'applied_capacities' => 'setAppliedCapacities',
        'capacities' => 'setCapacities',
        'tags' => 'setTags',
        'meta_data' => 'setMetaData',
        'links' => 'setLinks',
        'files' => 'setFiles',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'updated_by_name' => 'setUpdatedByName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'vehicle_type_id' => 'getVehicleTypeId',
        'vehicle_type_name' => 'getVehicleTypeName',
        'name' => 'getName',
        'registration_nr' => 'getRegistrationNr',
        'max_speed' => 'getMaxSpeed',
        'speed_factor' => 'getSpeedFactor',
        'start_duration' => 'getStartDuration',
        'end_duration' => 'getEndDuration',
        'duration_factor' => 'getDurationFactor',
        'cost_per_meter' => 'getCostPerMeter',
        'cost_per_route' => 'getCostPerRoute',
        'cost_per_driving_minute' => 'getCostPerDrivingMinute',
        'cost_per_waiting_minute' => 'getCostPerWaitingMinute',
        'cost_per_service_minute' => 'getCostPerServiceMinute',
        'applied_capacities' => 'getAppliedCapacities',
        'capacities' => 'getCapacities',
        'tags' => 'getTags',
        'meta_data' => 'getMetaData',
        'links' => 'getLinks',
        'files' => 'getFiles',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'updated_by_name' => 'getUpdatedByName'
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

    const VEHICLE_TYPE_ID_1 = 1;
    const VEHICLE_TYPE_ID_2 = 2;
    const VEHICLE_TYPE_ID_3 = 3;
    const VEHICLE_TYPE_ID_4 = 4;
    const VEHICLE_TYPE_NAME_CAR = 'car';
    const VEHICLE_TYPE_NAME_SMALL_TRUCK = 'small_truck';
    const VEHICLE_TYPE_NAME_TRUCK = 'truck';
    const VEHICLE_TYPE_NAME_BIKE = 'bike';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getVehicleTypeIdAllowableValues()
    {
        return [
            self::VEHICLE_TYPE_ID_1,
            self::VEHICLE_TYPE_ID_2,
            self::VEHICLE_TYPE_ID_3,
            self::VEHICLE_TYPE_ID_4,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getVehicleTypeNameAllowableValues()
    {
        return [
            self::VEHICLE_TYPE_NAME_CAR,
            self::VEHICLE_TYPE_NAME_SMALL_TRUCK,
            self::VEHICLE_TYPE_NAME_TRUCK,
            self::VEHICLE_TYPE_NAME_BIKE,
        ];
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
        $this->container['vehicle_type_id'] = isset($data['vehicle_type_id']) ? $data['vehicle_type_id'] : null;
        $this->container['vehicle_type_name'] = isset($data['vehicle_type_name']) ? $data['vehicle_type_name'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['registration_nr'] = isset($data['registration_nr']) ? $data['registration_nr'] : null;
        $this->container['max_speed'] = isset($data['max_speed']) ? $data['max_speed'] : null;
        $this->container['speed_factor'] = isset($data['speed_factor']) ? $data['speed_factor'] : null;
        $this->container['start_duration'] = isset($data['start_duration']) ? $data['start_duration'] : null;
        $this->container['end_duration'] = isset($data['end_duration']) ? $data['end_duration'] : null;
        $this->container['duration_factor'] = isset($data['duration_factor']) ? $data['duration_factor'] : null;
        $this->container['cost_per_meter'] = isset($data['cost_per_meter']) ? $data['cost_per_meter'] : null;
        $this->container['cost_per_route'] = isset($data['cost_per_route']) ? $data['cost_per_route'] : null;
        $this->container['cost_per_driving_minute'] = isset($data['cost_per_driving_minute']) ? $data['cost_per_driving_minute'] : null;
        $this->container['cost_per_waiting_minute'] = isset($data['cost_per_waiting_minute']) ? $data['cost_per_waiting_minute'] : null;
        $this->container['cost_per_service_minute'] = isset($data['cost_per_service_minute']) ? $data['cost_per_service_minute'] : null;
        $this->container['applied_capacities'] = isset($data['applied_capacities']) ? $data['applied_capacities'] : null;
        $this->container['capacities'] = isset($data['capacities']) ? $data['capacities'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['updated_by_name'] = isset($data['updated_by_name']) ? $data['updated_by_name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getVehicleTypeIdAllowableValues();
        if (!in_array($this->container['vehicle_type_id'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'vehicle_type_id', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getVehicleTypeNameAllowableValues();
        if (!in_array($this->container['vehicle_type_name'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'vehicle_type_name', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

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

        $allowed_values = $this->getVehicleTypeIdAllowableValues();
        if (!in_array($this->container['vehicle_type_id'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getVehicleTypeNameAllowableValues();
        if (!in_array($this->container['vehicle_type_name'], $allowed_values)) {
            return false;
        }
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
     * Gets vehicle_type_id
     * @return int
     */
    public function getVehicleTypeId()
    {
        return $this->container['vehicle_type_id'];
    }

    /**
     * Sets vehicle_type_id
     * @param int $vehicle_type_id Bumbal id for vehicle_type
     * @return $this
     */
    public function setVehicleTypeId($vehicle_type_id)
    {
        $allowed_values = $this->getVehicleTypeIdAllowableValues();
        if (!is_null($vehicle_type_id) && !in_array($vehicle_type_id, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'vehicle_type_id', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['vehicle_type_id'] = $vehicle_type_id;

        return $this;
    }

    /**
     * Gets vehicle_type_name
     * @return string
     */
    public function getVehicleTypeName()
    {
        return $this->container['vehicle_type_name'];
    }

    /**
     * Sets vehicle_type_name
     * @param string $vehicle_type_name Bumbal id for vehicle_type
     * @return $this
     */
    public function setVehicleTypeName($vehicle_type_name)
    {
        $allowed_values = $this->getVehicleTypeNameAllowableValues();
        if (!is_null($vehicle_type_name) && !in_array($vehicle_type_name, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'vehicle_type_name', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['vehicle_type_name'] = $vehicle_type_name;

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
     * Gets registration_nr
     * @return string
     */
    public function getRegistrationNr()
    {
        return $this->container['registration_nr'];
    }

    /**
     * Sets registration_nr
     * @param string $registration_nr registration_nr
     * @return $this
     */
    public function setRegistrationNr($registration_nr)
    {
        $this->container['registration_nr'] = $registration_nr;

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
     * @param int $max_speed Max Speed in km/h
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
     * Gets start_duration
     * @return int
     */
    public function getStartDuration()
    {
        return $this->container['start_duration'];
    }

    /**
     * Sets start_duration
     * @param int $start_duration Start duration of using this vehicle in minutes
     * @return $this
     */
    public function setStartDuration($start_duration)
    {
        $this->container['start_duration'] = $start_duration;

        return $this;
    }

    /**
     * Gets end_duration
     * @return int
     */
    public function getEndDuration()
    {
        return $this->container['end_duration'];
    }

    /**
     * Sets end_duration
     * @param int $end_duration End duration of using this vehicle in minutes
     * @return $this
     */
    public function setEndDuration($end_duration)
    {
        $this->container['end_duration'] = $end_duration;

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
     * Gets applied_capacities
     * @return object
     */
    public function getAppliedCapacities()
    {
        return $this->container['applied_capacities'];
    }

    /**
     * Sets applied_capacities
     * @param object $applied_capacities
     * @return $this
     */
    public function setAppliedCapacities($applied_capacities)
    {
        $this->container['applied_capacities'] = $applied_capacities;

        return $this;
    }

    /**
     * Gets capacities
     * @return \BumbalClient\Model\CapacityModel[]
     */
    public function getCapacities()
    {
        return $this->container['capacities'];
    }

    /**
     * Sets capacities
     * @param \BumbalClient\Model\CapacityModel[] $capacities
     * @return $this
     */
    public function setCapacities($capacities)
    {
        $this->container['capacities'] = $capacities;

        return $this;
    }

    /**
     * Gets tags
     * @return \BumbalClient\Model\TagModel[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param \BumbalClient\Model\TagModel[] $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets meta_data
     * @return \BumbalClient\Model\MetaDataModel[]
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     * @param \BumbalClient\Model\MetaDataModel[] $meta_data
     * @return $this
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

        return $this;
    }

    /**
     * Gets links
     * @return \BumbalClient\Model\LinkModel[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \BumbalClient\Model\LinkModel[] $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets files
     * @return \BumbalClient\Model\FileModel[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     * @param \BumbalClient\Model\FileModel[] $files
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

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
     * Gets updated_by_name
     * @return string
     */
    public function getUpdatedByName()
    {
        return $this->container['updated_by_name'];
    }

    /**
     * Sets updated_by_name
     * @param string $updated_by_name Vehicle updated by user full name
     * @return $this
     */
    public function setUpdatedByName($updated_by_name)
    {
        $this->container['updated_by_name'] = $updated_by_name;

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


