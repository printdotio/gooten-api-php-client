<?php
/**
 * AddressvalidationApi
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
 * AddressvalidationApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddressvalidationApi
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
     * @return AddressvalidationApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * addressvalidation
     *
     * Validates an address and returns a suggested address (if available) and a validation score.
     *
     * @param string $line1 Address line1. (optional)
     * @param string $line2 Address line2. (optional)
     * @param string $city Address city. (optional)
     * @param string $state Address state. (optional)
     * @param string $postal_code Address postal code/zip. (optional)
     * @param string $country_code Address country code. (optional)
     * @return \Swagger\Client\Model\Result
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function addressvalidation($line1 = null, $line2 = null, $city = null, $state = null, $postal_code = null, $country_code = null)
    {
        list($response, $statusCode, $httpHeader) = $this->addressvalidationWithHttpInfo ($line1, $line2, $city, $state, $postal_code, $country_code);
        return $response; 
    }


    /**
     * addressvalidationWithHttpInfo
     *
     * Validates an address and returns a suggested address (if available) and a validation score.
     *
     * @param string $line1 Address line1. (optional)
     * @param string $line2 Address line2. (optional)
     * @param string $city Address city. (optional)
     * @param string $state Address state. (optional)
     * @param string $postal_code Address postal code/zip. (optional)
     * @param string $country_code Address country code. (optional)
     * @return Array of \Swagger\Client\Model\Result, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function addressvalidationWithHttpInfo($line1 = null, $line2 = null, $city = null, $state = null, $postal_code = null, $country_code = null)
    {
        
  
        // parse inputs
        $resourcePath = "/addressvalidation/";
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
        
        if ($line1 !== null) {
            $queryParams['line1'] = $this->apiClient->getSerializer()->toQueryValue($line1);
        }// query params
        
        if ($line2 !== null) {
            $queryParams['line2'] = $this->apiClient->getSerializer()->toQueryValue($line2);
        }// query params
        
        if ($city !== null) {
            $queryParams['city'] = $this->apiClient->getSerializer()->toQueryValue($city);
        }// query params
        
        if ($state !== null) {
            $queryParams['state'] = $this->apiClient->getSerializer()->toQueryValue($state);
        }// query params
        
        if ($postal_code !== null) {
            $queryParams['postalCode'] = $this->apiClient->getSerializer()->toQueryValue($postal_code);
        }// query params
        
        if ($country_code !== null) {
            $queryParams['countryCode'] = $this->apiClient->getSerializer()->toQueryValue($country_code);
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
                $headerParams, '\Swagger\Client\Model\Result'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\Result', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Result', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}