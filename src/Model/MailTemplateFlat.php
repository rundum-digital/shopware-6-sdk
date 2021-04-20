<?php
/**
 * MailTemplateFlat
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
 * MailTemplateFlat Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.0.0.0
 * @package  Rundum\Shopware6
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MailTemplateFlat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'mail_template_flat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'mail_template_type_id' => 'string',
'system_default' => 'bool',
'sender_name' => 'string',
'description' => 'string',
'subject' => 'string',
'content_html' => 'string',
'content_plain' => 'string',
'custom_fields' => 'object',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'translated' => 'object',
'mail_template_type' => '\Rundum\Shopware6\Model\MailTemplateTypeFlat',
'media' => '\Rundum\Shopware6\Model\MailTemplateMediaFlat',
'sales_channels' => '\Rundum\Shopware6\Model\MailTemplateSalesChannelFlat'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'mail_template_type_id' => 'uuid',
'system_default' => null,
'sender_name' => null,
'description' => null,
'subject' => null,
'content_html' => null,
'content_plain' => null,
'custom_fields' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'translated' => null,
'mail_template_type' => null,
'media' => null,
'sales_channels' => null    ];

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
'mail_template_type_id' => 'mailTemplateTypeId',
'system_default' => 'systemDefault',
'sender_name' => 'senderName',
'description' => 'description',
'subject' => 'subject',
'content_html' => 'contentHtml',
'content_plain' => 'contentPlain',
'custom_fields' => 'customFields',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'translated' => 'translated',
'mail_template_type' => 'mailTemplateType',
'media' => 'media',
'sales_channels' => 'salesChannels'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'mail_template_type_id' => 'setMailTemplateTypeId',
'system_default' => 'setSystemDefault',
'sender_name' => 'setSenderName',
'description' => 'setDescription',
'subject' => 'setSubject',
'content_html' => 'setContentHtml',
'content_plain' => 'setContentPlain',
'custom_fields' => 'setCustomFields',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'translated' => 'setTranslated',
'mail_template_type' => 'setMailTemplateType',
'media' => 'setMedia',
'sales_channels' => 'setSalesChannels'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'mail_template_type_id' => 'getMailTemplateTypeId',
'system_default' => 'getSystemDefault',
'sender_name' => 'getSenderName',
'description' => 'getDescription',
'subject' => 'getSubject',
'content_html' => 'getContentHtml',
'content_plain' => 'getContentPlain',
'custom_fields' => 'getCustomFields',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'translated' => 'getTranslated',
'mail_template_type' => 'getMailTemplateType',
'media' => 'getMedia',
'sales_channels' => 'getSalesChannels'    ];

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
        $this->container['mail_template_type_id'] = isset($data['mail_template_type_id']) ? $data['mail_template_type_id'] : null;
        $this->container['system_default'] = isset($data['system_default']) ? $data['system_default'] : null;
        $this->container['sender_name'] = isset($data['sender_name']) ? $data['sender_name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['content_html'] = isset($data['content_html']) ? $data['content_html'] : null;
        $this->container['content_plain'] = isset($data['content_plain']) ? $data['content_plain'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['translated'] = isset($data['translated']) ? $data['translated'] : null;
        $this->container['mail_template_type'] = isset($data['mail_template_type']) ? $data['mail_template_type'] : null;
        $this->container['media'] = isset($data['media']) ? $data['media'] : null;
        $this->container['sales_channels'] = isset($data['sales_channels']) ? $data['sales_channels'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['mail_template_type_id'] === null) {
            $invalidProperties[] = "'mail_template_type_id' can't be null";
        }
        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
        }
        if ($this->container['content_html'] === null) {
            $invalidProperties[] = "'content_html' can't be null";
        }
        if ($this->container['content_plain'] === null) {
            $invalidProperties[] = "'content_plain' can't be null";
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
     * Gets mail_template_type_id
     *
     * @return string
     */
    public function getMailTemplateTypeId()
    {
        return $this->container['mail_template_type_id'];
    }

    /**
     * Sets mail_template_type_id
     *
     * @param string $mail_template_type_id mail_template_type_id
     *
     * @return $this
     */
    public function setMailTemplateTypeId($mail_template_type_id)
    {
        $this->container['mail_template_type_id'] = $mail_template_type_id;

        return $this;
    }

    /**
     * Gets system_default
     *
     * @return bool
     */
    public function getSystemDefault()
    {
        return $this->container['system_default'];
    }

    /**
     * Sets system_default
     *
     * @param bool $system_default system_default
     *
     * @return $this
     */
    public function setSystemDefault($system_default)
    {
        $this->container['system_default'] = $system_default;

        return $this;
    }

    /**
     * Gets sender_name
     *
     * @return string
     */
    public function getSenderName()
    {
        return $this->container['sender_name'];
    }

    /**
     * Sets sender_name
     *
     * @param string $sender_name sender_name
     *
     * @return $this
     */
    public function setSenderName($sender_name)
    {
        $this->container['sender_name'] = $sender_name;

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
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets content_html
     *
     * @return string
     */
    public function getContentHtml()
    {
        return $this->container['content_html'];
    }

    /**
     * Sets content_html
     *
     * @param string $content_html content_html
     *
     * @return $this
     */
    public function setContentHtml($content_html)
    {
        $this->container['content_html'] = $content_html;

        return $this;
    }

    /**
     * Gets content_plain
     *
     * @return string
     */
    public function getContentPlain()
    {
        return $this->container['content_plain'];
    }

    /**
     * Sets content_plain
     *
     * @param string $content_plain content_plain
     *
     * @return $this
     */
    public function setContentPlain($content_plain)
    {
        $this->container['content_plain'] = $content_plain;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return object
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param object $custom_fields custom_fields
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

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
     * Gets mail_template_type
     *
     * @return \Rundum\Shopware6\Model\MailTemplateTypeFlat
     */
    public function getMailTemplateType()
    {
        return $this->container['mail_template_type'];
    }

    /**
     * Sets mail_template_type
     *
     * @param \Rundum\Shopware6\Model\MailTemplateTypeFlat $mail_template_type mail_template_type
     *
     * @return $this
     */
    public function setMailTemplateType($mail_template_type)
    {
        $this->container['mail_template_type'] = $mail_template_type;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \Rundum\Shopware6\Model\MailTemplateMediaFlat
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \Rundum\Shopware6\Model\MailTemplateMediaFlat $media media
     *
     * @return $this
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets sales_channels
     *
     * @return \Rundum\Shopware6\Model\MailTemplateSalesChannelFlat
     */
    public function getSalesChannels()
    {
        return $this->container['sales_channels'];
    }

    /**
     * Sets sales_channels
     *
     * @param \Rundum\Shopware6\Model\MailTemplateSalesChannelFlat $sales_channels sales_channels
     *
     * @return $this
     */
    public function setSalesChannels($sales_channels)
    {
        $this->container['sales_channels'] = $sales_channels;

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
