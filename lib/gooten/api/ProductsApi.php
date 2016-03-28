<?php
/**
 * ProductsApi
 * PHP version 5
 *
 * @category Class
 * @package  gooten.api.client
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

namespace gooten.api;

use \gooten.api.client\Configuration;
use \gooten.api.client\ApiClient;
use \gooten.api.client\ApiException;
use \gooten.api.client\ObjectSerializer;

/**
 * ProductsApi Class Doc Comment
 *
 * @category Class
 * @package  gooten.api.client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductsApi
{

    /**
     * API Client
     * @var \gooten.api.client\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \gooten.api.client\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://localhost/api');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \gooten.api.client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \gooten.api.client\ApiClient $apiClient set the API client
     * @return ProductsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * getProducts
     *
     * Get a list of products
     *
     * @param string $country_code The country code where it would be shipped to. For example, &#39;US&#39; or &#39;CA&#39; (required)
     * @param int $version Version of the api being used (required)
     * @param string $source Description of the source-- ios, android, api (required)
     * @param string $partner_billing_key Partner billing key (optional)
     * @param string $all Whether or not to return all available printio products, or just ones in your recipe. Pass &#39;true&#39; or &#39;false&#39;. (optional)
     * @param string $language_code Two-character language code, defaults to \&quot;en\&quot; (english) (optional)
     * @param string $currency_code Three character currency code, defaults to \&quot;USD\&quot; (united states dollar) (optional)
     * @return \gooten.api.model\ProductList
     * @throws \gooten.api.client\ApiException on non-2xx response
     */
    public function getProducts($country_code, $version, $source, $partner_billing_key = null, $all = null, $language_code = null, $currency_code = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getProductsWithHttpInfo ($country_code, $version, $source, $partner_billing_key, $all, $language_code, $currency_code);
        return $response; 
    }


    /**
     * getProductsWithHttpInfo
     *
     * Get a list of products
     *
     * @param string $country_code The country code where it would be shipped to. For example, &#39;US&#39; or &#39;CA&#39; (required)
     * @param int $version Version of the api being used (required)
     * @param string $source Description of the source-- ios, android, api (required)
     * @param string $partner_billing_key Partner billing key (optional)
     * @param string $all Whether or not to return all available printio products, or just ones in your recipe. Pass &#39;true&#39; or &#39;false&#39;. (optional)
     * @param string $language_code Two-character language code, defaults to \&quot;en\&quot; (english) (optional)
     * @param string $currency_code Three character currency code, defaults to \&quot;USD\&quot; (united states dollar) (optional)
     * @return Array of \gooten.api.model\ProductList, HTTP status code, HTTP response headers (array of strings)
     * @throws \gooten.api.client\ApiException on non-2xx response
     */
    public function getProductsWithHttpInfo($country_code, $version, $source, $partner_billing_key = null, $all = null, $language_code = null, $currency_code = null)
    {
        
        // verify the required parameter 'country_code' is set
        if ($country_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $country_code when calling getProducts');
        }
        // verify the required parameter 'version' is set
        if ($version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $version when calling getProducts');
        }
        // verify the required parameter 'source' is set
        if ($source === null) {
            throw new \InvalidArgumentException('Missing the required parameter $source when calling getProducts');
        }
  
        // parse inputs
        $resourcePath = "/v/{version}/source/{source}/products/";
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
        
        if ($partner_billing_key !== null) {
            $queryParams['partnerBillingKey'] = $this->apiClient->getSerializer()->toQueryValue($partner_billing_key);
        }// query params
        
        if ($country_code !== null) {
            $queryParams['countryCode'] = $this->apiClient->getSerializer()->toQueryValue($country_code);
        }// query params
        
        if ($all !== null) {
            $queryParams['all'] = $this->apiClient->getSerializer()->toQueryValue($all);
        }// query params
        
        if ($language_code !== null) {
            $queryParams['languageCode'] = $this->apiClient->getSerializer()->toQueryValue($language_code);
        }// query params
        
        if ($currency_code !== null) {
            $queryParams['currencyCode'] = $this->apiClient->getSerializer()->toQueryValue($currency_code);
        }
        
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
                $headerParams, '\gooten.api.model\ProductList'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\gooten.api.client\ObjectSerializer::deserialize($response, '\gooten.api.model\ProductList', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \gooten.api.client\ObjectSerializer::deserialize($e->getResponseBody(), '\gooten.api.model\ProductList', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
