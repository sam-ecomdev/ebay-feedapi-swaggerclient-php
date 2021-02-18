# Task

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**completion_date** | **string** | The timestamp when the task went into the COMPLETED or COMPLETED_WITH_ERROR state. This state means that eBay has compiled the report for the seller based on the seller&amp;rsquo;s filter criteria, and the seller can run a getResultFile call to download the report. | [optional] 
**creation_date** | **string** | The date the task was created. | [optional] 
**detail_href** | **string** | The path to the call URI used to retrieve the task. This field points to the GetOrderTask URI if the task is for LMS_ORDER_REPORT or will be null if this task is for LMS_ORDER_ACK. | [optional] 
**feed_type** | **string** | The feed type associated with the task. | [optional] 
**schema_version** | **string** | The schema version number associated with the task. | [optional] 
**status** | **string** | The enumeration value that indicates the state of the task that was submitted in the request. See FeedStatusEnum for information. The values COMPLETED and COMPLETED_WITH_ERROR indicate the Order Report file is ready to download. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/feed/types/api:FeedStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**task_id** | **string** | The ID of the task that was submitted in the request. | [optional] 
**upload_summary** | [**\SwaggerEbayFeedApi\Client\Model\UploadSummary**](UploadSummary.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


