# OrderFlat

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**version_id** | **string** |  | [optional] 
**auto_increment** | **int** |  | [optional] 
**order_number** | **string** |  | [optional] 
**billing_address_id** | **string** |  | 
**billing_address_version_id** | **string** |  | [optional] 
**currency_id** | **string** |  | 
**language_id** | **string** |  | 
**sales_channel_id** | **string** |  | 
**order_date_time** | [**\DateTime**](\DateTime.md) |  | 
**order_date** | **string** |  | [optional] 
**price** | [**\Rundum\Shopware6\Model\OrderPrice**](OrderPrice.md) |  | [optional] 
**amount_total** | **float** |  | [optional] 
**amount_net** | **float** |  | [optional] 
**position_price** | **float** |  | [optional] 
**tax_status** | **string** |  | [optional] 
**shipping_costs** | [**\Rundum\Shopware6\Model\OrderShippingCosts**](OrderShippingCosts.md) |  | [optional] 
**shipping_total** | **float** |  | [optional] 
**currency_factor** | **float** |  | 
**deep_link_code** | **string** |  | [optional] 
**affiliate_code** | **string** |  | [optional] 
**campaign_code** | **string** |  | [optional] 
**customer_comment** | **string** |  | [optional] 
**state_id** | **string** |  | 
**rule_ids** | **string[]** |  | [optional] 
**custom_fields** | **object** |  | [optional] 
**created_by_id** | **string** |  | [optional] 
**updated_by_id** | **string** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**state_machine_state** | [**\Rundum\Shopware6\Model\StateMachineStateFlat**](StateMachineStateFlat.md) |  | [optional] 
**order_customer** | [**\Rundum\Shopware6\Model\OrderCustomerFlat**](OrderCustomerFlat.md) |  | [optional] 
**currency** | [**\Rundum\Shopware6\Model\CurrencyFlat**](CurrencyFlat.md) |  | [optional] 
**language** | [**\Rundum\Shopware6\Model\LanguageFlat**](LanguageFlat.md) |  | [optional] 
**sales_channel** | [**\Rundum\Shopware6\Model\SalesChannelFlat**](SalesChannelFlat.md) |  | [optional] 
**addresses** | [**\Rundum\Shopware6\Model\OrderAddressFlat**](OrderAddressFlat.md) |  | [optional] 
**billing_address** | [**\Rundum\Shopware6\Model\OrderAddressFlat**](OrderAddressFlat.md) |  | [optional] 
**deliveries** | [**\Rundum\Shopware6\Model\OrderDeliveryFlat**](OrderDeliveryFlat.md) |  | [optional] 
**line_items** | [**\Rundum\Shopware6\Model\OrderLineItemFlat**](OrderLineItemFlat.md) |  | [optional] 
**transactions** | [**\Rundum\Shopware6\Model\OrderTransactionFlat**](OrderTransactionFlat.md) |  | [optional] 
**documents** | [**\Rundum\Shopware6\Model\DocumentFlat**](DocumentFlat.md) |  | [optional] 
**tags** | [**\Rundum\Shopware6\Model\TagFlat**](TagFlat.md) |  | [optional] 
**created_by** | [**\Rundum\Shopware6\Model\UserFlat**](UserFlat.md) |  | [optional] 
**updated_by** | [**\Rundum\Shopware6\Model\UserFlat**](UserFlat.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

