<?php
/**
 * PriceestimateApi
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
 * PriceestimateApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PriceestimateApi
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
     * @return PriceestimateApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * pOSTPriceestimate
     *
     * Get an order price
     *
     * @param \Swagger\Client\Model\Order $order Order to potentially be submitted (required)
     * @param int $version Version of the api being used (required)
     * @param string $source Description of the source-- ios, android, api (required)
     * @return \Swagger\Client\Model\OrderPriceResult
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function pOSTPriceestimate($order, $version, $source)
    {
        list($response, $statusCode, $httpHeader) = $this->pOSTPriceestimateWithHttpInfo ($order, $version, $source);
        return $response; 
    }


    /**
     * pOSTPriceestimateWithHttpInfo
     *
     * Get an order price
     *
     * @param \Swagger\Client\Model\Order $order Order to potentially be submitted (required)
     * @param int $version Version of the api being used (required)
     * @param string $source Description of the source-- ios, android, api (required)
     * @return Array of \Swagger\Client\Model\OrderPriceResult, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function pOSTPriceestimateWithHttpInfo($order, $version, $source)
    {
        
        // verify the required parameter 'order' is set
        if ($order === null) {
            throw new \InvalidArgumentException('Missing the required parameter $order when calling pOSTPriceestimate');
        }
        // verify the required parameter 'version' is set
        if ($version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $version when calling pOSTPriceestimate');
        }
        // verify the required parameter 'source' is set
        if ($source === null) {
            throw new \InvalidArgumentException('Missing the required parameter $source when calling pOSTPriceestimate');
        }
  
        // parse inputs
        $resourcePath = "/priceestimate/v/{version}/source/{source}/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        // path params
        
        if ($version !== null) {
            $resourcePath = str_replace(
                "{" . "version" . "}",
                $this->apiClient->getSerializer()->toPathValue($version),
                $resourcePath
            );
        }// path params
        
        if ($source !== null) {
            $resourcePath = str_replace(
                "{" . "source" . "}",
                $this->apiClient->getSerializer()->toPathValue($source),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($order)) {
            $_tempBody = $order;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\OrderPriceResult'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\OrderPriceResult', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\OrderPriceResult', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}