# SwaggerEbayFeedApi\Client\OrderTaskApi

All URIs are relative to *https://api.ebay.com/sell/feed/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrderTask**](OrderTaskApi.md#createOrderTask) | **POST** /order_task | 
[**getOrderTask**](OrderTaskApi.md#getOrderTask) | **GET** /order_task/{task_id} | 
[**getOrderTasks**](OrderTaskApi.md#getOrderTasks) | **GET** /order_task | 


# **createOrderTask**
> createOrderTask($body, $xEBAYCMARKETPLACEID)



This method creates an order download task with filter criteria for the order report. When using this method, specify the feedType, schemaVersion, and filterCriteria for the report. The method returns the location response header containing the getOrderTask call URI to retrieve the order task you just created. The URL includes the eBay-assigned task ID, which you can use to reference the order task. To retrieve the status of the task, use the getOrderTask method to retrieve a single task ID or the getOrderTasks method to retrieve multiple order task IDs. Note: The scope depends on the feed type. An error message results when an unsupported scope or feed type is specified. The following list contains this method's authorization scope and its corresponding feed type: https://api.ebay.com/oauth/api_scope/sell.fulfillment: LMS_ORDER_REPORT For details about how this method is used, see General feed types in the Selling Integration Guide. Note: At this time, the createOrderTask method only supports order creation date filters and not modified order date filters. Do not include the modifiedDateRange filter in your request payload.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = SwaggerEbayFeedApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SwaggerEbayFeedApi\Client\Api\OrderTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SwaggerEbayFeedApi\Client\Model\CreateOrderTaskRequest(); // \SwaggerEbayFeedApi\Client\Model\CreateOrderTaskRequest | description not needed
$xEBAYCMARKETPLACEID = "xEBAYCMARKETPLACEID_example"; // string | The ID of the eBay marketplace where the item is hosted. Note: This value is case sensitive. For example: X-EBAY-C-MARKETPLACE-ID = EBAY_US This identifies the eBay marketplace that applies to this task. See MarketplaceIdEnum.

try {
    $apiInstance->createOrderTask($body, $xEBAYCMARKETPLACEID);
} catch (Exception $e) {
    echo 'Exception when calling OrderTaskApi->createOrderTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SwaggerEbayFeedApi\Client\Model\CreateOrderTaskRequest**](../Model/CreateOrderTaskRequest.md)| description not needed |
 **xEBAYCMARKETPLACEID** | **string**| The ID of the eBay marketplace where the item is hosted. Note: This value is case sensitive. For example: X-EBAY-C-MARKETPLACE-ID &#x3D; EBAY_US This identifies the eBay marketplace that applies to this task. See MarketplaceIdEnum. | [optional]

### Return type

void (empty response body)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderTask**
> \SwaggerEbayFeedApi\Client\Model\OrderTask getOrderTask($taskId)



This method retrieves the task details and status of the specified task. The input is task_id. For details about how this method is used, see Working with Order Feeds in the Selling Integration Guide.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = SwaggerEbayFeedApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SwaggerEbayFeedApi\Client\Api\OrderTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taskId = "taskId_example"; // string | The ID of the task. This ID is generated when the task was created by the createOrderTask method.

try {
    $result = $apiInstance->getOrderTask($taskId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTaskApi->getOrderTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskId** | **string**| The ID of the task. This ID is generated when the task was created by the createOrderTask method. |

### Return type

[**\SwaggerEbayFeedApi\Client\Model\OrderTask**](../Model/OrderTask.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderTasks**
> \SwaggerEbayFeedApi\Client\Model\OrderTaskCollection getOrderTasks($dateRange, $feedType, $limit, $lookBackDays, $offset, $scheduleId)



This method returns the details and status for an array of order tasks based on a specified feed_type or scheduled_id. Specifying both feed_type and scheduled_id results in an error. Since schedules are based on feed types, you can specify a schedule (scheduled_id) that returns the needed feed_type. If specifying the feed_type, limit which order tasks are returned by specifying filters such as the creation date range or period of time using look_back_days. If specifying a scheduled_id, the schedule template (that the scheduled_id is based on) determines which order tasks are returned (see scheduled_id for additional information). Each scheduled_id applies to one feed_type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = SwaggerEbayFeedApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SwaggerEbayFeedApi\Client\Api\OrderTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dateRange = "dateRange_example"; // string | The order tasks creation date range. This range is used to filter the results. The filtered results are filtered to include only tasks with a creation date that is equal to this date or is within specified range. Only orders less than 90 days old can be retrieved. Do not use with the look_back_days parameter. Format: UTC For example: Tasks within a range yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ Tasks created on September 8, 2019 2019-09-08T00:00:00.000Z..2019-09-09T00:00:00.000Z
$feedType = "feedType_example"; // string | The feed type associated with the task. The only presently supported value is LMS_ORDER_REPORT. Do not use with the scheduled_id parameter. Since schedules are based on feed types, you can specify a schedule (scheduled_id) that returns the needed feed_type.
$limit = 56; // int | The maximum number of order tasks that can be returned on each page of the paginated response. Use this parameter in conjunction with the offset parameter to control the pagination of the output. Note: This feature employs a zero-based list, where the first item in the list has an offset of 0. For example, if offset is set to 10 and limit is set to 10, the call retrieves order tasks 11 thru 20 from the result set. If this parameter is omitted, the default value is used. Default: 10 Maximum: 500
$lookBackDays = 56; // int | The number of previous days in which to search for tasks. Do not use with the date_range parameter. If both date_range and look_back_days are omitted, this parameter's default value is used. Default: 7 Range: 1-90 (inclusive)
$offset = 56; // int | The number of order tasks to skip in the result set before returning the first order in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. If this query parameter is not set, the default value is used and the first page of records is returned. Default: 0
$scheduleId = "scheduleId_example"; // string | The schedule ID associated with the order task. A schedule periodically generates a report for the feed type specified by the schedule template (see scheduleTemplateId in createSchedule). Do not use with the feed_id parameter.

try {
    $result = $apiInstance->getOrderTasks($dateRange, $feedType, $limit, $lookBackDays, $offset, $scheduleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTaskApi->getOrderTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dateRange** | **string**| The order tasks creation date range. This range is used to filter the results. The filtered results are filtered to include only tasks with a creation date that is equal to this date or is within specified range. Only orders less than 90 days old can be retrieved. Do not use with the look_back_days parameter. Format: UTC For example: Tasks within a range yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ Tasks created on September 8, 2019 2019-09-08T00:00:00.000Z..2019-09-09T00:00:00.000Z | [optional]
 **feedType** | **string**| The feed type associated with the task. The only presently supported value is LMS_ORDER_REPORT. Do not use with the scheduled_id parameter. Since schedules are based on feed types, you can specify a schedule (scheduled_id) that returns the needed feed_type. | [optional]
 **limit** | **int**| The maximum number of order tasks that can be returned on each page of the paginated response. Use this parameter in conjunction with the offset parameter to control the pagination of the output. Note: This feature employs a zero-based list, where the first item in the list has an offset of 0. For example, if offset is set to 10 and limit is set to 10, the call retrieves order tasks 11 thru 20 from the result set. If this parameter is omitted, the default value is used. Default: 10 Maximum: 500 | [optional]
 **lookBackDays** | **int**| The number of previous days in which to search for tasks. Do not use with the date_range parameter. If both date_range and look_back_days are omitted, this parameter&#39;s default value is used. Default: 7 Range: 1-90 (inclusive) | [optional]
 **offset** | **int**| The number of order tasks to skip in the result set before returning the first order in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. If this query parameter is not set, the default value is used and the first page of records is returned. Default: 0 | [optional]
 **scheduleId** | **string**| The schedule ID associated with the order task. A schedule periodically generates a report for the feed type specified by the schedule template (see scheduleTemplateId in createSchedule). Do not use with the feed_id parameter. | [optional]

### Return type

[**\SwaggerEbayFeedApi\Client\Model\OrderTaskCollection**](../Model/OrderTaskCollection.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

