<?php
/**
 * AppRelationships
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
 * AppRelationships Class Doc Comment
 *
 * @category Class
 * @package  Rundum\Shopware6
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AppRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'app_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'integration' => '\Rundum\Shopware6\Model\AppRelationshipsIntegration',
'acl_role' => '\Rundum\Shopware6\Model\AppRelationshipsAclRole',
'custom_field_sets' => '\Rundum\Shopware6\Model\AppRelationshipsCustomFieldSets',
'action_buttons' => '\Rundum\Shopware6\Model\AppRelationshipsActionButtons',
'templates' => '\Rundum\Shopware6\Model\AppRelationshipsTemplates',
'webhooks' => '\Rundum\Shopware6\Model\AppRelationshipsWebhooks'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'integration' => null,
'acl_role' => null,
'custom_field_sets' => null,
'action_buttons' => null,
'templates' => null,
'webhooks' => null    ];

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
        'integration' => 'integration',
'acl_role' => 'aclRole',
'custom_field_sets' => 'customFieldSets',
'action_buttons' => 'actionButtons',
'templates' => 'templates',
'webhooks' => 'webhooks'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'integration' => 'setIntegration',
'acl_role' => 'setAclRole',
'custom_field_sets' => 'setCustomFieldSets',
'action_buttons' => 'setActionButtons',
'templates' => 'setTemplates',
'webhooks' => 'setWebhooks'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'integration' => 'getIntegration',
'acl_role' => 'getAclRole',
'custom_field_sets' => 'getCustomFieldSets',
'action_buttons' => 'getActionButtons',
'templates' => 'getTemplates',
'webhooks' => 'getWebhooks'    ];

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
        $this->container['integration'] = isset($data['integration']) ? $data['integration'] : null;
        $this->container['acl_role'] = isset($data['acl_role']) ? $data['acl_role'] : null;
        $this->container['custom_field_sets'] = isset($data['custom_field_sets']) ? $data['custom_field_sets'] : null;
        $this->container['action_buttons'] = isset($data['action_buttons']) ? $data['action_buttons'] : null;
        $this->container['templates'] = isset($data['templates']) ? $data['templates'] : null;
        $this->container['webhooks'] = isset($data['webhooks']) ? $data['webhooks'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets integration
     *
     * @return \Rundum\Shopware6\Model\AppRelationshipsIntegration
     */
    public function getIntegration()
    {
        return $this->container['integration'];
    }

    /**
     * Sets integration
     *
     * @param \Rundum\Shopware6\Model\AppRelationshipsIntegration $integration integration
     *
     * @return $this
     */
    public function setIntegration($integration)
    {
        $this->container['integration'] = $integration;

        return $this;
    }

    /**
     * Gets acl_role
     *
     * @return \Rundum\Shopware6\Model\AppRelationshipsAclRole
     */
    public function getAclRole()
    {
        return $this->container['acl_role'];
    }

    /**
     * Sets acl_role
     *
     * @param \Rundum\Shopware6\Model\AppRelationshipsAclRole $acl_role acl_role
     *
     * @return $this
     */
    public function setAclRole($acl_role)
    {
        $this->container['acl_role'] = $acl_role;

        return $this;
    }

    /**
     * Gets custom_field_sets
     *
     * @return \Rundum\Shopware6\Model\AppRelationshipsCustomFieldSets
     */
    public function getCustomFieldSets()
    {
        return $this->container['custom_field_sets'];
    }

    /**
     * Sets custom_field_sets
     *
     * @param \Rundum\Shopware6\Model\AppRelationshipsCustomFieldSets $custom_field_sets custom_field_sets
     *
     * @return $this
     */
    public function setCustomFieldSets($custom_field_sets)
    {
        $this->container['custom_field_sets'] = $custom_field_sets;

        return $this;
    }

    /**
     * Gets action_buttons
     *
     * @return \Rundum\Shopware6\Model\AppRelationshipsActionButtons
     */
    public function getActionButtons()
    {
        return $this->container['action_buttons'];
    }

    /**
     * Sets action_buttons
     *
     * @param \Rundum\Shopware6\Model\AppRelationshipsActionButtons $action_buttons action_buttons
     *
     * @return $this
     */
    public function setActionButtons($action_buttons)
    {
        $this->container['action_buttons'] = $action_buttons;

        return $this;
    }

    /**
     * Gets templates
     *
     * @return \Rundum\Shopware6\Model\AppRelationshipsTemplates
     */
    public function getTemplates()
    {
        return $this->container['templates'];
    }

    /**
     * Sets templates
     *
     * @param \Rundum\Shopware6\Model\AppRelationshipsTemplates $templates templates
     *
     * @return $this
     */
    public function setTemplates($templates)
    {
        $this->container['templates'] = $templates;

        return $this;
    }

    /**
     * Gets webhooks
     *
     * @return \Rundum\Shopware6\Model\AppRelationshipsWebhooks
     */
    public function getWebhooks()
    {
        return $this->container['webhooks'];
    }

    /**
     * Sets webhooks
     *
     * @param \Rundum\Shopware6\Model\AppRelationshipsWebhooks $webhooks webhooks
     *
     * @return $this
     */
    public function setWebhooks($webhooks)
    {
        $this->container['webhooks'] = $webhooks;

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
