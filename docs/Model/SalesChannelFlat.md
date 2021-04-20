# SalesChannelFlat

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**type_id** | **string** |  | 
**language_id** | **string** |  | 
**customer_group_id** | **string** |  | 
**currency_id** | **string** |  | 
**payment_method_id** | **string** |  | 
**shipping_method_id** | **string** |  | 
**country_id** | **string** |  | 
**analytics_id** | **string** |  | [optional] 
**navigation_category_id** | **string** |  | 
**navigation_category_version_id** | **string** |  | [optional] 
**navigation_category_depth** | **int** |  | [optional] 
**footer_category_id** | **string** |  | [optional] 
**footer_category_version_id** | **string** |  | [optional] 
**service_category_id** | **string** |  | [optional] 
**service_category_version_id** | **string** |  | [optional] 
**mail_header_footer_id** | **string** |  | [optional] 
**hreflang_default_domain_id** | **string** |  | [optional] 
**name** | **string** |  | 
**short_name** | **string** |  | [optional] 
**tax_calculation_type** | **string** |  | [optional] 
**access_key** | **string** |  | 
**configuration** | **object** |  | [optional] 
**active** | **bool** |  | [optional] 
**hreflang_active** | **bool** |  | [optional] 
**maintenance** | **bool** |  | [optional] 
**maintenance_ip_whitelist** | **object[]** |  | [optional] 
**custom_fields** | **object** |  | [optional] 
**payment_method_ids** | **string[]** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**translated** | **object** |  | [optional] 
**currencies** | [**\Rundum\Shopware6\Model\CurrencyFlat**](CurrencyFlat.md) |  | [optional] 
**languages** | [**\Rundum\Shopware6\Model\LanguageFlat**](LanguageFlat.md) |  | [optional] 
**countries** | [**\Rundum\Shopware6\Model\CountryFlat**](CountryFlat.md) |  | [optional] 
**payment_methods** | [**\Rundum\Shopware6\Model\PaymentMethodFlat**](PaymentMethodFlat.md) |  | [optional] 
**shipping_methods** | [**\Rundum\Shopware6\Model\ShippingMethodFlat**](ShippingMethodFlat.md) |  | [optional] 
**type** | [**\Rundum\Shopware6\Model\SalesChannelTypeFlat**](SalesChannelTypeFlat.md) |  | [optional] 
**language** | [**\Rundum\Shopware6\Model\LanguageFlat**](LanguageFlat.md) |  | [optional] 
**customer_group** | [**\Rundum\Shopware6\Model\CustomerGroupFlat**](CustomerGroupFlat.md) |  | [optional] 
**currency** | [**\Rundum\Shopware6\Model\CurrencyFlat**](CurrencyFlat.md) |  | [optional] 
**payment_method** | [**\Rundum\Shopware6\Model\PaymentMethodFlat**](PaymentMethodFlat.md) |  | [optional] 
**shipping_method** | [**\Rundum\Shopware6\Model\ShippingMethodFlat**](ShippingMethodFlat.md) |  | [optional] 
**country** | [**\Rundum\Shopware6\Model\CountryFlat**](CountryFlat.md) |  | [optional] 
**orders** | [**\Rundum\Shopware6\Model\OrderFlat**](OrderFlat.md) |  | [optional] 
**customers** | [**\Rundum\Shopware6\Model\CustomerFlat**](CustomerFlat.md) |  | [optional] 
**domains** | [**\Rundum\Shopware6\Model\SalesChannelDomainFlat**](SalesChannelDomainFlat.md) |  | [optional] 
**system_configs** | [**\Rundum\Shopware6\Model\SystemConfigFlat**](SystemConfigFlat.md) |  | [optional] 
**navigation_category** | [**\Rundum\Shopware6\Model\CategoryFlat**](CategoryFlat.md) |  | [optional] 
**footer_category** | [**\Rundum\Shopware6\Model\CategoryFlat**](CategoryFlat.md) |  | [optional] 
**service_category** | [**\Rundum\Shopware6\Model\CategoryFlat**](CategoryFlat.md) |  | [optional] 
**product_visibilities** | [**\Rundum\Shopware6\Model\ProductVisibilityFlat**](ProductVisibilityFlat.md) |  | [optional] 
**hreflang_default_domain** | [**\Rundum\Shopware6\Model\SalesChannelDomainFlat**](SalesChannelDomainFlat.md) |  | [optional] 
**mail_header_footer** | [**\Rundum\Shopware6\Model\MailHeaderFooterFlat**](MailHeaderFooterFlat.md) |  | [optional] 
**newsletter_recipients** | [**\Rundum\Shopware6\Model\NewsletterRecipientFlat**](NewsletterRecipientFlat.md) |  | [optional] 
**mail_templates** | [**\Rundum\Shopware6\Model\MailTemplateSalesChannelFlat**](MailTemplateSalesChannelFlat.md) |  | [optional] 
**number_range_sales_channels** | [**\Rundum\Shopware6\Model\NumberRangeSalesChannelFlat**](NumberRangeSalesChannelFlat.md) |  | [optional] 
**promotion_sales_channels** | [**\Rundum\Shopware6\Model\PromotionSalesChannelFlat**](PromotionSalesChannelFlat.md) |  | [optional] 
**document_base_config_sales_channels** | [**\Rundum\Shopware6\Model\DocumentBaseConfigSalesChannelFlat**](DocumentBaseConfigSalesChannelFlat.md) |  | [optional] 
**product_reviews** | [**\Rundum\Shopware6\Model\ProductReviewFlat**](ProductReviewFlat.md) |  | [optional] 
**seo_urls** | [**\Rundum\Shopware6\Model\SeoUrlFlat**](SeoUrlFlat.md) |  | [optional] 
**seo_url_templates** | [**\Rundum\Shopware6\Model\SeoUrlTemplateFlat**](SeoUrlTemplateFlat.md) |  | [optional] 
**main_categories** | [**\Rundum\Shopware6\Model\MainCategoryFlat**](MainCategoryFlat.md) |  | [optional] 
**product_exports** | [**\Rundum\Shopware6\Model\ProductExportFlat**](ProductExportFlat.md) |  | [optional] 
**analytics** | [**\Rundum\Shopware6\Model\SalesChannelAnalyticsFlat**](SalesChannelAnalyticsFlat.md) |  | [optional] 
**customer_groups_registrations** | [**\Rundum\Shopware6\Model\CustomerGroupFlat**](CustomerGroupFlat.md) |  | [optional] 
**event_actions** | [**\Rundum\Shopware6\Model\EventActionFlat**](EventActionFlat.md) |  | [optional] 
**bound_customers** | [**\Rundum\Shopware6\Model\CustomerFlat**](CustomerFlat.md) |  | [optional] 
**wishlists** | [**\Rundum\Shopware6\Model\CustomerWishlistFlat**](CustomerWishlistFlat.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

