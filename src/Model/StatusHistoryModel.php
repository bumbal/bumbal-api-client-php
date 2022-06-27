<?php
/**
 * StatusHistoryModel
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
 * StatusHistoryModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StatusHistoryModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'StatusHistoryModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'old_status_id' => 'int',
        'new_status_id' => 'int',
        'object_type' => 'int',
        'object_id' => 'int',
        'record_snapshot' => 'int',
        'status_history_created_by' => 'int',
        'status_history_created_at' => 'int',
        'user_first_name' => 'int',
        'user_last_name' => 'string',
        'user_name_prefix' => 'string',
        'user_full_name' => 'string',
        'user_email' => 'string',
        'user_uuid' => 'string',
        'old_status_name' => 'string',
        'new_status_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'old_status_id' => 'int64',
        'new_status_id' => 'int64',
        'object_type' => 'int64',
        'object_id' => 'int64',
        'record_snapshot' => 'int64',
        'status_history_created_by' => 'int64',
        'status_history_created_at' => 'int64',
        'user_first_name' => 'int64',
        'user_last_name' => null,
        'user_name_prefix' => null,
        'user_full_name' => null,
        'user_email' => null,
        'user_uuid' => null,
        'old_status_name' => null,
        'new_status_name' => null
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
        'old_status_id' => 'old_status_id',
        'new_status_id' => 'new_status_id',
        'object_type' => 'object_type',
        'object_id' => 'object_id',
        'record_snapshot' => 'record_snapshot',
        'status_history_created_by' => 'status_history_created_by',
        'status_history_created_at' => 'status_history_created_at',
        'user_first_name' => 'user_first_name',
        'user_last_name' => 'user_last_name',
        'user_name_prefix' => 'user_name_prefix',
        'user_full_name' => 'user_full_name',
        'user_email' => 'user_email',
        'user_uuid' => 'user_uuid',
        'old_status_name' => 'old_status_name',
        'new_status_name' => 'new_status_name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'old_status_id' => 'setOldStatusId',
        'new_status_id' => 'setNewStatusId',
        'object_type' => 'setObjectType',
        'object_id' => 'setObjectId',
        'record_snapshot' => 'setRecordSnapshot',
        'status_history_created_by' => 'setStatusHistoryCreatedBy',
        'status_history_created_at' => 'setStatusHistoryCreatedAt',
        'user_first_name' => 'setUserFirstName',
        'user_last_name' => 'setUserLastName',
        'user_name_prefix' => 'setUserNamePrefix',
        'user_full_name' => 'setUserFullName',
        'user_email' => 'setUserEmail',
        'user_uuid' => 'setUserUuid',
        'old_status_name' => 'setOldStatusName',
        'new_status_name' => 'setNewStatusName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'old_status_id' => 'getOldStatusId',
        'new_status_id' => 'getNewStatusId',
        'object_type' => 'getObjectType',
        'object_id' => 'getObjectId',
        'record_snapshot' => 'getRecordSnapshot',
        'status_history_created_by' => 'getStatusHistoryCreatedBy',
        'status_history_created_at' => 'getStatusHistoryCreatedAt',
        'user_first_name' => 'getUserFirstName',
        'user_last_name' => 'getUserLastName',
        'user_name_prefix' => 'getUserNamePrefix',
        'user_full_name' => 'getUserFullName',
        'user_email' => 'getUserEmail',
        'user_uuid' => 'getUserUuid',
        'old_status_name' => 'getOldStatusName',
        'new_status_name' => 'getNewStatusName'
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
        $this->container['old_status_id'] = isset($data['old_status_id']) ? $data['old_status_id'] : null;
        $this->container['new_status_id'] = isset($data['new_status_id']) ? $data['new_status_id'] : null;
        $this->container['object_type'] = isset($data['object_type']) ? $data['object_type'] : null;
        $this->container['object_id'] = isset($data['object_id']) ? $data['object_id'] : null;
        $this->container['record_snapshot'] = isset($data['record_snapshot']) ? $data['record_snapshot'] : null;
        $this->container['status_history_created_by'] = isset($data['status_history_created_by']) ? $data['status_history_created_by'] : null;
        $this->container['status_history_created_at'] = isset($data['status_history_created_at']) ? $data['status_history_created_at'] : null;
        $this->container['user_first_name'] = isset($data['user_first_name']) ? $data['user_first_name'] : null;
        $this->container['user_last_name'] = isset($data['user_last_name']) ? $data['user_last_name'] : null;
        $this->container['user_name_prefix'] = isset($data['user_name_prefix']) ? $data['user_name_prefix'] : null;
        $this->container['user_full_name'] = isset($data['user_full_name']) ? $data['user_full_name'] : null;
        $this->container['user_email'] = isset($data['user_email']) ? $data['user_email'] : null;
        $this->container['user_uuid'] = isset($data['user_uuid']) ? $data['user_uuid'] : null;
        $this->container['old_status_name'] = isset($data['old_status_name']) ? $data['old_status_name'] : null;
        $this->container['new_status_name'] = isset($data['new_status_name']) ? $data['new_status_name'] : null;
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
     * Gets old_status_id
     * @return int
     */
    public function getOldStatusId()
    {
        return $this->container['old_status_id'];
    }

    /**
     * Sets old_status_id
     * @param int $old_status_id Service windows scheme ID
     * @return $this
     */
    public function setOldStatusId($old_status_id)
    {
        $this->container['old_status_id'] = $old_status_id;

        return $this;
    }

    /**
     * Gets new_status_id
     * @return int
     */
    public function getNewStatusId()
    {
        return $this->container['new_status_id'];
    }

    /**
     * Sets new_status_id
     * @param int $new_status_id Service windows scheme ID
     * @return $this
     */
    public function setNewStatusId($new_status_id)
    {
        $this->container['new_status_id'] = $new_status_id;

        return $this;
    }

    /**
     * Gets object_type
     * @return int
     */
    public function getObjectType()
    {
        return $this->container['object_type'];
    }

    /**
     * Sets object_type
     * @param int $object_type Service windows scheme ID
     * @return $this
     */
    public function setObjectType($object_type)
    {
        $this->container['object_type'] = $object_type;

        return $this;
    }

    /**
     * Gets object_id
     * @return int
     */
    public function getObjectId()
    {
        return $this->container['object_id'];
    }

    /**
     * Sets object_id
     * @param int $object_id Service windows scheme ID
     * @return $this
     */
    public function setObjectId($object_id)
    {
        $this->container['object_id'] = $object_id;

        return $this;
    }

    /**
     * Gets record_snapshot
     * @return int
     */
    public function getRecordSnapshot()
    {
        return $this->container['record_snapshot'];
    }

    /**
     * Sets record_snapshot
     * @param int $record_snapshot Service windows scheme ID
     * @return $this
     */
    public function setRecordSnapshot($record_snapshot)
    {
        $this->container['record_snapshot'] = $record_snapshot;

        return $this;
    }

    /**
     * Gets status_history_created_by
     * @return int
     */
    public function getStatusHistoryCreatedBy()
    {
        return $this->container['status_history_created_by'];
    }

    /**
     * Sets status_history_created_by
     * @param int $status_history_created_by Service windows scheme ID
     * @return $this
     */
    public function setStatusHistoryCreatedBy($status_history_created_by)
    {
        $this->container['status_history_created_by'] = $status_history_created_by;

        return $this;
    }

    /**
     * Gets status_history_created_at
     * @return int
     */
    public function getStatusHistoryCreatedAt()
    {
        return $this->container['status_history_created_at'];
    }

    /**
     * Sets status_history_created_at
     * @param int $status_history_created_at Service windows scheme ID
     * @return $this
     */
    public function setStatusHistoryCreatedAt($status_history_created_at)
    {
        $this->container['status_history_created_at'] = $status_history_created_at;

        return $this;
    }

    /**
     * Gets user_first_name
     * @return int
     */
    public function getUserFirstName()
    {
        return $this->container['user_first_name'];
    }

    /**
     * Sets user_first_name
     * @param int $user_first_name Week day
     * @return $this
     */
    public function setUserFirstName($user_first_name)
    {
        $this->container['user_first_name'] = $user_first_name;

        return $this;
    }

    /**
     * Gets user_last_name
     * @return string
     */
    public function getUserLastName()
    {
        return $this->container['user_last_name'];
    }

    /**
     * Sets user_last_name
     * @param string $user_last_name time from
     * @return $this
     */
    public function setUserLastName($user_last_name)
    {
        $this->container['user_last_name'] = $user_last_name;

        return $this;
    }

    /**
     * Gets user_name_prefix
     * @return string
     */
    public function getUserNamePrefix()
    {
        return $this->container['user_name_prefix'];
    }

    /**
     * Sets user_name_prefix
     * @param string $user_name_prefix time to
     * @return $this
     */
    public function setUserNamePrefix($user_name_prefix)
    {
        $this->container['user_name_prefix'] = $user_name_prefix;

        return $this;
    }

    /**
     * Gets user_full_name
     * @return string
     */
    public function getUserFullName()
    {
        return $this->container['user_full_name'];
    }

    /**
     * Sets user_full_name
     * @param string $user_full_name time to
     * @return $this
     */
    public function setUserFullName($user_full_name)
    {
        $this->container['user_full_name'] = $user_full_name;

        return $this;
    }

    /**
     * Gets user_email
     * @return string
     */
    public function getUserEmail()
    {
        return $this->container['user_email'];
    }

    /**
     * Sets user_email
     * @param string $user_email time to
     * @return $this
     */
    public function setUserEmail($user_email)
    {
        $this->container['user_email'] = $user_email;

        return $this;
    }

    /**
     * Gets user_uuid
     * @return string
     */
    public function getUserUuid()
    {
        return $this->container['user_uuid'];
    }

    /**
     * Sets user_uuid
     * @param string $user_uuid time to
     * @return $this
     */
    public function setUserUuid($user_uuid)
    {
        $this->container['user_uuid'] = $user_uuid;

        return $this;
    }

    /**
     * Gets old_status_name
     * @return string
     */
    public function getOldStatusName()
    {
        return $this->container['old_status_name'];
    }

    /**
     * Sets old_status_name
     * @param string $old_status_name time to
     * @return $this
     */
    public function setOldStatusName($old_status_name)
    {
        $this->container['old_status_name'] = $old_status_name;

        return $this;
    }

    /**
     * Gets new_status_name
     * @return string
     */
    public function getNewStatusName()
    {
        return $this->container['new_status_name'];
    }

    /**
     * Sets new_status_name
     * @param string $new_status_name time to
     * @return $this
     */
    public function setNewStatusName($new_status_name)
    {
        $this->container['new_status_name'] = $new_status_name;

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

