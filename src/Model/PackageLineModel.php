<?php
/**
 * PackageLineModel
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
 * PackageLineModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PackageLineModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PackageLineModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'activity_id' => 'int',
        'activity_ids' => 'int[]',
        'nr' => 'string',
        'status_id' => 'int',
        'status_name' => 'string',
        'nr_of_packages' => 'float',
        'package_type_name' => 'string',
        'package_type_id' => 'int',
        'barcode' => 'string',
        'barcodes' => 'string[]',
        'action_type_id' => 'string',
        'action_type_name' => 'string',
        'checked_by_driver' => 'bool',
        'adr' => 'bool',
        'adr_class' => 'int',
        'adr_un_nr' => 'int',
        'temp' => 'bool',
        'temp_min' => 'float',
        'temp_max' => 'float',
        'hs_code' => 'string',
        'description' => 'string',
        'compartments' => '\BumbalClient\Model\CompartmentModel[]',
        'active' => 'bool',
        'applied_capacities' => 'object',
        'capacities' => '\BumbalClient\Model\CapacityModel[]',
        'activity_links' => '\BumbalClient\Model\LinkModel[]',
        'links' => '\BumbalClient\Model\LinkModel[]',
        'meta_data' => '\BumbalClient\Model\MetaDataModel[]',
        'notes' => '\BumbalClient\Model\NoteModel[]',
        'files' => '\BumbalClient\Model\FileModel[]',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'package_line_created_at' => '\DateTime',
        'package_line_updated_at' => '\DateTime',
        'package_line_created_by' => 'int',
        'package_line_updated_by' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'activity_id' => 'int64',
        'activity_ids' => null,
        'nr' => null,
        'status_id' => null,
        'status_name' => null,
        'nr_of_packages' => 'float',
        'package_type_name' => null,
        'package_type_id' => null,
        'barcode' => null,
        'barcodes' => null,
        'action_type_id' => null,
        'action_type_name' => null,
        'checked_by_driver' => null,
        'adr' => null,
        'adr_class' => 'int64',
        'adr_un_nr' => 'int64',
        'temp' => null,
        'temp_min' => 'float',
        'temp_max' => 'float',
        'hs_code' => null,
        'description' => null,
        'compartments' => null,
        'active' => null,
        'applied_capacities' => null,
        'capacities' => null,
        'activity_links' => null,
        'links' => null,
        'meta_data' => null,
        'notes' => null,
        'files' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'package_line_created_at' => 'date-time',
        'package_line_updated_at' => 'date-time',
        'package_line_created_by' => null,
        'package_line_updated_by' => null
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
        'activity_id' => 'activity_id',
        'activity_ids' => 'activity_ids',
        'nr' => 'nr',
        'status_id' => 'status_id',
        'status_name' => 'status_name',
        'nr_of_packages' => 'nr_of_packages',
        'package_type_name' => 'package_type_name',
        'package_type_id' => 'package_type_id',
        'barcode' => 'barcode',
        'barcodes' => 'barcodes',
        'action_type_id' => 'action_type_id',
        'action_type_name' => 'action_type_name',
        'checked_by_driver' => 'checked_by_driver',
        'adr' => 'ADR',
        'adr_class' => 'ADR_class',
        'adr_un_nr' => 'ADR_UN_nr',
        'temp' => 'temp',
        'temp_min' => 'temp_min',
        'temp_max' => 'temp_max',
        'hs_code' => 'hs_code',
        'description' => 'description',
        'compartments' => 'compartments',
        'active' => 'active',
        'applied_capacities' => 'applied_capacities',
        'capacities' => 'capacities',
        'activity_links' => 'activity_links',
        'links' => 'links',
        'meta_data' => 'meta_data',
        'notes' => 'notes',
        'files' => 'files',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'package_line_created_at' => 'package_line_created_at',
        'package_line_updated_at' => 'package_line_updated_at',
        'package_line_created_by' => 'package_line_created_by',
        'package_line_updated_by' => 'package_line_updated_by'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'activity_id' => 'setActivityId',
        'activity_ids' => 'setActivityIds',
        'nr' => 'setNr',
        'status_id' => 'setStatusId',
        'status_name' => 'setStatusName',
        'nr_of_packages' => 'setNrOfPackages',
        'package_type_name' => 'setPackageTypeName',
        'package_type_id' => 'setPackageTypeId',
        'barcode' => 'setBarcode',
        'barcodes' => 'setBarcodes',
        'action_type_id' => 'setActionTypeId',
        'action_type_name' => 'setActionTypeName',
        'checked_by_driver' => 'setCheckedByDriver',
        'adr' => 'setAdr',
        'adr_class' => 'setAdrClass',
        'adr_un_nr' => 'setAdrUnNr',
        'temp' => 'setTemp',
        'temp_min' => 'setTempMin',
        'temp_max' => 'setTempMax',
        'hs_code' => 'setHsCode',
        'description' => 'setDescription',
        'compartments' => 'setCompartments',
        'active' => 'setActive',
        'applied_capacities' => 'setAppliedCapacities',
        'capacities' => 'setCapacities',
        'activity_links' => 'setActivityLinks',
        'links' => 'setLinks',
        'meta_data' => 'setMetaData',
        'notes' => 'setNotes',
        'files' => 'setFiles',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'package_line_created_at' => 'setPackageLineCreatedAt',
        'package_line_updated_at' => 'setPackageLineUpdatedAt',
        'package_line_created_by' => 'setPackageLineCreatedBy',
        'package_line_updated_by' => 'setPackageLineUpdatedBy'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'activity_id' => 'getActivityId',
        'activity_ids' => 'getActivityIds',
        'nr' => 'getNr',
        'status_id' => 'getStatusId',
        'status_name' => 'getStatusName',
        'nr_of_packages' => 'getNrOfPackages',
        'package_type_name' => 'getPackageTypeName',
        'package_type_id' => 'getPackageTypeId',
        'barcode' => 'getBarcode',
        'barcodes' => 'getBarcodes',
        'action_type_id' => 'getActionTypeId',
        'action_type_name' => 'getActionTypeName',
        'checked_by_driver' => 'getCheckedByDriver',
        'adr' => 'getAdr',
        'adr_class' => 'getAdrClass',
        'adr_un_nr' => 'getAdrUnNr',
        'temp' => 'getTemp',
        'temp_min' => 'getTempMin',
        'temp_max' => 'getTempMax',
        'hs_code' => 'getHsCode',
        'description' => 'getDescription',
        'compartments' => 'getCompartments',
        'active' => 'getActive',
        'applied_capacities' => 'getAppliedCapacities',
        'capacities' => 'getCapacities',
        'activity_links' => 'getActivityLinks',
        'links' => 'getLinks',
        'meta_data' => 'getMetaData',
        'notes' => 'getNotes',
        'files' => 'getFiles',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'package_line_created_at' => 'getPackageLineCreatedAt',
        'package_line_updated_at' => 'getPackageLineUpdatedAt',
        'package_line_created_by' => 'getPackageLineCreatedBy',
        'package_line_updated_by' => 'getPackageLineUpdatedBy'
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

    const STATUS_NAME_CANCELLED = 'package_line_cancelled';
    const STATUS_NAME_INCOMPLETE = 'package_line_incomplete';
    const STATUS_NAME__NEW = 'package_line_new';
    const STATUS_NAME_AWAITING = 'package_line_awaiting';
    const STATUS_NAME_ACCEPTED = 'package_line_accepted';
    const STATUS_NAME_PLANNED = 'package_line_planned';
    const STATUS_NAME_IN_PROGRESS = 'package_line_in_progress';
    const STATUS_NAME_EXECUTED = 'package_line_executed';
    const ACTION_TYPE_ID__1 = '1';
    const ACTION_TYPE_ID__2 = '2';
    const ACTION_TYPE_ID__3 = '3';
    const ACTION_TYPE_NAME_INBOUND = 'inbound';
    const ACTION_TYPE_NAME_OUTBOUND = 'outbound';
    const ACTION_TYPE_NAME_ASSESS = 'assess';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusNameAllowableValues()
    {
        return [
            self::STATUS_NAME_CANCELLED,
            self::STATUS_NAME_INCOMPLETE,
            self::STATUS_NAME__NEW,
            self::STATUS_NAME_AWAITING,
            self::STATUS_NAME_ACCEPTED,
            self::STATUS_NAME_PLANNED,
            self::STATUS_NAME_IN_PROGRESS,
            self::STATUS_NAME_EXECUTED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getActionTypeIdAllowableValues()
    {
        return [
            self::ACTION_TYPE_ID__1,
            self::ACTION_TYPE_ID__2,
            self::ACTION_TYPE_ID__3,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getActionTypeNameAllowableValues()
    {
        return [
            self::ACTION_TYPE_NAME_INBOUND,
            self::ACTION_TYPE_NAME_OUTBOUND,
            self::ACTION_TYPE_NAME_ASSESS,
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
        $this->container['activity_id'] = isset($data['activity_id']) ? $data['activity_id'] : null;
        $this->container['activity_ids'] = isset($data['activity_ids']) ? $data['activity_ids'] : null;
        $this->container['nr'] = isset($data['nr']) ? $data['nr'] : null;
        $this->container['status_id'] = isset($data['status_id']) ? $data['status_id'] : null;
        $this->container['status_name'] = isset($data['status_name']) ? $data['status_name'] : null;
        $this->container['nr_of_packages'] = isset($data['nr_of_packages']) ? $data['nr_of_packages'] : null;
        $this->container['package_type_name'] = isset($data['package_type_name']) ? $data['package_type_name'] : null;
        $this->container['package_type_id'] = isset($data['package_type_id']) ? $data['package_type_id'] : null;
        $this->container['barcode'] = isset($data['barcode']) ? $data['barcode'] : null;
        $this->container['barcodes'] = isset($data['barcodes']) ? $data['barcodes'] : null;
        $this->container['action_type_id'] = isset($data['action_type_id']) ? $data['action_type_id'] : null;
        $this->container['action_type_name'] = isset($data['action_type_name']) ? $data['action_type_name'] : null;
        $this->container['checked_by_driver'] = isset($data['checked_by_driver']) ? $data['checked_by_driver'] : null;
        $this->container['adr'] = isset($data['adr']) ? $data['adr'] : null;
        $this->container['adr_class'] = isset($data['adr_class']) ? $data['adr_class'] : null;
        $this->container['adr_un_nr'] = isset($data['adr_un_nr']) ? $data['adr_un_nr'] : null;
        $this->container['temp'] = isset($data['temp']) ? $data['temp'] : null;
        $this->container['temp_min'] = isset($data['temp_min']) ? $data['temp_min'] : null;
        $this->container['temp_max'] = isset($data['temp_max']) ? $data['temp_max'] : null;
        $this->container['hs_code'] = isset($data['hs_code']) ? $data['hs_code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['compartments'] = isset($data['compartments']) ? $data['compartments'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['applied_capacities'] = isset($data['applied_capacities']) ? $data['applied_capacities'] : null;
        $this->container['capacities'] = isset($data['capacities']) ? $data['capacities'] : null;
        $this->container['activity_links'] = isset($data['activity_links']) ? $data['activity_links'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['package_line_created_at'] = isset($data['package_line_created_at']) ? $data['package_line_created_at'] : null;
        $this->container['package_line_updated_at'] = isset($data['package_line_updated_at']) ? $data['package_line_updated_at'] : null;
        $this->container['package_line_created_by'] = isset($data['package_line_created_by']) ? $data['package_line_created_by'] : null;
        $this->container['package_line_updated_by'] = isset($data['package_line_updated_by']) ? $data['package_line_updated_by'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getStatusNameAllowableValues();
        if (!in_array($this->container['status_name'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'status_name', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getActionTypeIdAllowableValues();
        if (!in_array($this->container['action_type_id'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'action_type_id', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getActionTypeNameAllowableValues();
        if (!in_array($this->container['action_type_name'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'action_type_name', must be one of '%s'",
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

        $allowed_values = $this->getStatusNameAllowableValues();
        if (!in_array($this->container['status_name'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getActionTypeIdAllowableValues();
        if (!in_array($this->container['action_type_id'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getActionTypeNameAllowableValues();
        if (!in_array($this->container['action_type_name'], $allowed_values)) {
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
     * Gets activity_id
     * @return int
     */
    public function getActivityId()
    {
        return $this->container['activity_id'];
    }

    /**
     * Sets activity_id
     * @param int $activity_id Unique Identifier for activity where this packageline is related to
     * @return $this
     */
    public function setActivityId($activity_id)
    {
        $this->container['activity_id'] = $activity_id;

        return $this;
    }

    /**
     * Gets activity_ids
     * @return int[]
     */
    public function getActivityIds()
    {
        return $this->container['activity_ids'];
    }

    /**
     * Sets activity_ids
     * @param int[] $activity_ids Unique Identifier for activities where this packageline is related to
     * @return $this
     */
    public function setActivityIds($activity_ids)
    {
        $this->container['activity_ids'] = $activity_ids;

        return $this;
    }

    /**
     * Gets nr
     * @return string
     */
    public function getNr()
    {
        return $this->container['nr'];
    }

    /**
     * Sets nr
     * @param string $nr Number of this PackageLine
     * @return $this
     */
    public function setNr($nr)
    {
        $this->container['nr'] = $nr;

        return $this;
    }

    /**
     * Gets status_id
     * @return int
     */
    public function getStatusId()
    {
        return $this->container['status_id'];
    }

    /**
     * Sets status_id
     * @param int $status_id StatusId of this PackageLine, 31: package_line_cancelled, 23: package_line_incomplete, 24: package_line_new, 42: package_line_awaiting, 25: package_line_accepted, 10: package_line_planned, 11: package_line_in_progress, 12: package_line_executed
     * @return $this
     */
    public function setStatusId($status_id)
    {
        $this->container['status_id'] = $status_id;

        return $this;
    }

    /**
     * Gets status_name
     * @return string
     */
    public function getStatusName()
    {
        return $this->container['status_name'];
    }

    /**
     * Sets status_name
     * @param string $status_name PackageLine Status
     * @return $this
     */
    public function setStatusName($status_name)
    {
        $allowed_values = $this->getStatusNameAllowableValues();
        if (!is_null($status_name) && !in_array($status_name, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status_name', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['status_name'] = $status_name;

        return $this;
    }

    /**
     * Gets nr_of_packages
     * @return float
     */
    public function getNrOfPackages()
    {
        return $this->container['nr_of_packages'];
    }

    /**
     * Sets nr_of_packages
     * @param float $nr_of_packages Number of packages in package line
     * @return $this
     */
    public function setNrOfPackages($nr_of_packages)
    {
        $this->container['nr_of_packages'] = $nr_of_packages;

        return $this;
    }

    /**
     * Gets package_type_name
     * @return string
     */
    public function getPackageTypeName()
    {
        return $this->container['package_type_name'];
    }

    /**
     * Sets package_type_name
     * @param string $package_type_name Type of the Packages in the package line
     * @return $this
     */
    public function setPackageTypeName($package_type_name)
    {
        $this->container['package_type_name'] = $package_type_name;

        return $this;
    }

    /**
     * Gets package_type_id
     * @return int
     */
    public function getPackageTypeId()
    {
        return $this->container['package_type_id'];
    }

    /**
     * Sets package_type_id
     * @param int $package_type_id ID of the package type for the packages in this PackageLine
     * @return $this
     */
    public function setPackageTypeId($package_type_id)
    {
        $this->container['package_type_id'] = $package_type_id;

        return $this;
    }

    /**
     * Gets barcode
     * @return string
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     * @param string $barcode Barcode of this packageline
     * @return $this
     */
    public function setBarcode($barcode)
    {
        $this->container['barcode'] = $barcode;

        return $this;
    }

    /**
     * Gets barcodes
     * @return string[]
     */
    public function getBarcodes()
    {
        return $this->container['barcodes'];
    }

    /**
     * Sets barcodes
     * @param string[] $barcodes For every barcode in this array, a seperate packageline will be created
     * @return $this
     */
    public function setBarcodes($barcodes)
    {
        $this->container['barcodes'] = $barcodes;

        return $this;
    }

    /**
     * Gets action_type_id
     * @return string
     */
    public function getActionTypeId()
    {
        return $this->container['action_type_id'];
    }

    /**
     * Sets action_type_id
     * @param string $action_type_id Action type name, 1:inbound, 2:outbound, 3:assess
     * @return $this
     */
    public function setActionTypeId($action_type_id)
    {
        $allowed_values = $this->getActionTypeIdAllowableValues();
        if (!is_null($action_type_id) && !in_array($action_type_id, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'action_type_id', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['action_type_id'] = $action_type_id;

        return $this;
    }

    /**
     * Gets action_type_name
     * @return string
     */
    public function getActionTypeName()
    {
        return $this->container['action_type_name'];
    }

    /**
     * Sets action_type_name
     * @param string $action_type_name Action type name
     * @return $this
     */
    public function setActionTypeName($action_type_name)
    {
        $allowed_values = $this->getActionTypeNameAllowableValues();
        if (!is_null($action_type_name) && !in_array($action_type_name, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'action_type_name', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['action_type_name'] = $action_type_name;

        return $this;
    }

    /**
     * Gets checked_by_driver
     * @return bool
     */
    public function getCheckedByDriver()
    {
        return $this->container['checked_by_driver'];
    }

    /**
     * Sets checked_by_driver
     * @param bool $checked_by_driver boolean for whether or not the packages have been checked by the driver
     * @return $this
     */
    public function setCheckedByDriver($checked_by_driver)
    {
        $this->container['checked_by_driver'] = $checked_by_driver;

        return $this;
    }

    /**
     * Gets adr
     * @return bool
     */
    public function getAdr()
    {
        return $this->container['adr'];
    }

    /**
     * Sets adr
     * @param bool $adr boolean for whether or not the packages in this package line should be considered as ADR
     * @return $this
     */
    public function setAdr($adr)
    {
        $this->container['adr'] = $adr;

        return $this;
    }

    /**
     * Gets adr_class
     * @return int
     */
    public function getAdrClass()
    {
        return $this->container['adr_class'];
    }

    /**
     * Sets adr_class
     * @param int $adr_class ADR class of packages in package line
     * @return $this
     */
    public function setAdrClass($adr_class)
    {
        $this->container['adr_class'] = $adr_class;

        return $this;
    }

    /**
     * Gets adr_un_nr
     * @return int
     */
    public function getAdrUnNr()
    {
        return $this->container['adr_un_nr'];
    }

    /**
     * Sets adr_un_nr
     * @param int $adr_un_nr ADR UN Nr of packages in package line
     * @return $this
     */
    public function setAdrUnNr($adr_un_nr)
    {
        $this->container['adr_un_nr'] = $adr_un_nr;

        return $this;
    }

    /**
     * Gets temp
     * @return bool
     */
    public function getTemp()
    {
        return $this->container['temp'];
    }

    /**
     * Sets temp
     * @param bool $temp boolean for whether or not the packages in this package line should be considered as temperature dependent
     * @return $this
     */
    public function setTemp($temp)
    {
        $this->container['temp'] = $temp;

        return $this;
    }

    /**
     * Gets temp_min
     * @return float
     */
    public function getTempMin()
    {
        return $this->container['temp_min'];
    }

    /**
     * Sets temp_min
     * @param float $temp_min minimum temperature for packages in package line
     * @return $this
     */
    public function setTempMin($temp_min)
    {
        $this->container['temp_min'] = $temp_min;

        return $this;
    }

    /**
     * Gets temp_max
     * @return float
     */
    public function getTempMax()
    {
        return $this->container['temp_max'];
    }

    /**
     * Sets temp_max
     * @param float $temp_max maximum temperature for packages in package line
     * @return $this
     */
    public function setTempMax($temp_max)
    {
        $this->container['temp_max'] = $temp_max;

        return $this;
    }

    /**
     * Gets hs_code
     * @return string
     */
    public function getHsCode()
    {
        return $this->container['hs_code'];
    }

    /**
     * Sets hs_code
     * @param string $hs_code Harmonized System code for packages in this package line
     * @return $this
     */
    public function setHsCode($hs_code)
    {
        $this->container['hs_code'] = $hs_code;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description description of this package_line
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets compartments
     * @return \BumbalClient\Model\CompartmentModel[]
     */
    public function getCompartments()
    {
        return $this->container['compartments'];
    }

    /**
     * Sets compartments
     * @param \BumbalClient\Model\CompartmentModel[] $compartments 
     * @return $this
     */
    public function setCompartments($compartments)
    {
        $this->container['compartments'] = $compartments;

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
     * @param bool $active if active=0: package line has been removed and is no longer visible in any bumbal interface
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

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
     * Gets activity_links
     * @return \BumbalClient\Model\LinkModel[]
     */
    public function getActivityLinks()
    {
        return $this->container['activity_links'];
    }

    /**
     * Sets activity_links
     * @param \BumbalClient\Model\LinkModel[] $activity_links links to activities connected to this package_line
     * @return $this
     */
    public function setActivityLinks($activity_links)
    {
        $this->container['activity_links'] = $activity_links;

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
     * Gets notes
     * @return \BumbalClient\Model\NoteModel[]
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     * @param \BumbalClient\Model\NoteModel[] $notes 
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

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
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param \DateTime $created_at created_at date time
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param \DateTime $updated_at updated_at date time
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets package_line_created_at
     * @return \DateTime
     */
    public function getPackageLineCreatedAt()
    {
        return $this->container['package_line_created_at'];
    }

    /**
     * Sets package_line_created_at
     * @param \DateTime $package_line_created_at created_at date time
     * @return $this
     */
    public function setPackageLineCreatedAt($package_line_created_at)
    {
        $this->container['package_line_created_at'] = $package_line_created_at;

        return $this;
    }

    /**
     * Gets package_line_updated_at
     * @return \DateTime
     */
    public function getPackageLineUpdatedAt()
    {
        return $this->container['package_line_updated_at'];
    }

    /**
     * Sets package_line_updated_at
     * @param \DateTime $package_line_updated_at updated_at date time
     * @return $this
     */
    public function setPackageLineUpdatedAt($package_line_updated_at)
    {
        $this->container['package_line_updated_at'] = $package_line_updated_at;

        return $this;
    }

    /**
     * Gets package_line_created_by
     * @return int
     */
    public function getPackageLineCreatedBy()
    {
        return $this->container['package_line_created_by'];
    }

    /**
     * Sets package_line_created_by
     * @param int $package_line_created_by created_by user id
     * @return $this
     */
    public function setPackageLineCreatedBy($package_line_created_by)
    {
        $this->container['package_line_created_by'] = $package_line_created_by;

        return $this;
    }

    /**
     * Gets package_line_updated_by
     * @return int
     */
    public function getPackageLineUpdatedBy()
    {
        return $this->container['package_line_updated_by'];
    }

    /**
     * Sets package_line_updated_by
     * @param int $package_line_updated_by updated_by user id
     * @return $this
     */
    public function setPackageLineUpdatedBy($package_line_updated_by)
    {
        $this->container['package_line_updated_by'] = $package_line_updated_by;

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


