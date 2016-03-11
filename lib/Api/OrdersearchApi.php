<?php
/**
 * OrdersearchApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * OrdersearchApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrdersearchApi
{

    /**
     * API Client
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://localhost/api');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     * @return OrdersearchApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * gETOrdersearch
     *
     * Search an orders
     *
     * @param string $generic_values Any value which is related to order (partner name, address, phone, couponCode, etc...) (optional)
     * @param string $last_name Partner last name (optional)
     * @param string $email Partner email (optional)
     * @param string $postal_code Billing/Shipping address postal code (optional)
     * @param string $start_date Start date of the date range when order was created (optional)
     * @param string $end_date End date of the date range when order was created (optional)
     * @param string $unique_user_id User Id (optional)
     * @param int $partner_id Partner Id (optional)
     * @param int $page_size How many items to return in reponse. (optional)
     * @param int $page Page number, how many items to skip. (optional)
     * @return \Swagger\Client\Model\SubmittedOrderList
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function gETOrdersearch($generic_values = null, $last_name = null, $email = null, $postal_code = null, $start_date = null, $end_date = null, $unique_user_id = null, $partner_id = null, $page_size = null, $page = null)
    {
        list($response, $statusCode, $httpHeader) = $this->gETOrdersearchWithHttpInfo ($generic_values, $last_name, $email, $postal_code, $start_date, $end_date, $unique_user_id, $partner_id, $page_size, $page);
        return $response; 
    }


    /**
     * gETOrdersearchWithHttpInfo
     *
     * Search an orders
     *
     * @param string $generic_values Any value which is related to order (partner name, address, phone, couponCode, etc...) (optional)
     * @param string $last_name Partner last name (optional)
     * @param string $email Partner email (optional)
     * @param string $postal_code Billing/Shipping address postal code (optional)
     * @param string $start_date Start date of the date range when order was created (optional)
     * @param string $end_date End date of the date range when order was created (optional)
     * @param string $unique_user_id User Id (optional)
     * @param int $partner_id Partner Id (optional)
     * @param int $page_size How many items to return in reponse. (optional)
     * @param int $page Page number, how many items to skip. (optional)
     * @return Array of \Swagger\Client\Model\SubmittedOrderList, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function gETOrdersearchWithHttpInfo($generic_values = null, $last_name = null, $email = null, $postal_code = null, $start_date = null, $end_date = null, $unique_user_id = null, $partner_id = null, $page_size = null, $page = null)
    {
        
  
        // parse inputs
        $resourcePath = "/ordersearch/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        // query params
        
        if ($generic_values !== null) {
            $queryParams['genericValues'] = $this->apiClient->getSerializer()->toQueryValue($generic_values);
        }// query params
        
        if ($last_name !== null) {
            $queryParams['lastName'] = $this->apiClient->getSerializer()->toQueryValue($last_name);
        }// query params
        
        if ($email !== null) {
            $queryParams['email'] = $this->apiClient->getSerializer()->toQueryValue($email);
        }// query params
        
        if ($postal_code !== null) {
            $queryParams['postalCode'] = $this->apiClient->getSerializer()->toQueryValue($postal_code);
        }// query params
        
        if ($start_date !== null) {
            $queryParams['startDate'] = $this->apiClient->getSerializer()->toQueryValue($start_date);
        }// query params
        
        if ($end_date !== null) {
            $queryParams['endDate'] = $this->apiClient->getSerializer()->toQueryValue($end_date);
        }// query params
        
        if ($unique_user_id !== null) {
            $queryParams['uniqueUserId'] = $this->apiClient->getSerializer()->toQueryValue($unique_user_id);
        }// query params
        
        if ($partner_id !== null) {
            $queryParams['partnerId'] = $this->apiClient->getSerializer()->toQueryValue($partner_id);
        }// query params
        
        if ($page_size !== null) {
            $queryParams['pageSize'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }// query params
        
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\SubmittedOrderList'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\SubmittedOrderList', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\SubmittedOrderList', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}