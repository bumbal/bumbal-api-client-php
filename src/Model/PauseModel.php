<?php
/**
 * PauseModel
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
 * PauseModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PauseModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PauseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'drive_time_mode' => 'bool',
        'name' => 'string',
        'initial_driving_duration' => 'int',
        'max_driving_duration' => 'int',
        'pause_duration' => 'int',
        'possible_split' => 'int[]',
        'earliest_time' => 'string',
        'latest_time' => 'string',
        'links' => '\BumbalClient\Model\LinkModel[]',
        'meta_data' => '\BumbalClient\Model\MetaDataModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'drive_time_mode' => null,
        'name' => null,
        'initial_driving_duration' => 'int64',
        'max_driving_duration' => 'int64',
        'pause_duration' => 'int64',
        'possible_split' => null,
        'earliest_time' => 'time',
        'latest_time' => 'time',
        'links' => null,
        'meta_data' => null
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
        'drive_time_mode' => 'drive_time_mode',
        'name' => 'name',
        'initial_driving_duration' => 'initial_driving_duration',
        'max_driving_duration' => 'max_driving_duration',
        'pause_duration' => 'pause_duration',
        'possible_split' => 'possible_split',
        'earliest_time' => 'earliest_time',
        'latest_time' => 'latest_time',
        'links' => 'links',
        'meta_data' => 'meta_data'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'drive_time_mode' => 'setDriveTimeMode',
        'name' => 'setName',
        'initial_driving_duration' => 'setInitialDrivingDuration',
        'max_driving_duration' => 'setMaxDrivingDuration',
        'pause_duration' => 'setPauseDuration',
        'possible_split' => 'setPossibleSplit',
        'earliest_time' => 'setEarliestTime',
        'latest_time' => 'setLatestTime',
        'links' => 'setLinks',
        'meta_data' => 'setMetaData'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'drive_time_mode' => 'getDriveTimeMode',
        'name' => 'getName',
        'initial_driving_duration' => 'getInitialDrivingDuration',
        'max_driving_duration' => 'getMaxDrivingDuration',
        'pause_duration' => 'getPauseDuration',
        'possible_split' => 'getPossibleSplit',
        'earliest_time' => 'getEarliestTime',
        'latest_time' => 'getLatestTime',
        'links' => 'getLinks',
        'meta_data' => 'getMetaData'
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
        $this->container['drive_time_mode'] = isset($data['drive_time_mode']) ? $data['drive_time_mode'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['initial_driving_duration'] = isset($data['initial_driving_duration']) ? $data['initial_driving_duration'] : null;
        $this->container['max_driving_duration'] = isset($data['max_driving_duration']) ? $data['max_driving_duration'] : null;
        $this->container['pause_duration'] = isset($data['pause_duration']) ? $data['pause_duration'] : null;
        $this->container['possible_split'] = isset($data['possible_split']) ? $data['possible_split'] : null;
        $this->container['earliest_time'] = isset($data['earliest_time']) ? $data['earliest_time'] : null;
        $this->container['latest_time'] = isset($data['latest_time']) ? $data['latest_time'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
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
     * Gets drive_time_mode
     * @return bool
     */
    public function getDriveTimeMode()
    {
        return $this->container['drive_time_mode'];
    }

    /**
     * Sets drive_time_mode
     * @param bool $drive_time_mode Determines if pause is a drivetime pause or a timewindow pause
     * @return $this
     */
    public function setDriveTimeMode($drive_time_mode)
    {
        $this->container['drive_time_mode'] = $drive_time_mode;

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
     * @param string $name Name of pause
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets initial_driving_duration
     * @return int
     */
    public function getInitialDrivingDuration()
    {
        return $this->container['initial_driving_duration'];
    }

    /**
     * Sets initial_driving_duration
     * @param int $initial_driving_duration initial driving time in minutes until first possibility of starting pause. (Only used in servicewindow pause)
     * @return $this
     */
    public function setInitialDrivingDuration($initial_driving_duration)
    {
        $this->container['initial_driving_duration'] = $initial_driving_duration;

        return $this;
    }

    /**
     * Gets max_driving_duration
     * @return int
     */
    public function getMaxDrivingDuration()
    {
        return $this->container['max_driving_duration'];
    }

    /**
     * Sets max_driving_duration
     * @param int $max_driving_duration max driving time in minutes before a pause must be started
     * @return $this
     */
    public function setMaxDrivingDuration($max_driving_duration)
    {
        $this->container['max_driving_duration'] = $max_driving_duration;

        return $this;
    }

    /**
     * Gets pause_duration
     * @return int
     */
    public function getPauseDuration()
    {
        return $this->container['pause_duration'];
    }

    /**
     * Sets pause_duration
     * @param int $pause_duration (total) duration for pause(s) in minutes
     * @return $this
     */
    public function setPauseDuration($pause_duration)
    {
        $this->container['pause_duration'] = $pause_duration;

        return $this;
    }

    /**
     * Gets possible_split
     * @return int[]
     */
    public function getPossibleSplit()
    {
        return $this->container['possible_split'];
    }

    /**
     * Sets possible_split
     * @param int[] $possible_split A list of durations in minutes by which the total duration of the pause may be split. (Only used in servicewindow pause)
     * @return $this
     */
    public function setPossibleSplit($possible_split)
    {
        $this->container['possible_split'] = $possible_split;

        return $this;
    }

    /**
     * Gets earliest_time
     * @return string
     */
    public function getEarliestTime()
    {
        return $this->container['earliest_time'];
    }

    /**
     * Sets earliest_time
     * @param string $earliest_time Earliest time. (Only used in drivetime pause)
     * @return $this
     */
    public function setEarliestTime($earliest_time)
    {
        $this->container['earliest_time'] = $earliest_time;

        return $this;
    }

    /**
     * Gets latest_time
     * @return string
     */
    public function getLatestTime()
    {
        return $this->container['latest_time'];
    }

    /**
     * Sets latest_time
     * @param string $latest_time Latest time. (Only used in drivetime pause)
     * @return $this
     */
    public function setLatestTime($latest_time)
    {
        $this->container['latest_time'] = $latest_time;

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


