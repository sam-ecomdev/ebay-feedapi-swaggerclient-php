# SwaggerEbayFeedApi\Client\TaskApi

All URIs are relative to *https://api.ebay.com/sell/feed/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTask**](TaskApi.md#createTask) | **POST** /task | 
[**getInputFile**](TaskApi.md#getInputFile) | **GET** /task/{task_id}/download_input_file | 
[**getResultFile**](TaskApi.md#getResultFile) | **GET** /task/{task_id}/download_result_file | 
[**getTask**](TaskApi.md#getTask) | **GET** /task/{task_id} | 
[**getTasks**](TaskApi.md#getTasks) | **GET** /task | 
[**uploadFile**](TaskApi.md#uploadFile) | **POST** /task/{task_id}/upload_file | 


# **createTask**
> createTask($body, $x_ebay_c_marketplace_id)



This method creates an upload task or a download task without filter criteria. When using this method, specify the feedType and the feed file schemaVersion. The feed type specified sets the task as a download or an upload task. For details about the upload and download flows, see Working with Order Feeds in the Selling Integration Guide. Note: The scope depends on the feed type. An error message results when an unsupported scope or feed type is specified. The following list contains this method's authorization scopes and their corresponding feed types: https://api.ebay.com/oauth/api_scope/sell.inventory: None* https://api.ebay.com/oauth/api_scope/sell.fulfillment: LMS_ORDER_ACK (specify for upload tasks), LMS_ORDER_REPORT (specify for download tasks) https://api.ebay.com/oauth/api_scope/sell.marketing: None* https://api.ebay.com/oauth/api_scope/commerce.catalog.readonly: None* * Reserved for future release

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = SwaggerEbayFeedApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SwaggerEbayFeedApi\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SwaggerEbayFeedApi\Client\Model\CreateTaskRequest(); // \SwaggerEbayFeedApi\Client\Model\CreateTaskRequest | description not needed
$x_ebay_c_marketplace_id = "x_ebay_c_marketplace_id_example"; // string | The ID of the eBay marketplace where the item is hosted. Note: This value is case sensitive. For example: X-EBAY-C-MARKETPLACE-ID = EBAY_US This identifies the eBay marketplace that applies to this task. See MarketplaceIdEnum.

try {
    $apiInstance->createTask($body, $x_ebay_c_marketplace_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->createTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SwaggerEbayFeedApi\Client\Model\CreateTaskRequest**](../Model/CreateTaskRequest.md)| description not needed |
 **x_ebay_c_marketplace_id** | **string**| The ID of the eBay marketplace where the item is hosted. Note: This value is case sensitive. For example: X-EBAY-C-MARKETPLACE-ID &#x3D; EBAY_US This identifies the eBay marketplace that applies to this task. See MarketplaceIdEnum. | [optional]

### Return type

void (empty response body)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInputFile**
> \SwaggerEbayFeedApi\Client\Model\StreamingOutput getInputFile($task_id)



This method downloads the file previously uploaded using uploadFile. Specify the task_id from the uploadFile call. Note: This method only applies to the LMS_ORDER_ACK feed type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = SwaggerEbayFeedApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SwaggerEbayFeedApi\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = "task_id_example"; // string | The task ID associated with the file to be downloaded.

try {
    $result = $apiInstance->getInputFile($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getInputFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| The task ID associated with the file to be downloaded. |

### Return type

[**\SwaggerEbayFeedApi\Client\Model\StreamingOutput**](../Model/StreamingOutput.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResultFile**
> \SwaggerEbayFeedApi\Client\Model\StreamingOutput getResultFile($task_id)



This method retrieves the generated file that is associated with the specified task ID. The response of this call is a compressed or uncompressed CSV, XML, or JSON file, with the applicable file extension (for example: csv.gz). For details about how this method is used, see see Working with Order Feeds in the Selling Integration Guide. Note: The status of the task to retrieve must be in the COMPLETED or COMPLETED_WITH_ERROR state before this method can retrieve the file. You can use the getTask or getTasks method to retrieve the status of the task.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = SwaggerEbayFeedApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SwaggerEbayFeedApi\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = "task_id_example"; // string | The ID of the task associated with the file you want to download. This ID was generated when the task was created.

try {
    $result = $apiInstance->getResultFile($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getResultFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| The ID of the task associated with the file you want to download. This ID was generated when the task was created. |

### Return type

[**\SwaggerEbayFeedApi\Client\Model\StreamingOutput**](../Model/StreamingOutput.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTask**
> \SwaggerEbayFeedApi\Client\Model\Task getTask($task_id)



This method retrieves the details and status of the specified task. The input is task_id . For details of how this method is used, see Working with Order Feeds in the Selling Integration Guide.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = SwaggerEbayFeedApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SwaggerEbayFeedApi\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = "task_id_example"; // string | The ID of the task. This ID was generated when the task was created.

try {
    $result = $apiInstance->getTask($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| The ID of the task. This ID was generated when the task was created. |

### Return type

[**\SwaggerEbayFeedApi\Client\Model\Task**](../Model/Task.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTasks**
> \SwaggerEbayFeedApi\Client\Model\TaskCollection getTasks($date_range, $feed_type, $limit, $look_back_days, $offset, $schedule_id)



This method returns the details and status for an array of tasks based on a specified feed_type or scheduledId. Specifying both feed_type and scheduledId results in an error. Since schedules are based on feed types, you can specify a schedule (scheduled_id) that returns the needed feed_type. If specifying the feed_type, limit which tasks are returned by specifying filters, such as the creation date range or period of time using look_back_days. Also, by specifying the feed_type, both on-demand and scheduled reports are returned. If specifying a scheduledId, the schedule template (that the schedule ID is based on) determines which tasks are returned (see schedule_id for additional information). Each scheduledId applies to one feed_type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = SwaggerEbayFeedApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SwaggerEbayFeedApi\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_range = "date_range_example"; // string | The tasks creation date range. This range is used to filter the results. The results are filtered to include only tasks with a creation date that is equal to this date or is within specified range. Only tasks that are less than 90 days can be retrieved. Format: UTC For example: Tasks within a range yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ Tasks created on September 8, 2019 2019-09-08T00:00:00.000Z..2019-09-09T00:00:00.000Z Maximum: 90 days
$feed_type = "feed_type_example"; // string | The feed type associated with the tasks to be returned. The only presently supported value is LMS_ORDER_REPORT. Do not use with the scheduled_id parameter. Since schedules are based on feed types, you can specify a schedule (scheduled_id) that returns the needed feed_type.
$limit = 56; // int | The maximum number of tasks that can be returned on each page of the paginated response. Use this parameter in conjunction with the offset parameter to control the pagination of the output. Note: This feature employs a zero-based list, where the first item in the list has an offset of 0. For example, if offset is set to 10 and limit is set to 10, the call retrieves tasks 11 thru 20 from the result set. If this parameter is omitted, the default value is used. Default: 10 Maximum: 500
$look_back_days = 56; // int | The number of previous days in which to search for tasks. Do not use with the date_range parameter. If both date_range and look_back_days are omitted, this parameter's default value is used. Default: 7 Range: 1-90 (inclusive)
$offset = 56; // int | The number of tasks to skip in the result set before returning the first task in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. If this query parameter is not set, the default value is used and the first page of records is returned. Default: 0
$schedule_id = "schedule_id_example"; // string | The schedule ID associated with the task. A schedule periodically generates a report for the feed type specified by the schedule template (see scheduleTemplateId in createSchedule). Do not use with the feed_type parameter.

try {
    $result = $apiInstance->getTasks($date_range, $feed_type, $limit, $look_back_days, $offset, $schedule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_range** | **string**| The tasks creation date range. This range is used to filter the results. The results are filtered to include only tasks with a creation date that is equal to this date or is within specified range. Only tasks that are less than 90 days can be retrieved. Format: UTC For example: Tasks within a range yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ Tasks created on September 8, 2019 2019-09-08T00:00:00.000Z..2019-09-09T00:00:00.000Z Maximum: 90 days | [optional]
 **feed_type** | **string**| The feed type associated with the tasks to be returned. The only presently supported value is LMS_ORDER_REPORT. Do not use with the scheduled_id parameter. Since schedules are based on feed types, you can specify a schedule (scheduled_id) that returns the needed feed_type. | [optional]
 **limit** | **int**| The maximum number of tasks that can be returned on each page of the paginated response. Use this parameter in conjunction with the offset parameter to control the pagination of the output. Note: This feature employs a zero-based list, where the first item in the list has an offset of 0. For example, if offset is set to 10 and limit is set to 10, the call retrieves tasks 11 thru 20 from the result set. If this parameter is omitted, the default value is used. Default: 10 Maximum: 500 | [optional]
 **look_back_days** | **int**| The number of previous days in which to search for tasks. Do not use with the date_range parameter. If both date_range and look_back_days are omitted, this parameter&#39;s default value is used. Default: 7 Range: 1-90 (inclusive) | [optional]
 **offset** | **int**| The number of tasks to skip in the result set before returning the first task in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. If this query parameter is not set, the default value is used and the first page of records is returned. Default: 0 | [optional]
 **schedule_id** | **string**| The schedule ID associated with the task. A schedule periodically generates a report for the feed type specified by the schedule template (see scheduleTemplateId in createSchedule). Do not use with the feed_type parameter. | [optional]

### Return type

[**\SwaggerEbayFeedApi\Client\Model\TaskCollection**](../Model/TaskCollection.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadFile**
> object uploadFile($task_id, $body)



This method associates the specified file with the specified task ID and uploads the input file. After the file has been uploaded the processing of the file begins. Reports often take time to generate and it's common for this method to return an HTTP status of 202, which indicates the report is being generated. Use the getTask with the task ID or getTasks to determine the status of a report. The status flow is QUEUED &gt; IN_PROCESS &gt; COMPLETED or COMPLETED_WITH_ERROR. When the status is COMPLETED or COMPLETED_WITH_ERROR, this indicates the file has been processed and the order report can be downloaded. If there are errors, they will be indicated in the report file. Note: This method only applies to LMS_ORDER_ACK.For details of how this method is used in the upload flow, see Working with Order Feeds in the Selling Integration Guide.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = SwaggerEbayFeedApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SwaggerEbayFeedApi\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = "task_id_example"; // string | The task_id associated with the file that will be uploaded. This ID was generated when the specified task was created.
$body = new \SwaggerEbayFeedApi\Client\Model\FormDataContentDisposition(); // \SwaggerEbayFeedApi\Client\Model\FormDataContentDisposition | 

try {
    $result = $apiInstance->uploadFile($task_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->uploadFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| The task_id associated with the file that will be uploaded. This ID was generated when the specified task was created. |
 **body** | [**\SwaggerEbayFeedApi\Client\Model\FormDataContentDisposition**](../Model/FormDataContentDisposition.md)|  | [optional]

### Return type

**object**

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

