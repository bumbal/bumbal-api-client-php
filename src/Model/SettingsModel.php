<?php
/**
 * SettingsModel
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
 * SettingsModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SettingsModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SettingsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'settings_group_id' => 'int',
        'settings_group_name' => 'string',
        'key' => 'string',
        'value' => 'string',
        'value_options' => '\BumbalClient\Model\ValueOptionModel[]',
        'setting_updated_at' => '\DateTime',
        'setting_updated_by' => 'int',
        'setting_updated_by_user' => '\BumbalClient\Model\UsersModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'settings_group_id' => null,
        'settings_group_name' => null,
        'key' => null,
        'value' => null,
        'value_options' => null,
        'setting_updated_at' => 'date-time',
        'setting_updated_by' => null,
        'setting_updated_by_user' => null
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
        'settings_group_id' => 'settings_group_id',
        'settings_group_name' => 'settings_group_name',
        'key' => 'key',
        'value' => 'value',
        'value_options' => 'value_options',
        'setting_updated_at' => 'setting_updated_at',
        'setting_updated_by' => 'setting_updated_by',
        'setting_updated_by_user' => 'setting_updated_by_user'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'settings_group_id' => 'setSettingsGroupId',
        'settings_group_name' => 'setSettingsGroupName',
        'key' => 'setKey',
        'value' => 'setValue',
        'value_options' => 'setValueOptions',
        'setting_updated_at' => 'setSettingUpdatedAt',
        'setting_updated_by' => 'setSettingUpdatedBy',
        'setting_updated_by_user' => 'setSettingUpdatedByUser'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'settings_group_id' => 'getSettingsGroupId',
        'settings_group_name' => 'getSettingsGroupName',
        'key' => 'getKey',
        'value' => 'getValue',
        'value_options' => 'getValueOptions',
        'setting_updated_at' => 'getSettingUpdatedAt',
        'setting_updated_by' => 'getSettingUpdatedBy',
        'setting_updated_by_user' => 'getSettingUpdatedByUser'
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

    const SETTINGS_GROUP_NAME_GENERAL = 'general';
    const SETTINGS_GROUP_NAME_ADDRESS = 'address';
    const SETTINGS_GROUP_NAME_PACKAGE = 'package';
    const SETTINGS_GROUP_NAME_ACTIVITY = 'activity';
    const SETTINGS_GROUP_NAME_EQUIPMENT = 'equipment';
    const SETTINGS_GROUP_NAME_NOTE = 'note';
    const SETTINGS_GROUP_NAME_OPTIMISATION = 'optimisation';
    const SETTINGS_GROUP_NAME_FILTERS = 'filters';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSettingsGroupNameAllowableValues()
    {
        return [
            self::SETTINGS_GROUP_NAME_GENERAL,
            self::SETTINGS_GROUP_NAME_ADDRESS,
            self::SETTINGS_GROUP_NAME_PACKAGE,
            self::SETTINGS_GROUP_NAME_ACTIVITY,
            self::SETTINGS_GROUP_NAME_EQUIPMENT,
            self::SETTINGS_GROUP_NAME_NOTE,
            self::SETTINGS_GROUP_NAME_OPTIMISATION,
            self::SETTINGS_GROUP_NAME_FILTERS,
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
        $this->container['settings_group_id'] = isset($data['settings_group_id']) ? $data['settings_group_id'] : null;
        $this->container['settings_group_name'] = isset($data['settings_group_name']) ? $data['settings_group_name'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['value_options'] = isset($data['value_options']) ? $data['value_options'] : null;
        $this->container['setting_updated_at'] = isset($data['setting_updated_at']) ? $data['setting_updated_at'] : null;
        $this->container['setting_updated_by'] = isset($data['setting_updated_by']) ? $data['setting_updated_by'] : null;
        $this->container['setting_updated_by_user'] = isset($data['setting_updated_by_user']) ? $data['setting_updated_by_user'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getSettingsGroupNameAllowableValues();
        if (!in_array($this->container['settings_group_name'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'settings_group_name', must be one of '%s'",
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

        $allowed_values = $this->getSettingsGroupNameAllowableValues();
        if (!in_array($this->container['settings_group_name'], $allowed_values)) {
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
     * @param int $id 
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets settings_group_id
     * @return int
     */
    public function getSettingsGroupId()
    {
        return $this->container['settings_group_id'];
    }

    /**
     * Sets settings_group_id
     * @param int $settings_group_id SettingsGroup id of this setting. Possible values: 1: general, 2: address, 3: package, 4: activity, 5: equipment, 6: note, 7: optimisation, 8: filters
     * @return $this
     */
    public function setSettingsGroupId($settings_group_id)
    {
        $this->container['settings_group_id'] = $settings_group_id;

        return $this;
    }

    /**
     * Gets settings_group_name
     * @return string
     */
    public function getSettingsGroupName()
    {
        return $this->container['settings_group_name'];
    }

    /**
     * Sets settings_group_name
     * @param string $settings_group_name SettingsGroup name of this setting
     * @return $this
     */
    public function setSettingsGroupName($settings_group_name)
    {
        $allowed_values = $this->getSettingsGroupNameAllowableValues();
        if (!is_null($settings_group_name) && !in_array($settings_group_name, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'settings_group_name', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['settings_group_name'] = $settings_group_name;

        return $this;
    }

    /**
     * Gets key
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     * @param string $key Unique string key for setting identification
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets value
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param string $value Set value for setting
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets value_options
     * @return \BumbalClient\Model\ValueOptionModel[]
     */
    public function getValueOptions()
    {
        return $this->container['value_options'];
    }

    /**
     * Sets value_options
     * @param \BumbalClient\Model\ValueOptionModel[] $value_options 
     * @return $this
     */
    public function setValueOptions($value_options)
    {
        $this->container['value_options'] = $value_options;

        return $this;
    }

    /**
     * Gets setting_updated_at
     * @return \DateTime
     */
    public function getSettingUpdatedAt()
    {
        return $this->container['setting_updated_at'];
    }

    /**
     * Sets setting_updated_at
     * @param \DateTime $setting_updated_at updated_at date time
     * @return $this
     */
    public function setSettingUpdatedAt($setting_updated_at)
    {
        $this->container['setting_updated_at'] = $setting_updated_at;

        return $this;
    }

    /**
     * Gets setting_updated_by
     * @return int
     */
    public function getSettingUpdatedBy()
    {
        return $this->container['setting_updated_by'];
    }

    /**
     * Sets setting_updated_by
     * @param int $setting_updated_by updated_by user id
     * @return $this
     */
    public function setSettingUpdatedBy($setting_updated_by)
    {
        $this->container['setting_updated_by'] = $setting_updated_by;

        return $this;
    }

    /**
     * Gets setting_updated_by_user
     * @return \BumbalClient\Model\UsersModel
     */
    public function getSettingUpdatedByUser()
    {
        return $this->container['setting_updated_by_user'];
    }

    /**
     * Sets setting_updated_by_user
     * @param \BumbalClient\Model\UsersModel $setting_updated_by_user 
     * @return $this
     */
    public function setSettingUpdatedByUser($setting_updated_by_user)
    {
        $this->container['setting_updated_by_user'] = $setting_updated_by_user;

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


