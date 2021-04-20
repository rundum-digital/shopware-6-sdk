<?php
/**
 * SalesChannelRelationships
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
 * SalesChannelRelationships Class Doc Comment
 *
 * @category Class
 * @package  Rundum\Shopware6
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesChannelRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sales_channel_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currencies' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsCurrencies',
'languages' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsLanguages',
'countries' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsCountries',
'payment_methods' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsPaymentMethods',
'shipping_methods' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsShippingMethods',
'type' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsType',
'language' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsLanguage',
'customer_group' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsCustomerGroup',
'currency' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsCurrency',
'payment_method' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsPaymentMethod',
'shipping_method' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsShippingMethod',
'country' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsCountry',
'orders' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsOrders',
'customers' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsCustomers',
'domains' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsDomains',
'system_configs' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsSystemConfigs',
'navigation_category' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsNavigationCategory',
'footer_category' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsFooterCategory',
'service_category' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsServiceCategory',
'product_visibilities' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsProductVisibilities',
'hreflang_default_domain' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsHreflangDefaultDomain',
'mail_header_footer' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsMailHeaderFooter',
'newsletter_recipients' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsNewsletterRecipients',
'mail_templates' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsMailTemplates',
'number_range_sales_channels' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsNumberRangeSalesChannels',
'promotion_sales_channels' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsPromotionSalesChannels',
'document_base_config_sales_channels' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsDocumentBaseConfigSalesChannels',
'product_reviews' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsProductReviews',
'seo_urls' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsSeoUrls',
'seo_url_templates' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsSeoUrlTemplates',
'main_categories' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsMainCategories',
'product_exports' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsProductExports',
'analytics' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsAnalytics',
'customer_groups_registrations' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsCustomerGroupsRegistrations',
'event_actions' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsEventActions',
'bound_customers' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsBoundCustomers',
'wishlists' => '\Rundum\Shopware6\Model\SalesChannelRelationshipsWishlists'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'currencies' => null,
'languages' => null,
'countries' => null,
'payment_methods' => null,
'shipping_methods' => null,
'type' => null,
'language' => null,
'customer_group' => null,
'currency' => null,
'payment_method' => null,
'shipping_method' => null,
'country' => null,
'orders' => null,
'customers' => null,
'domains' => null,
'system_configs' => null,
'navigation_category' => null,
'footer_category' => null,
'service_category' => null,
'product_visibilities' => null,
'hreflang_default_domain' => null,
'mail_header_footer' => null,
'newsletter_recipients' => null,
'mail_templates' => null,
'number_range_sales_channels' => null,
'promotion_sales_channels' => null,
'document_base_config_sales_channels' => null,
'product_reviews' => null,
'seo_urls' => null,
'seo_url_templates' => null,
'main_categories' => null,
'product_exports' => null,
'analytics' => null,
'customer_groups_registrations' => null,
'event_actions' => null,
'bound_customers' => null,
'wishlists' => null    ];

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
        'currencies' => 'currencies',
'languages' => 'languages',
'countries' => 'countries',
'payment_methods' => 'paymentMethods',
'shipping_methods' => 'shippingMethods',
'type' => 'type',
'language' => 'language',
'customer_group' => 'customerGroup',
'currency' => 'currency',
'payment_method' => 'paymentMethod',
'shipping_method' => 'shippingMethod',
'country' => 'country',
'orders' => 'orders',
'customers' => 'customers',
'domains' => 'domains',
'system_configs' => 'systemConfigs',
'navigation_category' => 'navigationCategory',
'footer_category' => 'footerCategory',
'service_category' => 'serviceCategory',
'product_visibilities' => 'productVisibilities',
'hreflang_default_domain' => 'hreflangDefaultDomain',
'mail_header_footer' => 'mailHeaderFooter',
'newsletter_recipients' => 'newsletterRecipients',
'mail_templates' => 'mailTemplates',
'number_range_sales_channels' => 'numberRangeSalesChannels',
'promotion_sales_channels' => 'promotionSalesChannels',
'document_base_config_sales_channels' => 'documentBaseConfigSalesChannels',
'product_reviews' => 'productReviews',
'seo_urls' => 'seoUrls',
'seo_url_templates' => 'seoUrlTemplates',
'main_categories' => 'mainCategories',
'product_exports' => 'productExports',
'analytics' => 'analytics',
'customer_groups_registrations' => 'customerGroupsRegistrations',
'event_actions' => 'eventActions',
'bound_customers' => 'boundCustomers',
'wishlists' => 'wishlists'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currencies' => 'setCurrencies',
'languages' => 'setLanguages',
'countries' => 'setCountries',
'payment_methods' => 'setPaymentMethods',
'shipping_methods' => 'setShippingMethods',
'type' => 'setType',
'language' => 'setLanguage',
'customer_group' => 'setCustomerGroup',
'currency' => 'setCurrency',
'payment_method' => 'setPaymentMethod',
'shipping_method' => 'setShippingMethod',
'country' => 'setCountry',
'orders' => 'setOrders',
'customers' => 'setCustomers',
'domains' => 'setDomains',
'system_configs' => 'setSystemConfigs',
'navigation_category' => 'setNavigationCategory',
'footer_category' => 'setFooterCategory',
'service_category' => 'setServiceCategory',
'product_visibilities' => 'setProductVisibilities',
'hreflang_default_domain' => 'setHreflangDefaultDomain',
'mail_header_footer' => 'setMailHeaderFooter',
'newsletter_recipients' => 'setNewsletterRecipients',
'mail_templates' => 'setMailTemplates',
'number_range_sales_channels' => 'setNumberRangeSalesChannels',
'promotion_sales_channels' => 'setPromotionSalesChannels',
'document_base_config_sales_channels' => 'setDocumentBaseConfigSalesChannels',
'product_reviews' => 'setProductReviews',
'seo_urls' => 'setSeoUrls',
'seo_url_templates' => 'setSeoUrlTemplates',
'main_categories' => 'setMainCategories',
'product_exports' => 'setProductExports',
'analytics' => 'setAnalytics',
'customer_groups_registrations' => 'setCustomerGroupsRegistrations',
'event_actions' => 'setEventActions',
'bound_customers' => 'setBoundCustomers',
'wishlists' => 'setWishlists'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currencies' => 'getCurrencies',
'languages' => 'getLanguages',
'countries' => 'getCountries',
'payment_methods' => 'getPaymentMethods',
'shipping_methods' => 'getShippingMethods',
'type' => 'getType',
'language' => 'getLanguage',
'customer_group' => 'getCustomerGroup',
'currency' => 'getCurrency',
'payment_method' => 'getPaymentMethod',
'shipping_method' => 'getShippingMethod',
'country' => 'getCountry',
'orders' => 'getOrders',
'customers' => 'getCustomers',
'domains' => 'getDomains',
'system_configs' => 'getSystemConfigs',
'navigation_category' => 'getNavigationCategory',
'footer_category' => 'getFooterCategory',
'service_category' => 'getServiceCategory',
'product_visibilities' => 'getProductVisibilities',
'hreflang_default_domain' => 'getHreflangDefaultDomain',
'mail_header_footer' => 'getMailHeaderFooter',
'newsletter_recipients' => 'getNewsletterRecipients',
'mail_templates' => 'getMailTemplates',
'number_range_sales_channels' => 'getNumberRangeSalesChannels',
'promotion_sales_channels' => 'getPromotionSalesChannels',
'document_base_config_sales_channels' => 'getDocumentBaseConfigSalesChannels',
'product_reviews' => 'getProductReviews',
'seo_urls' => 'getSeoUrls',
'seo_url_templates' => 'getSeoUrlTemplates',
'main_categories' => 'getMainCategories',
'product_exports' => 'getProductExports',
'analytics' => 'getAnalytics',
'customer_groups_registrations' => 'getCustomerGroupsRegistrations',
'event_actions' => 'getEventActions',
'bound_customers' => 'getBoundCustomers',
'wishlists' => 'getWishlists'    ];

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
        $this->container['currencies'] = isset($data['currencies']) ? $data['currencies'] : null;
        $this->container['languages'] = isset($data['languages']) ? $data['languages'] : null;
        $this->container['countries'] = isset($data['countries']) ? $data['countries'] : null;
        $this->container['payment_methods'] = isset($data['payment_methods']) ? $data['payment_methods'] : null;
        $this->container['shipping_methods'] = isset($data['shipping_methods']) ? $data['shipping_methods'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['customer_group'] = isset($data['customer_group']) ? $data['customer_group'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['shipping_method'] = isset($data['shipping_method']) ? $data['shipping_method'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['orders'] = isset($data['orders']) ? $data['orders'] : null;
        $this->container['customers'] = isset($data['customers']) ? $data['customers'] : null;
        $this->container['domains'] = isset($data['domains']) ? $data['domains'] : null;
        $this->container['system_configs'] = isset($data['system_configs']) ? $data['system_configs'] : null;
        $this->container['navigation_category'] = isset($data['navigation_category']) ? $data['navigation_category'] : null;
        $this->container['footer_category'] = isset($data['footer_category']) ? $data['footer_category'] : null;
        $this->container['service_category'] = isset($data['service_category']) ? $data['service_category'] : null;
        $this->container['product_visibilities'] = isset($data['product_visibilities']) ? $data['product_visibilities'] : null;
        $this->container['hreflang_default_domain'] = isset($data['hreflang_default_domain']) ? $data['hreflang_default_domain'] : null;
        $this->container['mail_header_footer'] = isset($data['mail_header_footer']) ? $data['mail_header_footer'] : null;
        $this->container['newsletter_recipients'] = isset($data['newsletter_recipients']) ? $data['newsletter_recipients'] : null;
        $this->container['mail_templates'] = isset($data['mail_templates']) ? $data['mail_templates'] : null;
        $this->container['number_range_sales_channels'] = isset($data['number_range_sales_channels']) ? $data['number_range_sales_channels'] : null;
        $this->container['promotion_sales_channels'] = isset($data['promotion_sales_channels']) ? $data['promotion_sales_channels'] : null;
        $this->container['document_base_config_sales_channels'] = isset($data['document_base_config_sales_channels']) ? $data['document_base_config_sales_channels'] : null;
        $this->container['product_reviews'] = isset($data['product_reviews']) ? $data['product_reviews'] : null;
        $this->container['seo_urls'] = isset($data['seo_urls']) ? $data['seo_urls'] : null;
        $this->container['seo_url_templates'] = isset($data['seo_url_templates']) ? $data['seo_url_templates'] : null;
        $this->container['main_categories'] = isset($data['main_categories']) ? $data['main_categories'] : null;
        $this->container['product_exports'] = isset($data['product_exports']) ? $data['product_exports'] : null;
        $this->container['analytics'] = isset($data['analytics']) ? $data['analytics'] : null;
        $this->container['customer_groups_registrations'] = isset($data['customer_groups_registrations']) ? $data['customer_groups_registrations'] : null;
        $this->container['event_actions'] = isset($data['event_actions']) ? $data['event_actions'] : null;
        $this->container['bound_customers'] = isset($data['bound_customers']) ? $data['bound_customers'] : null;
        $this->container['wishlists'] = isset($data['wishlists']) ? $data['wishlists'] : null;
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
     * Gets currencies
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsCurrencies
     */
    public function getCurrencies()
    {
        return $this->container['currencies'];
    }

    /**
     * Sets currencies
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsCurrencies $currencies currencies
     *
     * @return $this
     */
    public function setCurrencies($currencies)
    {
        $this->container['currencies'] = $currencies;

        return $this;
    }

    /**
     * Gets languages
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsLanguages
     */
    public function getLanguages()
    {
        return $this->container['languages'];
    }

    /**
     * Sets languages
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsLanguages $languages languages
     *
     * @return $this
     */
    public function setLanguages($languages)
    {
        $this->container['languages'] = $languages;

        return $this;
    }

    /**
     * Gets countries
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsCountries
     */
    public function getCountries()
    {
        return $this->container['countries'];
    }

    /**
     * Sets countries
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsCountries $countries countries
     *
     * @return $this
     */
    public function setCountries($countries)
    {
        $this->container['countries'] = $countries;

        return $this;
    }

    /**
     * Gets payment_methods
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsPaymentMethods
     */
    public function getPaymentMethods()
    {
        return $this->container['payment_methods'];
    }

    /**
     * Sets payment_methods
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsPaymentMethods $payment_methods payment_methods
     *
     * @return $this
     */
    public function setPaymentMethods($payment_methods)
    {
        $this->container['payment_methods'] = $payment_methods;

        return $this;
    }

    /**
     * Gets shipping_methods
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsShippingMethods
     */
    public function getShippingMethods()
    {
        return $this->container['shipping_methods'];
    }

    /**
     * Sets shipping_methods
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsShippingMethods $shipping_methods shipping_methods
     *
     * @return $this
     */
    public function setShippingMethods($shipping_methods)
    {
        $this->container['shipping_methods'] = $shipping_methods;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsType $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets language
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsLanguage
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsLanguage $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets customer_group
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsCustomerGroup
     */
    public function getCustomerGroup()
    {
        return $this->container['customer_group'];
    }

    /**
     * Sets customer_group
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsCustomerGroup $customer_group customer_group
     *
     * @return $this
     */
    public function setCustomerGroup($customer_group)
    {
        $this->container['customer_group'] = $customer_group;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsCurrency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsCurrency $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsPaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsPaymentMethod $payment_method payment_method
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets shipping_method
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsShippingMethod
     */
    public function getShippingMethod()
    {
        return $this->container['shipping_method'];
    }

    /**
     * Sets shipping_method
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsShippingMethod $shipping_method shipping_method
     *
     * @return $this
     */
    public function setShippingMethod($shipping_method)
    {
        $this->container['shipping_method'] = $shipping_method;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsCountry
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsCountry $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets orders
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsOrders
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsOrders $orders orders
     *
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets customers
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsCustomers
     */
    public function getCustomers()
    {
        return $this->container['customers'];
    }

    /**
     * Sets customers
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsCustomers $customers customers
     *
     * @return $this
     */
    public function setCustomers($customers)
    {
        $this->container['customers'] = $customers;

        return $this;
    }

    /**
     * Gets domains
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsDomains
     */
    public function getDomains()
    {
        return $this->container['domains'];
    }

    /**
     * Sets domains
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsDomains $domains domains
     *
     * @return $this
     */
    public function setDomains($domains)
    {
        $this->container['domains'] = $domains;

        return $this;
    }

    /**
     * Gets system_configs
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsSystemConfigs
     */
    public function getSystemConfigs()
    {
        return $this->container['system_configs'];
    }

    /**
     * Sets system_configs
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsSystemConfigs $system_configs system_configs
     *
     * @return $this
     */
    public function setSystemConfigs($system_configs)
    {
        $this->container['system_configs'] = $system_configs;

        return $this;
    }

    /**
     * Gets navigation_category
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsNavigationCategory
     */
    public function getNavigationCategory()
    {
        return $this->container['navigation_category'];
    }

    /**
     * Sets navigation_category
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsNavigationCategory $navigation_category navigation_category
     *
     * @return $this
     */
    public function setNavigationCategory($navigation_category)
    {
        $this->container['navigation_category'] = $navigation_category;

        return $this;
    }

    /**
     * Gets footer_category
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsFooterCategory
     */
    public function getFooterCategory()
    {
        return $this->container['footer_category'];
    }

    /**
     * Sets footer_category
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsFooterCategory $footer_category footer_category
     *
     * @return $this
     */
    public function setFooterCategory($footer_category)
    {
        $this->container['footer_category'] = $footer_category;

        return $this;
    }

    /**
     * Gets service_category
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsServiceCategory
     */
    public function getServiceCategory()
    {
        return $this->container['service_category'];
    }

    /**
     * Sets service_category
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsServiceCategory $service_category service_category
     *
     * @return $this
     */
    public function setServiceCategory($service_category)
    {
        $this->container['service_category'] = $service_category;

        return $this;
    }

    /**
     * Gets product_visibilities
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsProductVisibilities
     */
    public function getProductVisibilities()
    {
        return $this->container['product_visibilities'];
    }

    /**
     * Sets product_visibilities
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsProductVisibilities $product_visibilities product_visibilities
     *
     * @return $this
     */
    public function setProductVisibilities($product_visibilities)
    {
        $this->container['product_visibilities'] = $product_visibilities;

        return $this;
    }

    /**
     * Gets hreflang_default_domain
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsHreflangDefaultDomain
     */
    public function getHreflangDefaultDomain()
    {
        return $this->container['hreflang_default_domain'];
    }

    /**
     * Sets hreflang_default_domain
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsHreflangDefaultDomain $hreflang_default_domain hreflang_default_domain
     *
     * @return $this
     */
    public function setHreflangDefaultDomain($hreflang_default_domain)
    {
        $this->container['hreflang_default_domain'] = $hreflang_default_domain;

        return $this;
    }

    /**
     * Gets mail_header_footer
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsMailHeaderFooter
     */
    public function getMailHeaderFooter()
    {
        return $this->container['mail_header_footer'];
    }

    /**
     * Sets mail_header_footer
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsMailHeaderFooter $mail_header_footer mail_header_footer
     *
     * @return $this
     */
    public function setMailHeaderFooter($mail_header_footer)
    {
        $this->container['mail_header_footer'] = $mail_header_footer;

        return $this;
    }

    /**
     * Gets newsletter_recipients
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsNewsletterRecipients
     */
    public function getNewsletterRecipients()
    {
        return $this->container['newsletter_recipients'];
    }

    /**
     * Sets newsletter_recipients
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsNewsletterRecipients $newsletter_recipients newsletter_recipients
     *
     * @return $this
     */
    public function setNewsletterRecipients($newsletter_recipients)
    {
        $this->container['newsletter_recipients'] = $newsletter_recipients;

        return $this;
    }

    /**
     * Gets mail_templates
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsMailTemplates
     */
    public function getMailTemplates()
    {
        return $this->container['mail_templates'];
    }

    /**
     * Sets mail_templates
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsMailTemplates $mail_templates mail_templates
     *
     * @return $this
     */
    public function setMailTemplates($mail_templates)
    {
        $this->container['mail_templates'] = $mail_templates;

        return $this;
    }

    /**
     * Gets number_range_sales_channels
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsNumberRangeSalesChannels
     */
    public function getNumberRangeSalesChannels()
    {
        return $this->container['number_range_sales_channels'];
    }

    /**
     * Sets number_range_sales_channels
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsNumberRangeSalesChannels $number_range_sales_channels number_range_sales_channels
     *
     * @return $this
     */
    public function setNumberRangeSalesChannels($number_range_sales_channels)
    {
        $this->container['number_range_sales_channels'] = $number_range_sales_channels;

        return $this;
    }

    /**
     * Gets promotion_sales_channels
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsPromotionSalesChannels
     */
    public function getPromotionSalesChannels()
    {
        return $this->container['promotion_sales_channels'];
    }

    /**
     * Sets promotion_sales_channels
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsPromotionSalesChannels $promotion_sales_channels promotion_sales_channels
     *
     * @return $this
     */
    public function setPromotionSalesChannels($promotion_sales_channels)
    {
        $this->container['promotion_sales_channels'] = $promotion_sales_channels;

        return $this;
    }

    /**
     * Gets document_base_config_sales_channels
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsDocumentBaseConfigSalesChannels
     */
    public function getDocumentBaseConfigSalesChannels()
    {
        return $this->container['document_base_config_sales_channels'];
    }

    /**
     * Sets document_base_config_sales_channels
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsDocumentBaseConfigSalesChannels $document_base_config_sales_channels document_base_config_sales_channels
     *
     * @return $this
     */
    public function setDocumentBaseConfigSalesChannels($document_base_config_sales_channels)
    {
        $this->container['document_base_config_sales_channels'] = $document_base_config_sales_channels;

        return $this;
    }

    /**
     * Gets product_reviews
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsProductReviews
     */
    public function getProductReviews()
    {
        return $this->container['product_reviews'];
    }

    /**
     * Sets product_reviews
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsProductReviews $product_reviews product_reviews
     *
     * @return $this
     */
    public function setProductReviews($product_reviews)
    {
        $this->container['product_reviews'] = $product_reviews;

        return $this;
    }

    /**
     * Gets seo_urls
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsSeoUrls
     */
    public function getSeoUrls()
    {
        return $this->container['seo_urls'];
    }

    /**
     * Sets seo_urls
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsSeoUrls $seo_urls seo_urls
     *
     * @return $this
     */
    public function setSeoUrls($seo_urls)
    {
        $this->container['seo_urls'] = $seo_urls;

        return $this;
    }

    /**
     * Gets seo_url_templates
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsSeoUrlTemplates
     */
    public function getSeoUrlTemplates()
    {
        return $this->container['seo_url_templates'];
    }

    /**
     * Sets seo_url_templates
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsSeoUrlTemplates $seo_url_templates seo_url_templates
     *
     * @return $this
     */
    public function setSeoUrlTemplates($seo_url_templates)
    {
        $this->container['seo_url_templates'] = $seo_url_templates;

        return $this;
    }

    /**
     * Gets main_categories
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsMainCategories
     */
    public function getMainCategories()
    {
        return $this->container['main_categories'];
    }

    /**
     * Sets main_categories
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsMainCategories $main_categories main_categories
     *
     * @return $this
     */
    public function setMainCategories($main_categories)
    {
        $this->container['main_categories'] = $main_categories;

        return $this;
    }

    /**
     * Gets product_exports
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsProductExports
     */
    public function getProductExports()
    {
        return $this->container['product_exports'];
    }

    /**
     * Sets product_exports
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsProductExports $product_exports product_exports
     *
     * @return $this
     */
    public function setProductExports($product_exports)
    {
        $this->container['product_exports'] = $product_exports;

        return $this;
    }

    /**
     * Gets analytics
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsAnalytics
     */
    public function getAnalytics()
    {
        return $this->container['analytics'];
    }

    /**
     * Sets analytics
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsAnalytics $analytics analytics
     *
     * @return $this
     */
    public function setAnalytics($analytics)
    {
        $this->container['analytics'] = $analytics;

        return $this;
    }

    /**
     * Gets customer_groups_registrations
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsCustomerGroupsRegistrations
     */
    public function getCustomerGroupsRegistrations()
    {
        return $this->container['customer_groups_registrations'];
    }

    /**
     * Sets customer_groups_registrations
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsCustomerGroupsRegistrations $customer_groups_registrations customer_groups_registrations
     *
     * @return $this
     */
    public function setCustomerGroupsRegistrations($customer_groups_registrations)
    {
        $this->container['customer_groups_registrations'] = $customer_groups_registrations;

        return $this;
    }

    /**
     * Gets event_actions
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsEventActions
     */
    public function getEventActions()
    {
        return $this->container['event_actions'];
    }

    /**
     * Sets event_actions
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsEventActions $event_actions event_actions
     *
     * @return $this
     */
    public function setEventActions($event_actions)
    {
        $this->container['event_actions'] = $event_actions;

        return $this;
    }

    /**
     * Gets bound_customers
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsBoundCustomers
     */
    public function getBoundCustomers()
    {
        return $this->container['bound_customers'];
    }

    /**
     * Sets bound_customers
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsBoundCustomers $bound_customers bound_customers
     *
     * @return $this
     */
    public function setBoundCustomers($bound_customers)
    {
        $this->container['bound_customers'] = $bound_customers;

        return $this;
    }

    /**
     * Gets wishlists
     *
     * @return \Rundum\Shopware6\Model\SalesChannelRelationshipsWishlists
     */
    public function getWishlists()
    {
        return $this->container['wishlists'];
    }

    /**
     * Sets wishlists
     *
     * @param \Rundum\Shopware6\Model\SalesChannelRelationshipsWishlists $wishlists wishlists
     *
     * @return $this
     */
    public function setWishlists($wishlists)
    {
        $this->container['wishlists'] = $wishlists;

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
