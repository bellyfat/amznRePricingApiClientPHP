<?php
/**
 * RepricingBuyBoxSettingsApi
 * PHP version 5
 *
 * @category Class
 * @package  eSagu\Amzn\RePricing\V1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * eSagu amzn RePricing API
 *
 * eSagu API to reprice items on amazon.
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Api;

use \eSagu\Amzn\RePricing\V1\ApiClient;
use \eSagu\Amzn\RePricing\V1\ApiException;
use \eSagu\Amzn\RePricing\V1\Configuration;
use \eSagu\Amzn\RePricing\V1\ObjectSerializer;

/**
 * RepricingBuyBoxSettingsApi Class Doc Comment
 *
 * @category Class
 * @package  eSagu\Amzn\RePricing\V1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RepricingBuyBoxSettingsApi
{
    /**
     * API Client
     *
     * @var \eSagu\Amzn\RePricing\V1\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \eSagu\Amzn\RePricing\V1\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\eSagu\Amzn\RePricing\V1\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \eSagu\Amzn\RePricing\V1\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \eSagu\Amzn\RePricing\V1\ApiClient $apiClient set the API client
     *
     * @return RepricingBuyBoxSettingsApi
     */
    public function setApiClient(\eSagu\Amzn\RePricing\V1\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation callList
     *
     * Get all user service's buy box settings.
     *
     * @throws \eSagu\Amzn\RePricing\V1\ApiException on non-2xx response
     * @return \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO[]
     */
    public function callList()
    {
        list($response) = $this->callListWithHttpInfo();
        return $response;
    }

    /**
     * Operation callListWithHttpInfo
     *
     * Get all user service's buy box settings.
     *
     * @throws \eSagu\Amzn\RePricing\V1\ApiException on non-2xx response
     * @return array of \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO[], HTTP status code, HTTP response headers (array of strings)
     */
    public function callListWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/buy-box-settings";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO[]',
                '/buy-box-settings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation delete
     *
     * Delete buy box settings by id.
     *
     * @param int $buy_box_settings_id  (required)
     * @throws \eSagu\Amzn\RePricing\V1\ApiException on non-2xx response
     * @return void
     */
    public function delete($buy_box_settings_id)
    {
        list($response) = $this->deleteWithHttpInfo($buy_box_settings_id);
        return $response;
    }

    /**
     * Operation deleteWithHttpInfo
     *
     * Delete buy box settings by id.
     *
     * @param int $buy_box_settings_id  (required)
     * @throws \eSagu\Amzn\RePricing\V1\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteWithHttpInfo($buy_box_settings_id)
    {
        // verify the required parameter 'buy_box_settings_id' is set
        if ($buy_box_settings_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $buy_box_settings_id when calling delete');
        }
        // parse inputs
        $resourcePath = "/buy-box-settings/{buyBoxSettingsId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($buy_box_settings_id !== null) {
            $resourcePath = str_replace(
                "{" . "buyBoxSettingsId" . "}",
                $this->apiClient->getSerializer()->toPathValue($buy_box_settings_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/buy-box-settings/{buyBoxSettingsId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation get
     *
     * Get the buy box settings specified by it's id.
     *
     * @param int $buy_box_settings_id  (required)
     * @throws \eSagu\Amzn\RePricing\V1\ApiException on non-2xx response
     * @return \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO
     */
    public function get($buy_box_settings_id)
    {
        list($response) = $this->getWithHttpInfo($buy_box_settings_id);
        return $response;
    }

    /**
     * Operation getWithHttpInfo
     *
     * Get the buy box settings specified by it's id.
     *
     * @param int $buy_box_settings_id  (required)
     * @throws \eSagu\Amzn\RePricing\V1\ApiException on non-2xx response
     * @return array of \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWithHttpInfo($buy_box_settings_id)
    {
        // verify the required parameter 'buy_box_settings_id' is set
        if ($buy_box_settings_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $buy_box_settings_id when calling get');
        }
        // parse inputs
        $resourcePath = "/buy-box-settings/{buyBoxSettingsId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($buy_box_settings_id !== null) {
            $resourcePath = str_replace(
                "{" . "buyBoxSettingsId" . "}",
                $this->apiClient->getSerializer()->toPathValue($buy_box_settings_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO',
                '/buy-box-settings/{buyBoxSettingsId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation post
     *
     * Adds new buy box settings.
     *
     * @param \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO $body  (optional)
     * @throws \eSagu\Amzn\RePricing\V1\ApiException on non-2xx response
     * @return void
     */
    public function post($body = null)
    {
        list($response) = $this->postWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation postWithHttpInfo
     *
     * Adds new buy box settings.
     *
     * @param \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO $body  (optional)
     * @throws \eSagu\Amzn\RePricing\V1\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function postWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/buy-box-settings";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/buy-box-settings'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation put
     *
     * Edit buy box settings by id.
     *
     * @param int $buy_box_settings_id  (required)
     * @param \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO $body  (optional)
     * @throws \eSagu\Amzn\RePricing\V1\ApiException on non-2xx response
     * @return void
     */
    public function put($buy_box_settings_id, $body = null)
    {
        list($response) = $this->putWithHttpInfo($buy_box_settings_id, $body);
        return $response;
    }

    /**
     * Operation putWithHttpInfo
     *
     * Edit buy box settings by id.
     *
     * @param int $buy_box_settings_id  (required)
     * @param \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingBuyBoxSettingsDTO $body  (optional)
     * @throws \eSagu\Amzn\RePricing\V1\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function putWithHttpInfo($buy_box_settings_id, $body = null)
    {
        // verify the required parameter 'buy_box_settings_id' is set
        if ($buy_box_settings_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $buy_box_settings_id when calling put');
        }
        // parse inputs
        $resourcePath = "/buy-box-settings/{buyBoxSettingsId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($buy_box_settings_id !== null) {
            $resourcePath = str_replace(
                "{" . "buyBoxSettingsId" . "}",
                $this->apiClient->getSerializer()->toPathValue($buy_box_settings_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/buy-box-settings/{buyBoxSettingsId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
