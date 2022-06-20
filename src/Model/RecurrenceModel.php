<?php
/**
 * RecurrenceModel
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
 * RecurrenceModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RecurrenceModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RecurrenceModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'type_id' => 'int',
        'type_name' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'end_option' => 'string',
        'period_name' => 'string',
        'period_id' => 'int',
        'frequency' => 'int',
        'count' => 'int',
        'show_ahead' => 'int',
        'current' => 'int',
        'summary' => 'string',
        'next_run' => '\DateTime',
        'last_run' => '\DateTime',
        'active' => 'bool',
        'has_uncreated_objects' => 'bool',
        'meta_data' => '\BumbalClient\Model\MetaDataModel[]',
        'base' => 'string',
        'base_date' => 'string',
        'monday' => 'bool',
        'tuesday' => 'bool',
        'wednesday' => 'bool',
        'thursday' => 'bool',
        'friday' => 'bool',
        'saturday' => 'bool',
        'sunday' => 'bool',
        'month_day' => 'bool',
        'monthly_option' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'name' => null,
        'type_id' => null,
        'type_name' => null,
        'start_date' => 'date-time',
        'end_date' => 'date-time',
        'end_option' => null,
        'period_name' => null,
        'period_id' => null,
        'frequency' => 'int64',
        'count' => 'int64',
        'show_ahead' => 'int64',
        'current' => 'int64',
        'summary' => null,
        'next_run' => 'date-time',
        'last_run' => 'date-time',
        'active' => null,
        'has_uncreated_objects' => null,
        'meta_data' => null,
        'base' => null,
        'base_date' => null,
        'monday' => null,
        'tuesday' => null,
        'wednesday' => null,
        'thursday' => null,
        'friday' => null,
        'saturday' => null,
        'sunday' => null,
        'month_day' => null,
        'monthly_option' => null
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
        'type_id' => 'type_id',
        'type_name' => 'type_name',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'end_option' => 'end_option',
        'period_name' => 'period_name',
        'period_id' => 'period_id',
        'frequency' => 'frequency',
        'count' => 'count',
        'show_ahead' => 'show_ahead',
        'current' => 'current',
        'summary' => 'summary',
        'next_run' => 'next_run',
        'last_run' => 'last_run',
        'active' => 'active',
        'has_uncreated_objects' => 'has_uncreated_objects',
        'meta_data' => 'meta_data',
        'base' => 'base',
        'base_date' => 'base_date',
        'monday' => 'monday',
        'tuesday' => 'tuesday',
        'wednesday' => 'wednesday',
        'thursday' => 'thursday',
        'friday' => 'friday',
        'saturday' => 'saturday',
        'sunday' => 'sunday',
        'month_day' => 'month_day',
        'monthly_option' => 'monthly_option'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'type_id' => 'setTypeId',
        'type_name' => 'setTypeName',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'end_option' => 'setEndOption',
        'period_name' => 'setPeriodName',
        'period_id' => 'setPeriodId',
        'frequency' => 'setFrequency',
        'count' => 'setCount',
        'show_ahead' => 'setShowAhead',
        'current' => 'setCurrent',
        'summary' => 'setSummary',
        'next_run' => 'setNextRun',
        'last_run' => 'setLastRun',
        'active' => 'setActive',
        'has_uncreated_objects' => 'setHasUncreatedObjects',
        'meta_data' => 'setMetaData',
        'base' => 'setBase',
        'base_date' => 'setBaseDate',
        'monday' => 'setMonday',
        'tuesday' => 'setTuesday',
        'wednesday' => 'setWednesday',
        'thursday' => 'setThursday',
        'friday' => 'setFriday',
        'saturday' => 'setSaturday',
        'sunday' => 'setSunday',
        'month_day' => 'setMonthDay',
        'monthly_option' => 'setMonthlyOption'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'type_id' => 'getTypeId',
        'type_name' => 'getTypeName',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'end_option' => 'getEndOption',
        'period_name' => 'getPeriodName',
        'period_id' => 'getPeriodId',
        'frequency' => 'getFrequency',
        'count' => 'getCount',
        'show_ahead' => 'getShowAhead',
        'current' => 'getCurrent',
        'summary' => 'getSummary',
        'next_run' => 'getNextRun',
        'last_run' => 'getLastRun',
        'active' => 'getActive',
        'has_uncreated_objects' => 'getHasUncreatedObjects',
        'meta_data' => 'getMetaData',
        'base' => 'getBase',
        'base_date' => 'getBaseDate',
        'monday' => 'getMonday',
        'tuesday' => 'getTuesday',
        'wednesday' => 'getWednesday',
        'thursday' => 'getThursday',
        'friday' => 'getFriday',
        'saturday' => 'getSaturday',
        'sunday' => 'getSunday',
        'month_day' => 'getMonthDay',
        'monthly_option' => 'getMonthlyOption'
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

    const TYPE_NAME_ACTIVITY = 'activity';
    const TYPE_NAME_ROUTE = 'route';
    const END_OPTION_NEVER = 'never';
    const END_OPTION_INTERVAL_COUNT = 'interval_count';
    const END_OPTION_DATE = 'date';
    const PERIOD_NAME_DAY = 'day';
    const PERIOD_NAME_WEEK = 'week';
    const PERIOD_NAME_MONTH = 'month';
    const MONTHLY_OPTION_BEGIN = 'begin';
    const MONTHLY_OPTION_END = 'end';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeNameAllowableValues()
    {
        return [
            self::TYPE_NAME_ACTIVITY,
            self::TYPE_NAME_ROUTE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getEndOptionAllowableValues()
    {
        return [
            self::END_OPTION_NEVER,
            self::END_OPTION_INTERVAL_COUNT,
            self::END_OPTION_DATE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPeriodNameAllowableValues()
    {
        return [
            self::PERIOD_NAME_DAY,
            self::PERIOD_NAME_WEEK,
            self::PERIOD_NAME_MONTH,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getMonthlyOptionAllowableValues()
    {
        return [
            self::MONTHLY_OPTION_BEGIN,
            self::MONTHLY_OPTION_END,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['type_name'] = isset($data['type_name']) ? $data['type_name'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['end_option'] = isset($data['end_option']) ? $data['end_option'] : null;
        $this->container['period_name'] = isset($data['period_name']) ? $data['period_name'] : null;
        $this->container['period_id'] = isset($data['period_id']) ? $data['period_id'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['show_ahead'] = isset($data['show_ahead']) ? $data['show_ahead'] : null;
        $this->container['current'] = isset($data['current']) ? $data['current'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['next_run'] = isset($data['next_run']) ? $data['next_run'] : null;
        $this->container['last_run'] = isset($data['last_run']) ? $data['last_run'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['has_uncreated_objects'] = isset($data['has_uncreated_objects']) ? $data['has_uncreated_objects'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        $this->container['base'] = isset($data['base']) ? $data['base'] : null;
        $this->container['base_date'] = isset($data['base_date']) ? $data['base_date'] : null;
        $this->container['monday'] = isset($data['monday']) ? $data['monday'] : null;
        $this->container['tuesday'] = isset($data['tuesday']) ? $data['tuesday'] : null;
        $this->container['wednesday'] = isset($data['wednesday']) ? $data['wednesday'] : null;
        $this->container['thursday'] = isset($data['thursday']) ? $data['thursday'] : null;
        $this->container['friday'] = isset($data['friday']) ? $data['friday'] : null;
        $this->container['saturday'] = isset($data['saturday']) ? $data['saturday'] : null;
        $this->container['sunday'] = isset($data['sunday']) ? $data['sunday'] : null;
        $this->container['month_day'] = isset($data['month_day']) ? $data['month_day'] : null;
        $this->container['monthly_option'] = isset($data['monthly_option']) ? $data['monthly_option'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getTypeNameAllowableValues();
        if (!in_array($this->container['type_name'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'type_name', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getEndOptionAllowableValues();
        if (!in_array($this->container['end_option'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'end_option', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getPeriodNameAllowableValues();
        if (!in_array($this->container['period_name'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'period_name', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getMonthlyOptionAllowableValues();
        if (!in_array($this->container['monthly_option'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'monthly_option', must be one of '%s'",
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

        $allowed_values = $this->getTypeNameAllowableValues();
        if (!in_array($this->container['type_name'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getEndOptionAllowableValues();
        if (!in_array($this->container['end_option'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getPeriodNameAllowableValues();
        if (!in_array($this->container['period_name'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getMonthlyOptionAllowableValues();
        if (!in_array($this->container['monthly_option'], $allowed_values)) {
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
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Recurrence name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type_id
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     * @param int $type_id recurrence type_id, 11:activity, 24:route
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets type_name
     * @return string
     */
    public function getTypeName()
    {
        return $this->container['type_name'];
    }

    /**
     * Sets type_name
     * @param string $type_name recurrence type_name, activity, route
     * @return $this
     */
    public function setTypeName($type_name)
    {
        $allowed_values = $this->getTypeNameAllowableValues();
        if (!is_null($type_name) && !in_array($type_name, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type_name', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['type_name'] = $type_name;

        return $this;
    }

    /**
     * Gets start_date
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     * @param \DateTime $start_date Start date
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     * @param \DateTime $end_date End date
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets end_option
     * @return string
     */
    public function getEndOption()
    {
        return $this->container['end_option'];
    }

    /**
     * Sets end_option
     * @param string $end_option End option
     * @return $this
     */
    public function setEndOption($end_option)
    {
        $allowed_values = $this->getEndOptionAllowableValues();
        if (!is_null($end_option) && !in_array($end_option, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'end_option', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['end_option'] = $end_option;

        return $this;
    }

    /**
     * Gets period_name
     * @return string
     */
    public function getPeriodName()
    {
        return $this->container['period_name'];
    }

    /**
     * Sets period_name
     * @param string $period_name recurrence period_name, 1:day, 2:week, 3:month
     * @return $this
     */
    public function setPeriodName($period_name)
    {
        $allowed_values = $this->getPeriodNameAllowableValues();
        if (!is_null($period_name) && !in_array($period_name, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'period_name', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['period_name'] = $period_name;

        return $this;
    }

    /**
     * Gets period_id
     * @return int
     */
    public function getPeriodId()
    {
        return $this->container['period_id'];
    }

    /**
     * Sets period_id
     * @param int $period_id recurrence period_id, 1:day, 2:week, 3:month
     * @return $this
     */
    public function setPeriodId($period_id)
    {
        $this->container['period_id'] = $period_id;

        return $this;
    }

    /**
     * Gets frequency
     * @return int
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     * @param int $frequency period frequency of recurrence (2 = repeat each 2 days/weeks/months)
     * @return $this
     */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets count
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     * @param int $count nr of last recurrence to be created
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets show_ahead
     * @return int
     */
    public function getShowAhead()
    {
        return $this->container['show_ahead'];
    }

    /**
     * Sets show_ahead
     * @param int $show_ahead nr of recurrences to show ahead in system
     * @return $this
     */
    public function setShowAhead($show_ahead)
    {
        $this->container['show_ahead'] = $show_ahead;

        return $this;
    }

    /**
     * Gets current
     * @return int
     */
    public function getCurrent()
    {
        return $this->container['current'];
    }

    /**
     * Sets current
     * @param int $current last created recurrence nr
     * @return $this
     */
    public function setCurrent($current)
    {
        $this->container['current'] = $current;

        return $this;
    }

    /**
     * Gets summary
     * @return string
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     * @param string $summary summary of recurrence
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets next_run
     * @return \DateTime
     */
    public function getNextRun()
    {
        return $this->container['next_run'];
    }

    /**
     * Sets next_run
     * @param \DateTime $next_run Next date on which a new recurrence will be added
     * @return $this
     */
    public function setNextRun($next_run)
    {
        $this->container['next_run'] = $next_run;

        return $this;
    }

    /**
     * Gets last_run
     * @return \DateTime
     */
    public function getLastRun()
    {
        return $this->container['last_run'];
    }

    /**
     * Sets last_run
     * @param \DateTime $last_run Last date on which a new recurrence was added
     * @return $this
     */
    public function setLastRun($last_run)
    {
        $this->container['last_run'] = $last_run;

        return $this;
    }

    /**
     * Gets active
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     * @param bool $active if active=0: recurrence has been removed and is no longer visible in any bumbal interface
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets has_uncreated_objects
     * @return bool
     */
    public function getHasUncreatedObjects()
    {
        return $this->container['has_uncreated_objects'];
    }

    /**
     * Sets has_uncreated_objects
     * @param bool $has_uncreated_objects If the recurrence has uncreated objects
     * @return $this
     */
    public function setHasUncreatedObjects($has_uncreated_objects)
    {
        $this->container['has_uncreated_objects'] = $has_uncreated_objects;

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
     * Gets base
     * @return string
     */
    public function getBase()
    {
        return $this->container['base'];
    }

    /**
     * Sets base
     * @param string $base Recurrence base
     * @return $this
     */
    public function setBase($base)
    {
        $this->container['base'] = $base;

        return $this;
    }

    /**
     * Gets base_date
     * @return string
     */
    public function getBaseDate()
    {
        return $this->container['base_date'];
    }

    /**
     * Sets base_date
     * @param string $base_date Recurrence base date
     * @return $this
     */
    public function setBaseDate($base_date)
    {
        $this->container['base_date'] = $base_date;

        return $this;
    }

    /**
     * Gets monday
     * @return bool
     */
    public function getMonday()
    {
        return $this->container['monday'];
    }

    /**
     * Sets monday
     * @param bool $monday Monday
     * @return $this
     */
    public function setMonday($monday)
    {
        $this->container['monday'] = $monday;

        return $this;
    }

    /**
     * Gets tuesday
     * @return bool
     */
    public function getTuesday()
    {
        return $this->container['tuesday'];
    }

    /**
     * Sets tuesday
     * @param bool $tuesday Tuesday
     * @return $this
     */
    public function setTuesday($tuesday)
    {
        $this->container['tuesday'] = $tuesday;

        return $this;
    }

    /**
     * Gets wednesday
     * @return bool
     */
    public function getWednesday()
    {
        return $this->container['wednesday'];
    }

    /**
     * Sets wednesday
     * @param bool $wednesday Wednesday
     * @return $this
     */
    public function setWednesday($wednesday)
    {
        $this->container['wednesday'] = $wednesday;

        return $this;
    }

    /**
     * Gets thursday
     * @return bool
     */
    public function getThursday()
    {
        return $this->container['thursday'];
    }

    /**
     * Sets thursday
     * @param bool $thursday Thursday
     * @return $this
     */
    public function setThursday($thursday)
    {
        $this->container['thursday'] = $thursday;

        return $this;
    }

    /**
     * Gets friday
     * @return bool
     */
    public function getFriday()
    {
        return $this->container['friday'];
    }

    /**
     * Sets friday
     * @param bool $friday Friday
     * @return $this
     */
    public function setFriday($friday)
    {
        $this->container['friday'] = $friday;

        return $this;
    }

    /**
     * Gets saturday
     * @return bool
     */
    public function getSaturday()
    {
        return $this->container['saturday'];
    }

    /**
     * Sets saturday
     * @param bool $saturday Saturday
     * @return $this
     */
    public function setSaturday($saturday)
    {
        $this->container['saturday'] = $saturday;

        return $this;
    }

    /**
     * Gets sunday
     * @return bool
     */
    public function getSunday()
    {
        return $this->container['sunday'];
    }

    /**
     * Sets sunday
     * @param bool $sunday Sunday
     * @return $this
     */
    public function setSunday($sunday)
    {
        $this->container['sunday'] = $sunday;

        return $this;
    }

    /**
     * Gets month_day
     * @return bool
     */
    public function getMonthDay()
    {
        return $this->container['month_day'];
    }

    /**
     * Sets month_day
     * @param bool $month_day month day
     * @return $this
     */
    public function setMonthDay($month_day)
    {
        $this->container['month_day'] = $month_day;

        return $this;
    }

    /**
     * Gets monthly_option
     * @return string
     */
    public function getMonthlyOption()
    {
        return $this->container['monthly_option'];
    }

    /**
     * Sets monthly_option
     * @param string $monthly_option Recurrence occurs every beginning or ending of the month
     * @return $this
     */
    public function setMonthlyOption($monthly_option)
    {
        $allowed_values = $this->getMonthlyOptionAllowableValues();
        if (!is_null($monthly_option) && !in_array($monthly_option, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'monthly_option', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['monthly_option'] = $monthly_option;

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


