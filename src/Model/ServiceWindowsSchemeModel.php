<?php
/**
 * ServiceWindowsSchemeModel
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
 * ServiceWindowsSchemeModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ServiceWindowsSchemeModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ServiceWindowsSchemeModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'even_weeks' => 'bool',
        'odd_weeks' => 'bool',
        'tags' => '\BumbalClient\Model\TagModel[]',
        'zones' => '\BumbalClient\Model\ZoneModel[]',
        'brands' => '\BumbalClient\Model\BrandModel[]',
        'no_tags' => 'bool',
        'no_zones' => 'bool',
        'activity_type_ids' => 'int[]',
        'monday' => 'object',
        'tuesday' => 'object',
        'wednesday' => 'object',
        'thursday' => 'object',
        'friday' => 'object',
        'saturday' => 'object',
        'sunday' => 'object',
        'min_days_ahead' => 'int',
        'max_days_ahead' => 'int',
        'service_windows' => '\BumbalClient\Model\ServiceWindowModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'name' => 'int64',
        'even_weeks' => 'int64',
        'odd_weeks' => 'int64',
        'tags' => null,
        'zones' => null,
        'brands' => null,
        'no_tags' => null,
        'no_zones' => null,
        'activity_type_ids' => null,
        'monday' => null,
        'tuesday' => null,
        'wednesday' => null,
        'thursday' => null,
        'friday' => null,
        'saturday' => null,
        'sunday' => null,
        'min_days_ahead' => null,
        'max_days_ahead' => null,
        'service_windows' => null
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
        'even_weeks' => 'even_weeks',
        'odd_weeks' => 'odd_weeks',
        'tags' => 'tags',
        'zones' => 'zones',
        'brands' => 'brands',
        'no_tags' => 'no_tags',
        'no_zones' => 'no_zones',
        'activity_type_ids' => 'activity_type_ids',
        'monday' => 'monday',
        'tuesday' => 'tuesday',
        'wednesday' => 'wednesday',
        'thursday' => 'thursday',
        'friday' => 'friday',
        'saturday' => 'saturday',
        'sunday' => 'sunday',
        'min_days_ahead' => 'min_days_ahead',
        'max_days_ahead' => 'max_days_ahead',
        'service_windows' => 'service_windows'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'even_weeks' => 'setEvenWeeks',
        'odd_weeks' => 'setOddWeeks',
        'tags' => 'setTags',
        'zones' => 'setZones',
        'brands' => 'setBrands',
        'no_tags' => 'setNoTags',
        'no_zones' => 'setNoZones',
        'activity_type_ids' => 'setActivityTypeIds',
        'monday' => 'setMonday',
        'tuesday' => 'setTuesday',
        'wednesday' => 'setWednesday',
        'thursday' => 'setThursday',
        'friday' => 'setFriday',
        'saturday' => 'setSaturday',
        'sunday' => 'setSunday',
        'min_days_ahead' => 'setMinDaysAhead',
        'max_days_ahead' => 'setMaxDaysAhead',
        'service_windows' => 'setServiceWindows'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'even_weeks' => 'getEvenWeeks',
        'odd_weeks' => 'getOddWeeks',
        'tags' => 'getTags',
        'zones' => 'getZones',
        'brands' => 'getBrands',
        'no_tags' => 'getNoTags',
        'no_zones' => 'getNoZones',
        'activity_type_ids' => 'getActivityTypeIds',
        'monday' => 'getMonday',
        'tuesday' => 'getTuesday',
        'wednesday' => 'getWednesday',
        'thursday' => 'getThursday',
        'friday' => 'getFriday',
        'saturday' => 'getSaturday',
        'sunday' => 'getSunday',
        'min_days_ahead' => 'getMinDaysAhead',
        'max_days_ahead' => 'getMaxDaysAhead',
        'service_windows' => 'getServiceWindows'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['even_weeks'] = isset($data['even_weeks']) ? $data['even_weeks'] : null;
        $this->container['odd_weeks'] = isset($data['odd_weeks']) ? $data['odd_weeks'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['zones'] = isset($data['zones']) ? $data['zones'] : null;
        $this->container['brands'] = isset($data['brands']) ? $data['brands'] : null;
        $this->container['no_tags'] = isset($data['no_tags']) ? $data['no_tags'] : null;
        $this->container['no_zones'] = isset($data['no_zones']) ? $data['no_zones'] : null;
        $this->container['activity_type_ids'] = isset($data['activity_type_ids']) ? $data['activity_type_ids'] : null;
        $this->container['monday'] = isset($data['monday']) ? $data['monday'] : null;
        $this->container['tuesday'] = isset($data['tuesday']) ? $data['tuesday'] : null;
        $this->container['wednesday'] = isset($data['wednesday']) ? $data['wednesday'] : null;
        $this->container['thursday'] = isset($data['thursday']) ? $data['thursday'] : null;
        $this->container['friday'] = isset($data['friday']) ? $data['friday'] : null;
        $this->container['saturday'] = isset($data['saturday']) ? $data['saturday'] : null;
        $this->container['sunday'] = isset($data['sunday']) ? $data['sunday'] : null;
        $this->container['min_days_ahead'] = isset($data['min_days_ahead']) ? $data['min_days_ahead'] : null;
        $this->container['max_days_ahead'] = isset($data['max_days_ahead']) ? $data['max_days_ahead'] : null;
        $this->container['service_windows'] = isset($data['service_windows']) ? $data['service_windows'] : null;
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
     * @param string $name Service windows scheme name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets even_weeks
     * @return bool
     */
    public function getEvenWeeks()
    {
        return $this->container['even_weeks'];
    }

    /**
     * Sets even_weeks
     * @param bool $even_weeks even weeks
     * @return $this
     */
    public function setEvenWeeks($even_weeks)
    {
        $this->container['even_weeks'] = $even_weeks;

        return $this;
    }

    /**
     * Gets odd_weeks
     * @return bool
     */
    public function getOddWeeks()
    {
        return $this->container['odd_weeks'];
    }

    /**
     * Sets odd_weeks
     * @param bool $odd_weeks odd weeks
     * @return $this
     */
    public function setOddWeeks($odd_weeks)
    {
        $this->container['odd_weeks'] = $odd_weeks;

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
     * Gets zones
     * @return \BumbalClient\Model\ZoneModel[]
     */
    public function getZones()
    {
        return $this->container['zones'];
    }

    /**
     * Sets zones
     * @param \BumbalClient\Model\ZoneModel[] $zones 
     * @return $this
     */
    public function setZones($zones)
    {
        $this->container['zones'] = $zones;

        return $this;
    }

    /**
     * Gets brands
     * @return \BumbalClient\Model\BrandModel[]
     */
    public function getBrands()
    {
        return $this->container['brands'];
    }

    /**
     * Sets brands
     * @param \BumbalClient\Model\BrandModel[] $brands 
     * @return $this
     */
    public function setBrands($brands)
    {
        $this->container['brands'] = $brands;

        return $this;
    }

    /**
     * Gets no_tags
     * @return bool
     */
    public function getNoTags()
    {
        return $this->container['no_tags'];
    }

    /**
     * Sets no_tags
     * @param bool $no_tags No tags boolean value
     * @return $this
     */
    public function setNoTags($no_tags)
    {
        $this->container['no_tags'] = $no_tags;

        return $this;
    }

    /**
     * Gets no_zones
     * @return bool
     */
    public function getNoZones()
    {
        return $this->container['no_zones'];
    }

    /**
     * Sets no_zones
     * @param bool $no_zones No zones boolean value
     * @return $this
     */
    public function setNoZones($no_zones)
    {
        $this->container['no_zones'] = $no_zones;

        return $this;
    }

    /**
     * Gets activity_type_ids
     * @return int[]
     */
    public function getActivityTypeIds()
    {
        return $this->container['activity_type_ids'];
    }

    /**
     * Sets activity_type_ids
     * @param int[] $activity_type_ids Activity type ids
     * @return $this
     */
    public function setActivityTypeIds($activity_type_ids)
    {
        $this->container['activity_type_ids'] = $activity_type_ids;

        return $this;
    }

    /**
     * Gets monday
     * @return object
     */
    public function getMonday()
    {
        return $this->container['monday'];
    }

    /**
     * Sets monday
     * @param object $monday ServiceWindowDayModel containing the cut off information
     * @return $this
     */
    public function setMonday($monday)
    {
        $this->container['monday'] = $monday;

        return $this;
    }

    /**
     * Gets tuesday
     * @return object
     */
    public function getTuesday()
    {
        return $this->container['tuesday'];
    }

    /**
     * Sets tuesday
     * @param object $tuesday ServiceWindowDayModel containing the cut off information
     * @return $this
     */
    public function setTuesday($tuesday)
    {
        $this->container['tuesday'] = $tuesday;

        return $this;
    }

    /**
     * Gets wednesday
     * @return object
     */
    public function getWednesday()
    {
        return $this->container['wednesday'];
    }

    /**
     * Sets wednesday
     * @param object $wednesday ServiceWindowDayModel containing the cut off information
     * @return $this
     */
    public function setWednesday($wednesday)
    {
        $this->container['wednesday'] = $wednesday;

        return $this;
    }

    /**
     * Gets thursday
     * @return object
     */
    public function getThursday()
    {
        return $this->container['thursday'];
    }

    /**
     * Sets thursday
     * @param object $thursday ServiceWindowDayModel containing the cut off information
     * @return $this
     */
    public function setThursday($thursday)
    {
        $this->container['thursday'] = $thursday;

        return $this;
    }

    /**
     * Gets friday
     * @return object
     */
    public function getFriday()
    {
        return $this->container['friday'];
    }

    /**
     * Sets friday
     * @param object $friday ServiceWindowDayModel containing the cut off information
     * @return $this
     */
    public function setFriday($friday)
    {
        $this->container['friday'] = $friday;

        return $this;
    }

    /**
     * Gets saturday
     * @return object
     */
    public function getSaturday()
    {
        return $this->container['saturday'];
    }

    /**
     * Sets saturday
     * @param object $saturday ServiceWindowDayModel containing the cut off information
     * @return $this
     */
    public function setSaturday($saturday)
    {
        $this->container['saturday'] = $saturday;

        return $this;
    }

    /**
     * Gets sunday
     * @return object
     */
    public function getSunday()
    {
        return $this->container['sunday'];
    }

    /**
     * Sets sunday
     * @param object $sunday ServiceWindowDayModel containing the cut off information
     * @return $this
     */
    public function setSunday($sunday)
    {
        $this->container['sunday'] = $sunday;

        return $this;
    }

    /**
     * Gets min_days_ahead
     * @return int
     */
    public function getMinDaysAhead()
    {
        return $this->container['min_days_ahead'];
    }

    /**
     * Sets min_days_ahead
     * @param int $min_days_ahead Number of min. days ahead
     * @return $this
     */
    public function setMinDaysAhead($min_days_ahead)
    {
        $this->container['min_days_ahead'] = $min_days_ahead;

        return $this;
    }

    /**
     * Gets max_days_ahead
     * @return int
     */
    public function getMaxDaysAhead()
    {
        return $this->container['max_days_ahead'];
    }

    /**
     * Sets max_days_ahead
     * @param int $max_days_ahead Number of max. days ahead
     * @return $this
     */
    public function setMaxDaysAhead($max_days_ahead)
    {
        $this->container['max_days_ahead'] = $max_days_ahead;

        return $this;
    }

    /**
     * Gets service_windows
     * @return \BumbalClient\Model\ServiceWindowModel[]
     */
    public function getServiceWindows()
    {
        return $this->container['service_windows'];
    }

    /**
     * Sets service_windows
     * @param \BumbalClient\Model\ServiceWindowModel[] $service_windows 
     * @return $this
     */
    public function setServiceWindows($service_windows)
    {
        $this->container['service_windows'] = $service_windows;

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


