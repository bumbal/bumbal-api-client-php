<?php
/**
 * UserNotificationModel
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
 * UserNotificationModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserNotificationModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UserNotificationModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'user_id' => 'int',
        'notification_id' => 'int',
        'unread' => 'int',
        'pinned' => 'int',
        'archived' => 'int',
        'archive_date' => '\DateTime',
        'notification_created_at' => '\DateTime',
        'object_id' => 'int',
        'object_type' => 'int',
        'notification_updated_at' => '\DateTime',
        'object_type_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'user_id' => 'int64',
        'notification_id' => 'int64',
        'unread' => 'int64',
        'pinned' => 'int64',
        'archived' => 'int64',
        'archive_date' => 'date-time',
        'notification_created_at' => 'date-time',
        'object_id' => 'int64',
        'object_type' => 'int64',
        'notification_updated_at' => 'date-time',
        'object_type_name' => null
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
        'user_id' => 'user_id',
        'notification_id' => 'notification_id',
        'unread' => 'unread',
        'pinned' => 'pinned',
        'archived' => 'archived',
        'archive_date' => 'archive_date',
        'notification_created_at' => 'notification_created_at',
        'object_id' => 'object_id',
        'object_type' => 'object_type',
        'notification_updated_at' => 'notification_updated_at',
        'object_type_name' => 'object_type_name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user_id' => 'setUserId',
        'notification_id' => 'setNotificationId',
        'unread' => 'setUnread',
        'pinned' => 'setPinned',
        'archived' => 'setArchived',
        'archive_date' => 'setArchiveDate',
        'notification_created_at' => 'setNotificationCreatedAt',
        'object_id' => 'setObjectId',
        'object_type' => 'setObjectType',
        'notification_updated_at' => 'setNotificationUpdatedAt',
        'object_type_name' => 'setObjectTypeName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user_id' => 'getUserId',
        'notification_id' => 'getNotificationId',
        'unread' => 'getUnread',
        'pinned' => 'getPinned',
        'archived' => 'getArchived',
        'archive_date' => 'getArchiveDate',
        'notification_created_at' => 'getNotificationCreatedAt',
        'object_id' => 'getObjectId',
        'object_type' => 'getObjectType',
        'notification_updated_at' => 'getNotificationUpdatedAt',
        'object_type_name' => 'getObjectTypeName'
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
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['notification_id'] = isset($data['notification_id']) ? $data['notification_id'] : null;
        $this->container['unread'] = isset($data['unread']) ? $data['unread'] : null;
        $this->container['pinned'] = isset($data['pinned']) ? $data['pinned'] : null;
        $this->container['archived'] = isset($data['archived']) ? $data['archived'] : null;
        $this->container['archive_date'] = isset($data['archive_date']) ? $data['archive_date'] : null;
        $this->container['notification_created_at'] = isset($data['notification_created_at']) ? $data['notification_created_at'] : null;
        $this->container['object_id'] = isset($data['object_id']) ? $data['object_id'] : null;
        $this->container['object_type'] = isset($data['object_type']) ? $data['object_type'] : null;
        $this->container['notification_updated_at'] = isset($data['notification_updated_at']) ? $data['notification_updated_at'] : null;
        $this->container['object_type_name'] = isset($data['object_type_name']) ? $data['object_type_name'] : null;
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
     * Gets user_id
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param int $user_id User Identifier
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets notification_id
     * @return int
     */
    public function getNotificationId()
    {
        return $this->container['notification_id'];
    }

    /**
     * Sets notification_id
     * @param int $notification_id Notification Identifier
     * @return $this
     */
    public function setNotificationId($notification_id)
    {
        $this->container['notification_id'] = $notification_id;

        return $this;
    }

    /**
     * Gets unread
     * @return int
     */
    public function getUnread()
    {
        return $this->container['unread'];
    }

    /**
     * Sets unread
     * @param int $unread Unread status
     * @return $this
     */
    public function setUnread($unread)
    {
        $this->container['unread'] = $unread;

        return $this;
    }

    /**
     * Gets pinned
     * @return int
     */
    public function getPinned()
    {
        return $this->container['pinned'];
    }

    /**
     * Sets pinned
     * @param int $pinned Pinned status
     * @return $this
     */
    public function setPinned($pinned)
    {
        $this->container['pinned'] = $pinned;

        return $this;
    }

    /**
     * Gets archived
     * @return int
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     * @param int $archived Archived status
     * @return $this
     */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;

        return $this;
    }

    /**
     * Gets archive_date
     * @return \DateTime
     */
    public function getArchiveDate()
    {
        return $this->container['archive_date'];
    }

    /**
     * Sets archive_date
     * @param \DateTime $archive_date Archive date
     * @return $this
     */
    public function setArchiveDate($archive_date)
    {
        $this->container['archive_date'] = $archive_date;

        return $this;
    }

    /**
     * Gets notification_created_at
     * @return \DateTime
     */
    public function getNotificationCreatedAt()
    {
        return $this->container['notification_created_at'];
    }

    /**
     * Sets notification_created_at
     * @param \DateTime $notification_created_at Creation date
     * @return $this
     */
    public function setNotificationCreatedAt($notification_created_at)
    {
        $this->container['notification_created_at'] = $notification_created_at;

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
     * @param int $object_id Object Identifier
     * @return $this
     */
    public function setObjectId($object_id)
    {
        $this->container['object_id'] = $object_id;

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
     * @param int $object_type Object type ID
     * @return $this
     */
    public function setObjectType($object_type)
    {
        $this->container['object_type'] = $object_type;

        return $this;
    }

    /**
     * Gets notification_updated_at
     * @return \DateTime
     */
    public function getNotificationUpdatedAt()
    {
        return $this->container['notification_updated_at'];
    }

    /**
     * Sets notification_updated_at
     * @param \DateTime $notification_updated_at Modification date
     * @return $this
     */
    public function setNotificationUpdatedAt($notification_updated_at)
    {
        $this->container['notification_updated_at'] = $notification_updated_at;

        return $this;
    }

    /**
     * Gets object_type_name
     * @return string
     */
    public function getObjectTypeName()
    {
        return $this->container['object_type_name'];
    }

    /**
     * Sets object_type_name
     * @param string $object_type_name Object type name
     * @return $this
     */
    public function setObjectTypeName($object_type_name)
    {
        $this->container['object_type_name'] = $object_type_name;

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


