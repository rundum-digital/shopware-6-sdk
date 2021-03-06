<?php
/**
 * App
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
use \Rundum\Shopware6\ObjectSerializer;

/**
 * App Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.3.1.0
 * @package  Rundum\Shopware6
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class App extends Resource 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'app';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'name' => 'string',
'path' => 'string',
'author' => 'string',
'copyright' => 'string',
'license' => 'string',
'active' => 'bool',
'configurable' => 'bool',
'privacy' => 'string',
'version' => 'string',
'icon' => 'string',
'modules' => 'object[]',
'cookies' => 'object[]',
'label' => 'string',
'description' => 'string',
'privacy_policy_extensions' => 'string',
'integration_id' => 'string',
'acl_role_id' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'translated' => 'object',
'relationships' => '\Rundum\Shopware6\Model\AppRelationships'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'name' => null,
'path' => null,
'author' => null,
'copyright' => null,
'license' => null,
'active' => null,
'configurable' => null,
'privacy' => null,
'version' => null,
'icon' => null,
'modules' => null,
'cookies' => null,
'label' => null,
'description' => null,
'privacy_policy_extensions' => null,
'integration_id' => 'uuid',
'acl_role_id' => 'uuid',
'created_at' => 'date-time',
'updated_at' => 'date-time',
'translated' => null,
'relationships' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'name' => 'name',
'path' => 'path',
'author' => 'author',
'copyright' => 'copyright',
'license' => 'license',
'active' => 'active',
'configurable' => 'configurable',
'privacy' => 'privacy',
'version' => 'version',
'icon' => 'icon',
'modules' => 'modules',
'cookies' => 'cookies',
'label' => 'label',
'description' => 'description',
'privacy_policy_extensions' => 'privacyPolicyExtensions',
'integration_id' => 'integrationId',
'acl_role_id' => 'aclRoleId',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'translated' => 'translated',
'relationships' => 'relationships'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'path' => 'setPath',
'author' => 'setAuthor',
'copyright' => 'setCopyright',
'license' => 'setLicense',
'active' => 'setActive',
'configurable' => 'setConfigurable',
'privacy' => 'setPrivacy',
'version' => 'setVersion',
'icon' => 'setIcon',
'modules' => 'setModules',
'cookies' => 'setCookies',
'label' => 'setLabel',
'description' => 'setDescription',
'privacy_policy_extensions' => 'setPrivacyPolicyExtensions',
'integration_id' => 'setIntegrationId',
'acl_role_id' => 'setAclRoleId',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'translated' => 'setTranslated',
'relationships' => 'setRelationships'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'path' => 'getPath',
'author' => 'getAuthor',
'copyright' => 'getCopyright',
'license' => 'getLicense',
'active' => 'getActive',
'configurable' => 'getConfigurable',
'privacy' => 'getPrivacy',
'version' => 'getVersion',
'icon' => 'getIcon',
'modules' => 'getModules',
'cookies' => 'getCookies',
'label' => 'getLabel',
'description' => 'getDescription',
'privacy_policy_extensions' => 'getPrivacyPolicyExtensions',
'integration_id' => 'getIntegrationId',
'acl_role_id' => 'getAclRoleId',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'translated' => 'getTranslated',
'relationships' => 'getRelationships'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['copyright'] = isset($data['copyright']) ? $data['copyright'] : null;
        $this->container['license'] = isset($data['license']) ? $data['license'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['configurable'] = isset($data['configurable']) ? $data['configurable'] : null;
        $this->container['privacy'] = isset($data['privacy']) ? $data['privacy'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['modules'] = isset($data['modules']) ? $data['modules'] : null;
        $this->container['cookies'] = isset($data['cookies']) ? $data['cookies'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['privacy_policy_extensions'] = isset($data['privacy_policy_extensions']) ? $data['privacy_policy_extensions'] : null;
        $this->container['integration_id'] = isset($data['integration_id']) ? $data['integration_id'] : null;
        $this->container['acl_role_id'] = isset($data['acl_role_id']) ? $data['acl_role_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['translated'] = isset($data['translated']) ? $data['translated'] : null;
        $this->container['relationships'] = isset($data['relationships']) ? $data['relationships'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
        }
        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
        }
        if ($this->container['configurable'] === null) {
            $invalidProperties[] = "'configurable' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['integration_id'] === null) {
            $invalidProperties[] = "'integration_id' can't be null";
        }
        if ($this->container['acl_role_id'] === null) {
            $invalidProperties[] = "'acl_role_id' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param string $author author
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets copyright
     *
     * @return string
     */
    public function getCopyright()
    {
        return $this->container['copyright'];
    }

    /**
     * Sets copyright
     *
     * @param string $copyright copyright
     *
     * @return $this
     */
    public function setCopyright($copyright)
    {
        $this->container['copyright'] = $copyright;

        return $this;
    }

    /**
     * Gets license
     *
     * @return string
     */
    public function getLicense()
    {
        return $this->container['license'];
    }

    /**
     * Sets license
     *
     * @param string $license license
     *
     * @return $this
     */
    public function setLicense($license)
    {
        $this->container['license'] = $license;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets configurable
     *
     * @return bool
     */
    public function getConfigurable()
    {
        return $this->container['configurable'];
    }

    /**
     * Sets configurable
     *
     * @param bool $configurable configurable
     *
     * @return $this
     */
    public function setConfigurable($configurable)
    {
        $this->container['configurable'] = $configurable;

        return $this;
    }

    /**
     * Gets privacy
     *
     * @return string
     */
    public function getPrivacy()
    {
        return $this->container['privacy'];
    }

    /**
     * Sets privacy
     *
     * @param string $privacy privacy
     *
     * @return $this
     */
    public function setPrivacy($privacy)
    {
        $this->container['privacy'] = $privacy;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string $icon icon
     *
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets modules
     *
     * @return object[]
     */
    public function getModules()
    {
        return $this->container['modules'];
    }

    /**
     * Sets modules
     *
     * @param object[] $modules modules
     *
     * @return $this
     */
    public function setModules($modules)
    {
        $this->container['modules'] = $modules;

        return $this;
    }

    /**
     * Gets cookies
     *
     * @return object[]
     */
    public function getCookies()
    {
        return $this->container['cookies'];
    }

    /**
     * Sets cookies
     *
     * @param object[] $cookies cookies
     *
     * @return $this
     */
    public function setCookies($cookies)
    {
        $this->container['cookies'] = $cookies;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets privacy_policy_extensions
     *
     * @return string
     */
    public function getPrivacyPolicyExtensions()
    {
        return $this->container['privacy_policy_extensions'];
    }

    /**
     * Sets privacy_policy_extensions
     *
     * @param string $privacy_policy_extensions privacy_policy_extensions
     *
     * @return $this
     */
    public function setPrivacyPolicyExtensions($privacy_policy_extensions)
    {
        $this->container['privacy_policy_extensions'] = $privacy_policy_extensions;

        return $this;
    }

    /**
     * Gets integration_id
     *
     * @return string
     */
    public function getIntegrationId()
    {
        return $this->container['integration_id'];
    }

    /**
     * Sets integration_id
     *
     * @param string $integration_id integration_id
     *
     * @return $this
     */
    public function setIntegrationId($integration_id)
    {
        $this->container['integration_id'] = $integration_id;

        return $this;
    }

    /**
     * Gets acl_role_id
     *
     * @return string
     */
    public function getAclRoleId()
    {
        return $this->container['acl_role_id'];
    }

    /**
     * Sets acl_role_id
     *
     * @param string $acl_role_id acl_role_id
     *
     * @return $this
     */
    public function setAclRoleId($acl_role_id)
    {
        $this->container['acl_role_id'] = $acl_role_id;

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
     * Gets translated
     *
     * @return object
     */
    public function getTranslated()
    {
        return $this->container['translated'];
    }

    /**
     * Sets translated
     *
     * @param object $translated translated
     *
     * @return $this
     */
    public function setTranslated($translated)
    {
        $this->container['translated'] = $translated;

        return $this;
    }

    /**
     * Gets relationships
     *
     * @return \Rundum\Shopware6\Model\AppRelationships
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param \Rundum\Shopware6\Model\AppRelationships $relationships relationships
     *
     * @return $this
     */
    public function setRelationships($relationships)
    {
        $this->container['relationships'] = $relationships;

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
