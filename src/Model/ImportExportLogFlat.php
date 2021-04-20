<?php
/**
 * ImportExportLogFlat
 *
 * PHP version 5
 *
 * @category Class
 * @package  Rundum\Shopware6
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Shopware Admin API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Rundum\Shopware6\Model;

use \ArrayAccess;
use \Rundum\Shopware6\ObjectSerializer;

/**
 * ImportExportLogFlat Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.0.0.0
 * @package  Rundum\Shopware6
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ImportExportLogFlat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'import_export_log_flat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'activity' => 'string',
'state' => 'string',
'records' => 'int',
'user_id' => 'string',
'profile_id' => 'string',
'file_id' => 'string',
'invalid_records_log_id' => 'string',
'username' => 'string',
'profile_name' => 'string',
'config' => 'object',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'user' => '\Rundum\Shopware6\Model\UserFlat',
'profile' => '\Rundum\Shopware6\Model\ImportExportProfileFlat',
'file' => '\Rundum\Shopware6\Model\ImportExportFileFlat',
'invalid_records_log' => '\Rundum\Shopware6\Model\ImportExportLogFlat',
'failed_import_log' => '\Rundum\Shopware6\Model\ImportExportLogFlat'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'activity' => null,
'state' => null,
'records' => 'int64',
'user_id' => 'uuid',
'profile_id' => 'uuid',
'file_id' => 'uuid',
'invalid_records_log_id' => 'uuid',
'username' => null,
'profile_name' => null,
'config' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'user' => null,
'profile' => null,
'file' => null,
'invalid_records_log' => null,
'failed_import_log' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'activity' => 'activity',
'state' => 'state',
'records' => 'records',
'user_id' => 'userId',
'profile_id' => 'profileId',
'file_id' => 'fileId',
'invalid_records_log_id' => 'invalidRecordsLogId',
'username' => 'username',
'profile_name' => 'profileName',
'config' => 'config',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'user' => 'user',
'profile' => 'profile',
'file' => 'file',
'invalid_records_log' => 'invalidRecordsLog',
'failed_import_log' => 'failedImportLog'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'activity' => 'setActivity',
'state' => 'setState',
'records' => 'setRecords',
'user_id' => 'setUserId',
'profile_id' => 'setProfileId',
'file_id' => 'setFileId',
'invalid_records_log_id' => 'setInvalidRecordsLogId',
'username' => 'setUsername',
'profile_name' => 'setProfileName',
'config' => 'setConfig',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'user' => 'setUser',
'profile' => 'setProfile',
'file' => 'setFile',
'invalid_records_log' => 'setInvalidRecordsLog',
'failed_import_log' => 'setFailedImportLog'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'activity' => 'getActivity',
'state' => 'getState',
'records' => 'getRecords',
'user_id' => 'getUserId',
'profile_id' => 'getProfileId',
'file_id' => 'getFileId',
'invalid_records_log_id' => 'getInvalidRecordsLogId',
'username' => 'getUsername',
'profile_name' => 'getProfileName',
'config' => 'getConfig',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'user' => 'getUser',
'profile' => 'getProfile',
'file' => 'getFile',
'invalid_records_log' => 'getInvalidRecordsLog',
'failed_import_log' => 'getFailedImportLog'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['activity'] = isset($data['activity']) ? $data['activity'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['profile_id'] = isset($data['profile_id']) ? $data['profile_id'] : null;
        $this->container['file_id'] = isset($data['file_id']) ? $data['file_id'] : null;
        $this->container['invalid_records_log_id'] = isset($data['invalid_records_log_id']) ? $data['invalid_records_log_id'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['profile_name'] = isset($data['profile_name']) ? $data['profile_name'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['invalid_records_log'] = isset($data['invalid_records_log']) ? $data['invalid_records_log'] : null;
        $this->container['failed_import_log'] = isset($data['failed_import_log']) ? $data['failed_import_log'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['activity'] === null) {
            $invalidProperties[] = "'activity' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['records'] === null) {
            $invalidProperties[] = "'records' can't be null";
        }
        if ($this->container['config'] === null) {
            $invalidProperties[] = "'config' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets activity
     *
     * @return string
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity
     *
     * @param string $activity activity
     *
     * @return $this
     */
    public function setActivity($activity)
    {
        $this->container['activity'] = $activity;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets records
     *
     * @return int
     */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
     * Sets records
     *
     * @param int $records records
     *
     * @return $this
     */
    public function setRecords($records)
    {
        $this->container['records'] = $records;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets profile_id
     *
     * @return string
     */
    public function getProfileId()
    {
        return $this->container['profile_id'];
    }

    /**
     * Sets profile_id
     *
     * @param string $profile_id profile_id
     *
     * @return $this
     */
    public function setProfileId($profile_id)
    {
        $this->container['profile_id'] = $profile_id;

        return $this;
    }

    /**
     * Gets file_id
     *
     * @return string
     */
    public function getFileId()
    {
        return $this->container['file_id'];
    }

    /**
     * Sets file_id
     *
     * @param string $file_id file_id
     *
     * @return $this
     */
    public function setFileId($file_id)
    {
        $this->container['file_id'] = $file_id;

        return $this;
    }

    /**
     * Gets invalid_records_log_id
     *
     * @return string
     */
    public function getInvalidRecordsLogId()
    {
        return $this->container['invalid_records_log_id'];
    }

    /**
     * Sets invalid_records_log_id
     *
     * @param string $invalid_records_log_id invalid_records_log_id
     *
     * @return $this
     */
    public function setInvalidRecordsLogId($invalid_records_log_id)
    {
        $this->container['invalid_records_log_id'] = $invalid_records_log_id;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets profile_name
     *
     * @return string
     */
    public function getProfileName()
    {
        return $this->container['profile_name'];
    }

    /**
     * Sets profile_name
     *
     * @param string $profile_name profile_name
     *
     * @return $this
     */
    public function setProfileName($profile_name)
    {
        $this->container['profile_name'] = $profile_name;

        return $this;
    }

    /**
     * Gets config
     *
     * @return object
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param object $config config
     *
     * @return $this
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Rundum\Shopware6\Model\UserFlat
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Rundum\Shopware6\Model\UserFlat $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets profile
     *
     * @return \Rundum\Shopware6\Model\ImportExportProfileFlat
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     *
     * @param \Rundum\Shopware6\Model\ImportExportProfileFlat $profile profile
     *
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;

        return $this;
    }

    /**
     * Gets file
     *
     * @return \Rundum\Shopware6\Model\ImportExportFileFlat
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param \Rundum\Shopware6\Model\ImportExportFileFlat $file file
     *
     * @return $this
     */
    public function setFile($file)
    {
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets invalid_records_log
     *
     * @return \Rundum\Shopware6\Model\ImportExportLogFlat
     */
    public function getInvalidRecordsLog()
    {
        return $this->container['invalid_records_log'];
    }

    /**
     * Sets invalid_records_log
     *
     * @param \Rundum\Shopware6\Model\ImportExportLogFlat $invalid_records_log invalid_records_log
     *
     * @return $this
     */
    public function setInvalidRecordsLog($invalid_records_log)
    {
        $this->container['invalid_records_log'] = $invalid_records_log;

        return $this;
    }

    /**
     * Gets failed_import_log
     *
     * @return \Rundum\Shopware6\Model\ImportExportLogFlat
     */
    public function getFailedImportLog()
    {
        return $this->container['failed_import_log'];
    }

    /**
     * Sets failed_import_log
     *
     * @param \Rundum\Shopware6\Model\ImportExportLogFlat $failed_import_log failed_import_log
     *
     * @return $this
     */
    public function setFailedImportLog($failed_import_log)
    {
        $this->container['failed_import_log'] = $failed_import_log;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
